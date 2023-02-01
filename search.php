<?php
/**
 * The template for displaying search results pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * @package crdtheme
 */

get_header();
?>

	<div class="searchPage">

		<?php if ( have_posts() ) : 
			while ( have_posts() ) :
				the_post();?>

				<article class="searchResult">

	<div class="searchResult__type">
		<?php 
			$post_type_obj = get_post_type_object( get_post_type() );
			echo $post_type_obj->labels->singular_name; ?>
		</div>
	<?php the_title( sprintf( '<h2 class="searchResult__title"><a href="%s" class="searchResult__titleLink" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	<p class="searchResult__chapo"><?php the_excerpt(); ?></p>
	<a class="searchResult__link morelink" href="<?php esc_url( get_permalink() ); ?>">Plus d'info</a>

</article>

			<?php endwhile;

		else : ?>

			<div class="main-column">
	<h2 class="page-title"><?php esc_html_e( 'Aucun résultat', 'chapelle' ); ?></h2>
	<?php
	if ( is_search() ) {
		echo '<p>' . esc_html_e( 'Désolé, mais aucun résultat ne correspond à vos termes de recherche. Veuillez réessayer avec des mots clés différents.', 'chapelle' ) . '</p>';
	} else {
		echo '<p>' . esc_html_e( 'Il semble que nous ne trouvons pas ce que vous recherchez. Peut-être que la recherche peut aider.', 'chapelle' ) . '</p>';
	} ?>

	<div class="searchFormPage">
		<form class="searchFormPage__form" action="<?php echo esc_url( site_url() ); ?>" method="get">
			<input class="searchForm__input" type="search" name="s" placeholder="Rechercher…" value="<?php the_search_query(); ?>">
			<button class="searchFormPage__submit btn -dark" type="submit">
				Rechercher
			</button>
		</form>
	</div>
</div> <?php


		endif;
		?>

	</div>
    </div>
<?php
get_footer();
