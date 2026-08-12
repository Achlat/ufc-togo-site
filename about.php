<?php
$page_title = "L'UFC — Qui sommes-nous | UFC";
$page_description = "Présentation de l'Union des Forces de Changement, parti politique togolais fondé en 1992.";
$active = 'about';
include __DIR__ . '/partials/header.php';
?>

    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>L'UFC</h1>
              <p>Un parti historique de l'opposition togolaise, engagé pour la démocratie et la justice sociale.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li class="current">L'UFC</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- L'UFC en quelques mots -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 align-items-center">

          <div class="col-lg-6">
            <div class="image-stack">
              <img src="assets/img/ufc/assemblee-nathanael.jpeg" class="img-fluid main-image" alt="Assemblée des militants de l'UFC">
              <div class="experience-badge" data-aos="zoom-in" data-aos-delay="300">
                <span class="number">1992</span>
                <span class="text">Année de fondation du parti</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="content">
              <span class="eyebrow">Qui sommes-nous</span>
              <h3>Un parti au service de la démocratie togolaise depuis 1992</h3>
              <p>L'Union des Forces de Changement est un parti politique togolais qui œuvre depuis sa création pour la consolidation de la démocratie, la bonne gouvernance et l'amélioration des conditions de vie des citoyens. Elle a marqué durablement la vie politique nationale en tant que force d'opposition.</p>

              <ul class="check-list">
                <li><i class="bi bi-check2"></i> Une histoire politique depuis 1992</li>
                <li><i class="bi bi-check2"></i> Une présence sur le territoire togolais</li>
                <li><i class="bi bi-check2"></i> Un engagement pour la démocratie et la justice sociale</li>
                <li><i class="bi bi-check2"></i> Une voix pour les citoyens togolais</li>
              </ul><!-- End Check List -->
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-12">
            <div class="vision-callout dark-background" data-aos="fade-up" data-aos-delay="150">
              <span class="eyebrow">Notre vision</span>
              <p>Un Togo démocratique, prospère, juste et inclusif, dans lequel chaque citoyen peut participer pleinement à la construction de la Nation.</p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /L'UFC en quelques mots -->

    <!-- Liens vers les pages complémentaires -->
    <section class="section light-background">
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item">
              <div class="item-top"><i class="bi bi-clock-history"></i></div>
              <h4><a href="histoire.php">Notre histoire</a></h4>
              <p>Plus de trois décennies d'engagement pour la démocratie togolaise.</p>
              <a href="histoire.php" class="read-more">Découvrir <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item">
              <div class="item-top"><i class="bi bi-compass"></i></div>
              <h4><a href="valeurs.php">Nos valeurs</a></h4>
              <p>Les six principes qui fondent et guident l'action de l'UFC.</p>
              <a href="valeurs.php" class="read-more">Découvrir <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item">
              <div class="item-top"><i class="bi bi-people"></i></div>
              <h4><a href="responsables.php">Nos responsables</a></h4>
              <p>Une organisation structurée, du national jusqu'aux structures locales.</p>
              <a href="responsables.php" class="read-more">Découvrir <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>
      </div>
    </section>

<?php include __DIR__ . '/partials/footer.php'; ?>
