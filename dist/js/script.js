/* eslint-disable max-len */
/* eslint-disable require-jsdoc */
const openCtrl = document.querySelector('.header__search');
const searchContainer = document.querySelector('.searchForm');

openCtrl.addEventListener('click', () => {
  searchContainer.classList.add('-open');
  openCtrl.classList.add('-active');
});


// function closeSearch() {
//   searchContainer.classList.remove('-open');
//   openCtrl.classList.remove('-active');
//   nav.classList.remove('-active');
//   inputSearch.blur();
//   inputSearch.value = '';
// }

// init();
