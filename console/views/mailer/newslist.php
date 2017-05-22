<?php /* @var $newsList[] array */ ?>

<?php foreach ($newsList as $item): ?>

    <h1><?php echo $item['title']; ?></h1>
    <p><?php echo $item['content']; ?></p>
    <hr>
    
<?php endforeach;
