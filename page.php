<?php get_header() ?>
  <main class="page-interno">
    <section>
      <?php if (have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
        <section class="titulo-interno">
          <div class="container">
            <h1><?php the_title() ?></h1>
          </div>
        </section>
        <section class="conteudo-interno">
          <div class="container">
            <?php the_content() ?>
          </div>
        </section>
        <?php endwhile; ?>
      <?php endif; ?>
    </section>
  </main>
<?php get_footer() ?>
