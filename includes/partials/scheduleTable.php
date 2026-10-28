<section id="DAILY_SCHEDULE" class="py-12 sm:py-14 lg:py-16 bg-[#f7fbfd] scroll-mt-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-10">
      <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-500/10 text-brand-700 text-sm ring-1 ring-brand-500/20 mb-4">
        <span class="w-1.5 h-1.5 rounded-full bg-brand-500"></span>
        Daily Schedule
      </span>
      <h2 class="section-title text-3xl sm:text-4xl lg:text-5xl font-extrabold text-brand-700">A Consistent Daily Routine</h2>
      <p class="mt-3 text-base sm:text-lg text-gray-600">FUTURE STARS DAYCARE is open from 7:30 am — 5:30 pm weekdays.</p>
    </div>

    <?php
    $schedule = [
        ["07:30 AM", "Drop-Off - Welcome Children", "bg-amber-50"],
        ["08:30 AM", "Exploratory Play", "bg-emerald-50"],
        ["09:00 AM", "Singing and Dancing", "bg-rose-50"],
        ["09:20 AM", "Circle Time", "bg-violet-50"],
        ["09:50 AM", "Potty-time/Clean-up/Wash-Up", "bg-sky-50"],
        ["10:00 AM", "Snack", "bg-orange-50"],
        ["10:15 AM", "Outdoor play-time (water Play - Playdough - Sand - Paint)", "bg-pink-50"],
        ["11:45 AM", "Clean-Up/Wash-Up", "bg-amber-50"],
        ["12:00 PM", "Lunch Time", "bg-emerald-50"],
        ["12:30 PM", "Potty-time/Clean-up/Wash-Up", "bg-rose-50"],
        ["01:00 PM", "Nap-Time or Quiet-Time", "bg-violet-50"],
        ["03:00 PM", "Potty-time/Clean-up/Wash-Up", "bg-sky-50"],
        ["03:30 PM", "Snack Time", "bg-orange-50"],
        ["04:00 PM", "Center Activity", "bg-pink-50"],
        ["04:20 PM", "Group & Story Time", "bg-amber-50"],
        ["05:00 PM", "Refreshment and Free Play", "bg-emerald-50"],
        ["05:30 PM", "Pick Up", "bg-rose-50"],
    ];
    ?>

    <div class="relative overflow-hidden rounded-2xl bg-white shadow-lg shadow-brand-900/5 ring-1 ring-black/5">
      <div class="overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="bg-gradient-to-r from-brand-500 to-brand-600 text-white">
              <th class="text-left text-sm sm:text-base font-semibold px-6 py-4">Time</th>
              <th class="text-left text-sm sm:text-base font-semibold px-6 py-4">Activity</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-100">
            <?php foreach ($schedule as $item): ?>
              <tr class="<?= $item[2] ?> hover:brightness-[0.98] transition-colors">
                <td class="px-6 py-4 text-sm sm:text-base font-medium text-gray-900 whitespace-nowrap"><?= $item[0] ?></td>
                <td class="px-6 py-4 text-sm sm:text-base text-gray-700"><?= $item[1] ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
