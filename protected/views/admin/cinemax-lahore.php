<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Start Movie List -->
<?php //var_dump(Yii::app()->session['locations']);die(); 

?>
<?php if(isset($_REQUEST['locationid'])){$locationid=$_REQUEST['locationid'];}else{$locationid=$location;} ?>
    	<div class="col_12">
			<div class="col_9"><h4>Schedule - <?php  echo $locationname[0]['location_name'];?></h4></div>
			
			<hr>
			
			<div class="col_9">
				<!-- form -->
                                
                     <form class="" id="newrow" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/CinemaxLahore?locationid=<?php echo $locationid; ?>" method="GET">               
                    <label for="select1">Date</label>
                    <?php
                    if(isset($datepickerdate)){
                        $datep=$datepickerdate;
                    }else if(isset ($datetimr)){
                        $datep=$datetimr;
                    }else{
                        $datep=date('m/d/Y ');
                    }
                    ?>
                    <input type="text" class="datepickersearch datepickersub" id="datepicker" name="serachdate" value="<?php echo $datep;?>">
                    
                    <input type="hidden" name="locationid" value="<?php echo $locationid; ?>">
                    <!--button class="small green" id='searchbtn'>Refresh</button-->

                </form>
                <!-- form end -->
			</div>

			<div class="col_3 right">
                            
				  <form class="" id="newrow1" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/CinemaxLahore?locationid=<?php echo $locationid; ?>" method="POST">
                                      <?php if(count($showtimings)<=0){ ?>
                                      <input type="hidden" name="locationid" value="<?php echo $locationid; ?>">
                                    <select  id="locationCombo" name="locationCombo" >
                                                    <?php
                                                         $locations=Yii::app()->session['locations'];              
                                                    if(isset($locations)){
                                                    for($i=0; $i<count($locations); $i++)
                                                    {

                                                        echo "<option value=".$locations[$i]['id']." id=".$locations[$i]['id']." >". $locations[$i]['location_name']."</option>";
                                                    }
                                                    }
                                                    ?>
						
						</select>
                                      <input type="hidden" class="datepickersearch todate" id="datepicker" name="todatepicker" value="<?php echo $datep;?>">
                                        <input type="text" class="datepickersearch fromdatepicker" id="fromdatepicker" name="fromdatepicker" value="<?php echo $datep;?>">
                                        <button  class="small orange copyschedule" name="copysche" formaction="">Copy Schedule</button>
                                        <?php } ?> 
					<button  class="small orange addtime" formaction="">Add Time</button>
                                        
					 
				</form>
			</div>			
			
			<hr>
                        
						
			<div class="col_12">
                            <form class="vertical" id="newrow" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/SaveShowTimings" method="POST">
				<!-- Table -->
                                <input type="hidden" id="locationid" name="locationid" value="<?php echo $locationid;?>">
 <?php

 ?>                               <table cellspacing="0" cellpadding="0" id="gridcinemax">
				<thead><tr>
               <th>Movie Name</th>
					<th width="150" class="center">Day</th>
					<th width="150" class="center">Date</th>
					<th width="150" class="center">Time</th>
                    <?php //if($locationid == 2 || $locationid == 5){ ?>
                        <th width="70" class="center">Show</th>
                        <th width="70" class="center">Screen</th>
                    <?php //} ?>

					<th width="200" class="center">Edit</th>
				</tr></thead>
				<tbody>
                                     <?php
                                                    
                                                    for($j=0; $j<count($showtimings); $j++)
                                                    {
                                                        
                                                        $time = strtotime($showtimings[$j]['showdateetime']);
                                                    $formateddate = date("M d, y", $time);
                                                    $formatedtime = date("h:i:s A", $time);
                                                   
                                                        echo'<tr id="'.$showtimings[$j]["id"].'">';

                                                        echo "<td>". $showtimings[$j]['movies_name']."</td>";
                                                        echo "<td>". $showtimings[$j]['showtime_day']."</td>";
                                                        echo "<td>". $formateddate."</td>";
                                                        echo "<td>".$formatedtime."</td>";
                                   //  if($locationid == 2 || $locationid == 5) {
                                         echo "<td>" . $showtimings[$j]['show_order'] . "</td>";
                                         echo "<td>" . $showtimings[$j]['screen'] . "</td>";
                                   //  }
                                                        echo "<td class='center'><button id='editbtn' class='small blue'>Edit</button>	<button id='deleterow' class='small red'>Delete</button></td>";
                                                        
                                                         echo'</tr>';
                                                    }

                                                    ?>


				


				</tbody>
				</table>
				</form>
			</div>
		</div>	
	<!-- End Movie List -->
<select style='display: none;' id="moviedropdown" >
                                                    <?php
                                                    if(isset($model)){
                                                    for($i=0; $i<count($model); $i++)
                                                    {

                                                        echo "<option id=".$model[$i]['id']." >". $model[$i]['movie_name']."</option>";
                                                    }
                                                    }
                                                    ?>
						
						</select>
        <input type="hidden" id="DeleteRow" data-deleterow='<?php echo $this->createUrl('admin/GetAjaxRequest')?>' />
        <input type="hidden" id="EditRow" data-editrow='<?php echo $this->createUrl('admin/EditDataRequest')?>' />