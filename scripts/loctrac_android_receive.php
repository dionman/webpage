<?php
$target_dir = "/var/storage/Chloe";
$target_dir = $target_dir . "/" . basename($_FILES["fileupload"]["name"]);
var_dump($_FILES);
echo 'in php script!'
if (file_put_contents($target_dir, file_get_contents($_FILES["fileupload"]["tmp_name"]), FILE_APPEND))
{
echo 'success';
} else {

echo 'error';
header('X-PHP-Response-Code: 400', true, 400);
}
?>