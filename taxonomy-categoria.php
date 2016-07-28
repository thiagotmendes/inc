<?php /* template name: Pagina com menu */ ?>
<?php get_header() ?>
  <main class="page-interno">
    <section>
        <section class="titulo-interno">
          <div class="container">
            <?php $termoCorrent = get_the_terms($idPagina, 'categoria'); ?>
            <h1><?php echo $termoCorrent[0]->name ?></h1>
          </div>
        </section>
        <section class="conteudo-interno">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <?php
                  $id = get_the_id();
                  $titulo_corrente = get_the_title();
                  $pagina_anterior = get_post_ancestors($id);
                  /*if(!empty($pagina_anterior)){
                    $idPagina = $pagina_anterior[0];
                  } else {
                    $idPagina = $id;
                  }*/
                  echo "<h3 class='titulo-menu-interno'>". $termoCorrent[0]->name . "</h3>";


                  $menu_lateral = new wp_query($arg);
                  if(have_posts()):
                    echo "<ul class='menu-lateral'>";
                      while(have_posts()): the_post();
                        $titulo_menu = get_the_title();
                        if ($titulo_corrente == $titulo_menu) {
                          $activate = "activate";
                        } else {
                          $activate = "";
                        }
                        echo "<li class='$activate'>";
                        ?>
                          <a href="<?php the_permalink() ?>" class="hvr-underline-from-left"><?php the_title(); ?></a>
                        <?php
                        echo "</li>";
                      endwhile;
                    echo "</ul>";
                  else:
                    echo "Nenhuma pagina encontrada";
                  endif;
                  ?>
              </div>
              <div class="col-md-9">
                <?php if (have_posts()): ?>
                  <?php while(have_posts()): the_post() ?>
                    <?php the_content() ?>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </section>

    </section>
  </main>
<?php get_footer() ?>
