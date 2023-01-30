<?php get_header(); ?>

<?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
       <article class="actu">
       <div class="actu_img">
                <?php the_post_thumbnail(); ?>
            </div>
           <div class="actu_text">
            <h1 class="actu_title">
                <?php the_title(); ?>
            </h1>  

            <div class="actu_content">
                <?php the_content(); ?>
            </div>
           </div>
       </article>
   <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>