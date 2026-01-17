<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class( is_front_page() ? 'dark-theme' : 'light-page' ); ?>>

    <!-- Hamburger for mobil -->
    <button class="hamburger" aria-label="Åpne meny" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    
    <nav class="main-nav pill-nav-wrapper">
  <?php
  // Logo-markup
  $logo = function_exists('the_custom_logo') && has_custom_logo()
    ? get_custom_logo()
    : '<a href="' . esc_url(home_url('/')) . '" class="site-title">' . esc_html(get_bloginfo('name')) . '</a>';

  // Hent menyobjektet for location 'navbar'
  $locations = get_nav_menu_locations();
  if (isset($locations['navbar'])) {
    $menu  = wp_get_nav_menu_object($locations['navbar']);
    $items = wp_get_nav_menu_items($menu->term_id) ?: [];

    // Sorter etter menu_order for sikkerhets skyld
    usort($items, function($a, $b) { return ($a->menu_order <=> $b->menu_order); });

    // Hjelper: finn ut om et item er "current"
    $current_id     = get_queried_object_id();
    $posts_page_id  = (int) get_option('page_for_posts');

    $is_current = function($item) use ($current_id, $posts_page_id) {
      // Front/home
      if (is_front_page() && trailingslashit($item->url) === trailingslashit(home_url('/'))) return true;
      if (is_home() && (int)$item->object_id === $posts_page_id) return true;

      // Vanlige sider/innlegg
      if ((int)$item->object_id === (int)$current_id) return true;

      // Kategori-/tag-arkiv
      if ($item->object === 'category' && is_category((int)$item->object_id)) return true;
      if ($item->object === 'post_tag' && is_tag((int)$item->object_id)) return true;

      return false;
    };

    // Printer ett <li> med riktige klasser + lenke
    $print_li = function($item) use ($is_current) {
      $classes = array_filter((array)$item->classes);
      if ($is_current($item)) {
        // Legg til klassene WP normalt ville gitt
        $classes[] = 'current-menu-item';
        $classes[] = 'current_page_item';
      }
      $classes = esc_attr(implode(' ', array_unique($classes)));
      $url     = esc_url($item->url);
      $title   = esc_html($item->title);
      echo '<li class="' . $classes . '"><a href="' . $url . '">' . $title . '</a></li>';
    };

    // Del menyen i to og plasser logo i midten
    $count = count($items);
    $half  = (int) ceil($count / 2);

    echo '<ul class="pill-nav">';

      // Første halvdel
      for ($i = 0; $i < $half; $i++) {
        $print_li($items[$i]);
      }

      // Logo i midten
      echo '<li class="nav-logo">' . $logo . '</li>';

      // Andre halvdel
      for ($i = $half; $i < $count; $i++) {
        $print_li($items[$i]);
      }

    echo '</ul>';
  }
  ?>
<?php 
echo do_shortcode('[nav_cart_drawer]');
?>
</nav>







    <!-- Overlay -->
    <div class="nav-overlay"></div>

  </div>
</header>
