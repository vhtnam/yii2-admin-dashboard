<?php

namespace stsengine\adminDashboard;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
    public $sourcePath = __DIR__.'/assets';

    public $css = [
      //  'css/pe-icon-7-stroke.css',
        'css/material-dashboard.min.css',
      //  'css/widget.css',
    ];

    public $js = [
        'js/material-dashboard.min.js'
    ];


    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
        'yii\bootstrap4\BootstrapPluginAsset',
    ];
}