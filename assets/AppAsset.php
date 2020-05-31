<?php
namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
		'css/lightbox.css',
        'css/styles.css'
    ];
    public $js = [
		'js/core.js',
		'js/lightbox.js',
		'js/scripts.js'
    ];
}
