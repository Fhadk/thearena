
<div class="movie">
				<div class="movie-img">                                    
					<img src="<?php echo ($movielist[$i][0]['movie_img_path'])?$movielist[$i][0]['movie_img_path']:Yii::app()->getBaseUrl(true) . '/images/not_found.jpg';?>" width="140" height="160" />
				</div>
				
				<div class="details">
					<div id="movieName" class="title">
					<?php echo $movielist[$i][0]['movie_name'];?>
					</div>
				
					<div class="description">
                                        <?php // echo $movielist[$i][0]['movie_desc'];?>                                            
					</div>
					
					<div class="imdbrate">
                                            
                                        <?php
                                        $rating = $movielist[$i][0]['rating'];
                                        $red = (int)($rating/2);
                                        $half = ($rating%2);
                                        $white = 5 - ($red+$half);
                                        for($z=0 ; $z<$red ; $z++){ ?>
                                            <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/star-red.png';?>" />
                                        <?php } 
                                        for($z=0 ; $z<$half ; $z++){ ?>
                                                <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/star-half.png';?>" />
                                        <?php }
                                        for($z=0 ; $z<$white ; $z++){ ?>
                                                <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/star-white.png';?>" />
                                        <?php }
                                        
//                                        echo $movielist[$i][0]['rating'];?></div>
                                        <?php // if($movielist[$i][0]['movie_type']=='2d'){ ?>
					<!--<div class="tag2d"></div>-->
                                        <?php // } else { ?>
					<!--<div class="tag3d"></div>-->
                                        
                                        <?php // } ?>
				</div><!-- details -->
                                <div>
                                    <span><img src="images/ticket-icon.png">Select a movie time to buy a ticket</span>
                                </div>                                
                                
                                 <?php
                                    
									$screen1 = false;
									$screen2 = false;
									$showTime = '';
									$showTimeS1 = '<div class="scree1 screen-show"><p>Screen 1</p>';
									$showTimeS2 = '<div class="scree2 screen-show"><p>Screen 2</p>';
                                    for($j=0;$j<count($movielist[$i]['showtiming']);$j++) {
										$time = strtotime($movielist[$i]['showtiming'][$j]['showdateetime']);
										$formateddate = date("M d, y", $time);
										$formatedtime = date("h:i A", $time);

										if ($movielist[$i]['showtiming'][$j]['screen'] == 1) {
											$screen1 = true;
											$showTimeS1 .= "<div class='time'>$formatedtime</div>";
										} elseif ($movielist[$i]['showtiming'][$j]['screen'] == 2) {
											$screen2 = true;
											$showTimeS2 .= "<div>$formatedtime</div>";
										} else {
											$showTime .= "<div class='time'>$formatedtime</div>";
										}
									}
									$showTimeS1 .= '</div><div style="clear:both"></div>';
									$showTimeS2 .= '</div>';

									echo $showTime;
									if($screen1)
										echo $showTimeS1;
									if($screen2)
										echo $showTimeS2;


                                        ?>
				<div class="schedule">
                                   
					  <div class="weekly"><button id="weeklyview" data-moviename="<?php echo $movielist[$i][0]['movie_name'];?>" data-dialog<?php echo $i?>="somedialog<?php echo $i?>"  name="somedialog" class="weekly">View Weekly Schedule</button>

					<div id="somedialog<?php echo $i?>" class="dialog" name="somedialog">
						<div class="dialog__overlay"></div>
						<div class="dialog__content" style="width:900px;">

							<button class="weeklyclose" data-dialog-close=""></button>

							<div class="weeklyheading">
								Weekly Schedule
                                                                <span id="popupheading"></span>
							</div>	
						
							<table id="weeklytbl"  class="weeklytable" border="0" cellspacing="0" cellpadding="0">
								
							</table>
							
						</div>
					</div>
                                        </div>
					<script>
                                        
                                        </script>
				</div>
                                <!-- schedule -->
<!--                                <div class=" booknow">
                                        <button  data-dialogbooknow="dialogbooknow_id" class="booknowjs "></button>					
					<div class="text"><span>MEMBERS</span> can Book Ticket/s Online.</div>
				</div>-->
                                <!-- booknow -->
			
                                <div id="dialogbooknow_id" class="dialog">
						<div class="dialog__overlay"></div>
							<div class="dialog__content">
							<button class="weeklyclosebooknow" data-dialog-close=""></button>
							<div class="feedback">Online Booking</div>	
							<form class="feedback-form">
                                                            <span><a class="booknowbtn" href="http://online.cinestar.com.pk/CSERP/CustomerTicketing/Login.aspx" target="_blank">CS Township</a></span>  
                                                            <!--<a class="booknowbtn" href="http://online.cinestar.com.pk/CSERP/CustomerTicketing/Login.aspx" target="_blank">CS TAJ</a>-->
                                                            <a class="booknowbtn" href="#">CS TAJ</a>
                                                            <!--<a  class="booknowbtn" href="http://online.cinestar.com.pk/CSERP/CustomerTicketing/Login.aspx" target="_blank">CS Multan</a>-->
                                                            <a  class="booknowbtn" href="#">CS Multan</a>
                                                                <input type="hidden"  data-dialog-close=""> 
							</form>
				
                                                    </div>
						</div>
					</div>
