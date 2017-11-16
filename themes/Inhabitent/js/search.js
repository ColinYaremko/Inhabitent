//(function($){
jQuery(document).ready(function($){


$('.icon-search').on('click', function () {
  $('#primary-menu .search-form').toggleClass('search-form-click');
  $('#primary-menu .search-field').focus();
  $('.menu-item-217').toggleClass('menu-item-217-click');
});
if ($('.search-form-click')) {
  $('#primary-menu .search-field').on('blur', function () {
    $('#primary-menu .search-form').toggleClass('search-form-click');
    $('.menu-item-217').toggleClass('menu-item-217-click');
  });
}

}); //(jQuery);


