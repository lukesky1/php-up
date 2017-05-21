<?php

namespace console\controllers;

use Yii;

/**
 * @author admin
 */
class MailerController extends \yii\console\Controller
{

    public function actionSend()
    {
        $result = Yii::$app->mailer->compose()
                ->setFrom('test.php.up@gmail.com')
                ->setTo('test.php.up@gmail.com')
                ->setSubject('Тема сообщения')
                ->setTextBody('Текст сообщения')
                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();
        var_dump($result);
        die;
    }

}
