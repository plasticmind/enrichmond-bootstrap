// When your page loads
$(function(){
 // When the toggle areas in your navbar are clicked, toggle them
 $(".btn-search").click(function(e){
     e.preventDefault();
     $(".form-search").toggle();
 });
})  