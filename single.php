<?php get_header(); ?>

<?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
       <article class="article">
           <div class="text">
            <h1 class="title">
                <?php the_title(); ?>
            </h1>           
            <div class="content">
                <?php the_content(); ?>
            </div>
           </div>
       </article>
   <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>