<?php
get_header();?>
<h1><?php the_title()?></h1>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post">
<div class="post-content">

<?php the_content(); ?>
</div>


<?php
if (is_page( 'Service de l\'état' ) ) {?>
    <section class="services">
    <?php if( have_rows( 'stat_services' ) ): ?>
        <ul class="grid services_list">
            <?php while(have_rows('stat_services')): the_row();
            $name = get_sub_field('service_name');
            $link_text = get_sub_field('service_link_text');
            $url = get_sub_field('service_link');
            $text = get_sub_field('service_text');
            ?>
            <li class="card -service">
            <h3 class="service_title"><?php echo $name ?></h3>
            <p class="service_text"><?php echo $text ?></p>
            <a class="service_link" href="<?php echo $url; ?>" aria-label=" <?php echo $reseau_social; ?>">
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