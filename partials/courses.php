<section class="my-10 mx-auto px-4 sm:px-6 lg:px-8">

    <div class="flex items-center gap-2 rounded-full border border-purple-700/20 bg-purple-700/10 px-[18px] py-[7px] mb-[22px] w-max mx-auto">

        <!-- Pulse Dot -->
        <span class="h-[6px] w-[6px] rounded-full bg-purple-700 animate-pulse"></span>

        <!-- Text -->
        <span class="text-[11px] font-medium uppercase tracking-[0.24em] text-purple-700">
            Your Future Awaits
        </span>
    </div>
    <h2 class="text-4xl md:text-6xl font-extrabold text-center mb-0 md:mb-10 relative z-10">
        Courses Offered at <span style="background:linear-gradient(90deg,#7e22ce,#0284c7);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text">at RGU</span>
    </h2>
    <!-- Background Blobs -->
    <div class="bg-blobs">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
    </div>

    <!-- Main Container -->
    <main class="portal-container">
        <!-- Categories Grid/Asymmetric Layout -->
        <section class="categories-layout" id="categories-container">
            <!-- Centered Search -->
            <header class="search-section">
                <div class="search-box-wrapper">
                    <i data-lucide="search" class="search-icon"></i>
                    <input type="text" id="programme-search" placeholder="Search programmes, schools..."
                        aria-label="Search programmes">
                </div>
            </header>

            <!-- Card 1: Top Left -->
            <div class="card-wrapper" data-category="Quantum Science, Computing & AI" style="--x: 24%; --y: -6%; --delay: 0s;">
                <article class="category-card" id="card-computing" style="background: linear-gradient(135deg, rgb(142, 0, 196) 0%, rgb(184, 16, 214) 100%);
    border: 1px solid rgba(255, 255, 255, 0.4);
    box-shadow: rgba(0, 0, 0, 0.06) 0px 10px 24px, rgba(255, 255, 255, 0.4) 0px 2px 4px inset;">
                    <div class="card-header">
                        <div class="icon-box gradient-purple">
                            <i data-lucide="cpu"></i>
                        </div>
                        <span class="programme-count text-white">12 Programmes</span>
                    </div>
                    <h2 class="card-title text-white">Quantum Science, Computing & AI</h2>
                </article>
                <div class="chips-container">
                    <span class="chip">Machine Learning</span>
                    <span class="chip">Data Science</span>
                </div>
            </div>

            <!-- Card 2: Top Center -->
            <div class="card-wrapper" data-category="Engineering & Emerging Technologies"
                style="--x: 50%; --y: 2%; --delay: 0.3s;">
                <article class="category-card" id="card-engineering" style="background: linear-gradient(135deg, rgb(0, 115, 204) 0%, rgb(26, 158, 230) 100%);
    border: 1px solid rgba(255, 255, 255, 0.4);
    box-shadow: rgba(0, 0, 0, 0.06) 0px 10px 24px, rgba(255, 255, 255, 0.4) 0px 2px 4px inset;">
                    <div class="card-header">
                        <div class="icon-box gradient-blue">
                            <i data-lucide="settings"></i>
                        </div>
                        <span class="programme-count text-white">15 Programmes</span>
                    </div>
                    <h2 class="card-title text-white">Engineering & Emerging Technologies</h2>
                </article>
                <div class="chips-container">
                    <span class="chip">Robotics</span>
                    <span class="chip">Energy</span>
                </div>
            </div>

            <!-- Card 3: Top Right -->
            <div class="card-wrapper" data-category="Business & Commerce" style="--x: 78%; --y: 4%; --delay: 0.6s;">
                <article class="category-card" id="card-business" style="background: linear-gradient(135deg, rgb(102, 166, 0) 0%, rgb(161, 204, 0) 100%);
    border: 1px solid rgba(255, 255, 255, 0.4);
    box-shadow: rgba(0, 0, 0, 0.06) 0px 10px 24px, rgba(255, 255, 255, 0.4) 0px 2px 4px inset;">
                    <div class="card-header">
                        <div class="icon-box gradient-green">
                            <i data-lucide="briefcase"></i>
                        </div>
                        <span class="programme-count text-white">10 Programmes</span>
                    </div>
                    <h2 class="card-title text-white">Business & Commerce</h2>
                </article>
                <div class="chips-container">
                    <span class="chip">FinTech</span>
                    <span class="chip">Startups</span>
                </div>
            </div>


            <!-- Card 5: Bottom Right -->
            <div class="card-wrapper" data-category="Applied Biosciences / Food / Agritech"
                style="--x: 65%; --y: 68%; --delay: 1.2s;">
                <article class="category-card" id="card-bio" style="background: linear-gradient(135deg, rgb(0, 153, 92) 0%, rgb(0, 204, 136) 100%);
    border: 1px solid rgba(255, 255, 255, 0.4);
    box-shadow: rgba(0, 0, 0, 0.06) 0px 10px 24px, rgba(255, 255, 255, 0.4) 0px 2px 4px inset;">
                    <div class="card-header">
                        <div class="icon-box gradient-pink">
                            <i data-lucide="leaf"></i>
                        </div>
                        <span class="programme-count text-white">8 Programmes</span>
                    </div>
                    <h2 class="card-title text-white">Applied Biosciences / Food / Agritech</h2>
                </article>
                <div class="chips-container">
                    <span class="chip">Genetics</span>
                    <span class="chip">AgriTech</span>
                </div>
            </div>

            <!-- Card 6: Bottom Center -->
            <div class="card-wrapper" data-category="Liberal Arts & Science" style="--x: 40%; --y: 70%; --delay: 1.5s;">
                <article class="category-card" id="card-liberal" style="    background: linear-gradient(135deg, rgb(204, 68, 0) 0%, rgb(230, 102, 0) 100%);
    border: 1px solid rgba(255, 255, 255, 0.4);
    box-shadow: rgba(0, 0, 0, 0.06) 0px 10px 24px, rgba(255, 255, 255, 0.4) 0px 2px 4px inset;">
                    <div class="card-header">
                        <div class="icon-box gradient-orange">
                            <i data-lucide="book-open"></i>
                        </div>
                        <span class="programme-count text-white">14 Programmes</span>
                    </div>
                    <h2 class="card-title text-white">Liberal Arts & Science</h2>
                </article>
                <div class="chips-container">
                    <span class="chip">Philosophy</span>
                    <span class="chip">Physics</span>
                </div>
            </div>

            <!-- Card 7: Bottom Left -->
            <div class="card-wrapper" data-category="Media & Performing Arts" style="--x: 15%; --y: 68%; --delay: 1.8s;">
                <article class="category-card" id="card-design" style="background: linear-gradient(135deg, rgb(204, 0, 95) 0%, rgb(230, 43, 154) 100%);
    border: 1px solid rgba(255, 255, 255, 0.4);
    box-shadow: rgba(0, 0, 0, 0.06) 0px 10px 24px, rgba(255, 255, 255, 0.4) 0px 2px 4px inset;">
                    <div class="card-header">
                        <div class="icon-box gradient-pink">
                            <i data-lucide="palette"></i>
                        </div>
                        <span class="programme-count text-white">9 Programmes</span>
                    </div>
                    <h2 class="card-title text-white">Media & Performing Arts</h2>
                </article>
                <div class="chips-container">
                    <span class="chip">UI/UX</span>
                    <span class="chip">Animation</span>
                </div>
            </div>

            <!-- Card 8: Left -->
            <div class="card-wrapper" data-category="Fashion Design" style="--x:-1%; --y: 14%; --delay: 2.1s;">
                <article class="category-card" id="card-health" style="background: linear-gradient(135deg, rgb(245, 158, 11) 0%, rgb(251, 191, 36) 100%);
    border: 1px solid rgba(255, 255, 255, 0.4);
    box-shadow: rgba(0, 0, 0, 0.06) 0px 10px 24px, rgba(255, 255, 255, 0.4) 0px 2px 4px inset;">
                    <div class="card-header">
                        <div class="icon-box gradient-orange">
                            <i data-lucide="activity"></i>
                        </div>
                        <span class="programme-count text-white">11 Programmes</span>
                    </div>
                    <h2 class="card-title text-white">Fashion Design</h2>
                </article>
                <div class="chips-container">
                    <span class="chip">Medicine</span>
                    <span class="chip">Neuro</span>
                </div>
            </div>
            <!-- Card 9: Sports & Health Sciences -->
            <div class="card-wrapper" data-category="Sports & Health Sciences" style="--x:-2%; --y: 44%; --delay: 2.4s;">
                <article class="category-card" id="card-sports" style="background: linear-gradient(135deg, rgb(153, 0, 204) 0%, rgb(204, 34, 230) 100%);
    border: 1px solid rgba(255, 255, 255, 0.4);
    box-shadow: rgba(0, 0, 0, 0.06) 0px 10px 24px, rgba(255, 255, 255, 0.4) 0px 2px 4px inset;">
                    <div class="card-header">
                        <div class="icon-box gradient-purple">
                            <i data-lucide="activity"></i>
                        </div>
                        <span class="programme-count text-white">6 Programmes</span>
                    </div>
                    <h2 class="card-title text-white">Sports & Health Sciences</h2>
                </article>
                <div class="chips-container">
                    <span class="chip">Psychology</span>
                    <span class="chip">Clinical</span>
                </div>
            </div>

            <!-- Card 10: Sustainability & Climate Studies -->
            <div class="card-wrapper" data-category="Sustainability & Climate Studies" style="--x:84%; --y: 38%; --delay: 2.7s;">
                <article class="category-card" id="card-sustainability" style="background: linear-gradient(135deg, rgb(0, 184, 148) 0%, rgb(0, 229, 176) 100%);
    border: 1px solid rgba(255, 255, 255, 0.4);
    box-shadow: rgba(0, 0, 0, 0.06) 0px 10px 24px, rgba(255, 255, 255, 0.4) 0px 2px 4px inset;
    transition: 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);">
                    <div class="card-header">
                        <div class="icon-box gradient-cyan">
                            <i data-lucide="leaf"></i>
                        </div>
                        <span class="programme-count text-white">3 Programmes</span>
                    </div>
                    <h2 class="card-title text-white">Sustainability & Climate Studies</h2>
                </article>
                <div class="chips-container">
                    <span class="chip">Environment</span>
                    <span class="chip">Climate Policy</span>
                </div>
            </div>
        </section>

        <!-- Course Details Showcase -->
        <section class="course-details-section" id="course-details-section">
            <h3 class="related-title">Course Showcase</h3>
            <div class="details-grid" id="details-grid">
                <article class="course-detail-panel" data-category="Quantum Science, Computing & AI">
                    <div class="details-columns">
                        <div class="details-column">
                            <div class="detail-number">1</div>
                            <h4>B.SC PROGRAMMES</h4>
                            <ul>
                                <li>B.Sc Artificial Intelligence and Machine Learning</li>
                                <li>B.Sc Computer Science</li>
                                <li>B.Sc Computer Science (AI & Data Science)</li>
                                <li>B.Sc Computer Science (Artificial Intelligence)</li>
                                <li>B.Sc Computer Science (Cyber Security)</li>
                                <li>B.Sc Computer Technology (Generative AI)</li>
                                <li>B.Sc Digital and Cyber Forensics Science</li>
                                <li>B.Sc Information Technology</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">2</div>
                            <h4>BCA PROGRAMMES</h4>
                            <ul>
                                <li>BCA</li>
                                <li>BCA (Artificial Intelligence)</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">3</div>
                            <h4>POSTGRADUATE PROGRAMMES</h4>
                            <ul>
                                <li>M.Sc Artificial Intelligence and Data Science</li>
                                <li>M.Sc Computer Science</li>
                                <li>M.Sc Data Science and Business Analytics</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="course-detail-panel" data-category="Engineering & Emerging Technologies">
                    <div class="details-columns">
                        <div class="details-column">
                            <div class="detail-number">1</div>
                            <h4>UNDERGRADUATE PROGRAMMES</h4>
                            <ul>
                                <li>B.E Computer Science Engineering</li>
                                <li>B.E CSE Artificial Intelligence and Machine Learning</li>
                                <li>B.E CSE Cyber Security</li>
                                <li>B.E CSE Regional Language</li>
                                <li>B.E ECE</li>
                                <li>B.E Mech</li>
                                <li>B.E Mechatronics</li>
                                <li>B.Tech AIDS</li>
                                <li>B.Tech BioTechnology</li>
                                <li>B.Tech Information Technology</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="course-detail-panel" data-category="Business & Commerce">
                    <div class="details-columns">
                        <div class="details-column">
                            <div class="detail-number">1</div>
                            <h4>BBA PROGRAMMES</h4>
                            <ul>
                                <li>BBA General</li>
                                <li>BBA Aviation Management</li>
                                <li>BBA Computer Applications</li>
                                <li>BBA Logistics</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">2</div>
                            <h4>B.COM PROGRAMMES</h4>
                            <ul>
                                <li>B.Com Accounting & Finance</li>
                                <li>B.Com Banking & Insurance</li>
                                <li>B.Com Business Process Services</li>
                                <li>B.Com Corporate Secretorship</li>
                                <li>B.Com Financial Services</li>
                                <li>B.Com Information Technology</li>
                                <li>B.Com International Business</li>
                                <li>B.Com Professional Accounting</li>
                                <li>B.Com Professional Accounting (CA Training)</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">3</div>
                            <h4>B.COM — AI & PROFESSIONAL SPECIALIZATIONS</h4>
                            <ul>
                                <li>B.Com Computer Applications (Business Intelligence & AI)</li>
                                <li>B.Com Computer Applications (AI-Ready Accountant)</li>
                                <li>B.Com Financial Services (AI-Ready Account Analyst)</li>
                                <li>B.Com Financial Services (Public Accountant)</li>
                                <li>B.Com IT (Accounting Analytics)</li>
                                <li>B.Com International Business (AI-Ready Business Analyst)</li>
                                <li>B.Com Professional Accounting (Chartered Accountant)</li>
                                <li>B.Com (AI-Ready Accountant)</li>
                                <li>B.Com (ACCA)</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">4</div>
                            <h4>M.COM PROGRAMMES</h4>
                            <ul>
                                <li>M.Com Computer Applications (AI-Ready Accountant)</li>
                                <li>M.Com General (Guaranteed Internship)</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">5</div>
                            <h4>MBA PROGRAMMES</h4>
                            <ul>
                                <li>MBA General</li>
                                <li>MBA in Business Analytics and Artificial Intelligence</li>
                                <li>MBA in Marketing</li>
                                <li>MBA in Finance</li>
                                <li>MBA in Human Resource</li>
                                <li>MBA in Supply Chain and Logistics</li>
                                <li>MBA in Sustainability Management</li>
                                <li>MBA in AI Product Management</li>
                                <li>MBA in Entrepreneurship 5.0</li>
                                <li>MBA in Media & Entertainment Management</li>
                                <li>MBA in Sports Management</li>
                                <li>MBA Hospitality</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="course-detail-panel" data-category="Applied Biosciences / Food / Agritech">
                    <div class="details-columns">
                        <div class="details-column">
                            <div class="detail-number">1</div>
                            <h4>B.TECH PROGRAMMES</h4>
                            <ul>
                                <li>B.Tech BioTechnology</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">2</div>
                            <h4>B.SC PROGRAMMES</h4>
                            <ul>
                                <li>B.Sc Biotechnology</li>
                                <li>B.Sc Microbiology</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">3</div>
                            <h4>POSTGRADUATE PROGRAMMES</h4>
                            <ul>
                                <li>M.Sc Microbiology</li>
                                <li>M.Sc BioTechnology</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="course-detail-panel" data-category="Liberal Arts & Science">
                    <div class="details-columns">
                        <div class="details-column">
                            <div class="detail-number">1</div>
                            <h4>B.SC PROGRAMMES</h4>
                            <ul>
                                <li>B.Sc Mathematics</li>
                                <li>B.Sc Physics</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">2</div>
                            <h4>B.A PROGRAMMES</h4>
                            <ul>
                                <li>B.A English Literature</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">3</div>
                            <h4>POSTGRADUATE PROGRAMMES</h4>
                            <ul>
                                <li>M.A English Literature</li>
                                <li>M.A Public Administration</li>
                                <li>M.Sc Mathematics</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="course-detail-panel" data-category="Media & Performing Arts">
                    <div class="details-columns">
                        <div class="details-column">
                            <div class="detail-number">1</div>
                            <h4>B.SC PROGRAMMES</h4>
                            <ul>
                                <li>B.Sc Visual Communication (AI-Ready Animation & VFX Design)</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">2</div>
                            <h4>B.A PROGRAMMES</h4>
                            <ul>
                                <li>B.A Journalism & Mass Communication</li>
                                <li>B.A Theatre & Performing Arts</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">3</div>
                            <h4>POSTGRADUATE PROGRAMMES</h4>
                            <ul>
                                <li>M.A Journalism and Mass Communication</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="course-detail-panel" data-category="Fashion Design">
                    <div class="details-columns">
                        <div class="details-column">
                            <div class="detail-number">1</div>
                            <h4>B.TECH PROGRAMMES</h4>
                            <ul>
                                <li>B.Tech Fashion Technology</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">2</div>
                            <h4>B.SC PROGRAMMES</h4>
                            <ul>
                                <li>B.Sc Fashion Design</li>
                                <li>B.Sc Costume Design & Fashion</li>
                                <li>B.Sc Textile Design & Merchandising</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">3</div>
                            <h4>POSTGRADUATE PROGRAMMES</h4>
                            <ul>
                                <li>M.Sc Fashion Design & Retail Management</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="course-detail-panel" data-category="Sports & Health Sciences">
                    <div class="details-columns">
                        <div class="details-column">
                            <div class="detail-number">1</div>
                            <h4>B.SC PROGRAMMES</h4>
                            <ul>
                                <li>B.Sc Psychology</li>
                                <li>B.Sc MicroBiology with GIP</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">2</div>
                            <h4>POSTGRADUATE PROGRAMMES</h4>
                            <ul>
                                <li>M.Sc Applied Psychology</li>
                                <li>M.Sc Clinical Psychology</li>
                            </ul>
                        </div>
                    </div>
                </article>
                <article class="course-detail-panel" data-category="Sustainability & Climate Studies">
                    <div class="details-columns">
                        <div class="details-column">
                            <div class="detail-number">1</div>
                            <h4>B.SC PROGRAMMES</h4>
                            <ul>
                                <li>B.Sc Environmental Science & Sustainability</li>
                            </ul>
                        </div>
                        <div class="details-column">
                            <div class="detail-number">2</div>
                            <h4>POSTGRADUATE PROGRAMMES</h4>
                            <ul>
                                <li>M.Sc Climate Change & Policy</li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <!-- Particles Container -->
    <div class="particles" id="particles-container"></div>

    <script src="script.js"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // Create random particles
        const container = document.getElementById('particles-container');
        for (let i = 0; i < 30; i++) {
            const p = document.createElement('div');
            p.className = 'particle';
            p.style.left = Math.random() * 100 + '%';
            p.style.top = Math.random() * 100 + '%';
            const size = Math.random() * 6 + 2 + 'px';
            p.style.width = size;
            p.style.height = size;
            p.style.animationDelay = Math.random() * 15 + 's';
            p.style.animationDuration = Math.random() * 10 + 10 + 's';
            container.appendChild(p);
        }
    </script>

</section>