<?php
$page_title = "Rejoindre l'UFC | UFC";
$page_description = "Rejoignez l'Union des Forces de Changement et militez pour un Togo démocratique, juste et prospère.";
$active = '';
include __DIR__ . '/partials/header.php';
?>

    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Rejoindre l'UFC</h1>
              <p>Militez à nos côtés pour un Togo démocratique, juste et prospère</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li class="current">Rejoindre l'UFC</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section id="rejoindre" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-lg-5">
            <div class="contact-info">

              <div class="info-item" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-people"></i>
                <div class="info-text">
                  <h5>Militer localement</h5>
                  <p>Rejoignez la structure de votre préfecture et participez aux actions de terrain.</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item" data-aos="fade-up" data-aos-delay="250">
                <i class="bi bi-flag"></i>
                <div class="info-text">
                  <h5>Mouvements spécifiques</h5>
                  <p>Intégrez le mouvement des jeunes ou celui des femmes du parti.</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-calendar-event"></i>
                <div class="info-text">
                  <h5>Participer aux événements</h5>
                  <p>Prenez part aux réunions publiques, meetings et rencontres militantes.</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item" data-aos="fade-up" data-aos-delay="350">
                <i class="bi bi-envelope-open"></i>
                <div class="info-text">
                  <h5>Rester informé</h5>
                  <p>Recevez les communications internes et les actualités du mouvement.</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-lightbulb"></i>
                <div class="info-text">
                  <h5>Contribuer aux idées</h5>
                  <p>Participez aux réflexions programmatiques du parti.</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/adhesion.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="prenom" class="form-control" placeholder="Prénom" required="" autocomplete="given-name">
                </div>

                <div class="col-md-6">
                  <input type="text" name="nom" class="form-control" placeholder="Nom" required="" autocomplete="family-name">
                </div>

                <div class="col-md-6">
                  <input type="tel" name="telephone" class="form-control" placeholder="Téléphone" required="" autocomplete="tel">
                </div>

                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="Email" required="" autocomplete="email">
                </div>

                <div class="col-md-6">
                  <input type="text" name="ville" class="form-control" placeholder="Ville" required="">
                </div>

                <div class="col-md-6">
                  <input type="text" name="prefecture" class="form-control" placeholder="Préfecture" required="">
                </div>

                <div class="col-12">
                  <textarea name="message" rows="5" class="form-control" placeholder="Message (motivation, disponibilités...)"></textarea>
                </div>

                <div class="col-12">
                  <div class="consent-check">
                    <input type="checkbox" id="consentement" name="consentement" required="">
                    <label for="consentement">J'accepte que mes données soient utilisées par l'UFC dans le cadre de ma demande d'adhésion, conformément à la politique de confidentialité du parti.</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="loading">Chargement</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Votre demande d'adhésion a été envoyée. Merci !</div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn-pill">Envoyer ma demande <i class="bi bi-arrow-right"></i></button>
                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

    </section><!-- /Rejoindre l'UFC -->

    <!-- Questions fréquentes -->
    <section id="faq" class="faq section light-background">

      <div class="container section-title" data-aos="fade-up">
        <div class="row align-items-end gy-3">
          <div class="col-lg-7">
            <span class="eyebrow">Adhésion</span>
            <h2>Questions fréquentes</h2>
          </div>
          <div class="col-lg-5">
            <p>Tout ce qu'il faut savoir avant de rejoindre l'UFC</p>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="faq-intro">
              <h3>Vous hésitez encore ?</h3>
              <p>Contactez directement une structure locale ou notre équipe pour toute question sur l'adhésion.</p>
              <a href="contact.php" class="link-arrow">Nous contacter <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-item faq-active">
              <h3>Comment puis-je adhérer à l'UFC ?</h3>
              <div class="faq-content">
                <p>Il suffit de remplir le formulaire d'adhésion ci-dessus. Un responsable de votre préfecture prendra contact avec vous pour la suite des démarches.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End FAQ Item -->

            <div class="faq-item">
              <h3>L'adhésion est-elle payante ?</h3>
              <div class="faq-content">
                <p>Les modalités de cotisation sont fixées par les structures locales du parti et vous seront communiquées lors de votre prise de contact.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End FAQ Item -->

            <div class="faq-item">
              <h3>Puis-je militer si je vis à l'étranger ?</h3>
              <div class="faq-content">
                <p>Oui, l'UFC dispose de représentations au sein de la diaspora. Indiquez votre pays de résidence dans le formulaire d'adhésion.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End FAQ Item -->

            <div class="faq-item">
              <h3>Comment rejoindre le mouvement des jeunes ou des femmes ?</h3>
              <div class="faq-content">
                <p>Précisez votre intérêt dans le champ « Message » du formulaire d'adhésion : un responsable de la structure concernée vous recontactera.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End FAQ Item -->

            <div class="faq-item">
              <h3>Comment signaler une actualité ou proposer un communiqué ?</h3>
              <div class="faq-content">
                <p>Les militants et structures locales peuvent transmettre leurs informations via le formulaire de contact du site.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End FAQ Item -->

          </div>

        </div>

      </div>

    </section><!-- /Questions fréquentes -->

<?php include __DIR__ . '/partials/footer.php'; ?>
