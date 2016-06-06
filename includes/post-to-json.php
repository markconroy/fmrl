<?php
if (isset($_POST['submit'])) {
  $status_file = 'statuses.json';
  $statuses_array = array();

  try {
    // Get the contents of the form submission.
    $status_form = array(
      'fmrl_id' => $_POST['fmrl_id'],
      'fmrl_status' => $_POST['fmrl_status'],
    );

    // Get the existing contents of the file.
    $statuses_existing = file_get_contents($status_file);

    // Convert existing data to an array.
    $statuses_array = json_decode($statuses_existing);

    // Push form data to this array.
    array_push($statuses_array, $status_form);

    // Convert the new data to JSON.
    $statuses_existing = json_encode($statuses_array, JSON_PRETTY_PRINT);

    // Write json data into data.json file.
    if (file_put_contents($status_file, $statuses_existing)) {
      echo 'JSON file updated. Yippee!';
    }
    else {
      echo "Houston, we have a problem!";
    }
  }
  catch (Exception $e) {
    echo 'Caught exception: ', $e->getMessage(), "\n";
  }

  $status_post = $_POST['fmrl_status'];
  file_put_contents('statuses.json', $status_post);
}
