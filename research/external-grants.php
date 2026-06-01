<?php
$slug        = 'external-grants';
$active      = 'external';
$page_title  = 'External Grants';
$hero_kicker = 'Extramural Funded Research';
$hero_title  = 'External Research';
$hero_grad   = 'Grants';
$hero_desc   = 'Externally funded research grants, fellowships and sponsored projects secured by RGU Principal Investigators from government agencies, councils and industry partners — listed year-wise with funding agency, period and sanctioned amount.';
$source_note = 'Source: External Grants.xlsx';
$extra_stats = [
  ['value' => '₹2.23 Cr', 'label' => 'Total external funding', 'icon' => 'wallet'],
  ['value' => 38,         'label' => 'Funding agencies',       'icon' => 'landmark', 'count' => true],
];
include __DIR__ . '/partials/data-table.php';
