<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Edit Movie -->
<form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/EditBrandPartner" method="POST" enctype="multipart/form-data" >
		<div class="col_12">
			<div class="col_12">
                            <input type='hidden' id='hiddenrowid' name="hiddenrowid" value="<?php echo $_POST['hiddenrowid'];?>">
              <h4>Edit Brand Partner</h4>  <hr />
            </div>

			<div class="col_12">
				<!-- form -->
                <form class="vertical">

                    <div class="col_2"><!-- empty --></div>

                  <div class="col_8 column">
                    <label for="text2">Title</label>
                    <input id="text2" name="title" type="text" placeholder="Enter Title" value="<?php echo $results[0]['title']?>" />
                    
                    <label for="file1">Movie Image (150px x 150px)(This will use on membership under partner section.)</label>
                    <table>
                    		<tr>
                    			<td width="127"><img src="<?php echo Yii::app()->getBaseUrl(true).$results[0]['img_url']?>" width="127" /></td>
                                        
                    			<td><input id="file1" name="photo" type="file" class="small blue file"  ></td>
                    		</tr>
                    </table>

                    <hr />

                    <button class="medium green">Update</button>
                    <button class="Medium">Cancel</button>


                  </div>

                </form>
                <!-- form end -->

			</div>
		</div>
    </form>
	<!-- End Edit Movie -->
