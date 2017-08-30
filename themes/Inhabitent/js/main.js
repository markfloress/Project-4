(function( $ ) {
  $('.search-toggle').on('click', function(){
      $('.search-field').toggleClass('fast');
      $( '.search-field' ).focus();
      return false;
  });
 
 $(document).on('click', function(event){
      if (!$('.search-field').is( event.target )){
         $( ".search-field" ).removeClass('fast');
      }
  });
 
 })( jQuery );