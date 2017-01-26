<<<<<<< HEAD
$(function () {

  $('[data-toggle="collapse-all"]').click(function(){
    var $this = $(this);
    if( !$(this).hasClass('all-open') ){
      $($this.data('parent'))
        .find('.panel-collapse:not(.in)')
        .collapse('toggle');
      $(this).addClass('all-open');
    } else {
      $($this.data('parent'))
        .find('.panel-collapse.in')
        .collapse('toggle');
      $(this).removeClass('all-open');
    }
  });

  $('[data-toggle="show-details"]').click(function(e) {
    e.preventDefault();
    $(this).toggleClass('on');
    $($(this).data('parent')).find('.toggle.on').not(this).removeClass('on');
    $($(this).data('parent')).find('.show-details').removeClass('show-details');
    if($(this).is('.on')){
      $($(this).attr('href')).addClass('show-details');
    }else{
      $($(this).attr('href')).removeClass('show-details');
    }
  });

  $('[data-toggle="offcanvas"]').click(function() {
    $('.row-offcanvas').toggleClass('active')
  });

  // Tooltips
  $('[data-toggle="tooltip"]').tooltip({
    container: 'body'
  });

  // Select menus
  $('select').selectpicker({
    style:'form-control'
  });

  // Submenu in main nav
  $('.dropdown-submenu .dropdown-toggle').on("click", function(e){
    $(this).parent().siblings().find('ul').hide();
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });


});
=======
$(function(){

  // REMOVE ME: Template chooser

  $('.template-chooser select').on('change', function () {
      var url = $(this).val();
      if (url) {
          window.location = url;
      }
      return false;
  });


});
>>>>>>> origin/master
