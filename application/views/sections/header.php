<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

<head>
  <title>OmgBlog | OpenxTech</title>
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


    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <button class="btn btn-outline-success" type="submit">Connexion</button>
            <div class="m-2"></div>
            <button class="btn btn-outline-success" type="submit">Inscription</button>
          </form>
        </div>
      </div>
    </nav>
  </header>