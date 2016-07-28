<?php echo get_header() ?>
    <section class="banner">
      <img src="<?php echo get_template_directory_uri() ?>/images/banner.jpg" alt="" class="img-responsive"/>
    </section>
    <main>
      <section class="conteudo-principal">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="titulo-todos">
                <div class="row">
                  <div class="col-md-6">
                    <h4 class="titulo-fique">Fique por Dentro</h4>
                  </div>
                  <div class="col-md-6">
                    <span class="ver-todos"><small><a href="#">Ver todos</a></small></span>
                  </div>
                </div>
              </div>
              <div class="row noticias-home">
                <?php
                $argPost = array(
                  'post_type' => 'post',
                  'posts_per_page'  => 6
                );
                $postHome = new wp_query($argPost);
                if ($postHome->have_posts()):
                  while($postHome->have_posts()): $postHome->the_post();
                ?>
                    <div class="col-md-6">
                      <?php if (has_post_thumbnail()): ?>
                        <div class="img-noticia">
                          <a href="'<?php the_permalink(); ?>'">  <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?></a>
                        </div>
                      <?php endif ?>
                      <a href="#" class="titulo-noticia-home"><p><?php the_title() ?></p></a>
                      <p class="previa-home">
                        <?php the_excerpt_limit(30) ?>
                      </p>
                    </div>
                <?php
                  endwhile;
                endif;
                ?>
              </div>
            </div>

            <div class="col-md-3 col-md-offset-1">
              <h4 class="titulo-fique">Buscar no Portal</h4>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Procurar por...">
                <span class="input-group-btn">
                  <button class="btn btn-pesquisa" type="button">Go!</button>
                </span>
              </div><!-- /input-group -->
              <div class="anuncio">
                <p align="center">
                  <img src="<?php echo get_template_directory_uri() ?>/images/bn1.jpg" alt="" class="img-responsive"/>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="viagem">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <img src="<?php echo get_template_directory_uri() ?>/images/bn2.jpg" alt="" class="img-responsive"/>
            </div>
            <div class="col-md-3">
              <img src="<?php echo get_template_directory_uri() ?>/images/bn3.jpg" alt="" class="img-responsive"/>
              <div class="row">
                <div class="col-md-6">
                  <p class="links-tcc"><a href="#">Download<br> <strong>Manual</strong></a></p>
                </div>
                <div class="col-md-6">
                  <p class="links-tcc"><a href="#"><strong>Formulário</strong><br> de Entrega</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <img src="<?php echo get_template_directory_uri() ?>/images/bn4.jpg" alt="" class="img-responsive"/>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php get_footer() ?>
