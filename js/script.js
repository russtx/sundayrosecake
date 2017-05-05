
(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		jQuery('#nav').affix({
  offset: {
   top: 580
  }
 });
//Next
// Hide all the elements in the DOM that have a class of "box"
$('.box').hide();

// Make sure all the elements with a class of "clickme" are visible and bound
// with a click event to toggle the "box" state
$('.clickme').each(function() {
    $(this).show(0).on('click', function(e) {
        // This is only needed if your using an anchor to target the "box" elements
        e.preventDefault();

        // Find the next "box" element in the DOM
        $(this).next('.box').slideToggle('fast');
    });
});






//end here
	});

})(jQuery, this);
