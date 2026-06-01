<?php
$active     = 'metrics';
$page_title = 'R&D Metrics & Impact';
$page_desc  = 'Citation metrics (Scopus & Web of Science), patent metrics and extramural research funding at RGU.';

/* ---------- chart data (from the R&D Metrics deck) ---------- */
$scopus_hindex = [['2020-21',2],['2021-22',4],['2022-23',6],['2023-24',8],['2024-25',14],['2025-26',16]];
$scopus_cites  = [['2020-21',27],['2021-22',92],['2022-23',170],['2023-24',245],['2024-25',662],['2025-26',1255]];
$scopus_pubs   = [['2015',1],['2016',2],['2017',0],['2018',0],['2019',6],['2020',8],['2021',13],['2022',20],['2023',35],['2024',40],['2025',56],['2026*',25]];
$wos_hindex    = [['2020-21',2],['2021-22',2],['2022-23',3],['2023-24',4],['2024-25',11],['2025-26',15]];
$wos_cites     = [['2020-21',5],['2021-22',26],['2022-23',62],['2023-24',108],['2024-25',407],['2025-26',756]];
$wos_pubs      = [['2015',1],['2016',0],['2017',0],['2018',0],['2019',1],['2020',2],['2021',6],['2022',6],['2023',16],['2024',14],['2025',27],['2026*',15]];
$funding       = [['2020-21',60000],['2021-22',55000],['2022-23',743620],['2023-24',2265960],['2024-25',7282080],['2025-26',7468870],['2026-27',780000]];
$utility = [ // year, filed, published, granted
  ['2020-21',10,10,0],['2021-22',20,17,0],['2022-23',9,8,0],['2023-24',6,3,2],['2024-25',4,4,0],['2025-26',5,3,0]];
$design  = [ // year, filed, granted
  ['2023-24',13,9],['2024-25',15,6],['2025-26',13,3]];

function r_money_short($n){ $n=(float)$n; if($n>=1e7) return '₹'.rtrim(rtrim(number_format($n/1e7,2),'0'),'.').'Cr'; if($n>=1e5) return '₹'.rtrim(rtrim(number_format($n/1e5,2),'0'),'.').'L'; if($n>=1e3) return '₹'.rtrim(rtrim(number_format($n/1e3,1),'0'),'.').'K'; return '₹'.number_format($n); }

/* single-series bar chart */
function render_bars($data, $grad, $money=false){
  $max = 0; foreach($data as $d) $max = max($max,$d[1]); if($max<=0)$max=1;
  echo '<div class="r-bars" data-bars data-max="'.$max.'">';
  foreach($data as $d){
    $val = $money ? r_money_short($d[1]) : number_format($d[1]);
    echo '<div class="r-bar-col"><div class="r-bar '.$grad.'" data-v="'.$d[1].'"><span class="r-bar-val">'.$val.'</span></div><div class="r-bar-x">'.htmlspecialchars($d[0]).'</div></div>';
  }
  echo '</div>';
}
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/nav.php';
?>

<!-- ════════════════ HERO ════════════════ -->
<section class="relative overflow-hidden bg-[#080810] pt-16 pb-14 sm:pt-20 sm:pb-20">
  <div class="r-blob bg-violet-700/30 h-96 w-96 -top-28 -left-20"></div>
  <div class="r-blob bg-sky-600/25 h-80 w-80 top-0 right-0"></div>
  <div class="absolute inset-0 r-hero-grid pointer-events-none"></div>
  <div class="absolute top-0 inset-x-0 h-[2px] r-grad-bg"></div>
  <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <nav class="mb-6 flex items-center gap-2 text-xs text-white/40">
      <a href="./index.php" class="hover:text-white/80">Research</a><span>/</span><span class="text-violet-300">R&amp;D Metrics</span>
    </nav>
    <div class="r-eyebrow text-violet-300 mb-4"><span class="h-1.5 w-1.5 rounded-full bg-violet-400 animate-pulse"></span> Research Performance &amp; Impact</div>
    <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-white leading-[1.08] max-w-3xl">R&amp;D Metrics &amp; <span class="r-grad-text">Research Impact</span></h1>
    <p class="mt-5 max-w-2xl text-base leading-7 text-white/55">A transparent dashboard of RGU's research performance — citation growth on <strong class="text-white/80">Scopus</strong> and <strong class="text-white/80">Web of Science</strong>, intellectual property, and extramural research funding over the years.</p>

    <div class="mt-10 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
      <?php
        $kpis = [
          ['16','Scopus h-index','trending-up'],['15','WoS h-index','trending-up'],
          ['1,255','Scopus citations · 25–26','quote'],['756','WoS citations · 25–26','quote'],
          ['20','Patents granted','award'],['₹2.23 Cr','External funding','wallet'],
        ];
        foreach($kpis as $k){
          echo '<div class="rounded-2xl border border-white/10 bg-white/[0.04] backdrop-blur px-4 py-4">';
          echo '<div class="flex items-center gap-2 text-white/40 mb-2"><i data-lucide="'.$k[2].'" class="h-4 w-4"></i></div>';
          echo '<div class="text-2xl sm:text-3xl font-black text-white leading-none">'.$k[0].'</div>';
          echo '<div class="mt-1.5 text-[11px] font-medium uppercase tracking-wider text-white/45">'.$k[1].'</div></div>';
        }
      ?>
    </div>
  </div>
</section>

<!-- ════════════════ SCOPUS ════════════════ -->
<section class="bg-white py-16 sm:py-20">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex items-center gap-3 mb-10 r-reveal">
      <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-orange-500 to-amber-500 text-white shadow-lg"><i data-lucide="database" class="h-5 w-5"></i></span>
      <div>
        <p class="r-eyebrow text-orange-600"><span class="h-1.5 w-1.5 rounded-full bg-orange-500"></span> Scopus</p>
        <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900">Scopus Citation Metrics</h2>
      </div>
    </div>
    <div class="grid lg:grid-cols-3 gap-6">
      <div class="r-card p-6 r-reveal"><h3 class="text-sm font-extrabold text-slate-900 mb-1">h-index Growth</h3><p class="text-xs text-slate-500 mb-2">by academic year</p><?php render_bars($scopus_hindex,'r-bar-grad-purple'); ?></div>
      <div class="r-card p-6 r-reveal d1"><h3 class="text-sm font-extrabold text-slate-900 mb-1">Citations</h3><p class="text-xs text-slate-500 mb-2">by academic year</p><?php render_bars($scopus_cites,'r-bar-grad-purple'); ?></div>
      <div class="r-card p-6 r-reveal d2"><h3 class="text-sm font-extrabold text-slate-900 mb-1">Publications</h3><p class="text-xs text-slate-500 mb-2">by calendar year · <span class="italic">2026* till 21 Apr</span></p><?php render_bars($scopus_pubs,'r-bar-grad-purple'); ?></div>
    </div>
  </div>
</section>

<!-- ════════════════ WEB OF SCIENCE ════════════════ -->
<section class="bg-[#f8fafc] py-16 sm:py-20 border-y border-slate-100">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex items-center gap-3 mb-10 r-reveal">
      <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-emerald-600 to-green-500 text-white shadow-lg"><i data-lucide="globe" class="h-5 w-5"></i></span>
      <div>
        <p class="r-eyebrow text-emerald-600"><span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span> Web of Science</p>
        <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900">Web of Science Citation Metrics</h2>
      </div>
    </div>
    <div class="grid lg:grid-cols-3 gap-6">
      <div class="r-card p-6 r-reveal"><h3 class="text-sm font-extrabold text-slate-900 mb-1">h-index Growth</h3><p class="text-xs text-slate-500 mb-2">by academic year</p><?php render_bars($wos_hindex,'r-bar-grad-green'); ?></div>
      <div class="r-card p-6 r-reveal d1"><h3 class="text-sm font-extrabold text-slate-900 mb-1">Citations</h3><p class="text-xs text-slate-500 mb-2">by academic year</p><?php render_bars($wos_cites,'r-bar-grad-green'); ?></div>
      <div class="r-card p-6 r-reveal d2"><h3 class="text-sm font-extrabold text-slate-900 mb-1">Publications</h3><p class="text-xs text-slate-500 mb-2">by calendar year · <span class="italic">2026* till 21 Apr</span></p><?php render_bars($wos_pubs,'r-bar-grad-green'); ?></div>
    </div>
  </div>
</section>

<!-- ════════════════ PATENTS ════════════════ -->
<section class="bg-white py-16 sm:py-20">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex items-center gap-3 mb-10 r-reveal">
      <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-sky-600 to-indigo-500 text-white shadow-lg"><i data-lucide="lightbulb" class="h-5 w-5"></i></span>
      <div>
        <p class="r-eyebrow text-sky-600"><span class="h-1.5 w-1.5 rounded-full bg-sky-500"></span> Intellectual Property</p>
        <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900">Patent Metrics</h2>
      </div>
    </div>
    <div class="grid lg:grid-cols-2 gap-6">
      <!-- Utility -->
      <div class="r-card p-6 r-reveal">
        <div class="flex items-center justify-between mb-4">
          <h3 class="text-base font-extrabold text-slate-900">Utility Patents</h3>
          <div class="flex items-center gap-3 text-[11px] font-semibold">
            <span class="inline-flex items-center gap-1.5"><span class="h-2.5 w-2.5 rounded-sm bg-teal-600"></span>Filed</span>
            <span class="inline-flex items-center gap-1.5"><span class="h-2.5 w-2.5 rounded-sm bg-red-500"></span>Published</span>
            <span class="inline-flex items-center gap-1.5"><span class="h-2.5 w-2.5 rounded-sm bg-green-600"></span>Granted</span>
          </div>
        </div>
        <table class="w-full text-sm">
          <thead><tr class="text-left text-xs text-slate-500 border-b border-slate-200"><th class="py-2">Year</th><th class="py-2 text-center">Filed</th><th class="py-2 text-center">Published</th><th class="py-2 text-center">Granted</th></tr></thead>
          <tbody>
            <?php foreach($utility as $u): ?>
            <tr class="border-b border-slate-100">
              <td class="py-2.5 font-semibold text-slate-700"><?php echo $u[0]; ?></td>
              <td class="py-2.5 text-center"><span class="r-pill r-pill-filed"><?php echo $u[1]; ?></span></td>
              <td class="py-2.5 text-center"><span class="r-pill r-pill-published"><?php echo $u[2]; ?></span></td>
              <td class="py-2.5 text-center"><span class="r-pill r-pill-granted"><?php echo $u[3]; ?></span></td>
            </tr>
            <?php endforeach; ?>
            <tr class="font-extrabold text-slate-900"><td class="py-2.5">Total</td><td class="py-2.5 text-center">54</td><td class="py-2.5 text-center">45</td><td class="py-2.5 text-center">2</td></tr>
          </tbody>
        </table>
      </div>
      <!-- Design -->
      <div class="r-card p-6 r-reveal d1">
        <div class="flex items-center justify-between mb-4">
          <h3 class="text-base font-extrabold text-slate-900">Design Patents</h3>
          <div class="flex items-center gap-3 text-[11px] font-semibold">
            <span class="inline-flex items-center gap-1.5"><span class="h-2.5 w-2.5 rounded-sm bg-teal-600"></span>Filed</span>
            <span class="inline-flex items-center gap-1.5"><span class="h-2.5 w-2.5 rounded-sm bg-green-600"></span>Granted</span>
          </div>
        </div>
        <table class="w-full text-sm">
          <thead><tr class="text-left text-xs text-slate-500 border-b border-slate-200"><th class="py-2">Year</th><th class="py-2 text-center">Filed</th><th class="py-2 text-center">Granted</th></tr></thead>
          <tbody>
            <?php foreach($design as $d): ?>
            <tr class="border-b border-slate-100">
              <td class="py-2.5 font-semibold text-slate-700"><?php echo $d[0]; ?></td>
              <td class="py-2.5 text-center"><span class="r-pill r-pill-filed"><?php echo $d[1]; ?></span></td>
              <td class="py-2.5 text-center"><span class="r-pill r-pill-granted"><?php echo $d[2]; ?></span></td>
            </tr>
            <?php endforeach; ?>
            <tr class="font-extrabold text-slate-900"><td class="py-2.5">Total</td><td class="py-2.5 text-center">41</td><td class="py-2.5 text-center">18</td></tr>
          </tbody>
        </table>
        <p class="mt-4 text-xs text-slate-500">Combined: <strong class="text-slate-800">96 patents filed</strong>, <strong class="text-green-700">20 granted</strong> across utility &amp; design categories. <a href="./patents.php" class="text-violet-700 font-semibold hover:underline">View full patent register →</a></p>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════ EXTRAMURAL FUNDING ════════════════ -->
<section class="bg-[#0b1020] py-16 sm:py-20 relative overflow-hidden">
  <div class="r-blob bg-emerald-600/20 h-80 w-80 -bottom-24 left-1/4"></div>
  <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex items-center gap-3 mb-10 r-reveal">
      <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-emerald-500 to-lime-400 text-[#0b1020] shadow-lg"><i data-lucide="wallet" class="h-5 w-5"></i></span>
      <div>
        <p class="r-eyebrow text-emerald-300"><span class="h-1.5 w-1.5 rounded-full bg-emerald-400"></span> Extramural Funding</p>
        <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-white">External Research Funding Growth</h2>
      </div>
    </div>
    <div class="rounded-3xl border border-white/10 bg-white/[0.03] backdrop-blur p-6 sm:p-9 r-reveal">
      <div class="grid lg:grid-cols-[1fr_280px] gap-8 items-center">
        <div>
          <div class="rounded-2xl bg-white p-6">
            <?php render_bars($funding,'r-bar-grad-purple', true); ?>
          </div>
          <p class="mt-3 text-xs text-white/45">Funding in Rupees (₹) by academic year, as sanctioned by external agencies.</p>
        </div>
        <div class="space-y-4">
          <div class="rounded-2xl border border-white/10 bg-white/[0.05] p-5">
            <div class="text-3xl font-black text-white" data-count="2.23" data-dec="2" data-suffix=" Cr" data-prefix="₹">₹0 Cr</div>
            <div class="mt-1 text-xs text-white/50">Total external funding secured</div>
          </div>
          <div class="rounded-2xl border border-white/10 bg-white/[0.05] p-5">
            <div class="text-3xl font-black text-white" data-count="93">0</div>
            <div class="mt-1 text-xs text-white/50">Funded research projects</div>
          </div>
          <div class="rounded-2xl border border-white/10 bg-white/[0.05] p-5">
            <div class="text-3xl font-black text-white" data-count="38">0</div>
            <div class="mt-1 text-xs text-white/50">Distinct funding agencies</div>
          </div>
        </div>
      </div>
      <p class="mt-6 text-sm text-white/45">Funded by agencies including the <strong class="text-white/70">Department of Biotechnology (DBT)</strong>, <strong class="text-white/70">Indian National Science Academy (INSA)</strong>, <strong class="text-white/70">IKS Division, Ministry of Education</strong>, ICSSR, UGC-DAE, ICWA and more. <a href="./external-grants.php" class="text-emerald-300 font-semibold hover:underline">View all external grants →</a></p>
    </div>
  </div>
</section>

<!-- ════════════════ OUTPUT SUMMARY ════════════════ -->
<section class="bg-white py-16 sm:py-20">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mb-10 r-reveal">
      <p class="r-eyebrow text-violet-700 mb-3"><span class="h-1.5 w-1.5 rounded-full bg-violet-600"></span> Research Highlights</p>
      <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900">Cumulative research output</h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php
        $hl = [
          ['312','Scopus / WoS / SCI publications','book-open','./scopus-wos-sci.php','from-violet-600 to-violet-500'],
          ['549','Books &amp; book chapters','library','./books-book-chapters.php','from-fuchsia-600 to-fuchsia-500'],
          ['96','Patents filed (54 utility · 41 design)','lightbulb','./patents.php','from-sky-600 to-sky-500'],
          ['20','Patents granted','award','./patents.php','from-indigo-600 to-violet-500'],
          ['₹2.23 Cr','External research grants','landmark','./external-grants.php','from-emerald-600 to-emerald-500'],
          ['₹86 L','Internal seed grants','sprout','./internal-grants.php','from-amber-500 to-orange-500'],
        ];
        foreach($hl as $h){
          echo '<a href="'.$h[3].'" class="r-card group p-6 flex items-center gap-5 r-reveal">';
          echo '<span class="flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br '.$h[4].' text-white shadow-lg"><i data-lucide="'.$h[2].'" class="h-6 w-6"></i></span>';
          echo '<span><span class="block text-2xl font-black text-slate-900 leading-none">'.$h[0].'</span><span class="mt-1.5 block text-sm text-slate-500">'.$h[1].'</span></span>';
          echo '</a>';
        }
      ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
