<section class="py-20 my-10 md:my-14" style="background: linear-gradient(180deg, #080810, #0c0c18);">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-16">
        <div class="grid grid-cols-12 gap-3">
            <div class="col-span-12 md:col-span-6 space-y-3">
                <div class="flex mx-auto md:mx-0 gap-2 text-[#a3e635] uppercase text-xs font-medium tracking-[0.25em] p-3 rounded-full bg-[#141913] backdrop-blur-md w-max mb-5 border border-[#ffffff14]">
                    <span style="width:8px;height:8px;border-radius:50%;background:#a3e635;box-shadow:0 0 0 3px rgba(163,230,53,.3);animation:heroPulse 2s ease-in-out infinite" class="my-auto"></span>
                    <span>Beyond the Classroom</span>
                </div>
                <h2 style="font-family:'Sora',sans-serif;font-weight:900;font-size:clamp(1.8rem,5.5vw,4.6rem);color:#f8fafc;letter-spacing:-.03em;line-height:1.15;margin-bottom:24px" class="text-center md:text-start">Life @<span style="background:linear-gradient(90deg,#34d399,#38bdf8);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">RGU <br>Campus</span></h2>
                <p class="text-sm md:text-lg text-gray-500 font-normal text-center md:text-start">
                    University is more than a degree. It's where you discover yourself, build friendships, and develop lifelong skills.
                </p>
            </div>
            <div class="col-span-12 md:col-span-6 space-y-3">
                <div style="border-radius:28px;padding:28px;background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.08)">
                    <div style="display:flex;align-items:center;justify-content:space-between;padding:14px 0;border-bottom:1px solid rgba(255,255,255,.06)"><span style="font-family:'DM Sans',sans-serif;font-size:14px;color:rgba(255,255,255,.5);font-weight:500">Students</span><span style="font-family:'Sora',sans-serif;font-weight:900;font-size:26px;background:linear-gradient(90deg,#a3e635,#38bdf8);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">25,000+</span></div>
                    <div style="display:flex;align-items:center;justify-content:space-between;padding:14px 0;border-bottom:1px solid rgba(255,255,255,.06)"><span style="font-family:'DM Sans',sans-serif;font-size:14px;color:rgba(255,255,255,.5);font-weight:500">Acre Campus</span><span style="font-family:'Sora',sans-serif;font-weight:900;font-size:26px;background:linear-gradient(90deg,#a3e635,#38bdf8);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">300</span></div>
                    <div style="display:flex;align-items:center;justify-content:space-between;padding:14px 0;border-bottom:1px solid rgba(255,255,255,.06)"><span style="font-family:'DM Sans',sans-serif;font-size:14px;color:rgba(255,255,255,.5);font-weight:500">Student Clubs</span><span style="font-family:'Sora',sans-serif;font-weight:900;font-size:26px;background:linear-gradient(90deg,#a3e635,#38bdf8);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">40+</span></div>
                    <div style="display:flex;align-items:center;justify-content:space-between;padding:14px 0;border-bottom:none"><span style="font-family:'DM Sans',sans-serif;font-size:14px;color:rgba(255,255,255,.5);font-weight:500">Satisfaction</span><span style="font-family:'Sora',sans-serif;font-weight:900;font-size:26px;background:linear-gradient(90deg,#a3e635,#38bdf8);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">98%</span></div>
                </div>
            </div>
        </div>
    </div>
    <?php
      // Centralised gallery list (image, shape). Each item is rendered twice to support
      // the seamless marquee loop without duplicating markup in source.
      $gallery1 = [
        ['01','wide'], ['02','tall'], ['03','square'], ['04','wide'], ['05','square'],
        ['06','tall'], ['07','wide'], ['08','square'], ['09','wide'],
      ];
      $gallery2 = [
        ['10','wide'], ['11','square'], ['12','tall'], ['13','wide'], ['14','square'],
        ['15','tall'], ['16','wide'], ['17','square'],
      ];
      // Approx render dims (must match CSS) so the browser can reserve space (no CLS).
      $dims = [
        'wide'   => ['w' => 380, 'h' => 210],
        'square' => ['w' => 260, 'h' => 210],
        'tall'   => ['w' => 190, 'h' => 210],
      ];
      function render_gallery_row($items, $dims) {
        // Render twice for a seamless infinite-scroll loop (transform animates 0 → -50%).
        for ($pass = 0; $pass < 2; $pass++) {
          foreach ($items as $g) {
            [$id, $shape] = $g;
            $w = $dims[$shape]['w']; $h = $dims[$shape]['h'];
            // First pass is visible; second pass is the off-screen copy used purely
            // to fill the gap during the loop — mark it aria-hidden.
            $hidden = $pass === 1 ? ' aria-hidden="true"' : '';
            echo '<div class="gallery-card ' . $shape . '"' . $hidden . '><img src="assets/images/life/' . $id . '.webp" alt="' . ($pass === 0 ? 'Life at RGU' : '') . '" width="' . $w . '" height="' . $h . '" loading="lazy" decoding="async"></div>';
          }
        }
      }
    ?>
    <section class="gallery-section" aria-label="Life at RGU gallery">
        <div class="marquee marquee-left">
            <div class="marquee-track"><?php render_gallery_row($gallery1, $dims); ?></div>
        </div>
        <div class="marquee marquee-right">
            <div class="marquee-track"><?php render_gallery_row($gallery2, $dims); ?></div>
        </div>
    </section>

    <style>
        .gallery-section { background:#020312; overflow:hidden; padding:40px 0; }
        .marquee { overflow:hidden; width:100%; margin-bottom:22px; }
        .marquee-track { display:flex; gap:20px; width:max-content; will-change:transform; }
        .marquee-left .marquee-track  { animation: scrollLeft  45s linear infinite; }
        .marquee-right .marquee-track { animation: scrollRight 45s linear infinite; }
        .gallery-card { flex-shrink:0; overflow:hidden; border-radius:24px; background:#111827; }
        .gallery-card img { width:100%; height:100%; object-fit:cover; display:block; }
        .gallery-card.wide   { width:380px; height:210px; }
        .gallery-card.square { width:260px; height:210px; }
        .gallery-card.tall   { width:190px; height:210px; }
        @keyframes scrollLeft  { from { transform: translateX(0); }     to { transform: translateX(-50%); } }
        @keyframes scrollRight { from { transform: translateX(-50%); } to { transform: translateX(0); } }
        @media (max-width: 768px) {
            .gallery-card.wide   { width:260px; height:160px; }
            .gallery-card.square { width:180px; height:160px; }
            .gallery-card.tall   { width:140px; height:160px; }
            .marquee-track { gap:14px; }
        }
        /* Honor reduced-motion: don't burn CPU on infinite animation. */
        @media (prefers-reduced-motion: reduce) {
            .marquee-left .marquee-track,
            .marquee-right .marquee-track { animation: none; }
        }
    </style>
</section>
