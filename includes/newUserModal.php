<div id="newUserModalBackground" class="hidden flex fixed top-0 items-center justify-center w-screen h-screen">
  <!-- Main modal -->
<form action="create.php" method="POST" id="newUserModal" class="z-50 p-4 overflow-x-hidden overflow-y-auto md:inset-0 min-w-80">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Nuevo usuario
                </h3>
                <button onclick="cancel()" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Cerrar</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
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
                  <label for="user_level" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nivel:</label>
                  <select name="user_level" id="user_level" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    <option value="0">0 - Usuario normal</option>
                    <option value="1">1 - Administrador</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <input data-modal-hide="defaultModal" type="submit" name="submit" value="Guardar" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" />
                <button onclick="cancel()" data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancelar</button>
            </div>
        </div>
    </div>
</form>

</div>


<script>
  const background = document.getElementById('newUserModalBackground');
  const name = document.getElementById('user_name');
  const password = document.getElementById('user_password');

  function hideModal() {
    background.classList.add('hidden');
  }

  function cancel() {
    name.value = '';
    password.value = '';
    hideModal();
  }

</script>