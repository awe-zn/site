<?php
get_header();

$theme = get_bloginfo("template_url");
?>

<main>
  <section>
    <div class="container pt-3 pb-awe-64">
      <div class="row">
        <div class="col-12">
          <nav class="mb-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">#awe</a>
              </li>
              <li class="breadcrumb-item active">sobre nós</li>
            </ol>
          </nav>
        </div>
        <div class="col-12">
          <div class="d-flex flex-column align-items-end">
            <span class="text-awe-gray-first">CONHEÇA O PROJETO</span>
            <h1 class="text-awe-blue-third fz-38 fw-bold">
              <span class="underline underline-awe-yellow-first">
                Somos
              </span>
              a AWE
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container pt-awe-64 pb-awe-80">
      <div class="row">
        <div class="col-12">
          <div class="py-awe-64">
            <div class="row bg-awe-blue-sixth rounded-3 m-0">
              <div class="col-6">
                <div class="h-100 mt-nawe-64 mb-lg-nawe-64 px-4 px-lg-0">
                  <img src="<?= $theme; ?>/dist/image/team-photo.png" alt="Foto dos membros" class="img-fluid img-cover w-100 rounded-3" />
                </div>
              </div>
              <div class="col-xl-5 col-lg-6 mx-auto">
                <div class="
                        d-flex
                        flex-column
                        justify-content-center
                        text-awe-light-third
                        h-100
                        py-5
                        px-4 px-lg-0
                      ">
                  <span>TRABALHO EM EQUIPE</span>
                  <h2 class="fz-28 fw-bold mt-2 mb-awe-32">
                    Buscamos somar esforços para fazermos a diferença juntos
                  </h2>
                  <p class="m-0 text-awe-gray-sixth fz-18">
                    Acreditamos que a cooperação com pessoas diferentes é o
                    motor da inovação. E nós buscamos isso.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container pt-awe-32 pb-awe-40">
      <div class="row">
        <div class="col-12 col-lg-11 col-xl-10 mx-auto">
          <div class="d-flex flex-column justify-content-end m-0 content-about">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $teammates_types = get_terms(array(
    'taxonomy' => 'teammates_types',
    'hide_empty' => true,
  ));

  if (sizeof($teammates_types)) {
  ?>
    <section>
      <div class="container pt-awe-80 pb-awe-152">
        <div class="d-flex flex-column gapy-awe-80">
          <?php
          foreach ($teammates_types as $teammate_type) {
            $team = new WP_Query(array(
              'post_type' => 'team',
              'tax_query' => array(array(
                'taxonomy' => 'teammates_types',
                'field' => 'slug',
                'terms' => $teammate_type->slug,
              )),
            ));

            if ($team->have_posts()) {
          ?>
              <div>
                <div class="row">
                  <div class="col-12">
                    <h2 class="text-awe-blue-third fz-21 mb-awe-40 text-uppercase">
                      TIME <?= $teammate_type->name; ?>
                    </h2>
                  </div>
                </div>
                <div class="
                  row row-cols-2 row-cols-lg-3 row-cols-xl-4
                  gapy-4
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
                        <span class="fw-light fz-12"><?= get_field('role'); ?></span>
                        <i class="fw-light fz-14 area">
                          <?php
                          foreach (wp_get_object_terms($post->ID, 'teammates_types') as $teammate_type) {
                          ?>
                            <span><?= $teammate_type->slug; ?></span>
                          <?php
                          }
                          ?>
                        </i>
                      </div>
                    </div>
                  <?php
                  }
                  ?>

                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>
      </div>
    </section>
  <?php
  }
  ?>
</main>

<?php get_footer(); ?>