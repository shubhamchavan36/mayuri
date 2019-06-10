<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;
use yii\playground\image;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mayuri Textiles - Dashboard</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <link rel="shortcut icon" href="<?= Yii::getAlias('@web')?>/images/fav.png" type="image/png">
    <link rel="icon" href="<?= Yii::getAlias('@web')?>/images/fav.png" type="image/png">

    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body class="menubar-hoverable header-fixed">
  <!--menubar-pin  -->
<?php $this->beginBody() ?>

    <!-- BEGIN HEADER-->
    <header id="header" >
      <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
          <ul class="header-nav header-nav-options">
            <li class="header-nav-brand" >
              <div class="brand-holder">
                <a href="#">
                  <span class="text-lg text-bold text-primary">Mayuri Textiles</span>
                </a>
              </div>
            </li>
            <li>
              <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                <i class="fa fa-bars"></i>
              </a>
            </li>
          </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="headerbar-right">

          <ul class="header-nav header-nav-profile">
            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                <!-- <img src="" alt="" /> -->
                <span class="profile-info"><?php echo Yii::$app->user->identity->username ;?>

                  <!-- <small>Administrator</small> -->
                </span>
              </a>
              <ul class="dropdown-menu animation-dock">
                <li class="user-footer">
                    <a href="<?= Url::to(['user/changepassword'])?>"><i class="fa fa-key text-danger" aria-hidden="true"></i> Change Password</a>
                </li>
                <li><a href="<?= Url::to(['site/logout']) ?>"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
              </ul><!--end .dropdown-menu -->
            </li><!--end .dropdown -->
          </ul><!--end .header-nav-profile -->
        </div><!--end #header-navbar-collapse -->
      </div>
    </header>
    <!-- END HEADER-->

<!--BEGIN MENUBAR-->
<div id="menubar" class="menubar-inverse ">
  <div class="menubar-fixed-panel ">
    <div>
      <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
        <i class="fa fa-bars"></i>
      </a>
    </div>
    <div class="expanded">
      <a href="">
        <span class="text-lg text-bold text-primary ">Mayuri Textiles &nbsp;ADMIN</span>
      </a>
    </div>
  </div>
  <div class="menubar-scroll-panel">

  <!-- BEGIN MAIN MENU -->
    <ul id="main-menu" class="gui-controls">

      <!-- BEGIN DASHBOARD -->
      <li class="<?= Yii::$app->controller->action->controller->id == "site"  ? "active"  :  " " ?>">
        <a href="<?= Url::to(['site/index']) ?>" >
          <div class="gui-icon"><i class="md md-home"></i></div>
          <span class="title">Dashboard</span>
        </a>
      </li><!--end /menu-li -->
      <!-- END DASHBOARD -->

      <!-- BEGIN USERS -->
      <li class="<?= Yii::$app->controller->action->controller->id == "user"  ? "active"  :  " " ?>">
        <a href="<?= Url::to(['user/index']) ?>">
          <div class="gui-icon"><i class="md md-account-box"></i></div>
          <span class="title">Manage Users</span>
        </a>
      </li><!--end /menu-li -->
      <!-- END USERS -->

      <!-- Manage Website -->
      <li class="gui-folder <?php if(Yii::$app->controller->action->controller->id == 'slideshow' || Yii::$app->controller->action->controller->id == 'managepages'){ echo 'active'; } ?>">
        <a>
          <div class="gui-icon"><i class="fa fa-globe"></i></div>
          <span class="title">Manage Website</span>
        </a>
        <!--start submenu -->
        <ul>
          <!-- BEGIN Manage slideshow -->
          <li class="<?= Yii::$app->controller->action->controller->id == "slideshow"  ? "active"  :  " " ?>">
            <a href="<?= Url::to(['slideshow/index']) ?>" >
              <span class="title">Manage SlideShows</span>
            </a>
          </li><!--end /menu-li -->
          <!-- END Manage slideshow -->

          <!-- BEGIN Manage Abount us -->
          <li class="<?= Yii::$app->controller->action->controller->id == "managepages"  ? "active"  :  " " ?>">
            <a href="<?= Url::to(['managepages/index']) ?>" >
              <span class="title">Manage Pages</span>
            </a>
          </li><!--end /menu-li -->
             <!-- BEGIN Manage Contact us -->
          <li class="<?= Yii::$app->controller->action->controller->id == "managepages"  ? "active"  :  " " ?>">
            <a href="<?= Url::to(['contactus/index']) ?>" >
              <span class="title">Manage Contactus</span>
            </a>
          </li><!--end /menu-li -->

		 
      

        </ul>
        <!--end /submenu -->

      </li><!--end /menu-li -->


      <li class="<?php if(Yii::$app->controller->action->controller->id == 'products'){ echo 'active'; } ?>">
        <a href="<?= Url::to(['products/index']) ?>">
          <div class="gui-icon"><i class="fa fa-shopping-cart"></i></div>
          <span class="title">Manage Products</span>
        </a>
      </li><!--end /menu-li -->
<!-- 
      <li class="<?php if(Yii::$app->controller->action->controller->id == 'whyus'){ echo 'active'; } ?>">
        <a href="<?= Url::to(['whyus/index']) ?>">
          <div class="gui-icon"><i class="fa fa-newspaper-o"></i></div>
          <span class="title">Manage Why Us</span>
        </a>
      </li> --><!--end /menu-li-->

      <li class="<?php if(Yii::$app->controller->action->controller->id == 'enquiry'){ echo 'active'; } ?>">
        <a href="<?= Url::to(['enquiry/index']) ?>">
          <div class="gui-icon"><i class="fa fa-newspaper-o"></i></div>
          <span class="title">Enquiries</span>
        </a>
      </li>

      <li class="gui-folder <?php if(Yii::$app->controller->action->controller->id == 'socialmedia' || Yii::$app->controller->action->controller->id == 'seo'){ echo 'active'; } ?>">
        <a>
          <div class="gui-icon"><i class="fa fa-cogs"></i></div>
          <span class="title">Social Media & SEO</span>
        </a>
        <!--start submenu -->
        <ul>
          <!-- BEGIN Manage socialmedia -->
          <li class="<?= Yii::$app->controller->action->controller->id == "socialmedia"  ? "active"  :  " " ?>">
            <a href="<?= Url::to(['socialmedia/index']) ?>">
              <span class="title">Manage Social Media</span>
            </a>
          </li><!--end /menu-li -->
          <!-- BEGIN Manage socialmedia -->
        <!--end /menu-li -->

        </ul>
        <!--end /submenu -->

      </li><!--end /menu-li -->



    </ul><!--end .main-menu -->
    <!-- END MAIN MENU -->

    <div class="menubar-foot-panel">
      <small class="no-linebreak hidden-folded">
        <span class="opacity-75">Copyright &copy; <?= date('Y');?></span> <strong>Conversant</strong>
      </small>
    </div>
  </div><!--end .menubar-scroll-panel-->
</div><!--end #menubar-->
<!-- END MENUBAR-->
  <div id="base">
    <div id="content">
      <section>
        <div class="section-header">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        </div>
        <div class="section-body">
          <?= $content ?>
        </div>
      </section>
    </div>
  </div>

<?php $this->endBody() ?>

<?php if(Yii::$app->getSession()->hasFlash('msg')): ?>
  <nav class="navbar navbar-default navbar-fixed-bottom" style="background-color: transparent;border:none;box-shadow:none;">
       <div class="container-fluid">
        <div class="row" >
            <div class="col-md-6 col-md-offset-3">
              <div class="alert alert-dismissible alert-danger fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a>
                  <?php echo Yii::$app->getSession()->getFlash('msg') ;?>
              </div>                                        </div>
        </div>

       </div>
  </nav>
<?php endif; ?>

<script type="text/javascript">
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
  }, 4000);
</script>
<!-- Animation S
</body>
</html>
<?php $this->endPage() ?>
