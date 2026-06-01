<!-- ═══════════════════════════════════════════════════════
     FILE: partials/core-brand-promise.php
     ═══════════════════════════════════════════════════════ -->

<?php
$cards = [
    [
        'icon'   => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>',
        'title'  => 'Global Certification',
        'sub'    => 'Every Semester',
        'desc'   => 'Students earn internationally recognised certifications each semester, building a verified global profile from Day 1.',
        'color'  => '#a855f7',
        'border' => 'rgba(168,85,247,.25)',
        'bg'     => 'rgba(168,85,247,.07)',
        'delay'  => 0,
    ],
    [
        'icon'   => '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
        'title'  => 'Internship',
        'sub'    => 'Every Semester',
        'desc'   => 'Real-world work experience every semester — not just once. Students graduate with a rich, practice-based portfolio.',
        'color'  => '#38bdf8',
        'border' => 'rgba(56,189,248,.25)',
        'bg'     => 'rgba(56,189,248,.07)',
        'delay'  => 80,
    ],
    [
        'icon'   => '<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>',
        'title'  => 'Outbound Leadership',
        'sub'    => 'Every Year',
        'desc'   => 'Annual leadership programmes outside the campus — building resilience, teamwork, and executive presence.',
        'color'  => '#a3e635',
        'border' => 'rgba(163,230,53,.25)',
        'bg'     => 'rgba(163,230,53,.07)',
        'delay'  => 160,
    ],
    [
        'icon'   => '<circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>',
        'title'  => 'Field Exposure',
        'sub'    => 'Every Year',
        'desc'   => 'Industry visits, live projects, and on-ground learning experiences that connect classroom knowledge to the real world.',
        'color'  => '#f472b6',
        'border' => 'rgba(244,114,182,.25)',
        'bg'     => 'rgba(244,114,182,.07)',
        'delay'  => 240,
    ],
    [
        'icon'   => '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>',
        'title'  => 'Global Immersion',
        'sub'    => 'Programme',
        'desc'   => 'An international immersive experience exposing students to global campuses, cultures, and careers.',
        'color'  => '#fb923c',
        'border' => 'rgba(251,146,60,.25)',
        'bg'     => 'rgba(251,146,60,.07)',
        'delay'  => 320,
    ],
    [
        'icon'   => '<line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/>',
        'title'  => 'Measured Progress',
        'sub'    => 'Skill Passport',
        'desc'   => 'Every achievement recorded, tracked, and certified through the Global Skill Passport and personal Growth Card.',
        'color'  => '#34d399',
        'border' => 'rgba(52,211,153,.25)',
        'bg'     => 'rgba(52,211,153,.07)',
        'delay'  => 400,
    ],
];
?>

<section id="core-promise" class="relative py-32 overflow-hidden" style="background: #080810;">

    <!-- Grid texture -->
    <div class="absolute inset-0 pointer-events-none grid-texture" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="reveal-up text-center mb-20">
            <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full border mb-8"
                 style="background: rgba(163,230,53,.08); border-color: rgba(163,230,53,.22); color: #a3e635;">
                <span class="w-1.5 h-1.5 rounded-full" style="background: #a3e635; animation: pulse 2s ease-in-out infinite;"></span>
                <span class="text-[10px] font-inter font-bold tracking-[0.28em] uppercase">The RGU Way</span>
            </div>
            <h2 class="font-outfit font-black text-5xl lg:text-7xl leading-tight mb-6 tracking-tighter text-white">
                Built for&nbsp;
                <span style="background: linear-gradient(90deg,#38bdf8,#a855f7); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Global Readiness
                </span>
            </h2>
            <p class="text-slate-400 text-lg lg:text-xl max-w-3xl mx-auto leading-relaxed font-inter">
                RGU Way ensures students begin building their profile from
                <span class="text-white font-bold">semester one</span>
                — every element designed to stack, compound, and transform.
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php foreach ($cards as $card): ?>
            <div class="reveal-up delay-<?= $card['delay'] ?> group relative rounded-3xl p-7 border overflow-hidden cursor-default transition-all duration-700 hover:scale-[1.02] hover:-translate-y-1"
                 style="background: <?= $card['bg'] ?>; border-color: <?= $card['border'] ?>;"
                 onmouseenter="this.style.boxShadow='0 20px 60px <?= $card['color'] ?>20'"
                 onmouseleave="this.style.boxShadow='none'">

                <!-- Top edge glow (visible on hover via CSS group) -->
                <div class="absolute top-0 left-0 right-0 h-px opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: linear-gradient(90deg,transparent,<?= $card['color'] ?>,transparent);"
                     aria-hidden="true"></div>

                <!-- Icon box -->
                <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-5"
                     style="background: <?= $card['color'] ?>18; border: 1px solid <?= $card['color'] ?>30;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                         stroke="<?= $card['color'] ?>" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         aria-hidden="true">
                        <?= $card['icon'] ?>
                    </svg>
                </div>

                <!-- Text -->
                <h3 class="font-outfit font-bold text-xl text-white mb-1"><?= $card['title'] ?></h3>
                <p class="text-[11px] font-inter font-bold uppercase tracking-wider mb-4" style="color: <?= $card['color'] ?>;"><?= $card['sub'] ?></p>
                <p class="text-slate-400 text-sm font-inter leading-relaxed"><?= $card['desc'] ?></p>

                <!-- Bottom accent bar -->
                <div class="absolute bottom-0 left-0 right-0 h-0.5 scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"
                     style="background: linear-gradient(90deg,<?= $card['color'] ?>,transparent);"
                     aria-hidden="true"></div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
