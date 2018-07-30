<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Add New Movie -->
<form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/AddSlider" method="POST"  enctype="multipart/form-data">
		<div class="col_12">
			<div class="col_12">
              <h4>Add New Dine In Slider</h4>  <hr />
            </div>

			<div class="col_12">
				<!-- form -->
                <form class="vertical">
                    <label id="error" style="display: none;" class="error" for="text6">Fields should not be empty.</label>
                    <div class="col_2"><!-- empty --></div>

                  <div class="col_8 column">
                    <label for="text2"> Title</label>
                    <input name="title" id="title" type="text" placeholder="Enter Title" />

                    <label for="textarea1">Description</label>
                    <textarea name="description" id="description" placeholder="Add Description " resize="none"></textarea>


                    <label for="file1">Slider Size Image (1350px x 950px)</label>
                    <input id="file1" name="sliderpath" type="file" class="file"  >
                    

                    <label for="select1">Set Status</label>
                    <select name="status" id="status">
                    	<option value="1">Active</option>
                    	<option value="0">Inactive</option>
                	</select>

                    <hr />

                    <button id="addmoviebtn" class="medium green">Add Slider</button>
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
        
        