<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#050508">
    <meta name="description" content="Discover Rathinam Global University, one of the best universities in Tamil Nadu and a leading deemed university in Coimbatore, offering industry-focused programs and global opportunities.">
    <meta name="google-site-verification" content="RMXPW9hR4uofEp4FIp4QOaQMtyqJJYN2ESvtlyt2VJY" />
    <meta name="robots" content="index,follow">
    <meta property="og:title" content="Best University in Tamil Nadu | Rathinam Global University">
    <meta property="og:description" content="Discover Rathinam Global University, one of the best universities in Tamil Nadu and a leading deemed university in Coimbatore, offering industry-focused programs and global opportunities.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="./assets/images/logo.webp">
    <link rel="icon" type="image/png" href="./assets/images/favicon.png">
    <title>Best University in Tamil Nadu | Rathinam Global University</title>
    <!-- Minimal inline CSS: only what must be set before any external stylesheet
         loads (body bg, base font, sr-only utility). Tailwind + style.css follow
         render-blocking to ensure stable layout (no CLS). -->
    <style>
      body{margin:0!important;padding:0!important;background:#fff;color:#1e293b;font-family:'Outfit',system-ui,-apple-system,Segoe UI,Roboto,sans-serif}
      .sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}
    </style>

    <!-- Preconnect / preload critical origins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://i.ytimg.com" crossorigin>

    <!-- Preload above-the-fold banner image (responsive WebP). -->
    <link rel="preload" as="image" href="./assets/images/earth-half-mobileview-480.webp" type="image/webp" media="(max-width: 767px)" fetchpriority="high">
    <link rel="preload" as="image" href="./assets/images/earth-half-1200.webp" type="image/webp" media="(min-width: 768px)" fetchpriority="high">

    <!-- Fonts: load async to avoid render-block -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Sora:wght@300;400;600;700;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Sora:wght@300;400;600;700;800&display=swap"></noscript>

    <!-- Precompiled Tailwind utilities + site CSS — render-blocking on purpose.
         These define the layout for the banner and most of the page; async-loading
         them caused a massive CLS (~0.987) because content paints, then reflows.
         The render-block cost (~350ms) is far smaller than the CLS penalty. -->
    <link rel="stylesheet" href="./assets/css/tailwind.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Swiper CSS+JS: loaded once globally, deferred so it doesn't block render.
         Partials initialise their sliders inside DOMContentLoaded handlers. -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"></noscript>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
     <!-- Google tag (gtag.js) --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EKNZR4B5B8">
</script> 
<script> window.dataLayer = window.dataLayer || []; 
function gtag(){dataLayer.push(arguments);} 
gtag('js', new Date()); 
gtag('config', 'G-EKNZR4B5B8'); 
</script>
    <!-- Lucide icons are inlined as SVGs in the homepage partials (no runtime needed). -->
</head>

<body>
    <a href="#courses" class="sr-only focus:not-sr-only focus:fixed focus:top-2 focus:left-2 focus:z-[10001] focus:bg-white focus:text-black focus:px-3 focus:py-2 focus:rounded">Skip to main content</a>
    <?php include __DIR__ . '/partials/banner.php'; ?>
    <?php include __DIR__ . '/partials/marquee.php'; ?>
    <?php include __DIR__ . '/partials/live-admission.php'; ?>
    <?php include __DIR__ . '/partials/courses.php'; ?>
    <?php include __DIR__ . '/partials/rgu-different.php'; ?>
    <?php include __DIR__ . '/partials/campus-events.php'; ?>
    <?php include __DIR__ . '/partials/rathinam-tv.php'; ?>
    <?php include __DIR__ . '/partials/life-at-rgu.php'; ?>
    <?php include __DIR__ . '/partials/ranking-excellence.php'; ?>
    <?php include __DIR__ . '/partials/spotlight.php'; ?>
    <?php include __DIR__ . '/partials/inspiring-direction.php'; ?>
    <?php include __DIR__ . '/partials/footer.php'; ?>

    <script src="./assets/js/script.js" defer></script>
</body>

</html>