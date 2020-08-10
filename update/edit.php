<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/../partials/_header.php'; ?>

<main>
  <h2>Modifica stanza numero: <?php echo $room['room_number']; ?></h2>

  <form action="<?php echo $base_path . '/update/update.php'; ?>" method="post">
    <input type="hidden" name="room_id" value="<?php echo $room['id']; ?>">
    <div>
      <label>Seleziona numero stanza</label>
      <input type="text" name="room_number" value="<?php echo $room['room_number']; ?>">
    </div>
    <div>
      <label>Seleziona piano</label>
      <input type="text" name="room_floor" value="<?php echo $room['floor']; ?>">
    </div>
    <div>
      <label>Seleziona numero letti</label>
      <input type="text" name="room_beds" value="<?php echo $room['beds']; ?>">
    </div>
    <div>
      <input type="submit" value="Salva">
    </div>
  </form>
</main>
