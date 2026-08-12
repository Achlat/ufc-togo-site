<?php
$page_title = "Communiqués officiels | UFC";
$page_description = "Les communiqués et prises de position officielles de l'Union des Forces de Changement.";
$active = 'communiques';
include __DIR__ . '/partials/header.php';
?>

    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Communiqués officiels</h1>
              <p>Les prises de position et déclarations officielles de l'UFC</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="actualites.php">Actualités</a></li>
            <li class="current">Communiqués officiels</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section id="communiques" class="section">

      <div class="container">

        <p class="mb-4" style="font-size:14px;font-style:italic;color:color-mix(in srgb, var(--default-color), transparent 15%);">Exemples de mise en page présentés à titre illustratif — à remplacer par les communiqués réels de l'UFC.</p>

        <div data-aos="fade-up" data-aos-delay="100">

          <div class="communique-item">
            <div class="comm-date">
              <span class="day">05</span>
              <span class="month">Août</span>
            </div>
            <div class="comm-body">
              <span class="comm-tag">Communiqué de presse</span>
              <h4>Position de l'Union des Forces de Changement sur le processus électoral en cours</h4>
              <div class="comm-actions">
                <a href="#"><i class="bi bi-file-earmark-text"></i> Lire le communiqué</a>
                <a href="#"><i class="bi bi-download"></i> Télécharger le PDF</a>
              </div>
            </div>
          </div>

          <div class="communique-item">
            <div class="comm-date">
              <span class="day">22</span>
              <span class="month">Juin</span>
            </div>
            <div class="comm-body">
              <span class="comm-tag">Communiqué de presse</span>
              <h4>Déclaration du bureau politique national à l'occasion de la fête de l'indépendance</h4>
              <div class="comm-actions">
                <a href="#"><i class="bi bi-file-earmark-text"></i> Lire le communiqué</a>
                <a href="#"><i class="bi bi-download"></i> Télécharger le PDF</a>
              </div>
            </div>
          </div>

          <div class="communique-item">
            <div class="comm-date">
              <span class="day">14</span>
              <span class="month">Mars</span>
            </div>
            <div class="comm-body">
              <span class="comm-tag">Communiqué de presse</span>
              <h4>Communiqué relatif à la tenue du congrès statutaire de l'UFC</h4>
              <div class="comm-actions">
                <a href="#"><i class="bi bi-file-earmark-text"></i> Lire le communiqué</a>
                <a href="#"><i class="bi bi-download"></i> Télécharger le PDF</a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

<?php include __DIR__ . '/partials/footer.php'; ?>
