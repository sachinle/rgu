<?php
/* Research portal navbar. Set $active before including:
   home | programmes | metrics | publications | books | patents | external | internal */
$active = isset($active) ? $active : '';
function r_is($a, $name) { return $a === $name ? 'is-active' : ''; }
$output_pages = ['publications', 'books', 'patents', 'external', 'internal'];
$output_active = in_array($active, $output_pages, true);
?>
<nav class="r-nav sticky top-0 z-50 bg-white/85 backdrop-blur-xl border-b border-black/5">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 lg:h-[72px]">

      <!-- Logo -->
      <a href="./index.php" class="flex items-center gap-3 flex-shrink-0 min-w-0 mr-3">
        <img src="../assets/images/logo.webp" alt="Rathinam Global University" class="h-8 lg:h-9 w-auto max-w-[230px] sm:max-w-[290px] object-contain object-left">
        <span class="hidden 2xl:block h-7 w-px bg-slate-200"></span>
        <span class="hidden 2xl:flex flex-col leading-none">
          <span class="text-[15px] font-extrabold tracking-tight text-slate-900">Research</span>
          <span class="text-[10px] font-medium uppercase tracking-[0.18em] text-violet-700">& Innovation</span>
        </span>
      </a>

      <!-- Desktop links -->
      <div class="hidden xl:flex items-center gap-5 2xl:gap-7">
        <a href="./index.php" class="r-link text-sm font-medium text-slate-600 hover:text-violet-700 transition <?php echo r_is($active,'home'); ?>">Home</a>
        <a href="./doctoral-programmes.php" class="r-link text-sm font-medium text-slate-600 hover:text-violet-700 transition <?php echo r_is($active,'programmes'); ?>">Ph.D. Programmes</a>
        <a href="./metrics.php" class="r-link text-sm font-medium text-slate-600 hover:text-violet-700 transition <?php echo r_is($active,'metrics'); ?>">R&amp;D Metrics</a>

        <!-- Research Output dropdown -->
        <div class="r-dd">
          <button class="r-link inline-flex items-center gap-1 text-sm font-medium text-slate-600 hover:text-violet-700 transition <?php echo $output_active ? 'is-active' : ''; ?>">
            Research Output
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="r-dd-panel">
            <div class="rounded-2xl border border-slate-200 bg-white p-2 shadow-xl shadow-slate-900/10">
              <?php
                $links = [
                  ['publications', './scopus-wos-sci.php',     'Publications',        'Scopus / WoS / SCI indexed', 'book-open'],
                  ['books',        './books-book-chapters.php', 'Books &amp; Chapters', 'Authored books & chapters',  'library'],
                  ['patents',      './patents.php',             'Patents',             'Filed, published & granted', 'lightbulb'],
                  ['external',     './external-grants.php',     'External Grants',     'Funded research projects',   'landmark'],
                  ['internal',     './internal-grants.php',     'Internal Grants',     'Seed & institutional grants','sprout'],
                ];
                foreach ($links as $l) {
                  $is = $active === $l[0];
                  echo '<a href="'.$l[1].'" class="flex items-start gap-3 rounded-xl px-3 py-2.5 transition '.($is ? 'bg-violet-50' : 'hover:bg-slate-50').'">';
                  echo '<span class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-lg bg-gradient-to-br from-violet-600 to-sky-500 text-white"><i data-lucide="'.$l[4].'" class="h-4 w-4"></i></span>';
                  echo '<span class="min-w-0"><span class="block text-sm font-semibold text-slate-800">'.$l[2].'</span><span class="block text-xs text-slate-500">'.$l[3].'</span></span>';
                  echo '</a>';
                }
              ?>
            </div>
          </div>
        </div>

        <a href="../index.php" class="r-link text-sm font-medium text-slate-500 hover:text-violet-700 transition">RGU Home</a>

        <a href="https://admissions.rathinamcollege.edu.in/?utm_source=research&utm_medium=navbar&utm_campaign=phd"
           target="_blank" rel="noopener"
           class="inline-flex items-center gap-2 whitespace-nowrap rounded-xl bg-gradient-to-r from-violet-600 to-sky-500 px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-violet-500/25 hover:scale-105 transition-transform">
          Apply for Ph.D.
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>

      <!-- Hamburger -->
      <button id="r-mob-btn" class="xl:hidden p-2 rounded-xl border border-slate-200 text-slate-600" aria-label="Open menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>

    <!-- Mobile menu -->
    <div id="r-mob-menu" class="xl:hidden hidden pb-5 pt-1 space-y-1 border-t border-slate-100">
      <a href="./index.php" class="block rounded-xl px-3 py-2.5 text-sm font-medium <?php echo $active==='home'?'bg-violet-50 text-violet-700':'text-slate-700 hover:bg-slate-50'; ?>">Home</a>
      <a href="./doctoral-programmes.php" class="block rounded-xl px-3 py-2.5 text-sm font-medium <?php echo $active==='programmes'?'bg-violet-50 text-violet-700':'text-slate-700 hover:bg-slate-50'; ?>">Ph.D. Programmes</a>
      <a href="./metrics.php" class="block rounded-xl px-3 py-2.5 text-sm font-medium <?php echo $active==='metrics'?'bg-violet-50 text-violet-700':'text-slate-700 hover:bg-slate-50'; ?>">R&amp;D Metrics</a>

      <button data-r-acc="r-mob-output" class="flex w-full items-center justify-between rounded-xl px-3 py-2.5 text-sm font-medium <?php echo $output_active?'bg-violet-50 text-violet-700':'text-slate-700 hover:bg-slate-50'; ?>">
        Research Output
        <svg data-r-caret width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="transition-transform"><polyline points="6 9 12 15 18 9"/></svg>
      </button>
      <div id="r-mob-output" class="hidden pl-3 space-y-1">
        <a href="./scopus-wos-sci.php" class="block rounded-lg px-3 py-2 text-sm <?php echo $active==='publications'?'text-violet-700 font-semibold':'text-slate-600 hover:bg-slate-50'; ?>">Publications (Scopus / WoS / SCI)</a>
        <a href="./books-book-chapters.php" class="block rounded-lg px-3 py-2 text-sm <?php echo $active==='books'?'text-violet-700 font-semibold':'text-slate-600 hover:bg-slate-50'; ?>">Books &amp; Book Chapters</a>
        <a href="./patents.php" class="block rounded-lg px-3 py-2 text-sm <?php echo $active==='patents'?'text-violet-700 font-semibold':'text-slate-600 hover:bg-slate-50'; ?>">Patents</a>
        <a href="./external-grants.php" class="block rounded-lg px-3 py-2 text-sm <?php echo $active==='external'?'text-violet-700 font-semibold':'text-slate-600 hover:bg-slate-50'; ?>">External Grants</a>
        <a href="./internal-grants.php" class="block rounded-lg px-3 py-2 text-sm <?php echo $active==='internal'?'text-violet-700 font-semibold':'text-slate-600 hover:bg-slate-50'; ?>">Internal Grants</a>
      </div>

      <a href="../index.php" class="block rounded-xl px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50">RGU Home</a>
      <a href="https://admissions.rathinamcollege.edu.in/?utm_source=research&utm_medium=navmobile&utm_campaign=phd" target="_blank" rel="noopener"
         class="mt-2 block rounded-xl bg-gradient-to-r from-violet-600 to-sky-500 px-3 py-3 text-center text-sm font-bold text-white">Apply for Ph.D.</a>
    </div>
  </div>
</nav>
