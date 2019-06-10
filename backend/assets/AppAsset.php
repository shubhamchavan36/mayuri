<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/custom.css',
        'http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900',
        'css/theme-default/bootstrap.css?1422792965',
        'css/theme-default/materialadmin.css?1425466319',
        // 'http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
        'css/theme-default/material-design-iconic-font.min.css?1421434286',
        'css/theme-default/libs/rickshaw/rickshaw.css',
        'css/theme-default/libs/morris/morris.core.css',
        'css/theme-default/libs/summernote/summernote.css',
        'css/theme-default/libs/DataTables/jquery.dataTables.css',
        'css/theme-default/libs/DataTables/extensions/dataTables.colVis.css',
        'css/theme-default/libs/DataTables/extensions/dataTables.tableTools.css',
        'css/theme-default/libs/bootstrap-datepicker/datepicker3.css',
        'css/theme-default/libs/dropzone/dropzone-theme.css',






        



    ];
    public $js = [
        'js/libs/jquery/jquery-migrate-1.2.1.min.js',
        'js/libs/flot/jquery.flot.min.js',
        'js/libs/flot/jquery.flot.time.min.js',
        'js/libs/flot/jquery.flot.resize.min.js',
        'js/libs/flot/jquery.flot.orderBars.js',
        'js/libs/flot/jquery.flot.pie.js',
        'js/libs/autosize/jquery.autosize.min.js',
        'js/libs/jquery-knob/jquery.knob.min.js',
        'js/libs/sparkline/jquery.sparkline.min.js',
        'js/libs/nanoscroller/jquery.nanoscroller.min.js',
        'js/libs/DataTables/jquery.dataTables.min.js',
        // 'js/core/demo/DemoTableDynamic.js',
        'js/libs/bootstrap/bootstrap.min.js',
        'js/libs/spin.js/spin.min.js',
        'js/libs/moment/moment.min.js',
        'js/libs/flot/curvedLines.js',
        'js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js',
        'js/libs/d3/d3.min.js',
        'js/libs/d3/d3.v3.js',
        'js/libs/rickshaw/rickshaw.min.js',
        'js/core/source/App.js',
        'js/core/source/AppNavigation.js',
        'js/core/source/AppOffcanvas.js',
        'js/core/source/AppCard.js',
        'js/core/source/AppForm.js',
        'js/core/source/AppNavSearch.js',
        'js/core/source/AppVendor.js',
        'js/core/demo/Demo.js',
        // 'js/core/demo/DemoDashboard.js',
        'js/libs/DataTables/extensions/ColVis/js/dataTables.colVis.min.js',
        'js/libs/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js',
        'js/libs/bootstrap-datepicker/bootstrap-datepicker.js',
        'js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js',
        'js/libs/multi-select/jquery.multi-select.js',
        'js/libs/inputmask/jquery.inputmask.bundle.min.js',
        'js/libs/moment/moment.min.js',
        'js/libs/typeahead/typeahead.bundle.min.js',
        'js/libs/dropzone/dropzone.min.js',
        'js/jquery.bvalidator-yc.js',
        'js/custom.js',















    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
