<?php include __DIR__ . '/server.php'; ?>
<?php include __DIR__ . '/../partials/header.php'; ?>

<?php if (!empty($this_room)) { ?>
  <main>
    <h3>
      Stanza <?php echo $this_room['room_number']; ?>
    </h3>

    <ul>
      <li>
        ID <?php echo $this_room['id']; ?>
      </li>
      <li>
        Stanza numero <?php echo $this_room['room_number']; ?>
      </li>
      <li>
        Piano <?php echo $this_room['floor']; ?>
      </li>
      <li>
        Numero letti: <?php echo $this_room['beds']; ?>
      </li>
      <li>
        Data creazione: <?php echo $this_room['created_at']; ?>
      </li>
    </ul>
  </main>
<?php } else { ?>
  <span>Stanza inesistente</span>
<?php } ?>
