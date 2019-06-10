<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use backend\models\SocialMedia;
use backend\models\Seo;
use backend\models\ManagePages;
use yii\helpers\Url;
use backend\models\Products;
use frontend\models\Enquiry; 
use backend\models\Contactus; 
use yii\widgets\ActiveForm;
AppAsset::register($this);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=Yii::getAlias('@web')?>/favi.ico" type="image/x-icon">
    <link rel="icon" href="<?=Yii::getAlias('@web')?>/favi.ico" type="image/x-icon">

    <?= Html::csrfMetaTags() ?>
    <title>Mayuri Textiles International</title>
    <?php $this->head() ?>
</head>
<body id="bg">
<div class="page-wraper">
  <div class="page-content">
<?php $this->beginBody() ?>

<header class="site-header header-style-1 ">
    <!-- TOP BAR START -->
    <div class="top-bar">
      <div class="container">
        <div class="row">

          <div class="wt-topbar-right clearfix">
             <?php $social = SocialMedia::find()->all();?>

            <ul class="social-bx list-inline pull-right">

              <?php foreach ($social as $key => $value) {?>
             <!--  
              <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
              <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
              <li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
            </ul>-->
           
              <li>

                            <?php switch ($value['id']) {
                              case 1:
                                echo '<a href="'.$value['url'].'" class="fa fa-facebook"> </a>';
                                break;

                                case 2:
                                echo '<a href="'.$value['url'].'" class="fa fa-twitter"> </a>';
                                break;
                              
                              case 3:
                                echo '<a href="'.$value['url'].'" class="fa fa-google-plus"> </a>';
                                break;
                             
                            }?>
                         
                        </li>
               <?php } ?>

            </ul>

            <ul class="list-unstyled e-p-bx pull-right">
              <?php $contact = Contactus::find()->one();?>
              
              <li><i class="fa fa-envelope"></i><?=$contact['email']?></li>
              <li><i class="fa fa-phone"></i>(+91) <?=$contact['phone']?></li>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- MAIN BAR START -->
    <div class="sticky-header main-bar-wraper">
      <div class="main-bar bg-primary">
        <div class="container">
          <!-- SITE LOGO -->
          <div class="logo-header mostion header-skew"> <a href="<?=Url::to(['site/index'])?>"> <img src="<?=Yii::getAlias('@web')?>/frontend/web/images/logo.png" width="230" height="67" alt="" /> </a> </div>
          <!-- NAV TOGGLE BUTTON -->
          <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!-- MAIN NAV -->
          <div class="header-nav navbar-collapse collapse ">
            <ul class=" nav navbar-nav">
              <li class="active"><a href="<?=Url::to(['site/index'])?>">Home</a></li>
              <li><a href="<?=Url::to(['site/about-us'])?>">About Us</a></li>
              <li> <a href="<?=Url::to(['site/our-products'])?>">Our Products</a>
                
              </li>
              <li><a href="<?=Url::to(['site/feedback'])?>">Enquiry </a></li>
              <li><a href="<?=Url::to(['site/contact-us'])?>">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?= $content ?>

 <footer class="site-footer footer-dark">
    <!-- COLL-TO ACTION START -->
    <!-- FOOTER BLOCKES START -->
    <div class="footer-top overlay-wraper">
      <div class="overlay-main bg-black" style="opacity:0;"></div>
      <div class="container">
        <div class="row">
          <!-- ABOUT COMPANY -->
          <div class="col-md-3 col-sm-6">
            <div class="widget widget_about">
              <h4 class="widget-title">About Company</h4>
              <div class="logo-footer clearfix p-b15"> <a href="<?=Url::to(['site/index'])?>"><img src="<?=Yii::getAlias('@web')?>/frontend/web/images/footer_logo.png" width="230" height="67" alt=""/></a> </div>
              <?php $about = ManagePages::find()->all();?>  
               
              <p>
                 <?= substr(strip_tags($about[0]['description']),0,300) ?> <a href="<?=Url::to(['site/about-us'])?>">[Read More]</a>
                 <!-- construct ipsum dolor sit amet, consectetuer adipiscing elit,
                sed diam nonummy nibh euismod tincidunt ut laoreet dolore agna aliquam erat .   
                wisi enim ad minim veniam, quis tation. sit amet, consec tetuer.
                ipsum dolor sit amet, consectetuer adipiscing.ipsum dolor sit [...] -->
               
              </p>
            
            </div>
          </div>
          <!-- RESENT POST -->
          <div class="col-md-3 col-sm-6">
            <div class="widget widget_services">
              <h4 class="widget-title">Useful links</h4>
              <ul>
                <li class="<?= Yii::$app->controller->action->id == "about-us" ? "active" : " " ?>"><a href="<?=Url::to(['site/about-us'])?>">About</a></li>
                <li><a href="#">Projects</a></li>
                <li class="<?= Yii::$app->controller->action->id == "feedback" ? "active" : " " ?>"><a href="<?=Url::to(['site/feedback'])?>">Feedback</a></li>
                <li><a href="#">Clients</a></li>
                <li><a href="<?=Url::to(['site/contact-us'])?>">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="widget recent-posts-entry-date">
              <h4 class="widget-title">Facebook Updates</h4>
              Coming Soon.... </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="widget widget_newsletter">
              <h4 class="widget-title">Quick Enquiry</h4>
              
			 <!--  <form class="cons-contact-form" method="post" action=""> -->
                                              
                                 <?php $form = ActiveForm::begin(['id'=>'EnquiryForm','options' => ['method' => 'post'],'action'=>Url::to(['site/enq'])]);?>
                                 
                                    <div class="row">
                                    
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon ico_footer"><i class="fa fa-user"></i></span>
                                                    <input name="name" type="text" required class="form-control" placeholder="Name">
                                                  
                                                </div>
                                            </div>
                                        </div>
										
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon ico_footer"><i class="fa fa-envelope"></i></span>
                                                    <input name="email" type="text" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>
        
                                        </div>
        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon ico_footer v-align-m"><i class="fa fa-pencil"></i></span>
                                                    <textarea name="message" rows="4" class="form-control " required placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="col-md-12 text-right">
                                            <button name="submit" type="submit" value="Submit" class="site-button skew-icon-btn m-r15">Submit <i class="fa fa-angle-double-right"></i></button>
                                            
                                        </div>
           
                                    </div>

                        		<!-- </form> -->
                     <?php ActiveForm::end() ?>
			  
			   </div>
            <!-- SOCIAL LINKS -->
          </div>
        </div>
      </div>
    </div>
    <!-- FOOTER COPYRIGHT -->
    <div class="footer-bottom overlay-wraper">
      <div class="overlay-main bg-black" style="opacity:0;"></div>
      <div class="container p-t30">
        <div class="row">
          <div class="wt-footer-bot-left"> <span class="copyrights-text">� 2018 Mayuri Textile Industries. All Rights Reserved.</span> </div>
          <div class="wt-footer-bot-right">
            <ul class="copyrights-nav pull-right">
              <li><a href="javascript:void(0);">Terms  & Condition</a></li>
              <li><a href="javascript:void(0);">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
	<!-- Footer Section End -->
</div>
</div>
<?php if(Yii::$app->getSession()->hasFlash('msg')):?>
    <nav class="navbar navbar-default navbar-fixed-bottom" style="background-color: transparent; border: none; box-shadow: none;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="alert alert-dismissible alert-success fadein">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo Yii:: $app->getSession()->getFlash('msg');?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<?php endif ; ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
