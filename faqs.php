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

  <!-- FAQ Section -->
  <section class="section-py">
    <div class="container">
      <div class="row g-5">

        <!-- Sidebar -->
        <div class="col-lg-3 d-none d-lg-block" data-aos="fade-right">
          <div class="faq-cat-sidebar">
            <div class="faq-cat-title">Browse by Topic</div>
            <a href="#faq-general" class="faq-cat-link active"><i class="fa-solid fa-circle-question"></i> General</a>
            <a href="#faq-pricing" class="faq-cat-link"><i class="fa-solid fa-credit-card"></i> Pricing &amp; Billing</a>
            <a href="#faq-process" class="faq-cat-link"><i class="fa-solid fa-list-check"></i> Process &amp; Delivery</a>
            <a href="#faq-technical" class="faq-cat-link"><i class="fa-solid fa-code"></i> Technical</a>
            <a href="#faq-support" class="faq-cat-link"><i class="fa-solid fa-headset"></i> Support</a>
          </div>
        </div>

        <!-- Accordion Sections -->
        <div class="col-lg-9">

          <!-- General -->
          <div class="faq-section" id="faq-general" data-aos="fade-up">
            <div class="faq-section-label"><i class="fa-solid fa-circle-question"></i> General</div>
            <div class="accordion faq-accordion" id="faqGeneral">

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#gen1">
                    What exactly does NexVera do?
                  </button>
                </h2>
                <div id="gen1" class="accordion-collapse collapse show" data-bs-parent="#faqGeneral">
                  <div class="accordion-body faq-body">NexVera is a technology solutions company. We design, build, and scale digital products — from web and mobile applications to AI-powered platforms and cloud infrastructure. We embed directly into your team as senior engineers, architects, and product strategists, without the overhead of a traditional agency.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gen2">
                    Do you offer a trial or discovery sprint before committing?
                  </button>
                </h2>
                <div id="gen2" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                  <div class="accordion-body faq-body">Yes — all plans include a 2-week paid trial sprint. This lets us validate fit, set up workflows, and deliver something tangible before you make a longer commitment. There is no obligation to continue after the trial.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gen3">
                    Who owns the IP and code we build together?
                  </button>
                </h2>
                <div id="gen3" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                  <div class="accordion-body faq-body">You do. 100%. All intellectual property, source code, designs, and deliverables are fully assigned to you at the end of each sprint. We sign an IP assignment agreement before work begins.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gen4">
                    How long has NexVera been operating?
                  </button>
                </h2>
                <div id="gen4" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                  <div class="accordion-body faq-body">NexVera was founded in 2012. Over the past 12+ years we have delivered 400+ projects across fintech, healthtech, e-commerce, and enterprise SaaS. Our leadership team has an average of 15 years of industry experience.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gen5">
                    Are you an agency, a consultancy, or a product studio?
                  </button>
                </h2>
                <div id="gen5" class="accordion-collapse collapse" data-bs-parent="#faqGeneral">
                  <div class="accordion-body faq-body">A bit of all three, depending on what you need. For some clients we act as an embedded engineering team (agency model). For others we advise on architecture and technology strategy (consultancy). For early-stage companies we co-create the product from scratch (product studio). We adapt to your context.</div>
                </div>
              </div>

            </div>
          </div>

          <!-- Pricing & Billing -->
          <div class="faq-section" id="faq-pricing" data-aos="fade-up">
            <div class="faq-section-label"><i class="fa-solid fa-credit-card"></i> Pricing &amp; Billing</div>
            <div class="accordion faq-accordion" id="faqPricing">

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#price1">
                    Do you work on fixed-price projects?
                  </button>
                </h2>
                <div id="price1" class="accordion-collapse collapse show" data-bs-parent="#faqPricing">
                  <div class="accordion-body faq-body">For well-scoped projects with clear requirements and defined deliverables, yes. We offer fixed-price engagements for MVPs, design sprints, and specific feature builds. For evolving or complex platforms we typically recommend a retainer model for its flexibility and accountability.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#price2">
                    What if I need services not listed in my plan?
                  </button>
                </h2>
                <div id="price2" class="accordion-collapse collapse" data-bs-parent="#faqPricing">
                  <div class="accordion-body faq-body">We are flexible. If you need security auditing, data science, technical writing, or anything outside your plan's scope, we can either upgrade your plan or add specific services on an ad-hoc basis. Talk to us and we'll find the right structure.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#price3">
                    Can I scale my team up or down during a project?
                  </button>
                </h2>
                <div id="price3" class="accordion-collapse collapse" data-bs-parent="#faqPricing">
                  <div class="accordion-body faq-body">Absolutely. We build this flexibility into every engagement. You can add or reduce engineers with 2 weeks' notice. This makes NexVera ideal for projects with variable scope or delivery sprints.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#price4">
                    Are there any setup fees or hidden costs?
                  </button>
                </h2>
                <div id="price4" class="accordion-collapse collapse" data-bs-parent="#faqPricing">
                  <div class="accordion-body faq-body">No setup fees, no hidden costs. What you see on the pricing page is what you pay. Any optional add-ons (e.g. premium SLAs, additional cloud environments) are discussed and agreed in advance before they appear on an invoice.</div>
                </div>
              </div>

            </div>
          </div>

          <!-- Process & Delivery -->
          <div class="faq-section" id="faq-process" data-aos="fade-up">
            <div class="faq-section-label"><i class="fa-solid fa-list-check"></i> Process &amp; Delivery</div>
            <div class="accordion faq-accordion" id="faqProcess">

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#proc1">
                    How do projects typically get started?
                  </button>
                </h2>
                <div id="proc1" class="accordion-collapse collapse show" data-bs-parent="#faqProcess">
                  <div class="accordion-body faq-body">We start with a scoping call (30–60 min) to understand your goals, constraints, and timeline. We then prepare a tailored proposal with a recommended team composition, engagement model, and projected roadmap. Once agreed, we kick off with an onboarding sprint to align on tooling, communication rhythms, and first deliverables.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#proc2">
                    What methodology do you use — Agile, Scrum, Kanban?
                  </button>
                </h2>
                <div id="proc2" class="accordion-collapse collapse" data-bs-parent="#faqProcess">
                  <div class="accordion-body faq-body">We default to two-week Agile sprints with structured ceremonies — sprint planning, daily standups, sprint reviews, and retrospectives. If your team already uses Kanban or a custom workflow, we adapt to fit. We optimise for delivery, not adherence to a specific label.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#proc3">
                    How do you handle project handoffs and documentation?
                  </button>
                </h2>
                <div id="proc3" class="accordion-collapse collapse" data-bs-parent="#faqProcess">
                  <div class="accordion-body faq-body">Every engagement ends with a structured handoff: full codebase documentation, architecture decision records (ADRs), deployment runbooks, and a knowledge-transfer session with your team. We want you to feel entirely independent after we leave — or confident enough to bring us back for the next phase.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#proc4">
                    Do you sign NDAs?
                  </button>
                </h2>
                <div id="proc4" class="accordion-collapse collapse" data-bs-parent="#faqProcess">
                  <div class="accordion-body faq-body">Yes, we sign mutual NDAs before any substantive discussions. We understand that your ideas and product details are sensitive. Confidentiality is a baseline expectation, not an extra.</div>
                </div>
              </div>

            </div>
          </div>

          <!-- Technical -->
          <div class="faq-section" id="faq-technical" data-aos="fade-up">
            <div class="faq-section-label"><i class="fa-solid fa-code"></i> Technical</div>
            <div class="accordion faq-accordion" id="faqTechnical">

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#tech1">
                    What technologies and stacks do you work with?
                  </button>
                </h2>
                <div id="tech1" class="accordion-collapse collapse show" data-bs-parent="#faqTechnical">
                  <div class="accordion-body faq-body">We work across a broad range of stacks — React, Next.js, Vue, Angular on the frontend; Node.js, Python, Go, Java, and .NET on the backend; React Native and Flutter for mobile; AWS, GCP, and Azure for cloud; and PostgreSQL, MongoDB, Redis, and Kafka for data. We recommend the right tool for the job, not the one we're most comfortable with.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech2">
                    Can you work with our existing codebase?
                  </button>
                </h2>
                <div id="tech2" class="accordion-collapse collapse" data-bs-parent="#faqTechnical">
                  <div class="accordion-body faq-body">Absolutely. We regularly join projects mid-lifecycle. We start with a technical audit to understand the current architecture, identify risks, and surface quick wins. From there, we contribute incrementally — improving quality and velocity without disrupting what's already working.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tech3">
                    How do you approach security and compliance?
                  </button>
                </h2>
                <div id="tech3" class="accordion-collapse collapse" data-bs-parent="#faqTechnical">
                  <div class="accordion-body faq-body">Security is embedded into our process, not bolted on at the end. We follow OWASP guidelines, conduct dependency audits, implement least-privilege IAM policies, and offer SOC 2-aligned delivery practices. For regulated industries we have experience with HIPAA, GDPR, and PCI-DSS requirements.</div>
                </div>
              </div>

            </div>
          </div>

          <!-- Support -->
          <div class="faq-section mb-0" id="faq-support" data-aos="fade-up">
            <div class="faq-section-label"><i class="fa-solid fa-headset"></i> Support</div>
            <div class="accordion faq-accordion" id="faqSupport">

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#sup1">
                    How do you handle time zones and communication?
                  </button>
                </h2>
                <div id="sup1" class="accordion-collapse collapse show" data-bs-parent="#faqSupport">
                  <div class="accordion-body faq-body">Our teams are distributed across Europe, North America, and Asia — giving us natural overlap with almost any time zone. We use async-first practices (Loom, Slack threads, documented decisions) alongside regular live syncs timed to your working hours.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sup2">
                    What happens if something breaks in production?
                  </button>
                </h2>
                <div id="sup2" class="accordion-collapse collapse" data-bs-parent="#faqSupport">
                  <div class="accordion-body faq-body">Growth and Enterprise plans include on-call support with defined SLAs (2-hour acknowledgement, 8-hour resolution for P1 incidents). We use PagerDuty or your preferred alerting stack. For Starter plans, issues are handled during business hours with a next-day SLA.</div>
                </div>
              </div>

              <div class="accordion-item faq-item">
                <h2 class="accordion-header">
                  <button class="accordion-button faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sup3">
                    Do you offer post-launch maintenance?
                  </button>
                </h2>
                <div id="sup3" class="accordion-collapse collapse" data-bs-parent="#faqSupport">
                  <div class="accordion-body faq-body">Yes. We offer ongoing maintenance retainers covering bug fixes, dependency updates, security patches, performance monitoring, and incremental feature development. Many clients transition from a build engagement into a maintenance retainer once their product is live.</div>
                </div>
              </div>

            </div>

            <!-- Still have questions box -->
            <div class="faq-contact-box" data-aos="fade-up">
              <h2 class="h5">Still have a question?</h2>
              <p>Our team is happy to answer anything that's not covered here. Expect a reply within one business day.</p>
              <a href="contact.html" class="btn-primary-custom">Contact Us <i class="fa-solid fa-arrow-right ms-1"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section section-py">
    <div class="cta-blob cta-blob-1"></div>
    <div class="cta-blob cta-blob-2"></div>
    <div class="container">
      <div class="cta-content text-center" data-aos="fade-up">
        <div class="cta-tag">Ready to Start?</div>
        <h2 class="cta-title">Let's build something <br class="d-none d-md-block"> great together.</h2>
        <p class="cta-text">Whether you have a clear brief or just an idea, we'll help you shape it into a plan and deliver it with precision.</p>
        <div class="cta-actions">
          <a href="contact.html" class="btn-white-custom">Schedule a Call</a>
          <a href="pricing.html" class="btn-ghost-white">View Pricing</a>
        </div>
      </div>
    </div>
  </section>

  <?php
      include_once ('elements/footer.php')
  ?>