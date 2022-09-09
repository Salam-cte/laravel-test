// $(function() {
//   $.scrollify({
//     section: ".slider__slide",
//     //sectionName:false,
//     //scrollSpeed: 50,
//     after: function(i) {
//       /*
// 			if(i===2) {
// 				$.scrollify.setOptions({
// 					easing:"easeOutExpo"
// 				});
// 			}*/
//     }
//   });
//   $(".scroll,.scroll-btn").click(function(e) {
//     e.preventDefault();

//     $.scrollify.next();
//   });

//   var hasHovered = false;
//   $(".coffee").on("mouseenter focus", function() {
//     if (hasHovered === false) {
//       ga("send", "event", "Coffee", "hover", "Buy me a coffee");
//       hasHovered = true;
//     }
//   });
// });
// $.scrollify({
// 	section : ".slider__slide",
// 	sectionName : "section-name",
// 	interstitialSection : "",
// 	easing: "easeOutCubic",
// 	scrollSpeed: 2000,
// 	offset : 0,
// 	scrollbars: false,
// 	standardScrollElements: "",
// 	setHeights: true,
// 	overflowScroll: true,
// 	updateHash: true,
// 	touchScroll: true,
// 	before: function() {},
// 	after: function() {},
// 	afterResize: function() {},
// 	afterRender: function() {}
// });
$(window).bind('scroll',function(){
 doScrollEffects();
});

$(window).bind('load',function(){
 // doScrollEffects();
 AOS.init();
});




function doScrollEffects() {
  var WindowHeight = $(window).height();
  var scrollTop = $(window).scrollTop();
  $('.trans').each(function () {
      var Obj = $(this);

      var ratio=1;
      if(Obj.hasClass('ratio-trans')){
          var ratio=Obj.attr('data-ratio')
      }
      var ObjTopPos = Obj.offset().top - (WindowHeight*ratio);
      if (scrollTop >= ObjTopPos) {
          if (!Obj.hasClass('ActiveItem')) {
              Obj.addClass('ActiveItem');
              if(Obj.hasClass('svg-anm')){
                  load_svg(this);
              }
          }
      } else if (scrollTop < ObjTopPos - 50) {
          if (Obj.hasClass('ActiveItem')) {
              Obj.removeClass('ActiveItem');
          }
      } else {

      }
  });
}