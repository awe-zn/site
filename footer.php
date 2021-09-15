<?php
$theme = get_bloginfo("template_url");
?>

    <footer>
      <div class="bg-awe-yellow-first text-awe-blue-fourth">
        <div class="container py-awe-32">
          <div class="row">
            <div class="col-auto col-sm-8 col-md-6 col-lg-4 col-xl-3 mx-auto">
              <div class="d-flex flex-column align-items-center gapy-awe-12">
                <a href="#" class="d-flex text-decoration-none gapx-2 text-reset fw-bold">
                  <i data-feather="instagram"></i>
                  <i>@awescolar</i>
                </a>
                <p class="fst-italic m-0 text-center">
                  segue a gente lá no instagram, dá essa moralzinha pra nós!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer">
        <div class="container py-awe-80">
          <div class="row mb-awe-80">
            <div class="col-xl-5 col-lg-6 col-md-7">
              <p class="fz-21 text-white">
                <span class="text-awe-yellow-first">Queremos você aqui</span>.
                Que tal você fazer parte da nossa equipe e mudarmos o mundo,
                <b class="text-awe-yellow-first">juntos</b>?
              </p>
            </div>
          </div>
          <div class="row gapy-4">
            <div class="col-lg-3 col-md-4">
              <div class="d-flex flex-column gapy-3 fz-18 text-awe-gray-seventh">
                <div class="d-flex flex-column">
                  <span class="fw-light">
                    contato <span class="fz-14 opacity-50">(whatsapp)</span>
                  </span>
                  <span class="fw-medium">+ 55 84 9944-5650</span>
                </div>
                <div class="d-flex flex-column">
                  <span class="fw-light"> email </span>
                  <span class="fw-medium">awescolar@gmail.com</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-5 offset-lg-1">
              <div class="d-flex flex-column fz-18 text-awe-gray-seventh">
                <span class="fw-light">endereço</span>
                <span class="fw-medium">IFRN <i>campus</i> Natal Natal Zona Norte</span>
                <span class="fz-14">Rua Brusque, 2926, Potengi | Natal-RN</span>
              </div>
            </div>
            <div class="col-md-3 offset-lg-1">
              <div class="d-flex flex-column">
                <i class="fw-light fz-18 text-awe-gray-seventh">mídias sociais</i>
                <div class="
                        d-flex
                        flex-row
                        justify-content-between
                        text-awe-blue-seventh
                        fz-24
                        gapx-3
                        gapy-2
                        flex-wrap
                      ">
                  <i data-feather="instagram"></i>
                  <i data-feather="globe"></i>
                  <i class="fab fa-behance"></i>
                  <i data-feather="github"></i>
                  <i data-feather="linkedin"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="border-top border-awe-gray-fourth">
          <div class="container py-5">
            <div class="row">
              <div class="col-auto mx-auto">
                <img src="<?= $theme; ?>/dist/image/logo-v2.svg" alt="Logo" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>

</html>