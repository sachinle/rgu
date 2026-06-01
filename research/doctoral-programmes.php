<?php
$active     = 'programmes';
$page_title = 'Doctoral Programmes & Regulations 2026';
$page_desc  = 'Ph.D. programmes, disciplines, eligibility, selection, committees and the Doctoral Regulations 2026 of Rathinam Global University.';

/* ---- Disciplines & specializations (Regulations 2026, Table 1) ---- */
$disciplines = [
  ['Engineering / Technology','cpu','Computer Science &amp; Information, Electronics &amp; Communication, Mechanical, Civil, Environmental, Electrical &amp; Electronics, Information Science; Environmental Science &amp; Technology'],
  ['Biotechnology','dna','Plant, Animal, Environmental, Nano, Microbial &amp; Molecular Biology, Genetic Engineering, Food, Biodiversity, Conservation, Cancer Biology'],
  ['Microbiology','microscope','Bacteriology, Virology, Mycology, Immunology, Molecular Biology, Genetic Engineering, Environmental, Food'],
  ['Mathematics','sigma','Topology, Graph Theory, Fluid Dynamics, Number Theory, Operational Research, Computational Mathematics'],
  ['Computer Science','brain-circuit','Data Science &amp; Analytics; AI, GenAI, ML, DL, NLP; Image Processing, Networks, Cyber &amp; Information Security, Digital Forensics; Cloud, Quantum, Parallel, Mobile &amp; Green Computing; IoT, Robotics &amp; Automation, Blockchain; AR/VR/MR; Computer Vision, HCI, Computational Intelligence, Digital Twin'],
  ['Commerce','briefcase','Finance, Marketing, Logistics, Banking &amp; Insurance, Fintech, HRM, International Business, Taxation, e-Commerce, Tourism &amp; Hospitality, Business Analytics, Strategic Management, ESG &amp; Sustainable Business, Digital Entrepreneurship, Behavioural Economics, Human Capital Management'],
  ['Management','trending-up','Finance, Marketing, Logistics, Banking &amp; Insurance, Fintech, HRM, International Business, Business Analytics, Strategic &amp; Innovation-oriented Management, Agri-Business, AI-enabled Management Practices, Sustainable Business &amp; ESG, Digital Entrepreneurship &amp; Innovation Management'],
  ['English','book-a','English Literature, Comparative Literature, English Language Teaching, Linguistics'],
  ['Tamil','languages','Bhakti Literature (Nayanmars, Saivism), Vaishnavism, Ethical Literature (Thirukkural), Short &amp; Folk Literature, Modern Literature (Poetry, Short Stories), Epigraphy &amp; Palm-leaf Manuscripts'],
  ['Psychology','brain','Clinical &amp; Health, Counselling, Behavioural, Organizational, Educational, Developmental, Forensic, Sports, Cross-Cultural, Cognitive &amp; Behavioural Neuroscience, Positive Psychology, Psycholinguistics, Cyber/Digital, Psychometrics, Military/Aviation'],
  ['Physics','atom','Plasma Physics, Material Science, Optics, Quantum Modelling, Astrophysics, Crystal Growth, Thin Film Technology, Soft-Matter Physics, Bio-Physics, Electro-Chemical Applications'],
  ['Costume Design &amp; Fashion','shirt','Textile &amp; Apparel Design, Textile &amp; Clothing, Fashion &amp; Textile, Textile &amp; Apparel Management, Polymer/Fiber/Textile Sciences, Apparel &amp; Textile Technology, Sustainable Textile, Textile Engineering &amp; Science'],
  ['Communication','radio','Mass, Visual, Corporate, Development, Political, Broadcast, Health Communication; Integrated Marketing, Advertising &amp; Brand, Social Media, Animation/VFX/Gaming, Journalism, Film/OTT/TV Studies, Digital &amp; New Media, PR, Media Psychology, AI &amp; Media'],
];

/* ---- Committees (Regulations 2026, Tables 3-7) ---- */
$committees = [
  ['Research Development &amp; Innovation Council','Administers the Ph.D. programmes; formulates research policy, monitors quality and promotes industry–academia collaboration.',
    [['Vice-Chancellor','Chairperson'],['Director – Research Programmes','Convener'],['Director – Academics','Member'],['Director – R&amp;D','Member'],['Director – AIC-RaISE','Member'],['Dean','Member'],['Professor – IISc / IIT / NIT','Member'],['Professor – RGU','Member'],['Professor – Other University','Member'],['Industry Expert','Member'],['Deputy Director – Research Programmes','Member-Secretary']]],
  ['Research Supervisors Selection Committee','Scrutinises and recommends eligible faculty for recognition as Ph.D. supervisors per UGC 2022 &amp; RGU 2026 regulations.',
    [['Vice-Chancellor','Chairperson'],['Registrar','Member'],['Director – Research Programmes','Convener'],['Director – Academics','Member'],['Dean','Member'],['Dean','Member'],['Deputy Director – Research Programmes','Member-Secretary']]],
  ['Scholars Selection Committee','Scrutinises applications, conducts selection &amp; interviews, recommends admissions and allocates supervisors.',
    [['Vice-Chancellor','Chairperson'],['Director – Research Programmes','Convener'],['Director – Academics','Member'],['Dean','Member'],['Dean','Member'],['Deputy Director – Research Programmes','Member-Secretary']]],
  ['Doctoral Advisory Committee (DAC)','Constituted for each scholar; reviews proposal, guides methodology, monitors progress every 6 months and recommends synopsis &amp; thesis submission.',
    [['Dean / Associate Dean / Senior Professor','Chairperson'],['Research Supervisor','Convener'],['Head of Department / Senior Professor','Coordinator'],['Co-Supervisor (if applicable)','Member'],['External Expert (Academic)','Member'],['External Expert (Academic / Industry)','Member']]],
  ['Moral &amp; Ethics Committee','Ensures ethical research conduct, reviews proposals for ethical compliance and prevents research misconduct.',
    [['Vice-Chancellor&rsquo;s Nominee','Chairperson'],['Director – Research Programmes','Convener'],['Supervisor','Coordinator'],['Professor – RGU','Member'],['External / Industry Expert','Member'],['Deputy Director – Research Programmes','Member-Secretary']]],
];

/* ---- TOC ---- */
$toc = [
  ['overview','Overview &amp; Preamble'],
  ['objectives','Programme Objectives'],
  ['disciplines','Disciplines &amp; Specializations'],
  ['modes','Programme Modes'],
  ['eligibility','Eligibility'],
  ['duration','Duration &amp; Relaxations'],
  ['selection','Selection &amp; CET'],
  ['committees','Committees'],
  ['supervisor','Supervisor Recognition'],
  ['coursework','Course Work'],
  ['journey','Research → Thesis → Viva'],
  ['award','Award of Degree'],
  ['ethics','Ethics &amp; IPR'],
];
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/nav.php';
?>

<!-- ════════════════ HERO ════════════════ -->
<section class="relative overflow-hidden bg-[#080810] pt-16 pb-14 sm:pt-20 sm:pb-20">
  <div class="r-blob bg-violet-700/30 h-96 w-96 -top-28 -left-20"></div>
  <div class="r-blob bg-sky-600/25 h-80 w-80 top-0 right-0"></div>
  <div class="absolute inset-0 r-hero-grid pointer-events-none"></div>
  <div class="absolute top-0 inset-x-0 h-[2px] r-grad-bg"></div>
  <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <nav class="mb-6 flex items-center gap-2 text-xs text-white/40">
      <a href="./index.php" class="hover:text-white/80">Research</a><span>/</span><span class="text-violet-300">Ph.D. Programmes</span>
    </nav>
    <div class="r-eyebrow text-violet-300 mb-4"><span class="h-1.5 w-1.5 rounded-full bg-violet-400 animate-pulse"></span> Doctoral Programmes · Regulations 2026</div>
    <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-white leading-[1.08] max-w-3xl">Doctor of Philosophy <span class="r-grad-text">(Ph.D.)</span></h1>
    <p class="mt-5 max-w-2xl text-base leading-7 text-white/55">The complete framework governing doctoral research at RGU — disciplines, eligibility, selection, supervision, course work, thesis evaluation and the award of degree, fully aligned with <strong class="text-white/80">UGC (MS &amp; Procedure for Award of Ph.D. Degree) Regulations 2022</strong>, <strong class="text-white/80">NHEQF 2023</strong> and <strong class="text-white/80">NEP 2020</strong>.</p>
    <div class="mt-8 flex flex-wrap gap-3">
      <span class="r-chip border-white/15 bg-white/[0.05] text-white/70"><i data-lucide="calendar-check" class="h-3.5 w-3.5"></i> June–July &amp; Dec–Jan sessions</span>
      <span class="r-chip border-white/15 bg-white/[0.05] text-white/70"><i data-lucide="clock" class="h-3.5 w-3.5"></i> 3–6 year duration</span>
      <span class="r-chip border-white/15 bg-white/[0.05] text-white/70"><i data-lucide="globe-2" class="h-3.5 w-3.5"></i> English medium</span>
    </div>
  </div>
</section>

<!-- ════════════════ BODY (TOC + CONTENT) ════════════════ -->
<section class="bg-[#f8fafc] py-12 sm:py-16">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 grid lg:grid-cols-[260px_1fr] gap-10">

    <!-- TOC -->
    <aside class="hidden lg:block">
      <div class="sticky top-24 r-toc">
        <p class="text-xs font-extrabold uppercase tracking-[0.18em] text-slate-400 mb-4">On this page</p>
        <nav class="space-y-1 border-l border-slate-200">
          <?php foreach ($toc as $t): ?>
            <a href="#<?php echo $t[0]; ?>" class="block -ml-px border-l-2 border-transparent pl-4 py-1.5 text-sm text-slate-600 hover:border-violet-500 hover:text-violet-700 transition"><?php echo $t[1]; ?></a>
          <?php endforeach; ?>
        </nav>
        <a href="https://admissions.rathinamcollege.edu.in/?utm_source=research&utm_medium=toc&utm_campaign=phd" target="_blank" rel="noopener" class="mt-6 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-violet-600 to-sky-500 px-4 py-3 text-sm font-bold text-white shadow-lg shadow-violet-500/25 hover:scale-[1.02] transition">Apply for Ph.D.</a>
      </div>
    </aside>

    <!-- CONTENT -->
    <div class="r-prose space-y-12 min-w-0">

      <!-- Overview -->
      <article id="overview" class="r-card p-7 sm:p-9 scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-4">Overview &amp; Preamble</h2>
        <p class="mb-4">The Ph.D. is the highest academic qualification awarded to a scholar who demonstrates advanced knowledge, independent research capability, critical inquiry and a significant original contribution to knowledge in a discipline or interdisciplinary area — in alignment with <strong>Level 8 of the UGC NHEQF, 2023</strong>.</p>
        <p>Scholars undertake ethically responsible, innovative research culminating in a thesis of academic, societal, scientific or professional relevance, evaluated by a duly constituted Board of Examiners. The degree is awarded in accordance with the <strong>UGC (Minimum Standards and Procedure for Award of Ph.D. Degree) Regulations, 2022</strong>.</p>
      </article>

      <!-- Objectives -->
      <article id="objectives" class="r-card p-7 sm:p-9 scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-5">Programme Objectives</h2>
        <div class="grid sm:grid-cols-2 gap-4">
          <?php
            $objs = [
              ['Advanced disciplinary knowledge','Cultivate critical thinking, analytical reasoning and problem-solving consistent with Level 8 of the NHEQF, 2023.'],
              ['Research competencies','Equip scholars with research methodology, data analysis, academic writing, publication ethics and global dissemination skills.'],
              ['Original &amp; ethical inquiry','Investigate complex problems through independent, interdisciplinary and ethically responsible research.'],
              ['Innovation &amp; impact','Foster creativity, entrepreneurship and application of findings to societal challenges &amp; UN SDGs.'],
              ['Professional values','Develop ethical, constitutional and social values with leadership, collaboration and mentoring skills.'],
              ['Global quality standards','Ensure doctoral education aligned with national &amp; global standards, integrity and mobility (NEP 2020).'],
            ];
            foreach ($objs as $i => $o):
          ?>
          <div class="rounded-xl border border-slate-100 bg-slate-50/60 p-4">
            <div class="flex items-center gap-2 mb-1.5"><span class="flex h-6 w-6 items-center justify-center rounded-full bg-violet-600 text-white text-xs font-black"><?php echo $i+1; ?></span><h4 class="text-sm font-extrabold text-slate-900"><?php echo $o[0]; ?></h4></div>
            <p class="text-sm text-slate-600 leading-6"><?php echo $o[1]; ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </article>

      <!-- Disciplines -->
      <article id="disciplines" class="r-card p-7 sm:p-9 scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-2">Disciplines &amp; Specializations</h2>
        <p class="mb-6 text-sm">Doctoral degrees are offered across the following faculties/disciplines with specialization:</p>
        <div class="space-y-3">
          <?php foreach ($disciplines as $d): ?>
          <div class="rounded-xl border border-slate-100 p-4 hover:border-violet-200 hover:bg-violet-50/30 transition">
            <div class="flex items-start gap-3">
              <span class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-violet-600 to-sky-500 text-white"><i data-lucide="<?php echo $d[1]; ?>" class="h-4 w-4"></i></span>
              <div class="min-w-0">
                <h4 class="text-sm font-extrabold text-slate-900"><?php echo $d[0]; ?></h4>
                <p class="mt-0.5 text-[13px] leading-6 text-slate-600"><?php echo $d[2]; ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </article>

      <!-- Modes -->
      <article id="modes" class="r-card p-7 sm:p-9 scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-5">Programme Modes</h2>
        <div class="space-y-4">
          <?php
            $pmodes = [
              ['Full-Time','With or without Institute Fellowship support, or under sponsored research / project support.'],
              ['Full-Time (Start-up Integrated)','Full-time registration under a sponsored start-up or innovation grant.'],
              ['Part-Time (Internal)','For RGU faculty members &amp; staff who satisfy the minimum eligibility criteria.'],
              ['Part-Time (External)','For professionals, industry personnel, academicians &amp; researchers in other organisations (NOC required).'],
              ['Integrated Ph.D.','For candidates with an eligible 4-year/8-semester UG Honours degree (min. 75% aggregate).'],
            ];
            foreach ($pmodes as $m):
          ?>
          <div class="flex items-start gap-4 rounded-xl border border-slate-100 p-4">
            <span class="mt-0.5 flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg bg-violet-50 text-violet-700"><i data-lucide="check" class="h-4 w-4"></i></span>
            <div><h4 class="text-sm font-extrabold text-slate-900"><?php echo $m[0]; ?></h4><p class="mt-0.5 text-sm text-slate-600 leading-6"><?php echo $m[1]; ?></p></div>
          </div>
          <?php endforeach; ?>
        </div>
      </article>

      <!-- Eligibility -->
      <article id="eligibility" class="r-card p-7 sm:p-9 scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-4">Eligibility</h2>
        <ul class="space-y-3">
          <?php
            $elig = [
              'A postgraduate degree (or recognised equivalent) with a minimum of <strong>55% marks</strong> in aggregate or equivalent grade, and a minimum of 17 years of formal education.',
              'A relaxation of <strong>5% marks</strong> for SC/ST/OBC (non-creamy layer), Differently-Abled and EWS categories as per UGC norms.',
              'Candidates without fellowship must qualify the <strong>Common Eligibility/Entrance Test (CET)</strong> conducted by RGU.',
              'Part-Time (Internal &amp; External) applicants must submit a <strong>No Objection Certificate (NOC)</strong> from the employer.',
              'Foreign qualifications require an AIU equivalence certificate; foreign scholars must obtain Government of India clearance.',
              'Integrated Ph.D.: 4-year UG Honours degree with a minimum of <strong>75% aggregate</strong> or equivalent.',
              'RGU does <strong>not</strong> conduct Ph.D. programmes through distance education mode.',
            ];
            foreach ($elig as $e) echo '<li class="flex items-start gap-2.5 text-sm text-slate-600"><svg class="mt-0.5 h-4 w-4 flex-shrink-0 text-violet-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg><span>'.$e.'</span></li>';
          ?>
        </ul>
      </article>

      <!-- Duration -->
      <article id="duration" class="r-card p-7 sm:p-9 scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-2">Programme Duration &amp; Relaxations</h2>
        <p class="mb-5 text-sm">Minimum duration is <strong>3 years</strong> (incl. course work), extendable to a maximum of <strong>6 years</strong> from the date of admission.</p>
        <div class="overflow-x-auto rounded-xl border border-slate-200">
          <table class="w-full text-sm" style="min-width:560px">
            <thead class="bg-slate-900 text-slate-100">
              <tr><th class="px-4 py-3 text-left font-semibold">Mode</th><th class="px-4 py-3 text-center font-semibold">PG (M.A./M.Sc./M.Com./MCA/MBA)</th><th class="px-4 py-3 text-center font-semibold">PG (M.E./M.Tech./M.S.)</th><th class="px-4 py-3 text-center font-semibold">M.Phil.</th><th class="px-4 py-3 text-center font-semibold">UG Honours</th></tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
              <tr><td class="px-4 py-3 font-bold text-slate-800">Full-Time</td><td class="px-4 py-3 text-center">3 – 6 yrs</td><td class="px-4 py-3 text-center">2 – 6 yrs</td><td class="px-4 py-3 text-center">2 – 6 yrs</td><td class="px-4 py-3 text-center text-slate-300">—</td></tr>
              <tr><td class="px-4 py-3 font-bold text-slate-800">Part-Time</td><td class="px-4 py-3 text-center">4 – 6 yrs</td><td class="px-4 py-3 text-center">3 – 6 yrs</td><td class="px-4 py-3 text-center">3 – 6 yrs</td><td class="px-4 py-3 text-center text-slate-300">—</td></tr>
              <tr><td class="px-4 py-3 font-bold text-slate-800">Integrated</td><td class="px-4 py-3 text-center text-slate-300">—</td><td class="px-4 py-3 text-center text-slate-300">—</td><td class="px-4 py-3 text-center text-slate-300">—</td><td class="px-4 py-3 text-center">4 – 6 yrs</td></tr>
            </tbody>
          </table>
        </div>
        <div class="mt-5 grid sm:grid-cols-2 gap-3 text-sm">
          <div class="rounded-xl bg-violet-50/60 border border-violet-100 p-4"><strong class="text-violet-800">Re-registration:</strong> up to +2 years (total ≤ 8 years), at twice the regular fee.</div>
          <div class="rounded-xl bg-violet-50/60 border border-violet-100 p-4"><strong class="text-violet-800">Women &amp; PwD (&gt;40%):</strong> up to +2 years (total ≤ 10 years); Maternity/Child-care leave up to 240 days.</div>
        </div>
      </article>

      <!-- Selection -->
      <article id="selection" class="r-card p-7 sm:p-9 scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-5">Scholars Selection &amp; CET</h2>
        <div class="grid sm:grid-cols-2 gap-5 mb-5">
          <div class="rounded-2xl border border-slate-100 p-5">
            <div class="text-4xl font-black text-violet-700">70<span class="text-xl">%</span></div>
            <h4 class="mt-1 text-sm font-extrabold text-slate-900">Common Entrance Test (CET)</h4>
            <p class="mt-1 text-sm text-slate-600">50% Research Methodology + 50% Subject Specialization. Minimum 50% required to qualify for interview.</p>
          </div>
          <div class="rounded-2xl border border-slate-100 p-5">
            <div class="text-4xl font-black text-sky-600">30<span class="text-xl">%</span></div>
            <h4 class="mt-1 text-sm font-extrabold text-slate-900">Presentation &amp; Interview</h4>
            <p class="mt-1 text-sm text-slate-600">Research presentation followed by a Q&amp;A assessing aptitude, articulation and analytical ability.</p>
          </div>
        </div>
        <div class="rounded-xl bg-emerald-50/70 border border-emerald-100 p-5">
          <h4 class="text-sm font-extrabold text-emerald-800 mb-2">CET Exemptions</h4>
          <p class="text-sm text-slate-600">Candidates qualified in <strong>UGC/CSIR-NET-JRF, SLET, SET, ICMR-JRF, DBT-JRF (BET), INSPIRE, ICAR-JRF, GATE, JEST or AICTE-QIP</strong> are exempted from the CET. JRFs in funded projects are selected through an expert interview.</p>
        </div>
        <p class="mt-4 text-sm text-slate-500">CET qualification is valid for two admission sessions in a year. Scholars may explore a suitable supervisor on a rotational basis (15 days each, max 3 choices) and finalise within a 45-day rotation period.</p>
      </article>

      <!-- Committees -->
      <article id="committees" class="scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-5 px-1">Committees &amp; Governance</h2>
        <div class="space-y-5">
          <?php foreach ($committees as $c): ?>
          <div class="r-card p-6 sm:p-7">
            <h3 class="text-lg font-extrabold text-slate-900"><?php echo $c[0]; ?></h3>
            <p class="mt-1.5 mb-4 text-sm text-slate-600 leading-6"><?php echo $c[1]; ?></p>
            <div class="overflow-x-auto rounded-xl border border-slate-200">
              <table class="w-full text-sm" style="min-width:420px">
                <thead class="bg-slate-50 text-slate-500"><tr><th class="px-4 py-2.5 text-left font-semibold w-12">#</th><th class="px-4 py-2.5 text-left font-semibold">Affiliation</th><th class="px-4 py-2.5 text-left font-semibold">Designation</th></tr></thead>
                <tbody class="divide-y divide-slate-100">
                  <?php foreach ($c[2] as $i => $row): ?>
                  <tr><td class="px-4 py-2.5 text-slate-400"><?php echo $i+1; ?></td><td class="px-4 py-2.5 text-slate-700"><?php echo $row[0]; ?></td><td class="px-4 py-2.5"><span class="r-pill <?php echo (stripos($row[1],'Chair')!==false)?'r-pill-granted':((stripos($row[1],'Convener')!==false||stripos($row[1],'Secretary')!==false)?'r-pill-published':''); ?>"><?php echo $row[1]; ?></span></td></tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </article>

      <!-- Supervisor -->
      <article id="supervisor" class="r-card p-7 sm:p-9 scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-3">Supervisor / Co-Supervisor Recognition</h2>
        <p class="mb-5 text-sm">Permanent RGU faculty (Professor/Associate/Assistant Professor) with a Ph.D. and the prescribed number of peer-reviewed publications (5 for Prof. &amp; Assoc. Prof., 3 for Asst. Prof.) may be recognised as supervisors. The number of scholars permitted at any time:</p>
        <div class="overflow-x-auto rounded-xl border border-slate-200">
          <table class="w-full text-sm" style="min-width:520px">
            <thead class="bg-slate-900 text-slate-100"><tr><th class="px-4 py-3 text-left font-semibold">Category</th><th class="px-4 py-3 text-center font-semibold">Max Ph.D. Scholars</th><th class="px-4 py-3 text-center font-semibold">International (supernumerary)</th><th class="px-4 py-3 text-center font-semibold">Total</th></tr></thead>
            <tbody class="divide-y divide-slate-100">
              <tr><td class="px-4 py-3 font-bold text-slate-800">Professor</td><td class="px-4 py-3 text-center">8</td><td class="px-4 py-3 text-center">2</td><td class="px-4 py-3 text-center font-black text-violet-700">10</td></tr>
              <tr><td class="px-4 py-3 font-bold text-slate-800">Associate Professor</td><td class="px-4 py-3 text-center">6</td><td class="px-4 py-3 text-center">2</td><td class="px-4 py-3 text-center font-black text-violet-700">8</td></tr>
              <tr><td class="px-4 py-3 font-bold text-slate-800">Assistant Professor</td><td class="px-4 py-3 text-center">4</td><td class="px-4 py-3 text-center">2</td><td class="px-4 py-3 text-center font-black text-violet-700">6</td></tr>
            </tbody>
          </table>
        </div>
      </article>

      <!-- Coursework -->
      <article id="coursework" class="r-card p-7 sm:p-9 scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-3">Course Work</h2>
        <p class="mb-5 text-sm">Scholars complete course work including <strong>Research Methodology</strong> and <strong>Research &amp; Publication Ethics</strong>, with a minimum of 55% marks. Credits vary by qualifying degree:</p>
        <div class="overflow-x-auto rounded-xl border border-slate-200">
          <table class="w-full text-sm" style="min-width:560px">
            <thead class="bg-slate-900 text-slate-100"><tr><th class="px-4 py-3 text-left font-semibold">Course</th><th class="px-4 py-3 text-center font-semibold">PG (MA/MSc…)</th><th class="px-4 py-3 text-center font-semibold">PG (ME/MTech…)</th><th class="px-4 py-3 text-center font-semibold">M.Phil.</th><th class="px-4 py-3 text-center font-semibold">UG Honours</th></tr></thead>
            <tbody class="divide-y divide-slate-100">
              <tr><td class="px-4 py-3 text-slate-700">Research Methodology</td><td class="px-4 py-3 text-center">4</td><td class="px-4 py-3 text-center">4</td><td class="px-4 py-3 text-center text-slate-300">—</td><td class="px-4 py-3 text-center">4</td></tr>
              <tr><td class="px-4 py-3 text-slate-700">Research &amp; Publication Ethics</td><td class="px-4 py-3 text-center">4</td><td class="px-4 py-3 text-center">4</td><td class="px-4 py-3 text-center">4</td><td class="px-4 py-3 text-center">4</td></tr>
              <tr><td class="px-4 py-3 text-slate-700">SWAYAM / MOOC / Specialization</td><td class="px-4 py-3 text-center">8</td><td class="px-4 py-3 text-center">4</td><td class="px-4 py-3 text-center">8</td><td class="px-4 py-3 text-center">12</td></tr>
              <tr class="bg-violet-50/60 font-black text-violet-800"><td class="px-4 py-3">Total Credits</td><td class="px-4 py-3 text-center">16</td><td class="px-4 py-3 text-center">12</td><td class="px-4 py-3 text-center">12</td><td class="px-4 py-3 text-center">20</td></tr>
            </tbody>
          </table>
        </div>
      </article>

      <!-- Journey -->
      <article id="journey" class="r-card p-7 sm:p-9 scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-6">Research → Synopsis → Thesis → Viva</h2>
        <ol class="relative border-l-2 border-violet-100 ml-3 space-y-7">
          <?php
            $journey = [
              ['Progress Review (every 6 months)','Progress reports verified by Supervisor, HoD &amp; Dean and reviewed by the DAC are mandatory for semester registration.'],
              ['Publications','Three original articles (peer-reviewed; Scopus/WoS; and SCI/SCIE/SSCI/AHCI) with the scholar as first author &amp; RGU supervisor as corresponding author, plus two international conference presentations — or a granted patent / DPIIT start-up in lieu.'],
              ['Pre-Synopsis &amp; Synopsis Meeting','Open pre-synopsis presentation; the DAC approves the work and a panel of 6 examiners (3 foreign, 3 Indian) is forwarded. Plagiarism must be &lt; 10%.'],
              ['Thesis Submission','3 hard copies + digital copy within a month of synopsis submission; permitted only after 36 months from registration.'],
              ['Thesis Evaluation','Evaluated by the Supervisor and at least two external examiners (one Indian, one foreign) within ~3 months.'],
              ['Viva-Voce Examination','Public defence before a Board (Supervisor – Convener, Indian Examiner, Foreign Examiner online). Revisions verified before final submission.'],
            ];
            foreach ($journey as $i => $j):
          ?>
          <li class="ml-7">
            <span class="absolute -left-[14px] flex h-7 w-7 items-center justify-center rounded-full bg-gradient-to-br from-violet-600 to-sky-500 text-white text-xs font-black"><?php echo $i+1; ?></span>
            <h4 class="text-base font-extrabold text-slate-900"><?php echo $j[0]; ?></h4>
            <p class="mt-1 text-sm text-slate-600 leading-6"><?php echo $j[1]; ?></p>
          </li>
          <?php endforeach; ?>
        </ol>
      </article>

      <!-- Award -->
      <article id="award" class="r-card p-7 sm:p-9 scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-4">Award of the Degree</h2>
        <div class="grid sm:grid-cols-3 gap-4">
          <div class="rounded-xl border border-slate-100 p-5"><i data-lucide="upload-cloud" class="h-6 w-6 text-violet-600 mb-3"></i><h4 class="text-sm font-extrabold text-slate-900">Shodhganga Deposition</h4><p class="mt-1 text-sm text-slate-600">The electronic thesis is deposited on the INFLIBNET <strong>Shodhganga</strong> portal before the degree is announced.</p></div>
          <div class="rounded-xl border border-slate-100 p-5"><i data-lucide="file-check" class="h-6 w-6 text-violet-600 mb-3"></i><h4 class="text-sm font-extrabold text-slate-900">Provisional Certificate</h4><p class="mt-1 text-sm text-slate-600">Issued by the Registrar within <strong>15 days</strong> of a satisfactory viva-voce to support career progression.</p></div>
          <div class="rounded-xl border border-slate-100 p-5"><i data-lucide="award" class="h-6 w-6 text-violet-600 mb-3"></i><h4 class="text-sm font-extrabold text-slate-900">Convocation</h4><p class="mt-1 text-sm text-slate-600">The Ph.D. degree is conferred by the Vice-Chancellor at the annual Convocation, in the presence of the University Mace.</p></div>
        </div>
      </article>

      <!-- Ethics -->
      <article id="ethics" class="r-card p-7 sm:p-9 scroll-mt-24 r-reveal">
        <h2 class="text-2xl font-black text-slate-900 mb-4">Research Ethics &amp; IPR</h2>
        <p class="mb-4 text-sm">RGU upholds ethical research conduct, academic honesty, responsible publication practices and strict anti-plagiarism standards (thesis plagiarism &lt; 10%, excluding self-plagiarism &amp; bibliography). Every scholar submits an ethics declaration at the first DAC meeting; high-risk studies require full ethics-committee approval.</p>
        <p class="text-sm">Intellectual Property generated by scholars is governed by the institutional IPR guidelines of the Office of the Director – Innovation &amp; Incubation. All intellectual outcomes carry the affiliation of RGU.</p>
        <div class="mt-5 rounded-xl bg-slate-900 p-5 text-center">
          <p class="text-sm text-slate-300">Prescribed forms (Form 1–14) &amp; annexures can be downloaded from the RGU website.</p>
        </div>
      </article>

    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
