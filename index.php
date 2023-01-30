<?php
get_header();?>
<h1><?php the_title()?></h1>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post">
<div class="post-content">
<?php the_content(); 

if ( is_front_page() ) {?>
    <section class="grid -withHeader section">
                <?php
                    $args = array(
                        'post_type' => 'actualite',
                        'posts_per_page' => 3,
                    );
                    query_posts( $args );

                    if(have_posts()) :
                    while(have_posts()) : the_post(); ?>
                    <article class="card">
    <?php if( has_post_thumbnail() ): ?>
        <div class="duotone card__img">
        <?php the_post_thumbnail( 'large' ); ?>
        </div>
    <?php endif; ?>
    <h3 class="card__title">
        <a class="card__titleLink" href="<?php the_permalink(); ?>">
        <?php the_title(); ?>      
        </a>
    </h3>
    <div class="card__caption">
        <?php if( get_field('date') ): ?>
        <p class="card__date"><?php echo $date; ?></p>
        <?php endif; ?>
        <?php if( has_excerpt() ): ?>
        <p class="card__excerpt"><?php echo get_the_excerpt(); ?></p>
        <?php endif; ?>
        <a class="card__link morelink" href="<?php the_permalink(); ?>">
        <?php echo esc_html__( "Plus d'info", 'text-domain' )?>
        </a>
    </div>
        </article>
        <?php

                    endwhile;
                    endif;
                    /**
                     * Détruit la requête précédente et configure une nouvelle requête.
                     * @link https://developer.wordpress.org/reference/functions/wp_reset_query/
                     */
                    wp_reset_query();
                ?>
    </section>


    <section>
    <?php if( have_rows( 'services' ) ): ?>
        <h2 class="services_title">Nos services</h2>
        <ul class="services_list">
            <?php while(have_rows('services')): the_row();
            $title = get_sub_field('service_title');
            $img = get_sub_field('service_image');
            $url = get_sub_field('service_link');
            ?>
            <li>
            <a href="<?php echo $url; ?>" aria-label=" <?php echo $reseau_social; ?>">
                <h3><?php echo $title ?></h3>
                <img src="<?php echo $img['url'] ?>">
            </a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>

    </section>
    <?php }?>

<?php 
endwhile;
endif;
get_footer();

?>