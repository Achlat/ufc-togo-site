<?php
$page_title = "Actualités | UFC";
$page_description = "Actualité politique, communiqués, vie du parti et déclarations de l'Union des Forces de Changement.";
$active = 'actualites';
include __DIR__ . '/partials/header.php';
?>

    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Actualités</h1>
              <p>Positions politiques, communiqués, vie du parti et déclarations des responsables</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li class="current">Actualités</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section id="actualites" class="portfolio section">

      <div class="container">

        <p class="mb-4" style="font-size:14px;font-style:italic;color:color-mix(in srgb, var(--default-color), transparent 15%);">Exemples de mise en page présentés à titre illustratif — à remplacer par les actualités réelles de l'UFC.</p>

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Tous</li>
            <li data-filter=".filter-politique">Actualité politique</li>
            <li data-filter=".filter-communiques">Communiqués</li>
            <li data-filter=".filter-vie">Vie du parti</li>
            <li data-filter=".filter-declarations">Déclarations</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-politique">
              <div class="portfolio-card">
                <div class="image-wrap">
                  <img src="assets/img/ufc/declaration-presse-3.jpeg" class="img-fluid" alt="Déclaration sur la situation politique nationale" loading="lazy">
                  <div class="hover-actions">
                    <a href="assets/img/ufc/declaration-presse-3.jpeg" class="glightbox" data-gallery="actu-gallery" title="Déclaration sur la situation politique nationale"><i class="bi bi-plus-lg"></i></a>
                    <a href="#" title="Lire la suite"><i class="bi bi-arrow-up-right"></i></a>
                  </div>
                </div>
                <div class="card-meta">
                  <span class="category">Actualité politique</span>
                  <h4><a href="#">Déclaration sur la situation politique nationale</a></h4>
                </div>
              </div>
            </div><!-- End Actu Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-communiques">
              <div class="portfolio-card">
                <div class="image-wrap">
                  <img src="assets/img/ufc/communique-presse-1.jpg" class="img-fluid" alt="Position de l'UFC sur le processus électoral" loading="lazy">
                  <div class="hover-actions">
                    <a href="assets/img/ufc/communique-presse-1.jpg" class="glightbox" data-gallery="actu-gallery" title="Position de l'UFC sur le processus électoral"><i class="bi bi-plus-lg"></i></a>
                    <a href="communiques.php" title="Lire la suite"><i class="bi bi-arrow-up-right"></i></a>
                  </div>
                </div>
                <div class="card-meta">
                  <span class="category">Communiqués</span>
                  <h4><a href="communiques.php">Position de l'UFC sur le processus électoral</a></h4>
                </div>
              </div>
            </div><!-- End Actu Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-vie">
              <div class="portfolio-card">
                <div class="image-wrap">
                  <img src="assets/img/ufc/banniere-congres-statutaire.jpeg" class="img-fluid" alt="Grand rassemblement des militants à Lomé" loading="lazy">
                  <div class="hover-actions">
                    <a href="assets/img/ufc/banniere-congres-statutaire.jpeg" class="glightbox" data-gallery="actu-gallery" title="Grand rassemblement des militants à Lomé"><i class="bi bi-plus-lg"></i></a>
                    <a href="#" title="Lire la suite"><i class="bi bi-arrow-up-right"></i></a>
                  </div>
                </div>
                <div class="card-meta">
                  <span class="category">Vie du parti</span>
                  <h4><a href="#">Grand rassemblement des militants à Lomé</a></h4>
                </div>
              </div>
            </div><!-- End Actu Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-declarations">
              <div class="portfolio-card">
                <div class="image-wrap">
                  <img src="assets/img/ufc/declaration-presse-4.jpeg" class="img-fluid" alt="Le bureau politique s'exprime devant la presse" loading="lazy">
                  <div class="hover-actions">
                    <a href="assets/img/ufc/declaration-presse-4.jpeg" class="glightbox" data-gallery="actu-gallery" title="Le bureau politique s'exprime devant la presse"><i class="bi bi-plus-lg"></i></a>
                    <a href="#" title="Lire la suite"><i class="bi bi-arrow-up-right"></i></a>
                  </div>
                </div>
                <div class="card-meta">
                  <span class="category">Déclarations</span>
                  <h4><a href="#">Le bureau politique s'exprime devant la presse</a></h4>
                </div>
              </div>
            </div><!-- End Actu Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-vie">
              <div class="portfolio-card">
                <div class="image-wrap">
                  <img src="assets/img/ufc/jeunesse-1.jpg" class="img-fluid" alt="La jeunesse de l'UFC mobilisée sur le terrain" loading="lazy">
                  <div class="hover-actions">
                    <a href="assets/img/ufc/jeunesse-1.jpg" class="glightbox" data-gallery="actu-gallery" title="La jeunesse de l'UFC mobilisée sur le terrain"><i class="bi bi-plus-lg"></i></a>
                    <a href="#" title="Lire la suite"><i class="bi bi-arrow-up-right"></i></a>
                  </div>
                </div>
                <div class="card-meta">
                  <span class="category">Vie du parti</span>
                  <h4><a href="#">La jeunesse de l'UFC mobilisée sur le terrain</a></h4>
                </div>
              </div>
            </div><!-- End Actu Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-declarations">
              <div class="portfolio-card">
                <div class="image-wrap">
                  <img src="assets/img/ufc/femmes-1.jpg" class="img-fluid" alt="Les femmes de l'UFC prennent la parole" loading="lazy">
                  <div class="hover-actions">
                    <a href="assets/img/ufc/femmes-1.jpg" class="glightbox" data-gallery="actu-gallery" title="Les femmes de l'UFC prennent la parole"><i class="bi bi-plus-lg"></i></a>
                    <a href="#" title="Lire la suite"><i class="bi bi-arrow-up-right"></i></a>
                  </div>
                </div>
                <div class="card-meta">
                  <span class="category">Déclarations</span>
                  <h4><a href="#">Les femmes de l'UFC prennent la parole</a></h4>
                </div>
              </div>
            </div><!-- End Actu Item -->

          </div><!-- End Isotope Container -->

        </div>

      </div>

    </section>

    <!-- Le congrès en images -->
    <section class="section light-background">
      <div class="container section-title" data-aos="fade-up">
        <div class="row align-items-end gy-3">
          <div class="col-lg-7">
            <span class="eyebrow">Vie du parti</span>
            <h2>Le congrès en images</h2>
          </div>
          <div class="col-lg-5">
            <p>Quelques images du congrès statutaire de l'UFC, août 2026</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/ufc/direction-nationale.jpeg" class="img-fluid" alt="Direction nationale réunie" style="width:100%;">
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/ufc/bureau-politique-2.jpeg" class="img-fluid" alt="Membres du bureau politique" style="width:100%;">
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <img src="assets/img/ufc/detail-logo-tshirt.jpeg" class="img-fluid" alt="Détail de l'emblème du parti" style="width:100%;">
          </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
          <a href="communiques.php" class="link-arrow">Voir les communiqués officiels <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </section>

<?php include __DIR__ . '/partials/footer.php'; ?>
