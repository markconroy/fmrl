<?php include 'includes/post-to-json.php'; ?>
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
  <?php include 'includes/status-form.php'; ?>

  <?php
  if (is_array($statuses)) {
    foreach ($statuses as $status) {
      print '<p>Status id: ' . strip_tags($status->fmrl_id) . '<br>' . strip_tags($status->fmrl_status) . '</p>';
    }
  }
  ?>

</body>
</html>
