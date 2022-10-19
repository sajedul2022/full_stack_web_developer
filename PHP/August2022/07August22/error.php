<?php

fopen("file.txt", "r");

$errors = error_get_last();

echo "<pre>";

print_r($errors);

error_log("New User Register");

?>