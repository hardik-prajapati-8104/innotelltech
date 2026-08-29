  

    <?php

include_once('includes/services-data.php');

$slug = isset($_GET['service'])
    ? trim($_GET['service'])
    : '';

if (!isset($services[$slug])) {
    http_response_code(404);
    header('Location: services.php');
    exit;
}

$service = $services[$slug];

include_once('elements/header.php');

?>

  <!-- Page Hero -->
  <section class="page-hero page-hero--blog">

    <div class="page-hero-blob page-hero-blob-1"></div>
    <div class="page-hero-blob page-hero-blob-2"></div>

    <div class="container">

        <div class="page-hero-content" data-aos="fade-up">

            <div class="page-hero-tag">
                <?= htmlspecialchars($service['tag']) ?>
            </div>

            <h1 class="page-hero-title">
                <?= htmlspecialchars($service['title']) ?>
            </h1>

            <p class="page-hero-text">
                <?= htmlspecialchars($service['short_description']) ?>
            </p>

            <nav class="breadcrumb-custom mt-4">

                <div class="breadcrumb-item-custom">
                    <a href="index.php">Home</a>
                </div>

                <span class="breadcrumb-sep">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>

                <div class="breadcrumb-item-custom">
                    <a href="services.php">Services</a>
                </div>

                <span class="breadcrumb-sep">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>

                <div class="breadcrumb-item-custom active">
                    <?= htmlspecialchars($service['title']) ?>
                </div>

            </nav>

        </div>

    </div>

</section>

  <!-- Main Content -->
  <section class="section-py">

    <div class="container">

        <div class="row g-5">

            <!-- Main Content -->
            <div class="col-lg-8">

                <!-- Cover Image -->
                <div class="article-cover" data-aos="fade-up">

                    <img
                        src="<?= htmlspecialchars($service['image']) ?>"
                        alt="<?= htmlspecialchars($service['title']) ?> Service"
                        loading="lazy"
                    >

                </div>


                <!-- Article -->
                <div class="article-body" data-aos="fade-up">

                    <p class="article-lead">
                        <?= htmlspecialchars($service['description']) ?>
                    </p>


                    <!-- What's Included -->

                    <h2>What's Included</h2>

                    <p>
                        Our <?= htmlspecialchars($service['title']) ?>
                        services are designed to provide practical,
                        scalable, and reliable solutions aligned with
                        your business objectives.
                    </p>

                    <ul class="article-list">

                        <?php foreach ($service['what_included'] as $item): ?>

                            <li>

                                <strong>
                                    <?= htmlspecialchars($item['title']) ?>
                                </strong>

                                &mdash;

                                <?= htmlspecialchars($item['description']) ?>

                            </li>

                        <?php endforeach; ?>

                    </ul>


                    <!-- Process -->

                    <h2>Our Process</h2>

                    <p>
                        We follow a structured and collaborative approach
                        to ensure every project is delivered with clarity,
                        quality, and measurable business value.
                    </p>

                    <ol class="article-list">

                        <?php foreach ($service['process'] as $step): ?>

                            <li>

                                <strong>
                                    <?= htmlspecialchars($step['title']) ?>
                                </strong>

                                &mdash;

                                <?= htmlspecialchars($step['description']) ?>

                            </li>

                        <?php endforeach; ?>

                    </ol>


                    <!-- Technologies -->

                    <h2>Technologies We Use</h2>

                    <div class="svc-tech-grid mt-4">

                        <?php foreach ($service['technologies'] as $technology): ?>

                            <div class="svc-tech-badge">

                                <svg width="16" height="16"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="1.8">

                                    <polyline points="16 18 22 12 16 6"/>
                                    <polyline points="8 6 2 12 8 18"/>

                                </svg>

                                <?= htmlspecialchars($technology) ?>

                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>


            <!-- Sidebar -->

            <div class="col-lg-4">

                <aside data-aos="fade-left" data-aos-delay="100">

                    <!-- All Services -->

                    <div class="sw mb-4">

                        <div class="sw-title">
                            All Services
                        </div>

                        <ul class="sw-nav-list">

                            <?php foreach ($services as $serviceSlug => $serviceItem): ?>

                                <li>

                                    <a
                                        href="service-single.php?service=<?= urlencode($serviceSlug) ?>"
                                        class="sw-nav-link <?= $serviceSlug === $slug ? 'active' : '' ?>"
                                    >

                                        <?= htmlspecialchars($serviceItem['title']) ?>

                                        <i class="fa-solid fa-arrow-right"></i>

                                    </a>

                                </li>

                            <?php endforeach; ?>

                        </ul>

                    </div>


                    <!-- Service Highlights -->

                    <div class="sw mb-4">

                        <div class="sw-title">
                            Why Choose Us
                        </div>

                        <ul class="sw-highlights">

                            <li>
                                <svg viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>

                                Business-focused solutions
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>

                                Scalable architecture
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>

                                Experienced technology team
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>

                                Quality-driven development
                            </li>

                            <li>
                                <svg viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>

                                Ongoing technical support
                            </li>

                        </ul>

                    </div>


                    <!-- CTA -->

                    <div class="sw-contact-cta">

                        <div class="sw-contact-cta-glow"></div>

                        <div class="sw-contact-cta-icon">

                            <i class="fa-solid fa-rocket"></i>

                        </div>

                        <h2 class="sw-contact-cta-title h4">
                            Have a Project in Mind?
                        </h2>

                        <p class="sw-contact-cta-text">
                            Let's discuss your requirements and build
                            the right technology solution for your business.
                        </p>

                        <a href="contact.php" class="sw-contact-cta-btn">
                            Get in Touch
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <div class="sw-contact-cta-meta">

                            <span>
                                <i class="fa-regular fa-clock"></i>
                                Response within 24 hrs
                            </span>

                            <span>
                                <i class="fa-solid fa-shield-halved"></i>
                                Free consultation
                            </span>

                        </div>

                    </div>

                </aside>

            </div>

        </div>

    </div>

</section>

  <?php
      include_once ('elements/footer.php')
  ?>