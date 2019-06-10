<?php 
use yii\helpers\Url;
?>

    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/bg-5.jpg);">
      <div class="overlay-main bg-white" style="opacity:0.3;"></div>
      <div class="container">
        <div class="wt-bnr-inr-entry">
          <h1 class="text-black">About Us</h1>
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
          <li>About Us</li>
        </ul>
      </div>
    </div>
<div class="section-full p-tb100">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-5">
            <div class="about-com-pic"><!--  <img src="images/abt_img.png" alt="" class="img-responsive"/>  -->
               <img src="<?=Yii::getAlias('@web')?>/backend/web/images/about/<?=$pages[0]['image']?>" alt="<?=$pages[0]['title']?>" class="img-responsive"/>
            </div>
          </div>
          <div class="col-md-8 col-sm-7">
            <div class="section-head text-left">
              <h2 class="text-uppercase">About Company</h2>
              <div class="wt-separator-outer">
                <div class="wt-separator style-square"> <span class="separator-left bg-primary"></span> <span class="separator-right bg-primary"></span> </div>
              </div>
              <p><?=$pages[0]->description;?> </p>
            </div>
            <div class="about-types row">
              <div class="col-md-12 col-sm-12 p-tb20">
                <div class="wt-icon-box-wraper left p-l20  bdr-1 bdr-gray-light">
                  <div class="icon-sm text-primary"> <a href="#" class="icon-cell p-t5 center-block"><i class="fa fa-eye" aria-hidden="true"></i></a> </div>
                  <div class="icon-content">
                    <h5 class="wt-tilte text-uppercase m-b0"><?=$pages[1]['title']?></h5>
                    <p><?=strip_tags($pages[1]->description)?>  </p>
                  </div>
                </div>
				<div class="wt-divider bg-gray-dark text-gray-dark icon-center"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
              </div>
			  
              <div class="col-md-12 col-sm-12 p-tb20 ">
                <div class="wt-icon-box-wraper left  p-l20 bdr-1 bdr-gray-light">
                  <div class="icon-sm text-primary"> <a href="#" class="icon-cell p-t5 center-block"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a> </div>
                  <div class="icon-content">
                    <h5 class="wt-tilte text-uppercase m-b0"><?=$pages[2]['title']?></h5>
                    <p><?=strip_tags($pages[2]->description)?>  </p>
                  </div>
                </div>
				<div class="wt-divider bg-gray-dark text-gray-dark icon-center"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
              </div>
              <div class="col-md-12 col-sm-12 p-tb20 ">
                <div class="wt-icon-box-wraper left  p-l20 bdr-1 bdr-gray-light">
                  <div class="icon-sm text-primary"> <a href="#" class="icon-cell p-t5 center-block"><i class="fa  fa-balance-scale" aria-hidden="true"></i></a> </div>
                  <div class="icon-content">
                    <h5 class="wt-tilte text-uppercase m-b0 "><?=$pages[3]['title']?></h5>
                    <p> <?=strip_tags($pages[3]->description)?> </p>
                  </div>
                </div>
				<div class="wt-divider bg-gray-dark text-gray-dark icon-center"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
              </div>
              <div class="col-md-12 col-sm-12 p-tb20 ">
                <div class="wt-icon-box-wraper left p-l20 bdr-1 bdr-gray-light">
                  <div class="icon-sm text-primary"> <a href="#" class="icon-cell p-t5 center-block"><i class="fa fa-trophy" aria-hidden="true"></i></a> </div>
                  <div class="icon-content">
                    <h5 class="wt-tilte text-uppercase m-b0"><!-- Our Achivements --><?=$pages[4]['title']?></h5>
                    <p><?=strip_tags($pages[4]->description)?> </p>
                  </div>
                </div>
				<div class="wt-divider bg-gray-dark text-gray-dark icon-center"><i class="fa fa-circle bg-white text-gray-dark"></i></div>
              </div>
            </div>
          </div>
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
