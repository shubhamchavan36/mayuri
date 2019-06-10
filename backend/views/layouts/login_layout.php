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
    <!-- <link rel="shortcut icon" href="<?= Yii::getAlias('@web')?>/images/fav.png" type="image/png">
    <link rel="icon" href="<?= Yii::getAlias('@web')?>/images/fav.png" type="image/png"> -->



    <?php $this->head() ?>
</head>
<body class="menubar-hoverable header-fixed">
<?php $this->beginBody() ?>

   <body class="menubar-hoverable header-fixed " style="background:white !important;">

    <!-- BEGIN LOGIN SECTION -->
    <section class="section-account">
      <div class="img-backdrop" >

      </div>
      <div class="spacer">

      </div>
      <div class="card contain-sm">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <br/>
              <span class="text-lg text-bold text-primary">Mayuri Textiles Login</span>
              <br/><br/>
              <?= $content ?>
            </div><!--end .col -->
          </div><!--end .row -->
        </div><!--end .card-body -->
      </div><!--end .card -->
    </section>
                  <!-- END LOGIN SECTION -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
