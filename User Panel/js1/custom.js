$(document).ready(function(){
$("#flip11").click(function(){
$("#panel11").slideToggle("slow");
});
});
$(document).ready(function(){
$("#flip1").click(function(){
$("#panel1").slideToggle("slow");
});
});
$(window).scroll(function() {    
var scroll = $(window).scrollTop();
if (scroll >= 190) {
$("header").addClass("header-opacity");
} else {
$("header").removeClass("header-opacity");
}
});