<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Set Movie Order -->
   <form class="" id="newrow" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/Slider" method="POST">
		<div class="col_12">
			<div class="col_12">
              <h4>Set Movie Order For Main Slider</h4>  <hr />
            </div>

			<div class="col_12 center">
				<!-- Table -->
				<table cellspacing="0" cellpadding="0">
				<thead><tr>
					<th width="100" class="center">Set Order</th>
					<th>Movie Name</th>
				</tr></thead>
				<tbody>
                           <?php
                                    
                                    for($i=0 ;$i<count($results);$i++){
                                    echo '<tr>';
                                    echo '<td class="center">';
                                    echo '<select name="slider[]" id="select1" class="sliderdropdown">';
                                    for($j=1 ;$j<count($results)+1;$j++){
                                        $sliderselect=$i+1;
                                        if($sliderselect==$j){
                                    echo '<option value="'.$j.'" selected="selected">'.$j.'</option>';
                                        }
                                        else{
                                           echo '<option value="'.$j.'">'.$j.'</option>'; 
                                        }
                                    }
                                    
                                    echo '</select>';
                                    
                                    
                                    echo '</td>
					<td>'.$results[$i]['movie_name'].'</td>
                                            <input type=hidden name="slidermovie[]" value="'.$results[$i]['movie_name'].'"/>
				</tr>';
                                    }
                                    
                                    ?>
				
					
						<!-- Select -->
						
							
							
							
							
					

				
				</tbody>
				</table>
				
				<hr>
				
			  <button class="medium green sliderupdate" >Update</button>
			  <button class="Medium">Cancel</button>
				

			</div>
		</div>
   </form>
	<!-- Set Movie Order -->
