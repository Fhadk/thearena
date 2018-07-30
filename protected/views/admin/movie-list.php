<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Start Movie List -->
<?php

?>

		<div class="col_12">
			<div class="col_9"><h4>Now Showing - Movies List</h4></div>
			<form id="activate" class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/MovieList" method="POST">
			<div class="col_3 right" style="margin-top: 40px;">
				<!-- Select -->
				<label for="select1">Status</label>
                                <select id='inactivity' name='inactivity' class="activity">
                                <?php  if(isset($dropdownvalue)){ ?>
                                   <?php if($dropdownvalue==1){?>
                                    <option value="1" selected="selected">All</option>
                                      <?php
                                    }else{ ?>
                                        <option value="1">All</option>
                                   <?php     
                                    }?>
                                        
                                   <?php if($dropdownvalue==2){?>
                                    <option value="2" selected="selected">Active</option>
                                      <?php
                                    }else{ ?>
                                        <option value="2">Active</option>
                                   <?php     
                                    }?>
                                        
                                   <?php if($dropdownvalue==3){?>
                                    <option value="3" selected="selected">Inactive</option>
                                      <?php
                                    }else{ ?>
                                       <option value="3">Inactive</option>
                                   <?php     
                                    }?>
                                        
                           <?php     } ?>
				
				
				
				</select>
			</div>
							</form>

			<div class="col_12">
				<form id="internalform" class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/EditMovieList" method="POST">
				<!-- Table -->
                                <input type='hidden' id='hiddenrowid' name="hiddenrowid">
				<table cellspacing="0" cellpadding="0">
				<thead><tr>
                    <th width="140">Thumbnail</th>
					<th>Title/Description</th>
					<th width="100" class="center">Images</th>
					<th width="100" class="center">Status</th>
					<th width="100" class="center">Edit</th>
				</tr></thead>
				<tbody>
                                    
                        <?php
                        if(isset($results)){
                            
                            for($i=0;$i<count($results);$i++){
                                echo '<tr id="'.$results[$i]['id'].'">'; 
                                echo ' <td><img src="'. Yii::app()->getBaseUrl(true) . $results[$i]['movie_img_path'].'" /></td>'; 
                                echo '<td>'; 
                                echo '<h5>'.$results[$i]['movie_name'].'</h5>'; 
                                echo $results[$i]['movie_desc']; 
                                echo '</td>'; 
                                echo '<td class="center">'; 
                                echo ' <a class="small" href="'.$results[$i]['slider_img_path'].'" target="_blank">Full Size</a>';
                                echo '</td>'; 
                                
                                if($results[$i]['status']=='1'){
                                    echo '<td class="center">';
                                    echo 'Active'; 
                                    echo '<button id="deactivatebtn" class="small green">Deactivate</button>';
                                    echo '</td>'; 
                                    
                                }else{
                                    echo '<td class="center">';
                                    echo 'Inactive'; 
                                    echo '<button id="activebtn" class="small">Activate</button>';
                                    echo '</td>'; 
                                }
                                echo ' <td class="center">
						<button id="editbtn1" class="small blue" >Edit</button>
						<button id="deletebtn" class="small red">Delete</button>
					</td>
				</tr>';
                                
                                
                            }
                            
                            
                        }
                        
                        
                        
                        ?>            
                                    
				
                                    
                   

				
</form>
				</tbody>
				</table>
			</div>
		</div>	
    
	<!-- End Movie List -->
<input type="hidden" id="Inactivity" data-inactivity='<?php echo $this->createUrl('admin/Inactivity')?>' />
<input type="hidden" id="DeleteRow" data-deleterow='<?php echo $this->createUrl('admin/DeleteRequest')?>' />