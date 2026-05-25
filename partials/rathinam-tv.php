<section class="my-12 container mx-auto px-4 sm:px-6 lg:px-8">
  <div style="font-family:'Sora',sans-serif;font-size:20px;font-weight:800;color:#0f172a;margin-bottom:24px;display:flex;align-items:center;gap:12px"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;flex-shrink:0">
      <path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"></path>
      <path d="M9.75 15.02l5.75-3.02-5.75-3.02v6.04z"></path>
    </svg>Rathinam TV</div>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <div class="relative w-full overflow-hidden">
    <div class="swiper rathinamTvSlider w-full">
      <div class="swiper-wrapper">
        <div class="swiper-slide m-2">
          <div class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-xl">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/izya9OIsDGk?rel=0&modestbranding=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="swiper-slide m-2">
          <div class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-xl">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/d_Q-_dRdxaY?rel=0&modestbranding=1" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="swiper-slide m-2">
          <div class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-xl">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/niMsbCsmV5g?rel=0&modestbranding=1" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="swiper-slide m-2">
          <div class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-xl">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/SPC74ZVd9OA?rel=0&modestbranding=1" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="swiper-slide m-2">
          <div class="relative w-full aspect-video rounded-2xl overflow-hidden shadow-xl">
            <iframe class="absolute inset-0 w-full h-full" src="https://www.youtube.com/embed/HxUJA3_hoto?rel=0&modestbranding=1" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="swiper-pagination mt-6"></div>
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const rathinamTvSlider = new Swiper('.rathinamTvSlider', {
      slidesPerView: 3,
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      speed: 900,

      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 3,
        },
      },
    });
  </script>

  <style>
    .swiper-pagination {
      display: flex;
      justify-content: center;
      gap: 8px;
    }

    .swiper-pagination-bullet {
      width: 8px;
      height: 8px;
      background: #cbd5e1;
      opacity: 0.7;
      border-radius: 999px;
      transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
      width: 28px;
      background: linear-gradient(to right, #a855f7, #38bdf8);
      opacity: 1;
    }
  </style>
</section>