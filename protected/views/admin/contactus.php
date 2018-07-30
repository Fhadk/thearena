<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/editor/nicEdit-latest.js"></script>
<?php// var_dump($para); die(); ?>
 <input type="hidden" name="aboutus" id="text1" value="<?php echo htmlspecialchars($para[0]['adress1']); ?>">
 <input type="hidden" name="aboutus" id="text2" value="<?php echo htmlspecialchars($para[0]['adress2']); ?>">
 <input type="hidden" name="aboutus" id="text3" value="<?php echo htmlspecialchars($para[0]['adress3']); ?>">
<form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/contactus" method="POST" enctype="multipart/form-data">
<div id="sample">
   
  
  
  <div class="col_9 column"><h4>Contact Us.</h4></div>
<div class="clear">&nbsp;</div>
<hr>
  <div class="textarea1" style="width: 500px">
      <label>Locaiton Name:</label>
      <input name="titlet1" type="text" placeholder="Enter location name" value="<?php echo urldecode($para[0]['title_adress1']); ?>">
  <label>Details: (Please add "< br >" where you need move text to next line.)</label>
  <textarea name="contactustextarea1" cols="5" id="l1">
  <?php echo str_replace("<br>",'',str_replace("<br />",'',$para[0]['adress1'])); ?>
</textarea>
      <label>First Coordinate:</label>
      <input name="alti1" type="text" placeholder="Altitude value" value="<?php echo urldecode($para[0]['alti_adress1']); ?>">
      <label>Second Coordinate:</label>
      <input name="long1" type="text" placeholder="Longitude value" value="<?php echo urldecode($para[0]['longi_adress1']); ?>">

  </div>
  <hr>
  <div class="textarea2" style="width: 500px">
    <label>Location Name:</label>
    <input name="titlet2" type="text" placeholder="Enter location name" value="<?php echo urldecode($para[0]['title_adress2']); ?>">
  <label>Details: (Please add "< br >" where you need move text to next line.)</label>
  <textarea name="contactustextarea2" cols="5" id="l2">
  <?php echo str_replace("<br>",'',str_replace("<br />",'',$para[0]['adress2'])); ?>
</textarea>

    <label>First Coordinate:</label>
    <input name="alti2" type="text" placeholder="Altitude value" value="<?php echo urldecode($para[0]['alti_adress2']); ?>">
    <label>Second Coordinate:</label>
    <input name="long2" type="text" placeholder="Longitude value" value="<?php echo urldecode($para[0]['longi_adress2']); ?>">
  </div>
  <hr>
  <div class="textarea3" style="width: 500px">
    <label>Location Name:</label>
    <input name="titlet3" type="text" placeholder="Enter location name" value="<?php echo urldecode($para[0]['title_adress3']); ?>">

<label>Details: (Please add "< br >" where you need move text to next line.)</label>
  <textarea name="contactustextarea3" cols="5" id="l3">
<?php echo str_replace("<br>",'',str_replace("<br />",'',$para[0]['adress3'])); ?>
</textarea>
    <label>First Coordinate:</label>
    <input name="alti3" type="text"  placeholder="Altitude value" value="<?php echo urldecode($para[0]['alti_adress3']); ?>">
    <label>Second Coordinate:</label>
    <input name="long3" type="text" placeholder="Longitude value" value="<?php echo urldecode($para[0]['longi_adress3']); ?>">
  </div>



<button id="btnaboutus" class="medium green">Update</button>
                    <a class="Medium button" href="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/MovieList" >Cancel</a>
</div>
</form>


 