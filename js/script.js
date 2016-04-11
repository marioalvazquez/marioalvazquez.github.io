$(document).ready(function(){
  $('div#menu').click(function(){
  $('div#menuTop').toggleClass("hoverBottom");
  $('div#menuMiddle').toggleClass("hoverTop");
  $('div#menuBottom').toggleClass("hoverMiddle");
  $('div#header-menu-open').toggleClass("active");
    $('div#menu').css("background: #FBFBFB");
})
});
