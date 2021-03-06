<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
  <title><?= $title ?></title>
  <link rel="icon" type="image/x-icon" href="public/images/favicon.ico" />
  <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->config->item('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description"
    content="Un site (Blog) pour expérimenter la technologie CodeIgniter au sein de la structure OpenxTech">
  <meta name="author" content="OMGBA Franck Gerold">
  <meta name="generator" content="Hugo 0.88.1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo css_url('style'); ?>" />
</head>

<body class="d-flex flex-column h-100">

  <header>
    <!-- Fixed navbar -->


    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark fixed-top bg-dark mb-5">
      <div class="container">
        <a class="navbar-brand" href="#">OmgBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= site_url('#'); ?>">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('contact/index/'); ?>">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= site_url('about/index/'); ?>">A propos</a>
            </li>
          </ul>
          <form class="d-flex">
            <ul class="nav navbar-nav navbar-right">
              <?php if($this->auth_user->is_connected) : ?>
                <div class="dropdown">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                    Bienvenue
                      <strong><?= $this->session->auth_user['user_name'] ?></strong>
                  </button>
                  <ul class="dropdown-menu">
                    <li><h5 class="dropdown-header">Utilisateur</h5></li>
                    <li><a class="dropdown-item" href="<?= site_url('user/index'); ?>"><i class="bi bi-person-fill"></i> Profile</a></li>
                    <li><h5 class="dropdown-header">Session</h5></li>
                    <li><a class="dropdown-item" href="<?= site_url('app/deconnexion'); ?>"><i class="bi bi-box-arrow-in-right"></i> Deconnexion</a></li>
                  </ul>
                </div>
              <?php else: ?>
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?= site_url('login/index'); ?>">
                    <i class="bi bi-door-open-fill"></i> 
                    Connexion
                  </a>
                </li>
              </ul>
              <?php endif; ?>
            </ul>

          </form>
        </div>
      </div>
    </nav>
  </header>