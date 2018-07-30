<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<div class="col_12 sms-list">
    <div class="col_9">
        <h4>SMS List</h4>

        <form class=""  action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/Csv" method="POST" enctype="multipart/form-data">
            <label for="cinestar-township-download">The Arena</label>
            <button id="cinestar-township-download" name="All"> Download List</button>
<!--            <br>-->
<!---->
<!--            <label for="cinestar-taj-download">Cinestar TAJ</label>-->
<!--            <button id="cinestar-taj-download"  name="cinestar-taj"> Download List</button>-->
<!--            <br>-->
<!---->
<!--            <label for="cinestar-multan-download">Cinestar Multan</label>-->
<!--            <button id="cinestar-multan-download"  name="cinestar-multan"> Download List</button>-->
<!--            <br>-->
<!---->
<!--            <label for="cinestar-xinhua-download">Cinestar Xinhua Mall</label>-->
<!--            <button id="cinestar-xinhua-download"  name="cinestar-xinhua"> Download List</button>-->
<!--            <br>-->
<!---->
<!--            <label for="cinestar-xinhua-download">Other</label>-->
<!--            <button id="cinestar-xinhua-download"  name="other"> Download List</button>-->
        </form>


    </div>
    <!--<input type="file" id="ctrl" webkitdirectory directory multiple/>-->
    
</div>

