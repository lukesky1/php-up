<?php

namespace console\controllers;

use yii\helpers\Console;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;

/**
 * @author admin
 */
class MailerController extends \yii\console\Controller
{

    /**
     * Sending newsletter
     */
    public function actionSend()
    {
        $newsList = News::getList();
        $subscribers = Subscriber::getList();

        $count = Sender::run($subscribers, $newsList);

        Console::output("\nEmails sent: {$count}");
    }

}
