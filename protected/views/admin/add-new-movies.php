<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Add New Movie -->
<form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/AddMovie" method="POST"  enctype="multipart/form-data">
		<div class="col_12">
			<div class="col_12">
              <h4>Add New Movie</h4>  <hr />
            </div>

			<div class="col_12">
				<!-- form -->
                <form class="vertical">
                    <label id="error" style="display: none;" class="error" for="text6">Fields should not be empty.</label>
                    <div class="col_2"><!-- empty --></div>

                  <div class="col_8 column">
                    <label for="text2">Movie Title</label>
                    <input name="moviename" id="moviename" type="text" placeholder="Enter Movie Title" />

                    <label for="textarea1">Description</label>
                    <textarea name="moviedetail" id="moviedetail" placeholder="Add Movie Description " resize="none"></textarea>

                    <label for="text2">IMDB Rating</label>
                    <input name="rating" id="rating" type="text" placeholder="Enter IMDB rating. e.g. 7.0" />
                    <label for="text2">Trailor Link (Please do not include http:// or https://)</label>
                    <input name="videourl" id="videourl" type="text" placeholder="Enter the external video link" />

                    <fieldset>
                      <legend>Movie Type</legend>
                      <input type="radio" name="3d" value="0"  id="2d" class="radio"> <label for="radio1" class="inline">2D</label><br>
                      <input type="radio" name="3d" id="3d" value="1"  class="radio"> <label for="radio2" class="inline">3D</label><br>
                    </fieldset>

                    <label for="file1">Slider Size Image (1350px x 950px)</label>
                    <input id="file1" name="sliderpath" type="file" class="file"  >
                    
                    <label for="file1">Movie List Size Image (180px x 250px)(This will use on home page under location section)</label>
                    <input id="file1" name="listimg" type="file" class="file">

                    <label for="select1">Set Status</label>
                    <select name="status" id="status">
                    	<option value="1">Active</option>
                    	<option value="0">Inactive</option>
                	</select>

                    <hr />

                    <button id="addmoviebtn" class="medium green">Add Movie</button>
                    <a class="Medium button" href="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/MovieList" >Cancel</a>
                    


                  </div>

                </form>
                <!-- form end -->

			</div>
		</div>
    </form>
	<!-- End Add New Movie -->
<!--<script>
   
$('#file1').on('change', function() {
    
    var a =$('#file1').val();
    alert(a);
}); 
    </script>-->
        
        