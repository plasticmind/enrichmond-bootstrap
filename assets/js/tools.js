// When your page loads
$(function(){
 // When the toggle areas in your navbar are clicked, toggle them
 $("#search-button, #search-icon").click(function(e){
     e.preventDefault();
     $("#search-form,#search-button").toggleClass('show');
     $("#search-form.show input").focus();
 });
})  