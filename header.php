<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <?php wp_head() ?>

    <title>
      <?php
	      if ( is_single() ) {
	        bloginfo('name'); echo " | "; single_post_title();
	      }elseif ( is_home() || is_front_page() ) {
	        bloginfo('name'); echo ' | ';
	        bloginfo('description');
	      }elseif ( is_page() ) {
	        single_post_title('');
	      }elseif ( is_search() ) {
	        bloginfo('name');
	        echo ' | Search results for ' . wp_specialchars($s);
	      }elseif ( is_404() ) {
	        bloginfo('name');
	        print ' | Erro 404';
	      }else {
	        bloginfo('name');
	        wp_title('|');
	      }
      ?>
    </title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div class="bar-top">
        <nav class="navbar navbar-top">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-top">
                <li class="active"><a href="http://www.incisaimam.com.br/boleto/"><img src="<?php echo get_template_directory_uri() ?>/images/icon-boleto.png" alt=""  class="icon-bar-top"/> 2&ordf; Via de Boleto <span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo esc_url( home_url( 'trabalhe-conosco' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/icon-trabalhe.png" alt="" class="icon-bar-top"/> Trabalhe Conosco</a></li>
                <li><a href="<?php echo esc_url( home_url( 'localizacao' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/icon-localizacao.png" alt="" class="icon-bar-top"/> Localização</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right navbar-top">
                <li><a href="http://177.43.100.194/aula/aluno/login.php"><img src="<?php echo get_template_directory_uri() ?>/images/icon-restrito.png" alt="" class="icon-bar-top"/> Alunos</a></li>
                <li><a href="http://177.43.100.194/aula/framework/config/php/login.php">Professores</a></li>
                <li><a href="#">Intranet</a></li>
                <li><a href="<?php echo esc_url( home_url( 'parceiros' ) ); ?>">Parceiros</a></li>
                <li><a href="http://www.incisaimam.com.br/formularios/">Formulários</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-->
        </nav>
      </div>
      <div class="menu-tipo-curso">
        <nav class="navbar navbar-curso">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed btn-meinc" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
              <ul class="nav navbar-nav navbar-right navbar-curso">
              <?php
              $term_tilte = get_terms('categoria', array(
                'orderby'    => 'order',
                'order'      => 'ASC',
              ));

              foreach ( $term_tilte as $curso ) {
                $link = get_term_link( $curso->term_id, 'categoria' )
              ?>
                <li class="active">
                  <a href="<?php echo $link ?>">
                    <?php echo $curso->name ?>
                    <img src="<?php echo get_template_directory_uri() ?>/images/setinha.png" alt="" class="seta-menu" />
                  </a>
                </li>
              <?php
              }
              ?>
                <!--<li class="active"><a href="#">Pós-Graduação <img src="<?php echo get_template_directory_uri() ?>/images/setinha.png" alt="" /></a></li>
                <li><a href="#">Graduação <img src="<?php echo get_template_directory_uri() ?>/images/setinha.png" alt="" /></a></li>
                <li><a href="#">Técnicos <img src="<?php echo get_template_directory_uri() ?>/images/setinha.png" alt="" /></a></li>
                <li><a href="#">Extensão e Cursos Livres <img src="<?php echo get_template_directory_uri() ?>/images/setinha.png" alt="" /></a></li>-->
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-->
        </nav>
      </div>
      <div class="menu-principal">
        <nav class="navbar navbar-principal">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-3">
              <?php
    		    	$args = array(
    		    		'menu' => 'principal',
    		    		'menu_class' => 'nav navbar-nav navbar-principal',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
    		    	);
    		    	wp_nav_menu( $args ); ?>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-->
        </nav>
      </div>
    </header>
