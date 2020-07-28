<?php
  include __DIR__ . '/../database.php';

  $room_id = $_GET['id'];

  $sql = "SELECT * FROM 'stanze' WHERE 'id' = $room_id";

  $sql = "SELECT * FROM 'stanze'";
  $results = $conn->query($sql);

  if($results && $results->num_rows > 0) {
    // $rooms = [];
    // // Creo una variabile row
    // while ($row = $results->fetch_assoc()) {
    //   $rooms[] = $row;
    //   die();
    $this_room = $results->fetch_assoc();
    }
  } elseif($results) {
    $this_room = [];
  } else() {
    die('Errore');
  }

  $conn->close();
?>
