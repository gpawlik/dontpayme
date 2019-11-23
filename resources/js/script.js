$(document).ready(function() {
  /* Snap */
  var snapper = new Snap({
    element: document.getElementById("main"),
    disable: "right"
  });

  $(".toggle_menu").click(function() {
    if (snapper.state().state == "left") {
      snapper.close();
    } else {
      snapper.open("left");
    }
  });

  // Countdown
  var language = $("body").attr("id");
  $("#timer").countdown(
    {
      until: new Date(2015, 07, 07, 8, 20, 0),
      timezone: +10,
      layout:
        '{d<}<div id="days" class="timer_box"><strong>{dn}</strong><p>{dl}</p></div>{d>}' +
        '{h<}<div id="hours" class="timer_box"><strong>{hn}</strong><p>{hl}</p></div>{h>}' +
        '{m<}<div id="minutes" class="timer_box"><strong>{mn}</strong><p>{ml}</p></div>{m>}' +
        '{s<}<div id="seconds" class="timer_box"><strong>{sn}</strong><p>{sl}</p></div>{s>}'
    },
    $.countdown.regional[language]
  );

  //bg video
  $.backgroundVideo($(".video_background"), {
    align: "centerXY",
    path: "resources/videos/",
    width: 854,
    height: 480,
    poster: "resources/img/short_trailer.jpg",
    filename: "short_trailer",
    types: ["mp4", "ogg", "webm"]
  });

  //prepare video
  $(".video_section").height($(window).height());

  $(window).resize(function() {
    $(".video_section").height($(window).height());
  });
  $(".content_holder").addClass("visible");

  setTimeout(function() {
    $(".content_holder_box").addClass("visible");
  }, 1000);

  //play video
  $(".play_button").click(function() {
    //stop the video
    if (!window.isMobile) {
      $("body")
        .addClass("noscroll")
        .append(
          '<div class="previewer"><div><iframe src="//player.vimeo.com/video/97649846?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff&amp;autoplay=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><p style="color:#ddd;margin-top:5px"><span class="icon icon-music" style="margin-right:10px;"></span> Soundtrack: <a href="https://www.facebook.com/UnePipeBand" target="_blank" style="color:#CD3A3D;font-weight:bold;">Une Pipe</a></p></div><span class="close icon icon-plus-sign"></span></div>'
        );

      //pause video
      $("body").addClass("paused");

      $(".previewer").click(function() {
        $("body").removeClass("noscroll");
        $(this).remove();

        //play video back
        $("body").removeClass("paused");
      });
      return false;
    }
  });

  //hide video when tab inactive
  var isActive = true;

  window.onfocus = function() {
    isActive = true;
  };
  window.onblur = function() {
    isActive = false;
  };

  if ($("#landing_video").length) {
    setInterval(function() {
      paused = $("body").hasClass("paused");
      if (isActive && !paused) {
        $("#landing_video")
          .get(0)
          .play();
      } else {
        $("#landing_video")
          .get(0)
          .pause();
      }
    }, 500);
  }

  //hide video on scroll
  $(document).scroll(function() {
    if ($(document).scrollTop() > $(window).height() - 50) {
      $("body").addClass("paused");
    } else {
      if ($("body").hasClass("paused")) {
        $("body").removeClass("paused");
      }
    }
  });

  // subscribe submit
  $(".submit_button").click(function(e) {
    e.preventDefault();
    var button = $(this),
      input = $("#subscribe_email").val(),
      thank_you_message = $("#subscribe_info").attr("data-thankyou");

    if (email_check(input)) {
      $.ajax({
        type: "POST",
        url: "home/subscribe_user",
        data: { user_email: input },
        beforeSend: function() {
          button.addClass("disabled");
        },
        success: function(data) {
          console.log(data);
          $(".subscribe-group").animate({ opacity: 0 }, 500);
          $("#subscribe_info").text(thank_you_message);
        },
        error: function(data) {}
      });
    } else {
      $("#subscribe_email").addClass("error");
    }
  });

  // check if is email
  function email_check(email) {
    var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (reg.test(email)) {
      return true;
    } else {
      return false;
    }
  }

  // unset input error
  $("#subscribe_email").keyup(function(e) {
    var input = $(this).val();
    if (email_check(input)) {
      $("#subscribe_email").removeClass("error");
    }
  });

  $(".flexslider").flexslider({
    animation: "slide",
    directionNav: false,
    controlsContainer: ".flexslider"
  });

  // map effects
  // useful?
  /*
$( ".chapter_map" )
    .mouseenter(function() {
    $('.map_marker').animate({opacity:1});
    })
    .mouseleave(function() {
    $('.map_marker').animate({opacity:0.5});
}); */

  // smooth scrolling
  /*
$('.snap-drawer li a').click(function(){
    console.log('run!');
    $('.snap-content').css('opacity', 0).animate({
        opacity:1
    }, 300);
    //return false;
}); */

  /*
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });  */

  /*  
var $flexslider = $('.flexslider'),
$slides = $flexslider.find('li'),
stripComment = function(string) {
return string.replace(/<!--/g, '').replace(/-->/g, '');
},
initItem = function(item) {
var $this = $(item);
if(!$this.hasClass('init')) {
$this.html(stripComment($this.html())).addClass('init');
}
}
;
 
$flexslider.flexslider({
animation: "slide",
slideshow: false,
start: function(){
$flexslider.find('.flex-active-slide, .clone').each(function(){
initItem(this);
});
},
before: function(){
$slides.each(function(){
initItem(this);
});
}
}); */

  socialButtons();
});

function socialButtons() {
  $(".fb_share").on("click", function(e) {
    var title = $(this).attr("data-title"),
      link = $(this).attr("data-link"),
      picture = $(this).attr("data-picture"),
      description = $(this).attr("data-description");

    publishStory(title, link, picture, description, function(r) {
      console.log(title + link + picture + description);
      console.log(r);
      _gaq.push(["_trackEvent", "social_button", "facebook share"]);
    });
  });

  $(".popup").click(function(event) {
    var type = $(this).attr("data-type");
    var width = 575,
      height = 400,
      left = ($(window).width() - width) / 2,
      top = ($(window).height() - height) / 2,
      url = this.href,
      opts =
        "status=1" +
        ",width=" +
        width +
        ",height=" +
        height +
        ",top=" +
        top +
        ",left=" +
        left;

    window.open(url, "", opts);

    if (type === "tw") {
      _gaq.push(["_trackEvent", "social_button", "twitter share"]);
    } else if (type === "gg") {
      _gaq.push(["_trackEvent", "social_button", "google+ share"]);
    }

    return false;
  });
}

function publishStory(title, link, picture, description, callback) {
  FB.ui(
    {
      method: "feed",
      name: title,
      link: link,
      picture: picture,
      description: description
    },
    function(response) {
      callback(response);
    }
  );
}
