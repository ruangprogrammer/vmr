<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>VMR - Mekanik Berdasi</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike Race Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Michroma" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
<link href="css/jquery.mb.thumbgallery.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/info.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/banner.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css -->
</head>
<body>
<!-- navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
		<!-- <div class="search1">
			<form action="#" method="post">
				<div class="input-group">
					<input type="text" class="form-control" name="search" id="search2" placeholder="Search" required/>
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit" ><i class="fa fa-search"></i></button>
					</span>
				</div>
			</form>
		</div> -->
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"><h1>VMR Mekanik</h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<ul class="nav navbar-nav slide-nav">
				<li class="active current"><a href="index.html">Home</a></li>
				<li><a href="galeri-foto.html">Galeri Foto</a></li>
				<li><a href="special-tools.html">Special Tools</a></li>
				<li><a href="product.html">Product</a></li>
<!-- 			<li><a href="schedule.html">Schedule</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="drivers.html">Drivers</a></li> -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kursus Mekanik Rancing<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="biaya.html">Biaya</a></li>
						<li><a href="siswa.html">Siswa</a></li>
						<li><a href="download.html">Download</a></li>
					</ul>
				</li>
				<!-- <li><a href="#">Siswa</a></li> -->
				<li><a href="artikel.html">Artikel</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul>
<!-- 			<ul class="nav navbar-nav slide-nav">
				<li class="active current"><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="schedule.html">Schedule</a></li>
				<li><a href="gallery.html">Gallery</a></li>
				<li><a href="drivers.html">Drivers</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="typo.html">Typography</a></li>
						<li><a href="icons.html">Icons</a></li>
					</ul>
				</li>
				<li><a href="contact.html">Contact</a></li>
			</ul> -->
        </div><!--/.nav-collapse -->		
    </div>
</nav>
<!-- /navigation -->
<?php 
        include('admin/config.php');  
		// include 'menuatas-member.php';
		if (isset($_GET['hal']) && strlen($_GET['hal']) > 0) {
			$hal = str_replace(".", "/", $_GET['hal']) . ".php";
		} else {
			$hal = "home.php";
		}
		if (file_exists($hal)) {
			include($hal);
		} else {
			include("home.php");
		}
                     
?>
<!-- /recent pics section -->
<!-- last section -->
<section class="last-w3layouts">
	<div class="container">
		<a href="index.html" class="bottom-agile"><h2 class="text-center">VMR - Mekanik Berdasi</h2></a>
		<p class="text-center">&copy; 2017 VMR - Mekanik Berdasi. All Rights Reserved <!--  Design by <a href="http://w3layouts.com/" target="_blank"> W3layouts </a> --></p>
	</div>	
</section>
<!-- last section -->
<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/top.js"></script> 
<script src="js/modernizr.min.js"></script>
<script src="js/index.js"></script>
<script src="js/jarallax.js"></script>
<script type="text/javascript">
    /* init Jarallax */
	$('.jarallax').jarallax({
        speed: 0.2,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<script src='js/aos.js'></script>
<script src="js/aos2.js"></script>
<!-- js for recent pics section -->
<script src="js/jquery.mb.thumbGallery.js"></script>
<script>

    var isIframe = function() {
        var a = !1;
        try {
            self.location.href != top.location.href && ( a = !0 )
        } catch ( b ) {
            a = !0
        }
        return a
    };
    if ( !isIframe() ) {
        var logo = $( "<a href='#' style='position:absolute;top:0;z-index:1000'><img id='logo' border='0' src='#' alt='mb.ideas.repository'></a>" );
        $( "#wrapper" ).prepend( logo ), $( "#logo" ).fadeIn()
    }

    /* Extend or modify effects */
    jQuery.thumbGrid.transitions.fadeIn = {in: {x:"0", opacity:0, scale:0.9}, out: {x:0, opacity:0}};
    jQuery.thumbGrid.transitions.fadeOut = {in: {x:"0", opacity:0}, out: {x:0, scale:0.9, opacity:0}};
    jQuery.thumbGrid.transitions.slideLeft = {in: {x:$(window).width(), opacity:0}, out: {x:-$(window).width(), opacity:0}, ease:"cubic-bezier(.43,.18,.81,1.07)"};
    jQuery.thumbGrid.transitions.slideRight = {in: {x:0, opacity:0}, out: {x:$(window).width(), opacity:0}, ease:"cubic-bezier(.43,.18,.81,1.07)"};

    /* Initialize the gallery */
    jQuery("#thumbGrid").thumbGrid();

    /* customizer */
    jQuery("#effect").on("change",function(){
        var x = $(this).val();
        jQuery("#thumbGrid").data("nav_effect", x);
    });

    jQuery("#delay").on("change",function(){
        var x = parseFloat($(this).val());
        jQuery("#thumbGrid").data("nav_delay", x);
    });

    jQuery("#timing").on("change",function(){
        var x = parseFloat($(this).val());
        jQuery("#thumbGrid").data("nav_timing", x);
    });

    if(jQuery.isMobile){
        jQuery("body").css({marginBottom: 140})
    }


</script>
<!-- /js for recent pics section -->
<!-- js for testimonials -->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 800,
        speed: 800
      });
	});  
</script>
<!-- /js for testimonials -->
<!-- js for banner section -->
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>
<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
</script>
<!-- /js for banner section -->
</body>
</html>