<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cinestar
 *
 * @author ssaeed7
 */
class CinestarModel {
    //put your code here
    
        public function getWeeklyData($moviename,$locationid) {

        $list = Yii::app()->db->createCommand("select * from showtiming s INNER JOIN locations l on s.location_id = l.id
where s.movies_name= '$moviename' and l.id=$locationid and
(date(showdateetime) BETWEEN  CURDATE() - INTERVAL 1 DAY  and CURDATE() + INTERVAL 5 DAY) order BY IF(hour(showdateetime) < hour(CONCAT(CURDATE(),' 06:00')  ), 1, 0) ,showdateetime asc
                                
                        
                   ")->queryAll();
       
        return $list;
    }

    public function getSliderSequence() {
        //$datetime=date('Y-m-d');
        
        $list = Yii::app()->db->createCommand("select * from addmovie WHERE status=1 order by sliderorder asc 
            
                                
                       
                   ")->queryAll();
        
        
      
        
        
        return $list;
     }

    public function getAllMovieListByLocation($location_id,$date = null) {
        $query_date = date('Y-m-d');
        if($date != null){
            $query_date = $date;
        }
        $query = "select DISTINCT movies_name from showtiming WHERE location_id IN ($location_id) and date(showdateetime) = '$query_date' ";
//        echo $query;
        $showtimes = Yii::app()->db->createCommand($query)->queryAll();

        for($i=0;$i<count($showtimes);$i++){

            $moviename= $showtimes[$i]['movies_name'];

            $list[] = Yii::app()->db->createCommand('select * from addmovie where movie_name="'.$moviename.'" and status=1')->queryAll();

        }

        if(!isset($list)){
            return;
        }

        return $list;
    }

    public function getAllMovieList() {

        $showtimes = Yii::app()->db->createCommand("select DISTINCT movies_name from showtiming WHERE location_id=1 and date(showdateetime)=CURDATE()")->queryAll();
        
        for($i=0;$i<count($showtimes);$i++){

            $moviename= $showtimes[$i]['movies_name'];
		
            $list[] = Yii::app()->db->createCommand('select * from addmovie where movie_name="'.$moviename.'" and status=1')->queryAll();

        }  
        
        if(!isset($list)){
            return;
        }

        return $list;
     }

         public function getMovie() {
        $datetime=date('Y-m-d');
        
        $list = Yii::app()->db->createCommand("select * from addmovie where status=1 
                                
                        
                   ")->queryAll();
        
        return $list;
     }
         public function getAllSites() {
        
        
        $list = Yii::app()->db->createCommand("select * from locations ORDER BY id asc
                                
                        
                   ")->queryAll();
        
        return $list;
     }
         public function getSearchMovieList($moviename,$locationname=false,$calenerdate, $screen) {

             if(!$moviename==false  && $locationname==false){
                 
                  $list['showtime'][]=   Yii::app()->db->createCommand("select * FROM showtiming where  movies_name  like '%$moviename%' and date(showdateetime)='$calenerdate' and screen = '$screen' ORDER BY show_order asc")->queryAll();
                  /*
                  $list['showtime'][]=   Yii::app()->db->createCommand('select * FROM showtiming where  movies_name  like "%$moviename%" and date(showdateetime)="$calenerdate" and screen = "$screen" ORDER BY show_order asc')->queryAll();
                  */
                   if(empty($list['showtime'][0])){
                    
                    return;
                }
                $list['movies'][0] = Yii::app()->db->createCommand('select * from addmovie where movie_name like "%$moviename%" and status=1 ')->queryAll();
                $list['locationids']=  Yii::app()->db->createCommand("select DISTINCT l.id,l.location_name FROM showtiming sh INNER JOIN locations l on l.id=sh.location_id where sh.movies_name like'%$moviename%' and sh.screen = '$screen' ORDER BY l.id asc limit 1 ")->queryAll();
                
                if(count($list['locationids'])>0){
                    
                     $loc_id=1;
//                    for($i=0;$i<count($uniqueids);$i++){
                       $list['showtime'][]=   Yii::app()->db->createCommand("select * FROM showtiming where location_id= $loc_id and movies_name  like '%$moviename%' and date(showdateetime)='$calenerdate' and screen = '$screen' ORDER BY show_order asc")->queryAll();
                       
                       
                       
                    
                }
               
                 
             }
             if(!$moviename==false && !$locationname==false){
                 
               $list['movies'][] = Yii::app()->db->createCommand('select * from addmovie where movie_name like "%$moviename%" and status=1')->queryAll();
               $locname=$locationname;
                $list['locationids']=  Yii::app()->db->createCommand("select  l.id,l.location_name FROM showtiming sh INNER JOIN locations l on l.id=sh.location_id where l.location_name  like'%$locname%'  limit 1")->queryAll();
                  
                if(count($list['locationids'])>0){
                    
                    $locid=$list['locationids'][0]['id'];
                    $list['showtime'][]=   Yii::app()->db->createCommand("select * FROM showtiming where location_id= $locid and movies_name  like '%$moviename%' and date(showdateetime)='$calenerdate' and screen = '$screen' ORDER BY show_order asc")->queryAll();
                       
                }
                    if(empty($list['showtime'][0])){
                    
                    return;
                }
                 
             }
             
            // else
                 
             if($moviename==false && !$locationname==false){

                $locationlist = Yii::app()->db->createCommand("select * from locations where location_name like '%$locationname%' limit 1")->queryAll();
                $locid=$locationlist[0]['id'];
                $list['locationids'] = $locationlist;

               // $list['showtime'][] = Yii::app()->db->createCommand("select * from showtiming where location_id= $locid ")->queryAll();
                $moviename = Yii::app()->db->createCommand("select distinct(movies_name) from showtiming where location_id= $locid and date(showdateetime)='$calenerdate' and screen = '$screen'")->queryAll();

                if(count($moviename)>0){
                
                for($i=0;$i<count($moviename);$i++){
                    
                  $movienamedb=$moviename[$i]['movies_name'];
                $list['movies'][] = Yii::app()->db->createCommand('select * from addmovie where movie_name like "%'.$movienamedb.'%" and status=1 ')->queryAll();
                
                }
               
                for($i=0;$i<count($moviename);$i++){
                  $movienamedb=$moviename[$i]['movies_name'];
                   
               $list['showtime'][] = Yii::app()->db->createCommand("select * from showtiming where location_id= $locid and movies_name like '%$movienamedb%' and date(showdateetime)='$calenerdate' and screen = '$screen' ORDER BY show_order asc")->queryAll();
                
                }
                if(empty($list['showtime'][0])){
                   
                    return;
                }
                }else{
                    return;
                }
                
             } 
             
            // else
                 
             if($moviename==false && $locationname==false){
                 
                 
                    
           
                   $arraymoviename =array();
                   $arraylocationids=array();
                   $arrayshowtime=array();
                   $arrayshowtime = Yii::app()->db->createCommand("select * from showtiming where date(showdateetime)='$calenerdate' and screen = '$screen' ORDER BY show_order asc")->queryAll();
                   
            if(empty($arrayshowtime[0])){
                    
                    return;
                }
            if(count($arrayshowtime)>0){
                
            
                $arraymoviename[] = Yii::app()->db->createCommand("select distinct(movies_name) from showtiming where date(showdateetime)='$calenerdate' and screen = '$screen' ORDER BY show_order asc")->queryAll();
           
                $arraylocationids[] = Yii::app()->db->createCommand("select distinct(location_id) from showtiming where date(showdateetime)='$calenerdate' and screen = '$screen' ORDER BY show_order asc")->queryAll();
                
           for ($i = 0; $i < count($arraymoviename[0]); $i++) {
               
                $movienamedb=$arraymoviename[0][$i]['movies_name'];
                $list['movies'][] = Yii::app()->db->createCommand('select * from addmovie where movie_name like "%'.$movienamedb.'%" and status=1 ')->queryAll();
            }
            for ($i = 0; $i < count($arraylocationids[0]); $i++) {
                $locid=$arraylocationids[0][$i]['location_id'];
             $list['locationids'][] = Yii::app()->db->createCommand("select * from locations where id=$locid")->queryAll();
                
                
                 
            }      
            $locationlist = Yii::app()->db->createCommand('select * from locations where location_name like "%'.$locationname.'%" limit 1')->queryAll();
                $locid=$locationlist[0]['id'];
                $list['locationids'] = $locationlist;
            
            for ($i = 0; $i < count($arraymoviename[0]); $i++) {
                $moviesname=$arraymoviename[0][$i]['movies_name'];
             $list['showtime'][] = Yii::app()->db->createCommand("select * from showtiming where movies_name like '%".$moviesname."%' and date(showdateetime)='$calenerdate' and location_id=1  and screen = '$screen' ORDER BY show_order asc")->queryAll();
                   
                 
            }                
           
           
            
            
           }else{
               return ;
           }
             }
        
             
                  
                   
        
        return $list;
     }
         public function getSearchMovieListbyDate($date) {
        
        $list = Yii::app()->db->createCommand("select * from addmovie where date(`timestamp`)='$date' and status=1
                                
                        
                   ")->queryAll();
        
        return $list;
     }

    public function getMovieById($id) {

        return Yii::app()->db->createCommand("select * from addmovie where id ='$id'  and status=1")->queryAll();

    }

     public function getUpComingMovieList() {
        
        $list = Yii::app()->db->createCommand("select * from upcoming_movies 
                                
                        
                   ")->queryAll();
        
        return $list;
     }
     public function getShowTimings($moviename,$locationid,$date = null) {

//            echo $locationid;
     	//$moviename = htmlentities($moviename, ENT_QUOTES);
         $query_date = date('Y-m-d');

         if($date != null){
             $query_date = $date;
         }

         if(isset($locationid)&&$locationid!='' && isset($moviename)&&$moviename!='' ) {

             $list =   Yii::app()->db->createCommand("select * FROM showtiming where movies_name like'%$moviename%' and location_id IN ($locationid) and screen = 1 and date(showdateetime)='$query_date'  order by  IF(hour(showdateetime) < hour(CONCAT('$query_date',' 06:00')  ), 1, 0) ,showdateetime asc")->queryAll();

         }else
             if(isset($locationid)&&$locationid!=''&& !isset($moviename)&&!$moviename!='') {
                 $list =   Yii::app()->db->createCommand("select * FROM showtiming where location_id IN ($locationid) and screen = 1 and date(showdateetime)='$query_date' order by  IF(hour(showdateetime) < hour(CONCAT('$query_date',' 06:00')  ), 1, 0) ,showdateetime asc")->queryAll();
             }else
                 if(!isset($locationid)&&$locationid==''&& isset($moviename)) {
                     $list =   Yii::app()->db->createCommand("select * FROM showtiming where movies_name like'%$moviename%' and screen = 1 and date(showdateetime)='$query_date' order by  IF(hour(showdateetime) < hour(CONCAT('$query_date',' 06:00')  ), 1, 0) ,showdateetime asc")->queryAll();
                 }


         return $list;
        
    }
}