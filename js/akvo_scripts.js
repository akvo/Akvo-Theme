// SEARCH
var $ = jQuery.noConflict();

$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });

    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });

    $('[data-behaviour~=downloads-dropdown]').each( function(){
      var $el   = $(this),
        $button = $el.find('a[href]'),
        $select = $el.find('select');

      $select.change( function(){
        var value = $select.val();
        $button.attr( 'href', value );
      });
    });

});

// CAROUSEL

$(document).ready( function() {
    $('#myCarousel').carousel({
		interval:   4000
	});

	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');
			}
		}
		clickEvent = false;
	});
});

// COUNTERS

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};

		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);

			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;

			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};

			$self.data('countTo', data);

			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);

			// initialize the element with the starting value
			render(value);

			function updateTimer() {
				value += increment;
				loopCount++;

				render(value);

				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}

				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;

					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}

			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};

	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};

	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });

  // start all the timers
  $('.timer').each(count);

  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});

// BACK TO TOP

$(document).ready(function(){
      $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span></div>');
    	$(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});

// LOGO SLIDER

$(document).ready(function(){


	$('[data-behaviour~=logos-slick]').each( function(){

		var $el = $( this );

		$el.slick({
			slidesToShow	: $el.data('items'),
			slidesToScroll	: 1,
			autoplay		: true,
			autoplaySpeed	: 1500,
			arrows			: false,
			dots			: false,
			pauseOnHover	: false,
			responsive		: [{
				breakpoint	: 960,
				settings	: { slidesToShow: 4 }
			}, {
				breakpoint: 768,
				settings: { slidesToShow: 3 }
			},{
        breakpoint: 520,
				settings: { slidesToShow: 2 }
      }]
		});

	});

});


// MULTISTAGE FORM

$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");
  }
});

// TABS

$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});


// PROGRESS BAR

$(document).ready(function(){

    var getMax = function(){
        return $(document).height() - $(window).height();
    }

    var getValue = function(){
        return $(window).scrollTop();
    }

    if('max' in document.createElement('progress')){
        // Browser supports progress element
        var progressBar = $('progress');

        // Set the Max attr for the first time
        progressBar.attr({ max: getMax() });

        $(document).on('scroll', function(){
            // On scroll only Value attr needs to be calculated
            progressBar.attr({ value: getValue() });
        });

        $(window).resize(function(){
            // On resize, both Max/Value attr needs to be calculated
            progressBar.attr({ max: getMax(), value: getValue() });
        });
    }
    else {
        var progressBar = $('.progress-bar'),
            max = getMax(),
            value, width;

        var getWidth = function(){
            // Calculate width in percentage
            value = getValue();
            width = (value/max) * 100;
            width = width + '%';
            return width;
        }

        var setWidth = function(){
            progressBar.css({ width: getWidth() });
        }

        $(document).on('scroll', setWidth);
        $(window).on('resize', function(){
            // Need to reset the Max attr
            max = getMax();
            setWidth();
        });
    }
});

/* CLOCKS */

$(document).ready(function(){


	$('body').find('[data-behaviour~=clock]').each( function(){

		var el 		= $( this ),
			imgpath = settings['template_url'] + '/images/jClocks-'; // settings OBJECT IS LOADED FROM FUNCTIONS.PHP


		el.jClocksGMT({
			imgpath	: imgpath,
			title	: el.data('title'),
			hello	: el.data('hello'),
			offset	: el.data('offset'),
			dst		: true
		});

	});

	// magic happens here
	var clocks = $('.jcgmt-container'); // get all clock elements

	// delay 1 second to finish initialization of clocks
	setTimeout(function() {
		clocks.each(function(){
			var clock = $(this);
			var localeTime = clock.find('.jcgmt-clockHolder').prop('title'); // get clock time
			var h = parseFloat(localeTime.split(':')[0]); // get hours from time

			if( localeTime.toUpperCase().indexOf('AM') !== -1 || localeTime.toUpperCase().indexOf('PM') !== -1 ) // check for am/pm 12 hour time
			{ // convert from 12 hour clock
				if( localeTime.toUpperCase().indexOf('PM') !== -1 )
				{
					if( h != 12 ) // if not 12pm
						h+=12; // convert to 24 hour time
				}
				else
				{
					if( h === 12 ) // if is 12am
						h = 0; // convert to 24 hour time
				}
			}

			if( h > 07 && h < 18) // 7am - 6pm
			{
				clock.addClass("daytime"); // daytime mode
			}
			else
			{
				clock.addClass("nighttime"); // nighttime mode
			}
		});
	}, 1000);

	$('body').find('[data-behaviour~=process]').each( function(){

		var $el = $( this );

		$el.find('.btn-circle').on('click',function(){

			$('.btn-circle.btn-info').removeClass('btn-info').addClass('btn-default');
			$(this).addClass('btn-info').removeClass('btn-default').blur();

		});

	});

  $('body').find('[data-behaviour~=akvo-rotating]').each( function(){

    var $el = $( this ),
      i     = 0,
      $span = $el.find('span'),
      words = $el.data('words');

    console.log( words );



    function animate(){
      $span.fadeOut( 500, function(){
        if( i > words.length-1 ){
          i = 0;
        }
        if( words[i] && words[i].word ){
          $span.html( words[i].word );
          $span.fadeIn(500);
        }
        i++;
      });


      setTimeout( animate, 2500 );
    }

    animate();


    //$span.html( words[0] );



  });

	/*
	* IMAGE ON CLICK OPENS A VIDEO MODAL.
	* WHEN THE VIDEO MODAL OPEN, THE VIDEO SHOULD PLAY AUTOMATICALLY
	* WHEN THE VIDEO MODAL CLOSES, THE VIDEO SHOULD STOP PLAYING
	*/
	$('.video-modal').each( function(){

		var $videoModal = $( this ),
			$iframe = $videoModal.find('iframe'),
			src = $iframe.attr('src');

		$videoModal.on( 'show.bs.modal', function( e ){

			var newSrc = src + "?autoplay=1";

			$iframe.attr( 'src', newSrc );

		} );

		$videoModal.on( 'hide.bs.modal', function( e ){
			$iframe.attr( 'src', src );
		});

	});

});

// AKVO PRICING POPUP SCRIPT
jQuery(document).ready(function(){


  /*
  * HIDE TARGETS OF THE PRICING WIDGETS
   */


  // setTimeout(function() {
  //   jQuery( '.sow-pricing-wrapper .sow-pricing ul > li a' ).each( function(){
  //     var $el = jQuery( this ),
  //       $target = jQuery( $el.attr('href') );
  //     $target.addClass('hide');
  //   } );
  // }, 3500);

  // jQuery(document).scroll(function(){
  //   console.log( 'hii' );
  // });

    jQuery( '.sow-pricing-wrapper' ).each( function(){

      var $wrapper = jQuery( this ),
        offset = $wrapper.offset().top;

      function getActiveElementFromURL(){
        var URI = jQuery( location ).attr('href'),
         parts = URI.split('#'),
         activeTarget = '#' + parts[ parts.length-1 ],
         $target = $wrapper.find( '.sow-pricing ul > li a[href="' + activeTarget + '"]' );
         if( $target.length ){ return $target; }
         return false;
      }

      // Checks whether the class show is present or not,removes class show if exists
      function hideAllTargets(){
        $wrapper.find( '.sow-pricing ul > li a' ).each( function(){
          var $pricing_anchor = jQuery( this ),
            $pricing_target   = jQuery( $pricing_anchor.attr('href') );
          $pricing_target.addClass('hide');
        });
      }



      //Toggle sow-desc-active class
      function activeTab( $el ){
        if( jQuery( $el ).closest('li').hasClass( 'faded' ) ){
          $wrapper.find( '.sow-pricing ul > li' ).removeClass( 'sow-desc-active' ).addClass('faded');
          jQuery( $el ).closest('li').removeClass( 'faded' ).addClass( 'sow-desc-active' );
        }
      }

      function init(){
        hideAllTargets();
        var $target = getActiveElementFromURL();
        if( $target ){ $target.click(); }
      }

      // handles click event on tab
      $wrapper.find( '.sow-pricing ul > li a' ).each( function(){

        var $el = jQuery( this ),
          $target = jQuery( $el.attr( 'href' ) );

        $el.on( 'click', function( event ){
          event.preventDefault();

          activeTab( $el );

          hideAllTargets();

          // show only the target
          $target.removeClass( 'hide' );

          // scroll to the target
          jQuery('html, body').animate({
            scrollTop: $target.offset().top
          }, 1200);

          // THIS EVENT IS MANUALLY TRIGGERED SO THAT SITEORIGIN WILL RECALCAULATE ITS ROW WIDTH AGAIN
          $( window ).trigger( 'load' );

          // ADD THE TARGET LINK TO THE URL
          window.location.replace( $el.attr( 'href' ) );
        });

      });

      init();

    } );

   //each loop





});
