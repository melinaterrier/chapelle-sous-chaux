<?php get_header(); ?>

<div class="archive_header">
	<?php post_type_archive_title( '<h1 class="archive_header_title">', '</h1>' ); ?>
	<svg class="archive_header_separator" width="1000" height="2" viewBox="0 0 1000 2" fill="none" xmlns="http://www.w3.org/2000/svg">
		<line x1="1" y1="1" x2="1000" y2="0.999913" stroke="#AEC2BD" stroke-width="2" stroke-linecap="round"/>
	</svg>
</div>


<?php
	if(have_posts()) : ?>
		<div class="grid">
			<?php while(have_posts()) : the_post(); 
				get_template_part('template-parts/card', 'card');
			endwhile;?>  
		</div>
		<?php	
		the_posts_pagination(); 
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
	?>
<?php get_footer(); ?>