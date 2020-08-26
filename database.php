<?php
// Includo env.php nel file del database perchè so che il database lo includerò in ogni file del mio progetto
  include __DIR__ . '/env.php';
  $conn = new mysqli($servername, $username, $password, $db_name);

  if($conn && $conn->connect_error) {
    die("Connection_failed: " . $conn->connect_error);
  }

//   $sql = "SELECT * FROM 'stanze'";
//   $results = $conn->query($sql);
//
//   if ($results && $results->num_rows > 0) {
//     $rooms = [];
//     while($row = $results->fetch_assoc()) {
//       $rooms[] = $row;
//     }
//   } elseif ($results) {
//     $rooms = [];
//   } else {
//     die('query error');
//   }
// $conn->close();
?>
