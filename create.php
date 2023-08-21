<?php

if (isset($_POST['submit'])) {
  $name = $_POST['user_name'];
  $password = $_POST['user_password'];
  $level = $_POST['user_level'];

  if ($name && $password) {
    include('db_connection.php');

    $query = "INSERT INTO user(nameu, passw, levelu) VALUES ('$name', '$password', $level)";
    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('Query Failed');
    }

    $_SESSION['message'] = 'Usuario guardado correctamente';
    $_SESSION['message_type'] = 'success';
    header('Location: index.php');
  }
}

?>