Send exceptions to telegram user.
=================================
On Exception, sends exception title and content to set telegram user.
To get errors, first you need to hit start on bot [ErrorGetterBot](https://t.me/ErrorGetterBot)
Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ishukrullo/yii2-errorsender "*"
```

or add

```
"ishukrullo/yii2-errorsender": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \ishukrullo\errorsender\AutoloadExample::widget(); ?>```