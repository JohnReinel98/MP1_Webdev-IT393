$(document).ready(function(){
  $('<span>Processing</span>')
    .addClass('processing')
    .insertAfter('.unarchive');
    
  $('.unarchive')
    .click(function(e) {
      doOneUp(this, function() {
	  $(this).prev().text('Unarchived');
      });
	  var href = $(this).attr('href');
	  setTimeout(function(){window.location=href},1000);
      e.preventDefault();
	  return false;
    })
});

function doOneUp(which, callback) {
  $(which)
    .next()
    .show()
    .animate({
      top: "-=50px",
      opacity: "toggle"
    }, 1000,
    function() {
      $(this)
        .css({top: ""})
        .hide('slow', callback)
        .remove();
    });
}
