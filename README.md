Send exceptions to telegram user.
=================================
On Exception, sends exception title and content to set telegram user.
To get errors, first you need to hit start on bot [ErrorGetterBot](https://t.me/ErrorGetterBot)
Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require  ishukrullo/yii2-errorsender: v1.1.3
```

or add

```
"ishukrullo/yii2-errorsender": "v1.1.3"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, add custom errorHandler class to component section of your configuration file (config/main.php):

```php
        'errorHandler' => [
            'class' => 'ishukrullo\errorsender\ErrorSendToTelegram', // adding custom errorHandler class
            'errorAction' => 'site/error',
        ],
