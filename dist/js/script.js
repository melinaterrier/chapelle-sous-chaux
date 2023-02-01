/* eslint-disable max-len */
/* eslint-disable require-jsdoc */
// const openCtrl = document.querySelector('.header__search');
// const searchContainer = document.querySelector('.searchForm');

// openCtrl.addEventListener('click', () => {
//   searchContainer.classList.add('-open');
//   openCtrl.classList.add('-active');
// });


// function closeSearch() {
//   searchContainer.classList.remove('-open');
//   openCtrl.classList.remove('-active');
//   nav.classList.remove('-active');
//   inputSearch.blur();
//   inputSearch.value = '';
// }

// init();

/* eslint-disable max-len */
/* eslint-disable require-jsdoc */
let openCtrl = document.querySelector('.header__search');
let closeCtrl = document.querySelector('.searchForm__close');
let searchContainer = document.querySelector('.searchForm');
let inputSearch = searchContainer.querySelector('.searchForm__input');

function init() {
  initEvents();
}

function initEvents() {
  openCtrl.addEventListener('click', openSearch);
  closeCtrl.addEventListener('click', closeSearch);
}

function openSearch() {
  searchContainer.classList.add('-open');
  openCtrl.classList.add('-active');
  nav.classList.add('-active');
  inputSearch.focus();
}
init();