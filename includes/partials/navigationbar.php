<nav class="bg-brand-700 shadow-md">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <a href="index.php" class="flex items-center gap-2 text-white font-display font-extrabold">
          <img src="./assets/images/Future-Stars-Daycare.png" alt="Future Stars Daycare" class="w-9 h-9 rounded-full ring-2 ring-white/40" />
          <span>Future Stars Daycare</span>
        </a>
      </div>
      <div class="hidden md:block">
        <div class="ml-10 flex items-baseline space-x-4">
          <a href="index.php" class="text-white hover:bg-white/10 px-3 py-2 rounded-md text-sm font-medium flex items-center gap-2"><i class="fa fa-home"></i>Home</a>
          <a href="aboutme.php" class="text-white hover:bg-white/10 px-3 py-2 rounded-md text-sm font-medium flex items-center gap-2"><i class="fa fa-user"></i>About Me</a>
          <a href="contactus.php" class="text-white hover:bg-white/10 px-3 py-2 rounded-md text-sm font-medium flex items-center gap-2"><i class="far fa-address-card"></i>Contact</a>
        </div>
      </div>
      <div class="md:hidden">
        <button id="mobile-menu-button" class="text-white hover:bg-white/10 p-2 rounded-md focus:outline-none">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </div>
  </div>
</nav>

<div id="mobile-menu-panel" class="md:hidden fixed inset-0 z-[10000] hidden">
  <div id="mobile-menu-overlay" class="absolute inset-0 bg-black/70"></div>
  <div class="absolute right-0 top-0 h-full w-64 bg-brand-700 shadow-xl">
    <div class="flex items-center justify-between px-4 py-3 border-b border-white/20">
      <span class="text-white font-semibold">Menu</span>
      <button id="mobile-menu-close" class="text-white hover:bg-white/10 p-2 rounded-md">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a href="index.php" class="text-white hover:bg-white/10 block px-3 py-2 rounded-md text-base font-medium flex items-center gap-3"><i class="fa fa-home w-5"></i>Home</a>
      <a href="aboutme.php" class="text-white hover:bg-white/10 block px-3 py-2 rounded-md text-base font-medium flex items-center gap-3"><i class="fa fa-user w-5"></i>About Me</a>
      <a href="contactus.php" class="text-white hover:bg-white/10 block px-3 py-2 rounded-md text-base font-medium flex items-center gap-3"><i class="far fa-address-card w-5"></i>Contact</a>
    </div>
  </div>
</div>
