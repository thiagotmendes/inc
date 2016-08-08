<?php get_header() ?>
  <main class="page-interno">
    <section>
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
      <section class="titulo-interno" style="background-image:url('<?php echo $url ?>')"> 
          <div class="container">
            <?php
            $post = get_post( $pagina_anterior[0] );
            ?>
            <?php $termoCorrent = get_the_terms($idPagina, 'categoria'); ?>
            <h1><?php
            if(!empty($post)):
              echo $post->post_title;
            else:
              echo $termoCorrent[0]->name;
            endif;
             ?></h1>
          </div>
        </section>
        <section class="conteudo-interno">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <?php
                  $id = get_the_id();
                  $termo_id = $termoCorrent[0]->term_id;
                  $titulo_corrente = get_the_title();

                  $pagina_anterior = get_post_ancestors($id);

                  if(!empty($pagina_anterior)){
                    $idPagina = $pagina_anterior[0];
                  } else {
                    $idPagina = $id;
                  }

                  if(empty($pagina_anterior)):
                    echo "<h3 class='titulo-menu-interno'>". $termoCorrent[0]->name . "</h3>";
                    $arg = array(
                      'post_type' => 'cursos',
                      'tax_query' => array(
                        array(
                          'taxonomy' => 'categoria',
                          'terms' => $termo_id,
                          'field' => 'term_id'
                        ),
                      ),
                    );
                  else:
                    $post = get_post( $pagina_anterior[0] );

                    echo "<h3 class='titulo-menu-interno'>". $post->post_title . "</h3>";
                    $arg = array(
                      'post_type' => 'cursos',
                      'post_parent' => $pagina_anterior[0]
                    );
                  endif;
                  $menu_lateral = new wp_query($arg);
                  if($menu_lateral->have_posts()):
                    echo "<ul class='menu-lateral'>";
                      while($menu_lateral->have_posts()): $menu_lateral->the_post();
                        $idMenuSuperior = get_the_id();
                        $titulo_menu = get_the_title();
                        if ($titulo_corrente == $titulo_menu) {
                          //$activate = "activate";
                        } else {
                          $activate = "";
                        }
                        echo "<li class='$activate'>";
                        ?>
                          <a href="<?php the_permalink() ?>" class="hvr-underline-from-left"><?php the_title(); ?></a>
                          <?php
                          /********** Sub menu ********************/
                          $argSubmenu = array(
                            'post_type'   => 'cursos',
                            'post_parent' => $idMenuSuperior
                          );
                          $subMenu = new wp_query($argSubmenu);
                          if ($subMenu->have_posts()):
                            echo "<ul>";
                            while($subMenu->have_posts()): $subMenu->the_post();
                          ?>
                              <li> <a href="<?php the_permalink() ?>"> <?php the_title(); ?> </a> </li>
                          <?php
                            endwhile;
                            echo "</ul>";
                          endif;
                          /*********** final do sub menu  ***********************/
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
                    <div class="row reserva-item">
                      <div class="col-md-3">
                        <button type="button" name="button" class="btn btn-danger btn-block"> Faça sua Reserva </button>
                      </div>
                      <div class="col-md-3">
                        <button type="button" name="button" class="btn btn-primary btn-block"> Documentos </button>
                      </div>
                      <div class="col-md-6">
                        <strong>Coordenador</strong>
                        <?php echo get_field('coordenador') ?>
                        <br>
                        <strong>Contato:</strong>
                        <?php echo get_field('contato') ?>
                      </div>
                    </div>
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
