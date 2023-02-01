<?php
get_header();?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="front-end">
<div class="post-content">

<?php the_content(); ?>
</div>
    <section class="actu">
                <?php
                    $args = array(
                        'post_type' => 'actualite',
                        'posts_per_page' => 2,
                    );
                    query_posts( $args );

                    if(have_posts()) :?>
                        <h1>Actualités</h1>
                        <section class="grid -archive_grid -front">
                    <?php while(have_posts()) : the_post(); ?>
                    <article class="card -archive">
    <?php if( has_post_thumbnail() ): ?>
        <div class="card__img">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    
    <div class="card_info">
        <h3 class="card__title">
            <?php the_title(); ?>      
        </h3>
        <?php if( has_excerpt() ): ?>
            <p class="card__excerpt"><?php echo get_the_excerpt(); ?></p>
        <?php endif; ?>
        <a class="card__link" href="<?php the_permalink(); ?>">Lire plus...</a>
    </div>
        </article>
        <?php

                    endwhile;?>
                    </section>
                    <a class="actu_link" href="http://localhost/chapelle/actualite/">Voir toutes les actualités</a>
                    <?php
                    endif;
                    /**
                     * Détruit la requête précédente et configure une nouvelle requête.
                     * @link https://developer.wordpress.org/reference/functions/wp_reset_query/
                     */
                    wp_reset_query();
                ?>
    </section>
    
        <section class="accueil_services">
            <?php if( have_rows( 'services' ) ): ?>
                <h2 class="accueil_services_title">Nos services</h2>
                <ul class="accueil_services_list">
                    <?php while(have_rows('services')): the_row();
                    $title = get_sub_field('service_title');
                    $img = get_sub_field('service_image');
                    $url = get_sub_field('service_link');
                    ?>
                    <li>
                    <a class="accueil_services_link" href="<?php echo $url; ?>" aria-label=" <?php echo $reseau_social; ?>">
                        <img class="accueil_services_img" src="<?php echo $img['url'] ?>">
                        <h3 class="accueil_services_subtitle"><?php echo $title ?></h3>
                    </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
    </section>
    <?php 
    
endwhile;
endif;

get_footer();

?>