<!-- ═══════════════════════════════════════════════════════
     FILE: partials/skill-passport-banner.php
     ═══════════════════════════════════════════════════════ -->

<?php
$passportBars = [
    ['label' => 'SSCP – Semester Skill Certification', 'pct' => 20, 'color' => '#a855f7'],
    ['label' => 'SIIP – Semester Industry Immersion',  'pct' => 20, 'color' => '#38bdf8'],
    ['label' => 'OLT – Outbound Leadership Training',  'pct' => 20, 'color' => '#a3e635'],
    ['label' => 'FEP – Field Exposure Programme',      'pct' => 20, 'color' => '#f472b6'],
    ['label' => 'GIP – Global Immersion Programme',    'pct' => 20, 'color' => '#fb923c'],
];

$growthBars = [
    ['label' => 'RAALE Growth (Foundation)',             'pct' => 40, 'color' => '#a855f7'],
    ['label' => 'Centre of Excellence (Specialization)', 'pct' => 25, 'color' => '#38bdf8'],
    ['label' => 'Communication Growth',                  'pct' => 25, 'color' => '#a3e635'],
    ['label' => 'Social & Leadership Growth',            'pct' => 10, 'color' => '#f472b6'],
];
?>

<section id="skill-passport" class="relative py-28 overflow-hidden"
         style="background: linear-gradient(180deg,#0c0c18 0%,#080810 100%);">

    <!-- Grid texture -->
    <div class="absolute inset-0 pointer-events-none grid-texture" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="reveal-up text-center mb-16">
            <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full border mb-6"
                 style="background: rgba(163,230,53,.08); border-color: rgba(163,230,53,.22); color: #a3e635;">
                <span class="w-1.5 h-1.5 rounded-full" style="background: #a3e635; animation: pulse 2s ease-in-out infinite;"></span>
                <span class="text-[10px] font-inter font-bold tracking-[0.28em] uppercase">Track · Prove · Grow</span>
            </div>
            <h2 class="font-outfit font-black text-4xl lg:text-5xl text-white">Your RGU Journey, Measured.</h2>
        </div>

        <!-- Two-panel card -->
        <div class="skill-passport-card reveal-scale rounded-3xl border overflow-hidden"
             style="background: rgba(255,255,255,.03); border-color: rgba(255,255,255,.08); box-shadow: 0 32px 80px rgba(0,0,0,.4);">

            <!-- Top accent stripe (5 colors) -->
            <div class="h-1 flex" aria-hidden="true">
                <?php foreach (['#a855f7','#38bdf8','#a3e635','#f472b6','#fb923c'] as $c): ?>
                <div class="flex-1" style="background: <?= $c ?>;"></div>
                <?php endforeach; ?>
            </div>

            <!-- Panels -->
            <div class="grid lg:grid-cols-2 gap-0">

                <!-- ── Panel 1: Global Skill Passport ── -->
                <div class="p-10 lg:p-12 border-b lg:border-b-0 lg:border-r"
                     style="border-color: rgba(255,255,255,.07);">

                    <!-- Panel header -->
                    <div class="flex items-start gap-4 mb-8">
                        <div class="w-14 h-14 rounded-2xl flex items-center justify-center flex-shrink-0"
                             style="background: linear-gradient(135deg,#a855f7,#6d28d9); box-shadow: 0 8px 24px rgba(168,85,247,.35);">
                            <!-- Globe icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                                 stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="2" y1="12" x2="22" y2="12"/>
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-outfit font-black text-2xl text-white leading-tight">Global Skill Passport</h3>
                            <span class="text-lg font-black" style="color: #a855f7;">100%</span>
                        </div>
                    </div>

                    <!-- Progress bars -->
                    <div class="rounded-2xl p-5 mb-6 border space-y-4"
                         style="background: rgba(168,85,247,.06); border-color: rgba(168,85,247,.18);">
                        <?php foreach ($passportBars as $bar): ?>
                        <div>
                            <div class="flex justify-between text-[10px] font-bold font-inter mb-1.5 tracking-wider"
                                 style="color: rgba(255,255,255,.5);">
                                <span><?= htmlspecialchars($bar['label']) ?></span>
                                <span style="color: <?= $bar['color'] ?>;"><?= $bar['pct'] ?>%</span>
                            </div>
                            <div class="h-1.5 rounded-full overflow-hidden" style="background: rgba(255,255,255,.08);">
                                <div class="progress-bar" data-width="<?= $bar['pct'] ?>" style="background: <?= $bar['color'] ?>;"></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <p class="text-slate-400 text-sm font-inter leading-relaxed">
                        A living digital credential — recording every certification, internship, exposure, and milestone accumulated throughout your RGU journey.
                    </p>
                    <a href="#" class="mt-4 inline-flex items-center gap-2 text-sm font-inter font-bold" style="color: #a855f7; text-decoration: none;">
                        Learn more →
                    </a>
                </div>

                <!-- ── Panel 2: Growth Card ── -->
                <div class="p-10 lg:p-12">

                    <!-- Panel header -->
                    <div class="flex items-start gap-4 mb-8">
                        <div class="w-14 h-14 rounded-2xl flex items-center justify-center flex-shrink-0"
                             style="background: linear-gradient(135deg,#a3e635,#16a34a); box-shadow: 0 8px 24px rgba(163,230,53,.30);">
                            <!-- BarChart icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none"
                                 stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <line x1="18" y1="20" x2="18" y2="10"/>
                                <line x1="12" y1="20" x2="12" y2="4"/>
                                <line x1="6"  y1="20" x2="6"  y2="14"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-outfit font-black text-2xl text-white leading-tight">Growth Card</h3>
                            <span class="text-lg font-black" style="color: #a3e635;">100%</span>
                        </div>
                    </div>

                    <!-- Growth progress bars -->
                    <div class="rounded-2xl p-5 mb-6 border space-y-4"
                         style="background: rgba(163,230,53,.05); border-color: rgba(163,230,53,.18);">

                        <!-- Live indicator row -->
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-[10px] font-bold tracking-[0.2em] uppercase font-inter" style="color: #a3e635;">Metrics Tracking</span>
                            <div class="w-2 h-2 rounded-full" style="background: #a3e635; animation: pulse 2s ease-in-out infinite;"></div>
                        </div>

                        <?php foreach ($growthBars as $bar): ?>
                        <div>
                            <div class="flex justify-between text-[10px] font-bold font-inter mb-1.5">
                                <span class="text-slate-400"><?= htmlspecialchars($bar['label']) ?></span>
                                <span style="color: <?= $bar['color'] ?>;"><?= $bar['pct'] ?>%</span>
                            </div>
                            <div class="h-2 rounded-full overflow-hidden" style="background: rgba(255,255,255,.08);">
                                <div class="progress-bar" data-width="<?= $bar['pct'] ?>" style="background: <?= $bar['color'] ?>;"></div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <p class="text-slate-400 text-sm font-inter leading-relaxed">
                        Your personal progress tracker — a semester-by-semester snapshot measuring how far you've come and where you're headed.
                    </p>
                    <a href="#" class="mt-4 inline-flex items-center gap-2 text-sm font-inter font-bold" style="color: #a3e635; text-decoration: none;">
                        Explore Metrics →
                    </a>
                </div>
            </div>

            <!-- Bottom bar -->
            <div class="px-10 lg:px-12 py-5 flex items-center justify-between border-t"
                 style="background: rgba(255,255,255,.02); border-color: rgba(255,255,255,.06);">
                <p class="text-slate-500 text-xs font-inter">Together, the Skill Passport and Growth Card form your complete RGU transformation record.</p>
                <div class="flex gap-2" aria-hidden="true">
                    <?php foreach (['#a855f7','#38bdf8','#a3e635'] as $c): ?>
                    <div class="w-2 h-2 rounded-full" style="background: <?= $c ?>;"></div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</section>
