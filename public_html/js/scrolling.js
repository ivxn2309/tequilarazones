var offset = 105;
jQuery( function( $ ) {
  $( 'a[href*="#"]:not([href="#"])' ).click( function( ) {
    if ( location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname ) {
      var target = $( this.hash );
      target = target.length ? target : $( '[name=' + this.hash.slice(1) +']' );
      if ( $( this ).attr("noscroll") ) return;
      if ( target.length ) {
        $( 'html, body' ).animate({
          scrollTop: target.offset( ).top - offset
        }, 800 );
        //return false;
      }
    }
  });
});