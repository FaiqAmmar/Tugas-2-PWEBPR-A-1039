<section class="overflow-auto">
  <div class="mx-auto my-6 h-auto max-w-sm p-5 rounded-lg shadow bg-[#073763] border-[#0c343d] border-4 flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="/assets/logo1.png" alt="Checkmate">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Login to your account</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="dashboard.html" method="POST">
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
          <button type="submit" class="flex w-full justify-center rounded-md bg-[#0b5394] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#3d85c6]">Log  in</button>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-white">Not a member?
        <a href="sign-up.html" class="font-semibold leading-6 text-[#3d85c6] hover:text-[#6fa8dc] hover:underline">Sign Up</a>
      </p>
    </div>
  </div>
</section>