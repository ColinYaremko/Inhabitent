//(function($){
jQuery(document).ready(function($){


  $('.main-navigation .search-field').hide();

  $('.main-navigation .search-submit').on('click', function(event){

      event.preventDefault();

      $('.main-navigation .search-field').toggle().focus();

      $( document ).keypress(function( event ) {
        if ( event.which === 13 ) {
           $('.search-form').submit();
        }
      });

  });

  $('.main-navigation .search-field').on('blur', function(){

      $('.main-navigation .search-field').toggle().focus();

  });

//   $('[data-toggle=search-form]').click(function() {
//     $('.search-form-wrapper').toggleClass('open');
//     $('.search-form-wrapper .search').focus();
//     $('html').toggleClass('search-form-open');
//   });
//   $('[data-toggle=search-form-close]').click(function() {
//     $('.search-form-wrapper').removeClass('open');
//     $('html').removeClass('search-form-open');
//   });
// $('.search-form-wrapper .search').keypress(function( event ) {
//   if($(this).val() == "Search") $(this).val("");
// });

// $('.search-close').click(function(event) {
//   $('.search-form-wrapper').removeClass('open');
//   $('html').removeClass('search-form-open');
// });


});

 //(jQuery);

//Tried to be different.  This was supposed to open a bar underneath and become the focus.
