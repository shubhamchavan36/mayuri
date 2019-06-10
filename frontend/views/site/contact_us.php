<?php 
use yii\helpers\Url;
use yii\widgets\ActiveForm; 
use backend\models\Contactus;
//use backend\models\ProductImages;
?>

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/bg-5.jpg);">
      <div class="overlay-main bg-white" style="opacity:0.3;"></div>
      <div class="container">
        <div class="wt-bnr-inr-entry">
          <h1 class="text-black">Contact Us</h1>
		  <div class="wt-separator-outer">
                            <div class="wt-separator style-square has-bg">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
        </div>
      </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
      <div class="container">
        <ul class="wt-breadcrumb breadcrumb-style-1">
          <li><a href="<?=Url::to(['site/index'])?>">Home</a></li>
          <li>Contact Us</li>
        </ul>
      </div>
    </div>
<div class="section-full p-t80 p-b50">
                <div class="container">
				
                
                    <div class="section-content m-b50">
                        <div class="row">
                        
                        	<!-- LOCATION BLOCK-->
                            <div class="wt-box col-md-6">
                                <h4 class="text-uppercase">Location</h4>
                                <div class="wt-separator-outer m-b30">
                                   <div class="wt-separator style-square">
                                       <span class="separator-left bg-primary"></span>
                                       <span class="separator-right bg-primary"></span>
                                   </div>
                               </div>
                                Update soon...
                            </div>

                            <!-- CONTACT FORM-->
                            <div class="wt-box col-md-6">
							<div class="row">
							 <div class="col-md-6 col-sm-12 m-b30">
                                      <?php $contact =Contactus::find()->one();?>
                                        <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm bg-primary m-b20 corner"><span class="icon-cell"><i class="fa fa-phone"></i></span></div>
                                            <div class="icon-content">
                                                <h5>Phone</h5>
                                                <p>+91 <?=$contact['phone'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 m-b30">
                                        <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm bg-primary m-b20 corner"><span class="icon-cell"><i class="fa fa-envelope"></i></span></div>
                                            <div class="icon-content">
                                                <h6>Email</h6>
                                                <p><?=$contact['email'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    
							<div class="col-md-12 col-sm-12 m-b30">
                                        <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                                            <div class="wt-icon-box-sm bg-primary m-b20 corner"><span class="icon-cell"><i class="fa fa-map-marker"></i></span></div>
                                            <div class="icon-content">
                                                <h5>Address</h5>
                                                <p><?= $contact['address'] ?></p>
                                            </div>
                                        </div>
                                    </div>
							</div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- CONTACT DETAIL BLOCK -->
                    
                    
                </div>
           </div>

  </div>
  <!-- CONTENT END -->
  <!-- FOOTER START -->
 
  <!-- FOOTER END -->
  <!-- BUTTON TOP START -->
  <button class="scroltop fa fa-arrow-up" ></button>
</div>

