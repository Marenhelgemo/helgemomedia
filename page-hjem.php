<?php get_header(); ?>

<main class="site-container">

  <!-- HERO / HEADER -->
  <div class="header-wrapper">
    <div class="header-flex">
      <div class="header">
        <h1>DIGITAL STØTTE</h1>
        <h2>FOR GRÜNDERE OG SMÅBEDRIFTER</h2>
        <p>
          Nettsider, domener, e-post, hosting og vedlikehold – vi tar hånd om alt. <br><br>
          Vi sørger også for SEO, sosiale medier, WordPress-opplæring og grafisk profil. <br><br>
          En komplett digital tjeneste for småbedrifter og gründere.
        </p>
        <a href="<?php echo site_url('/arbeider'); ?>" class="btn-1">
          <span>Se vårt arbeid</span>
          <svg class="btn-border" viewBox="0 0 180 60" xmlns="http://www.w3.org/2000/svg">
            <rect x="2" y="10" rx="10" ry="10" width="170" height="40" />
          </svg>
</a>
      </div>

      <div class="header-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/samarbeid.svg" alt="Digital støtte illustrasjon" />
      </div>
    </div>
  </div>

  <!-- KORTSEKSJONER -->
  <div class="card-grid">

    <!-- OM OSS -->
    <div class="info-card">
      <h2>OM OSS</h2>
      <svg class="icon users-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 
            3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 
            21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 
            6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 
            0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 
            2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 
            3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 
            3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 
            0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 
            4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
      </svg>
      <p>Vi er et dedikert team med lidenskap for å løfte din merkevare på nett.</p>
      <a href="<?php echo site_url('/om-oss'); ?>" class="btn">Bli kjent med oss</a>
    </div>

    <!-- TJENESTER -->
    <div class="info-card">
      <h2>VÅRE TJENESTER</h2>
      <svg class="icon gear-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 
            0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 
            1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 
            1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 
            1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 
            1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 
            1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 
            0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 
            0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 
            1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 
            1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
      </svg>

      <section class="services-section" id="tjenester">
        <ul class="services-list">
          <li class="service-item">🌐 Nettsider</li>
          <li class="service-item">📧 E-postoppsett</li>
          <li class="service-item">💾 Hosting</li>
          <li class="service-item">🌍 Domenehåndtering</li>
          <li class="service-item">🔧 Vedlikehold</li>
          <li class="service-item">🎨 Logo & Presentasjoner</li>
          <li class="service-item">📱 Sosiale Medier</li>
          <li class="service-item">📘 WordPress-opplæring</li>
          <li class="service-item">🔍 SEO</li>
        </ul>
      </section>
      <a href="<?php echo site_url('/butikk'); ?>" class="btn">Se våre priser</a>


    </div>

    <!-- KONTAKT -->
    <div class="info-card">
      <h2>KONTAKT OSS</h2>
      <svg class="icon mail-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 
            2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 
            0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 
            0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 
            1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 
            1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
      </svg>
      <p>Ta kontakt med oss for en uforpliktende prat om dine behov.</p>
      <a href="<?php echo site_url('/kontakt'); ?>" class="btn">Ta kontakt med oss</a>
    </div>

  </div><!-- .card-grid -->
</main>

  <section class="front-blog">
  <div class="site-container">
    <h2 class="section-title">Siste fra bloggen</h2>

    <div class="blog-grid">
      <?php
      $recent_posts = new WP_Query(array(
        'posts_per_page' => 3, // Vis de 3 nyeste
      ));

      if ($recent_posts->have_posts()) :
        while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
          <article class="blog-card">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <div class="blog-thumb"><?php the_post_thumbnail('medium'); ?></div>
              <?php endif; ?>
              <h3 class="blog-title"><?php the_title(); ?></h3>
              <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            </a>
          </article>
        <?php endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</section>




<?php get_footer(); ?>
