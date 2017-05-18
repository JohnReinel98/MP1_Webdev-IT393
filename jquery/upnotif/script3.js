$(document).ready(function(){
  $('<span>Unblocking</span>')
    .addClass('processing')
    .insertAfter('.unblock');
    
  $('.unblock')
    .click(function(e) {
      doOneUp(this, function() {
	  $(this).prev().text('Unblocked');
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
