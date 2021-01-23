<?php
$mysqli = new mysqli("localhost", "fares", "opsi", "password_manager");
/* check connection */
if ($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
echo "<h1>Successful</h1>";
?>
