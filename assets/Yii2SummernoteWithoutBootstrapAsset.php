<?php

namespace brummm\yii2summernote\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle for Summernote (without bootstrap css)
 */
class Yii2SummernoteWithoutBootstrapAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/../dist';
    public $css = [
        'css/encapsulated-bootstrap.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'brummm\yii2summernote\assets\SummernoteAsset',
    ];
}
