// Set slideShowSpeed (milliseconds)
var slideShowSpeed = 2500;
// Duration of crossfade (seconds)
var crossFadeDuration = 3;
// Specify the image files
var Pic = new Array();
// to add more images, just continue
// the pattern, adding to the array below

Pic[0] = 'http://www.architecturalhomesny.com/images/index/index-1.jpg'
Pic[1] = 'http://www.architecturalhomesny.com/images/index/index-2.jpg'
Pic[2] = 'http://www.architecturalhomesny.com/images/index/index-3.jpg'
Pic[3] = 'http://www.architecturalhomesny.com/images/index/index-4.jpg'
Pic[4] = 'http://www.architecturalhomesny.com/images/index/index-5.jpg'
Pic[5] = 'http://www.architecturalhomesny.com/images/index/index-6.jpg'
Pic[6] = 'http://www.architecturalhomesny.com/images/index/index-7.jpg'
Pic[7] = 'http://www.architecturalhomesny.com/images/index/index-8.jpg'
Pic[8] = 'http://www.architecturalhomesny.com/images/index/index-9.jpg'
Pic[9] = 'http://www.architecturalhomesny.com/images/index/index-10.jpg'
Pic[10] = 'http://www.architecturalhomesny.com/images/index/index-11.jpg'
Pic[11] = 'http://www.architecturalhomesny.com/images/index/index-12.jpg'
Pic[12] = 'http://www.architecturalhomesny.com/images/index/index-13.jpg'

// do not edit anything below this line
var t;
var j = 0;
var p = Pic.length;
var preLoad = new Array();
for (i = 0; i < p; i++) {
	preLoad[i] = new Image();
	preLoad[i].src = Pic[i];
}
function runSlideShow() {
	if (document.all) {
		document.images.SlideShow.style.filter="blendTrans(duration=2)";
		document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
		document.images.SlideShow.filters.blendTrans.Apply();
	}
	document.images.SlideShow.src = preLoad[j].src;
	if (document.all) {
		document.images.SlideShow.filters.blendTrans.Play();
	}
	j = j + 1;
	if (j > (p - 1)) j = 0;
	t = setTimeout('runSlideShow()', slideShowSpeed);
}

function newWin(){
	win= window.open('','_blank');
	
	var results = document.documentElement.innerHTML;
	var match = "<";
	
	var re = new RegExp("<", "g");
	
	var newresults = results.replace(re, "&lt;");
	
	win.document.write(newresults );
}

console.log('blah');

// (function(jQuery){
	jQuery(document).ready(function() {

		console.log('here');

		//select all the a tag with name equal to modal
		jQuery('.modal').on('click', function(e) {
			//Cancel the link behavior
			e.preventDefault();
			
			//Get the A tag
			var id = jQuery(this).attr('href');
		
			//Get the screen height and width
			var maskHeight = jQuery(document).height();
			var maskWidth = jQuery(window).width();
		
			//Set heigth and width to mask to fill up the whole screen
			jQuery('#mask').css({'width':maskWidth,'height':maskHeight});
			
			//transition effect		
			jQuery('#mask').fadeIn("slow");	
		
			//Get the window height and width
			var winH = jQuery(window).height();
			var winW = jQuery(window).width();
	              
			//Set the popup window to center
			jQuery(id).css('top',  winH/2-jQuery(id).height()/2);
			jQuery(id).css('left', winW/2-jQuery(id).width()/2);
		
			//transition effect
			jQuery(id).fadeIn(1000); 
		
		});

		jQuery('.image').on('click', function() {
			var index = jQuery(this).attr('rel');
			jQuery('.image').css({'color' : 'white'});
			jQuery(this).css({'color' : '#666'});
			jQuery('#image').hide();
			jQuery('#image').fadeIn('slow');
			jQuery('#image').html('<img src="' + entryImages[index] + '"/>');
			return false;
		});
		
		//if close button is clicked
		jQuery('.window .close').on('click', function (e) {
			//Cancel the link behavior
			e.preventDefault();
			
			jQuery('#mask').hide();
			jQuery('.window').hide();
		});		
		
		//if mask is clicked
		jQuery('#mask').on('click', function () {
			jQuery(this).hide();
			jQuery('.window').hide();
		});			
		
	});
// });