    <?php
       
        include_once ('elements/header.php');
    ?> 
    
  <!-- Page Hero -->
  <section class="page-hero">
    <div class="page-hero-blob page-hero-blob-1"></div>
    <div class="page-hero-blob page-hero-blob-2"></div>
    <div class="container">
      <div class="page-hero-content" data-aos="fade-up">
        <div class="page-hero-tag">Help Centre</div>
        <h1 class="page-hero-title">Frequently Asked <br />Questions</h1>
        <p class="page-hero-text">Everything you need to know about working with NexVera — from getting started to scaling your team.</p>
        <nav class="breadcrumb-custom">
          <div class="breadcrumb-item-custom"><a href="index.html">Home</a></div>
          <span class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></span>
          <div class="breadcrumb-item-custom active">FAQs</div>
        </nav>
      </div>
    </div>
  </section>

    <?php

          $faqCategories = [

              [
                  'id'    => 'general',
                  'title' => 'General',
                  'icon'  => 'fa-solid fa-circle-question',
                  'faqs'  => [

                      [
                          'question' => 'What does Innotell Tech do?',
                          'answer'   => 'Innotell Tech provides end-to-end technology solutions that help businesses design, develop, modernize, and scale their digital operations. Our expertise includes web and mobile applications, custom software, AI solutions, cloud technologies, cybersecurity, and data-driven systems.'
                      ],

                      [
                          'question' => 'What types of businesses do you work with?',
                          'answer'   => 'We work with startups, growing businesses, and established organizations looking to build new digital products, improve existing systems, automate processes, or adopt modern technologies that support their business objectives.'
                      ],

                      [
                          'question' => 'Can Innotell Tech work as an extension of our internal team?',
                          'answer'   => 'Yes. Our specialists can collaborate closely with your internal teams and stakeholders, providing the technical expertise needed to accelerate delivery while maintaining clear communication and alignment with your business goals.'
                      ],

                      [
                          'question' => 'Do you provide complete end-to-end technology solutions?',
                          'answer'   => 'Yes. Depending on your requirements, we can support your project from discovery and strategy through design, development, testing, deployment, and ongoing optimization and support.'
                      ]

                  ]
              ],


              [
                  'id'    => 'pricing',
                  'title' => 'Pricing & Billing',
                  'icon'  => 'fa-solid fa-credit-card',
                  'faqs'  => [

                      [
                          'question' => 'How is project pricing determined?',
                          'answer'   => 'Pricing is based on factors such as project scope, technical complexity, delivery timeline, required expertise, integrations, and long-term support requirements. We recommend the most suitable engagement structure after understanding your objectives.'
                      ],

                      [
                          'question' => 'Do you offer fixed-price projects?',
                          'answer'   => 'Yes. Fixed-price engagements can be suitable for projects with clearly defined requirements, deliverables, and timelines. For evolving products or long-term development, a dedicated team or flexible engagement model may be more appropriate.'
                      ],

                      [
                          'question' => 'Can the scope of a project change during development?',
                          'answer'   => 'Yes. We understand that business requirements can evolve. Scope changes are reviewed transparently to assess their impact on timelines, resources, and cost before implementation.'
                      ],

                      [
                          'question' => 'Do you provide a project estimate before development begins?',
                          'answer'   => 'Yes. After reviewing your requirements, we can provide a clear proposal outlining the recommended approach, scope, estimated timeline, and engagement structure.'
                      ]

                  ]
              ],


              [
                  'id'    => 'process',
                  'title' => 'Process & Delivery',
                  'icon'  => 'fa-solid fa-list-check',
                  'faqs'  => [

                      [
                          'question' => 'How does a project with Innotell Tech get started?',
                          'answer'   => 'We begin by understanding your business objectives, challenges, users, technical requirements, and expected outcomes. This discovery phase helps us define the right solution and create a clear delivery roadmap.'
                      ],

                      [
                          'question' => 'What development methodology do you use?',
                          'answer'   => 'We follow flexible, iterative delivery practices and adapt the workflow to the needs of each project. This approach enables regular progress reviews, continuous feedback, quality assurance, and transparent collaboration.'
                      ],

                      [
                          'question' => 'How will we track project progress?',
                          'answer'   => 'We establish clear communication channels, milestones, and regular progress updates. Stakeholders receive visibility into completed work, upcoming priorities, key decisions, and project progress throughout the engagement.'
                      ],

                      [
                          'question' => 'How do you handle testing and quality assurance?',
                          'answer'   => 'Quality assurance is integrated throughout the development lifecycle. Depending on the project, this may include functional testing, integration testing, performance testing, security reviews, and user acceptance validation.'
                      ]

                  ]
              ],


              [
                  'id'    => 'technical',
                  'title' => 'Technical',
                  'icon'  => 'fa-solid fa-code',
                  'faqs'  => [

                      [
                          'question' => 'What technologies does Innotell Tech work with?',
                          'answer'   => 'Our technology capabilities span modern web and mobile development, backend systems, cloud infrastructure, APIs, artificial intelligence, automation, cybersecurity, and data engineering. Technology choices are based on your project requirements and long-term goals.'
                      ],

                      [
                          'question' => 'Can you work with our existing application or software?',
                          'answer'   => 'Yes. We can assess, improve, extend, modernize, or integrate with existing applications. Our process begins with understanding the current architecture, identifying opportunities and risks, and recommending a practical improvement strategy.'
                      ],

                      [
                          'question' => 'Can you integrate third-party systems and APIs?',
                          'answer'   => 'Yes. We develop secure integrations between applications, business platforms, payment systems, cloud services, CRM platforms, and other third-party services where technically appropriate.'
                      ],

                      [
                          'question' => 'How do you approach application security?',
                          'answer'   => 'Security is considered throughout the solution lifecycle. We apply appropriate practices for secure development, access management, data protection, dependency management, testing, and infrastructure configuration based on the project requirements.'
                      ]

                  ]
              ],


              [
                  'id'    => 'support',
                  'title' => 'Support',
                  'icon'  => 'fa-solid fa-headset',
                  'faqs'  => [

                      [
                          'question' => 'Do you provide support after project launch?',
                          'answer'   => 'Yes. We can provide ongoing support after launch, including maintenance, issue resolution, security updates, performance optimization, monitoring, and future feature development.'
                      ],

                      [
                          'question' => 'Can you continue developing new features after launch?',
                          'answer'   => 'Absolutely. Digital products often evolve after launch. Our team can continue supporting your roadmap with new features, integrations, enhancements, and technology improvements as your business requirements grow.'
                      ],

                      [
                          'question' => 'How can we report a technical issue?',
                          'answer'   => 'Support processes are defined based on the engagement and service requirements. Your team will have a clear channel for reporting issues and communicating priorities with the appropriate technical team.'
                      ],

                      [
                          'question' => 'Can you maintain software developed by another company?',
                          'answer'   => 'Yes. We can review an existing application and, where appropriate, take responsibility for ongoing maintenance, improvements, technical modernization, and further development.'
                      ]

                  ]
              ]

          ];


          // =============================================
          // PAGINATION SETTINGS
          // One FAQ category per page
          // =============================================

          $categoriesPerPage = 1;

          $totalCategories = count($faqCategories);

          $totalPages = (int) ceil(
              $totalCategories / $categoriesPerPage
          );


          // Current Page
          $currentPage = isset($_GET['page'])
              ? (int) $_GET['page']
              : 1;


          // Prevent Invalid Pages
          $currentPage = max(
              1,
              min($currentPage, $totalPages)
          );


          // Calculate Offset
          $offset = ($currentPage - 1) * $categoriesPerPage;


          // Get Current Category
          $currentCategories = array_slice(
              $faqCategories,
              $offset,
              $categoriesPerPage
          );

    ?>

    <section class="section-py" id="faq-section">

        <div class="container">

            <div class="row g-5">
              
                <!-- Sidebar -->
                <div class="col-lg-3 d-none d-lg-block">

                    <div class="faq-cat-sidebar">

                        <div class="faq-cat-title">
                            Browse by Topic
                        </div>

                        <?php foreach ($faqCategories as $index => $category): ?>

                            <a href="javascript:void(0)" class="faq-cat-link <?= $index === 0 ? 'active' : '' ?>" data-category="<?= htmlspecialchars($category['id']) ?>">
                                <i class="<?= htmlspecialchars($category['icon']) ?>"></i>
                                <?= htmlspecialchars($category['title']) ?>
                            </a>

                        <?php endforeach; ?>

                    </div>

                </div>

                <!-- FAQ Content -->
                <div class="col-lg-9">

                    <?php foreach ($faqCategories as $categoryIndex => $category): ?>

                        <div class="faq-section faq-category-content <?= $categoryIndex !== 0 ? 'd-none' : '' ?>" id="faq-<?= htmlspecialchars($category['id']) ?>" data-category="<?= htmlspecialchars($category['id']) ?>">

                            <!-- Category Title -->
                            <div class="faq-section-label">
                                <i class="<?= htmlspecialchars($category['icon']) ?>"></i>
                                <?= htmlspecialchars($category['title']) ?>
                            </div>

                            <!-- Accordion -->
                            <div class="accordion faq-accordion" id="faqAccordion<?= $categoryIndex ?>">


                                <?php foreach ($category['faqs'] as $faqIndex => $faq): ?>

                                    <?php
                                        $collapseId = 'collapse-' . $category['id'] . '-' . $faqIndex;
                                        $isFirst = $faqIndex === 0;
                                    ?>

                                    <div class="accordion-item faq-item">

                                        <h2 class="accordion-header">

                                            <button class="accordion-button faq-btn <?= !$isFirst ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>">
                                                <?= htmlspecialchars($faq['question']) ?>
                                            </button>

                                        </h2>


                                        <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?= $isFirst ? 'show' : '' ?>" data-bs-parent="#faqAccordion<?= $categoryIndex ?>">

                                            <div class="accordion-body faq-body">
                                                <?= htmlspecialchars($faq['answer']) ?>
                                            </div>

                                        </div>

                                    </div>

                                <?php endforeach; ?>


                            </div>

                        </div>

                    <?php endforeach; ?>


                    <!-- AJAX STYLE PAGINATION -->
                    <nav class="faq-pagination mt-5">

                        <ul class="pagination justify-content-center mb-0">

                            <!-- Previous -->
                            <li class="page-item">
                                <button type="button" class="page-link faq-prev">
                                    <i class="fa-solid fa-arrow-left"></i>
                                </button>
                            </li>

                            <!-- Dynamic Page Numbers -->
                            <?php foreach ($faqCategories as $index => $category): ?>

                                <li class="page-item <?= $index === 0 ? 'active' : '' ?>">

                                    <button type="button" class="page-link faq-page-btn" data-index="<?= $index ?>" data-category="<?= htmlspecialchars($category['id']) ?>">
                                        <?= $index + 1 ?>
                                    </button>

                                </li>

                            <?php endforeach; ?>

                            <!-- Next -->
                            <li class="page-item">

                                <button type="button" class="page-link faq-next">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>

                            </li>

                        </ul>

                    </nav>
                    <!-- Contact -->
                    <div class="faq-contact-box">

                        <h2 class="h5">Still Have Questions?</h2>
                        <p>Our technology experts are ready to help you find the right solution for your business requirements.</p>
                        <a href="contact.php" class="btn-primary-custom">
                            Talk to Our Experts
                            <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <style>
      .faq-pagination .pagination {
          gap: 8px;
      }

      .faq-pagination .page-item {
          margin: 0;
      }

      .faq-pagination .page-link {
          width: 44px;
          height: 44px;

          display: flex;
          align-items: center;
          justify-content: center;

          border-radius: 10px !important;

          border: 1px solid #dce3ec;
          background: #ffffff;

          color: #244f86;
          font-weight: 600;

          transition: all 0.3s ease;
      }

      .faq-pagination .page-link:hover {
          background: #244f86;
          border-color: #244f86;
          color: #ffffff;

          transform: translateY(-2px);
      }

      .faq-pagination .page-item.active .page-link {
          background: #244f86;
          border-color: #244f86;

          color: #ffffff;

          box-shadow: 0 8px 20px rgba(36, 79, 134, 0.18);
      }

      .faq-pagination .page-item.disabled .page-link {
          opacity: 0.45;
          pointer-events: none;
      }
    </style>

  <!-- CTA -->
  <section class="cta-section section-py">
    <div class="cta-blob cta-blob-1"></div>
    <div class="cta-blob cta-blob-2"></div>
    <div class="container">
      <div class="cta-content text-center" data-aos="fade-up">
        <div class="cta-tag">READY TO TRANSFORM?</div>
        <h2 class="cta-title">Turn Your Vision Into a <br class="d-none d-md-block"> Powerful Digital Solution. </h2>
        <p class="cta-text">Partner with Innotell Tech to transform complex challenges into innovative, scalable, and high-performing technology solutions built for long-term growth.</p>
        <div class="cta-actions">
          <a href="contact.html" class="btn-white-custom">Talk to Our Experts</a>
          <a href="pricing.html" class="btn-ghost-white">View Our Solutions</a>
        </div>
      </div>
    </div>
  </section>

  <?php
      include_once ('elements/footer.php')
  ?>