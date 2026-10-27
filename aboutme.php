<?php include('includes/partials/header.php'); ?>
<body class="flex flex-col min-h-screen">
<?php include('includes/partials/navigationbar.php'); ?>

<section class="py-12 sm:py-14 lg:py-16 bg-[#f7fbfd]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-10">
      <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-500/10 text-brand-700 text-sm ring-1 ring-brand-500/20 mb-4"><span class="w-1.5 h-1.5 rounded-full bg-brand-500"></span>About Me</span>
      <h1 class="section-title text-3xl sm:text-4xl lg:text-5xl font-extrabold text-brand-700">Meet Monireh Saffari</h1>
      <p class="mt-3 text-base sm:text-lg text-gray-600">Licensed childcare provider dedicated to love, learning, and a safe home away from home.</p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10 items-center">
      <div class="relative">
        <div class="absolute -inset-2 rounded-2xl bg-gradient-to-br from-brand-500/15 to-accent-500/10 blur-xl"></div>
        <div class="relative rounded-2xl overflow-hidden shadow-xl shadow-brand-900/10 ring-1 ring-black/5">
          <img src="assets/images/allAboutMe.JPG" alt="Monireh Saffari" class="w-full h-[320px] sm:h-[420px] lg:h-[560px] object-cover">
        </div>
      </div>
      <div class="relative">
        <div class="absolute -inset-1 rounded-2xl bg-white shadow-lg shadow-brand-900/5 ring-1 ring-black/5"></div>
        <div class="relative rounded-2xl p-6 sm:p-8 lg:p-10 space-y-6">
          <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-brand-700 font-display mb-3">All About Me</h2>
            <p class="text-base sm:text-lg text-gray-700 leading-relaxed">Hi, my name is Monireh and I am the provider of a licensed childcare program, Future Stars. I’m married and I have a son and a little girl. Throughout my life, I have dedicated a lot of my time to taking care of children and I must say I enjoy every minute of it. I have been working in the field of early childhood education and development since 2017. I decided to open a home daycare because I have a great passion for taking care of children. I believe children are the foundation of society and are the future. I understand that in the early years, the most important things that children need are love and security. I find a great deal of happiness fulfilling their needs. I’m so proud and excited to work with children.</p>
          </div>
          <div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-brand-700 font-display mb-3">Our Facility</h2>
            <p class="text-base sm:text-lg text-gray-700 leading-relaxed mb-4">Future Stars Daycare is licensed by the State of California, Department of Social Services, and License # 434416541, established in 2023. We comply with all safety, health, and nutritional standards set forth by the state. Full background checks on all staff are available upon request.</p>
            <ul class="space-y-2 text-base sm:text-lg text-gray-700">
              <li class="flex items-start gap-2"><span class="mt-2 w-1.5 h-1.5 rounded-full bg-brand-500"></span><span>I completed the Curriculum of Bachelor of Accounting in my country.</span></li>
              <li class="flex items-start gap-2"><span class="mt-2 w-1.5 h-1.5 rounded-full bg-brand-500"></span><span>I have a certificate of EMSA Health, Safety, Nutrition, & Lead Poisoning.</span></li>
              <li class="flex items-start gap-2"><span class="mt-2 w-1.5 h-1.5 rounded-full bg-brand-500"></span><span>First Aid & CPR Training.</span></li>
            </ul>
          </div>
          <div class="flex flex-wrap items-center gap-3">
            <a href="contactus.php" class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-500 text-white hover:bg-brand-600 transition-colors shadow-sm"><i class="far fa-address-card"></i>Contact Us</a>
            <div class="px-4 py-2 rounded-full bg-brand-50 text-brand-700 ring-1 ring-brand-500/20 text-sm">Lic# 434416541</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('includes/partials/footer.php'); ?>
</body>
</html>

