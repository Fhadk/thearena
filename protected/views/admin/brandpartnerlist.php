<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Start Movie List -->
<form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/EditBrandPartner" method="POST">
		<div class="col_12">
			<div class="col_9"><h4>Brand Partner List</h4></div>
			
			<div class="col_12">

                    <input type='hidden' id='hiddenrowid' name="hiddenrowid">
                    <table cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="127">Thumbnail</th>
                                <th>Movie Name</th>
                                <th width="100" class="center">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($results)){
                                for($i=0;$i<count($results);$i++){
                                    echo '<tr id="'.$results[$i]['id'].'">';
                                    echo '<td><img src="'.Yii::app()->getBaseUrl(true).$results[$i]['img_url'].'" width="127" /></td>';
                                    echo '<td>'.$results[$i]['title'].'</td>';
                                    echo '<td class="center">';
                                    echo '<button id="editbrandpartner" class="small blue" >Edit</button><br>';
                                    //echo '<a href="'.Yii::app()->request->baseUrl.'/index.php/Admin/DeleteBrandPartner/'.$results[$i]['id'].'">';
                                    echo '<button id="deletebrandpartner" class="small red">Delete</button>';
                                    //echo '</a>';
                                    echo '<br></td></tr>';
                                }
                            }
                            ?>

                            <input type="hidden" id="DeleteRow" data-deleterow='<?php echo $this->createUrl('admin/DeleteBrandPartner')?>' />
                        </tbody>
                    </table>

			</div>
		</div>
</form>
	<!-- End Movie List -->
