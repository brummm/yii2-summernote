<?php

namespace yii2summernote\assets;

use yii\web\AssetBundle;

/**
 * Asset bundle Summernote html editor
 */
class SummernoteAsset extends AssetBundle
{
    public $sourcePath = '@bower/summernote';
    public $js = [
        'dist/summernote.js',
    ];
    public $css = [
        'dist/summernote.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii2summernote\assets\BootstrapEncapsulatedAsset',
    ];
}
