<?php
$active     = 'registrar';
$page_title = 'Registrar';
$page_desc  = 'Office of the Registrar — Dr. C. Krishnaraj, Rathinam Global Deemed to be University.';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/nav.php';
?>

<!-- ════════════════ HERO / PROFILE ════════════════ -->
<section class="relative overflow-hidden bg-[#080810] pt-14 pb-16 sm:pt-20 sm:pb-24">
  <div class="r-blob bg-violet-700/30 h-96 w-96 -top-28 -left-20"></div>
  <div class="r-blob bg-sky-600/25 h-80 w-80 top-0 right-0"></div>
  <div class="absolute inset-0 r-hero-grid pointer-events-none"></div>
  <div class="absolute top-0 inset-x-0 h-[2px] r-grad-bg"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <nav class="mb-8 flex items-center gap-2 text-xs text-white/40">
      <a href="./index.php" class="hover:text-white/80">Research</a><span>/</span><span class="text-violet-300">Registrar</span>
    </nav>

    <div class="grid lg:grid-cols-[1fr_300px] gap-10 lg:gap-14 items-center">
      <!-- details -->
      <div class="r-reveal is-in order-2 lg:order-1">
        <div class="r-eyebrow text-violet-300 mb-4"><span class="h-1.5 w-1.5 rounded-full bg-violet-400 animate-pulse"></span> Office of the Registrar</div>
        <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-white leading-[1.08]">Dr. C. Krishnaraj</h1>
        <p class="mt-3 text-lg font-semibold text-white/70">Registrar</p>
        <div class="mt-4 flex flex-wrap gap-2">
          <span class="r-chip border-white/15 bg-white/[0.05] text-white/75">M.E. (Energy Engineering)</span>
          <span class="r-chip border-white/15 bg-white/[0.05] text-white/75">Ph.D.</span>
          <span class="r-chip border-white/15 bg-white/[0.05] text-white/75">22+ Years Experience</span>
        </div>
        <p class="mt-5 max-w-xl text-base leading-7 text-white/55">Rathinam Global Deemed to be University, Coimbatore — academic governance, regulatory compliance, quality assurance and institutional development.</p>

        <div class="mt-7 flex flex-wrap gap-3">
          <a href="tel:+919942999430" class="inline-flex items-center gap-2 rounded-xl border border-white/15 bg-white/[0.05] px-4 py-2.5 text-sm font-medium text-white/80 hover:bg-white/10 transition">
            <i data-lucide="phone" class="h-4 w-4 text-violet-300"></i> +91 99429 99430
          </a>
          <a href="mailto:Registrar@rathinam.in" class="inline-flex items-center gap-2 rounded-xl border border-white/15 bg-white/[0.05] px-4 py-2.5 text-sm font-medium text-white/80 hover:bg-white/10 transition">
            <i data-lucide="mail" class="h-4 w-4 text-violet-300"></i> Registrar@rathinam.in
          </a>
          <a href="mailto:Registrar@rathinamtechzone.com" class="inline-flex items-center gap-2 rounded-xl border border-white/15 bg-white/[0.05] px-4 py-2.5 text-sm font-medium text-white/80 hover:bg-white/10 transition">
            <i data-lucide="mail" class="h-4 w-4 text-violet-300"></i> Registrar@rathinamtechzone.com
          </a>
        </div>
      </div>
      <!-- photo -->
      <div class="r-reveal is-in order-1 lg:order-2 mx-auto lg:mx-0">
        <div class="relative w-[230px] sm:w-[260px]">
          <div class="absolute -inset-3 rounded-3xl bg-gradient-to-br from-violet-600/40 to-sky-500/30 blur-xl"></div>
          <img src="./assets/registrar.jpg" alt="Dr. C. Krishnaraj, Registrar" class="relative w-full rounded-3xl border border-white/15 object-cover shadow-2xl">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════ ABOUT ════════════════ -->
<section class="bg-white py-16 sm:py-20">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mb-10 r-reveal">
      <p class="r-eyebrow text-violet-700 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span> About the Registrar</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Leadership in academic governance</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="r-card p-7 r-reveal">
        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-violet-600 to-violet-500 text-white shadow-lg mb-5"><i data-lucide="building-2" class="h-6 w-6"></i></div>
        <h3 class="text-lg font-extrabold text-slate-900 mb-3">Background</h3>
        <p class="text-sm leading-7 text-slate-600">An accomplished academic administrator with over <strong>22 years</strong> of experience in higher education, research, teaching and institutional governance. Expertise spans NBA accreditation, NAAC processes, academic administration, curriculum development and research supervision.</p>
      </div>
      <div class="r-card p-7 r-reveal d1">
        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-sky-600 to-sky-500 text-white shadow-lg mb-5"><i data-lucide="target" class="h-6 w-6"></i></div>
        <h3 class="text-lg font-extrabold text-slate-900 mb-3">Objectives</h3>
        <p class="text-sm leading-7 text-slate-600">To strengthen academic governance, ensure regulatory compliance, facilitate quality-assurance initiatives, and support the University's mission of excellence in education, research, innovation and industry collaboration.</p>
      </div>
      <div class="r-card p-7 r-reveal d2">
        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-600 to-emerald-500 text-white shadow-lg mb-5"><i data-lucide="list-checks" class="h-6 w-6"></i></div>
        <h3 class="text-lg font-extrabold text-slate-900 mb-3">Functions</h3>
        <ul class="space-y-2 text-sm text-slate-600">
          <?php foreach ([
            'Administration &amp; governance of academic and statutory processes',
            'Coordination of regulations, examinations &amp; academic records',
            'Quality-assurance frameworks such as NAAC and NBA',
            'Facilitation of research, innovation &amp; institutional development',
            'Liaison with UGC, AICTE and affiliating authorities',
          ] as $f): ?>
          <li class="flex items-start gap-2"><span class="mt-1.5 h-1.5 w-1.5 flex-shrink-0 rounded-full bg-violet-500"></span><span><?php echo $f; ?></span></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════ RESEARCH PROFILE STATS ════════════════ -->
<section class="bg-[#0b1020] py-16 sm:py-20 relative overflow-hidden">
  <div class="r-blob bg-violet-700/20 h-80 w-80 top-0 right-1/4"></div>
  <div class="absolute top-0 inset-x-0 h-[2px] r-grad-bg"></div>
  <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mb-10 r-reveal">
      <p class="r-eyebrow text-violet-300 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-400"></span> Research Profile</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-white">A strong research footprint</h2>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      <?php
        $rstats = [
          ['52','International journal publications','file-text'],
          ['180','Scopus citations','quote'],
          ['15','Scopus h-index','trending-up'],
          ['316','Google Scholar citations','quote'],
          ['11','Google Scholar h-index','trending-up'],
          ['27','Scopus-indexed publications','book-open'],
          ['11','SCI-indexed publications','badge-check'],
          ['1 / 1 / 1','Patents granted / published / applied','lightbulb'],
        ];
        foreach ($rstats as $s){
          echo '<div class="rounded-2xl border border-white/10 bg-white/[0.04] backdrop-blur p-5 r-reveal">';
          echo '<div class="flex items-center gap-2 text-white/40 mb-2"><i data-lucide="'.$s[2].'" class="h-4 w-4"></i></div>';
          echo '<div class="text-2xl sm:text-3xl font-black text-white leading-none">'.$s[0].'</div>';
          echo '<div class="mt-1.5 text-[11px] font-medium uppercase tracking-wider text-white/45">'.$s[1].'</div></div>';
        }
      ?>
    </div>
    <!-- Research guidance -->
    <div class="mt-6 grid sm:grid-cols-3 gap-4">
      <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-5 r-reveal"><div class="text-xs uppercase tracking-wider text-white/45 mb-1">Anna University Supervisor ID</div><div class="text-xl font-black text-white">2320178</div></div>
      <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-5 r-reveal d1"><div class="text-xs uppercase tracking-wider text-white/45 mb-1">Ph.D. Scholars Awarded</div><div class="text-xl font-black text-white">03</div></div>
      <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-5 r-reveal d2"><div class="text-xs uppercase tracking-wider text-white/45 mb-1">Ph.D. Scholars Pursuing</div><div class="text-xl font-black text-white">05</div></div>
    </div>
  </div>
</section>

<!-- ════════════════ QUALIFICATIONS & EXPERIENCE ════════════════ -->
<section class="bg-white py-16 sm:py-20">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-8">
    <!-- Academic Qualifications -->
    <div class="r-reveal">
      <h2 class="text-2xl font-black text-slate-900 mb-5">Academic Qualifications</h2>
      <div class="overflow-x-auto rounded-xl border border-slate-200">
        <table class="w-full text-sm" style="min-width:460px">
          <thead class="bg-slate-900 text-slate-100"><tr><th class="px-4 py-3 text-left font-semibold">Degree</th><th class="px-4 py-3 text-left font-semibold">Branch</th><th class="px-4 py-3 text-left font-semibold">University</th><th class="px-4 py-3 text-left font-semibold">Year</th></tr></thead>
          <tbody class="divide-y divide-slate-100">
            <?php foreach ([
              ['Ph.D.','Mechanical Engineering','Anna University, Chennai','2012'],
              ['M.E.','Energy Engineering','Anna University, Chennai','2004'],
              ['B.E.','Mechanical Engineering','V.L.B. Janaki Ammal College of Engineering &amp; Technology','2002'],
            ] as $r){ echo '<tr><td class="px-4 py-3 font-bold text-slate-800">'.$r[0].'</td><td class="px-4 py-3 text-slate-600">'.$r[1].'</td><td class="px-4 py-3 text-slate-600">'.$r[2].'</td><td class="px-4 py-3 text-slate-600">'.$r[3].'</td></tr>'; } ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- Administrative Experience -->
    <div class="r-reveal d1">
      <h2 class="text-2xl font-black text-slate-900 mb-5">Administrative Experience</h2>
      <div class="overflow-x-auto rounded-xl border border-slate-200">
        <table class="w-full text-sm" style="min-width:420px">
          <thead class="bg-slate-900 text-slate-100"><tr><th class="px-4 py-3 text-left font-semibold">Position</th><th class="px-4 py-3 text-left font-semibold">Institution</th></tr></thead>
          <tbody class="divide-y divide-slate-100">
            <?php foreach ([
              ['Registrar','Rathinam Global Deemed to be University'],
              ['Principal','Rathinam Technical Campus'],
              ['Dean – Engineering','Rathinam Technical Campus'],
              ['Professor &amp; Head','Karpagam College of Engineering'],
            ] as $r){ echo '<tr><td class="px-4 py-3 font-bold text-slate-800">'.$r[0].'</td><td class="px-4 py-3 text-slate-600">'.$r[1].'</td></tr>'; } ?>
            <tr class="bg-violet-50/60"><td class="px-4 py-3 font-black text-violet-800" colspan="2">Total Experience: 22+ Years</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════ ACHIEVEMENTS & MEMBERSHIPS ════════════════ -->
<section class="bg-[#f8fafc] py-16 sm:py-20 border-y border-slate-100">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 grid lg:grid-cols-2 gap-8">
    <div class="r-card p-7 sm:p-8 r-reveal">
      <h2 class="text-2xl font-black text-slate-900 mb-5">Major Achievements</h2>
      <ul class="space-y-3">
        <?php foreach ([
          'Successfully led NBA Accreditation &amp; Reaccreditation processes',
          'Played a key role in NAAC accreditation activities',
          'Facilitated Autonomous Status renewal',
          'Established industry collaborations with 17 industries',
          'Organized numerous international conferences, FDPs, workshops &amp; seminars',
          'Recognized research supervisor under Anna University',
          'Contributed significantly to curriculum development &amp; academic governance',
        ] as $a){ echo '<li class="flex items-start gap-2.5 text-sm text-slate-600"><svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-violet-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg><span>'.$a.'</span></li>'; } ?>
      </ul>
      <div class="mt-6 rounded-xl bg-emerald-50/70 border border-emerald-100 p-4 text-sm text-slate-600">
        <strong class="text-emerald-800">Grants &amp; Funding:</strong> Secured grants from AICTE, SERB, MSME, TNSCST, Institution of Engineers and ISTE — supporting research projects, conferences, FDPs and innovation activities.
      </div>
    </div>
    <div class="r-card p-7 sm:p-8 r-reveal d1">
      <h2 class="text-2xl font-black text-slate-900 mb-5">Professional Memberships</h2>
      <div class="flex flex-wrap gap-2.5">
        <?php foreach ([
          'Institute of Engineers (India)','Indian Society for Technical Education (ISTE)','Indian Society for Mechanical Engineers','IAENG','IRED','Society of Automobile Engineers','Bureau of Indian Standards','Indian Welding Society','Coimbatore Productivity Council',
        ] as $m){ echo '<span class="r-chip border-slate-200 bg-white text-slate-600">'.$m.'</span>'; } ?>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════ GOVT GRANTS TABLE ════════════════ -->
<section class="bg-white py-16 sm:py-20">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mb-8 r-reveal">
      <p class="r-eyebrow text-violet-700 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span> Funds Received from Govt. Agencies</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Sponsored grants &amp; funding</h2>
    </div>
    <div class="r-table-wrap r-reveal">
      <div class="r-table-scroll">
        <table class="r-table" style="min-width:680px">
          <thead><tr><th>Academic Year</th><th>Grants Received From</th><th style="text-align:right">Amount (₹)</th></tr></thead>
          <tbody>
            <?php
              $grants = [
                ['2023-2024','Institution of Engineers – R&D Grant','40,000'],
                ['2023-2024','SERB – Conference Scheme','80,000'],
                ['2022-2023','MSME – IDEA Hackathon – 1.0','15,00,000'],
                ['2022-2023','TNSCST Sponsored National Level Project model display contest – MEXHIBIT&rsquo;23','15,000'],
                ['2022-2023','AICTE – PRERANA','3,25,000'],
                ['2022-2023','TNSCST Student Project Scheme','6,500'],
                ['2022-2023','AICTE – SPICES Scheme','1,00,000'],
                ['2021-2022','TNSCST Sponsored National Level Project model display contest – MEXHIBIT&rsquo;22','15,000'],
                ['2021-2022','TNSCST Student Project Scheme','7,500'],
                ['2021-2022','AICTE – MODROBS','7,01,950'],
                ['2020-2021','TNSCST Sponsored National Level Project model display contest – MEXHIBIT&rsquo;21','15,000'],
                ['2020-2021','AICTE Sponsored International Conference on Modeling Simulation (ICMSC)','50,000'],
                ['2019-2020','TNSCST Sponsored National Level Project model display contest – MEXHIBIT&rsquo;20','15,000'],
                ['2018-2019','AICTE funding for conducting Faculty Development Program (FDP)','4,42,000'],
                ['2017-2018','TNSCST Sponsored National Level Project Model Display – MEXHIBIT&rsquo;17','15,000'],
                ['2016-2017','TNSCST Sponsored National Level Project Model Display – MEXHIBIT&rsquo;17','15,000'],
                ['2015-2016','ISTE Chapter New Delhi funding for International Conference (ICAETSD)','10,000'],
                ['2015-2016','ISTE – TN&amp;P section funding for International Conference (ICAETSD)','5,000'],
                ['2014-2015','ISTE Chapter, New Delhi funding for National Conference','10,000'],
                ['2014-2015','ISTE – TN&amp;P section funding for National Conference','5,000'],
              ];
              foreach ($grants as $g){
                echo '<tr><td class="r-col-sno">'.$g[0].'</td><td>'.$g[1].'</td><td style="text-align:right"><span class="r-amount">₹'.$g[2].'</span></td></tr>';
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
