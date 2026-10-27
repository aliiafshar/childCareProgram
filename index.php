<?php include('includes/partials/header.php'); ?>
<body class="flex flex-col min-h-screen">
<?php include('includes/partials/navigationbar.php'); ?>

<section class="relative overflow-hidden bg-gradient-to-br from-brand-500 via-brand-500 to-brand-600">
  <div class="absolute inset-0 opacity-10 pointer-events-none">
    <div class="absolute -top-24 -left-24 w-72 h-72 rounded-full bg-white blur-3xl"></div>
    <div class="absolute -bottom-32 -right-32 w-80 h-80 rounded-full bg-white blur-3xl"></div>
  </div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 sm:py-16 lg:py-20">
    <div class="flex flex-col lg:flex-row items-center justify-center gap-10 lg:gap-12">
      <div class="flex-1 flex justify-center">
        <div class="relative">
          <div class="absolute -inset-4 rounded-2xl bg-white/10 blur-xl"></div>
          <img class="relative w-full max-w-xs sm:max-w-sm lg:max-w-md rounded-2xl shadow-2xl shadow-brand-900/20 ring-1 ring-white/20" src="assets/images/Future-Stars-Daycare.png" alt="Future Stars Daycare">
        </div>
      </div>
      <div class="flex-1 text-center lg:text-left">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-white/95 text-sm mb-5 ring-1 ring-white/20"><span class="w-1.5 h-1.5 rounded-full bg-accent-500"></span>Licensed Childcare • Love, Learn, Grow</div>
        <h3 class="text-white/95 text-xl sm:text-2xl md:text-3xl font-semibold mb-3">WELCOME</h3>
        <h1 class="text-white text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-5 leading-tight tracking-tight">Love, Learn, Grow & Develop</h1>
        <p class="text-white/90 text-lg md:text-xl font-medium max-w-xl mx-auto lg:mx-0">Provide your child with a place full of love and education.</p>
        <div class="mt-6 flex flex-wrap items-center justify-center lg:justify-start gap-3">
          <a href="#activity" class="inline-flex items-center gap-2 text-white px-4 py-2 rounded-full bg-white/10 hover:bg-white/15 ring-1 ring-white/20 transition-colors duration-200"><i class="fa fa-tasks"></i>Activity</a>
          <a href="#DAILY_SCHEDULE" class="inline-flex items-center gap-2 text-white px-4 py-2 rounded-full bg-white/10 hover:bg-white/15 ring-1 ring-white/20 transition-colors duration-200"><i class="fas fa-calendar-day"></i>Daily Schedule</a>
          <a href="#Gallery" class="inline-flex items-center gap-2 text-white px-4 py-2 rounded-full bg-white/10 hover:bg-white/15 ring-1 ring-white/20 transition-colors duration-200"><i class="fas fa-images"></i>Gallery</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('includes/partials/aboutProvider.php'); ?>
<?php include('includes/partials/activity.php'); ?>
<?php include('includes/partials/scheduleTable.php'); ?>
<?php include('includes/partials/gallerySection.php'); ?>

<?php include('includes/partials/footer.php'); ?>
</body>
</html>
