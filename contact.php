<?php
$page_title = "Contact | UFC";
$page_description = "Contactez le siège national de l'Union des Forces de Changement.";
$active = 'contact';
include __DIR__ . '/partials/header.php';
?>

    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Contact</h1>
              <p>Une question ? Contactez notre siège national</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Accueil</a></li>
            <li class="current">Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-lg-5">
            <div class="contact-info">

              <div class="info-item" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt"></i>
                <div class="info-text">
                  <h5>Siège national</h5>
                  <p>22 BP 158, Lomé, Togo</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item" data-aos="fade-up" data-aos-delay="250">
                <i class="bi bi-telephone"></i>
                <div class="info-text">
                  <h5>Téléphone</h5>
                  <p>(228) 92 23 03 03</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-envelope"></i>
                <div class="info-text">
                  <h5>Email</h5>
                  <p><a href="mailto:partiufctogo@gmail.com">partiufctogo@gmail.com</a></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item" data-aos="fade-up" data-aos-delay="325">
                <i class="bi bi-globe2"></i>
                <div class="info-text">
                  <h5>Site officiel</h5>
                  <p>www.ufctogo.tg</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item" data-aos="fade-up" data-aos-delay="350">
                <i class="bi bi-megaphone"></i>
                <div class="info-text">
                  <h5>Porte-parolat de l'UFC</h5>
                  <p>Emmanuel Vivien Tomi<br>(228) 90 01 79 91 · (228) 92 23 03 03<br><a href="mailto:tomivivientg@gmail.com">tomivivientg@gmail.com</a></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-share"></i>
                <div class="info-text">
                  <h5>Réseaux sociaux</h5>
                  <div class="social-links d-flex mt-2">
                    <a href="#" aria-label="Facebook" title="À renseigner"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="X" title="À renseigner"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" aria-label="Instagram" title="À renseigner"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="YouTube" title="À renseigner"><i class="bi bi-youtube"></i></a>
                  </div>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Votre nom" required="" autocomplete="name">
                </div>

                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="Votre email" required="" autocomplete="email">
                </div>

                <div class="col-12">
                  <input type="text" name="subject" class="form-control" placeholder="Sujet" required="">
                </div>

                <div class="col-12">
                  <textarea name="message" rows="6" class="form-control" placeholder="Votre message" required=""></textarea>
                </div>

                <div class="col-12">
                  <div class="loading">Chargement</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Votre message a été envoyé. Merci !</div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn-pill">Envoyer le message <i class="bi bi-arrow-right"></i></button>
                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

    </section>

<?php include __DIR__ . '/partials/footer.php'; ?>
