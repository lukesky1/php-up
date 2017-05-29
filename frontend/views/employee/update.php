<?php
/* @var $model frontend\models\Employee */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

<h1>Update your details</h1>

<form method="post">
    <p>First name:</p>
    <input name="firstName" type="text" />
    <br><br>

    <p>Last name:</p>
    <input name="lastName" type="text" />
    <br><br>

    <p>Middle name:</p>
    <input name="middleName" type="text" />
    <br><br>

    <input type="submit" />    

</form>