<?php

namespace yii2mod\markdown;

use yii\web\AssetBundle;

/**
 * Class MarkdownEditorAsset
 *
 * @package yii2mod\markdown
 */
class MarkdownEditorAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/simplemde';

    /**
     * @var array
     */
    public $css = [
        'dist/simplemde.min.css',
    ];

    /**
     * @var array
     */
    public $js = [
        'dist/simplemde.min.js',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
