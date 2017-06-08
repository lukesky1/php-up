<?php

/* @var $this yii\web\View */
/* @var $model frontend\models\Subscribe */

/* example flash message 
  if (Yii::$app->session->hasFlash('subscribeStatus')) {
  echo Yii::$app->session->getFlash('subscribeStatus');
  }
 */

use frontend\assets\GalleryAsset;
GalleryAsset::register($this);

$this->title = 'Подпишитесь на новости!';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of the page...'
]);
$this->params['breadcrumbs'] = [
    'Test 1',
    ['label' => 'Test 2', 'url' => ['/site/index']],
    'Test 3',
    'Test 4',
];

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

<form method="post">
    <p>Email:</p>
    <input type="text" name="email" />
    <br><br>
    <input type="submit" />
</form>