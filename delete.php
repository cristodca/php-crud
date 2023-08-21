<?php 

 include('db_connection.php');

  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM user WHERE idu = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('Query Failed');
    }

    $_SESSION['message'] = 'Usuario eliminado correctamente';
    $_SESSION['message_type'] = 'danger';

    header('Location: index.php');
  }

?>