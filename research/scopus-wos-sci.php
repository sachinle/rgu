<?php
$slug        = 'scopus-wos-sci';
$active      = 'publications';
$page_title  = 'Publications · Scopus / WoS / SCI';
$hero_kicker = 'Indexed Research Publications';
$hero_title  = 'Scopus / WoS / SCI';
$hero_grad   = 'Publications';
$hero_desc   = 'A complete, year-wise record of peer-reviewed research articles authored by RGU faculty and scholars, indexed in <strong class="text-white/80">Scopus</strong>, <strong class="text-white/80">Web of Science</strong> and the <strong class="text-white/80">Science Citation Index</strong> families (SCI, SCIE, SSCI, AHCI).';
$source_note = 'Source: Scopus_WoS_SCI.xlsx';
$extra_stats = [
  ['value' => 14,      'label' => 'Schools & departments', 'icon' => 'school', 'count' => true],
  ['value' => '1,255', 'label' => 'Scopus citations · 25–26', 'icon' => 'quote'],
];
include __DIR__ . '/partials/data-table.php';
