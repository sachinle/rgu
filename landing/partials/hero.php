<!-- ═══════════════════════════════════════════════════════
     FILE: partials/hero.php
     ═══════════════════════════════════════════════════════ -->

<section id="hero" class="relative min-h-screen flex flex-col overflow-hidden" style="background: #080810;">

    <!-- ── CINEMATIC REVEAL BARS ── -->
    <div class="cine-top"    id="cine-top"    aria-hidden="true"></div>
    <div class="cine-bottom" id="cine-bottom" aria-hidden="true"></div>

    <!-- ── BACKGROUND VIDEO ── -->
    <div class="absolute inset-0 overflow-hidden">
        <video
            id="hero-video"
            autoplay muted loop playsinline
            class="absolute w-full h-full object-cover"
            style="transform: scale(1.10); transition: transform 0.35s ease-out;"
        >
            <source src="assets/images/bgvideo.mp4" type="video/mp4" />
        </video>
    </div>

    <!-- ── CURSOR SPOTLIGHT ── -->
    <div id="hero-spotlight" class="absolute inset-0 pointer-events-none z-10"
         style="background: radial-gradient(ellipse 55vw 55vh at 50% 50%, transparent 0%, rgba(8,8,16,.58) 45%, rgba(8,8,16,.9) 75%, rgba(8,8,16,.97) 100%); transition: background 0.06s linear;">
    </div>

    <!-- ── COLOR GRADE ── -->
    <div class="absolute inset-0 pointer-events-none z-10"
         style="background: linear-gradient(135deg, rgba(102,0,102,.38) 0%, rgba(0,0,0,0) 45%, rgba(0,60,120,.30) 100%);"
         aria-hidden="true"></div>

    <!-- ── SCAN LINE ── -->
    <div class="scan-line" aria-hidden="true"></div>

    <!-- ── FILM GRAIN ── -->
    <div class="absolute inset-0 pointer-events-none z-10 opacity-[0.032]"
         style="background-image: url(&quot;data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E&quot;);"
         aria-hidden="true"></div>

    <!-- ── MAIN CONTENT ── -->
    <div class="relative z-30 flex-1 flex flex-col justify-center max-w-7xl mx-auto w-full px-6 pt-28 pb-6">
        <div class="grid lg:grid-cols-12 gap-10 xl:gap-16 items-center">

            <!-- LEFT – Headline column -->
            <div class="lg:col-span-7 space-y-7">

                <!-- Eyebrow pill -->
                <div class="hero-fade-up-1 inline-flex items-center gap-2.5 px-4 py-2 rounded-full border border-white/[0.14] backdrop-blur-md"
                     style="background: rgba(255,255,255,0.06);">
                    <span class="w-1.5 h-1.5 rounded-full" style="background: #a3e635; animation: pulse 2s ease-in-out infinite;"></span>
                    <span class="text-[10px] font-inter font-bold tracking-[0.28em] uppercase text-white/60">
                        Deemed to be University · Tamil Nadu
                    </span>
                </div>

                <!-- H1 -->
                <h1 class="hero-fade-up-2 font-outfit font-black leading-[1.1] md:leading-[0.9]">
                    <span class="block text-[clamp(1.8rem,6.2vw,5.4rem)] mb-1"
                          style="-webkit-text-stroke: 1px rgba(255,255,255,.26); color: transparent; letter-spacing: -0.03em;">
                        Where Students
                    </span>
                    <span class="block text-[clamp(2.2rem,7.8vw,7rem)] text-white hero-glow-pulse"
                          style="letter-spacing: -0.04em;">
                        Transform
                    </span>
                    <span class="block text-[clamp(1.8rem,5.8vw,5.2rem)] mt-1"
                          style="background: linear-gradient(90deg,#a3e635 0%,#34d399 45%,#38bdf8 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; letter-spacing: -0.03em;">
                        Into Leaders.
                    </span>
                </h1>

                <!-- Subheading -->
                <p class="hero-fade-up-3 text-white/55 text-lg font-inter leading-relaxed max-w-lg">
                    Rathinam Global University's signature model — every semester
                    adds <span class="text-white font-semibold">measurable, stacked value</span>.
                    Not just a degree. A full transformation.
                </p>

                <!-- CTA Buttons -->
                <div class="hero-fade-up-4 flex flex-wrap gap-4">
                    <a href="#rgu-way"
                       class="group relative px-8 py-4 rounded-2xl font-outfit font-bold text-base text-white overflow-hidden inline-flex items-center gap-2 transition-all duration-300"
                       style="background: linear-gradient(135deg,#660066,#8800aa); box-shadow: 0 8px 32px rgba(102,0,102,.45); text-decoration: none;">
                        Explore the RGU Way
                        <span class="group-hover:translate-x-1 transition-transform duration-300" aria-hidden="true">→</span>
                    </a>
                    <a href="#apply"
                       class="group px-8 py-4 rounded-2xl font-outfit font-bold text-base border text-white backdrop-blur-md hover:bg-white/10 transition-all duration-300 inline-flex items-center gap-2"
                       style="border-color: rgba(255,255,255,.22); text-decoration: none;">
                        Apply Now
                        <span class="group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform duration-300" aria-hidden="true">↗</span>
                    </a>
                </div>

                <!-- Floating Tags -->
                <div class="hero-fade-up-5 flex flex-wrap gap-2.5">
                    <span class="tag-float-0 text-[11px] font-inter font-bold px-3.5 py-1.5 rounded-full"
                          style="background: rgba(163,230,53,.12); color: #a3e635; border: 1px solid rgba(163,230,53,.35);">
                        ✦ Global Readiness
                    </span>
                    <span class="tag-float-1 text-[11px] font-inter font-bold px-3.5 py-1.5 rounded-full"
                          style="background: rgba(56,189,248,.12); color: #38bdf8; border: 1px solid rgba(56,189,248,.35);">
                        ✦ Career Readiness
                    </span>
                    <span class="tag-float-2 text-[11px] font-inter font-bold px-3.5 py-1.5 rounded-full"
                          style="background: rgba(232,121,249,.12); color: #e879f9; border: 1px solid rgba(232,121,249,.35);">
                        ✦ Future Readiness
                    </span>
                </div>
            </div>

            <!-- RIGHT – Glass stats card -->
            <div class="lg:col-span-5 hero-fade-r">
                <div class="rounded-3xl p-7 xl:p-8 space-y-6"
                     style="background: rgba(255,255,255,.05); backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px); border: 1px solid rgba(255,255,255,.10); box-shadow: 0 32px 80px rgba(0,0,0,.5), inset 0 1px 0 rgba(255,255,255,.09);">

                    <!-- Logo inside card -->
                    <div class="rounded-2xl p-3 overflow-hidden" style="background: rgba(255,255,255,.96);">
                        <img src="assets/images/logo.png" alt="RGU Logo" class="w-full h-14 object-contain" />
                    </div>

                    <!-- Formula row -->
                    <div>
                        <p class="text-white/40 text-[10px] font-bold tracking-[0.28em] uppercase mb-3 font-inter">The RGU Formula</p>
                        <div class="flex items-center flex-wrap gap-2">
                            <span class="text-[11px] font-inter font-bold px-3 py-1.5 rounded-full" style="color: #a3e635; background: rgba(163,230,53,.13); border: 1px solid rgba(163,230,53,.30);">Global</span>
                            <span class="text-sm font-bold font-outfit" style="color: rgba(255,255,255,.25);">+</span>
                            <span class="text-[11px] font-inter font-bold px-3 py-1.5 rounded-full" style="color: #38bdf8; background: rgba(56,189,248,.13); border: 1px solid rgba(56,189,248,.30);">Career</span>
                            <span class="text-sm font-bold font-outfit" style="color: rgba(255,255,255,.25);">+</span>
                            <span class="text-[11px] font-inter font-bold px-3 py-1.5 rounded-full" style="color: #e879f9; background: rgba(232,121,249,.13); border: 1px solid rgba(232,121,249,.30);">Future</span>
                            <span class="text-sm font-bold font-outfit" style="color: rgba(255,255,255,.25);">=</span>
                            <span class="text-[11px] font-inter font-bold px-3 py-1.5 rounded-full" style="color: #ffffff; background: rgba(255,255,255,.10); border: 1px solid rgba(255,255,255,.30);">RGU Way</span>
                        </div>
                    </div>

                    <div class="h-px" style="background: rgba(255,255,255,.07);"></div>

                    <!-- Stats grid -->
                    <div class="grid grid-cols-2 gap-3">
                        <div class="text-center p-4 rounded-2xl flex flex-col items-center"
                             style="background: rgba(255,255,255,.04); border: 1px solid rgba(255,255,255,.07);">
                            <span class="hero-counter text-3xl xl:text-4xl font-black font-outfit tabular-nums" data-target="6" data-suffix="" style="color: #a3e635;">0</span>
                            <p class="text-white/45 text-[11px] mt-1.5 font-inter leading-snug">Global Certifications</p>
                        </div>
                        <div class="text-center p-4 rounded-2xl flex flex-col items-center"
                             style="background: rgba(255,255,255,.04); border: 1px solid rgba(255,255,255,.07);">
                            <span class="hero-counter text-3xl xl:text-4xl font-black font-outfit tabular-nums" data-target="2" data-suffix="" style="color: #38bdf8;">0</span>
                            <p class="text-white/45 text-[11px] mt-1.5 font-inter leading-snug">Internships / Year</p>
                        </div>
                        <div class="text-center p-4 rounded-2xl flex flex-col items-center"
                             style="background: rgba(255,255,255,.04); border: 1px solid rgba(255,255,255,.07);">
                            <span class="hero-counter text-3xl xl:text-4xl font-black font-outfit tabular-nums" data-target="100" data-suffix="%" style="color: #a3e635;">0</span>
                            <p class="text-white/45 text-[11px] mt-1.5 font-inter leading-snug">Career Readiness</p>
                        </div>
                        <div class="text-center p-4 rounded-2xl flex flex-col items-center"
                             style="background: rgba(255,255,255,.04); border: 1px solid rgba(255,255,255,.07);">
                            <span class="hero-counter text-3xl xl:text-4xl font-black font-outfit tabular-nums" data-target="40" data-suffix="+" style="color: #e879f9;">0</span>
                            <p class="text-white/45 text-[11px] mt-1.5 font-inter leading-snug">Global Partners</p>
                        </div>
                    </div>

                    <!-- CTA inside card -->
                    <a href="#apply"
                       class="block w-full text-center py-3.5 rounded-2xl font-outfit font-bold text-sm text-black transition-all duration-300 hover:brightness-110 hover:scale-[1.02]"
                       style="background: linear-gradient(90deg,#a3e635,#34d399); box-shadow: 0 8px 24px rgba(163,230,53,.30); text-decoration: none;">
                        Start Your Transformation →
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- ── SCROLLING TICKER ── -->
    <div class="relative z-30 border-t overflow-hidden"
         style="border-color: rgba(255,255,255,.07); background: rgba(0,0,0,.55); backdrop-filter: blur(16px);">
        <div class="ticker-track flex py-3" aria-hidden="true">
            <!-- Two copies for seamless loop -->
            <?php
            $tickerItems = [
                '🎓  6 Global Certifications',
                '💼  2 Internships Per Year',
                '🌍  40+ Global Partners',
                '✨  100% Career Readiness',
                '🚀  The RGU Way',
                '🏆  Deemed to be University',
            ];
            // Render two full sets for continuous scroll
            for ($loop = 0; $loop < 2; $loop++) {
                foreach ($tickerItems as $item) {
                    echo '<span class="inline-flex items-center gap-2 text-white/40 text-xs font-bold uppercase tracking-[0.18em] mx-8 font-inter whitespace-nowrap">';
                    echo htmlspecialchars($item);
                    echo '<span style="color: rgba(163,230,53,.45);">◆</span>';
                    echo '</span>';
                }
            }
            ?>
        </div>
    </div>

    <!-- ── SCROLL INDICATOR ── -->
    <div class="absolute bottom-20 left-1/2 -translate-x-1/2 z-30 flex flex-col items-center gap-2" aria-hidden="true">
        <span class="text-white/25 text-[10px] font-inter tracking-[0.3em] uppercase">Scroll</span>
        <div class="relative w-5 h-9 rounded-full flex justify-center items-start pt-2"
             style="border: 1px solid rgba(255,255,255,.18);">
            <div class="scroll-dot w-1 h-2.5 rounded-full" style="background: #a3e635;"></div>
        </div>
    </div>

</section>
