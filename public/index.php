<?php
require_once 'database.php';
$arr = Contact::select();
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Dashboard</title>
</head>

<body class="bg-[#6fa8dc]">

  <nav class="fixed top-0 z-50 w-full bg-[#073763] border-b border-[#0c343d]">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <a href="#" class="flex ms-2 md:me-24">
            <img src="/assets/logo1.png" class="h-8 me-3" text-[#3d85c6]alt="FLogo" />
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">Checkmate</span>
          </a>
        </div>
        <div class="flex items-center">
          <div class="flex items-center ms-3">
            <div>
              <img class="w-8 h-8 rounded-full" src="/assets/profil.jpg" alt="user photo">
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-[#073763] border-r sm:translate-x-0 border-[#0c343d]" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-[#073763]">
      <ul class="space-y-2 font-medium">
        <li>
          <a href="#" class="flex items-center p-2 rounded-lg text-white hover:bg-[#3d85c6] group">
            <svg class="w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
              <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
              <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
            </svg>
            <span class="ms-3">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="login.html" class="flex items-center p-2 rounded-lg text-white hover:bg-[#3d85c6] group">
            <span class="flex-1 ms-3 whitespace-nowrap">Tambah Data</span>
          </a>
        </li>
        <li>
          <a href="login.html" class="flex items-center p-2 rounded-lg text-white hover:bg-[#3d85c6] group">
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
      <div class="">
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
                No ID
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
            <?php
              for ($i = 0; $i < count($arr['id']); $i++) {
            ?>
              <tr class="bg-[#0c343d] border-b border-gray-800 hover:bg-[#1a6f82]">
                <td class="px-6 py-4">
                  <?= $i+1 ?>
                </td>
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
                  <?= $arr['owner'][$i] ?>
                </th>
                <td class="px-6 py-4">
                  <?= $arr['no_id'][$i] ?>
                </td>
                <td class="px-6 py-4">
                  <?= $arr['no_hp'][$i] ?>
                </td>
                <td class="px-6 py-4 text-right">
                  <a href="#" class="font-medium text-[#3d85c6] hover:text-[#6fa8dc] hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4 text-right">
                  <a href="#" class="font-medium text-[#3d85c6] hover:text-[#6fa8dc] hover:underline">Delete</a>
                </td>
              </tr>
            <?php
              }
            ?>
              <!-- <tr class="bg-[#0c343d] border-b border-gray-800 hover:bg-[#1a6f82]">
                  <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
                    Akmal Ihab Syauqi
                  </th>
                  <td class="px-6 py-4">
                    222410101034
                  </td>
                  <td class="px-6 py-4">
                    082333444555
                  </td>
                  <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-[#3d85c6] hover:text-[#6fa8dc] hover:underline">Edit</a>
                  </td>
                  <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-[#3d85c6] hover:text-[#6fa8dc] hover:underline">Delete</a>
                  </td>
              </tr>
              <tr class="bg-[#0c343d] border-b border-gray-800 hover:bg-[#1a6f82]">
                  <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap text-white">
                    Haikal Nuril Abiyit
                  </th>
                  <td class="px-6 py-4">
                    222410101058
                  </td>
                  <td class="px-6 py-4">
                    081333222444
                  </td>
                  <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-[#3d85c6] hover:text-[#6fa8dc] hover:underline">Edit</a>
                  </td>
                  <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-[#3d85c6] hover:text-[#6fa8dc] hover:underline">Delete</a>
                  </td>
              </tr> -->
          </tbody>
        </table> 
      </div>  
    </div>
  </div>

</body>

</html>
</html>