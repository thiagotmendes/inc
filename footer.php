<section class="pre-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <p class="informa">
          Informativo Online:
        </p>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4">
            <form>
              <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" placeholder="">
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <form>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="">
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <button type="submit" class="btn btn-informa">Cadastrar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="<?php echo get_template_directory_uri() ?>/images/logo-baixo.png" alt="" class="img-responsive logo-footer" />
        <div class="end-footer">
          <p>
            <img src="<?php echo get_template_directory_uri() ?>/images/icon-fone.png" alt="" class="icon-footer"/> (31) 3979-7960
          </p>
          <p>
            <img src="<?php echo get_template_directory_uri() ?>/images/icon-localizacao2.png" alt=""  class="icon-footer"/> Av. Dois, 909-Casa A - Jardim Vitória<br>
            <span class="alinha-end">Belo Horizonte/MG | Cep: 31975-334</span>
          </p>
        </div>
      </div>
      <div class="col-md-9">
        <div class="row">
          <?php
          $termoFooter = get_terms( array ('taxonomy' => 'categoria' ));
          foreach ($termoFooter as $term) {
          ?>
            <div class="col-md-3">
              <span class="titulos-rodape">
                <?php echo $term->name ?>
              </span>
              <?php
              $arg = array(
                'post_type' => 'cursos',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'categoria',
                    'terms' => $term->term_id,
                    'field' => 'term_id'
                  ),
                ),
              );

              $menu_lateral = new wp_query($arg);
              if($menu_lateral->have_posts()):
                while($menu_lateral->have_posts()): $menu_lateral->the_post();
                  $titulo_menu = get_the_title();
                  if ($titulo_corrente == $titulo_menu) {
                    $activate = "activate";
                  } else {
                    $activate = "";
                  }
                  echo "<span><small>";
                  ?>
                    <a href="<?php the_permalink() ?>" class="sub-menu-footer">&dash; <?php the_title(); ?></a>
                  <?php
                  echo "</small></span>";
                endwhile;
              endif;
              ?>
            </div>
          <?php
          }
          ?>
        </div>  
        <div class="row">
          <div class="col-md-3">
            <span class="titulos-rodape">
              O Incisa
            </span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Conheça-nos</a></small></span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Missão e Objetivos</a></small></span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Responsibilidade Social</a></small></span>
          </div>
          <div class="col-md-3">
            <span class="titulos-rodape">
              Infraestrutura
            </span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Equipe</a></small></span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Apoio à carreira</a></small></span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Recursos Metodológicos</a></small></span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Parceiros</a></small></span>
          </div>
          <div class="col-md-3">
            <span class="titulos-rodape">
              Como Ingressar
            </span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Vestibular</a></small></span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Transferência</a></small></span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Obtenção de Novo Título</a></small></span>
          </div>
          <div class="col-md-3">
            <span class="titulos-rodape">
              Intercâmbio
            </span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Cursos na China</a></small></span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Incisa em Portugal</a></small></span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Incisa no Japão</a></small></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <span class="titulos-rodape">
              Serviços
            </span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Clínica Escola</a></small></span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Residência</a></small></span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Ambulatório</a></small></span>
          </div>
          <div class="col-md-3">
            <span class="titulos-rodape">
              Biblioteca
            </span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Regulamento</a></small></span>
            <span><small><a href="#" class="sub-menu-footer">&dash; Política</a></small></span>
          </div>
          <div class="col-md-3">
            <p class="titulos-rodape">
              Editais
            </p>
          </div>
          <div class="col-md-3">
            <p class="titulos-rodape">
              Estágio
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <p class="titulos-rodape">
              Manuais
            </p>
          </div>
          <div class="col-md-3">
            <p class="titulos-rodape">
              Notícias
            </p>
          </div>
          <div class="col-md-3">

          </div>
          <div class="col-md-3">

          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
