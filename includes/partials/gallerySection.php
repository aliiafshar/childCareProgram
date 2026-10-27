<?php
$imageFolder = 'assets/images/gallery/';
$images = array();

if (is_dir($imageFolder)) {
    $dir = opendir($imageFolder);
    while (($file = readdir($dir)) !== false) {
        if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $file)) {
            $images[] = $file;
        }
    }
    closedir($dir);
}
?>
<section id="Gallery" class="py-12 sm:py-14 lg:py-16 bg-white scroll-mt-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-10">
      <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-500/10 text-brand-700 text-sm ring-1 ring-brand-500/20 mb-4">
        <span class="w-1.5 h-1.5 rounded-full bg-brand-500"></span>
        Gallery
      </span>
      <h2 class="section-title text-3xl sm:text-4xl lg:text-5xl font-extrabold text-brand-700">Our Space</h2>
      <p class="mt-3 text-base sm:text-lg text-gray-600">A glimpse into our warm, safe, and engaging environment.</p>
    </div>

    <?php if (!empty($images)): ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
        <?php foreach ($images as $image): 
          $imagePath = $imageFolder . $image;
          $altText = "Future Stars Daycare - " . basename($image, pathinfo($image, PATHINFO_EXTENSION));
        ?>
          <figure class="group relative rounded-2xl overflow-hidden shadow-lg shadow-brand-900/5 ring-1 ring-black/5">
            <img class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105" src="<?php echo $imagePath; ?>" alt="<?php echo $altText; ?>">
            <figcaption class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
              <span class="text-white text-sm">Future Stars Daycare</span>
            </figcaption>
          </figure>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <figure class="group relative rounded-2xl overflow-hidden shadow-lg shadow-brand-900/5 ring-1 ring-black/5">
          <img src="assets/images/new1.jpg" alt="Future Stars Daycare" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105">
          <figcaption class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
            <span class="text-white text-sm">Warm & welcoming space</span>
          </figcaption>
        </figure>
        <figure class="group relative rounded-2xl overflow-hidden shadow-lg shadow-brand-900/5 ring-1 ring-black/5">
          <img src="assets/images/new2.jpg" alt="Learning Time" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105">
          <figcaption class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
            <span class="text-white text-sm">Learning through play</span>
          </figcaption>
        </figure>
        <figure class="group relative rounded-2xl overflow-hidden shadow-lg shadow-brand-900/5 ring-1 ring-black/5">
          <img src="assets/images/new3.jpg" alt="Play Time" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105">
          <figcaption class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
            <span class="text-white text-sm">Active play</span>
          </figcaption>
        </figure>
        <figure class="group relative rounded-2xl overflow-hidden shadow-lg shadow-brand-900/5 ring-1 ring-black/5 sm:col-span-2 lg:col-span-1">
          <img src="assets/images/new4.jpg" alt="Story Time" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105">
          <figcaption class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
            <span class="text-white text-sm">Stories & songs</span>
          </figcaption>
        </figure>
        <figure class="group relative rounded-2xl overflow-hidden shadow-lg shadow-brand-900/5 ring-1 ring-black/5">
          <img src="assets/images/back-door.JPG" alt="Outdoor Space" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105">
          <figcaption class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
            <span class="text-white text-sm">Outdoor play</span>
          </figcaption>
        </figure>
        <figure class="group relative rounded-2xl overflow-hidden shadow-lg shadow-brand-900/5 ring-1 ring-black/5">
          <img src="assets/images/indoor-gls.JPG" alt="Indoor Activities" class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-105">
          <figcaption class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
            <span class="text-white text-sm">Creative indoor time</span>
          </figcaption>
        </figure>
      </div>
    <?php endif; ?>
  </div>
</section>

