<?php
$page_title = "Agenda | UFC";
$page_description = "Les prochains rendez-vous et événements de l'Union des Forces de Changement.";
$active = 'agenda';
include __DIR__ . '/partials/header.php';
?>

    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Agenda</h1>
              <p>Les prochains rendez-vous du mouvement</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li class="current">Agenda</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section id="agenda" class="section">

      <div class="container">

        <p class="mb-4" style="font-size:14px;font-style:italic;color:color-mix(in srgb, var(--default-color), transparent 15%);">Exemples de mise en page présentés à titre illustratif — à remplacer par le calendrier réel des activités de l'UFC.</p>

        <div class="row gy-4 align-items-stretch">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="agenda-card">
              <div class="agenda-date"><span class="day">14</span><span class="month">Sept.</span></div>
              <span class="agenda-type">Réunion de section</span>
              <h4>Réunion de la fédération de Lomé-Commune</h4>
              <ul class="agenda-meta">
                <li><i class="bi bi-geo-alt"></i> Lomé, siège fédéral</li>
                <li><i class="bi bi-clock"></i> 10h00</li>
              </ul>
              <a href="#" class="read-more">Voir l'événement <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Agenda Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="agenda-card">
              <div class="agenda-date"><span class="day">28</span><span class="month">Sept.</span></div>
              <span class="agenda-type">Meeting public</span>
              <h4>Meeting public de mobilisation</h4>
              <ul class="agenda-meta">
                <li><i class="bi bi-geo-alt"></i> Kara</li>
                <li><i class="bi bi-clock"></i> 15h00</li>
              </ul>
              <a href="#" class="read-more">Voir l'événement <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Agenda Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="agenda-card">
              <div class="agenda-date"><span class="day">05</span><span class="month">Oct.</span></div>
              <span class="agenda-type">Formation militante</span>
              <h4>Session de formation des cadres locaux</h4>
              <ul class="agenda-meta">
                <li><i class="bi bi-geo-alt"></i> Siège national, Lomé</li>
                <li><i class="bi bi-clock"></i> 09h00</li>
              </ul>
              <a href="#" class="read-more">Voir l'événement <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Agenda Item -->

        </div>

      </div>

    </section>

<?php include __DIR__ . '/partials/footer.php'; ?>
