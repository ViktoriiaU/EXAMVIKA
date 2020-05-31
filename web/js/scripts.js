$(document).ready(function() {
  $('.mobile-menu-button').on('click', function() {
      $(this).toggleClass('checked');
      $('.container_menu').toggleClass('mobile-hidden');
    });
});
