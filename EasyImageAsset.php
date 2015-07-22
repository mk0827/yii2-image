<?php
namespace mkui\image;

use yii\web\AssetBundle;

class EasyImageAsset extends AssetBundle
{
    public $sourcePath = '@mkui/image/assets';
    public $js = [
        'retina.min.js',
    ];
} 