<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
     'css/bootstrap.min.css',
     'css/fontawesome/css/font-awesome.min.css', 
     'css/flaticon.min.css',
     'css/animate.min.css',
     'css/owl.carousel.min.css',
     'css/bootstrap-select.min.css',
     'css/magnific-popup.min.css',
     'css/loader.min.css',
     'css/style.css',
     'css/skin/skin-1.css',
     'css/custom.css',
     'css/switcher.css',
     'plugins/revolution/revolution/css/settings.css',
     'plugins/revolution/revolution/css/navigation.css',
     'http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900', 
     'https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic',
       'css/bootstrap.min.css',
       'css/fontawesome/css/font-awesome.min.css', 
       'css/flaticon.min.css',
       'css/animate.min.css',
       'css/owl.carousel.min.css',
       'css/bootstrap-select.min.css',
       'css/magnific-popup.min.css',
       'css/loader.min.css',
       'css/style.css',
       'css/skin/skin-1.css',
       'css/custom.css',
       'css/switcher.css',
       'plugins/revolution/revolution/css/settings.css',
       'plugins/revolution/revolution/css/navigation.css',
       'http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900',
       'https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic',
       'css/flexslider.css',






    ];
    public $js = [           
      'js/jquery-1.12.4.min.js',
      'js/bootstrap.min.js',
      'js/bootstrap-select.min.js',
      'js/jquery.bootstrap-touchspin.min.js',  
      'js/magnific-popup.min.js',
      'js/waypoints.min.js',
      'js/counterup.min.js',
      'js/waypoints-sticky.min.js',
      'js/isotope.pkgd.min.js',
      'js/owl.carousel.min.js',
      'js/stellar.min.js',
      'js/scrolla.min.js',
      'js/custom.js',
      'js/shortcode.js',
      'plugins/revolution/revolution/js/jquery.themepunch.tools.min.js',
      'plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js',
      'plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js',
      'plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js',
      'plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js',
      'plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js',
      'plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js',
      'plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js',
      'plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js',
      'plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js',
      'plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js',



      
      


    'js/jquery-1.12.4.min.js',
    'js/bootstrap.min.js',
    'js/bootstrap-select.min.js',
    'js/jquery.bootstrap-touchspin.min.js',
    'js/magnific-popup.min.js',
    'js/waypoints.min.js',
    'js/counterup.min.js',
    'js/waypoints-sticky.min.js',
    'js/isotope.pkgd.min.js',
    'js/owl.carousel.min.js',
    'js/stellar.min.js',
    'js/scrolla.min.js',
    'js/custom.js',
    'js/shortcode.js',
    'js/jquery.flexslider.js',

    //'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js',
    'js/libs/jquery-1.7.min.js',
    'js/jquery-ui.min.js',
    'js/bootstrap.min.js',
    'js/jquery-plugin-collection.js',
    'js/flexslider-min.js',
    'js/modernizr.js',

     'js/jquery.easing.js',
     'js/jquery.mousewheel.js',
     'js/demo.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
