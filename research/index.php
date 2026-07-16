<?php
$active     = 'home';
$page_title = 'Research Overview';
$page_desc  = 'Research, doctoral programmes, innovation and R&D metrics at Rathinam Global University (RGU), Coimbatore.';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/nav.php';
?>

<!-- Popup modal for site-load image -->
<!-- <div id="r-popup-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60">
  <div class="r-popup-inner max-w-[95%] max-h-[95%] p-4">
    <button id="r-popup-close" aria-label="Close popup" class="r-popup-close absolute top-3 right-3 z-60 bg-white/90 rounded-full p-2 shadow">✕</button>
    <div class="r-popup-content rounded-lg overflow-hidden max-w-3xl mx-auto">
      <img src="./assets/model.jpeg" alt="Research popup" loading="eager" decoding="async" class="r-popup-image w-full h-auto object-cover block">
    </div>
  </div>
</div> -->

<div id="r-popup-modal-2" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/60">
  <div class="r-popup-inner max-w-[90vw] max-h-[90vh] p-4">
    <button id="r-popup-close-2" aria-label="Close second popup" class="r-popup-close absolute top-3 right-3 z-60 bg-white/90 rounded-full p-2 shadow">✕</button>
    <div class="r-popup-content rounded-lg overflow-hidden max-w-full mx-auto">
      <img src="./assets/model2.jpeg" alt="Research popup 2" loading="eager" decoding="async" class="r-popup-image w-full max-h-[82vh] h-auto object-contain block">
    </div>
  </div>
</div>

<!-- ════════════════ HERO ════════════════ -->
<section class="relative overflow-hidden bg-[#080810] min-h-[92vh] flex items-center">
  <div class="r-blob bg-violet-700/30 h-[520px] w-[520px] -top-32 -left-24"></div>
  <div class="r-blob bg-sky-600/25 h-[460px] w-[460px] -bottom-28 -right-20"></div>
  <div class="r-blob bg-fuchsia-600/15 h-[280px] w-[280px] top-1/3 right-1/3"></div>
  <div class="absolute inset-0 r-hero-grid pointer-events-none"></div>
  <div class="absolute top-0 inset-x-0 h-[2px] r-grad-bg"></div>

  <div class="relative z-10 px-4 sm:px-6 lg:px-8 py-24">
    <!-- left -->
    <div class="col-span-12 r-reveal is-in text-center">
      <div class="r-eyebrow text-violet-300 mb-6 text-center">
        <span class="h-1.5 w-1.5 rounded-full bg-violet-400 animate-pulse"></span>
        Directorate of Research, Development &amp; Innovation
      </div>
      <h1 class="text-4xl sm:text-5xl lg:text-[3.6rem] font-black text-white leading-[1.06] tracking-tight text-center">
        Advancing <span class="r-grad-text">Knowledge,</span>
        Innovation &amp; Impact
      </h1>
      <p class="mt-6 text-base sm:text-lg leading-8 text-white/55 text-center">
        Rathinam Global (Deemed to be University) offers dynamic, Doctoral Programmes (Ph.D.)
        that cultivate scholarly excellence, ethical inquiry and interdisciplinary knowledge creation —
        in alignment with <strong class="text-white/80">UGC Regulations 2022</strong>,
        <strong class="text-white/80">NHEQF 2023</strong> and <strong class="text-white/80">NEP 2020</strong>.
      </p>
      <div class="mt-9 flex flex-col sm:flex-row gap-4 justify-center items-center">
        <a href="https://payment.rathinam.global/login" target="_blank" rel="noopener"
          class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-violet-600 to-sky-500 px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-violet-500/30 hover:scale-105 transition-transform">
          Apply for Ph.D. <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14M13 6l6 6-6 6" />
          </svg>
        </a>

        <a href="./assets/Final-Ph.D-Brouchure.pdf" target="_blank" rel="noopener"
           class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-lime-400 to-emerald-400 px-7 py-3.5 text-sm font-bold text-[#0a0a14] shadow-[0_8px_32px_rgba(163,230,53,0.35)] hover:scale-105 transition-transform">
          Download Brochure <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
        </a>

      </div>
      <!-- trust badges -->
      <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-3 text-white/40 text-xs font-semibold uppercase tracking-wider justify-center">
        <span>UGC 2022</span><span class="h-1 w-1 rounded-full bg-white/20"></span>
        <span>NHEQF 2023</span><span class="h-1 w-1 rounded-full bg-white/20"></span>
        <span>NEP 2020</span><span class="h-1 w-1 rounded-full bg-white/20"></span>
        <span>NAAC A++</span>
      </div>
    </div>

    <!-- right: floating metric cards -->
    <!-- <div class="lg:col-span-5 grid grid-cols-2 gap-4">
      <?php
      $hero_cards = [
        ['312', 'Scopus / WoS / SCI publications (per year)', 'from-violet-500/20 to-violet-500/5', 'book-open'],
        ['₹2.23 Cr', 'External research funding<br>(per year)', 'from-emerald-500/20 to-emerald-500/5', 'wallet'],
        ['96', 'Patents filed · 20 granted<br>(per year)', 'from-sky-500/20 to-sky-500/5', 'lightbulb'],
        ['549', 'Books & book chapters<br>(per year)', 'from-fuchsia-500/20 to-fuchsia-500/5', 'library'],
      ];
      foreach ($hero_cards as $i => $c):
      ?>
      <a href="<?php echo $c[4]; ?>" class="group rounded-2xl border border-white/10 bg-gradient-to-br <?php echo $c[2]; ?> backdrop-blur p-5 hover:border-white/25 transition <?php echo $i % 2 ? 'mt-6' : ''; ?>">
        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-white mb-4"><i data-lucide="<?php echo $c[3]; ?>" class="h-5 w-5"></i></div>
        <div class="text-3xl font-black text-white leading-none"><?php echo $c[0]; ?></div>
        <div class="mt-2 text-xs leading-5 text-white/55"><?php echo $c[1]; ?></div>
        
      </a>
      <?php endforeach; ?>
    </div> -->
  </div>
</section>

<!-- ════════════════ INTRO STRIP ════════════════ -->
<section class="bg-white border-b border-slate-100">
  <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 py-14 text-center r-reveal">
    <p class="text-lg sm:text-xl leading-9 text-slate-600">
      The University fosters a vibrant ecosystem that empowers research scholars to address contemporary
      <span class="font-semibold text-slate-900">academic, scientific, technological, industrial, environmental and societal</span>
      challenges through impactful research and innovation.
    </p>
  </div>
</section>

<!-- ════════════════ WHY Ph.D. AT RGU ════════════════ -->
<section class="bg-[#f8fafc] py-16 sm:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mb-12 r-reveal">
      <p class="r-eyebrow text-violet-700 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span> Why Pursue <span style="text-transform:none;">Ph.D.</span> at RGU</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Research excellence with global standards</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-6">
      <?php
      $why = [
        ['target', 'from-violet-600 to-violet-500', 'Original & Innovative Research', [
          'Original and innovative research',
          'Interdisciplinary &amp; multidisciplinary inquiry',
          'Research-driven problem solving',
          'Industry and societal relevance',
          'Academic integrity &amp; ethical practice',
          'Global Immersion'
        ]],
        ['network', 'from-sky-600 to-sky-500', 'Strong Innovation Ecosystem', [
          'Research Development &amp; Innovation Council (RDIC)',
          'Advanced labs &amp; Centres of Excellence',
          'Industry–academia collaboration',
          'Incubation support @ AIC-RaISE',
          'Research funding &amp; sponsored projects',
          'International exposure &amp; publication support'
        ]],
        ['graduation-cap', 'from-emerald-600 to-emerald-500', 'Outcome-Oriented Doctoral Education', [
          'Advanced research competencies',
          'Critical &amp; analytical thinking',
          'Academic writing &amp; publication skills',
          'Leadership &amp; mentoring abilities',
          'Innovation &amp; entrepreneurship mindset',
          'Global research dissemination'
        ]],
      ];
      foreach ($why as $i => $w):
      ?>
        <div class="r-card p-7 r-reveal d<?php echo $i + 1; ?>">
          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br <?php echo $w[1]; ?> text-white shadow-lg mb-5"><i data-lucide="<?php echo $w[0]; ?>" class="h-6 w-6"></i></div>
          <h3 class="text-lg font-extrabold text-slate-900 mb-4"><?php echo $w[2]; ?></h3>
          <ul class="space-y-2.5">
            <?php foreach ($w[3] as $li): ?>
              <li class="flex items-start gap-2.5 text-sm text-slate-600">
                <svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-violet-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12" />
                </svg>
                <span><?php echo $li; ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="px-4 sm:px-6 lg:px-8 py-10 sm:py-20">
  <div class="text-center max-w-2xl mx-auto r-reveal">
    <p class="r-eyebrow text-violet-300 mb-3 justify-center"><span class="h-1.5 w-1.5 rounded-full bg-violet-400"></span> Research at a Glance</p>
    <h2 class="text-3xl sm:text-4xl font-black tracking-tight">Salient Features of the Ph.D. Programme</h2>
  </div>
  <div class="grid grid-cols-10 gap-3 mt-3">
    <?php
    $highlights = [
      ['book-open', 'bg-violet-50 text-violet-700', 'Research Oriented learning Environment'],
      ['clock', 'bg-sky-50 text-sky-700', 'Full-Time, Part-Time & Integrated Ph.D.'],
      ['layers', 'bg-emerald-50 text-emerald-700', 'Interdisciplinary Research Opportunities'],
      ['user-check', 'bg-fuchsia-50 text-fuchsia-700', 'Experienced Faculty Mentors & Supervisors'],
      ['briefcase', 'bg-amber-50 text-amber-700', 'Industry-supported Research Ecosystem'],
      ['award', 'bg-rose-50 text-rose-700', 'Publication and patent support'],
      ['rocket', 'bg-cyan-50 text-cyan-700', 'Innovation and entrepreneurship exposure'],
      ['globe', 'bg-sky-50 text-sky-700', 'Global Immersion'],
      ['handshake', 'bg-lime-50 text-lime-700', 'Opportunity for collaborative and funded research'],
      ['shield-check', 'bg-indigo-50 text-indigo-700', 'Academic Flexibility aligned to facilitate start-ups'],
    ];
    foreach ($highlights as $highlight):
    ?>
      <div class="col-span-10 md:col-span-2 flex gap-3 r-card rounded-3xl border border-slate-200/60 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
        <span class="flex h-11 w-11 flex-shrink-0 items-center justify-center rounded-2xl <?php echo $highlight[1]; ?>">
          <i data-lucide="<?php echo $highlight[0]; ?>" class="h-5 w-5"></i>
        </span>
        <p class="text-xs font-medium text-slate-900 leading-6">
          <?php echo $highlight[2]; ?>
        </p>
      </div>
    <?php endforeach; ?>
  </div>

</section>

<!-- ════════════════ Research Clusters ════════════════ -->
<section class="bg-[#f8fafc] py-16 sm:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mb-12 r-reveal">
      <p class="r-eyebrow text-violet-700 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span> Future-Focused Research Ecosystems</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Next-Generation Innovation Clusters</h2>
      <p class="mt-4 text-slate-600">Advancing breakthrough ideas through collaborative research across science, technology, design, sustainability, and human development.</p>
    </div>
    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
      <?php
      $clusters = [
        ['cpu', 'School of Quantum Science, Computing & AI'],
        ['hard-drive', 'School of Engineering & Technology'],
        ['briefcase', 'School of Business & Commerce'],
        ['award', 'School of Fashion Design, Media & Performing Arts'],
        ['book-open', 'School of Liberal Arts and Science'],
        ['dna', 'School of Applied Biosciences, Food & Agritech'],
        ['globe', 'School of Sustainability & Climate Studies'],
        ['heart-pulse', 'School of Sports & Health Science'],
      ];
      foreach ($clusters as $cluster):
      ?>
        <article class="r-card rounded-3xl border border-slate-200/60 bg-white p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-violet-50 text-violet-700 mb-4">
            <i data-lucide="<?php echo $cluster[0]; ?>" class="h-5 w-5"></i>
          </div>
          <p class="text-base font-semibold text-slate-900 leading-7"><?php echo $cluster[1]; ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════ RESEARCH AT A GLANCE ════════════════ -->
<section class="relative overflow-hidden bg-[#0b1020] py-16 sm:py-24">
  <div class="r-blob bg-violet-700/20 h-80 w-80 top-0 left-1/4"></div>
  <div class="absolute top-0 inset-x-0 h-[2px] r-grad-bg"></div>
  <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-12 r-reveal">
      <p class="r-eyebrow text-violet-300 mb-3 justify-center"><span class="h-1.5 w-1.5 rounded-full bg-violet-400"></span> Research at a Glance</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-white">Measurable Research Momentum</h2>
      <p class="mt-4 text-white/55">Cumulative research output and impact recorded by the Directorate of Research, Development &amp; Innovation.</p>

    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-3 sm:gap-4">
      <?php
      $glance = [
        ['count', '312', '', 'Publications', 'Scopus / WoS / SCI <br> (AY 2025 - 26)'],
        ['count', '549', '', 'Books & Chapters', 'Authored & edited  <br> (AY 2025 - 26)'],
        ['count', '96', '', 'Patents Filed', '20 granted  <br> (AY 2025 - 26)'],
        ['count', '2.23', '', 'External Grants', '93 funded projects  <br> (AY 2025 - 26)', '₹', ' Cr', 2],
        ['count', '86', '', 'Internal Grants', 'Institutional seed grants nurturing early-stage research  <br> (AY 2025 - 26)', '₹', ' L', 0],
      ];
      foreach ($glance as $g):
        $countAttrs = '';
        if ($g[0] === 'count') {
          $countAttrs = 'data-count="' . htmlspecialchars($g[1]) . '"';
          if (!empty($g[5])) $countAttrs .= ' data-prefix="' . htmlspecialchars($g[5]) . '"';
          if (!empty($g[6])) $countAttrs .= ' data-suffix="' . htmlspecialchars($g[6]) . '"';
          if (isset($g[7])) $countAttrs .= ' data-dec="' . intval($g[7]) . '"';
        }
      ?>
        <div class="group rounded-2xl border border-white/10 bg-white/[0.04] backdrop-blur p-5 transition r-reveal">
          <div class="<?php echo $g[0] === 'count' ? 'text-3xl sm:text-4xl' : 'text-xl sm:text-2xl'; ?> font-black text-white leading-tight break-words" <?php echo $countAttrs; ?>>
            <?php echo $g[0] === 'count' ? '0' : $g[1]; ?>
          </div>
          <div class="mt-2 text-sm font-bold text-white/90"><?php echo $g[3]; ?></div>
          <div class="text-xs text-white/45"><?php echo $g[4]; ?></div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ════════════════ EMERGING THEMES ════════════════ -->
<section class="bg-[#f8fafc] py-16 sm:py-20">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="rounded-3xl bg-gradient-to-br from-violet-600 to-sky-500 p-8 sm:p-12 text-white relative overflow-hidden r-reveal">
      <div class="absolute -top-16 -right-10 h-60 w-60 rounded-full bg-white/10 blur-2xl"></div>
      <p class="r-eyebrow text-white/70 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-white"></span> Research Areas &amp; Emerging Themes</p>
      <h2 class="text-2xl sm:text-3xl font-black tracking-tight mb-7 max-w-2xl">The University actively promotes research in</h2>
      <div class="flex flex-wrap gap-2.5">
        <?php
        $themes = ['Artificial Intelligence & Machine Learning', 'Artificial & Computational Intelligence', 'Data Science, Analytics & Business Intelligence', 'Cyber Security, Digital Forensics & Blockchain', 'Networking, Cloud & Advanced Computing', 'Internet of Things, Robotics & Intelligent Systems', 'Computer Vision, Image Processing & Immersive Technologies', 'Engineering Sciences & Technology', 'Environmental Science, Sustainability & Climate Studies', 'Materials Science, Nanotechnology & Advanced Functional Materials', 'Physics & Applied Physical Sciences', 'Chemistry & Chemical Sciences', 'Biological Sciences & Biotechnology', 'Life Sciences, Biodiversity & Conservation Biology','Food Science, Nutrition & Agricultural Sciences','Textile, Fashion & Apparel Sciences','Management & Organizational Studies','Finance, Banking, Insurance & FinTech','Marketing, Digital Business & Entrepreneurship','Operations, Supply Chain, Logistics & International Business','Human Resource Management & Workplace Studies','Media, Communication & Journalism Studies','Language, Literature & Linguistic Studies','Mathematical Sciences & Operations Research','Psychology, Behavioural Sciences, Law & Social Sciences','Tourism, Hospitality & Service Industries','Health, Wellness, Sports & Physical Education'];
        foreach ($themes as $t) echo '<span class="rounded-full border border-white/25 bg-white/10 px-4 py-2 text-sm font-medium backdrop-blur">' . $t . '</span>';
        ?>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════ PROGRAMME MODES ════════════════ -->
<section class="bg-white py-16 sm:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mb-12 r-reveal">
      <p class="r-eyebrow text-violet-700 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span> Flexible <span style="text-transform:none;">Ph.D.</span> Programme Modes</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Multiple pathways for doctoral research</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-6">
      <?php
      $modes = [
        ['Full-Time Ph.D.', 'clock', 'from-violet-600 to-violet-500', ['With or without fellowship', 'Sponsored research / project support', 'Start-up integrated research opportunities']],
        ['Part-Time Ph.D.', 'briefcase', 'from-sky-600 to-sky-500', ['Internal category for faculty &amp; staff', 'External category for industry professionals', 'For academicians &amp; working researchers']],
        ['Integrated Ph.D.', 'layers', 'from-emerald-600 to-emerald-500', ['For eligible 4-year UG Honours degrees', 'Minimum 75% aggregate or equivalent', 'Direct pathway into doctoral research']],
      ];
      foreach ($modes as $i => $m):
      ?>
        <div class="r-card p-7 r-reveal d<?php echo $i + 1; ?>">
          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br <?php echo $m[2]; ?> text-white shadow-lg mb-5"><i data-lucide="<?php echo $m[1]; ?>" class="h-6 w-6"></i></div>
          <h3 class="text-lg font-extrabold text-slate-900 mb-4"><?php echo $m[0]; ?></h3>
          <ul class="space-y-2.5">
            <?php foreach ($m[3] as $li): ?>
              <li class="flex items-start gap-2.5 text-sm text-slate-600"><span class="mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-violet-500"></span><span><?php echo $li; ?></span></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<section class="bg-slate-50">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mt-12 grid gap-8 lg:grid-cols-1">


      <article class="overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-8 shadow-xl">
        <div class="flex items-start gap-4 mb-6">
          <div class="flex h-14 w-14 items-center justify-center rounded-3xl bg-sky-50 text-sky-700 shadow-sm">
            <i data-lucide="sparkles" class="h-6 w-6"></i>
          </div>
          <div>
            <p class="text-xs uppercase tracking-[0.3em] text-slate-500 font-semibold">Research Environment</p>
            <h3 class="mt-3 text-3xl font-black text-slate-900">A modern ecosystem for discovery</h3>
          </div>
        </div>
        <p class="max-w-xl text-sm leading-7 text-slate-600 mb-8">RGU nurtures research through labs, collaborations, events, resources and entrepreneurship support designed for emerging scholars.</p>
        <div class="grid gap-4 sm:grid-cols-2">
          <?php
          $environment_items = [
            ['microscope', 'State-of-the-art research centres and laboratories'],
            ['handshake', 'Industry–academia partnerships'],
            ['globe', 'National and global research collaborations'],
            ['users', 'Seminars, conferences and faculty development programmes'],
            ['book-open', 'Access to e-journals, research databases and digital libraries'],
            ['lightbulb', 'Innovation & entrepreneurship initiatives at AIC RaISE'],
          ];
          foreach ($environment_items as $item):
          ?>
            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-5 transition hover:border-slate-300">
              <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-violet-600 text-white shadow-sm">
                <i data-lucide="<?php echo $item[0]; ?>" class="h-5 w-5"></i>
              </div>
              <p class="mt-4 text-sm leading-6 text-slate-700"><?php echo $item[1]; ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </article>
    </div>
  </div>
</section>







<!-- <section class="overflow-hidden bg-[#080810] py-14 sm:py-20">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    
    <div class="mb-10 h-px w-full bg-gradient-to-r from-transparent via-violet-500/40 to-transparent"></div>

    
    <div class="grid gap-5 xl:grid-cols-2">

      
      <article class="flex h-full flex-col rounded-[2rem] border border-white/10 bg-white/[0.04] p-6 shadow-2xl backdrop-blur sm:p-8">

        
        <div class="flex flex-col gap-6 border-b border-white/10 pb-6 sm:flex-row sm:items-start sm:justify-between">

          <div class="space-y-3">
            <p class="r-eyebrow flex items-center gap-2 text-violet-300">
              <span class="h-1.5 w-1.5 rounded-full bg-violet-400 animate-pulse"></span>
              Directorate of Research
            </p>

            <div>
              <h2 class="text-3xl font-black tracking-tight text-white sm:text-4xl">
                Dr. S. Balasubramanian
              </h2>

              <p class="mt-2 text-lg font-semibold text-white/70">
                Director – Ph.D Programmes
              </p>
            </div>
          </div>

          <a href="./directorate.php"
            class="hidden sm:inline-flex shrink-0 items-center justify-center rounded-xl bg-gradient-to-r from-violet-600 to-sky-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-violet-500/20 transition hover:scale-[1.01]">
            Visit Directorate
          </a>
        </div>

        
        <div class="grid flex-1 gap-8 pt-8 lg:grid-cols-[1fr_240px] lg:items-center">

          
          <div class="flex flex-col justify-center">
            <div class="mb-6 flex flex-col md:flex-col md:items-center md:justify-center gap-4 lg:hidden">
              <div class="rounded-3xl border border-white/15 bg-gradient-to-br from-violet-500/20 to-sky-500/10 p-2 shadow-2xl w-4/5 md:w-full ">
                <img src="./assets/director.png"
                  alt="Dr. S. Balasubramanian, Director – Ph.D Programmes"
                  class="h-full w-full rounded-[1.3rem] object-cover">
              </div>
              <a href="./directorate.php"
                class="w-full max-w-[260px] inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-violet-600 to-sky-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-violet-500/20 transition hover:scale-[1.01]">
                Visit Directorate
              </a>
            </div>

            <div class="mb-5 flex flex-wrap gap-2">
              <span class="r-chip border-white/15 bg-white/[0.05] text-white/75">
                M.Sc.
              </span>

              <span class="r-chip border-white/15 bg-white/[0.05] text-white/75">
                Ph.D. (Cell Biology, Basel)
              </span>

              <span class="r-chip border-white/15 bg-white/[0.05] text-white/75">
                10 Yrs Research · 9 Yrs Admin
              </span>
            </div>

            <p class="text-base leading-7 text-white/55">
              Rathinam Global (Deemed to be University), Coimbatore — leading
              high-quality interdisciplinary research, national &
              international collaborations, and doctoral programmes.
            </p>

            <div class="mt-7 flex flex-wrap gap-3">

              <a href="tel:+919487704190"
                class="inline-flex items-center gap-2 rounded-xl border border-white/15 bg-white/[0.05] px-4 py-2.5 text-sm font-medium text-white/80 transition hover:bg-white/10">
                <i data-lucide="phone" class="h-4 w-4 text-violet-300"></i>
                +91-9487704190
              </a>

              <a href="mailto:director.rp@rathinam.in"
                class="inline-flex items-center gap-2 rounded-xl border border-white/15 bg-white/[0.05] px-4 py-2.5 text-sm font-medium text-white/80 transition hover:bg-white/10">
                <i data-lucide="mail" class="h-4 w-4 text-violet-300"></i>
                director.rp@rathinam.in
              </a>

            </div>
          </div>

          
          <div class="hidden lg:flex items-center justify-center lg:justify-end">

            <div
              class="rounded-3xl border border-white/15 bg-gradient-to-br from-violet-500/20 to-sky-500/10 p-2 shadow-2xl ">

              <img src="./assets/director.png"
                alt="Dr. S. Balasubramanian, Director – Ph.D Programmes"
                class="h-full w-full rounded-[1.3rem] object-cover">
            </div>

          </div>

        </div>
      </article>

      
      <article class="flex h-full flex-col rounded-[2rem] border border-white/10 bg-white/[0.04] p-6 shadow-2xl backdrop-blur sm:p-8">

        
        <div class="flex flex-col gap-6 border-b border-white/10 pb-6 sm:flex-row sm:items-start sm:justify-between">

          <div class="space-y-3">
            <p class="r-eyebrow flex items-center gap-2 text-violet-300">
              <span class="h-1.5 w-1.5 rounded-full bg-violet-400 animate-pulse"></span>
              Office of the Registrar
            </p>

            <div>
              <h2 class="text-3xl font-black tracking-tight text-white sm:text-4xl">
                Dr. C. Krishnaraj
              </h2>

              <p class="mt-2 text-lg font-semibold text-white/70">
                Registrar
              </p>
            </div>
          </div>

          <a href="./registrar.php"
            class="hidden sm:inline-flex shrink-0 items-center justify-center rounded-xl bg-gradient-to-r from-violet-600 to-sky-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-violet-500/20 transition hover:scale-[1.01]">
            Visit Registrar
          </a>
        </div>

        
        <div class="grid flex-1 gap-3 pt-8 lg:grid-cols-[1fr_220px] lg:items-center">

          
          <div class="flex flex-col justify-center">
            <div class="mb-6 md:flex md:flex-col md:items-center md:justify-center gap-4 lg:hidden">
              <div class="w-full max-w-[230px] overflow-hidden rounded-3xl border border-white/15 bg-gradient-to-br from-violet-500/20 to-sky-500/10 p-2 shadow-2xl sm:max-w-[260px]">
                <img src="./assets/registrar.jpg"
                  alt="Dr. C. Krishnaraj, Registrar"
                  class="h-full w-full rounded-[1.3rem] object-cover">
              </div>
              <a href="./registrar.php"
                class="w-full max-w-[260px] inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-violet-600 to-sky-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-violet-500/20 transition hover:scale-[1.01]">
                Visit Registrar
              </a>
            </div>

            <div class="mb-5 flex flex-wrap gap-2">

              <span class="r-chip border-white/15 bg-white/[0.05] text-white/75">
                M.E. (Energy Engineering)
              </span>

              <span class="r-chip border-white/15 bg-white/[0.05] text-white/75">
                Ph.D.
              </span>

              <span class="r-chip border-white/15 bg-white/[0.05] text-white/75">
                22+ Years Experience
              </span>

            </div>

            <p class="text-base leading-7 text-white/55">
              Rathinam Global (Deemed to be University), Coimbatore — academic
              governance, regulatory compliance, quality assurance and
              institutional development.
            </p>

            <div class="mt-7 flex flex-wrap gap-3">

              <a href="tel:+919942999430"
                class="inline-flex items-center gap-2 rounded-xl border border-white/15 bg-white/[0.05] px-4 py-2.5 text-sm font-medium text-white/80 transition hover:bg-white/10">
                <i data-lucide="phone" class="h-4 w-4 text-violet-300"></i>
                +91 99429 99430
              </a>

              <a href="mailto:Registrar@rathinam.in"
                class="inline-flex items-center gap-2 rounded-xl border border-white/15 bg-white/[0.05] px-4 py-2.5 text-sm font-medium text-white/80 transition hover:bg-white/10">
                <i data-lucide="mail" class="h-4 w-4 text-violet-300"></i>
                Registrar@rathinam.in
              </a>

              <a href="mailto:Registrar@rathinamtechzone.com"
                class="inline-flex items-center gap-2 rounded-xl border border-white/15 bg-white/[0.05] px-4 py-2.5 text-sm font-medium text-white/80 transition hover:bg-white/10">
                <i data-lucide="mail" class="h-4 w-4 text-violet-300"></i>
                Registrar@rathinamtechzone.com
              </a>

            </div>
          </div>

          
          <div class="hidden lg:flex items-center justify-center lg:justify-end">

            <div
              class="rounded-3xl border border-white/15 bg-gradient-to-br from-violet-500/20 to-sky-500/10 p-2 shadow-2xl">

              <img src="./assets/registrar.jpg"
                alt="Dr. C. Krishnaraj, Registrar"
                class="h-full w-full rounded-[1.3rem] object-cover">
            </div>

          </div>

        </div>
      </article>

    </div>
  </div>
</section> -->



<section class="bg-slate-50">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mt-12 grid gap-8 lg:grid-cols-1">
      <article class="relative overflow-hidden rounded-[2rem] border border-orange-200 bg-gradient-to-br from-orange-500 via-orange-500 to-orange-400 p-8 text-white shadow-2xl">
        <div class="absolute -right-16 top-8 h-40 w-40 rounded-full bg-white/10 blur-2xl"></div>
        <div class="relative z-10">
          <div class="flex items-center gap-3 mb-6">
            <div class="flex h-14 w-14 items-center justify-center rounded-3xl bg-white/15 text-white shadow-sm">
              <i data-lucide="handshake" class="h-6 w-6"></i>
            </div>
            <div>
              <p class="text-xs uppercase tracking-[0.3em] text-orange-100 font-semibold">Additional Support</p>
              <h3 class="mt-3 text-3xl font-black">Comprehensive Support For Research Excellence</h3>
            </div>
          </div>
          <?php
          $support_items = [
            ['book-open', 'Research publication incentives'],
            ['users', 'Conference participation support'],
            ['award', 'Patent filing & innovation support'],
            ['git-branch', 'Collaborative research initiatives'],
            ['trending-up', 'Access to funded research projects'],
          ];
          ?>
          <div class="grid gap-4 grid-cols-1 lg:grid-cols-3">
          <?php
          foreach ($support_items as $item):
          ?>
            <div class="flex items-start gap-4 rounded-3xl bg-white/10 p-4 transition hover:bg-white/20">
              <span class="mt-1 flex h-12 w-12 items-center justify-center rounded-2xl bg-white/20 text-white shadow-sm">
                <i data-lucide="<?php echo $item[0]; ?>" class="h-5 w-5"></i>
              </span>
              <p class="text-sm leading-6 text-white/95"><?php echo $item[1]; ?></p>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>



<!-- ════════════════ DISCIPLINES ════════════════ -->
<!-- <section class="bg-white py-16 sm:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mb-12 r-reveal">
      <p class="r-eyebrow text-violet-700 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span> Research Disciplines Offered</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Doctoral research across diverse disciplines</h2>
      <p class="mt-4 text-slate-600">Specializations are aligned with emerging global trends, industry demands, sustainability goals and future technologies.</p>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
      <?php
      $disciplines = [
        ['cpu', 'Engineering & Technology'],
        ['brain-circuit', 'Computer Science & AI'],
        ['dna', 'Biotechnology'],
        ['microscope', 'Microbiology'],
        ['atom', 'Physics'],
        ['sigma', 'Mathematics'],
        ['briefcase', 'Commerce & Management'],
        ['brain', 'Psychology'],
        ['book-a', 'English'],
        ['languages', 'Tamil'],
        ['radio', 'Communication & Media'],
        ['shirt', 'Costume Design & Fashion'],
        ['leaf', 'Environmental Science'],
        ['shield-check', 'Cyber Security & Blockchain'],
        ['rocket', 'Digital Entrepreneurship'],
        ['activity', 'Behavioural Sciences'],
      ];
      foreach ($disciplines as $i => $d):
      ?>
        <div class="r-card p-5 flex items-center gap-3 r-reveal">
          <span class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-xl bg-violet-50 text-violet-700"><i data-lucide="<?php echo $d[0]; ?>" class="h-5 w-5"></i></span>
          <span class="text-sm font-semibold text-slate-800 leading-tight"><?php echo $d[1]; ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section> -->






<!-- ════════════════ ADMISSION PROCESS ════════════════ -->
<section class="bg-white py-16 sm:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 grid lg:grid-cols-12 gap-12">
    <div class="lg:col-span-5 r-reveal">
      <p class="r-eyebrow text-violet-700 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span> Admission Process</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Transparent &amp; merit-based selection</h2>
      <p class="mt-4 text-slate-600">Admissions open twice every year — the <strong class="text-slate-900">June–July</strong> and <strong class="text-slate-900">December–January</strong> sessions.</p>
      <div class="mt-7 rounded-2xl border border-violet-100 bg-violet-50/60 p-6">
        <h4 class="text-sm font-extrabold text-violet-800 mb-3">Entrance Examination Structure</h4>
        <ul class="space-y-2 text-sm text-slate-600">
          <li class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-violet-500"></span> 50% Research Methodology</li>
          <li class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-violet-500"></span> 50% Subject Specialization</li>
          <li class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-violet-500"></span> Followed by Presentation &amp; Interview</li>
        </ul>
        <p class="mt-4 text-xs text-slate-500"><strong class="text-slate-700">RPET exemption</strong> for UGC/CSIR-NET-JRF, GATE, DBT-JRF, ICMR-JRF, INSPIRE, SET/SLET &amp; equivalent qualifiers.</p>
      </div>
    </div>
    <div class="lg:col-span-7 r-reveal d1">
      <ol class="relative border-l-2 border-violet-100 ml-3 space-y-7">
        <?php
        $steps = [
          ['Online Application Submission', 'Submit the duly completed online application (Form 1) before the notified deadline.'],
          ['Eligibility Verification', 'School-wise committee scrutinises qualifications and supporting documents.'],
          ['Research and Ph.D. Entrance Test (RPET) (Online)', '70% weightage — 50% Research Methodology + 50% Subject Specialization.'],
          ['Research Presentation & Interview (Online)', '30% weightage — present your skills, interests and research aptitude.'],
          ['Supervisor Allocation', 'Recognised supervisors are allotted based on research interest &amp; expertise.'],
        ];
        foreach ($steps as $i => $s):
        ?>
          <li class="ml-7">
            <span class="absolute -left-[14px] flex h-7 w-7 items-center justify-center rounded-full bg-gradient-to-br from-violet-600 to-sky-500 text-white text-xs font-black shadow"><?php echo $i + 1; ?></span>
            <h4 class="text-base font-extrabold text-slate-900"><?php echo $s[0]; ?></h4>
            <p class="mt-1 text-sm text-slate-600 leading-6"><?php echo $s[1]; ?></p>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>




<?php include __DIR__ . '/partials/footer.php'; ?>