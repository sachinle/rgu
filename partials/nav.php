<?php
    // $linkBase   — prefix for internal page links (defaults to current dir './')
    // $assetBase  — prefix for assets (logo/images). Defaults same as $linkBase.
    // $navMode    — 'transparent' (over banner) | 'solid' (own background, sticky)
    $linkBase  = $linkBase  ?? './';
    $assetBase = $assetBase ?? $linkBase;
    $navMode   = $navMode   ?? 'transparent';
?>
<style>
    .rgu-dropdown{visibility:hidden;opacity:0;transition:opacity .2s ease, visibility .2s ease;}
    .group:hover > .rgu-dropdown{visibility:visible;opacity:1;}
    .rgu-submenu{visibility:hidden;opacity:0;transition:opacity .2s ease, visibility .2s ease;}
    .rgu-subwrap:hover > .rgu-submenu{visibility:visible;opacity:1;}
    .rgu-nav-solid{background:rgba(5,11,31,0.95);backdrop-filter:blur(8px);position:sticky;top:0;}
</style>

<nav class="<?= $navMode === 'solid' ? 'rgu-nav-solid' : 'relative' ?> z-50 flex items-center justify-between px-4 py-3 md:px-10 md:py-5">
    <a href="<?= $linkBase ?>" class="flex-shrink-0">
        <img src="<?= $assetBase ?>assets/images/logo-360.webp" alt="Rathinam Global University Logo" id="rgu-nav-logo"
            width="180" height="56" fetchpriority="high" decoding="async"
            class="h-10 md:h-14 w-auto object-contain" style="filter: brightness(0) invert(1);">
    </a>

    <!-- Desktop Menu -->
    <ul class="hidden md:flex items-center gap-6 lg:gap-8 text-white text-sm lg:text-base font-medium">
        <li><a href="<?= $linkBase ?>" class="hover:text-gray-300 transition-colors">Home</a></li>

        <!-- About dropdown -->
        <li class="relative group">
            <button class="flex items-center gap-1 hover:text-gray-300 transition-colors">
                About
                <svg class="w-3 h-3" viewBox="0 0 20 20" fill="currentColor"><path d="M5.23 7.21a.75.75 0 011.06.02L10 11.06l3.71-3.83a.75.75 0 111.08 1.04l-4.25 4.39a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"/></svg>
            </button>
            <ul class="rgu-dropdown absolute right-0 top-full pt-2 w-56 z-50">
                <li class="rgu-subwrap relative bg-black/90 backdrop-blur-md border border-white/10">
                    <button class="w-full flex items-center justify-between px-4 py-2 hover:bg-white/10 transition-colors text-left">
                        Committee
                        <svg class="w-3 h-3" viewBox="0 0 20 20" fill="currentColor"><path d="M7.21 14.77a.75.75 0 01.02-1.06L11.06 10 7.23 6.29a.75.75 0 111.04-1.08l4.39 4.25a.75.75 0 010 1.08l-4.39 4.25a.75.75 0 01-1.06-.02z"/></svg>
                    </button>
                    <ul class="rgu-submenu absolute right-full top-0 w-64 bg-black/90 backdrop-blur-md border border-white/10">
                        <li><a href="<?= $linkBase ?>committees/statutory-committees.php" class="block px-4 py-2 hover:bg-white/10 transition-colors">Statutory Committees</a></li>
                        <li><a href="<?= $linkBase ?>committees/non-statutory-committees.php" class="block px-4 py-2 hover:bg-white/10 transition-colors">Non Statutory Committees</a></li>
                    </ul>
                </li>
                <li class="rgu-subwrap relative bg-black/90 backdrop-blur-md border border-white/10">
                    <button class="w-full flex items-center justify-between px-4 py-2 hover:bg-white/10 transition-colors text-left">
                        Administration
                        <svg class="w-3 h-3" viewBox="0 0 20 20" fill="currentColor"><path d="M7.21 14.77a.75.75 0 01.02-1.06L11.06 10 7.23 6.29a.75.75 0 111.04-1.08l4.39 4.25a.75.75 0 010 1.08l-4.39 4.25a.75.75 0 01-1.06-.02z"/></svg>
                    </button>
                    <ul class="rgu-submenu absolute right-full top-0 w-48 bg-black/90 backdrop-blur-md border border-white/10">
                        <li><a href="<?= $linkBase ?>research/registrar.php" class="block px-4 py-2 hover:bg-white/10 transition-colors">Registrar</a></li>
                    </ul>
                </li>
                <li class="bg-black/90 backdrop-blur-md border border-white/10">
                    <a href="<?= $linkBase ?>eoa/eoa.php" class="block px-4 py-2 hover:bg-white/10 transition-colors">EOA</a>
                </li>
                <li class="bg-black/90 backdrop-blur-md border border-white/10">
                    <a href="<?= $linkBase ?>iqac/iqac.php" class="block px-4 py-2 hover:bg-white/10 transition-colors">IQAC</a>
                </li>
            </ul>
        </li>

        <li><a href="<?= $linkBase ?>research/" class="hover:text-gray-300 transition-colors">Research</a></li>
    </ul>

    <!-- Mobile toggle -->
    <button id="rgu-mobile-toggle" class="md:hidden text-white p-2" aria-label="Toggle menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
</nav>

<div id="rgu-mobile-menu" class="hidden md:hidden relative z-40 bg-black/90 backdrop-blur-md text-white px-4 py-3 border-t border-white/10">
    <ul class="flex flex-col gap-1 text-sm">
        <li><a href="<?= $linkBase ?>" class="block py-2">Home</a></li>
        <li>
            <details>
                <summary class="py-2 cursor-pointer list-none flex items-center justify-between">About <span>+</span></summary>
                <div class="pl-3">
                    <details>
                        <summary class="py-2 cursor-pointer list-none flex items-center justify-between">Committee <span>+</span></summary>
                        <ul class="pl-3">
                            <li><a href="<?= $linkBase ?>committees/statutory-committees.php" class="block py-2">Statutory Committees</a></li>
                            <li><a href="<?= $linkBase ?>committees/non-statutory-committees.php" class="block py-2">Non Statutory Committees</a></li>
                        </ul>
                    </details>
                    <details>
                        <summary class="py-2 cursor-pointer list-none flex items-center justify-between">Administration <span>+</span></summary>
                        <ul class="pl-3">
                            <li><a href="<?= $linkBase ?>research/registrar.php" class="block py-2">Registrar</a></li>
                        </ul>
                    </details>
                    <a href="<?= $linkBase ?>eoa/eoa.php" class="block py-2">EOA</a>
                    <a href="<?= $linkBase ?>iqac/iqac.php" class="block py-2">IQAC</a>
                </div>
            </details>
        </li>
        <li><a href="<?= $linkBase ?>research/" class="block py-2">Research</a></li>
    </ul>
</div>
<script>
    (function(){
        var t=document.getElementById('rgu-mobile-toggle');
        var m=document.getElementById('rgu-mobile-menu');
        if(t&&m){t.addEventListener('click',function(){m.classList.toggle('hidden');});}
    })();
</script>
