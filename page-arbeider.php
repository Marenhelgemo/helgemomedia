<?php
/*
Template Name: Arbeider
*/

get_header(); ?>
<body class="dark-mode">
<main class="arbeider-page site-container">
  <h1 class="page-title"><?php the_title(); ?></h1>

  <section class="intro">
    <p>Her finner du en samling av vårt arbeid – både for kunder og eksempelprosjekter vi har utviklet internt.</p>
  </section>

  <section class="arbeid-grid">
    <?php
    // Hent blogginnlegg med kategori "arbeider"
    $args = array(
      'post_type' => 'post',
      'category_name' => 'arbeider',
      'posts_per_page' => 12
    );
    $arbeid_query = new WP_Query($args);

    if ($arbeid_query->have_posts()) :
      while ($arbeid_query->have_posts()) : $arbeid_query->the_post(); ?>
        <article class="arbeid-item">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <div class="thumb">
                <?php the_post_thumbnail('medium'); ?>
              </div>
            <?php endif; ?>
            <h2><?php the_title(); ?></h2>
          </a>
        </article>
      <?php endwhile;
      wp_reset_postdata();
    else : ?>
      <p>Ingen arbeid funnet.</p>
    <?php endif; ?>
  </section>
</main>
    </body>
<?php get_footer(); ?>
