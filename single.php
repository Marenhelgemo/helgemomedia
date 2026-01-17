<?php get_header(); ?>

<div class="site-container">
<main class="single-post">
  <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <article>
          <h1><?php the_title(); ?></h1>
           <p class="post-date">Publisert: <?php echo get_the_date(); ?></p>
          <div class="post-content"><?php the_content(); ?></div>
        </article>
      <?php endwhile;
    else :
      echo '<p>Post not found.</p>';
    endif;
  ?>
</main>
</div>
<section class="related-posts">
  <div class="site-container">
    <h2>Relaterte innlegg</h2>
    <div class="related-posts-grid">
      <?php
        $categories = wp_get_post_categories(get_the_ID());
        $args = [
          'category__in'   => $categories,
          'post__not_in'   => [get_the_ID()],
          'posts_per_page' => 3
        ];
        $related = new WP_Query($args);
        if ($related->have_posts()) :
          while ($related->have_posts()) : $related->the_post(); ?>
            <article class="related-post">
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                  <div class="related-thumb">
                    <?php the_post_thumbnail('medium'); ?>
                  </div>
                <?php endif; ?>
                <div class="related-meta">
                  <h3 class="related-title"><?php the_title(); ?></h3>
                </div>
              </a>
            </article>
      <?php
          endwhile;
          wp_reset_postdata();
        else :
          echo '<p>Ingen relaterte innlegg funnet.</p>';
        endif;
      ?>
    </div>
  </div>
</section>


<section id="post-results" class="site-container"></section>

<div style="text-align:center; margin-top: 2rem;">
  <button id="load-more" style="display:none;">SE MER</button>
</div>


<?php get_footer(); ?>
