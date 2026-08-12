<?php
$page_title = "Notre histoire | UFC";
$page_description = "L'histoire de l'Union des Forces de Changement, de sa création en 1992 à aujourd'hui.";
$active = 'histoire';
include __DIR__ . '/partials/header.php';
?>

    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Notre histoire</h1>
              <p>Plus de trois décennies d'engagement pour la démocratie togolaise</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="about.php">L'UFC</a></li>
            <li class="current">Notre histoire</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section id="histoire" class="section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/ufc/gilchrist-olympio.jpg" class="img-fluid" alt="Gilchrist Olympio, fondateur de l'UFC" style="width:100%;">
            <p class="mt-3" style="font-size:14px;color:color-mix(in srgb, var(--default-color), transparent 15%);">Gilchrist Olympio (1934–2020), fondateur de l'Union des Forces de Changement.</p>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <div class="timeline-wrap">

              <div class="timeline-entry">
                <span class="year">1992</span>
                <h4>Naissance de l'Union des Forces de Changement</h4>
                <p>Création du parti dans un contexte d'ouverture au multipartisme et de revendications démocratiques au Togo.</p>
              </div>

              <div class="timeline-entry">
                <span class="year">Années 1990</span>
                <h4>L'UFC s'impose comme une force d'opposition</h4>
                <p>Le parti s'affirme progressivement comme l'une des principales voix de l'opposition togolaise.</p>
              </div>

              <div class="timeline-entry">
                <span class="year">2000 – 2010</span>
                <h4>Participation aux échéances électorales</h4>
                <p>L'UFC prend part aux différents scrutins nationaux et poursuit son engagement pour l'alternance démocratique.</p>
              </div>

              <div class="timeline-entry">
                <span class="year">Août 2026</span>
                <h4>Congrès statutaire de l'UFC</h4>
                <p>Réuni à la Place des Loisirs Nathanaël (Adidogomé, Lomé) autour du thème « De l'Ablodé au développement harmonieux », le congrès a rassemblé les instances du parti venues de tout le pays.</p>
              </div>

              <div class="timeline-entry">
                <span class="year">Aujourd'hui</span>
                <h4>La poursuite de l'engagement</h4>
                <p>L'UFC continue de porter ses convictions dans le débat public et la vie politique togolaise.</p>
              </div>

            </div>

            <div class="timeline-note">
              <i class="bi bi-exclamation-triangle"></i>
              <p>Les dates et faits présentés ci-dessus sont donnés à titre indicatif et doivent être vérifiés et complétés auprès des instances officielles de l'UFC avant toute publication définitive.</p>
            </div>
          </div>

        </div>

        <div class="row gy-4 mt-3">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/ufc/banniere-congres-statutaire.jpeg" class="img-fluid" alt="Congrès statutaire de l'UFC, août 2026" style="width:100%;">
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/ufc/congres-banniere-theme.jpeg" class="img-fluid" alt="Thème du congrès : De l'Ablodé au développement harmonieux" style="width:100%;">
          </div>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <img src="assets/img/ufc/gilchrist-hommage.jpeg" class="img-fluid" alt="Délégués réunis au congrès statutaire" style="width:100%;">
          </div>
        </div>

      </div>

    </section>

<?php include __DIR__ . '/partials/footer.php'; ?>
