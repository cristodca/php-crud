<?php
  include('db_connection.php');

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE idu = $id";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $name = $row['nameu'];
      $password = $row['passw'];
      $level = $row['levelu'];
    }
  }

  if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $name = $_POST['user_name'];
    $password = $_POST['user_password'];
    $level = $_POST['user_level'];

    $query = "UPDATE user SET nameu = '$name', passw = '$password', levelu = $level WHERE idu = $id";
    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('Query Failed');
    }

    $_SESSION['message'] = 'Usuario actualizado correctamente';
    $_SESSION['message_type'] = 'warning';
    header('Location: index.php');
  }
?>

<?php include('includes/header.php'); ?>

<div class="w-full h-screen flex flex-col items-center justify-center gap-8 p-4 container mx-auto">
  <form action="update.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <div  class="flex flex-col gap-4 mb-4">
      <div>
        <label for="user_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre completo:</label>
        <input type="text" name="user_name" id="user_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cristopher Chavez Alfaro" value="<?php echo $name ?>" required>
      </div>
      <div>
        <label for="user_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña:</label>
        <input type="password" name="user_password" id="user_password" value="<?php echo $password ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="******" required>
      </div>
      <div>
        <label for="user_level" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nivel:</label>
        <select name="user_level" id="user_level" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required value="<?php echo $level; ?>">
          <option value="0">0 - Usuario normal</option>
          <option value="1">1 - Administrador</option>
        </select>
      </div>
    </div>
    <div class="flex gap-4 flex-column">
      <input type="submit" name="submit" value="Guardar cambios" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"/>
      <a href="index.php" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
        Cancelar
      </a>
    </div>
  </form>
</div>
<?php include('includes/footer.php'); ?>