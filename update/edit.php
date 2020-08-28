<?php include __DIR__ . '\..\database.php'; ?>
<?php include __DIR__ . '\server.php'; ?>
<?php include __DIR__ . '\..\partials\_header.php'; ?>
<?php include __DIR__ . '\..\show\server.php'; ?>


<main>
  <h2>Modifica stanza numero: <?php echo $room['room_number']; ?></h2>

  <form action="<?php echo $base_path . '/update/update.php'; ?>" method="post">
    <input type="hidden" name="room_id" value="<?php echo $room['id']; ?>">
    <div>
      <label>Modifica numero letti</label>
      <input type="text" name="room_beds" value="<?php echo $room['beds']; ?>">
      <input type="hidden" name="room_number" value="<?php echo $room['room_number']; ?>">
    </div>
    <div>
      <input type="submit" value="Salva">
    </div>
  </form>
</main>
