<?php
  include __DIR__ . '/../database.php';

  $room_id = $_POST['room_id'];
  $room_number = $_POST['room_number'];
  $room_beds = $_POST['room_beds'];
  $sql = "UPDATE stanze SET room_number = $room_number, beds = $room_beds, updated_at = NOW() WHERE id = $room_id";
  $result = $conn->query($sql);

  if (!$result) {
    echo $conn->error;
    die('Aggiornamento non riuscito');
  }
?>

<?php
  include __DIR__ . '/../partials/_header.php';
  header('Location: ' . $base_path . '?upd-room=' . $room_number);
?>
