jQuery( function( $ ) {

  // fotter bars class toggle
  $( '.menu' ).click( function() {
    $( '.bars' ).toggleClass( 'opened' );
    $( this )
      .children( '.text' )
      .toggleClass( 'toggle' );
    $( '.drower' ).slideToggle();
    return false;
  });
});
