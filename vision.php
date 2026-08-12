<?php
$page_title = "Notre vision pour le Togo | UFC";
$page_description = "La vision de l'Union des Forces de Changement pour un Togo démocratique, prospère, juste et inclusif.";
$active = 'vision';
include __DIR__ . '/partials/header.php';
?>

    <!-- Notre vision pour le Togo -->
    <section id="vision" class="vision-section" style="background-image:url('assets/img/ufc/militants-energie.jpeg');">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="vision-content">
          <span class="eyebrow">Notre ambition</span>
          <h2>Un Togo où chaque citoyen compte.</h2>
          <p>Nous croyons en un Togo où les institutions servent les citoyens, où les libertés sont respectées et où les opportunités de développement sont accessibles à tous, sur l'ensemble du territoire.</p>
          <a href="rejoindre.php" class="btn-pill">Rejoindre le mouvement <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

    </section><!-- /Notre vision pour le Togo -->

    <section class="about section">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center text-center">
          <div class="col-lg-8">
            <div class="vision-callout dark-background">
              <span class="eyebrow">En une phrase</span>
              <p>Un Togo démocratique, prospère, juste et inclusif, dans lequel chaque citoyen peut participer pleinement à la construction de la Nation.</p>
            </div>
          </div>
        </div>

        <div class="row gy-4 mt-3">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item">
              <div class="item-top"><i class="bi bi-flag"></i></div>
              <h4><a href="engagements.php">Notre programme</a></h4>
              <p>Six engagements prioritaires pour traduire cette vision en actions concrètes.</p>
              <a href="engagements.php" class="read-more">Découvrir nos engagements <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item">
              <div class="item-top"><i class="bi bi-people"></i></div>
              <h4><a href="rejoindre.php">Vous partagez cette vision ?</a></h4>
              <p>Rejoignez le mouvement et participez à la construction de ce Togo que nous voulons.</p>
              <a href="rejoindre.php" class="read-more">Rejoindre l'UFC <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include __DIR__ . '/partials/footer.php'; ?>
