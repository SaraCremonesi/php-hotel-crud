<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/../partials/_header.php'; ?>

<?php if (!empty($room)) { ?>
  <main>
    <h3>
      Stanza <?php echo $room['room_number']; ?>
    </h3>

    <ul>
      <li>
        ID <?php echo $room['id']; ?>
      </li>
      <li>
        Stanza numero <?php echo $room['room_number']; ?>
      </li>
      <li>
        Piano <?php echo $room['floor']; ?>
      </li>
      <li>
        Numero letti: <?php echo $room['beds']; ?>
      </li>
      <li>
        Data creazione: <?php echo $room['created_at']; ?>
      </li>
    </ul>
  </main>
<?php } else {
  die('Stanza inesistente');
} ?>
