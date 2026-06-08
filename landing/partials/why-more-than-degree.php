<!-- ═══════════════════════════════════════════════════════
     FILE: partials/why-more-than-degree.php
     ═══════════════════════════════════════════════════════ -->

<?php
$pillars = [
    [
        'icon'   => '<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.06-7.44 7-7.93v15.86zm2 0V4.07c3.94.49 7 3.85 7 7.93s-3.06 7.44-7 7.93z"/>',
        'title'  => 'Adapt',
        'desc'   => 'Navigate changing global landscapes with confidence and clarity.',
        'color'  => '#a855f7',
        'border' => 'rgba(168,85,247,.3)',
        'bg'     => 'rgba(168,85,247,.08)',
    ],
    [
        'icon'   => '<path d="M12 2.5L2 7l10 5 10-5-10-4.5zM2 17l10 5 10-5M2 12l10 5 10-5"/>',
        'title'  => 'Lead',
        'desc'   => 'Step into leadership roles from your very first semester.',
        'color'  => '#38bdf8',
        'border' => 'rgba(56,189,248,.3)',
        'bg'     => 'rgba(56,189,248,.08)',
    ],
    [
        'icon'   => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>',
        'title'  => 'Communicate',
        'desc'   => 'Articulate ideas across cultures, languages, and contexts.',
        'color'  => '#a3e635',
        'border' => 'rgba(163,230,53,.3)',
        'bg'     => 'rgba(163,230,53,.08)',
    ],
    [
        'icon'   => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
        'title'  => 'Perform',
        'desc'   => 'Deliver results in real-world environments and high-pressure situations.',
        'color'  => '#f472b6',
        'border' => 'rgba(244,114,182,.3)',
        'bg'     => 'rgba(244,114,182,.08)',
    ],
];
?>

<section id="why" class="relative py-28 overflow-hidden" style="background: #080810;">

    <!-- Background glow blobs -->
    <div class="absolute w-[400px] h-[400px] rounded-full pointer-events-none"
         style="background: radial-gradient(circle,rgba(56,189,248,.06) 0%,transparent 70%); bottom: 0; right: 0; filter: blur(60px);"
         aria-hidden="true"></div>

    <!-- Grid texture overlay -->
    <div class="absolute inset-0 pointer-events-none grid-texture" aria-hidden="true"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="reveal-up text-center mb-20">
            <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full border mb-6"
                 style="background: rgba(168,85,247,.08); border-color: rgba(168,85,247,.22); color: #a855f7;">
                <span class="w-1.5 h-1.5 rounded-full" style="background: #a855f7;"></span>
                <span class="text-[10px] font-inter font-bold tracking-[0.28em] uppercase">The Question</span>
            </div>
            <h2 class="font-outfit font-black text-4xl lg:text-6xl text-white leading-tight mb-6">
                Why do students need&nbsp;
                <span style="background: linear-gradient(90deg,#a855f7,#f472b6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    more than just a degree?
                </span>
            </h2>
            <p class="text-slate-400 text-xl max-w-3xl mx-auto leading-relaxed font-inter">
                The future belongs to students who can
                <span class="text-white font-semibold">adapt, lead, communicate,</span> and
                <span class="text-white font-semibold">perform</span> in real environments.
                RGU Way is built to develop exactly that.
            </p>
        </div>

        <!-- Pillar Cards Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5 mb-20">
            <?php foreach ($pillars as $i => $p): ?>
            <div class="reveal-up delay-<?= $i * 120 ?> group rounded-3xl p-8 text-center border transition-all duration-700 hover:scale-[1.03] hover:-translate-y-1 cursor-default card-hover"
                 style="background: <?= $p['bg'] ?>; border-color: <?= $p['border'] ?>; border-top: 2px solid <?= $p['color'] ?>;"
                 onmouseenter="this.style.boxShadow='0 20px 60px <?= $p['color'] ?>20'"
                 onmouseleave="this.style.boxShadow='none'">

                <!-- Icon -->
                <div class="w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-5 transition-transform duration-300 group-hover:scale-110"
                     style="background: <?= $p['color'] ?>18; border: 1px solid <?= $p['color'] ?>30;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                         stroke="<?= $p['color'] ?>" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <?= $p['icon'] ?>
                    </svg>
                </div>

                <h3 class="font-outfit font-black text-2xl mb-3" style="color: <?= $p['color'] ?>;"><?= $p['title'] ?></h3>
                <p class="text-slate-400 text-sm font-inter leading-relaxed"><?= $p['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Quote Banner -->
        <div class="reveal-scale delay-500 relative rounded-3xl overflow-hidden border"
             style="background: rgba(255,255,255,.03); border-color: rgba(255,255,255,.08);">

            <!-- BG watermark text -->
            <div class="absolute inset-0 flex items-center justify-center pointer-events-none select-none" aria-hidden="true">
                <span class="font-outfit font-black leading-none text-white tracking-tighter"
                      style="font-size: clamp(80px, 18vw, 180px); opacity: 0.022;">RGU</span>
            </div>

            <!-- Top gradient border line -->
            <div class="absolute top-0 left-0 right-0 h-px"
                 style="background: linear-gradient(90deg,transparent,rgba(168,85,247,.5),rgba(56,189,248,.5),rgba(163,230,53,.5),transparent);"
                 aria-hidden="true"></div>

            <!-- Quote content -->
            <div class="relative z-10 p-10 lg:p-16 text-center">
                <blockquote class="font-outfit font-bold text-2xl lg:text-4xl leading-relaxed text-white">
                    "A degree opens the door.&nbsp;
                    <span style="background: linear-gradient(90deg,#a855f7,#38bdf8); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                        The RGU Way
                    </span>
                    &nbsp;makes you ready for what's on the other side."
                </blockquote>
                <div class="mt-6 flex items-center justify-center gap-4">
                    <div class="h-px w-16 rounded-full" style="background: linear-gradient(90deg,transparent,#a855f7);"></div>
                    <cite class="text-slate-500 text-sm font-inter tracking-widest uppercase not-italic">Rathinam Global University</cite>
                    <div class="h-px w-16 rounded-full" style="background: linear-gradient(90deg,#38bdf8,transparent);"></div>
                </div>
            </div>
        </div>

    </div>
</section>
