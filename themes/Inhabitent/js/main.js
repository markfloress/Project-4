(function( $ ) {
  $('.search-toggle').on('click', function(){
      $('.search-field').toggleClass('active_search');
      $( '.search-field' ).focus();
      return false;
  });

  $( '.search-field' ).on('blur', function(){ 
    $('.search-field').toggleClass('active_search'); 
   });
 
 })( jQuery );

