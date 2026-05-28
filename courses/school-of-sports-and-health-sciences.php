<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="../">
    <link rel="icon" type="image/png" href="./assets/images/favicon.png">
    <title>School of Sports & Health Sciences | RGU</title>
    <style>body{margin:0!important;padding:0!important}</style>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        body  { font-family: 'Sora', sans-serif; background: #f8fafc; }
        html, body { overflow-x: hidden; max-width: 100%; }
        .hero-grid-bg {
            background-image: linear-gradient(rgba(255,255,255,0.04) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(255,255,255,0.04) 1px, transparent 1px);
            background-size: 56px 56px;
        }
        .prog-card:hover .prog-number {
            background: linear-gradient(135deg, #a21caf, #7c3aed);
            color: #fff;
            border-color: transparent;
        }
        @keyframes fade-up {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-up   { animation: fade-up 0.7s ease both; }
        .delay-100 { animation-delay: .10s; }
        .delay-200 { animation-delay: .22s; }
    </style>
</head>
<body>

<!-- ════════════════════════════════════════
     STICKY NAVBAR
════════════════════════════════════════ -->
<nav class="sticky top-0 z-50 bg-white/85 backdrop-blur-xl border-b border-black/5 shadow-sm overflow-hidden">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 min-w-0">

            <a href="./index.php" class="flex-shrink-0 min-w-0">
                <img src="./assets/images/logo.webp" alt="RGU Logo" class="h-9 w-auto max-w-[240px] sm:max-w-none object-contain object-left">
            </a>

            <!-- Desktop links -->
            <div class="hidden md:flex items-center gap-7">
                <a href="./index.php"           class="text-sm font-medium text-slate-600 hover:text-fuchsia-700 transition">Home</a>
                <a href="./index.php#courses"   class="text-sm font-medium text-slate-600 hover:text-fuchsia-700 transition">Schools</a>
                <a href="#programmes"           class="text-sm font-medium text-slate-600 hover:text-fuchsia-700 transition">Programmes</a>
                <a href="#careers"              class="text-sm font-medium text-slate-600 hover:text-fuchsia-700 transition">Careers</a>
                <a href="https://admissions.rathinamcollege.edu.in/?utm_source=school-page&utm_medium=navbar&utm_campaign=sports-health"
                   target="_blank"
                   class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-fuchsia-500 to-purple-500 px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-fuchsia-500/25 hover:scale-105 transition-transform">
                    Apply Now &#x2192;
                </a>
            </div>

            <!-- Hamburger -->
            <button id="mob-btn" class="md:hidden p-2 rounded-xl border border-black/10 text-slate-600" aria-label="Menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile dropdown -->
        <div id="mob-menu" class="md:hidden hidden pb-4 space-y-1 border-t border-black/5 mt-1 pt-3">
            <a href="./index.php"          class="block px-3 py-2.5 text-sm font-medium text-slate-600 rounded-xl hover:bg-fuchsia-50">Home</a>
            <a href="./index.php#courses"  class="block px-3 py-2.5 text-sm font-medium text-slate-600 rounded-xl hover:bg-fuchsia-50">Schools</a>
            <a href="#programmes"          class="block px-3 py-2.5 text-sm font-medium text-slate-600 rounded-xl hover:bg-fuchsia-50">Programmes</a>
            <a href="#careers"             class="block px-3 py-2.5 text-sm font-medium text-slate-600 rounded-xl hover:bg-fuchsia-50">Careers</a>
            <a href="https://admissions.rathinamcollege.edu.in/" target="_blank"
               class="block px-3 py-2.5 text-sm font-bold text-white bg-gradient-to-r from-fuchsia-500 to-purple-500 rounded-xl text-center mt-2">
                Apply Now
            </a>
        </div>
    </div>
</nav>


<!-- ════════════════════════════════════════
     HERO
════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#080810] min-h-[90vh] flex items-center">

    <!-- Glow blobs -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-24 -left-24 w-[540px] h-[540px] rounded-full bg-fuchsia-700/25 blur-[140px]"></div>
        <div class="absolute -bottom-20 -right-10 w-[420px] h-[420px] rounded-full bg-purple-600/20 blur-[110px]"></div>
        <div class="absolute top-1/2 right-1/3 w-[260px] h-[260px] rounded-full bg-pink-600/10 blur-[80px]"></div>
    </div>
    <div class="absolute inset-0 hero-grid-bg pointer-events-none"></div>
    <div class="absolute top-0 inset-x-0 h-[2px] bg-gradient-to-r from-fuchsia-500 via-purple-500 to-violet-400"></div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-24">
        <div class="grid lg:grid-cols-2 gap-14 items-center">

            <!-- Left content -->
            <div class="fade-up">
                <div class="inline-flex items-center gap-2 rounded-full border border-fuchsia-500/30 bg-fuchsia-500/10 px-4 py-1.5 mb-6">
                    <span class="h-1.5 w-1.5 rounded-full bg-fuchsia-400 animate-pulse"></span>
                    <span class="text-[11px] font-semibold uppercase tracking-widest text-fuchsia-300">School of</span>
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-[3.3rem] font-black text-white leading-[1.1] tracking-tight mb-6">
                    Sports &amp; Health<br>
                    <span style="background:linear-gradient(100deg,#e879f9 0%,#c026d3 50%,#a78bfa 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">
                        Sciences
                    </span>
                </h1>

                <p class="text-base sm:text-lg leading-8 text-white/50 mb-9 max-w-lg">
                    Explore the science of the human mind and body. From sports performance to clinical psychology, our programmes build compassionate, evidence-based practitioners for tomorrow's healthcare.
                </p>

                <!-- Stats row -->
                <div class="mb-10 grid grid-cols-2 gap-x-8 gap-y-6 w-fit">
                    <div>
                        <p class="text-3xl font-black text-white">4</p>
                        <p class="text-[11px] font-semibold uppercase tracking-widest text-white/35 mt-0.5">Programmes</p>
                    </div>
                    <div class="pl-7 border-l border-white/10">
                        <p class="text-lg font-black text-white leading-tight">AI-Focused</p>
                        <p class="text-[11px] font-semibold uppercase tracking-widest text-white/35 mt-0.5">Specializations</p>
                    </div>
                    <div>
                        <p class="text-3xl font-black text-white">100%</p>
                        <p class="text-[11px] font-semibold uppercase tracking-widest text-white/35 mt-0.5">Placement Support</p>
                    </div>
                    <div class="pl-7 border-l border-white/10">
                        <p class="text-lg font-black text-white leading-tight">Industry</p>
                        <p class="text-[11px] font-semibold uppercase tracking-widest text-white/35 mt-0.5">Tie-ups</p>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex flex-wrap gap-4">
                    <a href="#programmes"
                       class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-fuchsia-500 to-purple-500 px-7 py-3.5 text-sm font-bold text-white shadow-[0_8px_32px_rgba(217,70,239,0.4)] hover:scale-105 transition-transform">
                        Explore Programmes &#x2192;
                    </a>
                    <a href="https://admissions.rathinamcollege.edu.in/" target="_blank"
                       class="inline-flex items-center gap-2 rounded-xl border border-white/20 bg-white/5 px-7 py-3.5 text-sm font-bold text-white/75 hover:bg-white/10 transition">
                        Apply Now
                    </a>
                </div>
            </div>

            <!-- Right: image -->
            <div class="relative hidden lg:block fade-up delay-200">
                <div class="rounded-3xl overflow-hidden border border-white/10 shadow-2xl h-[440px]">
                    <img src="./assets/images/life/03.jpg" alt="Campus" class="w-full h-full object-cover opacity-55">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#080810]/80 via-[#080810]/10 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <p class="text-xs font-semibold uppercase tracking-widest text-white/40 mb-1">RGU Campus</p>
                        <p class="text-sm font-bold text-white leading-snug">Psychology &amp; Sports Science Labs — purpose-built for hands-on clinical practice.</p>
                    </div>
                </div>
                <div class="absolute -top-5 -left-5 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl px-4 py-2.5 text-white text-sm font-semibold shadow-xl">
                    &#x1F9E0; Mind-Body Science
                </div>
                <div class="absolute -bottom-5 -right-5 bg-fuchsia-600/90 backdrop-blur-md border border-fuchsia-400/30 rounded-2xl px-4 py-2.5 text-white text-sm font-semibold shadow-xl">
                    &#x26BD; Sports Performance Lab
                </div>
            </div>

        </div>
    </div>

</section>


<!-- ════════════════════════════════════════
     SECTION 2 · SCHOOL OVERVIEW
════════════════════════════════════════ -->
<section id="overview" class="py-20 bg-[#f8fafc]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex items-center gap-2 rounded-full border border-fuchsia-700/20 bg-fuchsia-700/10 px-[18px] py-[7px] mb-5 w-max mx-auto">
            <span class="h-[6px] w-[6px] rounded-full bg-fuchsia-700 animate-pulse"></span>
            <span class="text-[11px] font-medium uppercase tracking-[0.24em] text-fuchsia-700">School Overview</span>
        </div>

        <h2 class="text-3xl md:text-5xl font-extrabold text-center text-slate-900 mb-4">About the School</h2>
        <p class="text-center text-slate-500 max-w-2xl mx-auto mb-14 leading-7">
            The School of Sports &amp; Health Sciences at RGU is dedicated to understanding human potential — physical, mental, and clinical. We train graduates who can transform lives through science-backed practice and compassionate care.
        </p>

        <!-- 3 pillars -->
        <div class="grid md:grid-cols-3 gap-6 mb-14">
            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 rounded-2xl bg-fuchsia-100 flex items-center justify-center mb-5">
                    <i data-lucide="clock" class="w-5 h-5 text-fuchsia-700"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">3-Year UG &middot; 2-Year PG</h3>
                <p class="text-sm leading-6 text-slate-500">Structured undergraduate and postgraduate programmes integrating clinical skills, sports science, and psychological research methodology.</p>
            </div>
            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 rounded-2xl bg-purple-100 flex items-center justify-center mb-5">
                    <i data-lucide="activity" class="w-5 h-5 text-purple-700"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Clinical &amp; Sports Labs</h3>
                <p class="text-sm leading-6 text-slate-500">Fully equipped psychology counselling rooms, biomechanics labs, sports performance centres, and microbiology research facilities.</p>
            </div>
            <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 rounded-2xl bg-violet-100 flex items-center justify-center mb-5">
                    <i data-lucide="users" class="w-5 h-5 text-violet-700"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Expert Practitioners</h3>
                <p class="text-sm leading-6 text-slate-500">Faculty comprising licensed clinical psychologists, sports scientists, and biomedical researchers with extensive field experience.</p>
            </div>
        </div>

        <!-- Stats strip -->
        <div class="rounded-3xl bg-gradient-to-r from-fuchsia-500 to-purple-500 p-px">
            <div class="rounded-3xl bg-[#0d0d1a] px-8 py-10 grid grid-cols-2 sm:grid-cols-4 gap-8 text-center">
                <?php
                $highlights = [
                    ["val"=>"4+",         "label"=>"Specialisations"],
                    ["val"=>"200+",       "label"=>"Placements / Year"],
                    ["val"=>"30+",        "label"=>"Industry Partners"],
                    ["val"=>"NAAC A++",   "label"=>"Accredited University"],
                ];
                foreach($highlights as $h): ?>
                <div>
                    <p class="text-3xl lg:text-4xl font-black text-white mb-1"><?= $h['val'] ?></p>
                    <p class="text-[10px] font-semibold uppercase tracking-widest text-white/35"><?= $h['label'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════
     SECTION 3 · WHAT YOU'LL LEARN
════════════════════════════════════════ -->
<section class="py-20 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex items-center gap-2 rounded-full border border-fuchsia-500/20 bg-fuchsia-500/10 px-[18px] py-[7px] mb-5 w-max mx-auto">
            <span class="h-[6px] w-[6px] rounded-full bg-fuchsia-500 animate-pulse"></span>
            <span class="text-[11px] font-medium uppercase tracking-[0.24em] text-fuchsia-600">Curriculum Focus</span>
        </div>

        <h2 class="text-3xl md:text-5xl font-extrabold text-center text-slate-900 mb-4">What You'll Learn</h2>
        <p class="text-center text-slate-500 max-w-xl mx-auto mb-14 leading-7">
            A rigorous, evidence-based curriculum spanning psychology, sports performance, health sciences, and clinical practice.
        </p>

        <?php
        $skills = [
            ["icon"=>"brain",         "title"=>"Clinical Psychology",       "desc"=>"Psychopathology, assessment tools, CBT, counselling techniques, and ethical clinical practice.",               "bg"=>"bg-fuchsia-50",  "ibg"=>"bg-fuchsia-100",  "ic"=>"text-fuchsia-700"],
            ["icon"=>"activity",      "title"=>"Sports Science",            "desc"=>"Exercise physiology, biomechanics, sports nutrition, strength &amp; conditioning, and athletic performance.",  "bg"=>"bg-purple-50",   "ibg"=>"bg-purple-100",   "ic"=>"text-purple-700"],
            ["icon"=>"heart-pulse",   "title"=>"Health Sciences",           "desc"=>"Anatomy, physiology, public health, community medicine, and preventive healthcare strategies.",                "bg"=>"bg-violet-50",   "ibg"=>"bg-violet-100",   "ic"=>"text-violet-700"],
            ["icon"=>"microscope",    "title"=>"Microbiology",              "desc"=>"Microbial genetics, immunology, epidemiology, lab diagnostics, and global infectious disease management.",    "bg"=>"bg-pink-50",     "ibg"=>"bg-pink-100",     "ic"=>"text-pink-700"],
            ["icon"=>"shield-check",  "title"=>"Applied Psychology",        "desc"=>"Organisational behaviour, positive psychology, neuropsychology, and applied research methods.",               "bg"=>"bg-indigo-50",   "ibg"=>"bg-indigo-100",   "ic"=>"text-indigo-700"],
            ["icon"=>"flask-conical", "title"=>"Research &amp; Evidence",   "desc"=>"Quantitative &amp; qualitative methods, statistical analysis, ethical research design, and thesis writing.", "bg"=>"bg-sky-50",      "ibg"=>"bg-sky-100",      "ic"=>"text-sky-700"],
        ];
        ?>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 lg:gap-5">
            <?php foreach($skills as $s): ?>
            <div class="<?= $s['bg'] ?> rounded-2xl p-6 hover:shadow-md transition-shadow">
                <div class="w-11 h-11 <?= $s['ibg'] ?> rounded-xl flex items-center justify-center mb-4">
                    <i data-lucide="<?= $s['icon'] ?>" class="w-5 h-5 <?= $s['ic'] ?>"></i>
                </div>
                <h4 class="font-bold text-slate-900 text-sm mb-1.5"><?= $s['title'] ?></h4>
                <p class="text-xs leading-5 text-slate-500"><?= $s['desc'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════
     SECTION 4 · PROGRAMMES OFFERED
════════════════════════════════════════ -->
<section id="programmes" class="py-20 bg-[#f8fafc]">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex items-center gap-2 rounded-full border border-fuchsia-700/20 bg-fuchsia-700/10 px-[18px] py-[7px] mb-5 w-max mx-auto">
            <span class="h-[6px] w-[6px] rounded-full bg-fuchsia-700 animate-pulse"></span>
            <span class="text-[11px] font-medium uppercase tracking-[0.24em] text-fuchsia-700">4 Programmes</span>
        </div>

        <h2 class="text-3xl md:text-5xl font-extrabold text-center text-slate-900 mb-4">Programmes Offered</h2>
        <p class="text-center text-slate-500 max-w-2xl mx-auto mb-14 leading-7">
            Choose from undergraduate and postgraduate programmes designed to build expertise in sports science, psychology, and health-related disciplines.
        </p>

        <!-- B.Sc -->
        <div class="mb-10">
            <div class="flex items-center gap-3 mb-5">
                <span class="w-9 h-9 rounded-full bg-gradient-to-br from-fuchsia-500 to-purple-500 flex items-center justify-center text-white text-sm font-black shadow-lg shadow-fuchsia-500/30">1</span>
                <div>
                    <h3 class="text-lg font-extrabold text-slate-900">B.Sc Programmes</h3>
                    <p class="text-xs text-slate-400">3 Years &middot; Undergraduate &middot; Full Time</p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-4">
                <?php
                $bsc = [
                    "B.Sc Psychology",
                    "B.Sc MicroBiology with Global Industry Programme (GIP)",
                ];
                foreach($bsc as $i => $course): ?>
                <div class="prog-card bg-white border border-slate-100 rounded-2xl p-5 hover:border-fuchsia-200 hover:shadow-md transition group cursor-default">
                    <div class="flex items-start gap-3">
                        <span class="prog-number mt-0.5 w-6 h-6 rounded-full bg-fuchsia-50 border border-fuchsia-200 text-fuchsia-700 text-[10px] font-bold flex items-center justify-center flex-shrink-0 transition-all"><?= $i+1 ?></span>
                        <div>
                            <p class="text-sm font-semibold text-slate-800 leading-snug group-hover:text-fuchsia-700 transition"><?= htmlspecialchars($course) ?></p>
                            <div class="flex gap-2 mt-2 flex-wrap">
                                <span class="text-[10px] bg-fuchsia-50 text-fuchsia-600 border border-fuchsia-100 rounded-full px-2 py-0.5 font-medium">3 Years</span>
                                <span class="text-[10px] bg-slate-50 text-slate-500 border border-slate-100 rounded-full px-2 py-0.5 font-medium">Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- M.Sc -->
        <div>
            <div class="flex items-center gap-3 mb-5">
                <span class="w-9 h-9 rounded-full bg-gradient-to-br from-purple-500 to-violet-600 flex items-center justify-center text-white text-sm font-black shadow-lg shadow-purple-500/30">2</span>
                <div>
                    <h3 class="text-lg font-extrabold text-slate-900">Postgraduate Programmes</h3>
                    <p class="text-xs text-slate-400">2 Years &middot; M.Sc &middot; Full Time</p>
                </div>
            </div>
            <div class="grid sm:grid-cols-2 gap-4">
                <?php
                $msc = [
                    "M.Sc Applied Psychology",
                    "M.Sc Clinical Psychology",
                ];
                foreach($msc as $i => $course): ?>
                <div class="prog-card bg-white border border-slate-100 rounded-2xl p-5 hover:border-purple-200 hover:shadow-md transition group cursor-default">
                    <div class="flex items-start gap-3">
                        <span class="prog-number mt-0.5 w-6 h-6 rounded-full bg-purple-50 border border-purple-200 text-purple-700 text-[10px] font-bold flex items-center justify-center flex-shrink-0 transition-all"><?= $i+1 ?></span>
                        <div>
                            <p class="text-sm font-semibold text-slate-800 leading-snug group-hover:text-purple-700 transition"><?= htmlspecialchars($course) ?></p>
                            <div class="flex gap-2 mt-2 flex-wrap">
                                <span class="text-[10px] bg-purple-50 text-purple-600 border border-purple-100 rounded-full px-2 py-0.5 font-medium">2 Years</span>
                                <span class="text-[10px] bg-slate-50 text-slate-500 border border-slate-100 rounded-full px-2 py-0.5 font-medium">Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Bottom CTA -->
        <div class="mt-14 text-center">
            <a href="https://admissions.rathinamcollege.edu.in/?utm_source=school-page&utm_medium=programmes-cta&utm_campaign=sports-health"
               target="_blank"
               class="inline-flex items-center gap-2 rounded-2xl bg-gradient-to-r from-fuchsia-500 to-purple-500 px-8 py-4 text-sm font-bold text-white shadow-[0_8px_32px_rgba(217,70,239,0.35)] hover:scale-105 transition-transform">
                Apply for These Programmes &#x2192;
            </a>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════
     SECTION 5 · CAREER PATHWAYS
════════════════════════════════════════ -->
<section id="careers" class="py-20 bg-[#080810] relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-1/4    w-[400px] h-[400px] rounded-full bg-fuchsia-700/15 blur-[100px]"></div>
        <div class="absolute bottom-0 right-1/4 w-[300px] h-[300px] rounded-full bg-purple-600/10  blur-[80px]"></div>
    </div>

    <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex items-center gap-2 rounded-full border border-lime-400/20 bg-lime-400/10 px-[18px] py-[7px] mb-5 w-max mx-auto">
            <span class="h-[6px] w-[6px] rounded-full bg-lime-400 animate-pulse"></span>
            <span class="text-[11px] font-medium uppercase tracking-[0.24em] text-lime-300">After Graduation</span>
        </div>

        <h2 class="text-3xl md:text-5xl font-extrabold text-center text-white mb-4">Career Pathways</h2>
        <p class="text-center text-white/40 max-w-xl mx-auto mb-14 leading-7">
            Our graduates build rewarding careers in healthcare, sports organisations, research institutions, and mental health services.
        </p>

        <?php
        $careers = [
            ["role"=>"Clinical Psychologist",        "companies"=>"Hospitals &middot; Clinics &middot; Rehab Centres",          "emoji"=>"&#x1F9E0;"],
            ["role"=>"Sports Performance Coach",     "companies"=>"BCCI &middot; SAI &middot; International Sports Clubs",       "emoji"=>"&#x26BD;"],
            ["role"=>"Health Educator",              "companies"=>"NGOs &middot; Govt. Health Depts &middot; Corporates",        "emoji"=>"&#x1F4DA;"],
            ["role"=>"Counselling Psychologist",     "companies"=>"Schools &middot; Corporates &middot; Private Practice",       "emoji"=>"&#x1F91D;"],
            ["role"=>"Microbiologist",               "companies"=>"Pharma Labs &middot; ICMR &middot; Diagnostics",              "emoji"=>"&#x1F52C;"],
            ["role"=>"Sports Physiotherapist",       "companies"=>"Sports Teams &middot; Hospitals &middot; Wellness Centres",   "emoji"=>"&#x1F4AA;"],
            ["role"=>"HR &amp; Organisational Dev.", "companies"=>"MNCs &middot; Startups &middot; Consulting Firms",            "emoji"=>"&#x1F465;"],
            ["role"=>"Research Scientist",           "companies"=>"NIMHANS &middot; AIIMS &middot; Global Universities",         "emoji"=>"&#x1F393;"],
        ];
        ?>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <?php foreach($careers as $c): ?>
            <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:bg-white/10 hover:border-white/20 transition">
                <div class="text-2xl mb-3"><?= $c['emoji'] ?></div>
                <h4 class="text-sm font-bold text-white mb-1.5 leading-snug"><?= $c['role'] ?></h4>
                <p class="text-xs text-white/30 leading-5"><?= $c['companies'] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ════════════════════════════════════════
     FOOTER  (shared partial)
════════════════════════════════════════ -->
<?php include __DIR__ . '/../partials/footer.php'; ?>

<script>
    lucide.createIcons();

    // Mobile nav toggle
    const mobBtn  = document.getElementById('mob-btn');
    const mobMenu = document.getElementById('mob-menu');
    if (mobBtn && mobMenu) {
        mobBtn.addEventListener('click', () => mobMenu.classList.toggle('hidden'));
    }

    // Smooth scroll for on-page anchors
    document.querySelectorAll('a[href^="#"]').forEach(link => {
        link.addEventListener('click', e => {
            const target = document.querySelector(link.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                if (mobMenu) mobMenu.classList.add('hidden');
            }
        });
    });
</script>

</body>
</html>
