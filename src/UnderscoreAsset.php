<?php

namespace h0rseduck\underscore;

use yii\web\AssetBundle;

/**
 * Class UnderscoreAsset
 * @package h0rseduck\underscore
 */
class UnderscoreAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/underscore';

    /**
     * @inheritdoc
     */
    public $js = [
        YII_ENV_DEV ? 'underscore.js' : 'underscore-min.js',
    ];
}
