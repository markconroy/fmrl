<?php
  if (isset($_POST['submit'])) {
    $status = $_POST['status'];
    echo $status;
  }
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
</body>
</html>
