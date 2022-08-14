jQuery(function($){
  $('ul.sub').hide();
  $('ul.menu>li').hover(function(){
      $('ul:not(:animated)', this).slideDown(400);
    },
    function(){
      $('ul',this).hide();
  });
});