<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Start Movie List -->
<?php 
if(isset($_REQUEST['foldername']) && $_REQUEST['foldername'] != ''){
    $foldername = $_REQUEST['foldername'];
}else{
 // do nothing
}
// $foldername=(isset($_REQUEST['foldername'])?$_REQUEST['foldername']:$foldername;

?>
<form class="vertical" action="<?php echo Yii::app()->request->baseUrl?>/index.php/Admin/UploadGalleryImage" method="POST" enctype="multipart/form-data">
   
                    
                    <input  name="galleryphoto"  type="file" >
                    <input id="foldername"  name="foldername"  type="hidden" value="<?php echo $foldername; ?>" >

                    <hr />

                    <button class="medium green">Upload Image</button>
                    
                    
                    </form>
<?php if(isset($message)){
      if(!empty($message)){
    ?>
<div class="center"><?php echo $message; ?> </div>
<?php }} ?>
		<div class="col_12">
			<div class="col_9"><h4>Photo Viewer</h4></div>
			
			<div class="col_12">
				<form>
				<!-- Table -->
                                <input type='hidden' id='hiddenrowid' name="hiddenrowid">
				<table cellspacing="0" cellpadding="0">
				<thead><tr>
               <th width="127">Thumbnail</th>
					
					<th width="100" class="center">Action</th>
				</tr></thead>
				<tbody>
                              <?php if(isset($results)){
                            
                              for($i=0;$i<count($results);$i++){ 
                                  $imgname = substr($results[$i], strrpos($results[$i], '/') + 1);
                                  $name=  explode('.',$imgname );
                                   echo '<tr id="'.$imgname.'" class="'.$name[0].'">'; 
                                   echo '<td><img src="'.Yii::app()->getBaseUrl(true) . $results[$i].'" width="127" /></td>'; 
                                  
                                   echo '<td class="center">
						
						<button id="deleteimage" class="small red">Delete</button><br>
					</td>
				</tr>'; 
                                  
                                  
                              }}
                              ?>
				
               
					
					
		<input type="hidden" id="DeleteFile" data-deletefile='<?php echo $this->createUrl('admin/DeleteFile')?>' />			

				
				</tbody>
				</table>
				
			</div>
		</div>	

	<!-- End Movie List -->
