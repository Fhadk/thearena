<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="col_12">
              <h4>Add Upcoming Movie</h4>  <hr />
            </div>

			<div class="col_12">
				<!-- form -->
                <form class="vertical"  action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/SaveUpcomingMovies" method="POST" enctype="multipart/form-data">

                    <div class="col_2"><!-- empty --></div>

                  <div class="col_8 column">
                  <label for="text2">Movie Title</label>
                    <input id="text2" name="movietitle" type="text" placeholder="Enter Movie Title" />

                    <label for="textarea1">External Link - URL</label>
                    <input id="text2" name='imdblink' type="url" placeholder="Enter Link" required/>
                    
                    
                    <label for="file1">Movie Image (200px x 310px)(This will use on home page under coming soon section.)</label>
                    
                    <input  name="photo"  type="file" >

                    <hr />

                    <button class="medium green">Add Movie</button>
                    <a class="Medium button" href="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/UpcomingMovieList" >Cancel</a>


                  </div>

                </form>
                <!-- form end -->

			</div>
