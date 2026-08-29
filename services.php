   <?php
        include_once ('elements/header.php');
        include_once('includes/services-data.php');
    ?> 
  <!-- Page Hero -->
  <section class="page-hero">
    <div class="page-hero-blob page-hero-blob-1"></div>
    <div class="page-hero-blob page-hero-blob-2"></div>
    <div class="container">
      <div class="page-hero-content" data-aos="fade-up">
        <div class="page-hero-tag">What We Do</div>
        <h1 class="page-hero-title">Technology Solutions That<br />Drive Business Growth</h1>
        <p class="page-hero-text">From custom software and web development to automation and digital transformation, we build reliable, scalable technology solutions designed around your business goals.</p>
        <nav class="breadcrumb-custom">
          <div class="breadcrumb-item-custom"><a href="index.php">Home</a></div>
          <span class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></span>
          <div class="breadcrumb-item-custom active">Services</div>
        </nav>
      </div>
    </div>
  </section>

  <?php

    // ==========================================
    // SERVICES DATA
    // ==========================================
    $services = [

        [
            'number' => '01',
            'title' => 'Web Development',
            'description' => 'We build high-performance, scalable websites and web applications that deliver exceptional user experiences and support long-term business growth.',
            'class' => 'web',
            'slug' => 'web-development',
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2"/>
                        <path d="M8 21h8M12 17v4"/>
                        <path d="m8 9 2 2-2 2M13 13h3"/>
                      </svg>'
        ],

        [
            'number' => '02',
            'title' => 'Mobile Applications',
            'description' => 'We create intuitive, secure, and high-performing mobile applications for iOS and Android that keep your customers connected to your business.',
            'class' => 'mobile',
            'slug' => 'mobile-applications',
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="5" y="2" width="14" height="20" rx="2"/>
                        <path d="M12 18h.01"/>
                        <path d="M9 7h6M9 11h4"/>
                      </svg>'
        ],

        [
            'number' => '03',
            'title' => 'AI & Machine Learning',
            'description' => 'Transform business data into intelligent solutions with AI-powered automation, predictive analytics, machine learning models, and smart digital experiences.',
            'class' => 'ai',
            'slug' => 'ai-machine-learning',
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="3"/>
                        <circle cx="12" cy="5" r="1.5"/>
                        <circle cx="19" cy="9" r="1.5"/>
                        <circle cx="19" cy="15" r="1.5"/>
                        <circle cx="12" cy="19" r="1.5"/>
                        <circle cx="5" cy="15" r="1.5"/>
                        <circle cx="5" cy="9" r="1.5"/>
                      </svg>'
        ],

        [
            'number' => '04',
            'title' => 'Cloud & DevOps',
            'description' => 'Build reliable and scalable cloud infrastructure with automated deployments, continuous integration, monitoring, and optimized DevOps workflows.',
            'class' => 'cloud',
            'slug' => 'cloud-devops',
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9z"/>
                        <path d="M12 13v4M10 15l2-2 2 2"/>
                      </svg>'
        ],

        [
            'number' => '05',
            'title' => 'Cybersecurity',
            'description' => 'Protect your business, applications, infrastructure, and sensitive data with comprehensive security solutions designed for today’s evolving digital threats.',
            'class' => 'security',
            'slug' => 'cybersecurity',
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <path d="m9 12 2 2 4-4"/>
                      </svg>'
        ],

        [
            'number' => '06',
            'title' => 'Data Engineering',
            'description' => 'Turn complex data into a strategic business asset with modern data pipelines, analytics platforms, dashboards, and scalable data infrastructure.',
            'class' => 'data',
            'slug' => 'data-engineering',
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <ellipse cx="12" cy="5" rx="9" ry="3"/>
                        <path d="M3 5v14c0 1.66 4.03 3 9 3s9-1.34 9-3V5"/>
                        <path d="M3 12c0 1.66 4.03 3 9 3s9-1.34 9-3"/>
                      </svg>'
        ],

        [
            'number' => '07',
            'title' => 'UI/UX Design',
            'description' => 'We design meaningful digital experiences with intuitive interfaces, clear user journeys, and visually engaging designs that strengthen your brand.',
            'class' => 'web',
            'slug' => 'ui-ux-design',
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M8 12h8M12 8v8"/>
                      </svg>'
        ],

        [
            'number' => '08',
            'title' => 'Custom Software Development',
            'description' => 'We develop secure, scalable, and tailored software solutions designed around your unique business processes and operational requirements.',
            'class' => 'mobile',
            'slug' => 'custom-software-development',
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M8 9l-3 3 3 3M16 9l3 3-3 3M14 5l-4 14"/>
                      </svg>'
        ],

        [
            'number' => '09',
            'title' => 'Business Automation',
            'description' => 'Streamline repetitive processes and improve operational efficiency through intelligent workflows, integrations, automation, and digital transformation.',
            'class' => 'ai',
            'slug' => 'business-automation',
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/>
                        <circle cx="12" cy="12" r="4"/>
                      </svg>'
        ],

        [
            'number' => '10',
            'title' => 'API & System Integration',
            'description' => 'Connect your business systems, applications, and third-party platforms with reliable API development and seamless system integrations.',
            'class' => 'cloud',
            'slug' => 'api-system-integration',
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="6" cy="12" r="3"/>
                        <circle cx="18" cy="6" r="3"/>
                        <circle cx="18" cy="18" r="3"/>
                        <path d="M8.5 10.5l7-3M8.5 13.5l7 3"/>
                      </svg>'
        ],

        [
            'number' => '11',
            'title' => 'Digital Transformation',
            'description' => 'Modernize your business with technology strategies and digital solutions that improve efficiency, customer experiences, and business agility.',
            'class' => 'security',
            'slug' => 'digital-transformation',
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M3 12a9 9 0 1 0 3-6.7"/>
                        <path d="M3 4v5h5"/>
                      </svg>'
        ],

        [
            'number' => '12',
            'title' => 'Analytics & Business Intelligence',
            'description' => 'Make confident, data-driven decisions with powerful analytics, interactive dashboards, performance reporting, and actionable business insights.',
            'class' => 'data',
            'slug' => 'analytics-business-intelligence',
            'icon' => '<svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M4 19V9M10 19V5M16 19v-7M22 19H2"/>
                      </svg>'
        ],

    ];


    // ==========================================
    // PAGINATION SETTINGS
    // ==========================================

    $servicesPerPage = 6;

    $totalServices = count($services);
    $totalPages = (int) ceil($totalServices / $servicesPerPage);

    $currentPage = isset($_GET['page'])
        ? (int) $_GET['page']
        : 1;

    $currentPage = max(1, min($currentPage, $totalPages));

    $offset = ($currentPage - 1) * $servicesPerPage;
    $servicesList = array_values($services);
    $currentServices = array_slice(
        $servicesList,
        $offset,
        $servicesPerPage
    );

  ?>

  <section class="section-py" id="services">

      <div class="container">

          <!-- Section Heading -->
          <div class="text-center mb-5" data-aos="fade-up">

              <div class="section-tag mx-auto">
                  Our Expertise
              </div>

              <h2 class="section-title mt-2">
                  End-to-End
                  <span class="text-gradient">
                      Technology Solutions
                  </span>
              </h2>

              <p class="section-subtitle mx-auto">
                  We combine strategic thinking, creative design, and advanced
                  engineering to deliver scalable technology solutions that help
                  businesses innovate, optimize operations, and accelerate growth.
              </p>

          </div>


          <!-- Services Grid -->
          <div class="row g-4">

              <?php foreach ($currentServices as $index => $service): ?>

                  <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= ($index % 3) * 80 ?>">

                      <div class="svc-card svc-card--<?= htmlspecialchars($service['class']) ?>">

                          <div class="svc-card-top">

                              <!-- Icon -->
                              <div class="svc-card-icon">
                                  <?= $service['icon'] ?>
                              </div>

                              <!-- Number -->
                              <span class="svc-card-num">
                                  <?= htmlspecialchars($service['number']) ?>
                              </span>

                          </div>

                          <!-- Title -->
                          <h3 class="svc-card-title">
                              <?= htmlspecialchars($service['title']) ?>
                          </h3>

                          <!-- Description -->
                          <p class="svc-card-text">
                              <?= htmlspecialchars($service['description']) ?>
                          </p>

                          <!-- Service Link -->
                          <a href="service-single.php?service=<?= urlencode($service['slug']) ?>" class="svc-card-link">
                              Explore Service
                              <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                  stroke="currentColor"
                                  stroke-width="2"
                                  stroke-linecap="round"
                                  stroke-linejoin="round">
                                  <path d="M5 12h14M12 5l7 7-7 7"/>
                              </svg>
                          </a>

                      </div>

                  </div>

              <?php endforeach; ?>

          </div>


          <!-- ======================================
              PAGINATION
          ======================================= -->

          <?php if ($totalPages > 1): ?>

              <nav class="services-pagination mt-5" aria-label="Services pagination" data-aos="fade-up">

                  <ul class="pagination justify-content-center mb-0">

                      <!-- Previous Button -->
                      <li class="page-item <?= $currentPage <= 1 ? 'disabled' : '' ?>">
                          <a class="page-link" href="?page=<?= $currentPage - 1 ?>#services" aria-label="Previous">
                              <span>&laquo;</span>
                          </a>
                      </li>

                      <!-- Page Numbers -->
                      <?php for ($page = 1; $page <= $totalPages; $page++): ?>

                          <li class="page-item <?= $currentPage === $page ? 'active' : '' ?>">
                              <a class="page-link" href="?page=<?= $page ?>#services">
                                  <?= $page ?>
                              </a>
                          </li>

                      <?php endfor; ?>

                      <!-- Next Button -->
                      <li class="page-item <?= $currentPage >= $totalPages ? 'disabled' : '' ?>">

                          <a class="page-link" href="?page=<?= $currentPage + 1 ?>#services" aria-label="Next">
                              <span>&raquo;</span>
                          </a>

                      </li>

                  </ul>

              </nav>

          <?php endif; ?>

      </div>

  </section>

  <style>
    .services-pagination {
        margin-top: 55px;
    }

    .services-pagination .pagination {
        gap: 8px;
    }

    .services-pagination .page-item {
        margin: 0;
    }

    .services-pagination .page-link {
        width: 46px;
        height: 46px;
        border-radius: 12px !important;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid #e3e8ee;
        background: #ffffff;

        color: #27364a;
        font-size: 15px;
        font-weight: 600;

        box-shadow: none;

        transition: all 0.3s ease;
    }

    .services-pagination .page-link:hover {
        transform: translateY(-3px);
        border-color: #2f65a7;
        color: #ffffff;
        background: #2f65a7;
    }

    .services-pagination .page-item.active .page-link {
        color: #ffffff;
        border-color: #2f65a7;
        background: #2f65a7;

        box-shadow: 0 8px 20px rgba(47, 101, 167, 0.18);
    }

    .services-pagination .page-item.disabled .page-link {
        opacity: 0.45;
        pointer-events: none;
        background: #f7f8fa;
    }
  </style>

  <!-- Why Choose Us -->
  <section class="section-py section-bg-light">
    <div class="container">

      <!-- Section header: heading left, description right -->
      <div class="row align-items-end g-4 mb-5" data-aos="fade-up">
        <div class="col-lg-6">
          <div class="section-tag">WHY INNOTELL TECH</div>
          <h2 class="section-title mt-2 mb-0">Technology That Delivers.<span class="text-gradient"> Partnerships That Last.</span></h2>
        </div>
        <div class="col-lg-6">
          <p class="mb-0">At Innotell Tech, we combine strategic thinking, innovative technology, and expert engineering to deliver digital solutions that create measurable value and support sustainable business growth.</p>
        </div>
      </div>

      <!-- Why items: 4 columns full width -->
      <div class="row g-4 mb-4">
        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
          <div class="svc-why-card">
            <div class="svc-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div>
            <div class="svc-why-title">Agile Delivery</div>
            <p class="svc-why-text">Transparent, milestone-driven delivery with regular updates and clear visibility throughout every stage of your project.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="80">
          <div class="svc-why-card">
            <div class="svc-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
            <div class="svc-why-title">Dedicated Expertise</div>
            <p class="svc-why-text">Work with experienced technology professionals who understand your goals and remain focused from strategy through delivery.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="160">
          <div class="svc-why-card">
            <div class="svc-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg></div>
            <div class="svc-why-title">Performance & Scalability</div>
            <p class="svc-why-text">We build secure, high-performing solutions engineered to scale with your users, operations, and future business needs.</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
          <div class="svc-why-card">
            <div class="svc-why-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7a2 2 0 0 1 1.72 2.03z"/></svg></div>
            <div class="svc-why-title">Reliable Ongoing Support</div>
            <p class="svc-why-text">Our partnership continues beyond launch with dependable maintenance, optimization, and technical support when you need it.</p>
          </div>
        </div>
      </div>

      <!-- Stat cards: 4 columns full width -->
      <div class="row g-4">
        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
          <div class="svc-stat-card svc-stat-card--primary">
            <div class="svc-stat-number counter-number" data-count="100" data-suffix="+">100+</div>
            <div class="svc-stat-label">Successful Projects Delivered</div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="80">
          <div class="svc-stat-card svc-stat-card--accent">
            <div class="svc-stat-number counter-number" data-count="98" data-suffix="%">98%</div>
            <div class="svc-stat-label">Client Satisfaction Rate</div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="160">
          <div class="svc-stat-card svc-stat-card--white">
            <div class="svc-stat-number svc-stat-number--primary counter-number" data-count="10" data-suffix="+">10</div>
            <div class="svc-stat-label svc-stat-label--muted">Years of Technology Experience</div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
          <div class="svc-stat-card svc-stat-card--dark">
            <div class="svc-stat-number counter-number" data-count="85" data-suffix="+">55</div>
            <div class="svc-stat-label">Skilled Technology Professionals</div>
          </div>
        </div>
      </div>

    </div>
  </section>

    <!-- Process Section -->
      <section class="section-py">
          <div class="container">

            <div class="text-center mb-5" data-aos="fade-up">
              <div class="section-tag mx-auto">How We Work</div>
              <h2 class="section-title">From Strategy to<span class="text-gradient">Scalable Success</span></h2>
              <p class="section-subtitle mx-auto text-center">A structured, collaborative approach that transforms ideas into reliable digital solutions built for long-term business growth.</p>
            </div>

            <div class="row g-4">
              <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
                <div class="process-step">
                  <div class="process-step-number">01</div>
                  <div class="process-step-connector"></div>
                  <h2 class="process-step-title h4">Discover & Strategize</h2>
                  <p class="process-step-text mb-0">We begin by understanding your business, challenges, users, and objectives to define a clear technology strategy and project roadmap.</p>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="process-step">
                  <div class="process-step-number">02</div>
                  <div class="process-step-connector"></div>
                  <h2 class="process-step-title h4">Design & Architect</h2>
                  <p class="process-step-text mb-0">We transform ideas into intuitive experiences and scalable technical architectures, ensuring every solution is built with purpose and precision.</p>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="process-step">
                  <div class="process-step-number">03</div>
                  <div class="process-step-connector"></div>
                  <h2 class="process-step-title h4">Develop & Validate</h2>
                  <p class="process-step-text mb-0">Our expert team develops your solution through agile workflows, rigorous quality assurance, and continuous testing for reliable performance.</p>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="process-step">
                  <div class="process-step-number">04</div>
                  <h2 class="process-step-title h4">Launch & Evolve</h2>
                  <p class="process-step-text mb-0">We ensure a seamless launch and provide ongoing support, optimization, and enhancements to help your technology grow with your business.</p>
                </div>
              </div>
            </div>

          </div>
      </section>

  <!-- Technologies -->
  <section class="section-py section-bg-light">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <div class="section-tag mx-auto">Tech Stack</div>
        <h2 class="section-title mt-2">Technologies We <span class="text-gradient">Master</span></h2>
      </div>
      <div class="svc-tech-grid" data-aos="fade-up" data-aos-delay="100">
        <div class="svc-tech-badge"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg> JavaScript</div>
        <div class="svc-tech-badge"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="13" x2="15" y2="13"/></svg> TypeScript</div>
        <div class="svc-tech-badge"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="4.93" y1="4.93" x2="9.17" y2="9.17"/><line x1="14.83" y1="14.83" x2="19.07" y2="19.07"/><line x1="14.83" y1="9.17" x2="19.07" y2="4.93"/><line x1="4.93" y1="19.07" x2="9.17" y2="14.83"/></svg> React / Next.js</div>
        <div class="svc-tech-badge"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg> Node.js</div>
        <div class="svc-tech-badge"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.66 4.03 3 9 3s9-1.34 9-3V5"/><path d="M3 12c0 1.66 4.03 3 9 3s9-1.34 9-3"/></svg> PostgreSQL</div>
        <div class="svc-tech-badge"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9z"/></svg> AWS</div>
        <div class="svc-tech-badge"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg> Python</div>
        <div class="svc-tech-badge"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="6" height="6"/><rect x="14" y="4" width="6" height="6"/><rect x="4" y="14" width="6" height="6"/><rect x="14" y="14" width="6" height="6"/></svg> TensorFlow</div>
        <div class="svc-tech-badge"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg> Docker</div>
        <div class="svc-tech-badge"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg> Kubernetes</div>
        <div class="svc-tech-badge"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a5 5 0 1 0 5 5"/><circle cx="12" cy="12" r="10"/><path d="M12 12h.01"/></svg> PHP</div>
        <div class="svc-tech-badge"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg> Laravel</div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section section-py">
    <div class="cta-blob cta-blob-1"></div>
    <div class="cta-blob cta-blob-2"></div>
    <div class="container">
      <div class="cta-content text-center" data-aos="fade-up">
        <div class="section-tag mx-auto section-tag--cta">READY TO INNOVATE?</div>
        <h2 class="cta-title mt-3">Let's Build Your<span class="text-color-accent">Digital Future</span></h2>
        <p class="cta-text">Partner with Innotell Tech to transform your ideas into powerful, scalable technology solutions. Let's discuss your goals and create the right solution for your business.</p>
        <div class="d-flex justify-content-center flex-wrap gap-3 mt-4">
          <a href="contact.php" class="btn-white-custom">Start a Conversation <i class="fa-solid fa-arrow-right"></i></a>
          <a href="portfolio.php" class="btn-ghost-white">Explore Our Solutions</a>
        </div>
      </div>
    </div>
  </section>

    <?php
      include_once ('elements/footer.php')
  ?>