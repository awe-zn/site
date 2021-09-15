<?php
get_header();

$theme = get_bloginfo("template_url");
?>

<main>
  <section>
    <div class="bg-index">
      <div class="container py-awe-128">
        <div class="row">
          <div class="col-12">
            <div class="title-index">
              <h1 class="fz-sm-128 fz-72 text-awe-blue-first title mb-awe-32" data-text="inovar na escola">
                inovar na escola
              </h1>
              <span class="text-white fw-bold fz-18 subtitle">
                SOMOS INQUIETOS E QUEREMOS
              </span>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-12 col-lg-11 col-xl-9">
                <p class="fw-light fz-24 text-white mb-5">
                  Aceleramos o aprendizado e o acesso ao mercado de
                  trabalho. Juntos ajudamos a escola a ampliar o seu alcance
                  e a transformar a vida das pessoas.
                </p>
              </div>
              <div class="col-auto">
                <div>
                  <button class="
                          btn btn-awe-light-first
                          bx-awe-light-first-left-bottom bx-hover bx-left-bottom
                          border-awe-blue-third border-2
                          fz-21
                          text-awe-blue-third
                        ">
                    QUER SABER MAIS?
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-none d-lg-block">
            <div class="h-100 d-flex align-items-end">
              <img src="<?= $theme; ?>/dist/image/working.svg" alt="Ilustração de trabalho" class="mt-awe-64 img-fluid w-100" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-awe-blue-first">
      <div class="container py-awe-32">
        <div class="row">
          <div class="col-auto m-auto">
            <div>
              <button class="border-0 p-0 bg-transparent arrow-button">
                <img src="<?= $theme; ?>/dist/image/arrows-bottom.svg" alt="Seta para baixo" class="img-fluid" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $depositions = new WP_Query(array(
    'post_type' => 'depositions',
    'posts_per_page' => -1
  ));

  if ($depositions->have_posts()) {
  ?>
    <section>
      <div class="container pt-awe-152 pb-awe-128">
        <div class="row">
          <div class="col-4">
            <div>
              <img src="<?= $theme; ?>/dist/image/arrows-right.svg" alt="Ilustração de setas" class="img-fluid w-100" />
            </div>
          </div>
          <div class="col-lg-8 col-xl-6">
            <div class="d-flex flex-column">
              <div class="d-flex flex-column lh-1">
                <h1 class="fw-light fz-60 m-0 text-awe-gray-first">Somos</h1>
                <span class="fw-bold fz-60 typing text-awe-blue-fourth" data-delay="400" data-words="inovadores,aprendizagem,awe">
                </span>
              </div>
              <p class="fz-21 mt-awe-32 mb-3">
                Aceleramos a aprendizagem dos alunos nas disciplinas técnicas
                e seus <i>soft skills</i>. Focamos no mundo do trabalho e seus
                desafios.
              </p>
              <a href="#" class="text-decoration-none fw-bold text-awe-dark-first">
                <span class="text-decoration-underline d-inline-flex">
                  Quer saber mais sobre o que fazemos?
                </span>
                #ChegaJunto
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-quotes">
        <div class="container pt-2">
          <div class="row">
            <div class="col-12">
              <div class="
                        swiper-navigation
                        d-flex
                        flex-row
                        justify-content-end
                        gapx-3
                        pb-2
                      ">
                <div>
                  <button class="
                            swiper-prev
                            btn btn-awe-light-third
                            bx-awe-blue-first-left-bottom bx-hover bx-left-bottom
                            border-awe-blue-third border-2
                            p-2
                            rounded-circle
                          ">
                    <img src="<?= $theme; ?>/dist/image/icons/prev.svg" alt="Ícone" />
                  </button>
                </div>
                <div>
                  <button class="
                            swiper-next
                            btn btn-awe-light-third
                            bx-awe-blue-first-left-bottom bx-hover bx-left-bottom
                            border-awe-blue-third border-2
                            p-2
                            rounded-circle
                          ">
                    <img src="<?= $theme; ?>/dist/image/icons/next.svg" alt="Ícone" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-container pb-awe-112">
          <div class="swiper-wrapper">
            <?php
            while ($depositions->have_posts()) {
              $depositions->the_post();
            ?>
              <div class="swiper-slide">
                <div class="py-4">
                  <div class="
                            bg-awe-blue-first
                            text-white
                            py-4
                            px-5
                            rounded-3
                            d-flex
                            flex-column flex-md-row
                            gapx-3
                            gapy-awe-64
                            align-items-start
                          ">
                    <div class="d-flex flex-column flex-10 flex-xxl-12 order-1">
                      <div class="d-flex flex-column align-items-start mb-3">
                        <h3 class="text-awe-yellow-first fz-22 fw-bold mb-0">
                          <?php the_title(); ?>
                        </h3>
                        <span class="fst-italic fz-14">
                          <?= get_field('roles'); ?>
                        </span>
                      </div>
                      <p class="fw-light m-0 fst-italic">
                        <?= get_the_excerpt(); ?>
                      </p>
                    </div>
                    <?php
                    if (has_post_thumbnail()) {
                    ?>
                      <div class="my-n5 flex-3 flex-lg-2 order-0 order-md-2">
                        <div class="h-100">
                          <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="
                                    img-fluid
                                    w-100
                                    border border-4 border-awe-yellow-first
                                    rounded-3
                                    img-profile
                                  " />
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </section>
  <?php
  }
  ?>

  <section class="bg-awe-blue-third text-awe-light-third section-search">
    <div class="container pt-awe-128 pb-awe-96">
      <div class="row mb-awe-80">
        <div class="col-md-10 col-lg-6 col-xxl-5">
          <div class="d-flex flex-column align-items-start">
            <span class="fz-18 opacity-50 mb-3">
              _em nossas atividades
            </span>
            <h2 class="fz-32">
              Pesquisamos e aplicamos
              <span class="text-awe-yellow-first">tendências</span> nos
              nossos projetos.
            </h2>
          </div>
        </div>
        <div class="col-md-11 col-lg-8">
          <p class="opacity-80">
            O mercado é muito dinâmico, e nós também. O desafio é algo que
            nos movimenta, nos energiza, por isso gostamos e buscamos
            experiementar o que está nos #TopTrends e aplicamos aqui.
          </p>
        </div>
      </div>
      <div class="row mb-awe-152">
        <div class="col-md-7 col-lg-6">
          <div class="
                  d-flex
                  flex-column
                  justify-content-center
                  text-end
                  mb-3
                  h-100
                ">
            <h3 class="fz-28 m-0">Projetamos para web</h3>
            <i class="mb-3 opacity-80">
              #que tal desenvolver sua próxima página conosco?
            </i>
            <p class="fw-light fz-20">
              Projetamos e desenvolvemos páginas para web ou somente a
              interface e suas interações. Se você tem uma demanda de
              website ou apenas uma interface para web ou <i>mobile</i>,
              podemos ajudá-lo.
            </p>
            <a href="#" class="fz-20 text-reset">
              Vamos conversar sobre isto?
            </a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="d-flex align-items-center h-100">
            <img src="<?= $theme; ?>/dist/image/web-projects.png" alt="Imagem ilustrativa de projetos WEB" class="img-fluid w-100 shadow-lg" />
          </div>
        </div>
      </div>
      <div class="row mb-awe-128">
        <div class="col-md-5 order-1">
          <div class="d-flex align-items-center h-100">
            <img src="<?= $theme; ?>/dist/image/make-code.png" alt="Imagem ilustrativas de códigos" class="img-fluid w-100 shadow-lg" />
          </div>
        </div>
        <div class="col-md-7 col-lg-6 ms-auto order-0 order-md-2">
          <div class="
                  d-flex
                  flex-column
                  justify-content-center
                  text-start
                  mb-3
                  h-100
                ">
            <h3 class="fz-28 m-0">Fazemos código <i>outsourcing</i></h3>
            <i class="mb-3 opacity-60"> #do que você precisa? </i>
            <p class="fw-light fz-20">
              Desenvolvimemos códigos sob demanda e codificamos em algumas
              linguagens de programação que estão em alta no mercado.
              Buscamos aliar o que tá em alta e o que podemos desenvolver na
              escola, com apoio dos professores e mentores.
            </p>
            <a href="#" class="fz-20 text-reset"> Quer saber mais? </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7 col-lg-6">
          <div class="
                  d-flex
                  flex-column
                  justify-content-center
                  text-start
                  mb-3
                  h-100
                ">
            <h3 class="fz-28 m-0 opacity-80">Ampliamos habilidades</h3>
            <i class="mb-3 opacity-60">
              #que habilidade é importante para você?
            </i>
            <p class="fw-light fz-20 opacity-80">
              Nem todos sabem em um nível profissional. Reconhecemos isso e
              estamos sempre desenvolvendo #workshops para alavancar algumas
              habilidades importantes. Não é apenas para os membros da
              equipe, mas também para nossos clientes, parceiros e
              comunidade.
            </p>
            <div class="
                    mb-3
                    d-flex
                    flex-row flex-wrap
                    opacity-80
                    gap-1
                    fz-20
                    fw-light
                    fz-20
                  ">
              <span class="text-decoration-underline">#ux design</span>
              <span class="text-decoration-underline">
                #facilitação em design
              </span>
              <span class="text-decoration-underline">
                #design thinking
              </span>
              <span class="text-decoration-underline">
                #pesquisa em ux
              </span>
            </div>
            <a href="#" class="fz-20 text-reset"> Ficou interessado? </a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="d-flex align-items-center h-100">
            <img src="<?= $theme; ?>/dist/image/skills.png" alt="Imagem ilustrativa de projetos WEB" class="img-fluid w-100 shadow-lg" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $projects = new WP_Query(array(
    'post_type' => 'projects',
    'posts_per_page' => -1,
  ));

  if ($projects->have_posts()) {
  ?>
    <section>
      <div class="container pb-5 pt-awe-80">
        <div class="row">
          <div class="col-12">
            <div class="mb-5">
              <h2 class="fz-28 fw-bold">Veja o que fizemos recentemente</h2>
              <i class="text-awe-gray-second">
                #estamos desenvolvendo a todo vapor
              </i>
            </div>
          </div>
          <div class="col-12 swiper-cases">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php
                while ($projects->have_posts()) {
                  $projects->the_post();
                ?>
                  <div class="swiper-slide">
                    <div class="
                        bx-awe-blue-first-right-bottom bx-hover
                        border border-awe-blue-first
                        mb-2
                        me-2
                        d-flex
                        flex-column
                      ">
                      <?php
                      if (has_post_thumbnail()) {
                      ?>
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="
                          img-fluid
                          w-100
                          border-bottom border-awe-blue-first
                          shadow
                        " />
                      <?php
                      }
                      ?>
                      <div class="px-3 py-awe-12 text-awe-gray-second">
                        <p class="mb-4">
                          <?= get_the_excerpt(); ?>
                        </p>
                        <a href="<?= get_field('link'); ?>" class="text-reset fw-bold">
                          ACESSE O SITE
                        </a>
                      </div>
                    </div>
                  </div>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="row pt-4">
              <div class="col-12">
                <div class="
                      swiper-navigation
                      d-flex
                      flex-row
                      justify-content-end
                      gapx-3
                      pb-2
                    ">
                  <div>
                    <button class="
                          swiper-prev
                          btn btn-awe-light-third
                          bx-awe-blue-first-right-top bx-right-top bx-hover
                          border-awe-blue-third border-2
                          p-2
                          rounded
                        " tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-bc81e71c45c71edc">
                      <img src="<?= $theme; ?>/dist/image/icons/prev-v2.svg" alt="Ícone" class="icon-swiper" />
                    </button>
                  </div>
                  <div>
                    <button class="
                          swiper-next
                          btn btn-awe-light-third
                          bx-awe-blue-first-right-top bx-right-top bx-hover
                          border-awe-blue-third border-2
                          p-2
                          rounded
                        " tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-bc81e71c45c71edc">
                      <img src="<?= $theme; ?>/dist/image/icons/next-v2.svg" alt="Ícone" class="icon-swiper" />
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php
  }
  ?>

  <section>
    <div class="news-section-title">
      <div class="container py-5">
        <div class="row">
          <div class="col-12">
            <div class="
                    d-flex
                    flex-column
                    align-items-start
                    text-awe-light-third
                    lh-1
                  ">
              <span class="fz-18 opacity-50 mb-3">
                _sempre temos algo novo
              </span>
              <h2 class="fz-28">Aqui as novidades não param</h2>
              <i class="opacity-50">acompanhe o que nós estamos fazendo</i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="news-section-content">
      <div class="container pt-awe-80 pb-awe-64">
        <div class="row gapy-5">
          <?php
          $news_highlighted = new WP_Query(array(
            'post_type'   => 'news',
            'posts_per_page'  => 10,
            'meta_key'    => 'highlighted',
            'meta_value'  => true,
          ));

          if ($news_highlighted->have_posts()) {
          ?>
            <div class="col-lg-6">
              <div class="swiper-news position-relative">
                <span class="
                      border border-awe-blue-third
                      bg-awe-blue-third
                      position-absolute
                      start-24
                      top-0
                      translate-middle-y
                      z-500
                      lh-1
                      px-4
                      py-2
                      text-awe-light-third
                      user-select-none
                    ">
                  Plantão da Redação
                </span>

                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php
                    while ($news_highlighted->have_posts()) {
                      $news_highlighted->the_post();

                      $categories = get_the_category();
                    ?>
                      <div class="swiper-slide">
                        <div class="
                              bx-awe-blue-first-right-bottom bx-hover
                              border border-awe-blue-first
                              mb-2
                              me-2
                              d-flex
                              flex-column
                              news-index-item
                            ">
                          <div class="title">
                            <?php
                            if (has_post_thumbnail()) {
                            ?>
                              <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid w-100" />
                            <?php
                            }
                            ?>
                            <h3><?php the_title(); ?></h3>
                          </div>
                          <div class="
                                p-4
                                pb-awe-80
                                d-flex
                                flex-column
                                align-items-start
                                bg-white
                              ">
                            <i class="text-awe-gray-first mb-3">Publicado <?= get_the_date('d.m.Y'); ?></i>
                            <p class="text-awe-blue-fifth fz-18 fw-light"><?= get_the_excerpt(); ?></p>
                            <div class="
                                  mb-3
                                  d-flex
                                  flex-row flex-wrap
                                  opacity-80
                                  gap-1
                                  fz-20
                                  fw-light
                                  fz-20
                                  text-awe-gray-first
                                ">
                              <?php
                              foreach ($categories as $category) {
                              ?>
                                <span class="text-decoration-underline">#<?= strtolower($category->name); ?></span>
                              <?php
                              }
                              ?>
                            </div>
                            <a href="<?= the_permalink(); ?>" class="fz-18 text-awe-blue-third">
                              <?= get_field('attraction_text') ?? 'Leia mais!'; ?>
                            </a>
                          </div>
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>

                <div class="row pt-4">
                  <div class="col-12">
                    <div class="
                          swiper-navigation
                          d-flex
                          flex-row
                          justify-content-end
                          gapx-3
                          pb-2
                        ">
                      <div>
                        <button class="
                              swiper-prev
                              btn btn-awe-light-third
                              bx-awe-blue-first-right-top bx-right-top bx-hover
                              border-awe-blue-third border-2
                              p-2
                            " tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-bc81e71c45c71edc">
                          <img src="<?= $theme; ?>/dist/image/icons/prev-v2.svg" alt="Ícone" class="icon-swiper" />
                        </button>
                      </div>
                      <div>
                        <button class="
                              swiper-next
                              btn btn-awe-light-third
                              bx-awe-blue-first-right-top bx-right-top bx-hover
                              border-awe-blue-third border-2
                              p-2
                            " tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-bc81e71c45c71edc">
                          <img src="<?= $theme; ?>/dist/image/icons/next-v2.svg" alt="Ícone" class="icon-swiper" />
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>

          <?php
          $news = new WP_Query(array(
            'post_type'   => 'news',
            'posts_per_page'  => 6,
            'meta_key'    => 'highlighted',
            'meta_value'  => '0',
          ));

          if ($news->have_posts()) {
          ?>
            <div class="col-lg-6">
              <div class="position-relative h-100 d-flex flex-column">
                <span class="
                      border border-awe-blue-third
                      bg-white
                      position-absolute
                      start-24
                      top-0
                      translate-middle-y
                      z-500
                      lh-1
                      px-4
                      py-2
                      text-awe-blue-third
                      user-select-none
                    ">
                  Outras notícias recentes
                </span>
                <div class="
                      news-list
                      p-awe-40
                      d-flex
                      flex-column
                      border border-awe-blue-third border-bottom-0
                      rounded-top
                      flex-1
                    ">
                  <?php
                  while ($news->have_posts()) {
                    $news->the_post();
                  ?>
                    <a class="
                          news
                          text-decoration-none
                          d-flex
                          flex-column
                          align-items-start
                        " href="<?php the_permalink(); ?>">
                      <span class="text-awe-blue-third fz-18 mb-3">
                        <?= the_title(); ?>
                      </span>
                      <i class="text-awe-gray-first fz-14">
                        Publicado <?= get_the_date('d.m.Y'); ?>
                      </i>
                    </a>
                  <?php
                  }
                  ?>
                </div>
                <div class="pb-2 mt-4 d-flex justify-content-end">
                  <a class="
                        d-flex
                        align-items-center
                        swiper-next
                        btn btn-awe-light-third
                        bx-awe-blue-first-left-bottom bx-hover
                        border-awe-blue-third border-2
                        text-awe-blue-first
                        fw-bold
                        p-2
                      " href="#">
                    LEIA TODAS AS NOTÍCIAS
                    <img src="<?= $theme; ?>/dist/image/icons/next.svg" alt="Ícone de seta apontando para a direita" class="img-fluid ms-4" />
                  </a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </section>

  <?php
  $team = new WP_Query(array(
    'post_type' => 'team',
    'posts_per_page' => 48,
  ));

  if ($team->have_posts()) {
  ?>
    <section class="section-team">
      <div class="container pt-awe-64 pb-awe-80">
        <div class="row">
          <div class="col-12">
            <div class="d-flex flex-column align-items-start">
              <span class="text-awe-blue-sixth fz-28 fw-light">
                _saca só esse
              </span>
              <h2 data-title="time de feras" class="title-section fz-72 m-0 fw-black">
                time de feras
              </h2>
            </div>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-6">
            <p class="m-0 text-awe-gray-fourth fz-18 mt-3 mb-awe-64">
              Aqui ficamos felizes quando “perdemos” um membro da nossa
              equipe. Isso quer dizer que o mercado ganhou um grande
              <strong>profissional</strong>.
            </p>
          </div>
        </div>
        <div class="
              row row-cols-2 row-cols-lg-3 row-cols-xl-4
              gapy-4
              mb-5
              teammates
            ">
          <?php
          while ($team->have_posts()) {
            $team->the_post();
          ?>
            <div class="col">
              <div class="
                  border border-2 border-awe-blue-third
                  bg-awe-light-third
                  p-awe-12 p-sm-3
                  d-flex
                  flex-column
                  text-awe-blue-second
                  team-item
                ">
                <?php
                if (has_post_thumbnail()) {
                ?>
                  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="
                    img-fluid
                    border border-2 border-awe-blue-second
                    mb-awe-12
                    teammate
                    transition
                  " />
                <?php
                }
                ?>
                <span class="fz-18"><?php the_title(); ?></span>
                <span class="fw-light fz-14 role">
                  <?php
                  foreach (wp_get_object_terms($post->ID, 'teammates_types') as $teammate_type) {
                  ?>
                    <span><?= $teammate_type->slug; ?></span>
                  <?php
                  }
                  ?>
                </span>
                <i class="fw-light fz-12"><?= get_field('area'); ?></i>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
        <div class="row mb-awe-152">
          <div class="col-auto">
            <div>
              <a class="
                    d-flex
                    align-items-center
                    swiper-next
                    btn btn-awe-light-third
                    bx-awe-blue-first-left-bottom bx-left-bottom bx-hover
                    border-awe-blue-third border-2
                    text-awe-blue-first
                    fw-bold
                    p-2
                  " href="#">
                VER TODOS
                <img src="<?= $theme; ?>/dist/image/icons/next.svg" alt="Ícone de seta apontando para a direita" class="img-fluid ms-4" />
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="
                  bg-awe-gray-third
                  border border-awe-gray-fifth border-2
                  rounded
                  banner-new-member
                  py-awe-64
                  mx-0
                  row
                  gapy-3
                ">
              <div class="col-10 col-lg-6 offset-1 offset-lg-3">
                <div class="d-flex flex-column align-items-start">
                  <span class="text-awe-gray-first">ESTAMOS ABERTOS</span>
                  <span class="text-awe-blue-third fz-28">
                    Que tal ser um membro da AWE?
                  </span>
                </div>
              </div>
              <div class="col-10 col-lg-auto mx-auto m-lg-0">
                <div class="
                      h-100
                      d-flex
                      align-items-center
                      justify-content-end justify-content-lg-start
                    ">
                  <a class="
                        d-flex
                        align-items-center
                        swiper-next
                        btn btn-outline-awe-blue-third
                        border-awe-blue-third border-2
                        fw-bold
                        p-2
                        px-4
                      " href="#">
                    INSCREVA-SE
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php
  }
  ?>

  <?php
  $mentor = new WP_Query(array(
    'post_type' => 'mentor',
    'posts_per_page' => 48,
  ));

  if ($mentor->have_posts()) {
  ?>
    <section class="bg-awe-gray-sixth overflow-hidden">
      <div class="container py-awe-56">
        <div class="row">
          <div class="col-12">
            <div>
              <h2 class="text-awe-blue-third fz-28 mb-3">_nossos mentores</h2>
            </div>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
            <p class="m-0 text-awe-dark-second fz-18">
              A visão de quem tá no mercado é essencial para alavancar o que
              aprendemos na escola. Temos a sorte de contar com mentores em
              diversas áreas que nos ajudam a fazer a diferença.
            </p>
          </div>
          <div class="col-12">
            <div class="mb-5">
              <div class="d-flex justify-content-end mt-awe-32 mb-4">
                <a href="#" class="
                      text-awe-blue-third
                      fw-bold
                      text-decoration-none
                      d-flex
                      align-items-center
                    ">
                  VER MAIS
                  <img src="<?= $theme; ?>/dist/image/arrow-right-v2.svg" alt="Ícone de seta apontando para a direita" class="img-fluid ms-3" />
                </a>
              </div>

              <div class="swiper-mentor">
                <div class="swiper">
                  <div class="swiper-wrapper">
                    <?php
                    while ($mentor->have_posts()) {
                      $mentor->the_post();
                    ?>
                      <div class="swiper-slide">
                        <div class="
                            border border-2 border-awe-blue-third
                            bg-awe-light-third
                            p-awe-12 p-sm-3
                            d-flex
                            flex-column
                            text-awe-blue-second
                            team-item
                          ">
                          <?php
                          if (has_post_thumbnail()) {
                          ?>
                            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="
                              img-fluid
                              border border-2 border-awe-blue-second
                              mb-awe-12
                              teammate
                              transition
                            " />
                          <?php
                          }
                          ?>
                          <span class="fz-18"><?php the_title(); ?></span>
                          <span class="fw-light fz-14"><?= get_field('role'); ?></span>
                          <i class="fw-light fz-12"><?= get_field('area'); ?></i>
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <div>
              <a class="
                    d-flex
                    align-items-center
                    swiper-next
                    btn btn-awe-light-third
                    bx-awe-blue-first-left-bottom bx-left-bottom bx-hover
                    border-awe-blue-third border-2
                    text-awe-blue-first
                    fw-bold
                    p-2
                  " href="#">
                VEM FAZER PARTE
                <img src="<?= $theme; ?>/dist/image/icons/next.svg" alt="Ícone de seta apontando para a direita" class="img-fluid ms-4" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php
  }
  ?>
</main>

<script>
  document.querySelector('body').dataset.page = 'home';
</script>

<?php get_footer(); ?>