<?php
/* Shared <head> for the RGU Research portal.
   Set $page_title and (optionally) $page_desc before including. */
$page_title = isset($page_title) ? $page_title : 'Research';
$page_desc  = isset($page_desc) ? $page_desc : 'Research, innovation and doctoral programmes at Rathinam Global University.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <link rel="icon" type="image/png" href="../assets/images/favicon.png">
    <title><?php echo htmlspecialchars($page_title); ?> | Research · Rathinam Global University</title>
    <style>body{margin:0!important;padding:0!important}</style>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/research.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <noscript><style>.r-reveal{opacity:1!important;transform:none!important}.r-bar{height:auto!important}</style></noscript>
</head>
<body class="antialiased text-slate-800 bg-[#f8fafc]">
