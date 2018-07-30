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
			<div class="col_9"><h4>Dine In slider Lists</h4></div>
			<div class="col_12">
				<form id="internalform" class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/EditDineInSliderList" method="POST">
				<!-- Table -->
                                <input type='hidden' id='hiddenrowid' name="hiddenrowid">
				<table cellspacing="0" cellpadding="0">
				<thead><tr>
                    <th width="140">Image</th>
					<th>Title</th>
					<th width="100" class="center">Status</th>
					<th width="100" class="center">Edit</th>
				</tr></thead>
				<tbody>
                                    
                        <?php
                        if(isset($results)){
                            
                            for($i=0;$i<count($results);$i++){
                                echo '<tr id="'.$results[$i]['id'].'">'; 
                                echo ' <td><img style="width:300px; height: 275px" src="'. Yii::app()->getBaseUrl(true) . $results[$i]['sliderpath'].'?' . time() . '" /></td>'; 
                                echo '<td>'; 
                                echo '<h5>'.$results[$i]['title'].'</h5>'; 
                                echo '</td>';
                                 if($results[$i]['status']=='1'){
                                    echo '<td class="center">';
                                    echo 'Active'; 
                                    echo '</td>'; 
                                    
                                }else{
                                    echo '<td class="center">';
                                    echo 'Inactive'; 
                                    echo '</td>'; 
                                }
			
                                echo ' <td class="center">
						<button id="editbtn1" class="small blue" >Edit</button><br>
						<a href="' . Yii::app()->request->baseUrl . '/index.php/Admin/DeleteDineInSlider?id='. $results[$i]['id'] . '" style="color:white;background: red; padding:5px;text-decoration: none;border-radius: 5px; margin-top: 5px" >Delete</a>
			
						
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