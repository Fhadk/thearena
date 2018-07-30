<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/gallerycinestar/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl?>/css/gallerycinestar/component.css" />
		<script src="<?php echo Yii::app()->request->baseUrl?>/js/gallerycinestar/modernizr.custom.js"></script>
                
                
                   
                    
                   
                    
                    
                   
                   
                 
<div class="wrapper" style="background-color: #dbdbdb;">

    <div class="cinestargallery">

            <header class="clearfix">
				
				<h1><?php if(isset($foldername)){echo $foldername;}else{ echo 'Gallery';}?><a  id="gallerycinestar"class="back" href="#">Back to Albums</a></h1>
				
			</header>
			<div id="grid-gallery" class="grid-gallery">
				<section class="grid-wrap">
					<ul class="grid">
						<li class="grid-sizer"></li><!-- for Masonry column width -->
                                                <?php if(isset($results)){
                            
                              for($i=0;$i<count($results);$i++){ ?>
						<li>
							<figure>
								<img src="<?php echo $results[$i];?>" alt="img01"/>
								<!--figcaption>
                                                                    <h3>
                                                                    <?php 
                                                               // $fileextremove=  explode('.', $filename[$i]);
                                                                     //echo $fileextremove[0];
                                                                
                                                                    ?>
                                                                    </h3></figcaption-->
							</figure>
						</li>
						
						
					 <?php }} ?>	
						
						
						
					</ul>
				</section><!-- // grid-wrap -->
                                <section class="slideshow">
					<ul>
                                            <?php if(isset($results)){
                            
                              for($i=0;$i<count($results);$i++){ ?>
						<li>
							<figure>
								<!--figcaption>
                                                                    
									<p>
                                                                    <?php 
                                                                //$fileextremove=  explode('.', $filename[$i]);
                                                                    // echo $fileextremove[0];
                                                                
                                                                    ?>
                                                                    </p>
									
								</figcaption-->
								<img src="<?php echo $results[$i];?>" alt="img01"/>
							</figure>
						</li>
						
						
						 <?php }} ?>
						
						
						<li>
					
					</ul>
					<nav>
						<span class="icon nav-prev"></span>
						<span class="icon nav-next"></span>
						<span class="icon nav-close"></span>
					</nav>
					<div class="info-keys icon">----------------------------------Navigate with arrow keys</div>
				</section><!-- // slideshow -->
				
			</div><!-- // grid-gallery -->
		</div>
		<script src="<?php echo Yii::app()->request->baseUrl?>/js/gallerycinestar/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl?>/js/gallerycinestar/masonry.pkgd.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl?>/js/gallerycinestar/classie.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl?>/js/gallerycinestar/cbpGridGallery.js"></script>
		<script>
			new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
		</script>






























<!--    <script type="text/javascript" src="carousel/jquery-1.9.1.min.js"></script> 
    
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/gallery/jquery-1.9.1.min.js?>"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/gallery/jssor.js"></script>
    
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/gallery/jssor.slider.js"></script>
     <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/gallery/gallery-function.js"></script>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl?>/js/gallery/gallery.css">
	 /Carousel 

	
    
     gallery 
 

<?php?>
    <h1><?php //if(isset($foldername)){echo $foldername;}else{ echo 'Gallery';}?><a  id="galleryopera"class="back" href="#">Back to Albums</a></h1>
        
         gallery 
        <div class="wrapper">

             Jssor Slider Begin 
             To move inline styles to css file/block, please specify a class name for each element.  
            <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 970px;
                height: 600px; background: #191919; overflow: hidden;">
        
                 Loading Screen 
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                        background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%; float:left;">
                    </div>
                    <div style="position: absolute; display: block; background: url(gallery/loading.gif) no-repeat center center;
                        top: 0px; left: 0px;width: 100%;height:100%;">
                    </div>
                </div>
        
                 Slides Container 
                <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 970px; height: 500px; overflow: hidden;">
                    <?php// if(isset($results)){
                            
                             // for($i=0;$i<count($results);$i++){ ?>
                   
                    
                    <div>
                        <img u="image" src="<?php// echo $results[$i];?>"width="970"  />
                        <img u="thumb" src="<?php //echo $results[$i];?>" width="72"/>
                    </div>
                    
                    
                   
                    <?php //}} ?>
                 
                       
                </div>
                
                 Arrow Left 
                <span u="arrowleft" class="jssora05l" style="top: 230px; left: 8px;"></span>
                 Arrow Right 
                <span u="arrowright" class="jssora05r" style="top: 230px; right: 8px"></span>
        
                 thumbnail navigator container 
                <div u="thumbnavigator" class="jssort01" style="left: 0px; bottom: 0px;">
                     Thumbnail Item Skin Begin 
                    <div u="slides" style="cursor: default;">
                        <div u="prototype" class="p">
                            <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                            <div class=c></div>
                        </div>
                    </div>
                     Thumbnail Item Skin End 
                </div>
            </div>
             Jssor Slider End 
    </div>
</div>
         /gallery -->
