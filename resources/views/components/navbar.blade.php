<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      
      <!-- Kiri: Logo dan Navigasi -->
      <div class="flex items-center">
        <!-- Logo -->
        <div class="shrink-0">
          <img class="size-8" src="/img/logo_pplg.png" alt="Your Company" />
        </div>

        <!-- Nav Links -->
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
          </div>
        </div>
      </div>

      <!-- Kanan: Profil -->
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <div class="relative ml-3">
            <button @click="profileOpen = !profileOpen" type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button">
              <span class="sr-only">Open user menu</span>
              <img class="size-8 rounded-full" src="/img/profil.jpg" alt="">
            </button>
            <div x-cloak x-show="profileOpen" x-transition class="absolute right-0 z-20 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5" role="menu" aria-orientation="vertical">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Your Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Sign out</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Hamburger Menu (Mobile) -->
      <div class="-mr-2 flex md:hidden">
        <button @click="mobileOpen = !mobileOpen" type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="sr-only">Open main menu</span>
          <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>

    </div>
  </div>

  <!-- Mobile Menu -->
  <div x-cloak x-show="mobileOpen" class="md:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
      <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
      <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
      <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
      <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
    </div>
    <div class="border-t border-gray-700 pt-4 pb-3">
      <div class="flex items-center px-5">
        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        <div class="ml-3">
          <div class="text-base font-medium text-white">Tom Cook</div>
          <div class="text-sm font-medium text-gray-400">tom@example.com</div>
        </div>
      </div>
      <div class="mt-3 space-y-1 px-2">
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
      </div>
    </div>
  </div>
</nav>
