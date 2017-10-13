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

// Fazer uma transição suave na fixaçãdo menu

// subir quando baixar..
// $(function(){
//   $('.subaSite').hide();
//     $(window).scroll(function(){
//       if($(this).scrollTop() > 200){
//           $('.subaSite').fadeIn();
//       }else{
//           $('.subaSite').fadeOut();
//         }
//     });
//     $('.subaSite').Click(function(){
//       $(html,body).animate({
//           scrollTop: 0
//       },800);
//     });
// });
