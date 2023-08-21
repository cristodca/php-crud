<?php 
  if (isset($_POST['submit'])) {
    include('db_connection.php');

    $name = $_POST['user_name'];
    $pass = $_POST['user_password'];

    $query = "SELECT * FROM user WHERE nameu = '$name' AND passw = '$pass' AND levelu = 1";
    $result = mysqli_query($connection, $query);

    if ($datos = $result->fetch_object()) {
      session_set_cookie_params(60 * 60 * 24);
      session_start();
      $_SESSION['session'] = "true";
      echo 'sesion iniciada';
      echo session_status();
      
      header('Location: index.php');
    } else {
      $_SESSION['session'] = "false";
      echo 'credenciales incorrectas';
      header('Location: login.php');
    }

  }
?>

<?php include('includes/header.php') ?>
  <div class="w-full h-screen flex flex-col items-center justify-center gap-8 p-4 container mx-auto">
    <form action="login.php" method="POST">
      <div  class="flex gap-4 flex-col">
        <div>
          <label for="user_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre completo:</label>
          <input type="text" name="user_name" id="user_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cristopher Chavez Alfaro" required>
        </div>
        <div>
          <label for="user_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña:</label>
          <input type="password" name="user_password" id="user_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="******" required>
        </div>
        <div>
          <input type="submit" name="submit" class="px-4 py-2 bg-green-600 text-white rounded w-full" value="Iniciar sesión">
        </div>
      </div>
    </form>
  </div
<?php include('includes/footer.php') ?>