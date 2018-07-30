<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="col_12">
              <h4>Add Brand Partner</h4>  <hr />
            </div>

			<div class="col_12">
				<!-- form -->
                <form class="vertical"  action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/SaveBrandPartner" method="POST" enctype="multipart/form-data">

                    <div class="col_2"><!-- empty --></div>

                  <div class="col_8 column">
                  <label for="text2">Title</label>
                    <input id="text2" name="title" type="text" placeholder="Enter Title" />

                    <!--<label for="textarea1">External Link - URL</label>
                    <input id="text2" name='externallink' type="text" placeholder="Enter Movie Title" />
                    -->
                    
                    <label for="file1">Movie Image (150px x 150px)(This will use on membership under partner section.)</label>
                    
                    <input  name="photo"  type="file" >

                    <hr />

                    <button class="medium green">Add Brand Partner</button>
                    <a class="Medium button" href="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/BrandPartnerList" >Cancel</a>


                  </div>

                </form>
                <!-- form end -->

			</div>
