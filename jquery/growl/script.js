$(document).ready(function(){
  addNotice('<p>A package is on its way! </p>');
  addNoticerec('<p>A package has been received! </p>');
  
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
$('#growl2')
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
function addNoticerec(notice) {
  $('<div class="notice"></div>')
    .append('<div class="skin"></div>')
    .append('<a href="#" class="close">close</a>')
    .append($('<div class="content"></div>').html($(notice)))
    .hide()
    .appendTo('#growl2')
    .fadeIn(1000);
}
