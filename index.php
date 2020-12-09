<?php
include_once 'babcafunction.php';
include_once 'klimiFail.php';
include_once 'knefiFail.php';
include_once 'pilarfail.php';
include_once 'pojerFail.php';

$img = file_get_contents('img.txt');
?>

<img style="display:block; max-width: 100%; height: 100%;" src="data:image/jpeg;base64, <?= $img ?>" alt="hidden image" srcset="">