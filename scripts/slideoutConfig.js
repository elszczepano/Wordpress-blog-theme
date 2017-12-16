var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 300,
        'tolerance': 70,
        'easing': 'linear',
        'touch':false
      });

// Toggle button
      document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
      });
      document.querySelector('.close').addEventListener('click', function() {
        slideout.close();
        $('.hamburger-icon').find("i").toggleClass('fa-bars fa-times');
      });
//toggle hamburger icon
      $(document).ready(function(){
      	$('.hamburger-icon').click(function(){
      		$(this).find("i").toggleClass('fa-bars fa-times');
      	});
      });
//show categories
document.querySelector('.categories-button').addEventListener('click', function() {
  slideout.open();
  $('.categories-list').addClass('marker');
  $('.categories-header').addClass('marker');
  $('.hamburger-icon').find("i").removeClass('fa-bars');
  $('.hamburger-icon').find("i").addClass('fa-times');
});
