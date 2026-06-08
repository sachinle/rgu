<!-- ═══════════════════════════════════════════════════════
     FILE: partials/projected-outcomes.php
     ═══════════════════════════════════════════════════════ -->

<?php
$outcomes = [
    [
        'icon'      => '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.06-7.44 7-7.93v15.86zm2 0V4.07c3.94.49 7 3.85 7 7.93s-3.06 7.44-7 7.93z"/>',
        'title'     => 'Globally Ready',
        'stat'      => '40+',
        'statLabel' => 'Global Partners',
        'desc'      => 'International certifications, global immersion, and cross-cultural skills to thrive anywhere.',
        'color'     => '#a855f7',
        'border'    => 'rgba(168,85,247,.3)',
        'bg'        => 'rgba(168,85,247,.08)',
    ],
    [
        'icon'      => '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
        'title'     => 'Career Ready',
        'stat'      => '95%',
        'statLabel' => 'Placement Rate',
        'desc'      => 'Multiple internship experiences, industry connections, and job-ready skills from semester one.',
        'color'     => '#38bdf8',
        'border'    => 'rgba(56,189,248,.3)',
        'bg'        => 'rgba(56,189,248,.08)',
    ],
    [
        'icon'      => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
        'title'     => 'Practical & Confident',
        'stat'      => '6+',
        'statLabel' => 'Real Projects/Yr',
        'desc'      => 'Field visits, hands-on projects, and live environments — so students perform, not just know.',
        'color'     => '#a3e635',
        'border'    => 'rgba(163,230,53,.3)',
        'bg'        => 'rgba(163,230,53,.08)',
    ],
    [
        'icon'      => '<path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.3"/>',
        'title'     => 'Leadership Oriented',
        'stat'      => '2×',
        'statLabel' => 'Leadership Tracks',
        'desc'      => 'Outbound leadership programmes and cross-functional challenges building executive presence.',
        'color'     => '#f472b6',
        'border'    => 'rgba(244,114,182,.3)',
        'bg'        => 'rgba(244,114,182,.08)',
    ],
    [
        'icon'      => '<path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5S18.33 12 17.5 12z"/>',
        'title'     => 'Future Ready',
        'stat'      => '∞',
        'statLabel' => 'Possibilities',
        'desc'      => 'Adaptable, resilient, and prepared for careers that don\'t yet exist — that\'s the RGU promise.',
        'color'     => '#fb923c',
        'border'    => 'rgba(251,146,60,.3)',
        'bg'        => 'rgba(251,146,60,.08)',
    ],
];
?>

<section id="outcomes" class="relative py-32 overflow-hidden"
         style="background: linear-gradient(180deg,#0f0f1e 0%,#080810 100%);">

    <!-- Background glows -->
    <div class="absolute w-[600px] h-[600px] rounded-full pointer-events-none"
         style="background: radial-gradient(circle,rgba(56,189,248,.06) 0%,transparent 70%); top: -15%; right: -8%; filter: blur(70px);"
         aria-hidden="true"></div>
    <div class="absolute w-[500px] h-[500px] rounded-full pointer-events-none"
         style="background: radial-gradient(circle,rgba(163,230,53,.05) 0%,transparent 70%); bottom: -10%; left: -5%; filter: blur(70px);"
         aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="reveal-up text-center mb-20">
            <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full border mb-8"
                 style="background: rgba(56,189,248,.08); border-color: rgba(56,189,248,.22); color: #38bdf8;">
                <span class="w-1.5 h-1.5 rounded-full" style="background: #38bdf8; animation: pulse 2s ease-in-out infinite;"></span>
                <span class="text-[10px] font-inter font-bold tracking-[0.28em] uppercase">Transformation Agenda</span>
            </div>
            <h2 class="font-outfit font-black text-5xl lg:text-7xl text-white leading-tight mb-6 tracking-tighter">
                Projected&nbsp;
                <span style="background: linear-gradient(90deg,#a3e635,#38bdf8); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Outcomes
                </span>
            </h2>
            <p class="text-slate-400 text-lg lg:text-xl max-w-3xl mx-auto leading-relaxed font-inter">
                The RGU Way doesn't just prepare you for a job — it prepares you for a life of
                <span class="text-white font-semibold">impact, leadership</span>, and global significance.
            </p>
        </div>

        <!-- Outcome Cards -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 mb-12">
            <?php foreach ($outcomes as $i => $o): ?>
            <div class="reveal-up delay-<?= $i * 100 ?> group relative rounded-3xl p-8 border overflow-hidden cursor-default transition-all duration-700 hover:scale-[1.02] hover:-translate-y-1 outcome-card"
                 style="background: <?= $o['bg'] ?>; border-color: <?= $o['border'] ?>; border-top: 2px solid <?= $o['color'] ?>;"
                 onmouseenter="this.querySelector('.outcome-fill').style.width='100%'; this.style.boxShadow='0 20px 60px <?= $o['color'] ?>20'; this.querySelector('.outcome-icon').style.transform='rotate(12deg) scale(1.1)';"
                 onmouseleave="this.querySelector('.outcome-fill').style.width='25%'; this.style.boxShadow='none'; this.querySelector('.outcome-icon').style.transform='none';">

                <!-- Top glow -->
                <div class="absolute top-0 left-0 right-0 h-px opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: linear-gradient(90deg,transparent,<?= $o['color'] ?>,transparent);"
                     aria-hidden="true"></div>

                <!-- Stat + icon row -->
                <div class="flex items-start justify-between mb-6">
                    <div>
                        <div class="font-outfit font-black text-4xl lg:text-5xl" style="color: <?= $o['color'] ?>;"><?= $o['stat'] ?></div>
                        <div class="text-slate-500 text-[10px] font-bold font-inter uppercase tracking-[0.2em] mt-0.5"><?= $o['statLabel'] ?></div>
                    </div>
                    <div class="outcome-icon w-12 h-12 rounded-2xl flex items-center justify-center transition-transform duration-300"
                         style="background: <?= $o['color'] ?>18; border: 1px solid <?= $o['color'] ?>30;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                             stroke="<?= $o['color'] ?>" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <?= $o['icon'] ?>
                        </svg>
                    </div>
                </div>

                <h3 class="font-outfit font-bold text-xl text-white mb-3"><?= $o['title'] ?></h3>
                <p class="text-slate-400 text-sm font-inter leading-relaxed"><?= $o['desc'] ?></p>

                <!-- Progress bar -->
                <div class="mt-6 h-0.5 rounded-full overflow-hidden" style="background: rgba(255,255,255,.07);" aria-hidden="true">
                    <div class="outcome-fill h-full rounded-full transition-all duration-500"
                         style="width: 25%; background: <?= $o['color'] ?>;"></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Summary Banner -->
        <div class="reveal-up delay-700 rounded-3xl border p-10 lg:p-14 text-center"
             style="background: rgba(255,255,255,.03); border-color: rgba(255,255,255,.08);">
            <h3 class="font-outfit font-black text-3xl lg:text-4xl text-white mb-4">
                One Journey.&nbsp;
                <span style="background: linear-gradient(90deg,#a3e635,#38bdf8); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Five Transformations.
                </span>
            </h3>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto mb-10 font-inter leading-relaxed">
                Every element of the RGU Way is designed to compound — creating a graduate comprehensively ready for the world.
            </p>
            <div class="flex flex-wrap justify-center gap-3">
                <?php foreach ($outcomes as $o): ?>
                <div class="px-5 py-2.5 rounded-2xl text-xs font-bold font-inter tracking-wide transition-all duration-300 hover:scale-105"
                     style="background: <?= $o['bg'] ?>; color: <?= $o['color'] ?>; border: 1px solid <?= $o['border'] ?>;">
                    <?= $o['title'] ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>
