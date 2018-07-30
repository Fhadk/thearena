<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<div class="wrapper col-md-12" style="margin: 1em 0 0; padding: 0 7.3em">
    <div class="cinestarabout">
        <div class="theme_color theme_padding" style="font-family: myFirstFontBold"><h2>Movie Detail</h2><hr>
            <h5><span style="color: #585858">Home / </span><span style="color: #ffffff">Detail<span></h5><hr>
        </div>
        <div class="body_text">
            <div class="row">
                <?php if(isset($detail_content['movie_img_path'])){ ?>
                <div class="col-md-3" style="padding-right: 0px;">
                    <img id="main_img" src="<?php echo Yii::app()->getBaseUrl(true).$detail_content['movie_img_path']?>" width="245" height="380" />
                </div>
                <div class="col-md-8" style="padding: 0px;">
                    <div class="col-md-12" style="padding: 5px 2px;">
                        <h4 style="line-height: 1.2"><?php echo $detail_content['movie_name'];?></h4>
                        <div class="imdbrate">
                            <?php
                            $rating = $detail_content['rating'];
                            $red = (int)($rating/2);
                            $half = ($rating%2);
                            $white = 5 - ($red+$half);
                            for($z=0 ; $z<$red ; $z++){ ?>
                                <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/star-gold.png';?>" />
                            <?php }
                            for($z=0 ; $z<$half ; $z++){ ?>
                                <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/star-half.png';?>" />
                            <?php }
                            for($z=0 ; $z<$white ; $z++){ ?>
                                <img src="<?php echo Yii::app()->getBaseUrl(true) . '/images/star-white.png';?>" />
                            <?php }?>
                        </div><br>

                        <!--SHOW TIME-->
                        <?php //print_r($movielist[0]['showtiming']); ?>
                        <!--SHOW TIME-->

                    </div>
                    <div class="col-md-12" style="padding: 0px;">
                        <p><?php echo $detail_content['movie_desc']; ?></p>
                    </div>
                </div>
                <?php } else{ ?>
                    <div class="col-md-12">
                        <p><?php echo $detail_content; ?></p>
                    </div>
                <?php } ?>
            </div>

    </div>
</div>