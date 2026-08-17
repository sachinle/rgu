<?php
    $assetBase = $assetBase ?? './';
?>
<section id="ranking-excellence" class="container mx-auto px-4 sm:px-6 lg:px-8 xl:px-12 2xl:px-16 py-10 md:py-14 space-y-5 bg-[#f8fafc]">
    <div class="flex items-center gap-2 rounded-full border border-[#f59e0b]/20 bg-[#f8f3e6] px-[18px] py-[7px] w-max mx-auto">
        <!-- Pulse Dot -->
        <span class="h-[6px] w-[6px] rounded-full bg-[#f59e0b] animate-pulse"></span>
        <!-- Text -->
        <span class="text-[11px] font-medium uppercase tracking-[0.24em] text-[#f59e0b]">
            Global Benchmark
        </span>
    </div>
    <h2 class="text-4xl md:text-6xl font-extrabold text-center relative z-10">
        Ranking & <span style="background:linear-gradient(90deg,#7e22ce,#0284c7);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">Excellence</span>
    </h2>
    <p class="text-center text-md text-gray-500">
        Recognised nationally and globally for academic rigour, innovation,<br> and real-world impact.
    </p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 auto-rows-fr gap-3">
        <div class="bg-white rounded-2xl p-3 shadow-lg border border-zinc-200 space-y-3 h-full">
            <div style="width: 52px; height: 52px; border-radius: 16px; background: rgba(168, 85, 247, 0.07); border: 1.5px solid rgba(168, 85, 247, 0.19); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; transition: 0.4s;" class="p-1.5 overflow-hidden">
                <img src="<?= $assetBase ?>assets/images/gauge.png" alt="QS I-GAUGE Platinum Rank" width="40" height="40" loading="lazy" decoding="async" class="w-full h-full object-contain" />
            </div>

            <p class="text-xs uppercase text-[#a855f7] font-semibold tracking-[0.14em]">
                QS I-GAUGE
            </p>

            <p class="text-4xl font-bold text-2xl">
                PLATINUM
            </p>
            <p class="text-gray-500 text-xs font-medium tracking-[0.1em] uppercase">
                Rank
            </p>
            <p class="text-md text-gray-500">
                India's highest QS I-Gauge rating, recognising excellence across learning, employability, innovation, and global academic outlook.
            </p>
        </div>

        <div class="bg-white rounded-2xl p-3 shadow-lg border border-zinc-200 space-y-3 h-full">
            <div style="width:52px;height:52px;border-radius:16px;background:#38bdf812;border:1.5px solid #38bdf830;display:flex;align-items:center;justify-content:center;margin-bottom:20px;transition:all 0.4s" class="p-1.5 overflow-hidden">
                <img src="<?= $assetBase ?>assets/images/naac.png" alt="NAAC A++ Accreditation" width="40" height="40" loading="lazy" decoding="async" class="w-full h-full object-contain" />
            </div>

            <p class="text-xs uppercase text-[#38bdf8] font-semibold tracking-[0.14em]">
                ACCREDITED
            </p>

            <p class="text-4xl font-bold text-2xl">
                A++
            </p>
            <p class="text-gray-500 text-xs font-medium tracking-[0.1em] uppercase">
                BY NAAC
            </p>
            <p class="text-md text-gray-500">
                The highest grade by the National Assessment & Accreditation Council, affirming exceptional standards in teaching, research, and governance.
            </p>
        </div>

        <div class="bg-white rounded-2xl p-3 shadow-lg border border-zinc-200 space-y-3 h-full">
            <div style="width: 52px; height: 52px; border-radius: 16px; background: rgba(163, 230, 53, 0.07); border: 1.5px solid rgba(163, 230, 53, 0.19); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; transition: 0.4s;" class="p-1.5 overflow-hidden">
                <img src="<?= $assetBase ?>assets/images/nirf.png" alt="NIRF 9th Rank" width="40" height="40" loading="lazy" decoding="async" class="w-full h-full object-contain" />
            </div>

            <p class="text-xs uppercase text-[#a3e635] font-semibold tracking-[0.14em]">
                NIRF RANKING
            </p>

            <p class="text-4xl font-bold text-2xl">
                9TH
            </p>
            <p class="text-gray-500 text-xs font-medium tracking-[0.1em] uppercase">
                YEAR IN A ROW
            </p>
            <p class="text-md text-gray-500">
                Consistently featured in the Ministry of Education's National Institutional Ranking Framework for nine consecutive years — a testament to sustained excellence.
            </p>
        </div>

        <div class="bg-white rounded-2xl p-3 shadow-lg border border-zinc-200 space-y-3 h-full">
            <div style="width: 52px; height: 52px; border-radius: 16px; background: rgba(251, 146, 60, 0.07); border: 1.5px solid rgba(251, 146, 60, 0.19); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; transition: 0.4s;" class="p-1.5 overflow-hidden">
                <!-- Inline SVG (was a third-party img.icons8.com request): saves a
                     cross-origin round-trip on mobile and can't 404 on us. -->
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#fb923c" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full" role="img" aria-label="Global Reach 1000+ International Students">
                    <circle cx="12" cy="12" r="9"/>
                    <path d="M3 12h18"/>
                    <path d="M12 3a14 14 0 0 1 0 18a14 14 0 0 1 0-18z"/>
                </svg>
            </div>

            <p class="text-xs uppercase text-[#fb923c] font-semibold tracking-[0.14em]">
                GLOBAL REACH
            </p>

            <p class="text-4xl font-bold text-2xl">
                1000+
            </p>
            <p class="text-gray-500 text-xs font-medium tracking-[0.1em] uppercase">
                INT'L STUDENTS
            </p>
            <p class="text-md text-gray-500">
                Home to over 1,000 international students from 30+ countries, creating a vibrant, multicultural learning environment on campus.
            </p>
        </div>

        <div class="bg-white rounded-2xl p-3 shadow-lg border border-zinc-200 space-y-3 h-full">
            <div style="width: 52px; height: 52px; border-radius: 16px; background: rgba(52, 211, 153, 0.07); border: 1.5px solid rgba(52, 211, 153, 0.19); display: flex; align-items: center; justify-content: center; margin-bottom: 20px; transition: 0.4s;" class="p-1">
                <svg width="44" height="44" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                    <text x="6" y="38" font-family="'Sora', 'Outfit', system-ui, sans-serif" font-weight="900" font-size="34" fill="#059669">1</text>
                    <text x="27" y="23" font-family="'Sora', 'Outfit', system-ui, sans-serif" font-weight="800" font-size="18" fill="#059669">st</text>
                </svg>
            </div>

            <p class="text-xs uppercase text-[#34d399] font-semibold tracking-[0.14em]">
                INDIA'S
            </p>

            <p class="text-4xl font-bold text-2xl">
                FIRST
            </p>
            <p class="text-gray-500 text-xs font-medium tracking-[0.1em] uppercase">
                INDUSTRY INTEGRATED
            </p>
            <p class="text-md text-gray-500">
                Pioneers of India's first fully industry-integrated curriculum, co-designed with leading corporates to bridge academic learning and real-world readiness.
            </p>
        </div>

        <div class="bg-white rounded-2xl p-3 shadow-lg border border-zinc-200 space-y-3 h-full">
            <div style="width:52px;height:52px;border-radius:16px;background:#fbbf2412;border:1.5px solid #fbbf2430;display:flex;align-items:center;justify-content:center;margin-bottom:20px;transition:all 0.4s" class="p-1.5 overflow-hidden">
                <img src="<?= $assetBase ?>assets/images/AIM.png" alt="Atal Incubation Centre" width="40" height="40" loading="lazy" decoding="async" class="w-full h-full object-contain" />
            </div>

            <p class="text-xs uppercase text-[#fbbf24] font-semibold tracking-[0.14em]">
                IN-CAMPUS
            </p>

            <p class="text-4xl font-bold text-2xl">
                ATAL
            </p>
            <p class="text-gray-500 text-xs font-medium tracking-[0.1em] uppercase">
                INCUBATION CENTRE
            </p>
            <p class="text-md text-gray-500">
                A DST-recognised Atal Incubation Centre on campus, providing seed funding, mentoring, and infrastructure to nurture student-led startups and deep-tech innovations.
            </p>
        </div>
    </div>
</section>