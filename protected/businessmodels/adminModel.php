<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adminModel
 *
 * @author ssaeed7
 */
class adminModel {
    //put your code here
    public function createCSV($location) {
        if($location == 'Other')
            $query = "select mobile_number from subscribe where `status`=1 and location is NULL";
        else
            $query = "select mobile_number from subscribe where `status`=1 and location='$location'";

        $list =   Yii::app()->db->createCommand($query)->queryAll();
        return $list;
    }
    
   public function updateContactus($adress1,$title1,$logi1,$alti1,$adress2,$title2,$logi2,$alti2,$adress3,$title3,$logi3,$alti3) {
      $formathtmlfordb1= ($adress1);
      $formathtmlfordb2= ($adress2);
      $formathtmlfordb3= ($adress3);
    
    $results=Yii::app()->db->createCommand("update contactus set adress1='$formathtmlfordb1',adress2='$formathtmlfordb2',adress3='$formathtmlfordb3'"
            . ",title_adress1='$title1',title_adress2='$title2',title_adress3='$title3'"
            . ",longi_adress1='$logi1',longi_adress2='$logi2',longi_adress3='$logi3'"
            . ",alti_adress1='$alti1',alti_adress2='$alti2',alti_adress3='$alti3'")->query(); 


    }
    
      public function contactus() {
      $list =   Yii::app()->db->createCommand("select * from contactus limit 1")->queryAll();
      return $list;
    
    }
  
      public function updateAboutus($aboutushtml) {
      $formathtmlfordb= urlencode($aboutushtml);
    
    $results=Yii::app()->db->createCommand("update aboutus set paragraph1='$aboutushtml'")->query(); 
    
    }
    
   public function copySchedule($todate,$fromdate,$locationfrom,$locationto){
       $fromformatdate=date('Y-m-d',strtotime($fromdate));
       $toformatdate=date('Y-m-d',strtotime($todate));
       
        $list =   Yii::app()->db->createCommand("select * from showtiming where location_id=$locationfrom and DATE(showdateetime)='$fromformatdate'")->queryAll();
        
        for($i=0;$i<count($list);$i++){
            $time=  explode(' ', $list[$i]['showdateetime']);


            $showtimings = new Showtiming();

            $showtimings->movies_name = $list[$i]['movies_name'];
            $showtimings->showtime_day = date('l',strtotime($toformatdate));
            $showtimings->showdateetime = $toformatdate.' '.$time[1];
            $showtimings->show_order = $list[$i]['show_order'];
            $showtimings->screen = $list[$i]['screen'];
            //$showtimings->location_id = $locationto;
            $showtimings->location_id = $locationto;

            $showtimings->save();

            if (!$showtimings->save()) {
                print_r($showtimings->getErrors());
            }
        }
        
       return $list;
    }
   public function sliderMaxOrder(){
        $list =   Yii::app()->db->createCommand("select MAX(sliderorder) as maxorder from addmovie where status=1 limit 1")->queryAll();
        
       return $list;
    }
   public function sliderInfo(){
        $list =   Yii::app()->db->createCommand("select * from addmovie where `status`=1 ORDER BY `sliderorder` asc")->queryAll();
        
       return $list;
    }
    public function updateSlider($moviesname,$sliderorder) {
        
      
       
  
      for($i=0;$i<count($moviesname);$i++){
          
        
         
         Yii::app()->db->createCommand('update addmovie set sliderorder="'.$sliderorder[$i].'" where movie_name="'.$moviesname[$i].'"')->query();
        }
      
        
    }
	
	public function deleteDineInSlider($id) {
        $list =   Yii::app()->db->createCommand("delete  FROM dine_in_slider where id=$id")->query();
        return $list;
    }
public function deleteDineInMenu($id) {
        $list =   Yii::app()->db->createCommand("delete  FROM dine_in_menu where id=$id")->query();
        return $list;
    }
    public function sliderid($movieid) {
        
      $list1 =   Yii::app()->db->createCommand("select * from addmovie where id=$movieid and `status`=1 limit 1")->queryAll();
      
      
      $list =   Yii::app()->db->createCommand("select * from addmovie where sliderorder>".$list1[0]['sliderorder']." and `status`=1 ORDER BY `sliderorder` asc")->queryAll();
      
      
      for($i=0;$i<count($list);$i++){
         
         if($i==0){ 
            $sliderupdatedse=$list1[0]['sliderorder'];  
         }else{
             $sliderupdatedse=$list[$i]['sliderorder']-1;  
         }
          
          
         
         
         Yii::app()->db->createCommand("update addmovie set sliderorder=$sliderupdatedse where id=".$list[$i]['id']."")->query();  
        }
       
      return $list;
        
    }
    public function slider() {
        
      $list =   Yii::app()->db->createCommand("select * from addmovie where status=1  ORDER BY sliderorder desc")->queryAll();
      return $list;
        
    }
    public function aboutus() {
        
      $list =   Yii::app()->db->createCommand("select * from aboutus limit 1")->queryAll();
      return $list;
        
    }
    public function slideRearrange() {
        
      $list =   Yii::app()->db->createCommand("select * from addmovie where status=1  ORDER BY `timestamp` desc")->queryAll();
      
      return $list;
        
    }
    public function getShowTimesbyLocation() {
        
      $list =   Yii::app()->db->createCommand("select * from addmovie am INNER JOIN showtiming st on am.id=st.movie_id INNER JOIN locations l 

on l.id =st.location_id where st.location_id= 1 and st.movies_name='' ORDER BY st.showdateetime asc")->queryAll();
      return $list;
        
    }
    public function getAllLocations() {
        
      $list =   Yii::app()->db->createCommand("select * from locations ORDER BY id asc
                                
                        
                   ")->queryAll();
      
      return $list;
        
    }
    public function deleteUpcomingMovie($id) {
        
      $list =   Yii::app()->db->createCommand("delete  FROM upcoming_movies  where id=$id
                                
                        
                   ")->query();
      return $list;
        
    }
    public function deleteMovie($id,$name) {
        
      $list =   Yii::app()->db->createCommand("delete  FROM addmovie  where id=$id
                                
                        
                   ")->query();
      $list =   Yii::app()->db->createCommand("delete  FROM showtiming  where movies_name like '%$name%'
                                
                        
                   ")->query();
      return $list;
        
    }
     public function getAllMovieList() {
        
        $list = Yii::app()->db->createCommand("select * from addmovie
                                
                        
                   ")->queryAll();
        
        return $list;
     }

	 public function getAllDineInSliders($flag = -1) {
        
	if($flag == -1){
        $list = Yii::app()->db->createCommand("select * from dine_in_slider
                                
                        
                   ")->queryAll();
	}else{
		$list = Yii::app()->db->createCommand("select * from dine_in_slider where status='1' ")->queryAll();
	}
        
        return $list;
     }

    public function getAllMenus($flag = -1, $menu_id = '-1', $city = '-1') {
        if($flag == -1){
            $list = Yii::app()->db->createCommand("select * from dine_in_menu ")->queryAll();
        }
        else if($flag == 1 and $menu_id != -1 and $city == -1){
            $list = Yii::app()->db->createCommand("select * from dine_in_menu where status='1' and menu_category = '$menu_id'")->queryAll();
        }
        else{
            $list = Yii::app()->db->createCommand("select * from dine_in_menu where status='1' and city = '$city' and menu_category = '$menu_id'")->queryAll();
        }

        return $list;
    }
	public function getEditableSlider($id) {
        
        $list = Yii::app()->db->createCommand("select * from dine_in_slider where id=$id limit 1
                                
                        
                   ")->queryAll();
        
        return $list;
     }

public function getEditableDineInMenu($id) {
        
        $list = Yii::app()->db->createCommand("select * from dine_in_menu where id=$id limit 1
                                
                        
                   ")->queryAll();
        
        return $list;
     }
     public function checkMovieStatus($rowid) {
        
        $list = Yii::app()->db->createCommand("select * from addmovie where id=$rowid limit 1
                                
                        
                   ")->queryAll();
        
        return $list;
     }
     public function getMoviebyid($id) {
        
        $list = Yii::app()->db->createCommand("select * from addmovie where id=$id
                                
                        
                   ")->queryAll();
        
        return $list;
     }
     public function getUpComingMovieList() {
        
        $list = Yii::app()->db->createCommand("select * from upcoming_movies 
                                
                        
                   ")->queryAll();
        
        return $list;
     }

     public function getBrandPartnerList() {
        $list = Yii::app()->db->createCommand("select * from brand_partner")->queryAll();
        return $list;
     }

    public function deleteBrandPartner($id) {
        $list =   Yii::app()->db->createCommand("delete  FROM brand_partner where id=$id")->query();
        return $list;
    }

     public function getLocationName($id) {
        
        $list = Yii::app()->db->createCommand("select * from locations where id=$id
                                
                        
                   ")->queryAll();
        
        return $list;
     }
     public function getEditUpComingMovieList($id) {
        
        $list = Yii::app()->db->createCommand("select * from upcoming_movies where id=$id limit 1 
                                
                        
                   ")->queryAll();
        
        return $list;
     }

    public function getEditBrandPartnerList($id) {

        $list = Yii::app()->db->createCommand("select * from brand_partner where id=$id limit 1


                   ")->queryAll();

        return $list;
    }

     public function getEditableMovie($id) {
        
        $list = Yii::app()->db->createCommand("select * from addmovie where id=$id limit 1
                                
                        
                   ")->queryAll();
        
        return $list;
     }
     public function getSearchMovieList($value) {
        
         if($value=='1' || $value==''){
        $list = Yii::app()->db->createCommand("select * from addmovie where status in('0','1')
                                
                        
         ")->queryAll();
        
         }
         if($value=='2'){
        $list = Yii::app()->db->createCommand("select * from addmovie where status in('1')
                                
                        
         ")->queryAll();
        
         }
         if($value=='3'){
        $list = Yii::app()->db->createCommand("select * from addmovie where status in('0')
                                
                        
         ")->queryAll();
        
         }
        
        return $list;
     }
    
    
   





function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

function decryptIt( $q ) {

    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}
    
    
  
       public function updatePassword($username,$newpassword) {
        $newpassword = $this->encryptIt( $newpassword );
echo "new password is = ".$newpassword;
exit;
    
    $results=Yii::app()->db->createCommand("update login set password='$newpassword' where username='".$username."'")->query(); 
    
    }
    ///////////cinmax lahore
    
    public function loginAuthentication($username, $password) {

        $list = Yii::app()->db->createCommand("SELECT password  from login where username='$username'
                                
                        
                   ")->queryAll();
        $dbpassword=$list[0]['password'];
       
       
        if ($list[0]['password']!='') {
            $encrypted = $this->encryptIt( $password );
            
            //$decrypted = $this->decryptIt( $encrypted );
            
//            var_dump($encrypted);
            //var_dump($decrypted);
                   if ($encrypted === $dbpassword){
                       
                       return true;
                   }
                        // password is correct
                    else{
                        return false;
                    }
            
            
//            $list = Yii::app()->db->createCommand("select count(*) as cnt from login where password='$password'
//                                
//                        
//                   ")->queryAll();
//            if ($list[0]['cnt']!=0) {
//                return true;
//            } else {
//                return false;
//            }
        } else {
            return false;
        }
    }
    public function addNewMovie() {
        
        
        
    }
    public function addGetMoviesResult() {
        
      $list =   Yii::app()->db->createCommand("select id, movie_name,movie_desc,movie_type,rating,`status`, `timestamp` FROM addmovie where `status`=1 ORDER BY `timestamp` desc
                                
                        
                   ")->queryAll();
      return $list;
        
    }
    public function getShowTimings($locationid,$datetime) {
     
        if(isset($datetime) && $datetime!=''){
            
            $showtimesdate=$datetime;
        }else{
            $showtimesdate=date('Y-m-d');
        }
      $list =   Yii::app()->db->createCommand("select sh.id,sh.movies_name,sh.showtime_day,sh.showdateetime,sh.location_id,l.location_name,sh.show_order,sh.screen FROM showtiming sh INNER JOIN locations l on l.id=sh.location_id where sh.location_id=$locationid and date(sh.showdateetime)='$showtimesdate' ORDER BY show_order asc 
                                
                        
                   ")->queryAll();
      
      return $list;
        
    }
    public function deleteShowTimings($id) {
        
      $list =   Yii::app()->db->createCommand("delete  FROM showtiming  where id=$id
                                
                        
                   ")->query();
      return $list;
        
    }
    public function deleteALLMovieShowTimings($name) {
        
      $list =   Yii::app()->db->createCommand("delete  FROM showtiming  where movies_name='$name'
                                
                        
                   ")->query();
      return $list;
        
    }
    public function searchShowTimings($date,$locationid) {
        $time = strtotime($date);
            $myFormatForView = date("Y-m-d", $time);
            
      $list =   Yii::app()->db->createCommand("select sh.id,sh.movies_name,sh.showtime_day,sh.showdateetime,sh.location_id,l.location_name,sh.show_order,sh.screen from showtiming sh INNER JOIN locations l on l.id=sh.location_id where sh.location_id=$locationid and date(sh.showdateetime)='$myFormatForView' ORDER BY show_order asc
                                
                     
                   ")->queryAll();
      
      return $list;
        
    }

}
