<?php
  include __DIR__ . '/../database.php';

  $room_id = $_POST['id'];
  $room_number = $_POST['room_number'];
  $sql = "DELETE FROM stanze WHERE id = $room_id";
  $result = $conn->query($sql);

  if (!$result) {
      die('Errore durante la cancellazione');
  }
?>

<?php
  include __DIR__ . '/../partials/_header.php';
  header('Location: ' . $base_path . '?deleted-room=' . $room_number);
?>
