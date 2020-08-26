<?php
  include __DIR__ . '/../database.php';

  $room_id = $_POST['form_id'];
  $sql = "DELETE FROM 'stanze' WHERE 'id' = $room_id";
  $result = $conn->query($sql);

  if ($result) {
    die('Cancellazione non riuscita');
  }
?>

<?php
  include __DIR__ . '/../partials/_header.php';
  header('Location: ' . $base_path . '?deleted-room=' . $room_number);
?>
