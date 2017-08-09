<h1>Send money</h1>

<form method="post">
    <p>Receiver:</p>
    <input name="receiver" type="text" /><br><br>
    
    <p>Amount:</p>
    <input name="amount" type="number" /><br><br>
    
    <input id="form-token" type="hidden" name="<?=Yii::$app->request->csrfParam?>"
           value="<?=Yii::$app->request->csrfToken?>"/>
    
    <input type="submit" value="Send" />
</form>