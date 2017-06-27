<?php
/* @var $this yii\web\View */
/* @var $book frontend\models\Book */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($book, 'name'); ?>

    <?php echo $form->field($book, 'isbn'); ?>

    <?php echo $form->field($book, 'date_published'); ?>

    <?php echo $form->field($book, 'publisher_id'); ?>

    <?php echo Html::submitButton('Save', [
        'class' => 'btn btn-primary',
    ]); ?>

<?php ActiveForm::end();

