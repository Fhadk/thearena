<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Edit Movie -->

		<div class="col_12">
			<div class="col_12">
              <h4>Edit Movie</h4>  <hr />
            </div>

			<div class="col_12">
				<!-- form -->
                <form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/UpdateMovie" method="POST" enctype="multipart/form-data">
                    
                    <div class="col_2"><!-- empty --></div>

                  <div class="col_8 column">
                    <label for="text2">Movie Title</label>
                    <input id="text2" name="movietitle" type="text" placeholder="Enter Movie Title" value="<?php echo $results[0]['movie_name']?>"/>

                    <label for="textarea1">Description</label>
                    <textarea name="movies_desc" id="textarea1" placeholder="Add Movie Description " resize="none" ><?php echo $results[0]['movie_desc']?></textarea>

                    <label for="text2">IMDB Rating</label>
                    <input name="rating" id="text2" type="text" placeholder="Enter IMDB link for rating" value="<?php echo $results[0]['rating']?>" />
                    <label for="text2">Trailor Link</label>
                     <input name="videourl" id="videourl" type="text" placeholder="Enter the external video link" value="<?php echo $results[0]['videolink']?>"/>
                    <fieldset>
                      <legend>Movie Type</legend>
                      <?php
                      if($results[0]['movie_name']=='2d'){
                          $option='';
                          ?>
                      <input type="radio" name="3d" value="0" id="radio1" class="radio" checked="checked"> <label for="radio1" class="inline">2D</label><br>
                       <input type="radio" name="3d" value="1" id="radio2" class="radio" > <label for="radio2" class="inline">3D</label><br>
                      <?php
                      }else{
                          ?>
                       <input type="radio" name="3d" value="0" id="radio1" class="radio" checked="checked"> <label for="radio1" class="inline">2D</label><br>
                      <input type="radio" name="3d" value="1" id="radio2" class="radio" > <label for="radio2" class="inline">3D</label><br>
                      <?php
                          
                      }
                      ?>
                      
                      
                    </fieldset>

                    <label for="file1">Slider Size Image (1350px x 950px)</label>
                    <table>
                    		<tr>
                                    <td width="300"><img src="<?php echo $results[0]['slider_img_path']?>" width="300" /></td>
                                        <input id="file1" name="sliderpath" type="file" class="file small blue"  >
<!--                    			<td><button class="small blue">Upload New</button></td>-->
                    		</tr>
                    </table>

                    <label for="file1">Movie List Size Image (180px x 250px)(This will use on home page under location section)</label>
                    <table>
                    		<tr>
                    			<td width="140"><img src="<?php echo $results[0]['movie_img_path']?>" width="140" /></td>
                                        <input id="file1" name="listimg" type="file" class="file small blue">
<!--                    			<td><button class="small blue">Upload New</button></td>-->
                    		</tr>
                    </table>
                    
                    <label for="select1">Set Status</label>
                    <select id="select1" name="status">
                        <?php 
                    if($results[0]['status']=='1'){
                        
                        ?>
                            <option value="1" selected="selected">Active</option>
                    	<option value="2">Inactive</option>
                            <?php

                    }
                    elseif($results[0]['status']=='0'){
                        ?>
                            <option value="1" >Active</option>
                    	<option value="2" selected="selected">Inactive</option>
                            <?php
                    }else{
                        ?>
                        <option value="1" selected="selected" >Active</option>
                    	<option value="2" >Inactive</option>
                        <?php
                    }
                    ?>
                    	<option value="0">-- Choose Status --</option>
                    	
                	</select>

                    <hr />

                    <button class="medium green">Update</button>
                    <button class="Medium" >Cancel</button>


                  </div>

                </form>
                <!-- form end -->

			</div>
		</div>
	<!-- End Edit Movie -->
<input type="hidden" id="GetEditData" data-geteditdata='<?php echo $this->createUrl('Admin/GetEditData/')?>' />