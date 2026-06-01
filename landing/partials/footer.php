<!-- ═══════════════════════════════════════════════════════
     FILE: partials/footer.php
     ═══════════════════════════════════════════════════════ -->

<?php
$footerLinks = [
    'The RGU Way' => ['Global Certification', 'Internship Programme', 'Outbound Leadership', 'Global Immersion', 'Skill Passport', 'Growth Card'],
    'Programmes'  => ['Undergraduate', 'Postgraduate', 'Diploma Courses', 'Certificate Programmes', 'Online Learning', 'Executive Education'],
    'Campus Life' => ['Clubs & Societies', 'Sports & Fitness', 'Cultural Events', 'Student Housing', 'International Students', 'Scholarships'],
    'Connect'     => ['About Us', 'Faculty', 'Research', 'News & Media', 'Alumni Network', 'Contact'],
];

$socials = [
    [
        'label' => 'Twitter / X',
        'href'  => '#',
        'icon'  => '<path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>',
    ],
    [
        'label' => 'LinkedIn',
        'href'  => '#',
        'icon'  => '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>',
    ],
    [
        'label' => 'Facebook',
        'href'  => '#',
        'icon'  => '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>',
    ],
    [
        'label' => 'YouTube',
        'href'  => '#',
        'icon'  => '<path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-1.96C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.4 19.54C5.12 20 12 20 12 20s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-1.96A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/>',
    ],
];
?>

<footer id="contact" class="relative overflow-hidden"
        style="background: #050508; border-top: 1px solid rgba(255,255,255,0.06);">

    <!-- Top 5-color stripe -->
    <div class="h-1 w-full flex" aria-hidden="true">
        <?php foreach (['#a855f7','#38bdf8','#a3e635','#f472b6','#fb923c'] as $c): ?>
        <div class="flex-1" style="background: <?= $c ?>;"></div>
        <?php endforeach; ?>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6">

        <!-- Main grid -->
        <div class="py-16 grid lg:grid-cols-5 gap-12">

            <!-- Brand column -->
            <div class="lg:col-span-1 space-y-6">
                <a href="#" aria-label="RGU Home">
                    <div class="h-11 px-3 rounded-xl inline-flex items-center justify-center overflow-hidden"
                         style="background: rgba(255,255,255,0.95); box-shadow: 0 4px 16px rgba(0,0,0,.3);">
                        <img src="assets/images/logo.png" alt="RGU Logo" class="h-8 w-auto object-contain" />
                    </div>
                </a>

                <p class="text-slate-500 text-sm font-inter leading-relaxed">
                    Deemed to be University. Designed for the world. The RGU Way — Career Readiness + Global Readiness.
                </p>

                <!-- Social icons -->
                <div class="flex gap-2">
                    <?php foreach ($socials as $social): ?>
                    <a href="<?= $social['href'] ?>"
                       aria-label="<?= $social['label'] ?>"
                       class="w-9 h-9 rounded-xl flex items-center justify-center border transition-all duration-300 hover:bg-white/10 hover:scale-110"
                       style="background: rgba(255,255,255,.04); border-color: rgba(255,255,255,.1); color: rgba(255,255,255,.4);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             aria-hidden="true">
                            <?= $social['icon'] ?>
                        </svg>
                    </a>
                    <?php endforeach; ?>
                </div>

                <!-- Badge -->
                <div class="inline-flex items-center gap-2 px-3 py-2 rounded-xl text-xs font-inter"
                     style="background: rgba(163,230,53,.08); border: 1px solid rgba(163,230,53,.2); color: rgba(163,230,53,.8);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         aria-hidden="true">
                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                    </svg>
                    <span>Deemed to be University</span>
                </div>
            </div>

            <!-- Link columns -->
            <?php foreach ($footerLinks as $section => $items): ?>
            <div class="space-y-5">
                <h4 class="font-outfit font-bold text-xs tracking-[0.2em] uppercase text-slate-500"><?= htmlspecialchars($section) ?></h4>
                <ul class="space-y-2.5" role="list">
                    <?php foreach ($items as $item): ?>
                    <li>
                        <a href="#"
                           class="group text-sm text-slate-500 font-inter flex items-center gap-2 transition-colors duration-200 hover:text-slate-200"
                           style="text-decoration: none;">
                            <span class="w-1 h-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity flex-shrink-0"
                                  style="background: #a3e635;" aria-hidden="true"></span>
                            <?= htmlspecialchars($item) ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>

        </div>

        <!-- Contact row -->
        <div class="py-8 grid md:grid-cols-2 gap-6 border-t" style="border-color: rgba(255,255,255,.06);">

            <!-- Address -->
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="rgba(255,255,255,.25)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="mt-0.5 flex-shrink-0" aria-hidden="true">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
                <div>
                    <div class="text-slate-600 text-[10px] font-inter mb-1 tracking-wider uppercase font-bold">Address</div>
                    <div class="text-slate-400 text-sm font-inter">Rathinam College Campus, Coimbatore, Tamil Nadu — 641021</div>
                </div>
            </div>

            <!-- Phone -->
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                     stroke="rgba(255,255,255,.25)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="mt-0.5 flex-shrink-0" aria-hidden="true">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.63 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6.29 6.29l.87-.87a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                <div>
                    <div class="text-slate-600 text-[10px] font-inter mb-1 tracking-wider uppercase font-bold">Phone</div>
                    <div class="text-slate-400 text-sm font-inter">844 844 8909</div>
                </div>
            </div>

        </div>

        <!-- Bottom bar -->
        <div class="py-6 flex flex-col md:flex-row items-center justify-between gap-4 border-t"
             style="border-color: rgba(255,255,255,.06);">

            <p class="text-slate-600 text-xs font-inter">
                © <?= date('Y') ?> Rathinam Global University. All rights reserved.
            </p>

            <div class="flex gap-6">
                <?php foreach (['Privacy Policy', 'Terms of Use', 'Sitemap'] as $l): ?>
                <a href="#" class="text-slate-600 text-xs font-inter transition-colors hover:text-slate-300" style="text-decoration: none;">
                    <?= htmlspecialchars($l) ?>
                </a>
                <?php endforeach; ?>
            </div>

            <div class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full" style="background: #a3e635; animation: pulse 2s ease-in-out infinite;" aria-hidden="true"></span>
                <span class="text-slate-600 text-xs font-inter">The RGU Way</span>
            </div>
        </div>

    </div>
</footer>
