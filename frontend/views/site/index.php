

<?php
use yii\helpers\Url;
use backend\models\ProductImages;
use backend\models\Slideshow;
use yii\widgets\ActiveForm;


?>



    <!-- SLIDER START -->
    <div class="main-slider style-two default-banner">
      <div class="tp-banner-container">
        <div class="tp-banner" >
          <!-- START REVOLUTION SLIDER 5.4.1 -->
          <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
            <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
               <ul>
                <?php
               
                foreach ($slideshow as $key => $value) { ?>
                  
                 
              <!-- SLIDE 1 -->
                <li data-index="rs-1000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?=Yii::getAlias('@web')?>/backend/web/images/slideshow/<?= $value->image?>" 
                   data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="<?=Yii::getAlias('@web')?>/backend/web/images/slideshow/<?=$value->image?>"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                  <!-- LAYERS -->
                  <!-- LAYER NR. 1 [ for overlay ] -->
                   <div class="tp-caption tp-shape tp-shapewrapper " 
                                        id="slide-100-layer-1" 
                                        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                        data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                        data-width="full"
                                        data-height="full"
                                        data-whitespace="nowrap"
                                        data-type="shape" 
                                        data-basealign="slide" 
                                        data-responsive_offset="off" 
                                        data-responsive="off"
                                        data-frames='[
                                        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                        ]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        
                                        style="z-index: 12;background-color:rgba(0, 0, 0, 0.3);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div> 
                  <!-- LAYER NR. 2 [ for title ] -->
                  <div class="tp-caption   tp-resizeme" 
                                        id="slide-100-layer-2" 
                                        data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" 
                                        data-y="['top','top','top','top']" data-voffset="['175','175','175','175']"  
                                        data-fontsize="['40','40','40','30']"
                                        data-lineheight="['70','70','70','60']"
                                        data-width="['700','700','700','700']"
                                        data-height="['none','none','none','none']"
                                        data-whitespace="['normal','normal','normal','normal']"
                                    
                                        data-type="text"    
                                        data-responsive_offset="on" 
                                        data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                    
                                        style="z-index: 13; 
                                        white-space: normal; 
                                        font-weight: 700; 
                                        color: rgba(255, 255, 255, 1.00);
                                        border-width:0px;"> <span class="text-uppercase" style="font-family:'Roboto' ;"><span class="text-primary" style="color:#042a78"><?=$value->title?></span> </span> </div>
                  <!-- LAYER NR. 3 [ for paragraph] -->
                  <div class="tp-caption  tp-resizeme" 
                                        id="slide-100-layer-3" 
                                        data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" 
                                        data-y="['top','top','top','top']" data-voffset="['250','250','250','250']"  
                                        data-fontsize="['18','18','18','30']"
                                        data-lineheight="['30','30','30','40']"
                                        data-width="['650','650','650','650']"
                                        data-height="['none','none','none','none']"
                                        data-whitespace="['normal','normal','normal','normal']"
                                    
                                        data-type="text" 
                                        data-responsive_offset="on"
                                        data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                    
                                        style="z-index: 13; 
                                        font-weight: 500; 
                                        color: rgba(255, 255, 255, 0.85);
                                        border-width:0px;"> <span style="font-family:'Roboto';"><?=$value->sub_title?> </div>
                  <!-- LAYER NR. 4 [ for readmore botton ] -->
                  <div class="tp-caption tp-resizeme"   
                                        id="slide-100-layer-4"                      
                                        data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']" 
                                        data-y="['top','top','top','top']" data-voffset="['370','370','370','370']"  
                                        data-lineheight="['none','none','none','none']"
                                        data-width="['300','300','300','300']"
                                        data-height="['none','none','none','none']"
                                        data-whitespace="['normal','normal','normal','normal']"
                                        
                                        data-type="text" 
                                        data-responsive_offset="on"
                                        data-frames='[ 
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                        data-textAlign="['left','left','left','left']"
                                        data-paddingtop="[0,0,0,0]"
                                        data-paddingright="[0,0,0,0]"
                                        data-paddingbottom="[0,0,0,0]"
                                        data-paddingleft="[0,0,0,0]"
                                        
                                        style="z-index:13; text-transform:uppercase; font-weight:700;"> <a href="<?=Url::to(['site/our-products'])?>" class="site-button button-lg skew-icon-btn m-r15">View Products <i class="fa fa-angle-double-right"></i></a> </div>
                </li>
                <?php 
        } ?>

              </ul>
              <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
          </div>
          <!-- END REVOLUTION SLIDER -->
        </div>
      </div>
    </div>
    <!-- SLIDER END -->
	<div class="section-full text-center home_thumbs">
	<div class="container">
	<div class="section-content">
                            <div class="row">
                                <!-- COLUMNS 1 -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="wt-icon-box-wraper bx-style-1 p-a30 center m-b30 box1">
                                        <div class="wt-icon-box-sm radius icon_bg m-b20">
                                            <span class="icon-cell text-gray"><i class="fa fa-eye"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase"><?=$pages[1]['title']?></h5>
                                            <p>
                                             <?=substr(strip_tags($pages[1]['description']),0,70)?>  <a href="<?=Url::to(['site/about-us']) ?>">[Read More]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="wt-icon-box-wraper bx-style-1 p-a30 center m-b30 box2">
                                        <div class="wt-icon-box-sm radius icon_bg m-b20">
                                            <span class="icon-cell text-gray"><i class="fa fa-paper-plane-o"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase"><?=$pages[2]['title']?></h5>
                                            <p><?=substr(strip_tags($pages[2]['description']),0,70)?> <a href="<?=Url::to(['site/about-us']) ?>">[Read More]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="wt-icon-box-wraper bx-style-1 p-a30 center m-b30 box3">
                                        <div class="wt-icon-box-sm radius icon_bg m-b20">
                                            <span class="icon-cell text-gray"><i class="fa  fa-balance-scale"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase"><?=$pages[3]['title']?></h5>
                                            <p><?=substr(strip_tags($pages[3]['description']),0,70)?> <a href="<?=Url::to(['site/about-us']) ?>">[Read More]</a></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 4 -->
                                <div class="col-md-3 col-sm-6">
                                    <div class="wt-icon-box-wraper bx-style-1 p-a30 center m-b30 box4">
                                        <div class="wt-icon-box-sm radius icon_bg m-b20">
                                            <span class="icon-cell text-gray"><i class="fa fa-trophy"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase"><?=$pages[4]['title']?></h5>
                                            <p><?=substr(strip_tags($pages[4]['description']),0,70)?> <a href="<?=Url::to(['site/about-us']) ?>">[ReadMore]</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						</div></div>
    <!-- ABOUT COMPANY SECTION START -->
    <div class="section-full p-b100">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5">
            <div class="about-com-pic"> <img src="<?=Yii::getAlias('@web')?>/backend/web/images/about/<?=$pages[0]['image']?>" alt="<?=$pages[0]['title']?>"/> </div>
          </div>
          <div class="col-md-7 col-sm-7">
            <div class="section-head text-left">
              <h2 class="text-uppercase">About Company</h2>
              <div class="wt-separator-outer">
                <div class="wt-separator style-square"> <span class="separator-left bg-primary"></span> <span class="separator-right bg-primary"></span> </div>
              </div>
              <p><?= substr(strip_tags($pages[0]['description']),0,1100) ?> <a href="<?=Url::to(['site/about-us'])?>">[Read More]</a> </p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- ABOUT COMPANY SECTION END -->
    <div class="section-full bg-gray p-t80 p-b50">
      <div class="container">
        <!-- IMAGE CAROUSEL START -->
        <!-- TITLE START -->
        <div class="section-head">
          <h2 class="text-uppercase">Our Products</h2>
          <div class="wt-separator-outer">
            <div class="wt-separator style-square"> <span class="separator-left bg-primary"></span> <span class="separator-right bg-primary"></span> </div>
          </div>
        </div>
        <!-- TITLE END -->
        <!-- CAROUSEL -->
        <div class="section-content">
          <div class="owl-carousel portfolio-carousel mfp-gallery gallery owl-btn-vertical-center">
            <!-- COLUMNS 1 -->
            <?php foreach($products as $value){ ?>
            <div class="item">
              <div class="ow-portfolio">
                <?php 
               $productimages=Productimages::find()->where(['product_id'=>$value['id']])->one();
                ?>
                <div class="ow-portfolio-img wt-img-overlay1 wt-img-effect zoom-slow"> <img src="<?=Yii::getAlias('@web')?>/backend/web/images/productimages/<?= $productimages['image'] ?>"  alt="<?=$value['title']?>" >
                  <div class="overlay-bx">
                    <div class="overlay-icon"> <a href="<?=Url::to(['site/category','id'=>$value['id']])?>"><i class="fa fa-link wt-icon-box-xs"></i> </a> </div>
                  </div>
                </div>
                <div class="ow-entry-title"><a href="<?=Url::to(['site/category','id'=>$value['id']])?>"><?=$value['title']?></a></div>
              </div>
            </div>
            
            <?php } ?>
          
<!--             <div class="item">
              <div class="ow-portfolio">
                <div class="ow-portfolio-img wt-img-overlay1 wt-img-effect zoom-slow"> <img src="images/our-work/pic6.jpg" alt="">
                  <div class="overlay-bx">
                    <div class="overlay-icon"> <a href="javascript:;"> <i class="fa fa-link wt-icon-box-xs"></i> </a> </div>
                  </div>
                </div>
                <div class="ow-entry-title"><a href="javascript:void(0);">Project Title</a></div> -->
              </div>
            </div>
          </div>
        </div>

  

