<?php

namespace common\components;

use Yii;
use yii\base\Component;
use common\components\UserNotificationInterface;

/**
 * @author admin
 */
class EmailService extends Component
{

    /**
     * @param UserNotificationInterface $user
     * @param string $subject
     * @return bool
     */
    public function notifyUser(UserNotificationInterface $user, $subject)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('service.email@yii2frontend.com')
            ->setTo($user->getEmail())
            ->setSubject($subject)
            ->send();
    }

    /**
     * @return bool
     */
    public function notifyAdmins($subject)
    {
        return Yii::$app->mailer->compose()
            ->setFrom('service.email@yii2frontend.com')
            ->setTo('zinchenko.us@gmail.com')
            ->setSubject($subject)
            ->send();
    }
}
