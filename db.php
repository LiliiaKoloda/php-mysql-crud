<?php
session_start();

$conn = mysqli_connect(
  '172.31.15.42',
  'admin',
  'Qwertyui',
  'php_mysql_crud'
) or die(mysqli_error($mysqli));

?>
