// Set slideShowSpeed (milliseconds)
var slideShowSpeed = 2500,
// Duration of crossfade (seconds)
crossFadeDuration = 3;

( function( $ ) {
	$( document ).ready( function() {

		var advanceSlide = function() {
			var image = $( '#index-carousel-image' ),
			index = image.data( 'index' ),
			new_index = index < 13 ? index + 1 : 1,
			image_src = image.attr('src'),
			src_path = /(.*)\/index-[0-9]+\.jpg$/.exec( image_src ),
			new_image = new Image();

			new_image = $( new_image );

			new_image.attr( 'src', src_path[1] + '/index-' + new_index + '.jpg' );

			image.attr( 'src', new_image.attr( 'src' ) ); 
			image.data( 'index', new_index );

		}

		setInterval( advanceSlide, slideShowSpeed );

		//select all the a tag with name equal to modal
		$( '.modal' ).on( 'click', function( e ) {
			//Cancel the link behavior
			e.preventDefault();
			
			//Get the A tag
			var id = $( this ).attr( 'href' ),
		
			//Get the screen height and width
			maskHeight = $( document ).height(),
			maskWidth = $( window ).width(),
		
			//Get the window height and width
			winH = $( window ).height(),
			winW = $( window ).width();

			//Set heigth and width to mask to fill up the whole screen
			$( '#mask' ).css( { 'width' : maskWidth, 'height' : maskHeight } );
			
			//transition effect		
			$( '#mask' ).fadeIn( 'slow' );	
	              
			//Set the popup window to center
			$( id ).css( 'top',  winH/2-$( id ).height() / 2 );
			$( id ).css( 'left', winW/2-$( id ).width() / 2) ;
		
			//transition effect
			$( id ).fadeIn( 1000 ); 
		
		} );

		$( '.image' ).on( 'click', function() {
			var index = $( this ).attr( 'rel' );
			$( '.image' ).css( { 'color' : 'white' } );
			$( this ).css( { 'color' : '#666' } );
			$( '#image' ).hide();
			$( '#image' ).fadeIn( 'slow' );
			$( '#image' ).html( '<img src="' + entryImages[index] + '"/>' );
			return false;
		} );
		
		//if close button is clicked
		$( '.window .close' ).on( 'click', function ( e ) {
			//Cancel the link behavior
			e.preventDefault();
			
			$( '#mask' ).hide();
			$( '.window' ).hide();
		} );		
		
		//if mask is clicked
		$( '#mask' ).on( 'click', function () {
			$( this ).hide();
			$( '.window' ).hide();
		} );			
		
	} );
} )( jQuery );