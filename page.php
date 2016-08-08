<?php get_header() ?>
  <main class="page-interno">
    <section>
      <?php if (have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
          <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <section class="titulo-interno" style="background-image:url('<?php echo $url ?>')">    
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
