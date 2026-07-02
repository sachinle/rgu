<!-- ═══════════════════════════════════════════════════════
     FILE: partials/happening-at-rgu.php
     ═══════════════════════════════════════════════════════ -->

<?php
$events = [
    [
        'category' => 'Global Summit',
        'title'    => 'International Career Conclave 2025',
        'desc'     => '200+ global recruiters, students, and industry leaders for a 3-day immersive career festival.',
        'date'     => 'March 2025',
        'tag'      => 'Annual Event',
        'color'    => '#a855f7',
        'icon'     => '<circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>',
    ],
    [
        'category' => 'Leadership',
        'title'    => 'Outbound Leadership Expedition',
        'desc'     => 'Students take on real-world leadership challenges in outdoor settings — building resilience and strategic thinking.',
        'date'     => 'Every Semester',
        'tag'      => 'Ongoing',
        'color'    => '#38bdf8',
        'icon'     => '<polygon points="3 17 9 11 13 15 22 6"/><polyline points="14 6 22 6 22 14"/>',
    ],
    [
        'category' => 'Industry Connect',
        'title'    => 'CEO Masterclass Series',
        'desc'     => 'Exclusive sessions with C-suite executives, startup founders, and global thought leaders sharing live insights.',
        'date'     => 'Monthly',
        'tag'      => 'Regular',
        'color'    => '#a3e635',
        'icon'     => '<path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="M12 6v6l4 2"/>',
    ],
    [
        'category' => 'Cultural Fest',
        'title'    => 'Rathinam International Fest',
        'desc'     => 'A celebration of global cultures, arts, music, and sports — connecting students across nationalities.',
        'date'     => 'February 2025',
        'tag'      => 'Annual',
        'color'    => '#f472b6',
        'icon'     => '<path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16 3.95 6.06M14.31 16H2.83M16.62 12 10.88 21.94"/>',
    ],
    [
        'category' => 'Innovation',
        'title'    => 'RGU Hackathon & Startup Showcase',
        'desc'     => '48-hour hackathon where students pitch, build, and demo solutions to real industry problems with live mentorship.',
        'date'     => 'Quarterly',
        'tag'      => 'Regular',
        'color'    => '#fb923c',
        'icon'     => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
    ],
    [
        'category' => 'Global Immersion',
        'title'    => 'Study Abroad Week',
        'desc'     => 'Students travel internationally for immersive learning at partner universities — bridging cultures and careers.',
        'date'     => 'Year 3',
        'tag'      => 'Annual',
        'color'    => '#34d399',
        'icon'     => '<path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>',
    ],
];

$filters = ['All', 'Annual Event', 'Ongoing', 'Regular', 'Monthly'];
?>

<section id="happening" class="relative py-32 overflow-hidden" style="background: #080810;">

    <!-- Background glow -->
    <div class="absolute w-[500px] h-[500px] rounded-full pointer-events-none"
         style="background: radial-gradient(circle,rgba(56,189,248,.06) 0%,transparent 70%); bottom: -15%; right: -10%; filter: blur(70px);"
         aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">

        <!-- Header -->
        <div class="reveal-up grid lg:grid-cols-2 gap-12 items-end mb-14">
            <div>
                <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full border mb-6"
                     style="background: rgba(239,68,68,.1); border-color: rgba(239,68,68,.25); color: #f87171;">
                    <span class="w-1.5 h-1.5 rounded-full" style="background: #ef4444; animation: pulse 2s ease-in-out infinite;"></span>
                    <span class="text-[10px] font-inter font-bold tracking-[0.28em] uppercase">Live & Upcoming</span>
                </div>
                <h2 class="font-outfit font-black text-5xl lg:text-7xl leading-none text-white">
                    Happening&nbsp;
                    <span style="background: linear-gradient(90deg,#38bdf8,#34d399); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                        @ RGU
                    </span>
                </h2>
            </div>
            <div>
                <p class="text-slate-400 text-lg leading-relaxed font-inter mb-5">
                    From global summits to hackathons, leadership expeditions to cultural fests — the campus is always alive with opportunity.
                </p>
                <!-- Filter pills -->
                <div class="flex flex-wrap gap-2" id="event-filters" role="group" aria-label="Filter events by type">
                    <?php foreach ($filters as $f): ?>
                    <button
                        class="filter-btn <?= $f === 'All' ? 'active' : '' ?>"
                        data-filter="<?= htmlspecialchars($f) ?>"
                        aria-pressed="<?= $f === 'All' ? 'true' : 'false' ?>">
                        <?= htmlspecialchars($f) ?>
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Event Cards -->
        <div id="events-grid" class="reveal-up grid md:grid-cols-2 lg:grid-cols-3 gap-5">
            <?php foreach ($events as $ev): ?>
            <article class="event-card group rounded-3xl border p-7 relative overflow-hidden cursor-default transition-all duration-300 hover:scale-[1.02] hover:-translate-y-1"
                     data-tag="<?= htmlspecialchars($ev['tag']) ?>"
                     style="background: <?= $ev['color'] ?>07; border-color: <?= $ev['color'] ?>25;"
                     onmouseenter="this.style.boxShadow='0 20px 60px <?= $ev['color'] ?>18'"
                     onmouseleave="this.style.boxShadow='none'">

                <!-- Top edge glow -->
                <div class="absolute top-0 left-0 right-0 h-px opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                     style="background: linear-gradient(90deg,transparent,<?= $ev['color'] ?>,transparent);"
                     aria-hidden="true"></div>

                <!-- Icon + tag row -->
                <div class="flex items-start justify-between mb-5">
                    <div class="w-11 h-11 rounded-2xl flex items-center justify-center"
                         style="background: <?= $ev['color'] ?>15; border: 1px solid <?= $ev['color'] ?>30;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                             stroke="<?= $ev['color'] ?>" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <?= $ev['icon'] ?>
                        </svg>
                    </div>
                    <span class="text-[10px] font-inter font-bold px-2.5 py-1 rounded-full"
                          style="background: <?= $ev['color'] ?>15; color: <?= $ev['color'] ?>; border: 1px solid <?= $ev['color'] ?>30;">
                        <?= htmlspecialchars($ev['tag']) ?>
                    </span>
                </div>

                <!-- Meta -->
                <p class="text-[10px] font-inter font-bold uppercase tracking-wider mb-2" style="color: <?= $ev['color'] ?>;"><?= htmlspecialchars($ev['category']) ?></p>
                <h4 class="font-outfit font-bold text-white text-lg leading-tight mb-3"><?= htmlspecialchars($ev['title']) ?></h4>
                <p class="text-slate-400 text-sm font-inter leading-relaxed"><?= htmlspecialchars($ev['desc']) ?></p>

                <!-- Date row -->
                <div class="mt-5 flex items-center gap-2">
                    <div class="w-1.5 h-1.5 rounded-full" style="background: <?= $ev['color'] ?>;" aria-hidden="true"></div>
                    <span class="text-[11px] text-slate-500 font-inter font-semibold"><?= htmlspecialchars($ev['date']) ?></span>
                </div>
            </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>
