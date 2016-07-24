<?php

namespace brummm\yii2summernote\assets;

use yii\web\AssetBundle;

/**
 * Class BootstrapEncapsulatedAsset
 * @package brumm\yii2summernote\assets
 * Class to load bootstrap js without its css
 */
class BootstrapEncapsulatedAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap/dist';
    public $js = [
        'js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}