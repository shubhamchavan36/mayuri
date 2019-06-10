<?php
use yii\helpers\Url;
use backend\models\ProductImages;
use backend\models\products;
use yii\widgets\ActiveForm; 
?>

<!-- external javascripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>


    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(<?=Yii::getAlias('@web')?>/frontend/web/images/bg-5.jpg);">
      <div class="overlay-main bg-white" style="opacity:0.3;"></div>
      <div class="container">
        <div class="wt-bnr-inr-entry">
          <h1 class="text-black">Product Detail</h1>
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
          <li>Product Detail</li>
        </ul>
      </div>
    </div>
<div class="section-full p-t80 p-b50">
                <div class="container">
                    <div class="row">
                        <!-- RIGHT PART START -->
                        <div class="col-md-12">
                            <div class="row m-b30">
              <div class="col-md-4 col-sm-4 m-b30 slider">
               
                <div class="product-slider">
                    <!-- Place somewhere in the <body id="scroll-top"> of your page -->
                    <div id="slider" class="flexslider">
                      <ul class="slides">
                         <?php 
                         foreach ($data as $value) {
                          ?>
                                  
                          
                        <li><img src="<?=Yii::getAlias('@web')?>/backend/web/images/productimages/<?=$value->image ?>" class="img-responsive" /></li>
                        <!-- <li><img src="images/pic2.jpg" alt="porduct image" class="img-responsive"/></li>
                        <li><img src="images/pic3.jpg" alt="porduct image" class="img-responsive"/></li>
                        <li><img src="images/pic4.jpg" alt="porduct image" class="img-responsive"/></li>
                        <li><img src="images/pic5.jpg" alt="porduct image" class="img-responsive"/></li> -->
                        <?php } ?>
                      </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                      <ul class="slides">
                        <?php 
                         foreach ($data as $value) {
                          ?>
                        <li><img src="<?=Yii::getAlias('@web')?>/backend/web/images/productimages/<?=$value->image ?>"  alt="porduct image" class="img-responsive"/>
                        <span></span></li>
                        <?php } ?>
                        <!-- <li><img src="images/pic2.jpg" alt="porduct image" class="img-responsive"/>
                        <span></span></li>
                        <li><img src="images/pic3.jpg" alt="porduct image" class="img-responsive"/>
                        <span></span></li>
                        <li><img src="images/pic4.jpg" alt="porduct image" class="img-responsive"/>
                        <span></span></li>
                        <li><img src="images/pic5.jpg" alt="porduct image" class="img-responsive"/>
                        <span></span></li> -->
                        
                      </ul>
            
                    </div>
                  </div>
              </div>
              <div class="col-md-8 col-sm-8">
                <div class="wt-post-title ">
                   <?php 
             $product=Products::find()->where(['id'=>$value['product_id']])->one();
              ?>
                  <h3 class="post-title"><a href="javascript:void(0);"><?=$product->title ?></a></h3>
                </div>
                <div class="wt-post-text">
                  <p class="m-b10"><?=$product->description ?></p> 
                </div>
                <table class="table">
  <tr>
     <td><strong>Size</strong></td>
    <td>:</td>
    
    
    
    <td><?=$product->size ?></td>
   
  </tr>
  <tr>
    <td><strong>Pricing</strong></td>
    <td>:</td>
    <td><?=$product->price ?></td>
  </tr>
  <tr>
    <td><strong>Stock Availability</strong></td>
    <td>:</td>
    <td><?=$product->stock_availability ?></td>
  </tr>
  <tr>
    <td><strong>Color</strong></td>
    <td>:</td>
    <td><?=$product->colors ?></td>
  </tr>
</table>


                
              </div>
                    </div>
                        </div>
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

