<?php
$file="file.txt";
$formData = json_encode ($_POST);
file_put_contents($file, $formData, FILE_APPEND);



