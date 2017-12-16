//init Animate on Scroll lib
AOS.init();
//move to top site button
$('.to-top-button').click(function() {
  $("html, body").animate({ scrollTop: 0 }, {
            duration: 1500,
            easing: "easeOutExpo"
  });
  return false;
});
//appearing and disappearing the button
$('.to-top-button').fadeOut(0);
$(window).scroll(function() {
    if($(window).scrollTop() >= 800){
        $('.to-top-button').fadeIn(500);
    }
    else{
        $('.to-top-button').fadeOut(500);
    }
});
//reading progress bar
var article = document.querySelector('.single-container');
if(article!=null){
  var windowHeight = window.innerHeight,
      articleHeight = article.clientHeight,
      maxScroll = (articleHeight - windowHeight)+190,
      progress = document.createElement('progress');

  progress.classList.add('progress-bar');
  progress.value = 0;
  progress.max = maxScroll;

  article.appendChild(progress);

  var calculateProgress = function(){
    progress.value = window.scrollY;
  };

  var throttle = function(callback, limit){
    var wait = false;
    return function(){
      if(!wait){
        callback();
        wait = true;
        setTimeout(function(){
          wait = false;
        }, limit);
      }
    }
  }
  var debounce = function(callback, time){
    var timeout;
    return function(){
      var context = this,
          args = arguments;
      clearTimeout(timeout);
      timeout = setTimeout(function(){
        callback.apply(context,args);
      }, time||280);
    }
  }
  window.addEventListener('scroll',throttle(calculateProgress,100));
  window.addEventListener('scroll',debounce(calculateProgress,200));
}
//fading images in posts
$('.single-post-content').find("img").attr("data-aos", "fade-right");
$('.single-post-content').find(".wp-caption").attr("data-aos", "fade-right");
