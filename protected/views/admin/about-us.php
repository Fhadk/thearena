<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/editor/nicEdit-latest.js"></script>
<?php //var_dump($para); die(); ?>
 <input type="hidden" name="aboutus" id="textaboutus" value="<?php echo urldecode($para[0]['paragraph1']); ?>">
<form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/AboutUs" method="POST" enctype="multipart/form-data">
<div id="sample">
   
  
  
  <div class="col_9 column"><h4>About Us.</h4></div>
<div class="clear">&nbsp;</div>
<hr>
    <label>(Please add "< br >" where you need move text to next line.)</label>
  <textarea name="aboutustextarea" cols="50" id="p1">
  <?php echo str_replace("<br>",'',str_replace("<br />",'',$para[0]['paragraph1'])); ?>
</textarea>

 



<button id="btnaboutus" class="medium green">Update</button>
                    <a class="Medium button" href="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/MovieList" >Cancel</a>
</div>
</form>

