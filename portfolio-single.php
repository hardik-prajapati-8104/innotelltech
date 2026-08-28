4    <?php
       
        include_once ('elements/header.php');
    ?> 

  <!-- Page Hero -->
  <section class="page-hero page-hero--blog">
    <div class="page-hero-blob page-hero-blob-1"></div>
    <div class="page-hero-blob page-hero-blob-2"></div>
    <div class="container">
      <div class="page-hero-content" data-aos="fade-up">
        <div class="page-hero-tag">Web App &middot; AI &amp; ML &middot; FinTech</div>
        <h1 class="page-hero-title">FinTrack Dashboard</h1>
        <p class="page-hero-text">From a crumbling 12-year-old PHP codebase to a real-time AI analytics platform processing $2 billion in daily transactions.</p>
        <nav class="breadcrumb-custom mt-4">
          <div class="breadcrumb-item-custom"><a href="index.html">Home</a></div>
          <span class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></span>
          <div class="breadcrumb-item-custom"><a href="portfolio.html">Portfolio</a></div>
          <span class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></span>
          <div class="breadcrumb-item-custom active">FinTrack Dashboard</div>
        </nav>
      </div>
    </div>
  </section>

  <!-- Main Content -->
  <section class="section-py">
    <div class="container">
      <div class="row g-5">

          <!-- Cover image -->
          <div class="col-lg-12">
          <div class="article-cover" data-aos="fade-up">
            <a href="assets/img/portfolio/port-1.jpg" class="glightbox" data-gallery="proj-gallery" data-description="FinTrack Dashboard &mdash; Main Overview">
              <img src="assets/img/portfolio/port-1.jpg" alt="FinTrack Dashboard overview" loading="lazy" />
            </a>
          </div>
          </div>
        <!-- Article column -->
        <div class="col-lg-8">

          <!-- Article body -->
          <div class="article-body" data-aos="fade-up">

            <p class="article-lead">FinTrack came to NexVera with a critical problem: their legacy financial dashboard was built on a 12-year-old PHP codebase that was crashing under load, costing $400K per year just to maintain, and completely unable to process real-time data.</p>

            <h2>The Challenge</h2>
            <p>Leadership issued a bold mandate: rebuild the entire platform in under 6 months, maintain 100% data fidelity during migration, and add AI-powered forecasting&mdash;all while keeping the existing system live for 8,000 daily active enterprise users.</p>
            <ul class="article-list">
              <li><strong>$400K annual maintenance burden</strong> from vendor lock-in, custom patches, and 12 years of technical debt</li>
              <li><strong>Zero real-time capability</strong> &mdash; batch jobs running every 4 hours meant enterprise clients made decisions on stale data</li>
              <li><strong>8,000 users, zero downtime allowed</strong> &mdash; enterprise SLAs made a &ldquo;big bang&rdquo; cutover impossible</li>
              <li><strong>14 third-party integrations</strong> wired directly into monolithic code with no documented contracts</li>
            </ul>

            <h2>Our Approach</h2>
            <p>We ran a 4-week Discovery sprint before writing a single line of new code&mdash;fully mapping data architecture, API contracts, and user journeys across all 14 financial data providers.</p>
            <ol class="article-list">
              <li><strong>Discovery Sprint</strong> &mdash; Full audit of data flows and API contracts. Produced a zero-ambiguity technical blueprint in 4 weeks.</li>
              <li><strong>Strangler-Fig Migration</strong> &mdash; Incremental module shipping with progressive traffic routing. Zero-downtime migration over 18 weeks.</li>
              <li><strong>AI Forecasting Module</strong> &mdash; Fine-tuned TimesGPT on 8 years of historical data, achieving 94% accuracy on 30-day cash-flow forecasts.</li>
              <li><strong>Cohort Rollout &amp; QA</strong> &mdash; Feature-flagged rollout with live rollback. 100% data fidelity verified at every migration stage.</li>
            </ol>

            <h2>Project Gallery</h2>
            <div class="proj-gallery-grid">
              <a href="assets/img/portfolio/port-4.jpg" class="proj-gallery-item glightbox" data-gallery="proj-gallery" data-description="AI Forecasting module &mdash; 30-day cash-flow prediction charts">
                <img src="assets/img/portfolio/port-4.jpg" alt="AI Forecasting Module" loading="lazy" />
              </a>
              <a href="assets/img/portfolio/port-5.jpg" class="proj-gallery-item glightbox" data-gallery="proj-gallery" data-description="Mobile responsive view &mdash; iOS and Android optimised">
                <img src="assets/img/portfolio/port-5.jpg" alt="Mobile View" loading="lazy" />
              </a>
            </div>

            <blockquote class="article-blockquote">
              <p>&ldquo;NexVera didn&rsquo;t just rebuild our platform &mdash; they transformed our product entirely. The AI forecasting alone has become our biggest sales differentiator. We closed a $3M enterprise deal last month where the buyer specifically cited it.&rdquo;</p>
              <cite>Marcus Webb &mdash; Chief Executive Officer, FinTrack Inc.</cite>
            </blockquote>

            <h2>The Results</h2>
            <p>Delivered in 6 months. Maintained 100% data fidelity throughout. Zero unplanned downtime on launch day.</p>
            <div class="proj-results-row">
              <div class="proj-result-cell">
                <div class="proj-result-num">340%</div>
                <div class="proj-result-label">User Engagement</div>
                <p class="proj-result-desc">Daily active sessions surged within 60 days of launch</p>
              </div>
              <div class="proj-result-cell">
                <div class="proj-result-num">99.99%</div>
                <div class="proj-result-label">Platform Uptime</div>
                <p class="proj-result-desc">Maintained across 8,000 enterprise users with no SLA penalties</p>
              </div>
              <div class="proj-result-cell">
                <div class="proj-result-num">60%</div>
                <div class="proj-result-label">Cost Reduction</div>
                <p class="proj-result-desc">From $400K annual maintenance to under $160K</p>
              </div>
            </div>

          </div><!-- /article-body -->

        </div><!-- /col-lg-8 -->

        <!-- Sidebar -->
        <div class="col-lg-4">
          <aside data-aos="fade-left" data-aos-delay="100">

            <!-- Project Details -->
            <div class="sw mb-4">
              <div class="sw-title">Project Details</div>
              <ul class="proj-details-list">
                <li class="proj-details-item">
                  <span class="proj-details-key">Client</span>
                  <span class="proj-details-val">FinTrack Inc.</span>
                </li>
                <li class="proj-details-item">
                  <span class="proj-details-key">Category</span>
                  <span class="proj-details-val">Web App &bull; AI</span>
                </li>
                <li class="proj-details-item">
                  <span class="proj-details-key">Year</span>
                  <span class="proj-details-val">2024</span>
                </li>
                <li class="proj-details-item">
                  <span class="proj-details-key">Duration</span>
                  <span class="proj-details-val">6 Months</span>
                </li>
                <li class="proj-details-item">
                  <span class="proj-details-key">Team Size</span>
                  <span class="proj-details-val">10 People</span>
                </li>
                <li class="proj-details-item">
                  <span class="proj-details-key">Location</span>
                  <span class="proj-details-val">New York, USA</span>
                </li>
                <li class="proj-details-item">
                  <span class="proj-details-key">Live URL</span>
                  <span class="proj-details-val"><a href="#">fintrack.io <i class="fa-solid fa-arrow-up-right-from-square"></i></a></span>
                </li>
              </ul>
            </div>
        <!-- Contact CTA -->
            <div class="sw-contact-cta">
              <div class="sw-contact-cta-glow"></div>
              <div class="sw-contact-cta-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.98.5-2.5 0-3l-3-3c-.5-.5-2.02-.71-3 0z"></path><path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path></svg></div>
              <h2 class="sw-contact-cta-title h4">Have a Project in Mind?</h2>
              <p class="sw-contact-cta-text">Let's build something great together. Our team is ready to turn your idea into reality.</p>
              <a href="contact.html" class="sw-contact-cta-btn">Get in Touch <i class="fa-solid fa-arrow-right"></i></a>
              <div class="sw-contact-cta-meta">
                <span><i class="fa-regular fa-clock"></i> Response within 24 hrs</span>
                <span><i class="fa-solid fa-shield-halved"></i> Free consultation</span>
              </div>
            </div>
          </aside>
        </div><!-- /col-lg-4 -->

      </div>
    </div>
  </section>
  <?php
      include_once ('elements/footer.php')
  ?>