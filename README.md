Popup with AJAX loading extension
=====================

REQUIREMENTS
------------

It is an little extension for `yii2\bootstrap\Modal`

INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

Append repository to `composer.json`:

```json
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/IuriiP/yii2-popajax.git"
        }
        ],
```

Run update:

~~~
composer require iuriip/yii2-popajax
~~~

### Usage

Add to any element:

```
'class' => 'modal-button',
'modal-href' => <url-to-popup-content>,
'modal-target' => <jQuery selector>,
```

I.e.

```php
<?= Html::a('<span class="glyphicon glyphicon-eye-open"></span>', "#", [
            'title' => Yii::t('app', 'View'),
            'class' => 'modal-button',
            'modal-href' => $url,
            'modal-target' => '#modal'
    ]);
```

Then define your modal:

```php
use iuriip\yii2\Popup;

//...
    <?php
    Popup::begin([
        'header' => 'Preview',
        'id' => 'modal',
        'size' => 'modal-lg',
        ]);

    //...

    Popup::end();
    ?>
//...
```

You can use a lot the different independent modals over different `modal-target` selector.

### Todo

Append a process loading indicator

<?