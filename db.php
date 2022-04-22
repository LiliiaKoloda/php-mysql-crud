<?php
session_start();

$conn = mysqli_connect(
  'lm1kclu3tv97i2c.c9ujfobq2flt.us-east-1.rds.amazonaws.com',
  'admin',
  'Qwertyui',
  'php_mysql_crud'
) or die(mysqli_error($mysqli));

?>
