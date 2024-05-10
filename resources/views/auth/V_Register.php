<section class="overflow-auto">
  <div class="mx-auto my-6 h-auto max-w-sm p-5 rounded-lg shadow bg-[#073763] border-[#0c343d] border-4 flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="assets/logo1.png" alt="Checkmate">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Sign Up your account</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="<?= urlpath('register'); ?>" method="POST">

        <div>
          <label for="nama" class="block text-sm font-medium leading-6 text-white">Nama</label>
          <div class="mt-2">
            <input id="nama" name="nama" type="nama" autocomplete="nama" required class="block w-full rounded-md border-0 p-1.5 bg-[#0c343d] text-white shadow-sm ring-1 ring-inset ring-gray-800">
          </div>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-white">Email address</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 p-1.5 bg-[#0c343d] text-white shadow-sm ring-1 ring-inset ring-gray-800">
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-white">Password</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 p-1.5 bg-[#0c343d] text-white shadow-sm ring-1 ring-inset ring-gray-800">
          </div>
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-[#0b5394] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#3d85c6] ">Sign Up</button>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-white">Already a member?
        <a href="<?= urlpath('login') ?>" class="font-semibold leading-6 text-[#3d85c6] hover:text-[#6fa8dc] hover:underline">Login</a>
      </p>
    </div>
  </div>
</section>