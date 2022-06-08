<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'demo',
  'demo',
  'demo'
) or die(mysqli_error($mysqli));

?>
