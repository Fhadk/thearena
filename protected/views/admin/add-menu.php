<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<div class="col_12">
    <h4>Add Dine In Menu</h4>  <hr />
</div>

<div class="col_12">
    <!-- form -->
    <form class="vertical"  action="<?php echo Yii::app()->request->baseUrl ?>/index.php/Admin/SaveAddMenu" method="POST" enctype="multipart/form-data">

        <div class="col_2"><!-- empty --></div>

        <div class="col_8 column">
            <label for="text2"> Title</label>
            <input id="title" name="title" type="text" placeholder="Enter Title" />

            <label for="text2"> Description</label>
            <textarea id="description" name="description" required=""  resize="none"></textarea>


            <label for="textarea1">Price</label>
            <input id="price" name='price' type="text" placeholder="Enter Price" required/>

            <label for="file1">Menu Image (332px x 329px)(This will use on Dine in Tabs.</label>
            <input id="file1" name="sliderpath" type="file" class="file"  >

            <label for="select1">Set City</label>
            <select name="city" id="city">
                <option value="1">Rawalpindi</option>
                <option value="2">Lahore</option>
                <option value="3">Karachi</option>
            </select>
            <label for="select1">Set Category</label>
            <select name="menu_category" id="menu_category">
                <option value="1">Snacks</option>
                <option value="2">Drinks</option>
                <option value="3">Meals</option>
                <option value="4">Treats</option>
                <option value="5">Combos</option>
            </select>

            <label for="select1">Set Status</label>
            <select name="status" id="status">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>

            <hr />

            <button class="medium green">Add Menu</button>
            <a class="Medium button" href="<?php echo Yii::app()->request->baseUrl ?>/index.php/Admin/DineInList" >Cancel</a>


        </div>

    </form>
    <!-- form end -->

</div>
