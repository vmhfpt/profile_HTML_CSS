function loaddemo(){
$('.alerntab').slideUp(800);
   $('.form_2,.dmm_1,.demo11,.vldaucatmoi,#tab').css('opacity','1.0') ;
}

function load1() {
 $('.alerntab').slideDown(800);
   $('.form_2,.dmm_1,.demo11,.vldaucatmoi,#tab').css('opacity','0.1') ;
  }
function load() {
 $('.alerntab').slideDown(800);
   //$('.form_2,.dmm_1,.demo11,.vldaucatmoi,#tab').css('opacity','0.1') ;
 $('#load').css('display','none');
   $('.opawarning').css('opacity','1.0') ;
  }
    $('a').click(function(){
      $('#load').css('display','block');
      $('.opawarning,#bctop,#mesen').css('display','none') ;
$('.warning').css('display','none') ;
    });
$(function(){
  var myFnc = function(){
   $('.warning').slideDown(800);
   $('.opawarning,#bctop,#mesen').css('opacity','0.1') ;
  };
  setTimeout(myFnc, 7500);
});
function closewar(){
$('.warning').slideUp(800);
   $('.opawarning,#bctop,#mesen').css('opacity','1.0') ;
}
$(function(){
var temp=2,sum=4 ;
  var myFnc = function(){
  if (temp==1){
         $('#imagetab_1').fadeIn(2000);
   $('#imagetab_2,#imagetab_4,#imagetab_3').fadeOut(2000);
  }
  if (temp==2){
         $('#imagetab_2').fadeIn(2000);
   $('#imagetab_1,#imagetab_4,#imagetab_3').fadeOut(2000);
  }
  if (temp==3){
         $('#imagetab_3').fadeIn(2000);
   $('#imagetab_2,#imagetab_4,#imagetab_1').fadeOut(2000);
  }
  if (temp==4){
         $('#imagetab_4').fadeIn(2000);
   $('#imagetab_2,#imagetab_1,#imagetab_3').fadeOut(2000);
  }
    if (temp<sum){
        temp++ ;
    }
    else if (temp==sum){
        temp=1 ;
    }
  };
  setInterval(myFnc, 4000);
});
function slidetab(){
 $('#alltab,#imagetab_1').toggle(2200);
}
slidetab() ;

function menuslide(){
         $('.wd_selector').slideDown(900);
      $('#icon').toggle(1200);
      $('#menu').slideUp(1200);
}
function closeami() {
    $('#qc_1').css('display','none');
}
function closeami_2() {
    $('#qc_2').css('display','none');
}
function closeami_3() {
    $('#qc_3').css('display','none');
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
 window.onload = function(){
    setTimeout("switch_Image()", 5000);
  }
  var current = 1;
  var num_image = 5;
  function switch_Image(){
      current++;
      if (current==1){
$('#js2,#js3,#js4,#js5').slideUp(900);
  $('#js1').slideDown(700);
 $('#bt_1').css('background','#00FFD0') ;
 $('#bt_2,#bt_3,#bt_4,#bt_5').css('background','#FFFFFF') ;
      }
if (current==2){
$('#js1,#js3,#js4,#js5').slideUp(900);
  $('#js2').slideDown(700);
  $('#bt_2').css('background','#00FFD0') ;
$('#bt_1,#bt_3,#bt_4,#bt_5').css('background','#FFFFFF') ;
      }
if (current==3){
$('#js2,#js1,#js4,#js5').slideUp(900);
  $('#js3').slideDown(700);
$('#bt_3').css('background','#00FFD0') ;
$('#bt_2,#bt_1,#bt_4,#bt_5').css('background','#FFFFFF') ;
      }
if (current==4){
$('#js2,#js3,#js1,#js5').slideUp(900);
  $('#js4').slideDown(700);
$('#bt_4').css('background','#00FFD0') ;
$('#bt_2,#bt_3,#bt_1,#bt_5').css('background','#FFFFFF') ;
      }
if (current==5){
$('#js2,#js3,#js4,#js1').slideUp(900);
  $('#js5').slideDown(700);
$('#bt_5').css('background','#00FFD0') ;
$('#bt_2,#bt_3,#bt_4,#bt_1').css('background','#FFFFFF') ;
      }
     if(current < num_image){
       setTimeout("switch_Image()", 5000);
     }else if(current == num_image){ 
       current = 0;
       setTimeout("switch_Image()", 5000);

     }
 }
function h1() {
$('.form_1,.form_3').slideDown(2000);

 $('h5').toggle(4000);
    $('#image').toggle(3000);
}
function tips(temp){
    if (temp==1){
 //$('#watcher').css('display','none');
  $('#js1').slideDown(400);
  $('#js2,#js3,#js4,#js5').slideUp(400);
  $('#bt_1').css('background','#00FFD0') ;
 $('#bt_2,#bt_3,#bt_4,#bt_5').css('background','#FFFFFF') ;
 
    }
if (temp==2){
  $('#js2').slideDown(400);
  $('#js1,#js3,#js4,#js5').slideUp(400);
$('#bt_2').css('background','#00FFD0') ;
$('#bt_1,#bt_3,#bt_4,#bt_5').css('background','#FFFFFF') ;
    }
if (temp==3){
  $('#js3').slideDown(400);
  $('#js2,#js1,#js4,#js5').slideUp(400);
$('#bt_3').css('background','#00FFD0') ;
$('#bt_2,#bt_1,#bt_4,#bt_5').css('background','#FFFFFF') ;
    }
if (temp==4){
  $('#js4').slideDown(400);
  $('#js2,#js1,#js3,#js5').slideUp(400);
$('#bt_4').css('background','#00FFD0') ;
$('#bt_2,#bt_3,#bt_1,#bt_5').css('background','#FFFFFF') ;
    }
if (temp==5){
  $('#js5').slideDown(400);
  $('#js2,#js3,#js4,#js1').slideUp(400);
$('#bt_5').css('background','#00FFD0') ;
$('#bt_2,#bt_3,#bt_4,#bt_1').css('background','#FFFFFF') ;
    }
}
$(function(){
  var myFnc = function(){
    $('#qc_1').css('display','block');
  };
var myFnc_2 = function(){
    $('#qc_2,#qc_3').css('display','block');
  };
  setTimeout(myFnc, 4000);
setTimeout(myFnc_2, 6000);
});
h1() ;
jQuery(document).ready(function($){
// browser window scroll (in pixels) after which the "back to top" link is shown
var offset = 300,
//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
offset_opacity = 1200,
//duration of the top scrolling animation (in ms)
scroll_top_duration = 700,
//grab the "back to top" link
$back_to_top = $('.cd-top');

//hide or show the "back to top" link
$(window).scroll(function(){
( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
if( $(this).scrollTop() > offset_opacity ) {
$back_to_top.addClass('cd-fade-out');
}
});

//smooth scroll to top
$back_to_top.on('click', function(event){
event.preventDefault();
$('body,html').animate({
scrollTop: 0 ,
}, scroll_top_duration
);
});

});
function menuselect(){
 $('.demobackground').toggle(400);
$('#o_1').toggle(300);
$('#o_2').toggle(300);
}
function menudong(){
 $('.demobackground').slideUp(300);
$('#o_1').toggle(300);
$('#o_2').toggle(300);
}
function hienlienhe(){
 $('#i_1,#i_2').toggle(200);
   
}
function alert1(){
$('.arelt').toggle(1200);
$('.opacity').css('opacity','0.1');
}
function alert2(){
$('.arelt').toggle(1200);
$('.opacity').css('opacity','1');
}
function demodates(){
    var d = new Date();
document.getElementById("demodate").innerHTML = d.toDateString();
}
demodates() ;