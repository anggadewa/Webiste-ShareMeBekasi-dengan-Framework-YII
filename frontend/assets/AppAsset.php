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
        // 'css/site.css',
        'themes/ShareMeBekasi/css/animate.css',
        'themes/ShareMeBekasi/css/icomoon.css',
        'themes/ShareMeBekasi/css/magnific-popup.css',
        'themes/ShareMeBekasi/css/owl.carousel.min.css',
        'themes/ShareMeBekasi/css/owl.theme.default.min.css',
        'themes/ShareMeBekasi/css/style.css',
    ];
    public $js = [
      'themes/ShareMeBekasi/js/modernizr-2.6.2.min.js',
      'themes/ShareMeBekasi/js/jquery.easing.1.3.js',
      'themes/ShareMeBekasi/js/jquery.waypoints.min.js',
      'themes/ShareMeBekasi/js/jquery.stellar.min.js',
      'themes/ShareMeBekasi/js/jquery.mb.YTPlayer.min.js',
      'themes/ShareMeBekasi/js/owl.carousel.min.js',
      'themes/ShareMeBekasi/js/jquery.magnific-popup.min.js',
      'themes/ShareMeBekasi/js/magnific-popup-options.js',
      'themes/ShareMeBekasi/js/jquery.countTo.js',
      'themes/ShareMeBekasi/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
