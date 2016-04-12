$(document).ready(function(){
  $('div#menu').click(function(){
  $('div#menuTop').toggleClass("hoverBottom");
  $('div#menuMiddle').toggleClass("hoverTop");
  $('div#menuBottom').toggleClass("hoverMiddle");
  $('div#header-menu-open').toggleClass("active");
    $('div#menu').css("background: #FBFBFB");
})

  $(':button#videos-btn').click(function(){
    $('div#fb-posts').toggleClass("gone");
  });

  $(':button#posts-btn').click(function(){
    $('div#fb-videos').toggleClass("gone");
  });

});
