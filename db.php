<?php
session_start();

$conn = mysqli_connect(
  '127.0.0.1',
  'admin',
  'Qwertyui',
  'php_mysql_crud'
) or die(mysqli_error($mysqli));

?>
