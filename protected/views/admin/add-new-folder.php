<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php ?>
<div class="col_12">
			<div class="col_9"><h4>Album List</h4></div>
			
			<hr>
			

			<div class="col_3 left">
                            
				  <form class="" id="newrow" action="/opera/index.php/Admin/CinemaxLahore?locationid=1" method="POST">
                                      <!--<input type="hidden" name="locationid" value="">-->
                                    
                                      <button id="createfolder_"  class="small orange createfolder" formaction="">Create Folder</button>
                                        
					
				</form>
			</div>			
			
			<hr>
                        
						
			<div class="col_12">
                            <div id="error"> </div>
                            <form class="vertical">
				<!-- Table -->
                                <input type="hidden" id="locationid" name="locationid" value="1">
                                <table cellspacing="0" cellpadding="0" id="gridcinemax">
				<thead><tr>
               <th>Folder Name</th>
					
					<th width="200" class="center">Action</th>
				</tr></thead>
				<tbody>
                                    <?php for( $i=0; $i<count($results);$i++){ ?>
                                    <tr id="<?php echo $results[$i]; ?>">
                                        <td>
                                            <a href="<?php echo Yii::app()->request->baseUrl.'/index.php/Admin/GalleryViewer?foldername='.$results[$i]; ?>"><?php echo $results[$i]; ?></a>
                                        </td>
                                        <td class='center'>
                                            <button id="deletefolder" class='small red'>Delete</button>
                                        </td>
                                    </tr>

                                    <?php } ?>


				</tbody>
				</table>
				</form>
			</div>
		</div>	
	<!-- End Movie List -->
<select style='display: none;' id="moviedropdown" >
                                                    <option id=58 >Insider</option><option id=57 >Bajrangi bhai jan</option><option id=55 >Terminator</option>						
						</select>
        <input type="hidden" id="CreateFolder" data-createfolder='<?php echo $this->createUrl('admin/CreateFolder')?>' />
        <input type="hidden" id="DeleteFolder" data-deletefolder='<?php echo $this->createUrl('admin/DeleteFolder')?>' />
        
	</div>






