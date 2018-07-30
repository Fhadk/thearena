<?php

class CinestarController extends Controller {

    public function actionMembersArea() {
        $adminmodel = new adminModel();
        $para = $adminmodel->getBrandPartnerList();
        $this->render('/cinestar/membersarea', array('para' => $para));
    }

    public function actionFaqs() {
        $this->render('/cinestar/faq');
    }

    public function actionJoinUs() {
        $this->render('/cinestar/joinus');
    }

    public function actionCorporate() {
        $this->render('/cinestar/corporate');
    }

    public function actionSubscribeNumber() {
        if ($_REQUEST['subscribe'] == '1') {
            $subscribe = new Subscribe();
//          $subscribe->name=$_REQUEST['name'];
            $subscribe->mobile_number = $_REQUEST['contactno'];
            $subscribe->status = 1;
            $subscribe->location = $_REQUEST['location'];
            $subscribe->save();
            if (!$subscribe->save()) {
                print_r($subscribe->getErrors());
            }
        } else {
            $criteria = new CDbCriteria();
            $criteria->addCondition("mobile_number=" . $_REQUEST['contactno']);
            $criteria->addCondition("location='" . $_REQUEST['location'] . "'");

            Subscribe::model()->deleteAll($criteria);
        }
    }

    public function actionGalleryViewer() {
        $folder_name = $_POST['foldername'];
        $dir = substr(Yii::app()->basePath, 0, -10) . '//gallery//' . $folder_name;

        $response = array('success' => false);

        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                $results = array();
                $filename = array();

                while (($file = readdir($dh)) !== false) {
                    if (!is_dir($dir . $file)) {
                        if ($file === '.' or $file === '..') {
                            
                        } else {
                            $filename[] = $file;
                            $results[] = '/thearenaoc/gallery/' . $folder_name . '/' . $file;
                        }
                    }
                }
                closedir($dh);
            }
        }

        if ($dir) {
            $response['success'] = true;
            $response['results'] = $results;
            $response['folder_name'] = $folder_name;
            $response['filename'] = $filename;
        }

        echo json_encode($response);

        //$this->render('/cinestar/galleryviewer',array('results'=>$results,'foldername'=>$foldername,'filename'=>$filename));
    }

    public function actionNewsEvents() {
        $results = array();
        $resultsfilename = array();
        $dir = substr(Yii::app()->basePath, 0, -10) . '//gallery//';
        $ffs = scandir($dir);
        foreach ($ffs as $ff) {
            if ($ff != '.' && $ff != '..' && $ff != 'gallery_home') {

                if (is_dir($dir . '/' . $ff)) {
                    $results[] = $ff;

                    if ($dh = opendir($dir . '/' . $ff)) {



                        while (($file = readdir($dh)) !== false) {
                            $firstfilename = array();
                            if (!is_dir($dir . $file)) {
                                if ($file === '.' or $file === '..') {
                                    
                                } else {

                                    $firstfilename[] = $file;
                                }
                            }
                        }


                        if (isset($firstfilename[0])) {
                            $resultsfilename[] = '/gallery/' . $ff . '/' . $firstfilename[0];
                        } else {
                            $resultsfilename[] = '/images/gallery-icon.png';
                        }

                        closedir($dh);
                    }
                }
            }
        }

        $this->render('/cinestar/folders', array('results' => $results, 'resultsfilename' => $resultsfilename));
    }

    public function actionShowTiming() {
        $cinestarModel = new CinestarModel();
        $movielist = $cinestarModel->getAllMovieListByLocation(" '1','3' ");

        $locationid = [1,3]; //also set it from getmovielist method remember it...

        for($index = 0; $index < count($locationid); $index++){
            for ($i = 0; $i < count($movielist); $i++) {
                $showtimings = $cinestarModel->getShowTimings($movielist[$i][0]['movie_name'], $locationid[$index]);
                $movielist[$i]['showtiming'] = $showtimings;
            }
        }

        $locations = $cinestarModel->getAllSites();

//        var_dump($locations[0]);
//        die();

        header('Content-type: application/json');
        echo json_encode($movielist, JSON_PRETTY_PRINT);
        die();

        $this->render('/cinestar/showtiming', array('movielist' => $movielist, 'dateclass' => date('Y-m-d'), 'locations' => $locations));
    }

    public function actionIndex() {
        $cinestarModel = new CinestarModel();
        $movielist = $cinestarModel->getAllMovieList();

        $slidersequence = $cinestarModel->getSliderSequence();
        $movieCombo = $cinestarModel->getMovie();
        $movielist = $cinestarModel->getAllMovieListByLocation(" '1','3' ");
        $movielist_nextday = $cinestarModel->getAllMovieListByLocation(" '1','3' ",date('Y-m-d',strtotime("+1 days")));
        $movielist_secondnextday = $cinestarModel->getAllMovieListByLocation(" '1','3' ",date('Y-m-d',strtotime("+2 days")));
        $movie_names = [];
        $movielistbyname = [];

        $locationid = [1,3]; //also set it from getmovielist method remember it...

//        for($index = 0; $index < count($locationid); $index++){
            for ($i = 0; $i < count($movielist); $i++) {
                $showtimings = $cinestarModel->getShowTimings($movielist[$i][0]['movie_name'], " '1','3' ");
                $movielist[$i]['showtiming'] = $showtimings;
                $movie_names[] = $movielist[$i][0]['movie_name'];
            }
            for ($i = 0; $i < count($movielist_nextday); $i++) {
                $showtimings = $cinestarModel->getShowTimings($movielist_nextday[$i][0]['movie_name'], " '1','3' ",date('Y-m-d',strtotime("+1 days")));
                $movielist_nextday[$i]['showtiming'] = $showtimings;
            }
            for ($i = 0; $i < count($movielist_secondnextday); $i++) {
                $showtimings = $cinestarModel->getShowTimings($movielist_secondnextday[$i][0]['movie_name'], " '1','3' ",date('Y-m-d',strtotime("+2 days")));
                $movielist_secondnextday[$i]['showtiming'] = $showtimings;
            }
//        }

        $movie_names = array_unique($movie_names);

        $upcomingmovies = $cinestarModel->getUpComingMovieList();
        $locations = $cinestarModel->getAllSites();
        $adminmodel = new adminModel();
        $partners = $adminmodel->getBrandPartnerList();
         
        $dine_in = $adminmodel->getAllMenus(-1);
        
        $results = array();
        $resultsfilename = array();
        $dir = substr(Yii::app()->basePath, 0, -10) . '//gallery//';
        $ffs = scandir($dir);
        foreach ($ffs as $ff) {
            if ($ff != '.' && $ff != '..' && $ff != 'gallery_home') {

                if (is_dir($dir . '/' . $ff)) {
                    $results[] = $ff;

                    if ($dh = opendir($dir . '/' . $ff)) {



                        while (($file = readdir($dh)) !== false) {
                            $firstfilename = array();
                            if (!is_dir($dir . $file)) {
                                if ($file === '.' or $file === '..') {
                                    
                                } else {

                                    $firstfilename[] = $file;
                                }
                            }
                        }


                        if (isset($firstfilename[0])) {
                            $resultsfilename[] = '/gallery/' . $ff . '/' . $firstfilename[0];
                        } else {
                            $resultsfilename[] = '/images/gallery-icon.png';
                        }

                        closedir($dh);
                    }
                }
            }
        }

//        var_dump($movie_names);
        
        $this->layout = '/layouts/empty';
//      array('movielist'=>$movielist,'upcomingmovies'=>$upcomingmovies)
//		$this->render('index',array('slidersequence'=>$slidersequence,'movielist'=>$movielist,'upcomingmovies'=>$upcomingmovies,'dateclass'=>date('Y-m-d'),'locations'=>$locations,'movieCombo'=>$movieCombo));
        $this->render('home', array('slidersequence' => $slidersequence, 
            'movielist' => $movielist, 'upcomingmovies' => $upcomingmovies,
            'dateclass' => date('Y-m-d'), 'locations' => $locations,
            'movieCombo' => $movieCombo, 'brand_partners' => $partners, 
            'dine_in' => $dine_in, 'results' => $results, 'resultsfilename' => $resultsfilename,
            'movie_names' => $movie_names, 'movielist_nextday' => $movielist_nextday,
            'movielist_secondnextday' => $movielist_secondnextday));
    }

    public function actionGetMovieDetails() {
        $adminmodel = new adminModel();
        $para = $adminmodel->aboutus();
        $this->render('/cinestar/aboutus', array('aboutscontent' => urldecode($para[0]['paragraph1'])));
    }

    public function actionMembership() {
        $this->render('/cinestar/membersarea', '');
    }

    public function actionLhrMembership() {
        $this->render('/cinestar/lhrmembership', '');
    }

    public function actionLhrTicket() {
        $this->render('/cinestar/lhrticket', '');
    }

    public function actionContactUs() {
        $adminmodel = new adminModel();
        $para = $adminmodel->contactus();
        $this->render('/cinestar/contactus', array('para' => $para));
    }

    public function actionAboutUs() {
        $adminmodel = new adminModel();
        $para = $adminmodel->aboutus();
        $this->render('/cinestar/aboutus', array('aboutscontent' => urldecode($para[0]['paragraph1'])));
    }

    public function actionCareers() {
        $adminmodel = new adminModel();
        $para = $adminmodel->aboutus();
        $this->render('/cinestar/careers', array('careerscontent' => urldecode($para[0]['paragraph2'])));
    }

    public function actionFAQ() {

        $this->render('/cinestar/faq', array('faqContent' => 'asaass'));
    }

    public function actionFilterDineIn() {

        $category = $_GET['category'];
        $adminModel = new adminModel();
        $results = $adminModel->getAllDineInSliders(1);
        $dine_in = $adminModel->getAllMenus(1,$category);

        echo json_encode($dine_in);
    }

    public function actionDineIn() {

        $adminModel = new adminModel();
        $results = $adminModel->getAllDineInSliders(1);
        $dine_in = $adminModel->getAllMenus(1,1);

        $this->render('/cinestar/dine_in', array('slidersequence' => $results,'dine_in' => $dine_in));
    }

    public function actionWeeklyData() {

        $_REQUEST['moviename'];
        $_REQUEST['locationame'];
        $cinestarModel = new CinestarModel();
        $datewisedata = $cinestarModel->getWeeklyData($_REQUEST['moviename'], $_REQUEST['locationame']);

        $weekfisrt = '';
        $weeksec = '';
        $weekthird = '';
        $weekforth = '';
        $weekfifth = '';
        $weeksixth = '';
        $weekseven = '';
        for ($i = 0; $i < count($datewisedata); $i++) {
            $location_id = $datewisedata[$i]['location_id'];
            $screen = $datewisedata[$i]['screen'];
            $screenHtml = "";
            if (($location_id == 2 || $location_id == 5) && $screen != "") {
                if ($location_id == 2)
                    $screenHtml = "<br /><span>Screen $screen</span>";
                elseif ($location_id == 5)
                    $screenHtml = "<br /><span>Hall $screen</span>";
            }

            $dbdate = explode(" ", $datewisedata[$i]['showdateetime']);
            ;

            if (strtotime($dbdate[0]) == strtotime('-1 day', strtotime(date("d.m.Y")))) {
                $weekfisrt.='<td>' . date("h:i a", strtotime($dbdate[1])) . $screenHtml . '</td>';
            } else if (strtotime($dbdate[0]) == strtotime(date("d.m.Y"))) {
                $weeksec.='<td>' . date("h:i a", strtotime($dbdate[1])) . $screenHtml . '</td>';
            } else if (strtotime($dbdate[0]) == strtotime('+1 day', strtotime(date("d.m.Y")))) {

                $weekthird.='<td>' . date("h:i a", strtotime($dbdate[1])) . $screenHtml . '</td>';
            } else if (strtotime($dbdate[0]) == strtotime('+2 day', strtotime(date("d.m.Y")))) {
                $weekforth.='<td>' . date("h:i a", strtotime($dbdate[1])) . $screenHtml . '</td>';
            } else if (strtotime($dbdate[0]) == strtotime('+3 day', strtotime(date("d.m.Y")))) {
                $weekfifth.='<td>' . date("h:i a", strtotime($dbdate[1])) . $screenHtml . '</td>';
            } else if (strtotime($dbdate[0]) == strtotime('+4 day', strtotime(date("d.m.Y")))) {
                $weeksixth.='<td>' . date("h:i a", strtotime($dbdate[1])) . $screenHtml . '</td>';
            } else if (strtotime($dbdate[0]) == strtotime('+5 day', strtotime(date("d.m.Y")))) {
                $weekseven.='<td>' . date("h:i a", strtotime($dbdate[1])) . $screenHtml . '</td>';
            }
        }
        echo '
           
            <tr>                                                
									<th scope="row">' . date('l', strtotime(' -1 day')) . '<br>' . date('M d', strtotime(' -1 day')) . '</th>
									' . $weekfisrt . '
								</tr>

								<tr>
									<th scope="row">' . date('l') . '<br>' . date('M d') . '</th>
									' . $weeksec . '
								</tr>

								<tr scope="row">
									<th scope="row">' . date('l', strtotime(' +1 day')) . '<br>' . date('M d', strtotime(' +1 day')) . '</th>
									' . $weekthird . '
								</tr>

								<tr>
									<th scope="row">' . date('l', strtotime(' +2 day')) . '<br>' . date('M d', strtotime(' +2 day')) . '</th>
									' . $weekforth . '
								</tr>

								<tr>
									<th scope="row">' . date('l', strtotime(' +3 day')) . '<br>' . date('M d', strtotime(' +3 day')) . '</th>
									' . $weekfifth . '
								</tr>

								<tr>
									<th scope="row">' . date('l', strtotime(' +4 day')) . '<br>' . date('M d', strtotime(' +4 day')) . '</th>
									' . $weeksixth . '
								</tr>

								<tr>
									<th scope="row">' . date('l', strtotime(' +5 day')) . '<br>' . date('M d', strtotime(' +5 day')) . '</th>
									' . $weekseven . '
								</tr>';
    }

    public function actionSearchMovie() {
        $screen = $_GET['screen'];
        $moviename = '';
        $locationname = '';
        if (isset($_GET['moviename'])) {
            $moviename = $_GET['moviename'];
            if ($moviename == 'All Movies') {
                $moviename = false;
            }
        }

        if (isset($_GET['tabs'])) {
            $tabsenable = $_GET['tabs'];
        }

        if (isset($_GET['locationame']) && !empty($_GET['locationame'])) {

            $locationname = $_GET['locationame'];
            if ($locationname == 'All Locations') {
                $locationname = false;
            }
            $calenerdate = $_GET['calenerdate'];
            if ($calenerdate == '') {
                $calenerdate = false;
            }
        }
        //need to discuss if movie search what will display on the bottom

        $cinestarModel = new CinestarModel();

        $movielist = $cinestarModel->getSearchMovieList($moviename, $locationname, $calenerdate, $screen);

        $movieCombo = $cinestarModel->getMovie();
        $locations = $cinestarModel->getAllSites();

        $tabs = '';

        if (count($movielist['locationids'])) {
            if (isset($tabsenable) || !$locationname == false || !$calenerdate == false && $locationname == false) {
                
            } else {
                for ($i = 0; $i < count($movielist['locationids']); $i++) {
                    $tabs.= '<a name="searchedtabs" id="searchedtabs" class="tab" href="#">' . $locations[$i]['location_name'] . '</a>';
                }
            }


            for ($k = 0; $k < count($movielist['movies']); $k++) {
                $tabs.= '<div class="col-md-4" style="margin:0 0 2.2em 0;">';
                $tabs.= '<div class="col-md-6" id="loc_img">';
                $url = (Yii::app()->getBaseUrl(true) . $movielist['movies'][$k][0]['movie_img_path']) ? Yii::app()->getBaseUrl(true) . $movielist['movies'][$k][0]['movie_img_path'] : Yii::app()->getBaseUrl(true) . '/images/not_found.jpg';
                $tabs.= '<img src="' . $url . '" width="166" height="250" />';

                // $tabs.=  '<div id="info_container_loc" class="loc_info_container" style="background: rgb(0,0,0);opacity: 0.7;height: 254px; position: absolute;width: 93%; border-color: #D3A323; border: solid 4px #D3A323;margin-top: -23em;">';
                //$tabs.=  '<div style="text-align: center; color: #ffffff; padding:1em;">';
                // $tabs.=  '<h4 style="line-height: 1.2; font-family: myFirstFontBold;">'.$movielist['movies'][$k][0]['movie_name'].'</h4>';
                // $tabs.=  '</div>';
                //$tabs.=  '<div style="text-align: center; color: #ffffff;  margin-top: 1em;">';
                //  $tabs.=  '<a href="#"><img class="data_img" width="40px" height="37px" src="'.Yii::app()->getBaseUrl(true).'/images/play_button.png"></a>';
                //  $tabs.=  '</div>';
                // $tabs.=  '<div style="text-align: center; color: #ffffff; padding:1em;">';
                //$tabs.=  '<a href="#"><img class="data_img" width="40px" height="37px" src="'.Yii::app()->getBaseUrl(true).'/images/info_button.png"></a>';
                // $tabs.=  '</div>';
                //  $tabs.=  '</div>';

                $tabs.= '</div>';
                $tabs.= '<div class="col-md-6" style="padding: 5px 0px 5px 11px;">';

                $tabs.= '<h4 style="line-height: 1.2">' . $movielist['movies'][$k][0]['movie_name'] . '<span style="background: #D59B18; border-radius: 20px; text-transform: uppercase; margin: 2px; font-size: 14px;  padding: 2px;">' . $movielist['movies'][$k][0]['movie_type'] . '</span></h4>';
                $tabs.= '<div class="imdbrate">';

                $rating = $movielist['movies'][$k][0]['rating'];
                $red = (int) ($rating / 2);
                $half = ($rating % 2);
                $white = 5 - ($red + $half);
                $url_ = Yii::app()->getBaseUrl(true);
                for ($z = 0; $z < $red; $z++) {
                    $tabs .= '<img src="' . $url_ . '/images/star-gold.png" />';
                }
                for ($z = 0; $z < $half; $z++) {
                    $tabs.= '<img src="' . $url_ . '/images/star-half.png" />';
                }
                for ($z = 0; $z < $white; $z++) {
                    $tabs.= '<img src="' . $url_ . '/images/star-white.png" />';
                }

                $tabs.= '</div><br>';
                $screen1 = false;
                $screen2 = false;
                $showTime = '';
                $showTimeS1 = '<div class="scree1 screen-show">';
                $showTimeS2 = '<div class="scree2 screen-show">';

                // print_r($movielist);
                //  print_r(strtotime($movielist['showtime'][0][0]['showdateetime']));
                // die;
                for ($j = 0; $j < count($movielist['showtime'][$k]); $j++) {
                    $time = strtotime($movielist['showtime'][$k][$j]['showdateetime']);

                    $formateddate = date("M d, y", $time);
                    $formatedtime = date("h:i a", $time);

                    if ($movielist['showtime'][$k][$j]['screen'] == 1) {
                        $screen1 = true;
                        $showTime .= "<div class='time'><a href='javascript:void(0)'>$formatedtime</a></div>";
                    }/* elseif ($movielist['showtime'][$k][$j]['screen'] == 2) {
                      $screen2 = true;
                      $showTimeS2 .= "<div>$formatedtime</div>";
                      } */ else {
                        $showTime .= "<div class='time' style='background-color: #ff0000'>$formatedtime</div>";
                    }
                }

                $showTimeS1 .= '</div><div style="clear:both"></div>';
                $showTimeS2 .= '</div>';

                //  if($showTime && !$screen1 && !$screen2){
                $tabs.= '<div>' . $showTime . '</div>';
                //  }

                $tabs.= '</div>';
                $tabs.= '</div>';
            }

            echo $tabs;
        } else {
            echo '';
        }
    }

    public function actionMovieDetail() {
        $movie_id = '';
        if (isset($_POST['movie_id'])) {
            $movie_id = $_POST['movie_id'];
        }

        $cinestarModel = new CinestarModel();
        $moviedetail = $cinestarModel->getMovieById($movie_id);

        if (count($moviedetail) > 0) {
            $this->render('/cinestar/detail', array('detail_content' => $moviedetail[0]));
        } else {
            $this->render('/cinestar/detail', array('detail_content' => 'Movie Details are not found.'));
        }
    }

    public function actionSearchMoviebyDate() {
        //need to discuss if movie search what will display on the bottom
        $cinestarModel = new CinestarModel();
        $movielist = $cinestarModel->getSearchMovieListbyDate($_GET['dbdate']);
        for ($i = 0; $i < count($movielist); $i++) {
            $showtimings = $cinestarModel->getShowTimings($movielist[$i]['movie_name']);
            $movielist[$i]['showtiming'] = $showtimings;
        }
        $upcomingmovies = $cinestarModel->getUpComingMovieList();
        $this->layout = '/layouts/empty';
//            array('movielist'=>$movielist,'upcomingmovies'=>$upcomingmovies)

        $this->render('index', array('movielist' => $movielist, 'upcomingmovies' => $upcomingmovies, 'dateclass' => $_GET['dbdate']));
    }

    public function actionContactForm() {

        require_once 'protected/extensions/phpmailer/PHPMailerAutoload.php';
        //PHPMailer Object
        $mail = new PHPMailer;

//From email address and name
        $mail = new PHPMailer;

//Enable SMTP debugging. 
//$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
        $mail->isSMTP();
//Set SMTP host name                          
        $mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = true;
//Provide username and password     
        $mail->Username = "testingcinestar@gmail.com";
        $mail->Password = "cinestar@1234";
//If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "tls";
//Set TCP port to connect to 
        $mail->Port = 587;

        $mail->From = "testingcinestar@gmail.com";
        $mail->FromName = "The Arena Team.";

        $mail->addAddress("info@thearena.com.pk", "The Arena Team");

//        $mail->addAddress("mnouman2356@gmail.com", "The Arena Team");

        $mail->isHTML(true);
        if (isset($_REQUEST['smsnum'])) {

            $mail->Subject = 'SMS Subcription';
            $mail->Body = "<i>" . $_REQUEST['smsnum'] . "</i> ";
            $mail->AltBody = "This is sms alert email.";
        } else
        if (isset($_REQUEST['suggestiontype']) && isset($_REQUEST['contactname'])) {

            $mail->Subject = $_REQUEST['suggestiontype'];
            $mail->Body = "<i>" . $_REQUEST['contactname'] . "</i> <br /> <i>" . $_REQUEST['contactemail'] . "</i><li> " . $_REQUEST['contactmobile'] . "</li><li> " . $_REQUEST['contactmsg'] . "</li>";
            $mail->AltBody = "This is sms alert email.";
        } else
        if (isset($_GET['name']) && isset($_GET['contactno']) && isset($_GET['subscribe'])) {
            $mail->Subject = "Sms Alert";
            $mail->Body = "<i>" . $_GET['name'] . "</i> <br /> <i>" . $_GET['contactno'] . "</i><li> " . $_GET['subscribe'] . "</li>";
            $mail->AltBody = "This is sms alert email.";
        } else if (isset($_GET['suggestionnametxt']) && isset($_GET['suggestionemailtxt']) && isset($_GET['suggestionnumbertxt']) && isset($_GET['suggestionmsgtxt'])) {
            $mail->Subject = "Complains";
            $mail->Body = "<i>" . $_GET['suggestionnametxt'] . "</i> <br /> <i>" . $_GET['suggestionemailtxt'] . "</i><br /> <i>" . $_GET['suggestionnumbertxt'] . "</i> <br /> <i>" . $_GET['suggestionlocation'] . "</i> <br /> <i>" . $_GET['suggestionmsgtxt'] . "</i> ";

            $mail->AltBody = "This is sms alert email.";
        } else if (isset($_GET['complainnametxt']) && isset($_GET['complainemailtxt']) && isset($_GET['complaincontacttxt']) && isset($_GET['complainmsgtxt'])) {
            $mail->Subject = "Suggestions";
            $mail->Body = "<i>" . $_GET['complainnametxt'] . "</i> <br /> <i>" . $_GET['complainemailtxt'] . "</i><br /> <i>" . $_GET['complaincontacttxt'] . "</i> <br /> <i>" . $_GET['complainlocation'] . "</i> <br /> <i>" . $_GET['complainmsgtxt'] . "</i> ";

            $mail->AltBody = "This is sms alert email.";
        }
        else if (isset($_GET['name']) && isset($_GET['contactno']) && isset($_GET['email']) && isset($_GET['subject']) && isset($_GET['txt'])) {
            $mail->Subject = "Contact Form";
            $mail->Body = "<i>" . $_GET['name'] . "</i> <br /> <i>" . $_GET['contactno'] . "</i><br /> <i>" . $_GET['email'] . "</i> <br /> <i>" . $_GET['subject'] . "</i> <br /> <i>". $_GET['txt'] . "</i> ";

            $mail->AltBody = "This is contact form alert email.";
        }


        if (!$mail->send()) {

            return true;
        } else {
            return true;
        }
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

      public function actions()
      {
      // return external action classes, e.g.:
      return array(
      'action1'=>'path.to.ActionClass',
      'action2'=>array(
      'class'=>'path.to.AnotherActionClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }
     */
}
