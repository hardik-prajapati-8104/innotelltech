<?php
    require_once __DIR__ . '/includes/portfolio-data.php';

    $projectSlug = $_GET['project'] ?? $portfolioItems[0]['slug'];
    $project = $portfolioItems[0];

    foreach ($portfolioItems as $portfolioItem) {
        if ($portfolioItem['slug'] === $projectSlug) {
            $project = $portfolioItem;
            break;
        }
    }

    $details = $project['details'];
    include_once ('elements/header.php');
?>

  <!-- Page Hero -->
  <section class="page-hero page-hero--blog">
    <div class="page-hero-blob page-hero-blob-1"></div>
    <div class="page-hero-blob page-hero-blob-2"></div>
    <div class="container">
      <div class="page-hero-content" data-aos="fade-up">
        <div class="page-hero-tag"><?= htmlspecialchars($details['tag'], ENT_QUOTES, 'UTF-8') ?></div>
        <h1 class="page-hero-title"><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></h1>
        <p class="page-hero-text"><?= htmlspecialchars($details['summary'], ENT_QUOTES, 'UTF-8') ?></p>
        <nav class="breadcrumb-custom mt-4">
          <div class="breadcrumb-item-custom"><a href="index.php">Home</a></div>
          <span class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></span>
          <div class="breadcrumb-item-custom"><a href="portfolio.php">Portfolio</a></div>
          <span class="breadcrumb-sep"><i class="fa-solid fa-chevron-right"></i></span>
          <div class="breadcrumb-item-custom active"><?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?></div>
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
            <a href="<?= htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8') ?>" class="glightbox" data-gallery="proj-gallery"
              data-description="<?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?> - Main Overview">
              <img src="<?= htmlspecialchars($project['image'], ENT_QUOTES, 'UTF-8') ?>"
                alt="<?= htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') ?> overview" loading="lazy" />
            </a>
          </div>
        </div>

        <!-- Article column -->
        <div class="col-lg-8">
          <div class="article-body" data-aos="fade-up">
            <p class="article-lead"><?= htmlspecialchars($details['lead'], ENT_QUOTES, 'UTF-8') ?></p>

            <h2><?= htmlspecialchars($details['challenge_title'], ENT_QUOTES, 'UTF-8') ?></h2>
            <p><?= htmlspecialchars($details['challenge'], ENT_QUOTES, 'UTF-8') ?></p>
            <ul class="article-list">
              <?php foreach ($details['challenge_points'] as $point) { ?>
                <li><?= htmlspecialchars($point, ENT_QUOTES, 'UTF-8') ?></li>
              <?php } ?>
            </ul>

            <h2><?= htmlspecialchars($details['approach_title'], ENT_QUOTES, 'UTF-8') ?></h2>
            <p><?= htmlspecialchars($details['approach'], ENT_QUOTES, 'UTF-8') ?></p>
            <ol class="article-list">
              <?php foreach ($details['approach_points'] as $point) { ?>
                <li><?= htmlspecialchars($point, ENT_QUOTES, 'UTF-8') ?></li>
              <?php } ?>
            </ol>

            <?php if (!empty($details['gallery'])) { ?>
              <h2>Project Gallery</h2>
              <div class="proj-gallery-grid">
                <?php foreach ($details['gallery'] as $galleryItem) { ?>
                  <a href="<?= htmlspecialchars($galleryItem['image'], ENT_QUOTES, 'UTF-8') ?>" class="proj-gallery-item glightbox"
                    data-gallery="proj-gallery" data-description="<?= htmlspecialchars($galleryItem['description'], ENT_QUOTES, 'UTF-8') ?>">
                    <img src="<?= htmlspecialchars($galleryItem['image'], ENT_QUOTES, 'UTF-8') ?>"
                      alt="<?= htmlspecialchars($galleryItem['alt'], ENT_QUOTES, 'UTF-8') ?>" loading="lazy" />
                  </a>
                <?php } ?>
              </div>
            <?php } ?>

            <?php if ($details['quote'] !== '') { ?>
              <blockquote class="article-blockquote">
                <p><?= htmlspecialchars($details['quote'], ENT_QUOTES, 'UTF-8') ?></p>
                <cite><?= htmlspecialchars($details['quote_author'], ENT_QUOTES, 'UTF-8') ?></cite>
              </blockquote>
            <?php } ?>

            <h2>The Results</h2>
            <p><?= htmlspecialchars($details['results_summary'], ENT_QUOTES, 'UTF-8') ?></p>
            <div class="proj-results-row">
              <?php foreach ($details['results'] as $result) { ?>
                <div class="proj-result-cell">
                  <div class="proj-result-num"><?= htmlspecialchars($result['value'], ENT_QUOTES, 'UTF-8') ?></div>
                  <div class="proj-result-label"><?= htmlspecialchars($result['label'], ENT_QUOTES, 'UTF-8') ?></div>
                  <p class="proj-result-desc"><?= htmlspecialchars($result['description'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
          <aside data-aos="fade-left" data-aos-delay="100">
            <div class="sw mb-4">
              <div class="sw-title">Project Details</div>
              <ul class="proj-details-list">
                <li class="proj-details-item">
                  <span class="proj-details-key">Client</span>
                  <span class="proj-details-val"><?= htmlspecialchars($details['client'], ENT_QUOTES, 'UTF-8') ?></span>
                </li>
                <li class="proj-details-item">
                  <span class="proj-details-key">Category</span>
                  <span class="proj-details-val"><?= htmlspecialchars($project['category'], ENT_QUOTES, 'UTF-8') ?></span>
                </li>
                <li class="proj-details-item">
                  <span class="proj-details-key">Year</span>
                  <span class="proj-details-val"><?= htmlspecialchars($details['year'], ENT_QUOTES, 'UTF-8') ?></span>
                </li>
                <li class="proj-details-item">
                  <span class="proj-details-key">Duration</span>
                  <span class="proj-details-val"><?= htmlspecialchars($details['duration'], ENT_QUOTES, 'UTF-8') ?></span>
                </li>
                <li class="proj-details-item">
                  <span class="proj-details-key">Team Size</span>
                  <span class="proj-details-val"><?= htmlspecialchars($details['team_size'], ENT_QUOTES, 'UTF-8') ?></span>
                </li>
                <li class="proj-details-item">
                  <span class="proj-details-key">Location</span>
                  <span class="proj-details-val"><?= htmlspecialchars($details['location'], ENT_QUOTES, 'UTF-8') ?></span>
                </li>
                <?php if ($details['live_url'] !== '') { ?>
                  <li class="proj-details-item">
                    <span class="proj-details-key">Live URL</span>
                    <span class="proj-details-val"><a href="<?= htmlspecialchars($details['live_url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener">
                      <?= htmlspecialchars(parse_url($details['live_url'], PHP_URL_HOST), ENT_QUOTES, 'UTF-8') ?> <i class="fa-solid fa-arrow-up-right-from-square"></i></a></span>
                  </li>
                <?php } ?>
              </ul>
            </div>

            <!-- Contact CTA -->
            <div class="sw-contact-cta">
              <div class="sw-contact-cta-glow"></div>
              <div class="sw-contact-cta-icon"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.98.5-2.5 0-3l-3-3c-.5-.5-2.02-.71-3 0z"></path><path d="M12 15l-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path></svg></div>
              <h2 class="sw-contact-cta-title h4">Have a Project in Mind?</h2>
              <p class="sw-contact-cta-text">Let's build something great together. Our team is ready to turn your idea into reality.</p>
              <a href="contact.php" class="sw-contact-cta-btn">Get in Touch <i class="fa-solid fa-arrow-right"></i></a>
              <div class="sw-contact-cta-meta">
                <span><i class="fa-regular fa-clock"></i> Response within 24 hrs</span>
                <span><i class="fa-solid fa-shield-halved"></i> Free consultation</span>
              </div>
            </div>
          </aside>
        </div>

      </div>
    </div>
  </section>

  <?php include_once ('elements/footer.php'); ?>
