<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'admin',
  'Qwertyui',
  'php_mysql_crud'
) or die(mysqli_error($mysqli));

?>
