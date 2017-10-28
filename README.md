<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Markdown Widget for Yii 2</h1>
    <br>
</p>

Widget based on [SimpleMDE - Markdown Editor](https://simplemde.com/) 

[![Latest Stable Version](https://poser.pugx.org/yii2mod/yii2-markdown/v/stable)](https://packagist.org/packages/yii2mod/yii2-markdown)
[![Total Downloads](https://poser.pugx.org/yii2mod/yii2-markdown/downloads)](https://packagist.org/packages/yii2mod/yii2-markdown)
[![License](https://poser.pugx.org/yii2mod/yii2-markdown/license)](https://packagist.org/packages/yii2mod/yii2-markdown)
[![Build Status](https://travis-ci.org/yii2mod/yii2-markdown.svg?branch=master)](https://travis-ci.org/yii2mod/yii2-markdown)

Installation 
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2mod/yii2-markdown "*"
```

or add

```
"yii2mod/yii2-markdown": "*"
```

to the require section of your composer.json.

Usage
------------
Once the extension is installed, simply add widget to your page as follows:

1) Usage with ActiveForm and model
```php
<?php echo $form->field($model, 'content')->widget(\yii2mod\markdown\MarkdownEditor::class, [
    'editorOptions' => [
        'showIcons' => ["code", "table"],
    ],
]); ?>
```
2) Usage without ActiveForm and model
```php
<?php echo \yii2mod\markdown\MarkdownEditor::widget([
    'name' => 'markdown-editor',
    'editorOptions' => [
        'showIcons' => ["code", "table"],
    ],
]);
?>
```

Markdown Editor Options 
----------------
You can find them on the [options page](https://github.com/sparksuite/simplemde-markdown-editor#configuration)
