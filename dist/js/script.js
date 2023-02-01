let openCtrl = document.querySelector('.header__search');
let searchContainer = document.querySelector('.searchForm');
let inputSearch = searchContainer.querySelector('.searchForm__input');

function init() {
  initEvents();
}

function initEvents() {
  openCtrl.addEventListener('click', openSearch);
}

function openSearch() {
  searchContainer.classList.add('-open');
  openCtrl.classList.add('-active');
  nav.classList.add('-active');
  inputSearch.focus();
}
init();