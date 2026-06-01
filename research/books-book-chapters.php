<?php
$slug        = 'books-book-chapters';
$active      = 'books';
$page_title  = 'Books & Book Chapters';
$hero_kicker = 'Authored & Edited Volumes';
$hero_title  = 'Books &';
$hero_grad   = 'Book Chapters';
$hero_desc   = 'The complete catalogue of books and book chapters published by RGU faculty and research scholars across all schools — with authors, ISBN numbers and publishers.';
$source_note = 'Source: Books_Book Chapters.xlsx';
$extra_stats = [
  ['value' => 24,      'label' => 'Contributing departments', 'icon' => 'school', 'count' => true],
  ['value' => 'ISBN',  'label' => 'Registered titles',        'icon' => 'book-marked'],
];
include __DIR__ . '/partials/data-table.php';
