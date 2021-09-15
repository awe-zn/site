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
              <li class="breadcrumb-item active">nossa equipe</li>
            </ol>
          </nav>
        </div>
        <div class="col-12">
          <div class="d-flex flex-column align-items-end">
            <span class="text-awe-gray-first">NOSSOS MEMBROS</span>
            <h1 class="text-awe-blue-third fz-38 fw-bold">
              <span class="underline underline-awe-yellow-first">
                Conheça
              </span>
              nossa equipe topzera
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container pb-awe-80">
      <div class="row mb-awe-80">
        <div class="col-12">
          <div class="d-flex flex-row flex-wrap gapx-awe-12 gapy-2">
            <?php
            $teammates_types = get_terms(array(
              'taxonomy' => 'teammates_types',
              'hide_empty' => true,
            ));

            foreach ($teammates_types as $teammate_type) {
            ?>
              <form>
                <input type="hidden" name="skill" value="<?= $teammate_type->slug; ?>">
                <button type="submit" class="btn btn-outline-awe-blue-fourth rounded fw-semibold text-uppercase <?php if ($_GET['skill'] === $teammate_type->slug) echo 'active' ?>">
                  <?= $teammate_type->name; ?>
                </button>
              </form>
            <?php
            }
            ?>
          </div>
        </div>
      </div>

      <?php
      $args = array(
        'post_type' => 'team',
      );

      if ($_GET['skill'])
        $args['tax_query'] = array(array(
          'taxonomy' => 'teammates_types',
          'field' => 'slug',
          'terms' => $_GET['skill'],
        ));

      $team = new WP_Query($args);

      if ($team->have_posts()) {
      ?>
        <div class="
              row row-cols-1 row-cols-md-2 row-cols-lg-3
              gapy-awe-96
              mb-awe-112
            ">
          <?php
          while ($team->have_posts()) {
            $team->the_post();
          ?>
            <div class="col">
              <div class="d-flex flex-column align-items-start gapy-4">
                <?php
                if (has_post_thumbnail()) {
                ?>
                  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumb border border-awe-blue-first w-100" />
                <?php
                }
                ?>
                <h3 class="text-awe-gray-second fw-bold fz-22 m-0">
                  <?php the_title(); ?>
                </h3>
                <p class="text-awe-blue-eighth m-0">
                  <?= get_the_excerpt(); ?>
                </p>
                <a href="<?= get_field('link'); ?>" class="fw-bold text-awe-gray-second">Visite o site</a>
              </div>
            </div>
          <?php
          }
          ?>

        </div>
      <?php
      } else {
      ?>
        <div class="row">
          <div class="col-auto">
            <span class="text-awe-gray-first">NENHUM PROJETO DESSA CATEGORIA CADASTRADO, VOLTE EM BREVE!</span>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>