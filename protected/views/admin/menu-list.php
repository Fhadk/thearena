<!DOCTYPE html>
<!--To change this license header, choose License Headers in Project Properties.To change this template file, choose Tools | Templatesand open the template in the editor.--><!-- Start Movie List -->

<div class="col_12">
    <div class="col_9">
        <h4>Menu  Lists</h4>
    </div>
    <div class="col_12">
        <form id="internalform" class="vertical" action="<?php echo Yii::app()->request->baseUrl ?>/index.php/Admin/EditDineInMenu" method="POST">
            <!-- Table -->
            <input type='hidden' id='hiddenrowid' name="hiddenrowid">
            <table cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th width="140">Image</th>
                    <th>Title</th>
                    <th width="100" class="center">City</th>
                    <th width="100" class="center">Menu</th>
                    <th width="100" class="center">Status</th>
                    <th width="100" class="center">Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (isset($results)) {
                    for ($i = 0; $i < count($results); $i++) {
                        echo '<tr id="' . $results[$i]['id'] . '">';
                        echo ' <td><img style="width:300px; height: 275px" src="' . Yii::app()->getBaseUrl(true) . $results[$i]['sliderpath'] . '?' . time() . '" /></td>';
                        echo '<td>';
                        echo '<h5>' . $results[$i]['title'] . '</h5>';
                        echo '</td>';
                        if ($results[$i]['city'] == '1') {
                            echo '<td class="center">';
                            echo 'Rawalpindi';
                            echo '</td>';
                        }
                        else if ($results[$i]['city'] == '2') {
                            echo '<td class="center">';
                            echo 'Lahore';
                            echo '</td>';
                        }
                        else if ($results[$i]['city'] == '3') {
                            echo '<td class="center">';
                            echo 'Karachi';
                            echo '</td>';
                        }
                        if ($results[$i]['menu_category'] == '1') {
                            echo '<td class="center">';
                            echo 'Snacks';
                            echo '</td>';
                        }
                        else if ($results[$i]['menu_category'] == '2') {
                            echo '<td class="center">';
                            echo 'Drinks';
                            echo '</td>';
                        }
                        else if ($results[$i]['menu_category'] == '3') {
                            echo '<td class="center">';
                            echo 'Meals';
                            echo '</td>';
                        }
                        else if ($results[$i]['menu_category'] == '4') {
                            echo '<td class="center">';
                            echo 'Treats';
                            echo '</td>';
                        }
                        else if ($results[$i]['menu_category'] == '5') {
                            echo '<td class="center">';
                            echo 'Combos';
                            echo '</td>';
                        }

                        if ($results[$i]['status'] == '1') {
                            echo '<td class="center">';
                            echo 'Active';
                            echo '</td>';
                        }
                        else {
                            echo '<td class="center">';
                            echo 'Inactive';
                            echo '</td>';
                        }

                        echo ' <td class="center">						<button id="editbtn1" class="small blue" >Edit</button><br>						<a href="' . Yii::app()->request->baseUrl . '/index.php/Admin/DeleteDineInMenu?id=' . $results[$i]['id'] . '" style="color:white;background: red; padding:5px;text-decoration: none;border-radius: 5px; margin-top: 5px" >Delete</a>														</td>				</tr>';                        }                    }                    ?>                                </form>                </tbody>            </table>    </div></div>	<!-- End Movie List --><input type="hidden" id="Inactivity" data-inactivity='<?php echo $this->createUrl('admin/Inactivity') ?>' /><input type="hidden" id="DeleteRow" data-deleterow='<?php echo $this->createUrl('admin/DeleteRequest') ?>' />