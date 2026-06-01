<?php
$active     = 'home';
$page_title = 'Research Overview';
$page_desc  = 'Research, doctoral programmes, innovation and R&D metrics at Rathinam Global University (RGU), Coimbatore.';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/nav.php';
?>

<!-- ════════════════ HERO ════════════════ -->
<section class="relative overflow-hidden bg-[#080810] min-h-[92vh] flex items-center">
  <div class="r-blob bg-violet-700/30 h-[520px] w-[520px] -top-32 -left-24"></div>
  <div class="r-blob bg-sky-600/25 h-[460px] w-[460px] -bottom-28 -right-20"></div>
  <div class="r-blob bg-fuchsia-600/15 h-[280px] w-[280px] top-1/3 right-1/3"></div>
  <div class="absolute inset-0 r-hero-grid pointer-events-none"></div>
  <div class="absolute top-0 inset-x-0 h-[2px] r-grad-bg"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-24 grid lg:grid-cols-12 gap-12 items-center">
    <!-- left -->
    <div class="lg:col-span-7 r-reveal is-in">
      <div class="r-eyebrow text-violet-300 mb-6">
        <span class="h-1.5 w-1.5 rounded-full bg-violet-400 animate-pulse"></span>
        Directorate of Research, Development &amp; Innovation
      </div>
      <h1 class="text-4xl sm:text-5xl lg:text-[3.6rem] font-black text-white leading-[1.06] tracking-tight">
        Advancing <span class="r-grad-text">Knowledge,</span><br>
        Innovation &amp; Impact
      </h1>
      <p class="mt-6 max-w-xl text-base sm:text-lg leading-8 text-white/55">
        Rathinam Global University offers dynamic, research-intensive Doctoral Programmes (Ph.D.)
        that cultivate scholarly excellence, ethical inquiry and interdisciplinary knowledge creation —
        in alignment with <strong class="text-white/80">UGC Regulations 2022</strong>,
        <strong class="text-white/80">NHEQF 2023</strong> and <strong class="text-white/80">NEP 2020</strong>.
      </p>
      <div class="mt-9 flex flex-col sm:flex-row gap-4">
        <a href="https://admissions.rathinamcollege.edu.in/?utm_source=research&utm_medium=hero&utm_campaign=phd" target="_blank" rel="noopener"
           class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-violet-600 to-sky-500 px-7 py-3.5 text-sm font-bold text-white shadow-lg shadow-violet-500/30 hover:scale-105 transition-transform">
          Apply for Ph.D. <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a href="./metrics.php" class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/20 px-7 py-3.5 text-sm font-bold text-white/85 hover:bg-white/5 hover:border-white/40 transition">
          Explore R&amp;D Metrics
        </a>
      </div>
      <!-- trust badges -->
      <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-3 text-white/40 text-xs font-semibold uppercase tracking-wider">
        <span>UGC 2022</span><span class="h-1 w-1 rounded-full bg-white/20"></span>
        <span>NHEQF 2023</span><span class="h-1 w-1 rounded-full bg-white/20"></span>
        <span>NEP 2020</span><span class="h-1 w-1 rounded-full bg-white/20"></span>
        <span>NAAC A++</span>
      </div>
    </div>

    <!-- right: floating metric cards -->
    <div class="lg:col-span-5 grid grid-cols-2 gap-4">
      <?php
        $hero_cards = [
          ['312', 'Scopus / WoS / SCI publications', 'from-violet-500/20 to-violet-500/5', 'book-open', './scopus-wos-sci.php'],
          ['₹2.23 Cr', 'External research funding', 'from-emerald-500/20 to-emerald-500/5', 'wallet', './external-grants.php'],
          ['96', 'Patents filed · 20 granted', 'from-sky-500/20 to-sky-500/5', 'lightbulb', './patents.php'],
          ['549', 'Books & book chapters', 'from-fuchsia-500/20 to-fuchsia-500/5', 'library', './books-book-chapters.php'],
        ];
        foreach ($hero_cards as $i => $c):
      ?>
      <a href="<?php echo $c[4]; ?>" class="group rounded-2xl border border-white/10 bg-gradient-to-br <?php echo $c[2]; ?> backdrop-blur p-5 hover:border-white/25 transition <?php echo $i % 2 ? 'mt-6' : ''; ?>">
        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-white mb-4"><i data-lucide="<?php echo $c[3]; ?>" class="h-5 w-5"></i></div>
        <div class="text-3xl font-black text-white leading-none"><?php echo $c[0]; ?></div>
        <div class="mt-2 text-xs leading-5 text-white/55"><?php echo $c[1]; ?></div>
        <div class="mt-3 inline-flex items-center gap-1 text-[11px] font-bold text-violet-300 opacity-0 group-hover:opacity-100 transition">View <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div>
      </a>
      <?php endforeach; ?>
    </div>
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
      <p class="r-eyebrow text-violet-700 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span> Why Pursue Ph.D. at RGU</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Research excellence with global standards</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-6">
      <?php
        $why = [
          ['target', 'from-violet-600 to-violet-500', 'Original & Innovative Research', [
            'Original and innovative research', 'Interdisciplinary &amp; multidisciplinary inquiry',
            'Research-driven problem solving', 'Industry and societal relevance', 'Academic integrity &amp; ethical practice']],
          ['network', 'from-sky-600 to-sky-500', 'Strong Innovation Ecosystem', [
            'Research Development &amp; Innovation Council (RDIC)', 'Advanced labs &amp; Centres of Excellence',
            'Industry–academia collaboration', 'Incubation support via AIC-RaISE', 'Research funding &amp; sponsored projects', 'International exposure &amp; publication support']],
          ['graduation-cap', 'from-emerald-600 to-emerald-500', 'Outcome-Oriented Doctoral Education', [
            'Advanced research competencies', 'Critical &amp; analytical thinking',
            'Academic writing &amp; publication skills', 'Leadership &amp; mentoring abilities', 'Innovation &amp; entrepreneurship mindset', 'Global research dissemination']],
        ];
        foreach ($why as $i => $w):
      ?>
      <div class="r-card p-7 r-reveal d<?php echo $i+1; ?>">
        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br <?php echo $w[1]; ?> text-white shadow-lg mb-5"><i data-lucide="<?php echo $w[0]; ?>" class="h-6 w-6"></i></div>
        <h3 class="text-lg font-extrabold text-slate-900 mb-4"><?php echo $w[2]; ?></h3>
        <ul class="space-y-2.5">
          <?php foreach ($w[3] as $li): ?>
          <li class="flex items-start gap-2.5 text-sm text-slate-600">
            <svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-violet-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            <span><?php echo $li; ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
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
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-white">Measurable research momentum</h2>
      <p class="mt-4 text-white/55">Cumulative research output and impact recorded by the Directorate of Research, Development &amp; Innovation.</p>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
      <?php
        $glance = [
          ['count','312','','Publications', 'Scopus / WoS / SCI', './scopus-wos-sci.php'],
          ['count','549','','Books & Chapters', 'Authored & edited', './books-book-chapters.php'],
          ['count','96','','Patents Filed', '20 granted', './patents.php'],
          ['text','₹2.23 Cr','','External Grants', '93 funded projects', './external-grants.php'],
        ];
        foreach ($glance as $g):
      ?>
      <a href="<?php echo $g[5]; ?>" class="group rounded-2xl border border-white/10 bg-white/[0.04] backdrop-blur p-6 hover:bg-white/[0.07] transition r-reveal">
        <div class="text-4xl sm:text-5xl font-black text-white leading-none" <?php echo $g[0]==='count' ? 'data-count="'.$g[1].'"' : ''; ?>>
          <?php echo $g[0]==='count' ? '0' : $g[1]; ?>
        </div>
        <div class="mt-3 text-sm font-bold text-white/90"><?php echo $g[3]; ?></div>
        <div class="text-xs text-white/45"><?php echo $g[4]; ?></div>
        <div class="mt-4 inline-flex items-center gap-1 text-[11px] font-bold text-violet-300">Explore <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform"><path d="M5 12h14M13 6l6 6-6 6"/></svg></div>
      </a>
      <?php endforeach; ?>
    </div>
    <div class="mt-8 text-center r-reveal">
      <a href="./metrics.php" class="inline-flex items-center gap-2 rounded-xl bg-white/10 px-6 py-3 text-sm font-bold text-white hover:bg-white/15 transition">
        View full R&amp;D metrics &amp; impact <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ════════════════ DISCIPLINES ════════════════ -->
<section class="bg-white py-16 sm:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mb-12 r-reveal">
      <p class="r-eyebrow text-violet-700 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span> Research Disciplines Offered</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Doctoral research across diverse disciplines</h2>
      <p class="mt-4 text-slate-600">Specializations are aligned with emerging global trends, industry demands, sustainability goals and future technologies.</p>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
      <?php
        $disciplines = [
          ['cpu','Engineering & Technology'], ['brain-circuit','Computer Science & AI'],
          ['dna','Biotechnology'], ['microscope','Microbiology'],
          ['atom','Physics'], ['sigma','Mathematics'],
          ['briefcase','Commerce & Management'], ['brain','Psychology'],
          ['book-a','English'], ['languages','Tamil'],
          ['radio','Communication & Media'], ['shirt','Costume Design & Fashion'],
          ['leaf','Environmental Science'], ['shield-check','Cyber Security & Blockchain'],
          ['rocket','Digital Entrepreneurship'], ['activity','Behavioural Sciences'],
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
          $themes = ['Artificial Intelligence & Machine Learning','Quantum Computing','Robotics & Automation','Sustainable Technologies','Environmental Research','Biotechnology & Healthcare','Media & Digital Communication','Business Analytics & FinTech','Behavioural & Cognitive Sciences','Innovation & Entrepreneurship','Sustainable Development Goals (SDGs)','IoT & Blockchain','Data Science','Cyber Security'];
          foreach ($themes as $t) echo '<span class="rounded-full border border-white/25 bg-white/10 px-4 py-2 text-sm font-medium backdrop-blur">'.$t.'</span>';
        ?>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════ PROGRAMME MODES ════════════════ -->
<section class="bg-white py-16 sm:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mb-12 r-reveal">
      <p class="r-eyebrow text-violet-700 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span> Flexible Ph.D. Programme Modes</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Multiple pathways for doctoral research</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-6">
      <?php
        $modes = [
          ['Full-Time Ph.D.','clock','from-violet-600 to-violet-500',['With or without fellowship','Sponsored research / project support','Start-up integrated research opportunities']],
          ['Part-Time Ph.D.','briefcase','from-sky-600 to-sky-500',['Internal category for faculty &amp; staff','External category for industry professionals','For academicians &amp; working researchers']],
          ['Integrated Ph.D.','layers','from-emerald-600 to-emerald-500',['For eligible 4-year UG Honours degrees','Minimum 75% aggregate or equivalent','Direct pathway into doctoral research']],
        ];
        foreach ($modes as $i => $m):
      ?>
      <div class="r-card p-7 r-reveal d<?php echo $i+1; ?>">
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
    <div class="mt-8 r-reveal">
      <a href="./doctoral-programmes.php" class="inline-flex items-center gap-2 text-sm font-bold text-violet-700 hover:gap-3 transition-all">
        Read the full Doctoral Regulations 2026 <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ════════════════ RESEARCH OUTPUT EXPLORER ════════════════ -->
<section class="bg-[#f8fafc] py-16 sm:py-24 border-t border-slate-100">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mb-12 r-reveal">
      <p class="r-eyebrow text-violet-700 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span> Research Output</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Explore the complete research record</h2>
      <p class="mt-4 text-slate-600">Every publication, book, patent and grant — presented as searchable, year-wise tables.</p>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php
        $outputs = [
          ['book-open','Publications','312 indexed articles','Scopus / WoS / SCI peer-reviewed publications, year-wise.','./scopus-wos-sci.php','from-violet-600 to-violet-500'],
          ['library','Books & Book Chapters','549 titles','Authored and edited books & chapters with ISBN and publisher.','./books-book-chapters.php','from-fuchsia-600 to-fuchsia-500'],
          ['lightbulb','Patents','96 filed · 20 granted','Utility & design patents with status and application numbers.','./patents.php','from-sky-600 to-sky-500'],
          ['landmark','External Grants','₹2.23 Cr funded','Extramural grants from government agencies & industry.','./external-grants.php','from-emerald-600 to-emerald-500'],
          ['sprout','Internal Grants','₹86 L seed funding','Institutional seed grants nurturing early-stage research.','./internal-grants.php','from-amber-500 to-orange-500'],
          ['bar-chart-3','R&D Metrics','Citations · h-index · funding','Visual dashboards of citation, patent & funding growth.','./metrics.php','from-indigo-600 to-violet-500'],
        ];
        foreach ($outputs as $o):
      ?>
      <a href="<?php echo $o[4]; ?>" class="r-card group p-7 r-reveal">
        <div class="flex items-center justify-between mb-5">
          <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br <?php echo $o[5]; ?> text-white shadow-lg"><i data-lucide="<?php echo $o[0]; ?>" class="h-6 w-6"></i></div>
          <svg class="text-slate-300 group-hover:text-violet-500 group-hover:translate-x-1 transition" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M7 7h10v10"/></svg>
        </div>
        <h3 class="text-lg font-extrabold text-slate-900"><?php echo $o[1]; ?></h3>
        <p class="mt-0.5 text-sm font-bold text-violet-700"><?php echo $o[2]; ?></p>
        <p class="mt-2 text-sm leading-6 text-slate-500"><?php echo $o[3]; ?></p>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

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
        <p class="mt-4 text-xs text-slate-500"><strong class="text-slate-700">CET exemption</strong> for UGC/CSIR-NET-JRF, GATE, DBT-JRF, ICMR-JRF, INSPIRE, SET/SLET &amp; equivalent qualifiers.</p>
      </div>
    </div>
    <div class="lg:col-span-7 r-reveal d1">
      <ol class="relative border-l-2 border-violet-100 ml-3 space-y-7">
        <?php
          $steps = [
            ['Online Application Submission','Submit the duly completed online application (Form 1) before the notified deadline.'],
            ['Eligibility Verification','School-wise committee scrutinises qualifications and supporting documents.'],
            ['Common Entrance Test (CET)','70% weightage — 50% Research Methodology + 50% Subject Specialization.'],
            ['Research Presentation & Interview','30% weightage — present your skills, interests and research aptitude.'],
            ['Supervisor Allocation','Recognised supervisors are allotted based on research interest &amp; expertise.'],
          ];
          foreach ($steps as $i => $s):
        ?>
        <li class="ml-7">
          <span class="absolute -left-[14px] flex h-7 w-7 items-center justify-center rounded-full bg-gradient-to-br from-violet-600 to-sky-500 text-white text-xs font-black shadow"><?php echo $i+1; ?></span>
          <h4 class="text-base font-extrabold text-slate-900"><?php echo $s[0]; ?></h4>
          <p class="mt-1 text-sm text-slate-600 leading-6"><?php echo $s[1]; ?></p>
        </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
