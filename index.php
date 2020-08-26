<?php include __DIR__ . '\update\server.php'; ?>
<?php include __DIR__ . '\partials\_header.php'; ?>
<?php include __DIR__ . '\database.php'; ?>

    <main>
      <?php if (isset($_GET['upd-room'])) { ?>
        <p>Stanza numero <?php echo $_GET['upd-room']; ?> aggiornata con successo</p>
      <?php } ?>

      <?php if (isset($_GET['deleted-room'])) { ?>
        <p>Stanza numero <?php echo $_GET['deleted-room']; ?> eliminata con successo</p>
      <?php } ?>

      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Numero stanza</th>
            <th>Piano</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($rooms as $room) { ?>
          <tr>
            <td>
              <?php echo $room['id']; ?>
            </td>
            <td>
              <?php echo $room['room_number']; ?>
            </td>
            <td>
              <?php echo $room['floor']; ?>
            </th>
            <td>
              <a href="<?php echo $base_path . '/show/room.php?id=' . $room['id']; ?>">Vai</a>
              <a href="<?php echo $base_path . '/update/edit.php?id=' . $room['id']; ?>">Aggiorna</a>

              <form action="<?php echo $base_path . '/delete/delete.php?id=' . $room['id']; ?>" method="post">
                <input type="hidden" name="form_id" value="<?php echo $room['id']; ?>">
                <input type="submit" value="Delete">
              </form>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </main>
  </body>
</html>
