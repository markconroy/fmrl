<?php
  if (isset($_POST['submit'])) {
    $status = $_POST['status'];
    echo htmlspecialchars($status);
  }
?>

<?php
$statuses_file = file_get_contents('statuses.json');
$statuses_array = json_decode($statuses_file);
$statuses = $statuses_array;
?>

<!DOCTYPE html>
<html>
<head>
  <title>FMRL: The Disappearing Social Network</title>
</head>
<body>
  <form method="post">
    <label for="status">Status</label>
    <input name="status"></input>
    <input name="submit" type="submit" />
  </form>

  <?php
  if (is_array($statuses)) {
    foreach ($statuses as $status) {
      print '<p>This is status id: ' . $status->fmrlid . '<br>
      it says: ' . $status->fmrlstatus . '</p>';
    }
  }
  ?>
  
</body>
</html>
