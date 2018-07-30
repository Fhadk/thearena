<div class="col-md-4" style="margin:0 0 2.2em 0;">
    <div class="col-md-6">
        <img src="<?php echo (Yii::app()->getBaseUrl(true) . $movielist[$i][0]['movie_img_path'])?Yii::app()->getBaseUrl(true) . $movielist[$i][0]['movie_img_path']:Yii::app()->getBaseUrl(true) . '/images/not_found.jpg';?>" width="175" height="250" />
    </div>
    <div class="col-md-6" style="margin-top: 1em; padding: 2px;">
        <h4 style="line-height: 1.2"><?php echo $movielist[$i][0]['movie_name'];?></h4>
        <div class="imdbrate">
            <?php
            $rating = $movielist[$i][0]['rating'];
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

        <?php
        $screen1 = false;
        $screen2 = false;
        $showTime = '';
        $showTimeS1 = '<div class="scree1 screen-show"><p>Screen 1</p>';
        $showTimeS2 = '<div class="scree2 screen-show"><p>Screen 2</p>';
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
