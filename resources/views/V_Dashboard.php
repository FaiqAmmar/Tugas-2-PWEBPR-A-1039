<?php $title = 'Dashboard'; ?>

<?php include_once 'resources/views/master-layout/master-dashboard.php'; ?>

<section>
  <nav class="fixed top-0 z-10 w-full bg-[#073763] border-b border-[#0c343d]">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <img src="assets/logo1.png" class="h-8 me-3" text-[#3d85c6]alt="Logo" />
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">Contact App</span>
        </div>
        <div class="flex items-center">
          <div class="flex items-center ms-3">
            <div>
              <img class="w-8 h-8 rounded-full" src=" assets/profil.jpg" alt="user photo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <aside id="logo-sidebar" class="fixed top-0 left-0 z-0 w-64 h-screen pt-20 transition-transform -translate-x-full bg-[#073763] border-r sm:translate-x-0 border-[#0c343d]" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-[#073763]">
      <ul class="space-y-2 font-medium">
        <li>
          <a href="<?= urlpath('dashboard') ?>" class="flex items-center p-2 rounded-lg text-white hover:bg-[#3d85c6] group">
            <svg class="w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
              <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
              <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
            </svg>
            <span class="ms-3">Dashboard</span>
          </a>
        </li>
        <li>
          <div class="flex rounded-lg hover:bg-[#3d85c6] group">
            <button data-modal-target="modal-tambah" data-modal-toggle="modal-tambah" class="flex items-center p-2 rounded-lg text-white">
            <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 36 36">
              <path fill="currentColor" d="M31 15H21V5a3 3 0 1 0-6 0v10H5a3 3 0 1 0 0 6h10v10a3 3 0 1 0 6 0V21h10a3 3 0 1 0 0-6z"/>
            </svg>
              <span class="flex-1 ms-3 whitespace-nowrap">Tambah Data</span>
            </button>
          </div>
        </li>
        <li>
          <a href="<?= urlpath('logout') ?>" class="flex items-center p-2 rounded-lg text-white hover:bg-[#3d85c6] group">
            <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
            </svg>
            <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <div class="p-4 sm:ml-64">
    <div class="container w-max relative overflow-x-auto shadow-md sm:rounded-lg mt-14">
      <table class="w-auto text-sm text-left rtl:text-right text-gray-300">
        <thead class="text-xs uppercase bg-gray-800 text-gray-300">
          <tr>
            <th scope="col" class="px-6 py-3">
              No
            </th>
            <th scope="col" class="px-6 py-3">
              Owner
            </th>
            <th scope="col" class="px-6 py-3">
              No HP
            </th>
            <th scope="col" class="px-6 py-3">
              <span class="sr-only">Edit</span>
            </th>
            <th scope="col" class="px-6 py-3">
              <span class="sr-only">Delete</span>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php if (empty($contacts)) : ?>
          <tr>
              <td colspan="5">No contacts found.</td>
          </tr>
          <?php else : ?>
            <?php foreach ($contacts as $index => $contact) : ?>
              <tr class="bg-[#0c343d] border-b border-gray-800 hover:bg-[#1a6f82]">
                <td class="px-6 py-4"><?php echo $index + 1; ?></td>
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white"><?php echo $contact['contact_name']; ?></th>
                <td class="px-6 py-4"><?php echo $contact['no_hp']; ?></td>
                <td class="px-6 py-4 text-right">
                  <button data-modal-target="modal-ubah-<?php echo $contact['id']; ?>" data-modal-toggle="modal-ubah-<?php echo $contact['id']; ?>" 
                  class="font-medium text-[#3d85c6] hover:text-[#6fa8dc] hover:underline">Edit</button>
                </td>
                <td class="px-6 py-4 text-right">
                  <button data-modal-target="modal-hapus-<?php echo $contact['id']; ?>" data-modal-toggle="modal-hapus-<?php echo $contact['id']; ?>"
                  class="font-medium text-[#3d85c6] hover:text-[#6fa8dc] hover:underline">Delete</button>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table> 
    </div>
  </div>
</section>

<!-- Modal Tambah -->
<div id="modal-tambah" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
    <div class="relative bg-gray-800 rounded-lg shadow">
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
        <h3 class="text-xl font-semibold text-gray-300">
          Menambah Contact App
        </h3>
        <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-600 hover:text-gray-500 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-tambah">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <div class="p-4 md:p-5">
        <form class="space-y-4" action="<?= urlpath('dashboard/tambah-contact') ?>" method="post">
          <div>
            <label for="contact_name" class="block mb-2 text-sm font-medium text-gray-300">Nama</label>
            <input type="text" name="contact_name" id="contact_name" class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg focus:ring-[#3d85c6] focus:border-[#3d85c6] block w-full p-2.5" placeholder="Muhammad Faiq Ammar" required />
          </div>
          <div>
            <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-300">No HP</label>
            <input type="text" name="no_hp" id="no_hp" class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg focus:ring-[#3d85c6] focus:border-[#3d85c6] block w-full p-2.5" placeholder="08**********" required />
          </div>
          <button type="submit" class="w-full text-white bg-[#3d85c6] hover:bg-[#073763] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah</button>
        </form>
      </div>
    </div>
    </div>
</div> 

<!-- Modal Ubah dan Delete -->
<?php foreach ($contacts as $contact) : ?>
  <!-- Modal Ubah -->
  <div id="modal-ubah-<?php echo $contact['id']; ?>" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative p-4 w-full max-w-md max-h-full">
    <div class="relative bg-gray-800 rounded-lg shadow">
      <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t ">
        <h3 class="text-xl font-semibold text-gray-300">
          Menambah Contact App
        </h3>
        <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-600 hover:text-gray-500 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-ubah-<?php echo $contact['id']; ?>">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <div class="p-4 md:p-5">
        <form class="space-y-4" action="<?= urlpath('dashboard/ubah-contact') ?>" method="post">
          <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
          <div>
            <label for="contact_name" class="block mb-2 text-sm font-medium text-gray-300">Nama</label>
            <input type="text" name="contact_name" value="<?php echo $contact['contact_name']; ?>" class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg focus:ring-[#3d85c6] focus:border-[#3d85c6] block w-full p-2.5" placeholder="Muhammad Faiq Ammar" required />
          </div>
          <div>
            <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-300">No HP</label>
            <input type="text" name="no_hp" value="<?php echo $contact['no_hp']; ?>" class="bg-gray-500 border border-gray-300 text-white text-sm rounded-lg focus:ring-[#3d85c6] focus:border-[#3d85c6] block w-full p-2.5" placeholder="08**********" required />
          </div>
          <button type="submit" class="w-full text-white bg-[#3d85c6] hover:bg-[#073763] font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
        </form>
      </div>
    </div>
    </div>
  </div> 
  <!-- Modal Delete -->
  <div id="modal-hapus-<?php echo $contact['id']; ?>" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
      <div class="relative bg-gray-800 rounded-lg shadow">
        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-600 hover:text-gray-500 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="modal-hapus-<?php echo $contact['id']; ?>">
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
        <div class="p-4 md:p-5 text-center">
          <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
          </svg>
          <h3 class="mb-5 text-lg font-normal text-gray-300">Apakah Anda yakin untuk menghapus kontak ini?</h3>
          <form class="flex gap-5 items-center justify-center" action="<?= urlpath('dashboard/hapus-contact') ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
            <button data-modal-hide="modal-hapus" type="submit"
            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-[#3d85c6] focus:z-10 focus:ring-4 focus:ring-gray-100">
              Iya
            </button>
            <button data-modal-hide="modal-hapus-<?php echo $contact['id']; ?>" type="button"
            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
              Tidak
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php include_once 'resources/views/master-layout/master-dashboard.php'; ?>