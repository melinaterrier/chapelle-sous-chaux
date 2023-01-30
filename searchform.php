<div class="searchForm">
  <form class="searchForm__form" action="<?php echo esc_url( site_url() ); ?>" method="get">
    <input class="searchForm__input" id="searchForm" type="search" name="s" placeholder="Recherche" value="<?php the_search_query(); ?>">
    <button class="searchForm__submit" type="submit" aria-label="Rechercher"> Rechercher </button>
  </form>
</div>