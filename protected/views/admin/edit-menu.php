<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="col_12">
    <h4>Edit Dine In Menu</h4>  <hr />
</div>

<div class="col_12">
    <!-- form -->
    <form class="vertical"  action="<?php echo Yii::app()->request->baseUrl ?>/index.php/Admin/UpdateMenu" method="POST" enctype="multipart/form-data">

        <div class="col_2"><!-- empty --></div>

        <div class="col_8 column">
            <label for="text2"> Title</label>
            <input id="title" name="title" type="text" placeholder="Enter Title" value="<?php echo $results[0]['title'] ?>"/>

            <label for="text2"> Description</label>
            <textarea id="description" name="description" required=""  resize="none"><?php echo $results[0]['description'] ?></textarea>


            <label for="textarea1">Price</label>
            <input id="price" name='price' type="text" placeholder="Enter Price" value="<?php echo $results[0]['price'] ?>" required/>

            <label for="file1">Menu Image (332px x 329px)(This will use on Dine in Tabs.</label>
            <table>
                <tr>
                    <td width="300"><img src="<?php echo $results[0]['sliderpath'] ?>" width="300" /></td>
                <input id="file1" name="sliderpath" type="file" class="file small blue"  >
<!--                    			<td><button class="small blue">Upload New</button></td>-->
                </tr>
            </table>


            <label for="select1">Set City</label>
            <select name="city" id="city">
                <?php
                if ($results[0]['city'] == '1') {
                    ?>
                    <option value="1" selected="selected">Rawalpindi</option>
                    <option value="2">Lahore</option>
                    <option value="3">Karachi</option>
                    <?php
                } else if ($results[0]['city'] == '2') {
                    ?>
                    <option value="1">Rawalpindi</option>
                    <option value="2" selected="selected">Lahore</option>
                    <option value="3">Karachi</option>
                    <?php
                } else if ($results[0]['city'] == '3') {
                    ?>
                    <option value="1">Rawalpindi</option>
                    <option value="2">Lahore</option>
                    <option value="3" selected="selected">Karachi</option>
                    <?php
                }
                ?>
            </select>
            <label for="select1">Set Category</label>
            <select name="menu_category" id="menu_category">
                <?php
                if ($results[0]['menu_category'] == '1') {
                    ?>
                    <option value="1" selected="selected">Snacks</option>
                    <option value="2">Drinks</option>
                    <option value="3">Meals</option>
                    <option value="4">Treats</option>
                    <option value="5">Combos</option>
                    <?php
                } else if ($results[0]['menu_category'] == '2') {
                    ?>
                    <option value="1">Snacks</option>
                    <option value="2" selected="selected">Drinks</option>
                    <option value="3">Meals</option>
                    <option value="4">Treats</option>
                    <option value="5">Combos</option>
                    <?php
                } else if ($results[0]['menu_category'] == '3') {
                    ?>

                    <option value="1">Snacks</option>
                    <option value="2">Drinks</option>
                    <option value="3" selected="selected">Meals</option>
                    <option value="4">Treats</option>
                    <option value="5">Combos</option>
                    <?php
                } else if ($results[0]['menu_category'] == '4') {
                    ?>
                    <option value="1">Snacks</option>
                    <option value="2">Drinks</option>
                    <option value="3">Meals</option>
                    <option value="4" selected="selected">Treats</option>
                    <option value="5">Combos</option>
                    <?php
                } else if ($results[0]['menu_category'] == '5') {
                    ?>
                    <option value="1">Snacks</option>
                    <option value="2">Drinks</option>
                    <option value="3">Meals</option>
                    <option value="4">Treats</option>
                    <option value="5" selected="selected">Combos</option>
                    <?php
                }
                ?>

            </select>

            <label for="select1">Set Status</label>
            <select id="select1" name="status">
                <?php
                if ($results[0]['status'] == '1') {
                    ?>
                    <option value="1" selected="selected">Active</option>
                    <option value="2">Inactive</option>
                    <?php
                } else if ($results[0]['status'] == '0') {
                    ?>
                    <option value="1" >Active</option>
                    <option value="2" selected="selected">Inactive</option>
                    <?php
                } else {
                    ?>
                    <option value="1" selected="selected" >Active</option>
                    <option value="2" >Inactive</option>
                    <?php
                }
                ?>
                <option value="0">-- Choose Status --</option>

            </select>

            <hr />

            <button class="medium green">Add Menu</button>
            <a class="Medium button" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/Admin/DineInMenuList" >Cancel</a>


        </div>

    </form>
    <!-- form end -->

</div>
