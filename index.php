<?php include('db_connection.php'); ?>

<?php
  $session = $_SESSION["session"];

  if ($session !== "true") {
    header('Location: login.php');
  }

?>


<?php include('includes/header.php') ?>

<div class="w-full h-screen flex flex-col items-center justify-center gap-8 p-4 container mx-auto">
  <div class="flex items-center justify-end gap-4 w-full">
    <a href='logout.php' class='p-2 rounded bg-yellow-600 text-white'>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
      </svg>
    </a>
    <button onclick="showNewUserModal()" class="p-2 rounded bg-green-700 text-white">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
      </svg>
    </button>
  </div>
  <div class="w-full">
    <?php include('read.php') ?>
  </div>
</div>

<?php include('includes/newUserModal.php') ?>
<?php include('includes/notifications.php') ?>

<?php include('includes/footer.php') ?>

<script>
  function showNewUserModal() {
    document.getElementById('newUserModalBackground').classList.remove('hidden');
  }
</script>