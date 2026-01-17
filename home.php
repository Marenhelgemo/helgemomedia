<?php
get_header(); ?>

<section class="services-filter">
  <div class="service-padding">
    <h2>Utførte Jobber</h2><br>
    <h3>Sorter på kategori</h3>
  </div>
  <div class="site-container services-grid">
    <?php
    $services = [
      ['title' => 'Grunnarbeid', 'icon' => 'fa-dumpster'],
      ['title' => 'Vann og avløp', 'icon' => 'fa-water'],
      ['title' => 'Riving', 'icon' => 'fa-hammer'],
      ['title' => 'Betongarbeid', 'icon' => 'fa-building'],
      ['title' => 'Sprengning', 'icon' => 'fa-bomb'],
      ['title' => 'Älvsbyhus', 'icon' => 'fa-home'],
      ['title' => 'Landskapsutforming', 'icon' => 'fa-tree'],
    ];

    $current_category = get_query_var('category_name');
    echo '<button class="service-btn ' . (empty($current_category) ? 'active' : '') . '" data-category="all"><i class="fas fa-layer-group"></i> Alle</button>';
    foreach ($services as $service) {
      $slug = sanitize_title($service['title']);
      $active_class = ($current_category === $slug) ? 'active' : '';
      echo '<button class="service-btn ' . $active_class . '" data-category="' . esc_attr($slug) . '">';
      echo '<i class="fas ' . esc_attr($service['icon']) . '"></i> ';
      echo esc_html($service['title']);
      echo '</button>';
    }
    ?>
  </div>
</section>

<section id="post-results" class="site-container"></section>

<div style="text-align:center; margin-top: 2rem;">
  <button id="load-more" style="display:none;">SE MER</button>
</div>

<?php get_footer(); ?>
