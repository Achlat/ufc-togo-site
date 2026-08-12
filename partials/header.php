<?php
/**
 * En-tête commun à toutes les pages.
 * Variables attendues avant l'inclusion : $page_title, $page_description, $active, $body_class (optionnel).
 */
if (!isset($page_title)) {
  $page_title = "UFC — Union des Forces de Changement";
}
if (!isset($page_description)) {
  $page_description = "Site de démonstration de l'Union des Forces de Changement (UFC), parti politique togolais fondé en 1992.";
}
if (!isset($active)) {
  $active = '';
}
if (!isset($body_class)) {
  $body_class = '';
}
$ufc_family = ['about', 'histoire', 'valeurs', 'vision', 'responsables'];
$actu_family = ['actualites', 'communiques'];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="keywords" content="UFC, Union des Forces de Changement, Togo, parti politique">

  <meta name="robots" content="noindex, nofollow">

  <!-- Vendor CSS Files -->
  <link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendors/aos/aos.css" rel="stylesheet">
  <link href="vendors/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="<?php echo htmlspecialchars($body_class); ?>">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/ufc/logo-ufc.jpg" alt="Logo UFC">
        <div>
          <h1 class="sitename">UFC</h1>
          <span class="baseline">Union des Forces de Changement</span>
        </div>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="<?php echo $active === 'accueil' ? 'active' : ''; ?>">Accueil</a></li>

          <li class="dropdown">
            <a href="about.php" class="<?php echo in_array($active, $ufc_family) ? 'active' : ''; ?>"><span>L'UFC</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="about.php">Qui sommes-nous</a></li>
              <li><a href="histoire.php">Notre histoire</a></li>
              <li><a href="valeurs.php">Nos valeurs</a></li>
              <li><a href="vision.php">Notre vision</a></li>
              <li><a href="responsables.php">Nos responsables</a></li>
            </ul>
          </li>

          <li><a href="engagements.php" class="<?php echo $active === 'engagements' ? 'active' : ''; ?>">Nos engagements</a></li>

          <li class="dropdown">
            <a href="actualites.php" class="<?php echo in_array($active, $actu_family) ? 'active' : ''; ?>"><span>Actualités</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="actualites.php">Toutes les actualités</a></li>
              <li><a href="communiques.php">Communiqués officiels</a></li>
            </ul>
          </li>

          <li><a href="agenda.php" class="<?php echo $active === 'agenda' ? 'active' : ''; ?>">Agenda</a></li>
          <li><a href="contact.php" class="<?php echo $active === 'contact' ? 'active' : ''; ?>">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a href="rejoindre.php" class="btn-cta d-none d-xl-inline-flex">Rejoindre l'UFC</a>

    </div>
  </header>

  <main class="main">
