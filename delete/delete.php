<?php
  include __DIR__ . '/../database.php';

  $room_id = $_POST['form_id'];
  $sql = "DELETE FROM 'stanze' WHERE 'id' = $room_id";
  $result = $conn->query($sql);

  if (!$result) {
    die('Cancellazione non riuscita');
  }
?>

<?php include __DIR__ . '/partials/_header.php'; ?>

<main>
  <p>Eliminazione avvenuta con successo</p>
</main>
