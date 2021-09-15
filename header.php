<?php $theme = get_bloginfo("template_url"); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AWE</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />

  <?php wp_head(); ?>
</head>

<body data-page="home">
  <header class="bg-awe-blue-first sticky-top">
    <div class="container py-4">
      <div class="row">
        <div class="col-auto">
          <div class="h-100 d-flex align-items-center">
            <a href="./" class="d-inline-flex">
              <img src="<?= $theme; ?>/dist/image/logo.svg" alt="AWE Logo" class="img-fluid logo-header" />
            </a>
          </div>
        </div>
        <div class="col-auto ms-auto">
          <div class="h-100 d-flex align-items-center">
            <button class="hamburguer collapsed" data-bs-toggle="collapse" data-bs-target="#menu-modal">
              <div class="line"></div>
              <div class="line"></div>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div id="menu-modal" class="position-absolute end-0 collapse z-500">
      <div class="py-4 px-3 bg-white">
        <div class="row row-cols-1 row-cols-md-2 gx-1 gapy-1 bg-awe-blue-first">
          <div class="col ps-0">
            <a href="./agency.html" class="
                  d-flex
                  flex-column
                  align-items-center
                  bg-white
                  text-decoration-none
                  py-4
                ">
              <div class="d-flex flex-column">
                <span class="text-awe-light-second fw-light fz-18">
                  Conheça o projeto
                </span>
                <span class="text-awe-blue-first fz-24">nós somos #awe</span>
              </div>
            </a>
          </div>
          <div class="col pe-0">
            <a href="#" class="
                  d-flex
                  flex-column
                  align-items-center
                  bg-white
                  text-decoration-none
                  py-4
                ">
              <div class="d-flex flex-column">
                <span class="text-awe-light-second fw-light fz-18">
                  Quem faz o sucesso
                </span>
                <span class="text-awe-blue-first fz-24">a equipe #awe</span>
              </div>
            </a>
          </div>
          <div class="col ps-0">
            <a href="#" class="
                  d-flex
                  flex-column
                  align-items-center
                  bg-white
                  text-decoration-none
                  py-4
                ">
              <div class="d-flex flex-column">
                <span class="text-awe-light-second fw-light fz-18">
                  Entenda como nós trabalhamos
                </span>
                <span class="text-awe-blue-first fz-24">
                  #awe inova na escola
                </span>
              </div>
            </a>
          </div>
          <div class="col pe-0">
            <a href="./projects.html" class="
                  d-flex
                  flex-column
                  align-items-center
                  bg-white
                  text-decoration-none
                  py-4
                ">
              <div class="d-flex flex-column">
                <span class="text-awe-light-second fw-light fz-18">
                  Saiba mais sobre os projetos
                </span>
                <span class="text-awe-blue-first fz-24">
                  projetos que apoiamos
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>