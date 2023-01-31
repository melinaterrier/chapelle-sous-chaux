<?php
get_header();?>
<h1><?php the_title()?></h1>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post">
<div class="post-content">

<?php the_content(); ?>
</div>

<?php if ( is_front_page() ) {?>
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
        <div class="card__img">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>
    
    <div class="card_info">
        <h3 class="card__title">
            <?php the_title(); ?>      
        </h3>
        <?php the_excerpt(); ?>
        <a class="card__link" href="<?php the_permalink(); ?>">Lire plus...</a>
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
    <?php }

if (is_page( 'Service de l\'état' ) ) {?>
    <section>
    <?php if( have_rows( 'stat_services' ) ): ?>
        <ul class="services_list">
            <?php while(have_rows('stat_services')): the_row();
            $name = get_sub_field('service_name');
            $link_text = get_sub_field('service_link_text');
            $url = get_sub_field('service_link');
            $text = get_sub_field('service_text');
            ?>
            <li>
            <h3><?php echo $name ?></h3>
            <p><?php echo $text ?></p>
            <a href="<?php echo $url; ?>" aria-label=" <?php echo $reseau_social; ?>">
                <?php echo $link_text?>
            </a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>

    </section> <?php
}

if (is_page( 'Liste des démarches' ) ) {?>
    <section class="demarche">
    <?php if( have_rows( 'demarche' ) ): ?>
        <ul class="demarche_list">
            <?php while(have_rows('demarche')): the_row();
            $title = get_sub_field('demarche_title');
            $url = get_sub_field('demarche_link');
            $icon = get_sub_field('demarche_icon');
            ?>
            <li>
            <a class="demarche_link" href="<?php echo $url; ?>" aria-label=" <?php echo $reseau_social; ?>">
               <img class="demarche_img" src="<?php echo $icon['url'] ?>">
               <h3 class="demarche_title"><?php echo $title ?></h3>
            </a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>

    </section> <?php
}?>
</div>
<?php
endwhile;
endif;
get_footer();

?>