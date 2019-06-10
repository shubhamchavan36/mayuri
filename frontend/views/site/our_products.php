<?php
use yii\helpers\Url;
use backend\models\ProductImages;
use yii\widgets\ActiveForm; 
?>

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/bg-5.jpg);">
      <div class="overlay-main bg-white" style="opacity:0.3;"></div>
      <div class="container">
        <div class="wt-bnr-inr-entry">
          <h1 class="text-black">Our Products</h1>
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
          <li>Our Products</li>
        </ul>
      </div>
    </div>
<div class="section-full p-t80 p-b50">
                <div class="container">
                    <div class="row">
                    
                        <!-- LEFT PART START -->
                        
                        <!-- SIDE BAR START -->
                       <!--  <div class="col-md-3">
                        
                            <aside  class="side-bar">
                               
                                <div class="widget bg-white  widget_services">
                                    <h4 class="widget-title">Product Categories </h4>
                                    <ul>
                                      <li><a href="javascript:void(0);">Product Title</a></li>
                                      <li><a href="javascript:void(0);">Product Title</a> </li>
                                      <li><a href="javascript:void(0);">Product Title</a>  </li>
                                      <li><a href="javascript:void(0);">Product Title</a>  </li>
                                      <li><a href="javascript:void(0);">Product Title</a>  </li>
                                      <li><a href="javascript:void(0);">Product Title</a>  </li>
                                      <li><a href="javascript:void(0);">Product Title</a>  </li>
                                    </ul>
                                </div>
                            </aside>
    
                        </div> -->
                        <!-- SIDE BAR END --> 
                                               
                        <!-- LEFT PART END -->                     
                    
                        <!-- RIGHT PART START -->
                        <div class="col-md-12">
                            <div class="row">
                            
                                <!-- BLOG GRID START -->
                                <div class=" mfp-gallery wt-blog-grid-2">
                                     <?php foreach($products as $value){ ?>
                                	<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                                                    <?php 
                               $productimages=Productimages::find()->where(['product_id'=>$value['id']])->one();
                                ?>
                                    <div class="wt-box">
                                        <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                          <!--   <img src="images/our-work/pic1.jpg" alt="">
                       -->                     <img src="<?=Yii::getAlias('@web')?>/backend/web/images/productimages/<?= $productimages['image'] ?>"  alt="<?=$value['title']?>">
   
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    
                                                    <a class="" href="<?=Url::to(['site/category','id'=>$value['id']])?>">
                                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                                    </a>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="wt-info p-t20 p-b30">
                                            <h4 class="m-a0"><?=$value['title']?></h4>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
								<!-- <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                            <img src="images/our-work/pic2.jpg" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    
                                                    <a class="" href="product_detail.php">
                                                        <i class="fa fa-link  wt-icon-box-xs"></i>
                                                    </a>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="wt-info p-t20 p-b30">
                                            <h4 class="m-a0">Product Name</h4>
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                            <img src="images/our-work/pic3.jpg" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    
                                                    <a class="" href="product_detail.php">
                                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                                    </a>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="wt-info p-t20 p-b30">
                                            <h4 class="m-a0">Product Name</h4>
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                            <img src="images/our-work/pic4.jpg" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    
                                                    <a class="" href="product_detail.php">
                                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                                    </a>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="wt-info p-t20 p-b30">
                                            <h4 class="m-a0">Product Name</h4>
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc">
                                    <div class="wt-box">
                                        <div class="wt-thum-bx wt-img-overlay1 wt-img-effect zoom">
                                            <img src="images/our-work/pic5.jpg" alt="">
                                            <div class="overlay-bx">
                                                <div class="overlay-icon">
                                                    
                                                    <a class="" href="product_detail.php">
                                                        <i class="fa fa-link wt-icon-box-xs"></i>
                                                    </a>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="wt-info p-t20 p-b30">
                                            <h4 class="m-a0">Product Name</h4>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- RIGHT PART END -->
                        
                    </div>
                </div>
            </div>

  </div>
  <!-- CONTENT END -->
  <!-- FOOTER START -->

  <!-- FOOTER END -->
  <!-- BUTTON TOP START -->
  <button class="scroltop fa fa-arrow-up" ></button>
</div>
<!-- JAVASCRIPT  FILES ========================================= -->

