<?php
$slug        = 'internal-grants';
$active      = 'internal';
$page_title  = 'Internal Grants';
$hero_kicker = 'Institutional Seed Funding';
$hero_title  = 'Internal Research';
$hero_grad   = 'Grants';
$hero_desc   = 'Institutional seed grants awarded by RGU to nurture early-stage and student-led research, innovation and proof-of-concept projects across all schools — listed year-wise with the Principal Investigator, department, period and sanctioned amount.';
$source_note = 'Source: Internal Grants.xlsx';
$extra_stats = [
  ['value' => '₹86 L',       'label' => 'Total seed funding', 'icon' => 'wallet'],
  ['value' => 'RCAS SEED',   'label' => 'Flagship scheme',    'icon' => 'sprout'],
];
include __DIR__ . '/partials/data-table.php';
