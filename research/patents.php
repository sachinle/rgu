<?php
$slug        = 'patents';
$active      = 'patents';
$page_title  = 'Patents';
$hero_kicker = 'Intellectual Property';
$hero_title  = 'Patents Filed,';
$hero_grad   = 'Published & Granted';
$hero_desc   = 'A year-wise register of utility and design patents filed by RGU innovators — capturing the title, inventors, current status, application number and submission date for every filing.';
$source_note = 'Source: Patents.xlsx';
$extra_stats = [
  ['value' => 20,                  'label' => 'Patents granted',     'icon' => 'award', 'count' => true],
  ['value' => 'Utility + Design',  'label' => 'Patent categories',   'icon' => 'lightbulb'],
];
include __DIR__ . '/partials/data-table.php';
