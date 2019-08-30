jQuery(document).ready(function(){
  jQuery( '.dropdown-content ul > li a' ).each( function(){
    var $el = jQuery( this );
    var $link = $el.attr( 'href' );
    jQuery( $el ).on( 'click', function( event ){
      event.preventDefault();
      jQuery( '.dropdown-content ul > li' ).removeClass( 'faded' ).addClass( 'content-active' );
      remove();
      jQuery( $link ).addClass( 'show' );
      jQuery('html, body').animate({
        scrollTop: jQuery($link).offset().top
    }, 500);
    });

  }); //each loop

// Checks whether the class show is present or not,removes class show if exists
  function remove(){
    jQuery( '.content-desc' ).each( function(){
      $check = jQuery( this ).hasClass( 'show' );
      if( $check ){
        jQuery( this ).removeClass( 'show' );
        // jQuery( '.dropdown-content ul > li' ).removeClass( 'content-active' ).addClass('faded');
      }
    });
  }

});
