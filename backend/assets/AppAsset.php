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
        //'css/site.css',
        'themes/admin/assets/css/bootstrap.min.css',
        'themes/admin/assets/css/font-awesome.min.css',
        'themes/admin/assets/css/themify-icons.css',
        'themes/admin/assets/css/metisMenu.css',
        'themes/admin/assets/css/owl.carousel.min.css',
        'themes/admin/assets/css/slicknav.min.css',
        'themes/admin/assets/css/typography.css',
        'themes/admin/assets/css/default-css.css',
        'themes/admin/assets/css/styles.css',
        'themes/admin/assets/css/responsive.css',
    ];
    public $js = [
        'themes/admin/assets/js/vendor/modernizr-2.8.3.min.js',
        'themes/admin/assets/js/vendor/jquery-2.2.4.min.js',
        'themes/admin/assets/js/popper.min.js',
        'themes/admin/assets/js/bootstrap.min.js',
        'themes/admin/assets/js/metisMenu.min.js',
        'themes/admin/assets/js/jquery.slimscroll.min.js',
        'themes/admin/assets/js/jquery.slicknav.min.js',
        'themes/admin/assets/js/line-chart.js',
        'themes/admin/assets/js/pie-chart.js',
        'themes/admin/assets/js/plugins.js',
        'themes/admin/assets/js/scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
