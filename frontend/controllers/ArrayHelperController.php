<?php

namespace frontend\controllers;

use frontend\models\Employee;
/**
 * @author admin
 */
class ArrayHelperController extends \yii\web\Controller
{

    public function actionDemo()
    {
        $employees = Employee::find();
        return $this->render('demo', [
            'employees' => $employees,
        ]);
    }

}
