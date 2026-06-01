<?php
/* ============================================================
   Shared full-page renderer for a spreadsheet dataset.
   A page sets the following then includes this file:
     $slug, $active, $page_title
     $hero_kicker, $hero_title, $hero_grad (optional), $hero_desc
     $extra_stats  (optional) = [ ['value'=>'₹2.23 Cr','label'=>'Total funding','icon'=>'wallet'], ... ]
     $source_note  (optional) string
   ============================================================ */

$D = json_decode(file_get_contents(__DIR__ . '/../data/' . $slug . '.json'), true);
$headers = $D['headers'];
$ncols   = count($headers);
$years   = count($D['groups']);
$count   = $D['count'];

/* ---- helpers ---- */
function r_inr($num) {
    if ($num === '' || !is_numeric($num)) return htmlspecialchars((string)$num);
    $num = (float)$num; $neg = $num < 0; $num = abs($num);
    $s = (string) round($num);
    $last3 = substr($s, -3); $rest = substr($s, 0, -3);
    $out = $rest !== '' ? preg_replace('/\B(?=(\d{2})+(?!\d))/', ',', $rest) . ',' . $last3 : $last3;
    return ($neg ? '-' : '') . '₹' . $out;
}
function r_inr_compact($n) {
    $n = (float)$n;
    if ($n >= 1e7) return '₹' . rtrim(rtrim(number_format($n / 1e7, 2), '0'), '.') . ' Cr';
    if ($n >= 1e5) return '₹' . rtrim(rtrim(number_format($n / 1e5, 2), '0'), '.') . ' L';
    return '₹' . number_format($n);
}
/* column roles */
$col_sno = $col_amount = $col_status = -1;
foreach ($headers as $i => $h) {
    $hl = strtolower($h);
    if ($col_sno === -1 && strpos($hl, 's.no') !== false) $col_sno = $i;
    if (strpos($hl, 'amount') !== false) $col_amount = $i;
    if ($hl === 'status') $col_status = $i;
}

include __DIR__ . '/head.php';
include __DIR__ . '/nav.php';
?>

<!-- ============ HERO ============ -->
<section class="relative overflow-hidden bg-[#080810] pt-14 pb-12 sm:pt-20 sm:pb-16">
  <div class="r-blob bg-violet-700/30 h-80 w-80 -top-24 -left-16"></div>
  <div class="r-blob bg-sky-600/20 h-72 w-72 top-10 right-0"></div>
  <div class="absolute inset-0 r-hero-grid pointer-events-none"></div>
  <div class="absolute top-0 inset-x-0 h-[2px] r-grad-bg"></div>

  <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <nav class="mb-6 flex items-center gap-2 text-xs text-white/40">
      <a href="./index.php" class="hover:text-white/80">Research</a>
      <span>/</span>
      <span class="text-white/70">Research Output</span>
      <span>/</span>
      <span class="text-violet-300"><?php echo htmlspecialchars($hero_title); ?></span>
    </nav>

    <div class="r-eyebrow text-violet-300 mb-4">
      <span class="h-1.5 w-1.5 rounded-full bg-violet-400 animate-pulse"></span>
      <?php echo htmlspecialchars($hero_kicker); ?>
    </div>
    <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-white leading-[1.08] max-w-3xl">
      <?php echo htmlspecialchars($hero_title); ?>
      <?php if (!empty($hero_grad)): ?><br><span class="r-grad-text"><?php echo htmlspecialchars($hero_grad); ?></span><?php endif; ?>
    </h1>
    <p class="mt-5 max-w-2xl text-base leading-7 text-white/55"><?php echo $hero_desc; ?></p>

    <!-- Stat strip -->
    <div class="mt-9 flex flex-wrap gap-3 sm:gap-4">
      <?php
        $stats = [];
        $stats[] = ['value' => $count, 'label' => 'Total records', 'icon' => 'database', 'count' => true];
        $stats[] = ['value' => $years, 'label' => 'Academic years', 'icon' => 'calendar-range', 'count' => true];
        if (!empty($extra_stats)) foreach ($extra_stats as $s) $stats[] = $s;
        foreach ($stats as $s):
      ?>
      <div class="flex-1 min-w-[140px] rounded-2xl border border-white/10 bg-white/[0.04] backdrop-blur px-4 py-4">
        <div class="flex items-center gap-2 text-white/40 mb-2"><i data-lucide="<?php echo $s['icon']; ?>" class="h-4 w-4"></i></div>
        <div class="text-2xl sm:text-3xl font-black text-white leading-none"
          <?php if (!empty($s['count'])): ?>data-count="<?php echo (float)$s['value']; ?>"<?php endif; ?>>
          <?php echo !empty($s['count']) ? '0' : htmlspecialchars($s['value']); ?>
        </div>
        <div class="mt-1.5 text-[11px] font-medium uppercase tracking-wider text-white/45"><?php echo htmlspecialchars($s['label']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ TABLE ============ -->
<section class="bg-[#f8fafc] py-10 sm:py-14">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

    <!-- Toolbar -->
    <div class="mb-5 flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
      <div>
        <h2 class="text-xl font-extrabold tracking-tight text-slate-900"><?php echo htmlspecialchars($D['title']); ?> — Full Record</h2>
        <p class="mt-1 text-sm text-slate-500">
          Showing <span id="r-result-count" class="font-bold text-violet-700"><?php echo number_format($count); ?></span>
          of <?php echo number_format($count); ?> entries<?php if (!empty($source_note)) echo ' · ' . htmlspecialchars($source_note); ?>.
        </p>
      </div>
      <div class="relative w-full md:w-80">
        <svg class="pointer-events-none absolute left-4 top-1/2 -translate-y-1/2 text-slate-400" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        <input id="r-table-search" type="search" class="r-search" placeholder="Search title, author, school…" aria-label="Search records">
      </div>
    </div>

    <div class="r-table-wrap r-reveal">
      <div class="r-table-scroll">
        <table class="r-table" style="min-width:820px;">
          <thead>
            <tr>
              <?php foreach ($headers as $i => $h): ?>
                <th<?php echo ($i === $col_amount) ? ' style="text-align:right;"' : ''; ?>><?php echo htmlspecialchars($h); ?></th>
              <?php endforeach; ?>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($D['groups'] as $gi => $g): ?>
            <?php if ($g['label'] !== ''): ?>
              <tr class="r-group-row" data-group="g<?php echo $gi; ?>">
                <th colspan="<?php echo $ncols; ?>"><?php echo htmlspecialchars($g['label']); ?></th>
              </tr>
            <?php endif; ?>
            <?php foreach ($g['rows'] as $row):
                $cells = $row['cells'];
                $rowcls = !empty($row['total']) ? 'r-total-row' : '';
            ?>
              <tr class="<?php echo $rowcls; ?>" data-group="g<?php echo $gi; ?>">
                <?php foreach ($cells as $ci => $cell): ?>
                  <?php
                    $cls = ''; $style = ''; $html = htmlspecialchars($cell);
                    if ($ci === $col_sno) $cls = 'r-col-sno';
                    if ($ci === $col_amount) {
                        $style = ' style="text-align:right;"';
                        if (is_numeric($cell) && $cell !== '') $html = '<span class="r-amount">' . r_inr($cell) . '</span>';
                    }
                    if ($ci === $col_status && $cell !== '') {
                        $lc = strtolower($cell);
                        $pc = strpos($lc, 'grant') !== false ? 'r-pill-granted' : (strpos($lc, 'publish') !== false ? 'r-pill-published' : 'r-pill-filed');
                        $html = '<span class="r-pill ' . $pc . '">' . htmlspecialchars($cell) . '</span>';
                    }
                  ?>
                  <td class="<?php echo $cls; ?>"<?php echo $style; ?>><?php echo $html; ?></td>
                <?php endforeach; ?>
              </tr>
            <?php endforeach; ?>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div id="r-no-results" class="r-no-results">
        <p class="text-base font-semibold text-slate-600">No records match your search.</p>
        <p class="mt-1 text-sm">Try a different keyword, author name, school or year.</p>
      </div>
    </div>

    <p class="mt-4 text-xs text-slate-400">
      Data compiled by the Directorate of Research, Development &amp; Innovation, RGU. Figures are cumulative and updated periodically.
    </p>
  </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
