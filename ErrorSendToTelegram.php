<?php

namespace ishukrullo\errorsender;

use yii\web\ErrorHandler;

/**
 * This is just an example.
 */
class ErrorSendToTelegram extends ErrorHandler
{
    public $exceptionView = '@vendor/ishukrullo/yii2-errorsender/views/exception.php';

    public function run()
    {
//        return $this->render('exception');
    }

    protected function renderException($exception)
    {
//        return $this->render('exception');
        // TODO: Implement renderException() method.
    }
}
