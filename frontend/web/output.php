<?php

// With buffer

ob_start();

echo 'Hello<br>';
echo 'Hello<br>';
echo 'Hello<br>';
echo 'Hello<br>';
echo 'Hello<br>';

$content = ob_get_contents();
ob_clean();

$content = strtr($content, 'o', 'O');

echo $content;