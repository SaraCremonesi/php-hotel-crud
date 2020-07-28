<?php

include __DIR__ . 'database.php';

  $sql = "SELECT * FROM 'stanze'";
  $results = $conn->query($sql);

  if($results && $results->num_rows > 0) {
    $rooms = [];
    // Creo una variabile row
    while ($row = $results->fetch_assoc()) {
      $rooms[] = $row;
      die();
    }
  } elseif($results) {
    $rooms = 0;
  } else() {
    die('Errore');
  }

  $conn->close();
?>
