<?php
/**
 * Template Name: Landing Page (Helgemo)
 * Description: Enkel landingsside med rolig layout og smale tekstbredder.
 */

get_header(); ?>

<main class="hm-landing" id="main-content" role="main">
  <div class="hm-landing__container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php
        // Valgfritt: vis tittel automatisk (skrur du av hvis du heller vil skrive H1 i editor)
        $show_title = false;
      ?>

      <?php if ( $show_title ) : ?>
        <header class="hm-landing__header">
          <h1 class="hm-landing__title"><?php the_title(); ?></h1>
        </header>
      <?php endif; ?>

      <article class="hm-landing__content">
        <?php the_content(); ?>
      </article>

    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
