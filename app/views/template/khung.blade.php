<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->    
    <link href="{{Asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
    <!-- Custom styles for this template -->
    <link href="{{Asset('public/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
 <!-- Đây là Header -->
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
      
      <ul class="nav magrin-menu">
        <li class="dropdown" >
        <a href="#" class="dropdown-toggle disabled"> 
            Planning Tool</a>
            <ul class="dropdown-menu">
              <li><a  href="#">Thuna Website</a></li>
              <li><a  href="#">Guest List</a></li>
              <li><a  href="#">Seating Chart</a></li>
              <li><a  href="#">Checklist</a></li>
              <li><a  href="#">Budget</a></li>
            </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle disabled"> Vendors </a>
            <ul class="dropdown-menu">
              <li><a  href="#">Vendor</a></li>
              <li><a  href="#">Binder</a></li>
              <li><a  href="#">Inspiration Boads</a></li>
              <li><a  href="#">Video Builder</a></li>
            </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle  disabled"> Forums </a>
          <ul class="dropdown-menu">
            <li><a  href="#">Vendor</a></li>
            <li><a  href="#">Binder</a></li>
            <li><a  href="#">Inspiration Boads</a></li>
            <li><a  href="#">Video Builder</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle  disabled"> Dresses </a>
          <ul class="dropdown-menu">
            <li><a  href="#">Vendor</a></li>
            <li><a  href="#">Binder</a></li>
            <li><a  href="#">Inspiration Boads</a></li>
            <li><a  href="#">Video Builder</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle  disabled"> Photos </a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle  disabled"> Songs </a></li>
        <li><a href="#" class="dropdown-toggle  disabled"> Registry </a></li>
        <li><a href="#" class="dropdown-toggle  disabled"> Trabel </a></li>
        <li><a href="#" class="dropdown-toggle  disabled"> Events </a></li>
        <li><a href="#" class="dropdown-toggle  disabled"> More </a></li>
      </ul>    
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</div>

    <!-- Nội dung chính các bạn để ở đây -->

       <div class="pageBody" id="content">
        @yield('content')
        </div>

   <!-- Đây là Footer -->
    <div id="top-footer">
        <div id="footer" >
        <dl class="class-dt">
         <dt >About WeddingWire:</dt>
            <dd>
                <ul class="footer-ul">
                    <li class="dot"><a href="/" title="Weddings">Weddings Home</a></li>
                    <li class="dot"><a href="#" title="About WeddingWire">About Us</a></li>
                    <li class="dot"><a title="Job opportunities at WeddingWire" href="#">Careers</a></li>
                    <li class="dot"><a href="#" title="WeddingWire Press Center">Press Center</a></li>
                    <li class="dot"><a title="Invite a Friend" href="#" rel="nofollow">Invite a Friend</a></li>
                    <li class="dot"><a title="Frequently Asked Questions" href="#" rel="nofollow">General FAQ</a></li>
                    <li><a  href="#" rel="nofollow">Help</a></li>
                </ul>
            </dd>
            <div>&nbsp;</div>
         <dt >Connect With Us:</dt>
              <dd>
                <ul class="footer-ul">
                    <li class="dot"><a href="#" title="Information for Media Partnerships">Media Partnerships</a></li>
                    <li class="dot"><a href="#" title="A comprehensive directory of Wedding Venues, Photographers, Florists, and more">Vendor Directory</a></li>
                    <li class="dot"><a href="#" title="Couples' Choice Awards&trade;">Couples' Choice Awards&trade;</a></li>
                    <li class="dot"><a href="#" title="Bride's Choice Awards&reg;">Bride's Choice Awards&reg;</a></li>
                    <li class="dot"><a target="wwFacebook" title="Connect with us on Facebook" href="https://www.facebook.com/thuna.1987" rel="nofollow"><i class="icon-facebook-sign icon-large footer-icon"></i>Facebook</a></li>                         
                    <li class="dot"><a target="wwTwitter" title="Follow us on Twitter" href="http://twitter.com/weddingwire" rel="nofollow"><i class="icon-twitter-sign icon-large footer-icon"></i>Twitter</a></li>
                    <li ><a target="wwGoogle" title="Find us on Google+" href="https://plus.google.com/103768503187713668880" rel="nofollow"><i class="icon-google-plus-sign icon-large footer-icon"></i>Google+</a></li>
                </ul>
              </dd>
            <div>&nbsp;</div>
            <dt >Wedding Resources:</dt>
                <dd>
                    <ul class="footer-ul">
                        <li class="dot"><a href="#">Project Wedding</a></li>    
                        <li class="dot"><a target="wwMslo" title="Martha Stewart" href="#">Martha Stewart</a></li>                  
                        <li class="dot"><a target="wwBlog" title="The official WeddingWire Blog" href="#">WeddingWire Blog</a></li>                         
                        <li class="dot"><a target="wwBridalBuds" title="Real Weddings, Wedding Blog" href="#">BridalBuds</a></li>               
                        <li ><a target="wwWeddingAces" title="Wedding Planning, Wedding Advice, Wedding Ideas, Wedding Tips" href="#">WeddingAces</a></li>      
                    </ul>
                </dd>
                <div>&nbsp;</div>
                <dt >Legal:</dt>
                <dd>
                    <ul class="footer-ul">
                        <li class="dot"><a title="Terms of Use" href="#" rel="nofollow">Terms of Use</a></li>
                        <li class="dot"><a title="Privacy Policy" href="#" rel="nofollow">Privacy Policy</a></li>
                        <li class="dot"><a title="Community Guidelines" href="#" rel="nofollow">Community Guidelines</a></li>
                        <li ><a title="Vow of Conduct" href="#" rel="nofollow">Vow of Conduct</a></li>
                    </ul>
                </dd>                   
            </dl>
            <dl class="class-dt">
                <dt >Vendor Search:</dt>
                <dd>
                    <ul class="footer-ul">
                        <li class="dot"><a href="#"  title="Wedding Cakes">Wedding Cakes</a></li>
                        <li class="dot"><a href="#"  title="Wedding Venues">Wedding Venues</a></li>
                        <li class="dot"><a href="#"  title="Wedding Caterers">Wedding Caterers</a></li>
                        <li class="dot"><a href="#"  title="Wedding Photographers">Wedding Photographers</a></li>               
                        <li class="dot"><a href="#" title="Wedding Videographers">Wedding Videographers</a></li>
                        <li class="dot"><a title="Wedding Registry"  href="#">Wedding Registry</a></li>
                        <li ><a href="#" title="Wedding Decor">Wedding Decor</a></li>
                    </ul>
                </dd>
                <dt class="soft-break">&nbsp;</dt>
                <dd>
                    <ul class="footer-ul">
                        <li class="dot"><a href="#"  title="Wedding Invitations">Wedding Invitations</a></li>                       
                        <li class="dot"><a href="#"  title="Wedding Favors">Wedding Favors &amp; Gifts</a></li>
                        <li class="dot"><a href="#"  title="Wedding Music Bands">Wedding Bands</a></li>
                        <li class="dot"><a href="#"  title="Wedding DJs">Wedding DJ's</a></li>                  
                        <li class="dot"><a href="#"  title="Wedding Dresses">Wedding Dresses</a></li>
                        <li class="dot"><a href="#"  title="Wedding Florists">Wedding Florists</a></li>
                        <li class="dot"><a href="#"  title="Wedding Limos">Wedding Limos</a></li>
                        <li ><a href="#"  title="Wedding Travel">Travel</a></li>
                    </ul>
                </dd>
                <dt class="soft-break">&nbsp;</dt>
                <dd>
                    <ul class="footer-ul">                  
                        <li class="dot"><a href="#"  title="Wedding Musicians">Ceremony Music</a></li>
                        <li class="dot"><a href="#"  title="Wedding Planners">Wedding Planners</a></li>
                        <li class="dot"><a href="#"  title="Wedding Rentals">Wedding Rentals</a></li>
                        <li class="dot"><a href="#"  title="Wedding Officiants">Wedding Officiants</a></li>
                        <li class="dot"><a href="#"  title="Wedding Hairstyles">Wedding Hairstyles</a></li>
                        <li class="dot"><a href="#"  title="Wedding Jewelry">Wedding Jewelry</a></li>
                        <li ><a href="#"  title="Name Change">Name Change</a></li>
                    </ul>
                </dd>
                <div>&nbsp;</div>
                <dt>Planning Tools:</dt>
                <dd>
                    <ul class="footer-ul" >
                        <li class="dot"><a href="/wedding-websites.html" class="grey" title="Wedding Websites">Wedding Websites</a></li>                                
                        <li class="dot"><a href="/wedding-planning/wedding-seating-tables.html" class="grey" title="Wedding Seating Charts">Seating Charts</a></li>
                        <li class="dot"><a href="/wedding-planning/wedding-budget.html" class="grey" title="Wedding Budgets">Budget</a></li>                                                
                        <li class="dot"><a href="/wedding-checklists.html" class="grey" title="Wedding Checklists">Checklists</a></li>  
                        <li class="dot"><a href="/wedding-planning/wedding-guests-list.html" class="grey" title="Wedding Guests Lists">Guest List</a></li>                                      
                        <li class="dot"><a href="/wedding-planning/wedding-organizer-binder.html" class="grey" title="Wedding Organizer">Binder</a></li>
                        <li class="dot"><a href="/wedding-timeline" class="grey" title="Wedding Timeline">Timeline</a></li>
                        <li class="dot"><a href="/wedding-planning/vendor-manager.html" class="grey" title="Wedding Vendor Manager">Vendor Manager</a></li> 
                        <li class="noborder"><a href="/wedding-songs" class="grey" title="Wedding Songs">Wedding Songs</a></li>             
                    </ul>           
                    </dd>
                <div>&nbsp;</div>
                <dt >By City:</dt>
                <dd>
                    <ul class="footer-ul">
                        <li class="dot"><a href="#" class="grey" title="Atlanta, GA Weddings">Atlanta GA</a></li>
                        <li class="dot"><a href="/c/md-maryland/baltimore/512-r.html" class="grey" title="Baltimore, MD Weddings">Baltimore MD</a></li>
                        <li class="dot"><a href="/c/ma-massachusetts/boston-watertown-waltham/506-r.html" class="grey" title="Boston, MA Weddings">Boston MA</a></li>
                        <li class="dot"><a href="/c/il-illinois/chicago-rockford-south-bend/602-r.html" class="grey" title="Chicago, IL Weddings">Chicago IL</a></li>
                        <li class="dot"><a href="/c/tx-texas/dallas-ft-worth-wichita-falls/623-r.html" class="grey" title="Dallas, TX Weddings">Dallas TX</a></li>
                        <li class="dot"><a href="/c/co-colorado/denver-colorado-springs-grand-junction/751-r.html" class="grey" title="Denver, CO Weddings">Denver CO</a></li>
                        <li class="dot"><a href="/c/tx-texas/houston-beaumont/618-r.html" class="grey" title="Houston, TX Weddings">Houston TX</a></li>
                        <li class="dot"><a href="/c/nv-nevada/las-vegas/839-r.html" class="grey" title="Las Vegas, NV Weddings">Las Vegas NV</a></li>
                        <li ><a href="/c/ca-california/los-angeles-county/803A-r.html" class="grey" title="Los Angeles, CA Weddings">Los Angeles CA</a></li>
                    </ul>
                </dd>
                <dt class="soft-break">&nbsp;</dt>
                <dd>
                    <ul class="footer-ul" >
                        <li class="dot"><a href="#">Miami FL</a></li>
                        <li class="dot"><a href="/c/ny-new-york/new-york-manhattan-brooklyn/501B-r.html" class="grey" title="New York, NY Weddings">New York NY</a></li>
                        <li class="dot"><a href="/c/fl-florida/orlando-daytona-beach/534-r.html" class="grey" title="Orlando, FL Weddings">Orlando FL</a></li>                                  
                        <li class="dot"><a href="/c/pa-pennsylvania/philadelphia-wilmington-southern-new-jersey/504-r.html" class="grey" title="Philadelphia, PA Weddings">Philadelphia PA</a></li>
                        <li class="dot"><a href="/c/az-arizona/phoenix/753-r.html" class="grey" title="Phoenix, AZ Weddings">Phoenix AZ</a></li>                    
                        <li class="dot"><a href="/c/ca-california/san-francisco-san-jose-oakland/807-r.html" class="grey" title="San Francisco, CA Weddings">San Francisco CA</a></li>
                        <li class="dot"><a href="/c/wa-washington/seattle-tacoma-yakima/819-r.html" class="grey" title="Seattle, WA Weddings">Seattle WA</a></li>
                        <li><a href="/c/dc-district-of-columbia/washington-dc-maryland-northern-virginia/511-r.html" class="grey" title="Washington, DC Weddings">Washington DC</a></li>
                    </ul>
                </dd>                           
        </dl>
        </div>
        <div id="copyright">Copyright © 2006-2014, WeddingWire Inc., All Rights Reserved</div>
    </div>
 <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
  </html>