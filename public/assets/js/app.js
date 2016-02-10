function sectionSize(selector) {
	windowHeight = $(window).height();
	windowWidth = $(window).width();

	$(selector).css({
		width: windowWidth,
		height: windowHeight
	});
}
function semiFull(selector) {
    windowHeight = $(window).height();
    windowWidth = $(window).width();

    $(selector).css({
        width: windowWidth,
        height: (windowHeight*0.8)
    });
}
function semiFull85(selector) {
    windowHeight = $(window).height();
    windowWidth = $(window).width();

    $(selector).css({
        width: windowWidth,
        height: (windowHeight*0.85)
    });
}
function first(selector) {
    windowHeight = $(window).height();

    $(selector).css('margin-top', windowHeight);

}
function squareItem(selector) {
    var squareItemWidth = $(selector).css('width');

    $(selector).css({
        height: squareItemWidth
    });
}
function randomBG(selector) {
    var images = ['foto-1.jpg', 'foto-2.jpg', 'foto-3.jpg', 'foto-4.jpg', 'foto-5.jpg', 'foto-6.jpg', 'foto-7.jpg', 'foto-8.jpg', 'foto-9.jpg', 'foto-10.jpg'];

    $(selector).css({
        'background-image': 'url(../assets/img/headers/about/' + images[Math.floor(Math.random() * images.length)] + ')'
    });
}
function topPadding(selector) {
    windowHeight = $(window).height();
    var padding = (windowHeight/6)*3.5;

    $(selector).css({
        'padding-top': padding
    });
}
function centerAbsolute(selector) {
 windowwidth = $(window).width();
 if (windowwidth > 768) {
   var itemWidth = $(selector).outerWidth();
   $(selector).css({
     'margin-left': -(itemWidth/2),
   });
 };
}
function scroller(selector, id) {
    windowHeight = $(window).height();
    var element = $(id);
    var section = $('.section--header');

    $(selector).scroll(function(event) {
      /* Act on the event */
      var scroll_value = $(selector).scrollTop();
      element.css({
        'margin-top': (windowHeight - scroll_value)
      });
      //section.css('top', scroll_value);
    });

}
function backgroundCover(selector){
    $(selector).each(function(){

        var $container = $(this);
        var $container_width = $(this).outerWidth();
        var $container_height = $(this).outerHeight();

        var image_url = $container.css('background-image');
        var image;
        image_url = image_url.match(/^url\("?(.+?)"?\)$/);

        if (image_url[1]) {
            image_url = image_url[1];
            image = new Image();

            image.src = image_url;

            // just in case it is not already loaded
            $(image).load(function () {
                var cW = $container_width;
            var cH = $container_height;
            var iW = image.width;
            var iH = image.height;

            // If image is to narrow scale to match container width
            if (iW < cW) {
                var ratio = cW / iW;
                iW = cW;
                iH = iH * ratio;
            }

            // If image is too short scale to match container height
                if (iH < cH) {
                var ratio = cH / iH;
                iH = cH;
                iW = iW * ratio;
            }

            // If image is bigger in both dimensions scale down to match an edge
            if (iW > cW && iH > cH) {
                var widthRatio = cW / iW;
                var heightRatio = cH / iH;

                if (widthRatio > heightRatio) {
                    iW = cW;
                    iH = iH * widthRatio;
                } else {
                    iH = cH;
                    iW = iW * heightRatio;
                }
            }

            $container.css({
                    "background-size": iW+"px "+iH+"px"
                });
            });
        }
    });
}
function inputAnimation() {
  // Input
  if (!String.prototype.trim) {
   (function() {
     // Make sure we trim BOM and NBSP
     var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
     String.prototype.trim = function() {
       return this.replace(rtrim, '');
     };
   })();
  }

  [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
   // in case the input is already filled..
   if( inputEl.value.trim() !== '' ) {
     classie.add( inputEl.parentNode, 'input--filled' );
   }

   // events:
   inputEl.addEventListener( 'focus', onInputFocus );
   inputEl.addEventListener( 'blur', onInputBlur );
  } );

  [].slice.call( document.querySelectorAll( 'textarea.input__field' ) ).forEach( function( inputEl ) {
   // in case the input is already filled..
   if( inputEl.value.trim() !== '' ) {
     classie.add( inputEl.parentNode, 'input--filled' );
   }

   // events:
   inputEl.addEventListener( 'focus', onInputFocus );
   inputEl.addEventListener( 'blur', onInputBlur );
  } );

  function onInputFocus( ev ) {
   classie.add( ev.target.parentNode, 'input--filled' );
  }

  function onInputBlur( ev ) {
   if( ev.target.value.trim() === '' ) {
     classie.remove( ev.target.parentNode, 'input--filled' );
   }
  }
  // Input end
}

$(document).ready(function() {
  new WOW().init();
  
 	$('input, textarea, select').placeholder();

	$('.js-overlay-menu__toggle').click(function(event) {
		$('.overlay-menu').toggleClass('overlay-menu--open');
	});

	$('.smooth a').smoothScroll({
	  speed: 'auto'
	});

  $('.js-img-hover').hover(function() {
    /* Stuff to do when the mouse enters the element */
    $('.js-img-hover').attr('src', '../assets/img/arrow-back-black.png');
  }, function() {
    /* Stuff to do when the mouse leaves the element */
    $('.js-img-hover').attr('src', '../assets/img/arrow-back.png');
  });

  $('textarea.js-auto-size').textareaAutoSize();

  $('select').change(function(){
    if($(this).val() != '') {
      $(this).css('border-bottom', 'solid 4px #d8ff00');
    } else {
      $(this).css('border-bottom', 'solid 1px #484949');
    }
  });
});

$(window).resize(function(){
    clearTimeout(timeOut);
    timeOut = setTimeout(function(){

    }, 300);
});
