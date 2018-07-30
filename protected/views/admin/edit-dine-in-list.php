<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Edit Movie -->

		<div class="col_12">
			<div class="col_12">
              <h4>Edit Slider</h4>  <hr />
            </div>

			<div class="col_12">
				<!-- form -->
                <form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/UpdateSlider" method="POST" enctype="multipart/form-data">
                    
                    <div class="col_2"><!-- empty --></div>

                  <div class="col_8 column">
                    <label for="text2"> Title</label>
                    <input id="title" name="title" type="text" placeholder="Enter Title" value="<?php echo $results[0]['title']?>"/>

                    <label for="textarea1">Description</label>
                    <textarea name="description" id="description" placeholder="Enter Description " resize="none" ><?php echo $results[0]['description']?></textarea>
		 <label for="file1">Slider Size Image (1350px x 950px)</label>
                    <table>
                    		<tr>
                                    <td width="300"><img src="<?php echo $results[0]['sliderpath']?>" width="300" /></td>
                                        <input id="file1" name="sliderpath" type="file" class="file small blue"  >
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