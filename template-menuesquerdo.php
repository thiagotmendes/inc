<?php /* template name: Pagina com menu */ ?>
<?php get_header() ?>
  <main class="page-interno">
    <section>

        <section class="titulo-interno">
          <div class="container">
            <h1><?php the_title() ?></h1>
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

                  if(!empty($pagina_anterior)){
                    $idPagina = $pagina_anterior[0];
                  } else {
                    $idPagina = $id;
                  }
                  $arg = array(
                    'post_type'       => 'page',
                    'posts_per_page'  => 20,
                    'orderby'         => 'menu_order',
                    'order'           => 'ASC',
                    'post_parent'     => $idPagina
                  );

                  echo "<h3 class='titulo-menu-interno'>". get_post_field('post_title', $idPagina) . "</h3>"; 

                  $menu_lateral = new wp_query($arg);
                  if($menu_lateral->have_posts()):
                    echo "<ul class='menu-lateral'>";
                      while($menu_lateral->have_posts()): $menu_lateral->the_post();
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
