<?php
$tabs = [
    [
        'id'      => 'tab1',
        'label'   => 'Play Time',
        'image'   => 'assets/images/back-door.JPG',
        'content' => 'In many early childhood programs, the climate lately has been towards more education and skills training. However, young children also need plenty of time to play, to explore their world, and to learn social skills. We offer this for your child, by providing a balance between structured and unstructured activities and by recognizing that all children are born with a desire to explore, discover, and learn. The most effective means of accomplishing this is through their play, because we believe that it is through play, that children learn best. Play is critical to the healthy growth and development of children. Children develop socially, emotionally, cognitively, and physically through play. Children learn through play, because they are engaged in what they are doing. When children have fun with games, they become more interested in learning and their minds become more open to new thoughts and ideas. As children play, they learn to solve problems, to get along with others and take turns, negotiate, and to develop the fine and gross motor skills needed to grow and learn.'
    ],
    [
        'id'      => 'tab2',
        'label'   => 'Indoor Activities',
        'image'   => 'assets/images/indoor-gls.JPG',
        'content' => 'Books and story-time, Legos, circle-time, tumbling exercises, music and dancing, play food, interactive stuffed animals, cars/trucks/planes, arts and crafts, puzzles, flash cards, animals/dinosaurs, trains, balls, dolls and Barbies, various learning toys, musical instruments, various games, Mr. Potato Head, blocks, beads and string, song games, play dough, coloring, sing along story books, painting, board games, puppets, and singing.'
    ],
    [
        'id'      => 'tab3',
        'label'   => 'Outdoor Activities',
        'image'   => 'assets/images/back-door-2.JPG',
        'content' => 'Sliding, jumping, running, balls, racing, catch, bubbles, follow the leader, ride-on toys, wagons, various games, painting, exploring nature/weather, soccer, and more. As you know, children play hard and will get some bumps and bruises from time to time. We do our best to limit the number of times this occurs, with constant supervision and watchful eyes. Due to the safe environment/toys we have surrounded ourselves with, we hope to prevent any injuries before they can happen. During the summer months (June, July, and August), we allow for more outdoor activities and creative art projects. Weather permitting, we play outdoors every day.'
    ],
    [
        'id'      => 'tab4',
        'label'   => 'Meals and Snacks',
        'image'   => 'assets/images/table-child.JPG',
        'content' => 'Each day we provide three nutritious and well-balanced meals. We provide a morning snack at 10:00 am, homemade lunch at noon with yogurt or milk, and a snack at 3:30 pm. Water is offered throughout the day. The meals and snacks for each week constantly vary to ensure the children receive a well-balanced diet. The children are offered the food, but they will not be forced to eat.'
    ]
];
?>
<section id="activity" class="py-12 sm:py-14 lg:py-16 bg-white scroll-mt-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-10">
      <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-500/10 text-brand-700 text-sm ring-1 ring-brand-500/20 mb-4">
        <span class="w-1.5 h-1.5 rounded-full bg-brand-500"></span>Activities
      </span>
      <h2 class="section-title text-3xl sm:text-4xl lg:text-5xl font-extrabold text-brand-700">Our Daily Activities</h2>
      <p class="mt-3 text-base sm:text-lg text-gray-600">A balanced blend of play, learning, and care throughout the day.</p>
    </div>
    <div class="relative rounded-2xl bg-white shadow-lg shadow-brand-900/5 ring-1 ring-black/5 overflow-hidden">
      <div class="flex flex-wrap gap-2 border-b border-gray-100 p-2 sm:p-3">
        <?php foreach ($tabs as $index => $tab): ?>
          <button type="button" class="tab-btn inline-flex items-center gap-2 px-3 sm:px-4 py-2 rounded-full text-sm sm:text-base transition-all <?php echo $index === 0 ? 'bg-brand-500 text-white shadow-sm' : 'text-gray-700 hover:bg-brand-50'; ?>" data-tab="<?php echo htmlspecialchars($tab['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <i class="fas fa-puzzle-piece"></i>
            <?php echo htmlspecialchars($tab['label'], ENT_QUOTES, 'UTF-8'); ?>
          </button>
        <?php endforeach; ?>
      </div>
      <?php foreach ($tabs as $index => $tab): ?>
        <div id="<?php echo htmlspecialchars($tab['id'], ENT_QUOTES, 'UTF-8'); ?>" class="tab-content <?php echo $index === 0 ? '' : 'hidden'; ?>">
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
            <div class="relative h-64 sm:h-80 lg:h-full min-h-[280px]">
              <img src="<?php echo htmlspecialchars($tab['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($tab['label'], ENT_QUOTES, 'UTF-8'); ?>" class="absolute inset-0 w-full h-full object-cover">
            </div>
            <div class="p-6 sm:p-8 lg:p-10">
              <h3 class="text-2xl sm:text-3xl font-extrabold text-brand-700 font-display mb-4"><?php echo htmlspecialchars($tab['label'], ENT_QUOTES, 'UTF-8'); ?></h3>
              <p class="text-base sm:text-lg text-gray-700 leading-relaxed"><?php echo nl2br(htmlspecialchars($tab['content'], ENT_QUOTES, 'UTF-8')); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.tab-btn');
    const contents = document.querySelectorAll('.tab-content');
    buttons.forEach((btn) => {
      btn.addEventListener('click', function () {
        buttons.forEach((b) => {
          b.classList.remove('bg-brand-500', 'text-white', 'shadow-sm');
          b.classList.add('text-gray-700', 'hover:bg-brand-50');
        });
        this.classList.remove('text-gray-700', 'hover:bg-brand-50');
        this.classList.add('bg-brand-500', 'text-white', 'shadow-sm');
        contents.forEach((c) => c.classList.add('hidden'));
        const t = document.getElementById(this.dataset.tab);
        if (t) t.classList.remove('hidden');
      });
    });
  });
</script>
