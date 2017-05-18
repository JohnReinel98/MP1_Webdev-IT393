$(document).ready(function(){
  addNotice('<p>Are you having a nice time? </p>');
  setTimeout(function() {
    addNotice('<p>Did you finish your machine problem?</p><p>Back-up mo!!!!</p>');
  }, 5000);
$('#growl')
  .find('.close')
  .live('click', function() {
    $(this)
      .closest('.notice')
      .animate({
        border: 'none',
        height: 0,
        marginBottom: 0,
        marginTop: '-6px',
        opacity: 0,
        paddingBottom: 0,
        paddingTop: 0,
        queue: false
      }, 1000, function() {
        $(this).remove();
      });
  });
});

function addNotice(notice) {
  $('<div class="notice"></div>')
    .append('<div class="skin"></div>')
    .append('<a href="#" class="close">close</a>')
    .append($('<div class="content"></div>').html($(notice)))
    .hide()
    .appendTo('#growl')
    .fadeIn(1000);
}
