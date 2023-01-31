<?php get_header(); ?>

<div class="archive_header">
	<?php post_type_archive_title( '<h1 class="archive_header_title">', '</h1>' ); ?>
</div>


<?php
	if(have_posts()) : ?>
		<div class="grid">
			<?php while(have_posts()) : the_post(); ?>
				<article class="card">
                    <?php if( has_post_thumbnail() ): ?>
                        <div class="card__img">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif?>
            
                    <div class="card_info">
                        <h3 class="card__title">
                            <?php the_title(); ?>      
                        </h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>"><button class="card__button">Lire plus...</button></a>
                    </div>
            </article>
			<?php endwhile;
            endif;?> 
		</div>
		<?php	
		the_posts_pagination(); 
 get_footer(); ?>