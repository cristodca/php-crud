<?php
if (isset($_SESSION['message'])) { ?>
  <div id="alert" class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-700 dark:text-blue-400 absolute bottom-4 right-4 flex items-center justify-between gap-2" role="alert">
    <?php echo $_SESSION['message'] ?> 
    
    <button onclick="hide()">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
      </svg>
    </button>
  </div>

  <script>
    function hide() {
      document.getElementById('alert').classList.add('hidden');
    }
  </script>
<?php session_unset(); }
?>