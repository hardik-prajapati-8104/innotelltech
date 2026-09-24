    <?php
       
        include_once ('elements/header.php');
        include_once('includes/services-data.php');
        include_once('includes/portfolio-data.php');
        
    ?> 

  <!-- ============================================================
       HERO
       ============================================================ -->
  <section class="hero-section" id="home">
    <div class="hero-bg-pattern"></div>
    <div class="hero-blob-1"></div>
    <div class="hero-blob-2"></div>

    <div class="container">
      <div class="row align-items-center g-5">

        <!-- Left: Text -->
        <div class="col-lg-6 hero-content" data-aos="fade-right" data-aos-duration="800">
          <div class="hero-tag">
            <span class="dot"></span>
            Trusted Technology Partner for Growing Businesses
          </div>

          <h1 class="hero-title">
            We Build <br />
            <span class="hero-typed text-gradient"
              data-typed-strings='["Digital Products","Web Platforms","AI Solutions","Mobile Apps","SaaS Tools"]'>Digital
              Products</span><br />
            That Scale
          </h1>

          <p class="hero-description">
            INNOTELL TECH is a technology and IT solutions company delivering innovative, scalable, and reliable digital solutions. From custom software and web development to business automation and digital transformation, we turn complex business challenges into powerful digital experiences.
          </p>

          <div class="hero-actions">
            <a href="contact.html" class="btn-primary-custom btn-lg-custom">
              Start Your Project <i class="fa-solid fa-arrow-right"></i>
            </a>
            <a href="https://www.youtube.com/watch?v=ypTcyx9OqdA" class="hero-play-btn glightbox">
              <div class="play-icon"><i class="fa-solid fa-play"></i></div>
              Watch Overview
            </a>
          </div>

          <div class="hero-stats">
            <div class="hero-stat-item">
              <div class="hero-stat-number">10+</div>
              <div class="hero-stat-label">Years Experience</div>
            </div>
            <div class="hero-stat-divider"></div>
            <div class="hero-stat-item">
              <div class="hero-stat-number">250+</div>
              <div class="hero-stat-label">Projects Delivered</div>
            </div>
            <div class="hero-stat-divider"></div>
            <div class="hero-stat-item">
              <div class="hero-stat-number">98%</div>
              <div class="hero-stat-label">Client Satisfaction</div>
            </div>
          </div>
        </div>

        <!-- Right: Bento Mosaic -->
        <div class="col-lg-6 hero-bento-col" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
          <div class="hero-bento">

            <div class="bento-tile bento-photo-lg">
              <img src="assets/img/team-culture.jpg" alt="NexVera team building digital products" loading="eager" />
              <span class="bento-badge"><i class="fa-solid fa-circle-check"></i>Quality-Driven Solutions</span>
            </div>

            <div class="bento-tile bento-accent">
              <div class="bento-accent-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.98.5-2.5 0-3l-3-3c-.5-.5-2.02-.71-3 0z"></path><path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path></svg></div>
              <div class="bento-accent-num">Scalable & Reliable</div>
              <div class="bento-accent-label">Technology built for long-term growth</div>
            </div>

            <div class="bento-tile bento-photo-sm">
              <img src="assets/img/intro/intro-1.jpg" alt="AI and machine learning" loading="lazy" />
              <span class="bento-tag">AI/Technology Card</span>
            </div>

            <div class="bento-tile bento-dark">
              <div class="bento-clients">
                <div class="bento-avatars">
                  <img src="assets/img/avatars/user-1.jpg" alt="" loading="lazy" />
                  <img src="assets/img/avatars/user-2.jpg" alt="" loading="lazy" />
                  <img src="assets/img/avatars/user-3.jpg" alt="" loading="lazy" />
                  <img src="assets/img/avatars/user-4.jpg" alt="" loading="lazy" />
                </div>
                <div class="bento-clients-meta">
                  <div class="bento-clients-num">Trusted Technology Partner</div>
                  <div class="bento-stars">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                      class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                    <span>5.0/5 Client Experience</span>
                  </div>
                </div>
              </div>
              <a href="javascript:void();" class="bento-play glightbox"
                aria-label="Watch overview">
                <i class="fa-solid fa-play"></i>
              </a>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       CLIENTS MARQUEE
       ============================================================ -->
  <div class="clients-section d-none">
    <div class="container-fluid px-4">
      <div class="d-flex align-items-center overflow-hidden gap-4">
        <span class="clients-label d-none d-md-block">TRUSTED BY</span>
        <div class="flex-1 overflow-hidden">
          <div class="d-flex">
            <div class="marquee-track">
              <span class="client-logo-item"><i class="fa-solid fa-play"></i> Techwave</span>
              <span class="client-logo-item"><i class="fa-solid fa-hexagon"></i> Cloudera</span>
              <span class="client-logo-item"><i class="fa-solid fa-circle icon-accent"></i>
                NovaSys</span>
              <span class="client-logo-item"><i class="fa-solid fa-square icon-highlight"></i>
                Axiom</span>
              <span class="client-logo-item"><i class="fa-solid fa-gem"></i> QuantumIT</span>
              <span class="client-logo-item"><i class="fa-solid fa-star icon-star"></i> PulseHub</span>
              <span class="client-logo-item"><i class="fa-solid fa-play"></i> Techwave</span>
              <span class="client-logo-item"><i class="fa-solid fa-hexagon"></i> Cloudera</span>
              <span class="client-logo-item"><i class="fa-solid fa-circle icon-accent"></i>
                NovaSys</span>
              <span class="client-logo-item"><i class="fa-solid fa-square icon-highlight"></i>
                Axiom</span>
              <span class="client-logo-item"><i class="fa-solid fa-gem"></i> QuantumIT</span>
              <span class="client-logo-item"><i class="fa-solid fa-star icon-star"></i> PulseHub</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ============================================================
       ABOUT PREVIEW
       ============================================================ -->
  <section class="section-py" id="about">
    <div class="container">
      <div class="row align-items-center g-5">

        <!-- Image -->
        <div class="col-lg-6" data-aos="fade-right">
          <div class="about-image-wrap">
            <div class="about-exp-badge">
              <div class="about-exp-number">100%</div>
              <div class="about-exp-text">Business-Focused<br>Solutions</div>
            </div>
            <div class="about-image-main">
              <img src="assets/img/about/about-1.jpg" alt="Our Team at Work" loading="lazy" />
            </div>
            <div class="about-image-accent">
              <img src="assets/img/about/about-2.jpg" alt="Office Environment" loading="lazy" />
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="col-lg-6 ps-lg-5" data-aos="fade-left" data-aos-delay="150">
          <div class="section-tag">ABOUT INNOTELL TECH</div>
          <h2 class="section-title">We Turn Ideas Into <span class="text-gradient">Digital Solutions</span></h2>
          <p class="section-subtitle mb-4">
            INNOTELL TECH is a forward-thinking technology company delivering innovative, reliable, and scalable digital solutions for businesses of all sizes. We combine technology, creativity, and industry expertise to transform ideas into powerful digital experiences that create lasting business value.
          </p>

          <div class="about-checkpoints">
            <div class="about-checkpoint">
              <div class="checkpoint-icon"><i class="fa-solid fa-check-double"></i></div>
              <p class="checkpoint-text"><strong>Technology Expertise</strong> Our skilled team delivers modern solutions across software development, web technologies, cloud, automation, and digital platforms.</p>
            </div>
            <div class="about-checkpoint">
              <div class="checkpoint-icon"><i class="fa-solid fa-check-double"></i></div>
              <p class="checkpoint-text"><strong>Business-Focused Approach</strong> We understand your business goals and build technology solutions tailored to your unique requirements, workflows, and growth plans.</p>
            </div>
            <div class="about-checkpoint">
              <div class="checkpoint-icon"><i class="fa-solid fa-check-double"></i></div>
              <p class="checkpoint-text"><strong>Scalable & Reliable Solutions</strong> From startups to growing enterprises, we create secure, high-performance solutions designed to evolve with your business.</p>
            </div>
          </div>

          <div class="d-flex gap-3 flex-wrap mt-4">
            <a href="about.php" class="btn-primary-custom">Discover Our Story<i
                class="fa-solid fa-arrow-right"></i></a>
            <a href="team.php" class="btn-outline-custom">Our Services</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============================================================
       SERVICES
       ============================================================ -->
  <section class="section-py bg-light-custom" id="services">
    <div class="container">

      <div class="row justify-content-between align-items-end mb-5">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="section-tag">What We Do</div>
          <h2 class="section-title">Technology Solutions Built for<span class="text-gradient">Modern Businesses</span></h2>
        </div>
        <div class="col-lg-5" data-aos="fade-left">
          <p class="section-subtitle">From custom software development to business automation and digital transformation, we deliver scalable technology solutions designed to simplify operations, improve efficiency, and accelerate business growth.</p>
          <a href="services.html" class="service-link mt-3 d-inline-flex">View All Services <i
              class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

          <div class="row g-4">

                  <?php
                        $serviceArr = [

                            [
                                'slug' => 'custom-software-development',
                                'service-title' => 'Custom Software Development',
                                'icon' => 'bi-code-slash',
                                'service-text' => 'Build secure, scalable, and customized software solutions designed around your business processes, requirements, and long-term goals.',
                                'service-feature-tag' => [
                                    'Custom Software',
                                    'Web Applications',
                                    'Enterprise Solutions'
                                ],
                            ],

                            [
                                'slug' => 'web-development',
                                'service-title' => 'Web Development',
                                'icon' => 'bi-globe2',
                                'service-text' => 'Create modern, responsive, and high-performance websites and web applications that strengthen your digital presence and deliver seamless user experiences.',
                                'service-feature-tag' => [
                                    'Business Websites',
                                    'Web Applications',
                                    'E-Commerce'
                                ],
                            ],

                            [
                                'slug' => 'mobile-applications',
                                'service-title' => 'Mobile Applications',
                                'icon' => 'bi-phone',
                                'service-text' => 'Develop intuitive and reliable mobile applications that help businesses connect with customers, teams, and services across Android and iOS platforms.',
                                'service-feature-tag' => [
                                    'Android',
                                    'iOS',
                                    'Cross-Platform'
                                ],
                            ],

                            [
                                'slug' => 'ai-machine-learning',
                                'service-title' => 'AI & Machine Learning',
                                'icon' => 'bi-robot',
                                'service-text' => 'Transform business operations with intelligent AI and machine learning solutions that automate processes, uncover insights, and support smarter decision-making.',
                                'service-feature-tag' => [
                                    'AI Solutions',
                                    'Machine Learning',
                                    'Automation'
                                ],
                            ], 

                            [
                                'slug' => 'ui-ux-design',
                                'service-title' => 'UI/UX Design',
                                'icon' => 'bi-palette',
                                'service-text' => 'Design intuitive, engaging, and user-focused digital experiences that combine compelling visual design with seamless usability.',
                                'service-feature-tag' => [
                                    'UI Design',
                                    'UX Design',
                                    'Prototyping'
                                ],
                            ],

                            [
                                'slug' => 'cloud-devops',
                                'service-title' => 'Cloud & DevOps',
                                'icon' => 'bi-cloud-check',
                                'service-text' => 'Build scalable, secure, and reliable cloud environments with modern DevOps practices that improve deployment speed, infrastructure efficiency, and application availability.',
                                'service-feature-tag' => [
                                    'Cloud Solutions',
                                    'DevOps',
                                    'Infrastructure'
                                ],
                            ],

                            [
                                'slug' => 'cybersecurity',
                                'service-title' => 'Cybersecurity',
                                'icon' => 'bi-shield-check',
                                'service-text' => 'Protect applications, systems, and business data with practical cybersecurity solutions focused on risk reduction, security, compliance, and resilience.',
                                'service-feature-tag' => [
                                    'Security Audits',
                                    'Data Protection',
                                    'Risk Management'
                                ],
                            ],

                            [
                                'slug' => 'data-engineering',
                                'service-title' => 'Data Engineering',
                                'icon' => 'bi-database',
                                'service-text' => 'Design reliable data pipelines and scalable data platforms that help businesses collect, process, manage, and utilize information effectively.',
                                'service-feature-tag' => [
                                    'Data Pipelines',
                                    'Data Platforms',
                                    'Data Integration'
                                ],
                            ], 

                            [
                                'slug' => 'business-automation',
                                'service-title' => 'Business Automation',
                                'icon' => 'bi-gear-wide-connected',
                                'service-text' => 'Automate repetitive tasks and business workflows to reduce manual effort, improve accuracy, and increase operational productivity.',
                                'service-feature-tag' => [
                                    'Workflow Automation',
                                    'Process Automation',
                                    'Smart Operations'
                                ],
                            ],

                            [
                                'slug' => 'api-system-integration',
                                'service-title' => 'API & System Integration',
                                'icon' => 'bi-diagram-3',
                                'service-text' => 'Connect applications, platforms, APIs, and third-party services to create seamless data flow and efficient connected business ecosystems.',
                                'service-feature-tag' => [
                                    'API Integration',
                                    'Third-Party Integration',
                                    'System Connectivity'
                                ],
                            ],

                            [
                                'slug' => 'digital-transformation',
                                'service-title' => 'Digital Transformation',
                                'icon' => 'bi-arrow-repeat',
                                'service-text' => 'Modernize business operations with connected digital technologies, optimized processes, and innovative solutions designed for sustainable growth.',
                                'service-feature-tag' => [
                                    'Digital Strategy',
                                    'Process Modernization',
                                    'Technology Consulting'
                                ],
                            ],

                            [
                                'slug' => 'analytics-business-intelligence',
                                'service-title' => 'Analytics & Business Intelligence',
                                'icon' => 'bi-bar-chart-line',
                                'service-text' => 'Turn business data into actionable insights through intelligent dashboards, reporting, analytics, and data-driven decision-making solutions.',
                                'service-feature-tag' => [
                                    'Business Analytics',
                                    'BI Dashboards',
                                    'Data Insights'
                                ],
                            ],

                        ];

                        foreach ($serviceArr as $service) {
                      ?>

                          <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">

                              <div class="service-card">

                                  <!-- Service Icon -->
                                  <div class="service-icon">
                                      <i class="bi <?= htmlspecialchars($service['icon']) ?>"></i>
                                  </div>

                                  <!-- Service Title -->
                                  <h3 class="service-title">
                                      <?= htmlspecialchars($service['service-title']) ?>
                                  </h3>

                                  <!-- Service Description -->
                                  <p class="service-text">
                                      <?= htmlspecialchars($service['service-text']) ?>
                                  </p>

                                  <!-- Service Link -->
                                  <a href="service-single.php?service=<?= urlencode($service['slug']) ?>" class="svc-card-link">

                                      Explore Service

                                      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                          <path d="M5 12h14M12 5l7 7-7 7"/>
                                      </svg>

                                  </a>

                                  <!-- Service Tags -->
                                  <?php if (!empty($service['service-feature-tag'])) { ?>

                                      <div class="service-features">

                                          <?php foreach ($service['service-feature-tag'] as $tag) { ?>

                                              <span class="service-feature-tag">
                                                  <?= htmlspecialchars($tag) ?>
                                              </span>

                                          <?php } ?>

                                      </div>

                                  <?php } ?>

                              </div>

                          </div>

                      <?php
                      }
                  ?>

         </div>

    </div>
  </section>

  <!-- ============================================================
       HOW IT WORKS
       ============================================================ -->
  <section class="section-py process-section">
    <div class="container">

      <div class="text-center mb-5" data-aos="fade-up">
        <div class="section-tag mx-auto">Our Process</div>
        <h2 class="section-title">How We Turn <span class="text-gradient">Ideas Into Digital Success</span></h2>
        <p class="section-subtitle mx-auto text-center">A structured, collaborative approach that takes your idea from initial concept to a reliable, scalable digital solution.</p>
      </div>

      <div class="row g-4">
        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
          <div class="process-step">
            <div class="process-step-number">01</div>
            <div class="process-step-connector"></div>
            <h2 class="process-step-title h4">Discover & Plan</h2>
            <p class="process-step-text">We understand your business goals, challenges, target users, and technical requirements. Together, we define the project scope, priorities, and roadmap for successful delivery.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="process-step">
            <div class="process-step-number">02</div>
            <div class="process-step-connector"></div>
            <h2 class="process-step-title h4">Design & Strategize</h2>
            <p class="process-step-text">We transform requirements into clear user journeys, wireframes, and intuitive designs. Every experience is planned with usability, functionality, and scalability in mind.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="process-step">
            <div class="process-step-number">03</div>
            <div class="process-step-connector"></div>
            <h2 class="process-step-title h4">Develop & Test</h2>
            <p class="process-step-text">Our team builds your solution using modern technologies and proven development practices. Rigorous testing ensures performance, security, reliability, and a seamless user experience.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="process-step">
            <div class="process-step-number">04</div>
            <h2 class="process-step-title h4">Launch & Grow</h2>
            <p class="process-step-text">We deploy your solution smoothly and provide ongoing support, monitoring, and improvements. As your business evolves, we help your technology scale with it.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ============================================================
       COUNTER
       ============================================================ -->
  <div class="section-py counter-section" id="stats">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
          <div class="counter-item">
            <div class="counter-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2" />
                <rect x="9" y="3" width="6" height="4" rx="1" />
                <path d="m9 12 2 2 4-4" />
              </svg></div>
            <div class="counter-value">
              <span class="counter-number" data-count="100" data-suffix="+">100+</span>
            </div>
            <div class="counter-label">Digital Solutions</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="counter-item">
            <div class="counter-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              </svg></div>
            <div class="counter-value">
              <span class="counter-number" data-count="50" data-suffix="+">50+</span>
            </div>
            <div class="counter-label">Businesses Supported</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="counter-item">
            <div class="counter-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <line x1="8" y1="21" x2="16" y2="21" />
                <line x1="12" y1="17" x2="12" y2="21" />
                <path d="M7 4h10l-1 7a5 5 0 0 1-10 0z" />
                <path d="M17 4h3v3a3 3 0 0 1-3 3" />
                <path d="M7 4H4v3a3 3 0 0 0 3 3" />
              </svg></div>
            <div class="counter-value">
              <span class="counter-number" data-count="10" data-suffix="+">10+</span>
            </div>
            <div class="counter-label">Technology Services</div>
          </div>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="counter-item">
            <div class="counter-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <line x1="2" y1="12" x2="22" y2="12" />
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
              </svg></div>
            <div class="counter-value">
              <span class="counter-number" data-count="12" data-suffix="+">12+</span>
            </div>
            <div class="counter-label">Countries Served</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ============================================================
       PORTFOLIO
       ============================================================ -->
  <section class="section-py" id="portfolio">

      <div class="container">

          <!-- Section Heading -->
          <div class="text-center mb-5" data-aos="fade-up">

              <div class="section-tag">
                  Our Work
              </div>

              <h2 class="section-title">
                  Selected
                  <span class="text-gradient">
                      Solutions That Create Real Impact
                  </span>
              </h2>

              <p class="section-subtitle">
                  Explore a selection of digital solutions we've designed and
                  developed to help businesses improve operations, engage
                  customers, and achieve their technology goals.
              </p>

          </div>


          <!-- Portfolio Filters -->
          <div class="portfolio-filters"
              data-aos="fade-up"
              data-aos-delay="100">

              <button
                  class="portfolio-filter-btn active"
                  data-filter="*">
                  All Projects
              </button>

                <?php foreach ($portfolioFilters as $filterClass => $filterLabel) { ?>
                  <button
                    class="portfolio-filter-btn"
                    data-filter=".<?= htmlspecialchars($filterClass, ENT_QUOTES, 'UTF-8') ?>">
                    <?= htmlspecialchars($filterLabel, ENT_QUOTES, 'UTF-8') ?>
                  </button>
                <?php } ?>

          </div>


          <!-- Portfolio Grid -->
          <div class="portfolio-grid row gx-4">

              <?php foreach ($portfolioItems as $portfolio) { ?>

                  <div
                      class="col-md-6 col-lg-4 portfolio-item <?= htmlspecialchars($portfolio['filters'], ENT_QUOTES, 'UTF-8') ?>"
                      data-aos="fade-up"
                      data-aos-delay="<?= htmlspecialchars($portfolio['delay'], ENT_QUOTES, 'UTF-8') ?>"
                  >

                      <a
                          href="<?= htmlspecialchars($portfolio['url'] . '?project=' . urlencode($portfolio['slug']), ENT_QUOTES, 'UTF-8') ?>"
                          class="portfolio-card d-block"
                      >

                          <!-- Portfolio Image -->
                          <img
                              src="<?= htmlspecialchars($portfolio['image'], ENT_QUOTES, 'UTF-8') ?>"
                              alt="<?= htmlspecialchars($portfolio['title'], ENT_QUOTES, 'UTF-8') ?>"
                              class="portfolio-card-img"
                              loading="lazy"
                          >


                          <!-- Overlay -->
                          <div class="portfolio-card-overlay">

                              <div class="portfolio-card-info">

                                  <!-- Category -->
                                  <div class="portfolio-card-cat">
                                      <?= htmlspecialchars($portfolio['category'], ENT_QUOTES, 'UTF-8') ?>
                                  </div>

                                  <!-- Title -->
                                  <div class="portfolio-card-title">
                                      <?= htmlspecialchars($portfolio['title'], ENT_QUOTES, 'UTF-8') ?>
                                  </div>

                                  <!-- Action -->
                                  <div class="portfolio-card-actions">

                                      <span class="portfolio-card-btn">

                                          View Case Study

                                          <i class="fa-solid fa-arrow-right"></i>

                                      </span>

                                  </div>

                              </div>

                          </div>

                      </a>

                  </div>

              <?php } ?>

          </div>


          <!-- View Full Portfolio -->
          <div
              class="text-center mt-5"
              data-aos="fade-up"
          >

              <a
                  href="portfolio.php"
                  class="btn-outline-custom"
              >
                  View Full Portfolio

                  <i class="fa-solid fa-arrow-right"></i>

              </a>

          </div>

      </div>

  </section>

  <!-- ============================================================
       TESTIMONIALS
       ============================================================ -->
      <?php

            $testimonialArr = [

                [
                    'name' => 'Rahul Mehta',
                    'role' => 'Business Owner',
                    'company' => 'Technology Solutions',
                    'avatar' => 'assets/img/avatars/user-1.jpg',
                    'rating' => 5,
                    'review' => 'INNOTELL TECH understood our requirements perfectly and delivered a reliable solution that significantly improved our day-to-day business operations. The team was professional, responsive, and easy to work with.',
                ],

                [
                    'name' => 'Priya Patel',
                    'role' => 'Founder',
                    'company' => 'Digital Business',
                    'avatar' => 'assets/img/avatars/user-2.jpg',
                    'rating' => 5,
                    'review' => 'Working with INNOTELL TECH was a great experience. They transformed our ideas into a modern digital solution with a smooth user experience. Their attention to detail and commitment to quality really stood out.',
                ],

                [
                    'name' => 'Amit Shah',
                    'role' => 'Director',
                    'company' => 'Business Solutions',
                    'avatar' => 'assets/img/avatars/user-3.jpg',
                    'rating' => 5,
                    'review' => 'The INNOTELL TECH team provided excellent technical guidance throughout the project. Their approach was structured, transparent, and focused on delivering a solution that aligned with our business goals.',
                ],

                [
                    'name' => 'Neha Joshi',
                    'role' => 'Operations Manager',
                    'company' => 'Growing Enterprise',
                    'avatar' => 'assets/img/avatars/user-4.jpg',
                    'rating' => 5,
                    'review' => 'INNOTELL TECH helped us simplify our processes through a customized technology solution. The final product is easy to use, reliable, and has made our workflow much more efficient.',
                ],

                [
                    'name' => 'Vikram Desai',
                    'role' => 'Managing Director',
                    'company' => 'Business Group',
                    'avatar' => 'assets/img/avatars/user-5.jpg',
                    'rating' => 5,
                    'review' => 'From planning to implementation, the team maintained excellent communication and delivered a solution tailored to our requirements. We appreciate their professionalism and ongoing support.',
                ],

                [
                    'name' => 'Anjali Mehta',
                    'role' => 'Founder',
                    'company' => 'Digital Ventures',
                    'avatar' => 'assets/img/avatars/user-6.jpg',
                    'rating' => 4,
                    'review' => 'We were impressed with the quality of work and the team’s ability to understand our business needs. INNOTELL TECH delivered a clean, professional, and scalable digital solution.',
                ],

            ];

      ?>

      <section class="section-py testimonials-section d-none"> 
          <div class="container">

              <!-- Section Heading -->
              <div class="text-center mb-5" data-aos="fade-up">

                  <div class="section-tag">
                      Client Reviews
                  </div>

                  <h2 class="section-title">
                      What Our Clients
                      <span class="text-gradient">
                          Say About Us
                      </span>
                  </h2>

              </div>


              <!-- Testimonials Slider -->
              <div
                  class="swiper testimonials-swiper"
                  data-aos="fade-up"
                  data-aos-delay="100"
              >

                  <div class="swiper-wrapper">

                      <?php foreach ($testimonialArr as $testimonial) { ?>

                          <div class="swiper-slide">

                              <div class="testimonial-card">

                                  <!-- Quote -->
                                  <span class="testimonial-quote">
                                      "
                                  </span>


                                  <!-- Rating -->
                                  <div class="testimonial-rating">

                                      <?php

                                      $rating = (int) $testimonial['rating'];

                                      for ($i = 1; $i <= 5; $i++) {

                                          if ($i <= $rating) {

                                              echo '<i class="fa-solid fa-star"></i>';

                                          } else {

                                              echo '<i class="fa-regular fa-star"></i>';

                                          }

                                      }

                                      ?>

                                  </div>


                                  <!-- Review -->
                                  <p class="testimonial-text">

                                      <?= htmlspecialchars($testimonial['review']) ?>

                                  </p>


                                  <!-- Author -->
                                  <div class="testimonial-author">

                                      <img
                                          src="<?= htmlspecialchars($testimonial['avatar']) ?>"
                                          alt="<?= htmlspecialchars($testimonial['name']) ?>"
                                          class="testimonial-avatar"
                                          loading="lazy"
                                      />

                                      <div>

                                          <div class="testimonial-name">

                                              <?= htmlspecialchars($testimonial['name']) ?>

                                          </div>

                                          <div class="testimonial-role">

                                              <?= htmlspecialchars($testimonial['role']) ?>

                                              <?php if (!empty($testimonial['company'])) { ?>

                                                  , <?= htmlspecialchars($testimonial['company']) ?>

                                              <?php } ?>

                                          </div>

                                      </div>

                                  </div>

                              </div>

                          </div>

                      <?php } ?>

                  </div>


                  <!-- Pagination -->
                  <div class="swiper-pagination swiper-pagination-custom mt-4"></div>

              </div>

          </div> 
      </section>
      

  <!-- ============================================================
       TEAM PREVIEW
       ============================================================ -->
    <section class="section-py d-none" id="team">
      <div class="container">

        <div class="row justify-content-between align-items-end mb-5">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="section-tag">Meet The Team</div>
            <h2 class="section-title">The Brilliant Minds <span class="text-gradient">Behind NexVera</span></h2>
          </div>
          <div class="col-lg-4 text-lg-end" data-aos="fade-left">
            <a href="team.html" class="btn-outline-custom">View Full Team <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="row g-4">
          <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
            <div class="team-card">
              <div class="team-img-wrap">
                <img src="assets/img/teams/team-8.jpg" alt="Marcus Webb" class="team-img"
                  loading="lazy" />
                <div class="team-social-overlay">
                  <a href="#" class="team-social-btn"><i class="fa-brands fa-linkedin"></i></a>
                  <a href="#" class="team-social-btn"><i class="fa-brands fa-github"></i></a>
                  <a href="#" class="team-social-btn"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
              <div class="team-info">
                <a href="#" class="team-name text-decoration-none">Marcus Webb</a>
                <div class="team-role">CEO & Co-Founder</div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="team-card">
              <div class="team-img-wrap">
                <img src="assets/img/teams/team-3.jpg" alt="Elena Vasquez" class="team-img"
                  loading="lazy" />
                <div class="team-social-overlay">
                  <a href="#" class="team-social-btn"><i class="fa-brands fa-linkedin"></i></a>
                  <a href="#" class="team-social-btn"><i class="fa-brands fa-github"></i></a>
                  <a href="#" class="team-social-btn"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
              <div class="team-info">
                <a href="#" class="team-name text-decoration-none">Elena Vasquez</a>
                <div class="team-role">CTO & Lead Architect</div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="team-card">
              <div class="team-img-wrap">
                <img src="assets/img/teams/team-4.jpg" alt="James Okafor" class="team-img"
                  loading="lazy" />
                <div class="team-social-overlay">
                  <a href="#" class="team-social-btn"><i class="fa-brands fa-linkedin"></i></a>
                  <a href="#" class="team-social-btn"><i class="fa-brands fa-github"></i></a>
                  <a href="#" class="team-social-btn"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
              <div class="team-info">
                <a href="#" class="team-name text-decoration-none">James Okafor</a>
                <div class="team-role">Head of Engineering</div>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="team-card">
              <div class="team-img-wrap">
                <img src="assets/img/teams/team-5.jpg" alt="Aisha Tanaka" class="team-img"
                  loading="lazy" />
                <div class="team-social-overlay">
                  <a href="#" class="team-social-btn"><i class="fa-brands fa-linkedin"></i></a>
                  <a href="#" class="team-social-btn"><i class="fa-brands fa-github"></i></a>
                  <a href="#" class="team-social-btn"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
              <div class="team-info">
                <a href="#" class="team-name text-decoration-none">Aisha Tanaka</a>
                <div class="team-role">Creative Director</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
 

    <!-- ============================================================
       BLOG
       ============================================================ -->
    <?php

      $blogArr = [

          [
              'title' => 'How AI Is Transforming Modern Business Operations',
              'category' => 'Artificial Intelligence',
              'image' => 'assets/img/blog/blog-1.jpg',
              'alt' => 'Artificial Intelligence and Business Automation',
              'excerpt' => 'Discover how AI-powered technologies and intelligent automation are helping businesses improve productivity, streamline operations, and make smarter decisions.',
              'author' => 'INNOTELL TECH',
              'author-image' => 'assets/img/avatars/user-1.jpg',
              'date' => 'Aug 20, 2026',
              'url' => 'blog-single.php?slug=ai-transforming-business',
              'delay' => '0',
          ],

          [
              'title' => 'Why Custom Software Can Give Your Business a Competitive Edge',
              'category' => 'Software Development',
              'image' => 'assets/img/blog/blog-2.jpg',
              'alt' => 'Custom Software Development',
              'excerpt' => 'Learn how tailored software solutions can improve business processes, increase efficiency, and provide the flexibility needed for long-term growth.',
              'author' => 'INNOTELL TECH',
              'author-image' => 'assets/img/avatars/user-2.jpg',
              'date' => 'Aug 12, 2026',
              'url' => 'blog-single.php?slug=custom-software-business-growth',
              'delay' => '100',
          ],

          [
              'title' => 'Building Better Digital Experiences With UI/UX Design',
              'category' => 'UI/UX Design',
              'image' => 'assets/img/blog/blog-3.jpg',
              'alt' => 'UI UX Digital Product Design',
              'excerpt' => 'Explore the principles behind effective UI/UX design and how user-focused digital experiences can improve engagement, usability, and customer satisfaction.',
              'author' => 'INNOTELL TECH',
              'author-image' => 'assets/img/avatars/user-3.jpg',
              'date' => 'Aug 05, 2026',
              'url' => 'blog-single.php?slug=better-digital-experiences',
              'delay' => '200',
          ],

          [
              'title' => 'Business Automation: Reduce Manual Work and Improve Efficiency',
              'category' => 'Business Automation',
              'image' => 'assets/img/blog/blog-4.jpg',
              'alt' => 'Business Process Automation',
              'excerpt' => 'Understand how workflow automation can reduce repetitive tasks, minimize errors, and help teams focus on higher-value business activities.',
              'author' => 'INNOTELL TECH',
              'author-image' => 'assets/img/avatars/user-4.jpg',
              'date' => 'Jul 28, 2026',
              'url' => 'blog-single.php?slug=business-automation-efficiency',
              'delay' => '0',
          ],

          [
              'title' => 'Choosing the Right Technology for a Scalable Web Application',
              'category' => 'Web Development',
              'image' => 'assets/img/blog/blog-5.jpg',
              'alt' => 'Scalable Web Application Development',
              'excerpt' => 'A practical guide to selecting the right architecture, technologies, and development approach for building scalable and reliable web applications.',
              'author' => 'INNOTELL TECH',
              'author-image' => 'assets/img/avatars/user-5.jpg',
              'date' => 'Jul 20, 2026',
              'url' => 'blog-single.php?slug=scalable-web-application',
              'delay' => '100',
          ],

          [
              'title' => 'Digital Transformation Strategies for Growing Businesses',
              'category' => 'Digital Transformation',
              'image' => 'assets/img/blog/blog-6.jpg',
              'alt' => 'Digital Transformation Strategy',
              'excerpt' => 'Learn how businesses can use modern technology, connected systems, and smarter processes to adapt, compete, and create new opportunities.',
              'author' => 'INNOTELL TECH',
              'author-image' => 'assets/img/avatars/user-6.jpg',
              'date' => 'Jul 14, 2026',
              'url' => 'blog-single.php?slug=digital-transformation-strategies',
              'delay' => '200',
          ],

      ];

    ?>

    <section class="section-py" id="blog">

      <div class="container">

          <!-- Section Heading -->
          <div class="row justify-content-between align-items-end mb-5">

              <div class="col-lg-6" data-aos="fade-right">

                  <div class="section-tag">
                      Insights & News
                  </div>

                  <h2 class="section-title">
                      From Our
                      <span class="text-gradient">
                          Tech Blog
                      </span>
                  </h2>

              </div>


              <div class="col-lg-4 text-lg-end" data-aos="fade-left">

                  <a href="blog.php" class="btn-outline-custom">

                      View All Articles

                      <i class="fa-solid fa-arrow-right"></i>

                  </a>

              </div>

          </div>


          <!-- Blog Grid -->
          <div class="row g-4">

              <?php

              // Show only latest 3 posts on homepage
              $latestBlogs = array_slice($blogArr, 0, 3);

              foreach ($latestBlogs as $blog) {

              ?>

                  <div
                      class="col-md-6 col-lg-4"
                      data-aos="fade-up"
                      data-aos-delay="<?= htmlspecialchars($blog['delay']) ?>"
                  >

                      <div class="blog-card">

                          <!-- Blog Image -->
                          <div class="blog-card-img-wrap">

                              <img
                                  src="<?= htmlspecialchars($blog['image']) ?>"
                                  alt="<?= htmlspecialchars($blog['alt']) ?>"
                                  class="blog-card-img"
                                  loading="lazy"
                              />

                          </div>


                          <!-- Blog Content -->
                          <div class="blog-card-body">

                              <!-- Category -->
                              <div class="blog-post-category">

                                  <?= htmlspecialchars($blog['category']) ?>

                              </div>


                              <!-- Blog Title -->
                              <a href="<?= htmlspecialchars($blog['url']) ?>">

                                  <h2 class="blog-card-title h4">

                                      <?= htmlspecialchars($blog['title']) ?>

                                  </h2>

                              </a>


                              <!-- Excerpt -->
                              <p class="blog-card-excerpt">

                                  <?= htmlspecialchars($blog['excerpt']) ?>

                              </p>


                              <!-- Blog Meta -->
                              <div class="blog-card-meta">

                                  <!-- Author -->
                                  <div class="blog-meta-author">

                                      <img
                                          src="<?= htmlspecialchars($blog['author-image']) ?>"
                                          alt="<?= htmlspecialchars($blog['author']) ?>"
                                          class="blog-meta-avatar"
                                          loading="lazy"
                                      />

                                      <a href="#">

                                          <span class="blog-meta-name">

                                              <?= htmlspecialchars($blog['author']) ?>

                                          </span>

                                      </a>

                                  </div>


                                  <!-- Date -->
                                  <span class="blog-meta-read">

                                      <i class="fa-regular fa-calendar"></i>

                                      <?= htmlspecialchars($blog['date']) ?>

                                  </span>

                              </div>

                          </div>

                      </div>

                  </div>

              <?php

              }

              ?>

          </div>

      </div>

    </section>

  <!-- ============================================================
       CTA
       ============================================================ -->
  <section class="section-py cta-section">
    <div class="cta-blob cta-blob-1"></div>
    <div class="cta-blob cta-blob-2"></div>
    <div class="container">
      <div class="cta-content" data-aos="fade-up">
        <div class="section-tag accent mx-auto mb-4 section-tag--inline-flex">READY TO BUILD SOMETHING GREAT?</div>
        <h2 class="cta-title">Let's Transform Your<br class="d-none d-md-block" />Business With Technology</h2>
        <p class="cta-text">Whether you're launching a new idea, improving existing operations, or planning your next digital transformation, INNOTELL TECH delivers the technology, expertise, and support to turn your vision into measurable business growth.</p>
        <div class="cta-actions">
          <a href="contact.html" class="btn-white-custom btn-lg-custom">Start Your Project <i
              class="fa-solid fa-arrow-right"></i></a>
          <a href="portfolio.html" class="btn-ghost-white btn-lg-custom">View Our Work</a>
        </div>
      </div>
    </div>
  </section>

  <?php
      include_once ('elements/footer.php')
  ?>