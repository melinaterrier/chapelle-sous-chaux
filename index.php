<?php
get_header();?>
<h1><?php the_title()?></h1>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post">
<div class="post-content">
<?php the_content(); ?>
<?php 
endwhile;
endif;
get_footer();

?>