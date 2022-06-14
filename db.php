<?php
// Masukkan Host, username, password, database anda di bawah.
$con = mysqli_connect("localhost","id19103040_root","12_Angelitasumeraweb","id19103040_signup",3306);
// Cek connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>