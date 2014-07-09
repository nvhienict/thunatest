
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>HeaderHome</title>

    <!-- Bootstrap core CSS -->
    
    <link href="{{Asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <!-- Custom styles for this template -->
    <link href="{{Asset('public/assets/css/style.css')}}" rel="stylesheet">
    <script type="text/javascript">
        /**
             * Project: Bootstrap Hover Dropdown
             * Author: Cameron Spear
             * Contributors: Mattia Larentis
             *
             * Dependencies: Bootstrap's Dropdown plugin, jQuery
             *
             * A simple plugin to enable Bootstrap dropdowns to active on hover and provide a nice user experience.
             *
             * License: MIT
             *
             * http://cameronspear.com/blog/bootstrap-dropdown-on-hover-plugin/
             */
            ;(function ($, window, undefined) {
                // outside the scope of the jQuery plugin to
                // keep track of all dropdowns
                var $allDropdowns = $();

                // if instantlyCloseOthers is true, then it will instantly
                // shut other nav items when a new one is hovered over
                $.fn.dropdownHover = function (options) {
                    // don't do anything if touch is supported
                    // (plugin causes some issues on mobile)
                    if('ontouchstart' in document) return this; // don't want to affect chaining

                    // the element we really care about
                    // is the dropdown-toggle's parent
                    $allDropdowns = $allDropdowns.add(this.parent());

                    return this.each(function () {
                        var $this = $(this),
                            $parent = $this.parent(),
                            defaults = {
                                delay: 500,
                                instantlyCloseOthers: true
                            },
                            data = {
                                delay: $(this).data('delay'),
                                instantlyCloseOthers: $(this).data('close-others')
                            },
                            showEvent   = 'show.bs.dropdown',
                            hideEvent   = 'hide.bs.dropdown',
                            // shownEvent  = 'shown.bs.dropdown',
                            // hiddenEvent = 'hidden.bs.dropdown',
                            settings = $.extend(true, {}, defaults, options, data),
                            timeout;

                        $parent.hover(function (event) {
                            // so a neighbor can't open the dropdown
                            if(!$parent.hasClass('open') && !$this.is(event.target)) {
                                // stop this event, stop executing any code
                                // in this callback but continue to propagate
                                return true;
                            }

                            openDropdown(event);
                        }, function () {
                            timeout = window.setTimeout(function () {
                                $parent.removeClass('open');
                                $this.trigger(hideEvent);
                            }, settings.delay);
                        });

                        // this helps with button groups!
                        $this.hover(function (event) {
                            // this helps prevent a double event from firing.
                            // see https://github.com/CWSpear/bootstrap-hover-dropdown/issues/55
                            if(!$parent.hasClass('open') && !$parent.is(event.target)) {
                                // stop this event, stop executing any code
                                // in this callback but continue to propagate
                                return true;
                            }

                            openDropdown(event);
                        });

                        // handle submenus
                        $parent.find('.dropdown-submenu').each(function (){
                            var $this = $(this);
                            var subTimeout;
                            $this.hover(function () {
                                window.clearTimeout(subTimeout);
                                $this.children('.dropdown-menu').show();
                                // always close submenu siblings instantly
                                $this.siblings().children('.dropdown-menu').hide();
                            }, function () {
                                var $submenu = $this.children('.dropdown-menu');
                                subTimeout = window.setTimeout(function () {
                                    $submenu.hide();
                                }, settings.delay);
                            });
                        });

                        function openDropdown(event) {
                            $allDropdowns.find(':focus').blur();

                            if(settings.instantlyCloseOthers === true)
                                $allDropdowns.removeClass('open');

                            window.clearTimeout(timeout);
                            $parent.addClass('open');
                            $this.trigger(showEvent);
                        }
                    });
                };

                $(document).ready(function () {
                    // apply dropdownHover to all elements with the data-hover="dropdown" attribute
                    $('[data-hover="dropdown"]').dropdownHover();
                });
            })(jQuery, this);
        </script>
  </head>

  <body>
    <div id="main">
    <div class="navbar navbar-inverse navbar-fixed-top color" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse class-ul ">
          <ul class="nav navbar-nav auto">
            <li ><a href="#">Join Now</a></li>
            <li><a href="#about">Log In</a></li>
            <li><a href="#contact">Write A Review</a></li>
            <li><a href="#">Are You A Vendor?</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div style="clear: both;"></div>
    <h1>
      <a href="#" title="Thuna">
        <div class="logo"> </div>
      </a>
    </h1> 
    <div id="menu" class="btn-toolbar ">
      <ul class="dropdown ">
        <li><a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false"> 
            Planning Tool</a>
          <ul class="dropdown-menu">
            <li><a a tabindex="-1" href="#">Thuna Website</a></li>
            <li><a a tabindex="-1" href="#">Guest List</a></li>
            <li><a a tabindex="-1" href="#">Seating Chart</a></li>
            <li><a a tabindex="-1" href="#">Checklist</a></li>
            <li><a a tabindex="-1" href="#">Budget</a></li>
          </ul>
            <ul class="dropdown-menu">
            <li><a a tabindex="-1" href="#">Vendor</a></li>
            <li><a a tabindex="-1" href="#">Binder</a></li>
            <li><a a tabindex="-1" href="#">Inspiration Boads</a></li>
            <li><a a tabindex="-1" href="#">Video Builder</a></li>
          </ul> 
        </li>
        <li><a href="#"> Vendors </a></li>
        <li><a href="#"> Forums </a></li>
        <li><a href="#"> Dresses </a></li>
        <li><a href="#"> Photos </a></li>
        <li><a href="#"> Songs </a></li>
        <li><a href="#"> Registry </a></li>
        <li><a href="#"> Trabel </a></li>
        <li><a href="#"> Events </a></li>
        <li><a href="#"> More </a></li>
      </ul>
    
  </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

     <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
  </script>

  <script>
      var _gaq=[['_setAccount','UA-28756144-1'],['_trackPageview']];
      (function(d,t) {
          var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
          g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
          s.parentNode.insertBefore(g,s)
      }(document,'script'));      
  </script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
