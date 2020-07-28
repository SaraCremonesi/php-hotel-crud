<?php
// Includo env.php nel file del database perchè so che il database lo includerò in ogni file del mio progetto
  include __DIR__ . '/env.php';
  $conn = new mysqli($servername, $username, $password, $db_name, 8889);

  if($conn && $conn->connect_error) {
    die("Connection_failed: " . $conn->connect_error);
  }
?>
