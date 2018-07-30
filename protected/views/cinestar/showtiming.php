<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<div class="wrapper col-md-12" style="margin: 1em 0 0; padding:0 7.3em">
    <div class="cinestarabout">
        <div class="theme_color theme_padding" style="font-family: myFirstFontBold"><h2>Showtimes</h2><hr>
            <h5><span style="color: #585858">Home / </span><span style="color: #ffffff">Schedule<span></h5><hr>
        </div>


        <!--BEGAN CITIES-->
        <div class="theme_color theme_padding">
            <div class="row">
                <div class="tabwarpper">
                    <div class="tabwarpper_inner">
                        <?php

                        for($i=0;$i<count($locations);$i++){
                            $css = '';
                            if($i == 0){ $css = 'tab-selected'; }
                            echo '<a id="tabs" data-locationid="'.$locations[$i]['id'].'" class="tab '.$css.'"  href="" name="'.$locations[$i]['location_name'].'">'.$locations[$i]['location_name'].'</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <hr>
            <div class="row">
<!--                <div class="tabwarpper">-->
<!--                    <div class="gold_lounge" style="margin: 0 27%">-->
<!--                        <a id="lounge" data-locationid="" class="tab lounge gold_lounge_selected selected"  href="" name="gold" style="width: 40%">Gold Lounge</a>-->
<!--                    </div>-->
<!--                    <div class="red_lounge" style="margin: 0 27%">-->
<!--                        <a id="lounge" data-locationid="" class="tab lounge"  href="" name="red" style="width: 40%">Red Lounge</a>-->
<!--                    </div>-->
<!--                </div>-->

                <div class="tabwarpper" style="height: 47px">
                    <div class="gold_lounge" style="margin: 3px 27%">
                        <a id="lounge" data-locationid="" class="tab lounge gold_lounge_selected selected"  href="" name="gold" style="width: 40%; height: 41px;">Gold Lounge</a>
                    </div>
                    <div class="red_lounge" style="margin: 0 27%">
                        <a id="lounge" data-locationid="" class="tab lounge"  href="" name="red" style="width: 40%; height: 41px;">Red Lounge</a>
                    </div>
                </div>

            </div>

            <hr>
        </div>
        <!--END CITIES-->

        <!--BEGAN DAYS -->
        <div class="row">
            <div class="dayswrapper col-md-6 col-sm4 col-xs-2 " >
                <a style="margin:0 1.9%;" id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' -1 day'))?>'  class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' -1 day'))))
                {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>" href="">
                    <span class="dayname"><?php echo date('D', strtotime('-1 day'));?>-</span>
                    <span class="date"><?php echo date('d', strtotime('-1 day'));?>-</span>
                    <span class="month"><?php echo date('M', strtotime('-1 day'));?></span>
                </a><!-- day -->

                <a style="margin:0 1.9%;" id="widgetdate" name='<?php echo date('Y-m-d')?>'
                   class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d')))
                   {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>" href="#">
                    <span class="dayname"><?php echo date('D');?>-</span>
                    <span class="date"><?php echo date('d');?>-</span>
                    <span class="month"><?php echo date('M');?></span>
                </a><!-- day -->

                <a style="margin:0 1.9%;" id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +1 day'))?>'
                   class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +1 day'))))
                   {echo 'day-selected';} else{echo 'day';}}else
                   {echo'day';}?>"
                   href="">
                    <span class="dayname"><?php echo date('D', strtotime('+1 day'));?>-</span>
                    <span class="date"><?php echo date('d', strtotime('+1 day'));?>-</span>
                    <span class="month"><?php echo date('M', strtotime('+1 day'));?></span>
                </a><!-- day -->

                <a style="margin:0 1.9%;" id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +2 day'))?>'
                   class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +2 day'))))
                   {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>"
                   href="#">
                    <span class="dayname"><?php echo date('D', strtotime('+2 day'));?>-</span>
                    <span class="date"><?php echo date('d', strtotime('+2 day'));?>-</span>
                    <span class="month"><?php echo date('M', strtotime('+2 day'));?></span>
                </a><!-- day -->

                <a style="margin:0 1.9%;" id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +3 day'));?>'
                   class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +3 day'))))
                   {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>"
                   href="">
                    <span class="dayname"><?php echo date('D', strtotime('+3 day'));?>-</span>
                    <span class="date"><?php echo date('d', strtotime('+3 day'));?>-</span>
                    <span class="month"><?php echo date('M', strtotime('+3 day'));?></span>
                </a><!-- day -->

                <a style="margin:0 1.9%;" id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +4 day'));?>'
                   class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +4 day'))))
                   {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>"
                   href="">
                    <span class="dayname"><?php echo date('D', strtotime('+4 day'));?>-</span>
                    <span class="date"><?php echo date('d', strtotime('+4 day'));?>-</span>
                    <span class="month"><?php echo date('M', strtotime('+4 day'));?></span>
                </a><!-- day -->

                <a style="margin:0 1.9%;" id="widgetdate" name='<?php echo date('Y-m-d', strtotime(' +5 day'))?>'
                   class="<?php if(isset($dateclass)){if(strtotime($dateclass)==strtotime(date('Y-m-d', strtotime(' +5 day'))))
                   {echo 'day-selected';} else{echo 'day';}}else{echo'day';}?>"
                   href="#">
                    <span class="dayname"><?php echo date('D', strtotime('+5 day'));?>-</span>
                    <span class="date"><?php echo date('d', strtotime('+5 day'));?>-</span>
                    <span class="month"><?php echo date('M', strtotime('+5 day'));?></span>
                </a><!-- day -->

            </div>
        </div>
        <!--END DAYS-->

        <!--BEGANS SHOWS-->
        <div class="row temp1" style="background: #000">
            <div class = "now_showing" id="now_showing">

                <?php for($i=0;$i<count($movielist);$i++){  ?>

                    <div class="col-md-4" style="margin:0 0 2.2em 0;">
                        <div class="col-md-6" id="loc_img">
                            <img src="<?php echo (Yii::app()->getBaseUrl(true) . $movielist[$i][0]['movie_img_path'])?Yii::app()->getBaseUrl(true) . $movielist[$i][0]['movie_img_path']:Yii::app()->getBaseUrl(true) . '/images/not_found.jpg';?>" width="166" height="250" />
                            
                        </div>
                        <div class="col-md-6" style="padding: 5px 0px 5px 11px;">
                            <h4 style="line-height: 1.2"><?php echo $movielist[$i][0]['movie_name'];?></h4>
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
                                <?php }?>
                            </div><br>

                            <!--SHOW TIME-->

                            <?php
                            $screen1 = false;
                            $screen2 = false;
                            $showTime = '';
                            //$showTimeS1 = '<div class="scree1 screen-show"><p>Screen 1</p>';
                            $showTimeS1 = '<div class="scree1 screen-show">';
                            $showTimeS2 = '<div class="scree2 screen-show">';
                            for($j=0;$j<count($movielist[$i]['showtiming']);$j++) {
                                $time = strtotime($movielist[$i]['showtiming'][$j]['showdateetime']);
                                $formateddate = date("M d, y", $time);
                                $formatedtime = date("h:i a", $time);

                                if ($movielist[$i]['showtiming'][$j]['screen'] == 1) {
                                    $screen1 = true;
                                    $showTimeS1 .= "<div class='time'><a href='javascript:void(0)'>$formatedtime</a></div>";
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
                            <!--SHOW TIME-->

                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
        <!--END SHOWS-->

    </div>
</div>