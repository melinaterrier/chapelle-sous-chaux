<div class="searchForm">
  <form class="searchForm__form" action="<?php echo esc_url( site_url() ); ?>" method="get">
    <input class="searchForm__input" id="searchForm" type="search" name="s" placeholder="Recherche" value="<?php the_search_query(); ?>">
    <button class="searchForm__submit" type="submit" aria-label="Rechercher">
      <svg class="searchForm__submit__icon"  width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 20L26 26" stroke="#023047" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M2 12.2857C2 17.9663 6.60507 22.5714 12.2857 22.5714C15.1309 22.5714 17.7065 21.4162 19.5685 19.5491C21.4242 17.6886 22.5714 15.1211 22.5714 12.2857C22.5714 6.60507 17.9663 2 12.2857 2C6.60507 2 2 6.60507 2 12.2857Z" stroke="#023047" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
  </form>
</div>