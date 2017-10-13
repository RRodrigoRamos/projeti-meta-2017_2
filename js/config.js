// Configurações do menu quando rolar.. Fixando em determinado momento
$(function(){
    if($(window).scrollTop() > $('#topo').offset().top){
      $('#nav').addClass('fixed-nav');
    }else{
      $('#nav').removeClass('fixed-nav');
    }
    $(window).scroll(function(){
      if($(this).scrollTop() > $('#topo').offset().top){
        $('#nav').addClass('fixed-nav');
      }else{
        $('#nav').removeClass('fixed-nav');
      }
    });
});

// subir quando baixar..
$(function(){
  $('.subaSite').hide();
  $(window).scroll(function(){
    if($(this).scrollTop() > 100){
      $('.subaSite').FadeIn();
    }else{
      $('.subaSite').FadeOut();
      }
    });
});
