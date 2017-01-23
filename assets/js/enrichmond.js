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