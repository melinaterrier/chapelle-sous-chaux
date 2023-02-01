<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); 
  ?>>
    <?php wp_body_open();?>

      <header class="header">
      
        <div class="header_logo">
          <?php if (has_custom_logo()):
          $logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'));?>
          <a class="header__logo" href=" <?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Logo du village">
            <img src="<?php echo $logo[0]; ?>" class="style-svg"/>
          </a>
          <?php endif; ?>
        </div>

        <div class="header_menu">

          <nav class="header_nav">
            <?php wp_nav_menu ( array ( 
              'theme_location' => 'header-menu',
              'container'      => false,
              'menu_class'     => 'header_menu__list',
              'depth'          => 2,
            ) ); ?>
          </nav>

          <!-- Recherche -->
          <div class="search">
          <?php get_search_form(); ?>
            <button class="header__search" ria-label="Rechercher">
              <svg class="header__search -icon" aria-hidden="true" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 20L26 26" stroke="#023047" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 12.2857C2 17.9663 6.60507 22.5714 12.2857 22.5714C15.1309 22.5714 17.7065 21.4162 19.5685 19.5491C21.4242 17.6886 22.5714 15.1211 22.5714 12.2857C22.5714 6.60507 17.9663 2 12.2857 2C6.60507 2 2 6.60507 2 12.2857Z" stroke="#023047" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
        </div> 
      </header>

      <main>
        