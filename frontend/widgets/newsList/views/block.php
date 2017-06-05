<?php foreach ($list as $item): ?>
    <h3>
        <a href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]); ?>">
            <?php echo $item['title']; ?>
        </a>
    </h3>
    <p><?php echo $item['content']; ?></p>
    <hr>
<?php endforeach;
