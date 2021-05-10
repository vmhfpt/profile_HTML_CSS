function menuslide(){
         $('.wd_selector').slideDown(900);
      $('#icon').toggle(1200);
      $('#menu').slideUp(1200);
}
function menuclose(){
      $('.wd_selector').slideUp(900);
      $('#icon').toggle(1200);
   $('#menu').toggle(1200);
}
function date() {
var d = new Date();
      document.getElementById("date").innerHTML = d;
}
date() ;
function h1() {
$('.form_1,.form_3').slideDown(2000);

 $('#text,#text,#text,#text,#text,#text').toggle(4000);
    $('#image').toggle(3000);
}
h1() ;