<!-- ═══════════════════════════════════════════════════════
     FILE: partials/navbar.php
     ═══════════════════════════════════════════════════════ -->

<nav id="navbar" aria-label="Main navigation">
    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">

        <!-- Logo -->
        <a href="#" class="flex items-center flex-shrink-0">
            <img
                src="assets/images/logo.png"
                alt="RGU — Rathinam Global University"
                class="h-10 w-auto object-contain drop-shadow-lg transition-transform duration-300 hover:scale-105" />
        </a>

        <!-- Desktop Nav Links -->
        <div class="hidden lg:flex items-center gap-1">
            <a href="#about" class="nav-link">About<span class="nav-link-underline"></span></a>
            <a href="#rgu-way" class="nav-link">The RGU Way<span class="nav-link-underline"></span></a>
            <a href="#programs" class="nav-link">Programs<span class="nav-link-underline"></span></a>
            <a href="#life" class="nav-link">Life @ RGU<span class="nav-link-underline"></span></a>
            <a href="#contact" class="nav-link">Contact<span class="nav-link-underline"></span></a>
        </div>

        <!-- Desktop CTAs -->
        <div class="hidden lg:flex items-center gap-3">
            <a href="#explore"
                class="px-5 py-2.5 rounded-xl text-sm font-semibold font-inter border transition-all duration-300 hover:bg-white/10"
                style="border-color: rgba(255,255,255,0.22); color: rgba(255,255,255,0.75); text-decoration: none;">
                Explore
            </a>
            <a href="#apply"
                class="px-6 py-2.5 rounded-xl text-sm font-bold font-inter text-black transition-all duration-300 hover:brightness-110 hover:scale-[1.02]"
                style="background: linear-gradient(90deg,#a3e635,#34d399); box-shadow: 0 4px 16px rgba(163,230,53,.30); text-decoration: none;">
                Apply Now →
            </a>
        </div>

        <!-- Mobile Hamburger -->
        <button
            id="mobile-menu-toggle"
            class="lg:hidden p-2 rounded-lg border transition-all duration-200 hover:bg-white/10"
            style="border-color: rgba(255,255,255,0.2); color: rgba(255,255,255,0.8);"
            aria-label="Toggle navigation menu"
            aria-expanded="false"
            aria-controls="mobile-menu">
            <!-- Hamburger Icon -->
            <svg id="icon-menu" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="4" y1="6" x2="20" y2="6" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="4" y1="18" x2="20" y2="18" />
            </svg>
            <!-- Close Icon (hidden by default) -->
            <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none;">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>
    </div>

    <!-- Mobile Drawer -->
    <div id="mobile-menu"
        class="lg:hidden px-6 py-4 space-y-1 border-t"
        style="background: rgba(8,8,16,0.96); backdrop-filter: blur(24px); border-color: rgba(255,255,255,0.08);">

        <a href="#about" class="block px-4 py-3 text-sm rounded-xl transition-all duration-200 hover:bg-white/[0.06]" style="color: rgba(255,255,255,0.7); text-decoration: none;" onclick="closeMobileMenu()">About</a>
        <a href="#rgu-way" class="block px-4 py-3 text-sm rounded-xl transition-all duration-200 hover:bg-white/[0.06]" style="color: rgba(255,255,255,0.7); text-decoration: none;" onclick="closeMobileMenu()">The RGU Way</a>
        <a href="#programs" class="block px-4 py-3 text-sm rounded-xl transition-all duration-200 hover:bg-white/[0.06]" style="color: rgba(255,255,255,0.7); text-decoration: none;" onclick="closeMobileMenu()">Programs</a>
        <a href="#life" class="block px-4 py-3 text-sm rounded-xl transition-all duration-200 hover:bg-white/[0.06]" style="color: rgba(255,255,255,0.7); text-decoration: none;" onclick="closeMobileMenu()">Life @ RGU</a>
        <a href="#contact" class="block px-4 py-3 text-sm rounded-xl transition-all duration-200 hover:bg-white/[0.06]" style="color: rgba(255,255,255,0.7); text-decoration: none;" onclick="closeMobileMenu()">Contact</a>

        <div class="flex gap-3 pt-3">
            <a href="#explore"
                class="flex-1 text-center px-4 py-2.5 rounded-xl text-sm font-semibold border transition-all duration-200 hover:bg-white/10"
                style="border-color: rgba(255,255,255,0.22); color: rgba(255,255,255,0.8); text-decoration: none;">
                Explore
            </a>
            <a href="#apply"
                class="flex-1 text-center px-4 py-2.5 rounded-xl text-sm font-bold text-black"
                style="background: linear-gradient(90deg,#a3e635,#34d399); text-decoration: none;">
                Apply Now →
            </a>
        </div>
    </div>
</nav>