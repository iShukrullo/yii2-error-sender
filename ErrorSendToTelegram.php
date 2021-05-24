<?php

namespace ishukrullo\errorsender;

use yii\base\ErrorHandler;

/**
 * This is just an example.
 */
class ErrorSendToTelegram extends ErrorHandler
{
    public function run()
    {
        \Yii::setAlias('@errorsender', '@frontend/runtime/tmp-extensions/yii2-errorsender/views/exception.php');

        return $this->render('exception');
    }

    protected function renderException($exception)
    {
        return $this->render('exception');
        // TODO: Implement renderException() method.
    }
}
