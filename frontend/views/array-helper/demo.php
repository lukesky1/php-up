<?php

/* @var $employees array */
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$emails = ArrayHelper::getColumn($employees, 'email');

echo implode(', ', $emails);

echo '<hr>';

// Array helpers with HTML lists:

$array = [
    '1' => 'Beirut',
    '2' => 'Berlin',
    '3' => 'Budapest',
    '4' => 'Rome',
];

$listData = ArrayHelper::map($employees, 'first_name', 'email');

echo '<pre>';
print_r($listData);
echo '<pre>';


echo Html::dropDownList('emails', [], $listData);