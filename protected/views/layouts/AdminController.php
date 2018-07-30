<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author ssaeed7
 */
class AdminController extends Controller {
    //put your code here
    public $myvariable;
    
 
     
      public function actionCsvFile() {

        $this->layout = '/layouts/adminlayout';
        $this->render('/admin/filedownloader');
    }

    public function actionCsv() {
        header("Content-Type: text/csv");
        header("Content-Disposition: attachment; filename=Sms List " . date("Y-m-d h:i:s a") . ".csv");

        header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
        $adminModel = new adminModel();
        $location = '';
        if(isset($_POST['cinestar-township']))
            $location = 'Cinestar Township';
        if(isset($_POST['cinestar-taj']))
            $location = 'Cinestar TAJ';
        if(isset($_POST['cinestar-multan']))
            $location = 'Cinestar Multan';
        if(isset($_POST['cinestar-xinhua']))
            $location = 'Cinestar Xinhua Mall';
        if(isset($_POST['other']))
            $location = 'Other';

        $results = $adminModel->createCSV($location);
        $output = fopen("php://output", "w");
        $resultsarray = array();
        for ($i = 0; $i < count($results); $i++) {

            fputcsv($output, array($results[$i]['mobile_number']));
        }
        fclose($output);
    }

    public function actionContactUs(){

            $adminModel= new adminModel();
            if(isset($_REQUEST['contactustextarea1'])&& isset($_REQUEST['contactustextarea2'])&& isset($_REQUEST['contactustextarea3'])){
                $adress1=$_REQUEST['contactustextarea1'];
                        $title1=$_REQUEST['titlet1'];
                        $logi1=$_REQUEST['long1'];
                        $alti1=$_REQUEST['alti1'];
                        $adress2=$_REQUEST['contactustextarea2'];
                        $title2=$_REQUEST['titlet2'];
                        $logi2=$_REQUEST['long2'];
                        $alti2=$_REQUEST['alti2'];
                        $adress3=$_REQUEST['contactustextarea3'];
                        $title3=$_REQUEST['titlet3'];
                        $logi3=$_REQUEST['long3'];
                        $alti3=$_REQUEST['alti3'];

                $adminModel->updateContactus($adress1,$title1,$logi1,$alti1,$adress2,$title2,$logi2,$alti2,$adress3,$title3,$logi3,$alti3);
                
            }
            $para=$adminModel->contactus();
          $this->layout='/layouts/adminlayout';
          $this->render('/admin/contactus',array('para'=>$para));
            
    
        }
    public function actionAboutUs() {
        
         $adminModel= new adminModel();
        if(isset($_REQUEST['aboutustextarea'])){
             $aboutushtml=   $_REQUEST['aboutustextarea'];
             $adminModel->updateAboutus($aboutushtml);
            
        }
       
        $para=$adminModel->aboutus();
        
               $this->layout='/layouts/adminlayout';
           
          $this->render('/admin/about-us',array('para'=>$para));
    }
   
    public function actionUploadGalleryImage() {
        
        
       
       $foldername= $_REQUEST['foldername'];
        $valid_file=true;
        
         if (isset($_FILES)) {
                if( !Yii::app()->session['galleryUploadimage'] || Yii::app()->session['galleryUploadimage']!=$_FILES){
                        $targetfolder = substr(Yii::app()->basePath,0,-10) . "/gallery/".$foldername."/";
                      
                        
                        $targetfolder = $targetfolder . basename($_FILES['galleryphoto']['name']); //rename file
                        
                         if(!file_exists($targetfolder)) {
                        if ($_FILES['galleryphoto']['size'] > (7024000)) { //can't be larger than 7 MB
                            $valid_file = false;
                            $message = 'Oops!  Your file\'s size is to large.';
                        }
                        if ($valid_file) {
                            move_uploaded_file($_FILES['galleryphoto']['tmp_name'], $targetfolder);
                            $message = 'Congratulations!  Your file was accepted.';
                            Yii::app()->session['galleryUploadimage']=$_FILES;
                        }
                     else {
                        $message = 'Ooops!  Your upload triggered the following error:  ' . $_FILES['sliderpath']['error'];
                    }
                         } else{
                             $message='File already exsist.';
                             
                         }
                }
         }
         $dir=substr(Yii::app()->basePath,0,-10) .'/gallery/'.$foldername;

                        
                    if (is_dir($dir)) {
                    if ($dh = opendir($dir)) {
                        $results = array();
                        
                        while (($file = readdir($dh)) !== false) {
                            if (!is_dir($dir.$file)) {
                              if ($file === '.' or $file === '..') {
                               
                               }else{
                                $results[] = '/gallery/'.$foldername.'/'.$file;
                                    }
                                
                            }
                        }
                        closedir($dh);
                    }
                }

            $this->layout='/layouts/adminlayout';
           
          $this->render('/admin/galleryviewer',array('results'=>$results,'message'=>$message));
                    
    }
    public function actionDeleteFile() {
       $foldername= $_REQUEST['foldername'];
       $imagename= $_REQUEST['imagename'];
        $dir=substr(Yii::app()->basePath,0,-10) .'/gallery/'.$foldername.'/'.$imagename;
        
       if (is_file($dir) === true)
    {
        return unlink($dir);
    }
//       foreach(glob($dir.'*.*') as $file)
//           var_dump ($file);
//            if(is_file($file==$dir.$imagename)){
//                die('ff');
//           // @unlink($file);
//            
//            }
     }

    public function actionDeleteFolder() {
       $foldername= $_REQUEST['foldername'];
        $dir=substr(Yii::app()->basePath,0,-10) .'/gallery/'.$foldername;
       
       $deleted=$this->Delete($dir);
            echo $deleted;
    }
    public function actionAddNewFolder() {
        $this->layout='/layouts/adminlayout';
        $results= array();
        $dir=substr(Yii::app()->basePath,0,-10) .'/gallery/';
        //$results='';
         $ffs = scandir($dir);
        //$results.= '<ol>';
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){
            //$results.= '<li class="title">';
            if(is_dir($dir.'/'.$ff)){
                $results[]= $ff;
                    
            }
            
        }
    }
    //$results.= '</ol>';
          
           
           
          $this->render('/admin/add-new-folder',array('results'=>$results));
            
    }
    public function actionCreateFolder() {
        $foldername=$_REQUEST['foldername'];
        
          if (!file_exists(substr(Yii::app()->basePath,0,-10) .'/gallery/'.$foldername)) {

            mkdir(substr(Yii::app()->basePath,0,-10) .'/gallery/'.$foldername, 0777, true);
            echo $foldername;
//            $this->layout='/layouts/adminlayout';
           
//          $this->render('/admin/gallery'); 
          }
//          else{
//              $this->layout='/layouts/adminlayout';
//              $isExsist=false;
//               $this->render('/admin/add-new-folder',array('isExsist'=>$isExsist));
//          }
           //$targetfolder = substr(Yii::app()->basePath,0,-10) . "//cinestarimages//";
            
    }
    
    public function actionGalleryViewer() {
        $foldername=$_REQUEST['foldername'];
        $dir=substr(Yii::app()->basePath,0,-10) .'/gallery/'.$foldername;

                        
                    if (is_dir($dir)) {
                    if ($dh = opendir($dir)) {
                        $results = array();
                        
                        while (($file = readdir($dh)) !== false) {
                            if (!is_dir($dir.$file)) {
                                 if ($file === '.' or $file === '..'){}  else {
                                     $results[] = '/gallery/'.$foldername.'/'.$file;
    
                                            }
                                
                                
                            }
                        }
                        closedir($dh);
                    }
                }

        $this->layout='/layouts/adminlayout';
           
          $this->render('/admin/galleryviewer',array('results'=>$results));  
            
    }

    public function actionAddWeeklyDeal() {
        $foldername="weekly deals";
        $dir=substr(Yii::app()->basePath,0,-10) .'/gallery/'.$foldername;

                        
                    if (is_dir($dir)) {
                    if ($dh = opendir($dir)) {
                        $results = array();
                        
                        while (($file = readdir($dh)) !== false) {
                            if (!is_dir($dir.$file)) {
                                 if ($file === '.' or $file === '..'){}  else {
                                     $results[] = '/gallery/'.$foldername.'/'.$file;
    
                                            }
                                
                                
                            }
                        }
                        closedir($dh);
                    }
                }

        $this->layout='/layouts/adminlayout';
           
          $this->render('/admin/galleryviewer',array('results'=>$results , 'foldername'=>'weekly deals'));  
            
    }
    public function actionLogout() {
          
          
            Yii::app()->session['username']=null;
             Yii::app()->session['password']=null;
          
            $this->layout='/layouts/empty';
            $this->render('/admin/index');
    }
      public function actionIndex() {
          
          $this->layout='/layouts/empty';
          $this->render('/admin/index');
     
    }
      public function actionUpdatePassword() {
          $adminModel= new adminModel();



 // echo $adminModel->updatePassword($_REQUEST['username'], "oc123");
 // exit;

          $flag=false;
          if(isset($_REQUEST['password1'])&& isset($_REQUEST['password2']) ){
              
           $result= $adminModel->loginAuthentication($_REQUEST['username'], $_REQUEST['oldpas']); 

           if($result==true){
               $adminModel->updatePassword($_REQUEST['username'], $_REQUEST['password1']);
               $this->layout='/layouts/empty';
              $this->render('/admin/index'); 
              $flag=true;
           }
           else{
               $message='Old password is incorecct';
               $this->layout='/layouts/empty';
               $this->render('/admin/update-password',array('message'=>$message));
           }
             
              
          }
          if(!isset($message) && $flag==false){
          $this->layout='/layouts/empty';
               $this->render('/admin/update-password');
          }
      }
      public function actionForgotPassword() {
          
          $this->layout='/layouts/empty';
          $this->render('/admin/forgot-password');
      }
      
      public function actionAuthenticate() {
         
          
          $adminModel= new adminModel();
          $username=  $_POST['username'];
          $password=  $_POST['password'];
//         $salt = openssl_random_pseudo_bytes(22);
//            $salt = '$2a$%13$' . strtr(base64_encode($salt), array('_' => '.', '~' => '/'));
// $password_hash = crypt($password, $salt);
//   
//    
//  var_dump($password_hash);die();
         $result= $adminModel->loginAuthentication($username, $password);
         if($result==true){
             Yii::app()->session['username']=$username;
             Yii::app()->session['password']=$password;
             $results=$adminModel->getAllMovieList();
             $locations=$adminModel->getAllLocations();
             $dropdownvalue=1;
             



          $this->layout='/layouts/adminlayout';
           Yii::app()->session['locations'] = $locations;
          $this->render('/admin/movie-list',array('results'=>$results,'dropdownvalue'=>$dropdownvalue));
         }else{
          $this->layout='/layouts/empty';
          $this->render('/admin/index',array('loginstatus'=>false,));
         }
          
     
    }
    public function actionSlider() {
       
        $adminmodel=new adminModel();
        
        $adminmodel->updateSlider($_POST['slidermovie'], $_POST['slider']);
        $this->actionMovieOrder();
        
    }
      public function actionAddMovie() {
          
          if (isset($_FILES)) {
            $targetfolder = '';
            $valid_file = true;
            if (isset($_FILES['sliderpath'])) {
                if ($_FILES['sliderpath']['name']) {
                    if (!$_FILES['sliderpath']['error']) {
                        
                        
                        
                        
//                        $targetfolder = substr(Yii::app()->basePath,0,-10) . "\\cinestarimages\\";
                        $targetfolder = substr(Yii::app()->basePath,0,-10) . "//cinestarimages//";
                        $dbtargetfolder = "/cinestarimages/";

// $dbtargetfolder = Yii::app()->request->baseUrl . "/cinestarimages/";                        

                        $targetfolder = $targetfolder . basename($_FILES['sliderpath']['name']); //rename file
                        $dbtargetfolder = $dbtargetfolder . basename($_FILES['sliderpath']['name']); //rename file
                        


// echo $dbtargetfolder; exit;

                        if ($_FILES['sliderpath']['size'] > (7024000)) { //can't be larger than 1 MB
                            $valid_file = false;
                            $message = 'Oops!  Your file\'s size is to large.';
                        }
                        if ($valid_file) {
                            move_uploaded_file($_FILES['sliderpath']['tmp_name'], $targetfolder);
                            $message = 'Congratulations!  Your file was accepted.';
                        }
                    } else {
                        $message = 'Ooops!  Your upload triggered the following error:  ' . $_FILES['sliderpath']['error'];
                    }
                }
            }
            if (isset($_FILES['listimg'])) {
                $targetfolderlistimg = '';
                $valid_file = true;
                if ($_FILES['listimg']['name']) {
                    if (!$_FILES['listimg']['error']) {
                        $targetfolderlistimg = substr(Yii::app()->basePath,0,-10) . "//cinestarimages//";
//                        $targetfolderlistimg = substr(Yii::app()->basePath,0,-10) . "\\cinestarimages\\";
                        $dbtargetfolderlistimg =  "/cinestarimages/";

                        $targetfolderlistimg = $targetfolderlistimg . basename($_FILES['listimg']['name']); //rename file
                        $dbtargetfolderlistimg = $dbtargetfolderlistimg . basename($_FILES['listimg']['name']); //rename file
                        
                        if ($_FILES['listimg']['size'] > (7024000)) { //can't be larger than 1 MB
                            $valid_file = false;
                            $message = 'Oops!  Your file\'s size is to large.';
                        }
                        if ($valid_file) {
                            move_uploaded_file($_FILES['listimg']['tmp_name'], $targetfolderlistimg);
                            $message = 'Congratulations!  Your file was accepted.';
                            
                        }
                    } else {
                        $message = 'Ooops!  Your upload triggered the following error:  ' . $_FILES['listimg']['error'];
                        
                    }
                }
            }
        }
        $movietype='2d';
        if(isset($_REQUEST['3d'])&&$_REQUEST['3d']=='1' ){
            $movietype='3d';
        } 
        $adminmodel=  new adminModel();
        $sliderorder=$adminmodel->slideRearrange();
        
        $criteria = new CDbCriteria();
        
        for($i=0;$i<count($sliderorder);$i++){
           // var_dump($sliderorder);
          
          $criteria->addCondition("id=".$sliderorder[$i]['id']);
         $sliderupdatedse=$sliderorder[$i]['sliderorder']+1;
         
         Yii::app()->db->createCommand("update addmovie set sliderorder=$sliderupdatedse where id=".$sliderorder[$i]['id']."")->query();
//         Addmovie::model()->updateAll(array('sliderorder' => $sliderupdatedse,
//                            ), $criteria);  
        }
        
        $addmovie= new Addmovie();     
    	
		$addmovie->movie_name = $_REQUEST['moviename'];
		$addmovie->movie_desc = $_REQUEST['moviedetail'];
		$addmovie->movie_type = $movietype;
		$addmovie->rating = $_REQUEST['rating'];
               $addmovie->videolink = $_REQUEST['videourl'];  
          
                if(isset($dbtargetfolder)&& $dbtargetfolder!=''){$dbtargetfolder;}else{$dbtargetfolder='';}
                if(isset($dbtargetfolderlistimg)&& $dbtargetfolderlistimg!=''){$dbtargetfolderlistimg;}else{$dbtargetfolderlistimg='';}
		$addmovie->slider_img_path = $dbtargetfolder;
		$addmovie->movie_img_path = $dbtargetfolderlistimg;
		$addmovie->status = $_REQUEST['status'];
		$addmovie->timestamp = date('Y-m-d H:i:s');
                
                
		$addmovie->sliderorder =1 ;
		
                $addmovie->save();
		if(!$addmovie->save()){
			print_r($addmovie->getErrors());
		}
                
                $this->actionMovieList();
    }
      public function actionAddMovie1() {
          
         $this->layout='/layouts/adminlayout';
          $this->render('/admin/add-new-movies');
                 
    }
      public function actionSaveUpcomingMovies() {


          $targetfolder='';
          //if they DID upload a file...
          $valid_file = true;
          $dbtargetfolder='';
        if ($_FILES['photo']['name']) {
            //if no errors...
            if (!$_FILES['photo']['error']) {
//               
                //now is the time to modify the future file name and validate the file
                
                $targetfolder=substr(Yii::app()->basePath,0,-10) . "//cinestarimages//";
//                $targetfolder=substr(Yii::app()->basePath,0,-10) . "\\cinestarimages\\";
                //$dbtargetfolder=Yii::app()->request->baseUrl . "/cinestarimages/";
                $dbtargetfolder="/cinestarimages/";
//                $targetfolder=yii::app->bas;
               $targetfolder = $targetfolder . basename( $_FILES['photo']['name']) ; //rename file

               $dbtargetfolder = $dbtargetfolder . basename( $_FILES['photo']['name']) ; //rename file

                if ($_FILES['photo']['size'] > (7024000)) { //can't be larger than 1 MB
                    $valid_file = false;
                    $message = 'Oops!  Your file\'s size is to large.';
                }

                //if the file has passed the test
                if ($valid_file) {
                    //move it to where we want it to be
                    
                    move_uploaded_file($_FILES['photo']['tmp_name'], $targetfolder);
                   
                    $message = 'Congratulations!  Your file was accepted.';
                }
            }
            //if there is an error...
            else {
                //set that to be the returned message
                $message = 'Ooops!  Your upload triggered the following error:  ' . $_FILES['photo']['error'];
            }
           
        }

        $upcoming= new UpcomingMovies();     

		$upcoming->movie_title = $_POST['movietitle'];
		//$upcoming->external_url = $_POST['externallink'];
		$upcoming->img_url = $dbtargetfolder;
		
		$upcoming->timestamp = date('Y-m-d H:i:s');
		
                $upcoming->save();
		if(!$upcoming->save()){
			print_r($upcoming->getErrors());
		}
                $this->actionUpcomingMovieList();
    }
    
      public function actionUpcomingMovie() {
          
         $this->layout='/layouts/adminlayout';
          $this->render('/admin/upcoming-movies');
    }

    public function actionAddBrandPartner() {

        $this->layout='/layouts/adminlayout';
        $this->render('/admin/brand-partners');
    }

    public function actionSaveBrandPartner()
    {
        $targetfolder = '';
        //if they DID upload a file...
        $valid_file = true;
        $dbtargetfolder = '';
        if ($_FILES['photo']['name']) {
            //if no errors...
            if (!$_FILES['photo']['error']) {
                //now is the time to modify the future file name and validate the file
                $targetfolder = substr(Yii::app()->basePath, 0, -10) . "//cinestarimages//";
                $dbtargetfolder = "/cinestarimages/";
                $targetfolder = $targetfolder . basename($_FILES['photo']['name']); //rename file

                $dbtargetfolder = $dbtargetfolder . basename($_FILES['photo']['name']); //rename file

                if ($_FILES['photo']['size'] > (7024000)) { //can't be larger than 1 MB
                    $valid_file = false;
                    $message = 'Oops!  Your file\'s size is to large.';
                }

                //if the file has passed the test
                if ($valid_file) {
                    //move it to where we want it to be

                    move_uploaded_file($_FILES['photo']['tmp_name'], $targetfolder);

                    $message = 'Congratulations!  Your file was accepted.';
                }
            } //if there is an error...
            else {
                //set that to be the returned message
                $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
            }
        }

        $partner= new BrandPartner();

        $partner->title = $_POST['title'];
        $partner->img_url = $dbtargetfolder;
        $partner->timestamp = date('Y-m-d H:i:s');

        $partner->save();
        if(!$partner->save()){
            print_r($partner->getErrors());
        }
        $this->actionBrandPartnerList();

    }

      public function actionInactivity(){
          $adminModel=new adminModel();
          $sliderorder='';
          $inactivity=$_GET['inactivity'];
          $rowid=$_GET['rowid'];
          if($inactivity=='1'){
              $sliderorder=$adminModel->sliderMaxOrder();
              $sliderorder=$sliderorder[0]['maxorder']+1;
          }else{
              $adminModel->sliderid($rowid);
              
          }
          
          $criteria = new CDbCriteria();
                    $criteria->addCondition("id=".$rowid);
                    Addmovie::model()->updateAll(array('status' => $inactivity,'sliderorder'=>$sliderorder,
                            ), $criteria);
             $moviename=$adminModel->getMoviebyid($rowid);
             $adminModel->deleteALLMovieShowTimings($moviename[0]['movie_name']);
             
          if(isset($inactivity)&&$inactivity=='1'){
              
             
              echo 'true';
          }else{
              
              echo 'false';
          }
          
          
      }
      public function actionEditMovieList(){
         
          
          $adminModel= new adminModel(); 
          $results=$adminModel->getEditableMovie($_POST['hiddenrowid']);
          $this->layout='/layouts/adminlayout';
          Yii::app()->session['hiddenrowideditmovie']=$_POST['hiddenrowid'];
          $this->render('/admin/edit-movie-list',array('results'=>$results));
          
          
      }
      public function actionMovieList() {
          $dropdownvalue='';
          if(isset($_POST['inactivity'])){
             $dropdownvalue=$_POST['inactivity']; 
          }
          
          $adminModel= new adminModel(); 
          
          if(isset($_POST['inactivity'])&&$_POST['inactivity']!=''){
              
             
              $results=$adminModel->getSearchMovieList($_POST['inactivity']);
              
          }else{
              $results=$adminModel->getAllMovieList();
          }
          if(count($results>0)){
              $this->layout='/layouts/adminlayout';
         
                $this->render('/admin/movie-list',array('results'=>$results,'dropdownvalue'=>$dropdownvalue));
          }
          else{
              
               $this->layout='/layouts/adminlayout';
         
                $this->render('/admin/add-new-movies');
          }
         
    }
      public function actionGetEditData() {
         $this->layout='/layouts/adminlayout';
          $this->render('/admin/edit-movie-list');
    }
      public function actionMovieOrder() {
          $adminModel= new adminModel();
          $results=$adminModel->sliderInfo();
         
         $this->layout='/layouts/adminlayout';
          $this->render('/admin/movieorder',array('results'=>$results));
    }
      public function actionUpcomingMovieList() {
          $adminmodel=new adminModel();
          $result=$adminmodel->getUpComingMovieList();

    //      $temp = 0;
   //       $new_results = array();
   //       foreach($result as $my_result){
     //        $result[$temp]['img_url'] = Yii::app()->getBaseUrl(true).$my_result['img_url']; 
   //          $temp++;
 //  }
          
         $this->layout='/layouts/adminlayout';
          $this->render('/admin/upcomingmovielist',array('results'=>$result));
    }

    public function actionBrandPartnerList(){
        $adminmodel=new adminModel();
        $result=$adminmodel->getBrandPartnerList();
        $this->layout='/layouts/adminlayout';
        $this->render('/admin/brandpartnerlist',array('results'=>$result));
    }

    public function actionDeleteBrandPartner(){

        $adminmodel=new adminModel();
        if(isset($_GET['rowid'])){
            $adminmodel->deleteBrandPartner($_GET['rowid']);
            echo 'true';
        }else{
            echo 'false';
        }
    }


      public function actionCinemaxLahore() {
          $datepickerdate=null;

          $adminmodel=new adminModel();
          if(!Yii::app()->session['postobjectcopy'] ||Yii::app()->session['postobjectcopy']!=$_REQUEST){
          if(isset($_REQUEST['todatepicker'])){
            $showtimings= $adminmodel->copySchedule($_REQUEST['todatepicker'],$_REQUEST['fromdatepicker'],$_REQUEST['locationCombo'],$_REQUEST['locationid']);
            $datepickerdate=$_REQUEST['todatepicker'];
            $fromformatdate=date('Y-m-d',strtotime($_REQUEST['fromdatepicker']));
            $showtimings=$adminmodel->getShowTimings($_REQUEST['locationid'],$fromformatdate);
            $location=$_REQUEST['locationCombo'];
            Yii::app()->session['postobjectcopy']=$_REQUEST;
          }
          }
          
          $result=$adminmodel->addGetMoviesResult();
          
          if(count($result)>0){
              
          }else{
              $result='Record not Found.';
          }
          
         // if(isset($_GET['locationid'])){
             //$showtimings=$adminmodel->getShowTimesbyLocation($locationid,$date);
        //  }else{
        
          $dbdatetime='';
          if(isset($_REQUEST['serachdate'])){
              $location=$_REQUEST['locationid'];
              $showtimings=$adminmodel->searchShowTimings($_REQUEST['serachdate'],$location);
          }else if(!isset($_REQUEST['todatepicker'])){
              $location=$_GET['locationid'];
              
          $showtimings=$adminmodel->getShowTimings($location,$dbdatetime);
          
          }
          
          if(isset($_REQUEST['serachdate'])){
              $datepickerdate=$_REQUEST['serachdate'];
          }
                $locationname=$adminmodel->getLocationName($location);
                $this->layout='/layouts/adminlayout';
                 $this->render('/admin/cinemax-lahore',array(
					'model'=>$result,'showtimings'=>$showtimings,'datepickerdate'=>$datepickerdate,'locationname'=>$locationname));
        //  }
    }
      public function actionEditUpcomingMovie() {
          
          $adminmodel=new adminModel();
          $targetfolder='';
         if(isset($_POST['hiddenrowid'])&& isset($_POST['movietitle'])){
             if($_FILES['photo']){
                 
                  
          //if they DID upload a file...
          $valid_file = true;
        if ($_FILES['photo']['name']) {
            //if no errors...
            if (!$_FILES['photo']['error']) {

//              now is the time to modify the future file name and validate the file
//              $targetfolder=substr(Yii::app()->basePath,0,-10) . "\\cinestarimages\\";
                $targetfolder=substr(Yii::app()->basePath,0,-10) . "//cinestarimages//";
                $dbtargetfolder= "/cinestarimages/";
// $dbtargetfolder=Yii::app()->request->baseUrl . "/cinestarimages/";
//                $targetfolder=yii::app->bas;
               $targetfolder = $targetfolder . basename( $_FILES['photo']['name']) ; //rename file
               $dbtargetfolder = $dbtargetfolder . basename( $_FILES['photo']['name']) ; //rename file
               
                if ($_FILES['photo']['size'] > (7024000)) { //can't be larger than 1 MB
                    $valid_file = false;
                    $message = 'Oops!  Your file\'s size is to large.';
                }

                //if the file has passed the test
                if ($valid_file) {
                    //move it to where we want it to be
                    
                    move_uploaded_file($_FILES['photo']['tmp_name'], $targetfolder);
                   
                    $message = 'Congratulations!  Your file was accepted.';
                }
            }
            //if there is an error...
            else {
                //set that to be the returned message
                $message = 'Ooops!  Your upload triggered the following error:  ' . $_FILES['photo']['error'];
            }
                 
             }

             
             if($targetfolder==''){
                 $criteria = new CDbCriteria();
                    $criteria->addCondition("id=".$_POST['hiddenrowid']);
                    UpcomingMovies::model()->updateAll(array('movie_title' => $_POST['movietitle']
                            ), $criteria);
             }else{
              $criteria = new CDbCriteria();
                    $criteria->addCondition("id=".$_POST['hiddenrowid']);
                    UpcomingMovies::model()->updateAll(array('movie_title' => $_POST['movietitle'],
                      'img_url' => $dbtargetfolder
                            ), $criteria);
             }
                    
                 
          $result=$adminmodel->getUpComingMovieList();
          
          
         $this->layout='/layouts/adminlayout';
          $this->render('/admin/upcomingmovielist',array('results'=>$result));
           }  
         }else
         if(isset($_POST['hiddenrowid'])){
          $results=$adminmodel->getEditUpComingMovieList( $_POST['hiddenrowid']);
         $this->layout='/layouts/adminlayout';
          $this->render('/admin/editupcomingmovie',array('results'=>$results));
         }
    
      }
      public function actionSaveShowTimings() {
          
          $adminmodel=new adminModel();
          $location=$_REQUEST['locationid'];
           $date=$_REQUEST['griddatepicker'];       
           $dbformaatdate=date('Y-m-d',strtotime($date));
           
        
          $datetimr=$_REQUEST['griddatepicker'].' '.$_REQUEST['showtime'];
          
          $time = strtotime($datetimr);
            $myFormatForView = date("Y-m-d H:i:s", $time);
         if(!Yii::app()->session['postobject'] ||Yii::app()->session['postobject']!=$_REQUEST){
          
          $showtimings=new Showtiming();
          $showtimings->movies_name=$_REQUEST['saveshowtimecombo'];
          $showtimings->showtime_day=$_REQUEST['Todays_Day'];
          $showtimings->showdateetime=$myFormatForView;
          $showtimings->show_order=isset($_REQUEST['showorder']) ? $_REQUEST['showorder'] : 1;
          $showtimings->screen=isset($_REQUEST['screen']) ? $_REQUEST['screen'] : 1;
          $showtimings->location_id=$location;
          
         $showtimings->save();
         
		if(!$showtimings->save()){
			print_r($showtimings->getErrors());
                }else{
                    Yii::app()->session['postobject']=$_REQUEST;
                }
         }
                $result=$adminmodel->addGetMoviesResult();
                $showtimings=$adminmodel->getShowTimings($location,$dbformaatdate);
                $locationname=$adminmodel->getLocationName($location);
                $this->layout='/layouts/adminlayout';
                 $this->render('/admin/cinemax-lahore',array(
					'model'=>$result,'showtimings'=>$showtimings,'location'=>$location,'locationname'=>$locationname,'datetimr'=>$date));
    }
    
    public function actionGetAjaxRequest() {
         $adminmodel=new adminModel();
        if(isset($_GET['delettion'])){
            $adminmodel->deleteShowTimings($_GET['delettion']);
            echo 'true';
        }else{
            echo 'false';
        }
        
    }

    public function actionDeleteRequest() {
         $adminmodel=new adminModel();
        if(isset($_GET['rowid'])&&isset($_GET['moviename'])){
           $checkmoviestatus= $adminmodel->checkMovieStatus($_GET['rowid']);
          
           if($checkmoviestatus[0]['status']==1){
            $adminmodel->sliderid($_GET['rowid']);
            $adminmodel->deleteMovie($_GET['rowid'],$_GET['moviename']);
           }else{
              $adminmodel->deleteMovie($_GET['rowid'],$_GET['moviename']); 
           }
            echo 'true';
        }else{
            echo 'false';
        }
        
    }
    public function actionUpcomingMovieDeleteRequest() {
         $adminmodel=new adminModel();
        if(isset($_GET['rowid'])){
            $adminmodel->deleteUpcomingMovie($_GET['rowid']);
            echo 'true';
        }else{
            echo 'false';
        }
        
    }
    public function actionEditDataRequest() {
        
        
         $datetimr=$_GET['griddatepicker'].' '.$_GET['timefromgrid'];
           $time = strtotime($datetimr);
            $myFormatForView = date("Y-m-d H:i:s", $time);
         
           
//          $showtimings=new Showtiming();
//          $showtimings->id=$_GET['editrowid'];
//          $showtimings->movies_name=$_GET['moviecombo'];
//          $showtimings->showtime_day=$_GET['dayscombo'];
//          $showtimings->showdateetime=$myFormatForView;
                    $criteria = new CDbCriteria();
//                    $criteria->addCondition("id=".$_GET['editrowid']." and location_id=".$_GET['locationid']);
        $show = isset($_GET['showorder']) ? $_GET['showorder'] : '';
        $screen = isset($_GET['screen']) ? $_GET['screen'] : '';
        $data = array(
            'movies_name' => $_GET['moviecombo'],
            'showtime_day' => $_GET['dayscombo'],
            'showdateetime' => $myFormatForView,
            'show_order' => $show,
            'screen' => $screen
        );
                  $queryresults=  Showtiming::model()->updateByPk($_GET['editrowid'], $data);
                            
                            if ($queryresults == 0) {
                            echo 'true';
                        } else {
                            echo 'false';
                        }

//         $showtimings->save();
//         
//		
        
        
    }
    public function actionUpdateMovie() {
        
        $adminmodel=new adminModel();
        $type='3d';
        $active=0;
        $movietype='2d';
        if(isset($_REQUEST['3d'])&&$_REQUEST['3d']=='1' ){
            
            $movietype='3d';
        } 
        if(isset($_REQUEST['status'])){
            if($_REQUEST['status']=='1'){
                $active=1;
            }else{
                $active=0;
            }
        }
        if (isset($_FILES)) {
            $targetfolder = '';
            $valid_file = true;
            if (isset($_FILES['sliderpath'])) {
                if ($_FILES['sliderpath']['name']) {
                    if (!$_FILES['sliderpath']['error']) {
         
                        
//                        $targetfolder = substr(Yii::app()->basePath,0,-10) . "\\cinestarimages\\";
                        $targetfolder = substr(Yii::app()->basePath,0,-10) . "//cinestarimages//";
                        
                        $dbtargetfolder=Yii::app()->request->baseUrl . "/cinestarimages/";
                        
                        $targetfolder = $targetfolder . basename($_FILES['sliderpath']['name']); //rename file
                        $dbtargetfolder = $dbtargetfolder . basename($_FILES['sliderpath']['name']); //rename file
                        
                        if ($_FILES['sliderpath']['size'] > (7024000)) { //can't be larger than 1 MB
                            $valid_file = false;
                            $message = 'Oops!  Your file\'s size is to large.';
                        }
                        if ($valid_file) {
                            move_uploaded_file($_FILES['sliderpath']['tmp_name'], $targetfolder);
                            $message = 'Congratulations!  Your file was accepted.';
                        }
                    } else {
                        $message = 'Ooops!  Your upload triggered the following error:  ' . $_FILES['sliderpath']['error'];
                    }
                    $criteria = new CDbCriteria();
                    $criteria->addCondition("id=".Yii::app()->session['hiddenrowideditmovie']);
                    Addmovie::model()->updateAll(array('slider_img_path'=>$dbtargetfolder
                            ), $criteria);
                }
                
            }
            if (isset($_FILES['listimg'])) {
                $targetfolderlistimg = '';
                $valid_file = true;
                if ($_FILES['listimg']['name']) {
                    if (!$_FILES['listimg']['error']) {
                        
                                       
                        
//                        $targetfolderlistimg = substr(Yii::app()->basePath,0,-10) . "\\cinestarimages\\";
                        $targetfolderlistimg = substr(Yii::app()->basePath,0,-10) . "//cinestarimages//";
                        $dbtargetfolderlistimg=Yii::app()->request->baseUrl . "/cinestarimages/";
                        $targetfolderlistimg = $targetfolderlistimg . basename($_FILES['listimg']['name']); //rename file
                        $dbtargetfolderlistimg = $dbtargetfolderlistimg . basename($_FILES['listimg']['name']); //rename file
                        if ($_FILES['listimg']['size'] > (7024000)) { //can't be larger than 1 MB
                            $valid_file = false;
                            $message = 'Oops!  Your file\'s size is to large.';
                        }
                        if ($valid_file) {
                            move_uploaded_file($_FILES['listimg']['tmp_name'], $targetfolderlistimg);
                            $message = 'Congratulations!  Your file was accepted.';
                        }
                    } else {
                        $message = 'Ooops!  Your upload triggered the following error:  ' . $_FILES['listimg']['error'];
                    }
                    $criteria = new CDbCriteria();
                    $criteria->addCondition("id=".Yii::app()->session['hiddenrowideditmovie']);
                    Addmovie::model()->updateAll(array('movie_img_path'=>$dbtargetfolderlistimg
                            ), $criteria);
                }
                
            }
        }
        
                    $criteria = new CDbCriteria();
                    $criteria->addCondition("id=".Yii::app()->session['hiddenrowideditmovie']);
                    Addmovie::model()->updateAll(array('movie_name' => $_POST['movietitle'],
                        'movie_desc' => $_POST['movies_desc'],'movie_type' => $movietype,'rating'=> $_POST['rating']
                            ,'status'=>$active,'videolink'=>$_POST['videourl']
                            ), $criteria);
                    if(isset($_POST['inactivity'])&&$_POST['inactivity']!=''){
              
             
              $results=$adminmodel->getSearchMovieList($_POST['inactivity']);
              
          }else{
              $results=$adminmodel->getAllMovieList();
          }
          if(count($results>0)){
              $this->layout='/layouts/adminlayout';
         
                $this->render('/admin/movie-list',array('results'=>$results));
          }
          else{
              
               $this->layout='/layouts/adminlayout';
         
                $this->render('/admin/add-new-movies');
          }
//         $showtimings->save();
//         
//		if(!$showtimings->save()){
//			print_r($showtimings->getErrors());die();
//		}
        
        
    }
    public function actionGetSearch() {
         $adminmodel=new adminModel();
            
//        var_dump($_GET);die();
        
        
    }
    
    function Delete($path)
{
    if (is_dir($path) === true)
    {
        $files = array_diff(scandir($path), array('.', '..'));

        foreach ($files as $file)
        {
           // var_dump($path);
          // var_dump(Delete(realpath($path) . '\\' . $file));die();
            if (is_file(realpath($path) . '\\' . $file) === true)
            {
                 unlink(realpath($path) . '\\' . $file);
            }
          //  Delete(realpath($path) . '\\' . $file);
             
        }

        return rmdir($path);
    }

    else if (is_file($path) === true)
    {
        return unlink($path);
    }

    return false;
}
   
}
