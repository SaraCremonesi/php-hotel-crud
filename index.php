<?php include __DIR__ . 'server.php'; ?>
<?php include __DIR__ . '/partials/_header.php'; ?>
    <main>
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
            <th>
              <?php echo $room['id']; ?>
            </th>
            <th>
              <?php echo $room['room_number']; ?>
            </th>
            <th>
              <?php echo $room['floor']; ?>
            </th>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </main>
  </body>
</html>
