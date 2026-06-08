<!-- ═══════════════════════════════════════════════════════
     FILE: partials/life-at-rgu.php
     ═══════════════════════════════════════════════════════ -->

<?php
/* Bento grid items */
$bento = [
    [
        'icon'   => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
        'label'  => 'Campus Life',
        'sub'    => 'Modern Spaces & Community',
        'c'      => '#a855f7',
        'bg'     => 'rgba(168,85,247,.1)',
        'border' => 'rgba(168,85,247,.22)',
        'span'   => 'lg:col-span-2 lg:row-span-2',
    ],
    [
        'icon'   => '<path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18"/>',
        'label'  => 'Innovation Labs',
        'sub'    => 'World-class Infrastructure',
        'c'      => '#38bdf8',
        'bg'     => 'rgba(56,189,248,.1)',
        'border' => 'rgba(56,189,248,.22)',
        'span'   => '',
    ],
    [
        'icon'   => '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>',
        'label'  => 'Events & Fests',
        'sub'    => 'Always Happening',
        'c'      => '#a3e635',
        'bg'     => 'rgba(163,230,53,.1)',
        'border' => 'rgba(163,230,53,.22)',
        'span'   => '',
    ],
    [
        'icon'   => '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>',
        'label'  => 'Global Exchanges',
        'sub'    => 'Study Abroad',
        'c'      => '#f472b6',
        'bg'     => 'rgba(244,114,182,.1)',
        'border' => 'rgba(244,114,182,.22)',
        'span'   => '',
    ],
    [
        'icon'   => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
        'label'  => 'Sports Complex',
        'sub'    => 'Champion Mindset',
        'c'      => '#fb923c',
        'bg'     => 'rgba(251,146,60,.1)',
        'border' => 'rgba(251,146,60,.22)',
        'span'   => '',
    ],
];

/* Pill highlights */
$highlights = [
    ['icon' => '<path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/>',        'label' => 'Academic Excellence',  'c' => '#a855f7', 'bg' => 'rgba(168,85,247,.1)'  ],
    ['icon' => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',  'label' => 'Global Exposure',       'c' => '#38bdf8', 'bg' => 'rgba(56,189,248,.1)'  ],
    ['icon' => '<path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>',    'label' => 'Cultural Vibrancy',     'c' => '#a3e635', 'bg' => 'rgba(163,230,53,.1)'  ],
    ['icon' => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',      'label' => 'Sports & Fitness',      'c' => '#f472b6', 'bg' => 'rgba(244,114,182,.1)' ],
    ['icon' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>',  'label' => 'Clubs & Societies',     'c' => '#fb923c', 'bg' => 'rgba(251,146,60,.1)'  ],
    ['icon' => '<path d="M3 11l19-9-9 19-2-8-8-2z"/>',              'label' => 'Campus Living',         'c' => '#34d399', 'bg' => 'rgba(52,211,153,.1)'  ],
    ['icon' => '<path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18"/>',    'label' => 'Innovation Labs',       'c' => '#a855f7', 'bg' => 'rgba(168,85,247,.1)'  ],
    ['icon' => '<path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/>',  'label' => 'Arts & Music',          'c' => '#38bdf8', 'bg' => 'rgba(56,189,248,.1)'  ],
];
?>

<section id="life" class="relative py-32 overflow-hidden"
         style="background: linear-gradient(180deg,#0f0f1e 0%,#0c0c18 100%);">

    <!-- Background glow -->
    <div class="absolute w-[600px] h-[600px] rounded-full pointer-events-none"
         style="background: radial-gradient(circle,rgba(168,85,247,.07) 0%,transparent 70%); top: -20%; right: -10%; filter: blur(70px);"
         aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">

        <!-- Header row -->
        <div class="reveal-up grid lg:grid-cols-2 gap-12 items-end mb-16">
            <div>
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full border mb-6"
                     style="background: rgba(163,230,53,.08); border-color: rgba(163,230,53,.22); color: #a3e635;">
                    <span class="w-1.5 h-1.5 rounded-full" style="background: #a3e635; animation: pulse 2s ease-in-out infinite;"></span>
                    <span class="text-[10px] font-inter font-bold tracking-[0.28em] uppercase">The Campus Experience</span>
                </div>
                <h2 class="font-outfit font-black text-5xl lg:text-7xl leading-none text-white">
                    Life @&nbsp;
                    <span style="background: linear-gradient(90deg,#a855f7,#f472b6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                        RGU
                    </span>
                </h2>
            </div>
            <div>
                <p class="text-slate-400 text-lg leading-relaxed font-inter">
                    Life at RGU extends far beyond classrooms — a vibrant, global community where students learn, grow, explore, and lead every single day.
                </p>
                <a href="#explore-campus"
                   class="mt-5 inline-flex items-center gap-2 font-inter font-bold text-sm transition-all duration-300 hover:gap-4"
                   style="color: #a3e635; text-decoration: none;">
                    Explore Campus Life <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>

        <!-- Bento Grid -->
        <div class="reveal-up delay-200 grid grid-cols-2 lg:grid-cols-3 gap-4 mb-14">
            <?php foreach ($bento as $item): ?>
            <div class="group rounded-3xl border p-7 flex flex-col justify-end min-h-[160px] relative overflow-hidden cursor-default transition-all duration-300 hover:scale-[1.02] hover:-translate-y-1 <?= $item['span'] ?>"
                 style="background: <?= $item['bg'] ?>; border-color: <?= $item['border'] ?>;">

                <!-- Top edge glow on hover -->
                <div class="absolute top-0 left-0 right-0 h-px opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: linear-gradient(90deg,transparent,<?= $item['c'] ?>,transparent);"
                     aria-hidden="true"></div>

                <!-- Icon -->
                <div class="w-11 h-11 rounded-2xl flex items-center justify-center mb-4"
                     style="background: <?= $item['c'] ?>18; border: 1px solid <?= $item['c'] ?>30;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                         stroke="<?= $item['c'] ?>" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         aria-hidden="true">
                        <?= $item['icon'] ?>
                    </svg>
                </div>

                <h4 class="font-outfit font-bold text-white text-lg leading-tight"><?= $item['label'] ?></h4>
                <p class="text-slate-500 text-xs font-inter mt-1"><?= $item['sub'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Pill highlights row -->
        <div class="reveal-up delay-400 flex flex-wrap gap-3">
            <?php foreach ($highlights as $h): ?>
            <div class="inline-flex items-center gap-2.5 px-4 py-2.5 rounded-full border transition-all duration-300 hover:scale-105"
                 style="background: <?= $h['bg'] ?>; border-color: <?= $h['c'] ?>30; color: <?= $h['c'] ?>;">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     aria-hidden="true">
                    <?= $h['icon'] ?>
                </svg>
                <span class="text-xs font-inter font-bold"><?= $h['label'] ?></span>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>