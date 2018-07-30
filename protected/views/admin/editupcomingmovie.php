<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Edit Movie -->
<form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/EditUpcomingMovie" method="POST" enctype="multipart/form-data" >
		<div class="col_12">
			<div class="col_12">
                            <input type='hidden' id='hiddenrowid' name="hiddenrowid" value="<?php echo $_POST['hiddenrowid'];?>">
              <h4>Edit Upcoming Movie</h4>  <hr />
            </div>

			<div class="col_12">
				<!-- form -->
                <form class="vertical">

                    <div class="col_2"><!-- empty --></div>

                  <div class="col_8 column">
                    <label for="text2">Movie Title</label>
                    <input id="text2" name="movietitle" type="text" placeholder="Enter Movie Title" value="<?php echo $results[0]['movie_title']?>" />

                    <label for="textarea1">External Link - URL</label>
                    <input id="text2" name="imdblink" type="url" placeholder="Enter IMDB link for rating" value="<?php echo $results[0]['external_url']?>" required/>
                    
                    
                    <label for="file1">Movie Image (Ideal size is 200px x 310px)(This will use on home page under coming soon section)</label>
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
