<?php

namespace ishukrullo\errorsender;

use yii\web\ErrorHandler;

/**
 * This is just an example.
 */
class ErrorSendToTelegram extends ErrorHandler
{
    public $exceptionView = '@vendor/ishukrullo/yii2-errorsender/views/exception.php';
    public $userId = '1037052416';
    public $botToken = '1818743858:AAHqIVPrvw21sl5nli8sbPsPkGzGeUFnc5Q';
    public $botUsername = '';
}
