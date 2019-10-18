<?php 
		session_start();
		if (!isset($_SESSION['email'])) { 
            header('location:login.php');
        }
        

        ?>
<!DOCTYPE html>
<html>
<head>

 <!-- #CSS ONLY -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- #JS AND JQUERRY -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>E-HOSPITAL &#8211; YOUR HEALTH OUR CARE</title>
<link rel='dns-prefetch' href='//maps.google.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="E HOSPITAL &raquo; Feed" href="#" />
<link rel="alternate" type="application/rss+xml" title="E HOSPITAL &raquo; Comments Feed" href="#" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/www.vasana.lk\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.8"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b!==c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='accordion-responsive-css-css'  href='http://www.vasana.lk/wp-content/plugins/accordions-wp/css/responsive-accordion.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='accordion-main-css-css'  href='http://www.vasana.lk/wp-content/plugins/accordions-wp/css/style.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='wp-color-picker-css'  href='http://www.vasana.lk/wp-admin/css/color-picker.min.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='pricingtable_style-css'  href='http://www.vasana.lk/wp-content/plugins/pricingtable/css/style.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='pricingtable_style_common-css'  href='http://www.vasana.lk/wp-content/plugins/pricingtable/css/style-common.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css'  href='http://www.vasana.lk/wp-content/plugins/pricingtable/css/animate.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='ParaAdmin-css'  href='http://www.vasana.lk/wp-content/plugins/pricingtable/ParaAdmin/css/ParaAdmin.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='pricingtable-style-flat-css'  href='http://www.vasana.lk/wp-content/plugins/pricingtable/themes/flat/style.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='pricingtable-style-rounded-css'  href='http://www.vasana.lk/wp-content/plugins/pricingtable/themes/rounded/style.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='pricingtable-style-sonnet-css'  href='http://www.vasana.lk/wp-content/plugins/pricingtable/themes/sonnet/style.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='Raleway-css'  href='http://fonts.googleapis.com/css?family=Raleway%3A900&#038;ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='ahronbd-css'  href='http://www.vasana.lk/wp-content/plugins/pricingtable/fonts/ahronbd.ttf?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='Bellerose-css'  href='http://www.vasana.lk/wp-content/plugins/pricingtable/fonts/Bellerose.ttf?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='pricingtable_style-admin-css'  href='http://www.vasana.lk/wp-content/plugins/pricingtable/css/style-admin.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='http://www.vasana.lk/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.9' type='text/css' media='all' />
<link rel='stylesheet' id='cf7cf-style-css'  href='http://www.vasana.lk/wp-content/plugins/cf7-conditional-fields/style.css?ver=1.3.4' type='text/css' media='all' />
<link rel='stylesheet' id='download-attachments-frontend-css'  href='http://www.vasana.lk/wp-content/plugins/download-attachments/css/frontend.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='lsow-frontend-styles-css'  href='http://www.vasana.lk/wp-content/plugins/livemesh-siteorigin-widgets/assets/css/lsow-frontend.css?ver=1.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='lsow-icomoon-styles-css'  href='http://www.vasana.lk/wp-content/plugins/livemesh-siteorigin-widgets/assets/css/icomoon.css?ver=1.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='macho-bootstrap-css-css'  href='http://www.vasana.lk/wp-content/plugins/macho-shortcode-manager/css/front/bootstrap.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='macho-fontawesome-css-css'  href='http://www.vasana.lk/wp-content/plugins/macho-shortcode-manager/css/front/font-awesome.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='macho-style-css-css'  href='http://www.vasana.lk/wp-content/plugins/macho-shortcode-manager/css/front/shortcodes.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='regina-fonts-css'  href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700%7CMontserrat%3A400%2C700&#038;ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='http://www.vasana.lk/wp-includes/css/dashicons.min.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='regina-bootstrap-style-css'  href='http://www.vasana.lk/wp-content/themes/regina-pro/css/bootstrap.min.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='regina-mobile-style-css'  href='http://www.vasana.lk/wp-content/themes/regina-pro/css/mobile.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='regina-main-style-css'  href='http://www.vasana.lk/wp-content/themes/regina-pro/css/styles.css?ver=4.8.8' type='text/css' media='all' />
<style id='regina-main-style-inline-css' type='text/css'>
body,.icon-list li,h5,h6,.button,input[type="text"],textarea,#page-header .title,.ui-datepicker { font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif; }p small,h1, h2, h3, h4 { font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif; }#sidebar .widget_recent_entries ul li:before, #sidebar .widget_recent_comments ul li:before, #sidebar .widget_recent_comments ul li, #sidebar .widget_categories ul li:before, .icon-list li,.icon-list.grey li:before,p a,.button.outline,.button.white,.button.white.outline:hover,.google-map .content .company,#sub-header .social-link-list li a:hover,#navigation ul li a:hover,#breadcrumb ul li a:hover,#footer a a:hover,#footer .link-list a:hover,#footer .social-link-list li a:hover,#sub-footer .link-list li a:hover,#services-block .service .icon,#blog .post .title a:hover,#blog .post #post-navigation a:hover,#blog .post #share-post .social li.email a,#blog .post #post-author .content .social li a:hover,#blog #related-posts .post a .inner .date,#sidebar .recent-posts li a:hover,#sidebar .categories li a:hover,#sidebar .comments li a:hover,#sidebar .recent-posts li:before,#sidebar .categories li:before,#sidebar .comments li:before,#sidebar .comments li a,#comments-list ul.comments li.comment .content .meta,.contact-social li a:hover,.medic .medic-meta .inner .social li a:hover,.medic .medic-description .position,#sidebar .other-services li a:hover { color: #08cae8 !important; }.ui-datepicker-header, #wp-calendar caption, #appointment-form .input input[type="text"], #appointment-form .input textarea, .button, .button.outline:hover,.button.dark.outline:hover,hr,.google-map .marker .icon,#navigation .nav-search-box .search-btn,#call-out,#services-block .service:hover .icon,#team-block .team-member .hover,#home-testimonials,#blog .post .post-tags li a:hover,#blog #related-posts .post a:hover .inner,#sidebar .search.widget .search-btn,#sidebar .tags li a:hover,#related-team .team-member .hover,#sidebar .related-doctors .doctor a:hover,.accordion ul li a,.ui-datepicker-header,#team-block .team-member .hover .read-more { background: #08cae8; }#services-block .service:hover .icon {color: #FFF !important; }.nav-menu-search button.icon, .widget_search input[type="submit"], .modaloverlay .mt-modal, #appointment-form .input input[type="text"], #appointment-form .input textarea {background-color: #08cae8!important;}.button.outline,input[type="text"]:focus,textarea:focus,#navigation ul li a:hover,#services-block .service .icon { border-color: #08cae8; }::-moz-selection { background: #08cae8; }::selection { background: #08cae8; }#wpadminbar a, .macho_widget_contact a {color: #FFF !important; }.widget a:hover, .macho_widget_contact p:hover span, .macho_widget_contact p:hover a, .modaloverlay .mt-close, a.link, .view-full-post-btn:after, #sub-header p:hover span, #sub-header p a:hover, #sub-header p:hover a {color: #08cae8 !important;}nav ul li:hover, .nav-menu-search input#search {border-color: #08cae8 !important;}
</style>
<link rel='stylesheet' id='regina-modal-css-css'  href='http://www.vasana.lk/wp-content/themes/regina-pro/css/modal.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='regina-style-css'  href='http://www.vasana.lk/wp-content/themes/regina-pro/style.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='kirki_google_fonts-css'  href='https://fonts.googleapis.com/css?family=Lato%3Aregular%7CMontserrat%3Aregular&#038;subset' type='text/css' media='all' />
<script type='text/javascript' src='http://www.vasana.lk/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/accordions-wp/js/responsive-accordion.min.js?ver=1.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var pricingtable_ajax = {"pricingtable_ajaxurl":"http:\/\/www.vasana.lk\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/pricingtable/js/scripts.js?ver=4.8.8'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/pricingtable/ParaAdmin/js/ParaAdmin.js?ver=4.8.8'></script>
<link rel='https://api.w.org/' href='http://www.vasana.lk/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.vasana.lk/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.vasana.lk/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.8.8" />
<script>(function(w,c,g,d,t,m,a,b,z,u,n){function f(){w[d].push(arguments)}function y(){w[d]=[];q=c.getElementsByTagName(g)[0];n=c.createElement(g);n.async=!0;n.src='https://www.googletagmanager.com/gtag/js?id=UA-75655200-4&l='+d;q.parentNode.insertBefore(n,q);f('js',b);f('config','UA-75655200-4',{'custom_map':{'metric1':'cvdbm1'},'transport_type':'beacon','send_page_view':!1,'anonymize_ip':!0,'allow_display_features':!1,'link_attribution':!0});w[a]('unload',function(){f('event','page_view',{'cvdbm1':m(((new t())-b)/1000)})},!1)}u=!1;b=new t();w[a]('load',function(){for(z in w){if(w.hasOwnProperty(z)&&z.indexOf('ga-disable-')===0&&w[z]===!0){u=!0;break}}if(!u)y()},!1)})(window,document,'script','c69d3b65dc6d40db98d2e3ee3cc1fd37',Date,Math.floor,'addEventListener');</script>		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<link rel="icon" href="http://www.vasana.lk/wp-content/uploads/2017/10/cropped-lnew-1-32x32.png" sizes="32x32" />
<link rel="icon" href="http://www.vasana.lk/wp-content/uploads/2017/10/cropped-lnew-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="http://www.vasana.lk/wp-content/uploads/2017/10/cropped-lnew-1-180x180.png" />
<meta name="msapplication-TileImage" content="http://www.vasana.lk/wp-content/uploads/2017/10/cropped-lnew-1-270x270.png" />
	
</head>
<body class="home blog">





<!-- Site Preloader -->
<!-- <div id="page-loader">
	<div class="page-loader-inner">
		<div class="loader">
			<img src="http://www.vasana.lk/wp-content/uploads/2017/10/lnew.png">
		</div>
	</div>
</div> -->
<!-- END Site Preloader -->
<h6 style="color:black;">Date-
<?php 
 echo date('d-m-y');?>
 <p id="time"></p>
 </h6>
 <br>
 
<script>
setInterval(function() {
    var currentTime = new Date ( );    
    var currentHours = currentTime.getHours ( );   
    var currentMinutes = currentTime.getMinutes ( );   
    var currentSeconds = currentTime.getSeconds ( );
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
    var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
    document.getElementById("time").innerHTML = currentTimeString;
     document.getElementById("date").innerHTML = new Date();
}, 1000);
</script>
<header id="sub-header" class="">
	<div class="container">
		<div class="row">
			
			<!-- <div class="col-md-9 col-sm-12 col-xs-12 text-center-xs"> -->
									<!-- <div class="col-sm-5 pull-right"> -->
						
							<form role="search" method="post" class="search-form" style="margin-left:600px;">

								<input type="search" class="search-field" id="search" placeholder="Search" name="s"/>
                                <button class="icon"><i class="fa fa-search"></i></button>
                                
                            </form>
                            <form action="show.php" >
                            <button style="margin-right:20px;" type="submit" class="btn btn-success btn-block">User Profile</button>
                            </form>
                            <br>
                            <form action="login.php">
                            <button type="submit" class="btn btn-success btn-block" style="margin-left:10px;">Logout</button>
</form>
						</div>
					</div>
								
			</div><!--.col-xs-12-->
		</div><!--.row-->
	</div><!--.container-->

</header><!--#sub-header-->
<header id="header">
	     <div class="container">
		<div class="row">

			<div class="col-lg-2 col-sm-12">

            <div id="logo">
					<a href="#">
																					
                    <img src="logo.png" width="174">
																		</a>
				</div><!--#logo-->
				

				<button class="mobile-nav-btn"><span class="nc-icon-glyph ui-2_menu-bold"></span></button>
			</div><!--.col-lg-3-->

			<div class="col-lg-15 col-sm-20">
				<nav id="navigation">
					<ul class="main-menu">
<li id="menu-item-286" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-286"><a href="medicalcare.php">Home</a></li>
<li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="about.php" title="About e-hospital">ABOUT US</a></li>
<li id="menu-item-158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-158" title="select wards"><a href="#">WARDS</a>
<ul  class="sub-menu">
	<li id="menu-item-332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-332" ><a href="#mt-popup-modal1">MEDICINE WARD</a></li>
	<li id="menu-item-327" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-327"><a href="#mt-popup-modal1">EMERGENCY WARD</a></li>
	<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="#mt-popup-modal1">OUTDOOR WARD</a></li>
</ul>
</li>

<li id="menu-item-158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-158" title="life care"><a href="#">LIFECARE</a>
<ul  class="sub-menu">
	<li id="menu-item-332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-332"><a href="#mt-popup-modal3">BLOOD</a></li>
	<li id="menu-item-327" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-327"><a href="#mt-popup-modal222">POLIO</a></li>


	
</ul>
</li>

<li id="menu-item-158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-158" title="look for departments"><a href="#">DEPARTMENTS</a>
<ul  class="sub-menu">
	<li id="menu-item-332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-332"><a href="#">CARDIOLOGY</a></li>
	<li id="menu-item-327" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-327"><a href="#">DENTAL CARE</a></li>
	<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="#">EYE CARE</a></li>
    <li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="#">NEUROLOGY</a></li>
    <li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="#">UROLOGY</a></li>
    <li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="#">SKIN CARE</a></li>
    <li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="#">HEMATOLOGY </a></li>
    
    
</ul>
</li>

	<li><a href="#mt-popup-modal" title="Book Appointment"> Book Appointment</a></li>

   <li> <a href="#mt-popup-modal4" title="Register Here"> Registration</a></li>

   
						
					</ul>
					<!-- <div class="nav-search-box hidden-xs hidden-sm hidden-md hidden-lg">
						<input type="text" placeholder="Search">
						<button class="search-btn"><span class="nc-icon-outline ui-1_zoom"></span></button>
					</div> -->
				</nav><!--#navigation-->
			</div><!--.col-lg-9-->
		</div><!--.row-->
	</div><!--.container-->
</header><!--#header--><!-- Sub Header -->




	<!-- <section class="homepage-section">
		<div id="home-slider" class="clear">
			<ul class="bxslider clear"><li><img src="http://www.vasana.lk/wp-content/uploads/2017/10/nch-physician-group-1682x560.jpg" alt=""></li>
            <li><img src="http://www.vasana.lk/wp-content/themes/regina-pro/images/home/slide-1.jpg" alt=""></li>
            <li><img src="http://www.vasana.lk/wp-content/uploads/2017/10/Mother-hospital-ward1a-1682x560.jpg" alt=""></li>
            <li><img src="http://www.vasana.lk/wp-content/uploads/2017/10/0-1682x560.jpg" alt=""></li>
            <li><img src="http://www.vasana.lk/wp-content/uploads/2017/10/111-1-1682x560.jpg" alt=""></li></ul>			
            <div class="clear"></div>
		</div><!--#home-slider-->

		
	</section> 
    <br>
    <br>


    <section class="homepage-section">
        <div id="home-slider" class="clear" style="height:300px;">
            <ul class="bxslider clear"><li><img src="blood.jpg" alt=""></li>
            <li><img src="http://www.vasana.lk/wp-content/themes/regina-pro/images/home/slide-1.jpg" alt=""></li>
            <li><img src="getty.jpg" alt=""></li><li><img src="http://www.vasana.lk/wp-content/uploads/2017/10/0-1682x560.jpg" alt=""></li>
            <li><img src="doctor.jpg" alt=""></li></ul>
                <div class="clear"></div>
        </div><!--#home-slider-->

        
    </section>

&nbsp;
<section class="homepage-section " style="background:rgba(255,255,255,0.2)">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="section-info"><h1>E-HOSPITAL WELCOMES YOU</h1>
<hr></div></div></div></div>
<div class="container">
	<div class="row">
		<ul class="images">
<li><img data-original="http://www.vasana.lk/wp-content/uploads/2017/10/NEWPP.jpg" class="lazy"></li>
<li><img data-original="http://www.vasana.lk/wp-content/uploads/2017/10/1.jpg" class="lazy"></li>
</ul>
</div></div></section>
<section class="homepage-section " style="background:rgba(255,255,255,0.2)">
<div class="container"><div class="row"><div class="col-xs-12">
<div class="section-info"><h2>SERVICES</h2><hr></div>
</div></div></div>
<div class="container"><div class="row">
<div id="services-block" class="text-center home content-block">
<div class="col-lg-3 col-sm-3"><div class="service">
<div class="icon"><a href="/vasana/PHARMACY" class="link"><img src="http://www.vasana.lk/wp-content/uploads/2017/10/People-Pharmacist-Female-icon.png"></a> </div>
 <h3>PHARMACY</h3><p>We provide 24 hours pharmacy</p><br>
 <a href="/vasana/PHARMACY" class="link small">Read more</a></div><!--.service-->
 </div><!--.col-lg-3-->
 <div class="col-lg-3 col-sm-3"><div class="service"><div class="icon"><a href="vasana/laboratory" class="link"><img src="http://www.vasana.lk/wp-content/uploads/2017/10/microscope_1-512.png"></a> </div>
  <h3>LABORATOARY</h3><p>Our laboratory professionals work closely with the medical staff.</p><br>
  <a href="vasana/laboratory" class="link small">Read more
   </a></div><!--.service-->
   </div><!--.col-lg-3-->
   
   <div class="col-lg-3 col-sm-3">
   <div class="service"><div class="icon"><a href="" class="link"><img src="http://www.vasana.lk/wp-content/uploads/2017/10/dental_icon.png"></a> </div> <h3>DENTAL CARE</h3><p>Our Dental Clinic puts perfect smiles on our patient&rsquo;s faces.</p><br><a href="vasana/dental-unit" class="link small">Read more
    <span class="nc-icon-glyph arrows-1_bold-right"></span></a></div><!--.service--></div><!--.col-lg-3--><div class="clear"></div>
    <div class="col-lg-3 col-sm-6"><div class="service"><div class="icon"><a href="" class="link"><img src="http://www.vasana.lk/wp-content/uploads/2017/10/1.png"></a> </div> <h3>ULTRASOUND SCAN</h3><p>The Radiology Department is visited by the best consultant Radiologists.</p><br>
    <a href="vasana/ultrasound-scan" class="link small">Read more
    </a></div><!--.service--></div><!--.col-lg-3-->
    <div class="col-lg-3 col-sm-6">
    <div class="service">
    <div class="icon"><a href="" class="link"><img src="http://www.vasana.lk/wp-content/uploads/2017/10/Medical_Supervision__Treatment-512.png"></a> </div>
     <h3>EMERGENCY TREATMENT UNIT</h3><p>Receiving Emergency Treatment and Resuscitation</p><br>
     <a href="vasana/emergency-treatment-unit" class="link small">Read more
      </a></div><!--.service--></div><!--.col-lg-3-->
      <div class="col-lg-3 col-sm-3">
      <div class="service">
      <div class="icon"><a href="" class="link"><img src="http://www.vasana.lk/wp-content/uploads/2017/10/574-200.png"></a> </div> <h3>PATIENT DEPARTMENT</h3><p>Provide 24 hour service for patients</p><br>
      <a href="vasana/outpatient-department" class="link small">Read more 
      </a></div><!--.service--></div><!--.col-lg-3-->
      <div class="col-lg-3 col-sm-3">
      <div class="service">
      <div class="icon"><a href="#" class="link"><img src="eye.png"></a> </div> <h3>EYE CARE</h3><p>We care for your eyes to see a better world</p><br>
      <a href="#" class="link small">Read more
      </span></a></div><!--.service--></div><!--.col-lg-3-->
      <div class="col-lg-3 col-sm-6">
      <div class="service">
      <div class="icon"><a href="#" class="link"><img src="canteen.png"></a> </div> <h3>CANTEEN SERVICE</h3><p>We provide good food service.We also provide 24hrs canteen service.</p><br><a href="#" class="link small">Read more
      </a></div><!--.service--></div><!--.col-lg-3-->
      <div class="col-lg-3 col-sm-3">
      <div class="service">
      <div class="icon"><a href="#" class="link"><img src="http://www.vasana.lk/wp-content/uploads/2017/10/0006-512.png"></a> </div> 
      <h3>AMBULANCE</h3><p>We also provide ambulance service to all places.We help people without taking any charge.</p><br><a href="#" class="link small">Read more 
      </a></div><!--.service--></div><!--.col-lg-3-->
      
</div></div></section>
<section class="homepage-section has-padding" style="background:rgba(255,255,255,0.2)">
<div class="container"><div class="row">
<div class="col-xs-12">
<div class="section-info"><h2>BEST AND QUALITY CONSULTANT</h2><hr></div></div></div></div>
<div class="container">
<div class="row">
<div id="team-block" class="text-center">
<div class="col-lg-2 col-sm-6">
<div class="team-member"><img data-original="http://www.vasana.lk/wp-content/uploads/2017/10/images-1.jpg" class="lazy">
<div class="inner"><h4 class="name"></h4><p class="position"><small></small></p></div>
<div class="hover"><div class="description"><p></p></div>
<div class="read-more"><a href="" class=""></a></div></div><!--.hover--></div><!--.team-member--></div><!--.col-lg-3-->
<div class="col-lg-2 col-sm-6">
<div class="team-member"><img data-original="http://www.vasana.lk/wp-content/uploads/2017/10/images-1.jpg" class="lazy">
<div class="inner"><h4 class="name"></h4><p class="position"><small></small></p></div>
<div class="hover"><div class="description"><p></p></div><div class="read-more"><a href="" class=""></a></div></div><!--.hover--></div><!--.team-member--></div><!--.col-lg-3-->
<div class="col-lg-2 col-sm-6">
<div class="team-member"><img data-original="http://www.vasana.lk/wp-content/uploads/2017/10/images-1.jpg" class="lazy">
<div class="inner"><h4 class="name"></h4><p class="position"><small></small></p></div><div class="hover">
<div class="description"><p></p></div><div class="read-more"><a href="" class="">></a></div></div><!--.hover--></div><!--.team-member--></div><!--.col-lg-3-->
<div class="col-lg-2 col-sm-6">
<div class="team-member"><img data-original="http://www.vasana.lk/wp-content/uploads/2017/10/images-1.jpg" class="lazy">
<div class="inner"><h4 class="name"></h4><p class="position"><small></small></p></div>
<div class="hover"><div class="description"><p></p></div>
<div class="read-more"><a href="" class=""></a></div></div><!--.hover--></div><!--.team-member--></div><!--.col-lg-3-->
<div class="clear"></div>

</div></div></section>
<section class="homepage-section has-padding" style="background:rgba(8,154,216,0.44)">
<div class="container"><div class="row"><div class="row">
<div class=" col-md-6"><div class="testimonials">
<div id="testimonials-slider">
<li><p class="quote">YOUR HEALTH. OUR COMMITMENT.</p><img src="http://www.vasana.lk/wp-content/uploads/2017/10/chairman.png" width="90"><h5 class="name"></h5><p class="position">CHAIRMAN</p></li>
<li><p class="quote">OUR AIM IS SATISFICATION SERVICE</p><h5 class="name"></h5><p class="position"><span class="glyphicon glyphicon-user"></span> CHIEF EXECUTIVE OFFICER</p></li></ul></div><!--#testimonials-slider--></div><!--.testimonials--><div class="clear"></div></div>
<div class=" col-md-6"><ul class="images"> <li><img data-original="http://www.vasana.lk/wp-content/uploads/2017/10/1.jpg" class="lazy"></li> <li><img data-original="http://www.vasana.lk/wp-content/uploads/2017/10/NEWPP.jpg" class="lazy"></li> </ul>
</div>
</div>
</div></div></section>
<!-- <section class="homepage-section " style="background:rgba(255,255,255,0.2)">
<div class="container">
<div class="row">
<p><strong><span style="color: #ff00ff;">OUR TEAM MEMBERS</span></strong></p>
<div class="sb-image-hover-container">
<div class="sb-image-hover-row ">
<div data-av-animation="No Animation" class="sb-image-hover-responsive-3  sb-image-animation-5  sb-image-padding-5 ">
                <div class="sb-image-map-5">
                    <div class="sb-image-map-absulate">
                       <div class="sb-image-hover sbimagetabhover sb-image-hover-5 sb-image-hover-5-5 sb-general-effects-4 sb-left-to-right"><div class="sb-image-img">
                             <img src="team.jpg">
                         </div>
                         <div class="sb-image-info sbimagetabhover"  >
                                <div class="sb-image-data">
                                    <div class="sb-image-title">APPSTONE PRIVATE LIMITED</div>
                                    <div class="sb-image-desc">SILICON INSTITUTE OF TECHNOLOGY</div>
                                    <a  href="#" class="sb-image-button"></a>
                                </div>
                               
                            </div>   
                                </div>
                        

                         

                         
                     </div>
                     

                     
                </div>  -->
                <section class="homepage-section has-padding" style="background:rgba(255,255,255,0.2)">
<div class="container"><div class="row">
<div class="col-xs-12">
<div class="section-info"><h2>TEAM MEMBERS</h2><hr></div></div></div></div>
<div class="container">
<div class="row">
<div id="team-block" class="text-center">
<div class="col-lg-2 col-sm-6">
<div class="team-member"><img data-original="abhi.jpg" class="lazy">
<div class="inner"><h4 class="name"></h4><p class="position"><small></small></p></div>
<div class="hover"><div class="description"><p>Abhinandan Roy
Silicon Institute Of Techology
Work in project-Front End </p></div>
<div class="read-more"><a href="" class=""></a></div></div><!--.hover--></div><!--.team-member--></div><!--.col-lg-3-->
<div class="col-lg-2 col-sm-6">
<div class="team-member"><img data-original="subhra.jpg" class="lazy">
<div class="inner"><h4 class="name"></h4><p class="position"><small></small></p></div>
<div class="hover"><div class="description"><p>Subhra Subhasmita Dey
Silicon Institute Of Technology
Work In project-Back End</p></div><div class="read-more"><a href="" class=""></a></div></div><!--.hover--></div><!--.team-member--></div><!--.col-lg-3-->
<div class="col-lg-2 col-sm-6">
<div class="team-member"><img data-original="ranju.jpg" class="lazy">
<div class="inner"><h4 class="name"></h4><p class="position"><small></small></p></div><div class="hover">
<div class="description"><p>Ranju Das
Silicon Institute Of Technology
Work in Project-Front End</p></div><div class="read-more"><a href="" class="">></a></div></div><!--.hover--></div><!--.team-member--></div><!--.col-lg-3-->
<div class="col-lg-2 col-sm-6">
<div class="team-member"><img data-original="shobha.jpg" class="lazy">
<div class="inner"><h4 class="name"></h4><p class="position"><small></small></p></div>
<div class="hover"><div class="description"><p>Shobha Kumari
Silicon Institute Of Technology
Work in Project-Back End</p></div>
<div class="read-more"><a href="" class=""></a></div></div><!--.hover--></div><!--.team-member--></div><!--.col-lg-3-->
<div class="clear"></div>

</div></div></section>

                
               <style>
        .sb-image-hover-5-5{
            position: relative;
            width: 100%;
            height: 100%;
            -webkit-perspective: 900px;
            -moz-perspective: 900px;
            perspective: 900px;
        }
        .sb-image-hover-5-5 .sb-image-img {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }
        .sb-image-hover-5-5 .sb-image-info {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            text-align: center;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            display: table;
        }
        .sb-image-hover-5-5 .sb-image-img {
            width: 100%;
            float: left;
            visibility: visible;
            opacity: 1;
            z-index:11;
            -webkit-transition: all 0.4s ease-out;
            -moz-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
        }
        .sb-image-hover-5-5 .sb-image-info {
            opacity: 0;
            background-color:rgba(0, 143, 171, 1);
            visibility: hidden;
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;

        }
        .sb-image-hover-5-5 .sb-image-info .sb-image-data{
            display: table-cell;
            vertical-align: middle; text-align: center;        }
        .sb-image-hover-5-5 .sb-image-info .sb-image-title {
            color: #FFF;
        }
        .sb-image-hover-5-5 .sb-image-info .sb-image-desc {
            color: #FFF;
        }
        .sb-image-hover-5-5 a.sb-image-button{
            background: #b8258e;
            color: #FFF;
            margin: 0 auto;                    }
        .sb-image-hover-5-5 a.sb-image-button:hover{
            background: #FFF;
            color: #b8258e;
        }
        .sb-image-hover-5-5:hover .sb-image-info,
        .sb-image-hover-5-5.sb-touch-hover .sb-image-info{
            visibility: visible;
            opacity: 1;

        }
        .sb-image-hover-5-5.sb-left-to-right .sb-image-img {
            -webkit-transform: scale(1) translateX(0);
            -moz-transform: scale(1) translateX(0);
            -ms-transform: scale(1) translateX(0);
            -o-transform: scale(1) translateX(0);
            transform: scale(1) translateX(0);
        }

        .sb-image-hover-5-5.sb-left-to-right:hover .sb-image-img,
        .sb-image-hover-5-5.sb-left-to-right.sb-touch-hover .sb-image-img{
            -webkit-transform: scale(0.5) translateX(100%);
            -moz-transform: scale(0.5) translateX(100%);
            -ms-transform: scale(0.5) translateX(100%);
            -o-transform: scale(0.5) translateX(100%);
            transform: scale(0.5) translateX(100%);
        }

        .sb-image-hover-5-5.sb-right-to-left .sb-image-img {
            -webkit-transform: scale(1) translateX(0);
            -moz-transform: scale(1) translateX(0);
            -ms-transform: scale(1) translateX(0);
            -o-transform: scale(1) translateX(0);
            transform: scale(1) translateX(0);
        }
        .sb-image-hover-5-5.sb-right-to-left:hover .sb-image-img,
        .sb-image-hover-5-5.sb-right-to-left.sb-touch-hover .sb-image-img {
            -webkit-transform: scale(0.5) translateX(-100%);
            -moz-transform: scale(0.5) translateX(-100%);
            -ms-transform: scale(0.5) translateX(-100%);
            -o-transform: scale(0.5) translateX(-100%);
            transform: scale(0.5) translateX(-100%);
        }

        .sb-image-hover-5-5.sb-top-to-bottom .sb-image-img {
            -webkit-transform: scale(1) translateY(0);
            -moz-transform: scale(1) translateY(0);
            -ms-transform: scale(1) translateY(0);
            -o-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0);
        }
        .sb-image-hover-5-5.sb-top-to-bottom:hover .sb-image-img,
        .sb-image-hover-5-5.sb-top-to-bottom.sb-touch-hover .sb-image-img {
            -webkit-transform: scale(0.5) translateY(100%);
            -moz-transform: scale(0.5) translateY(100%);
            -ms-transform: scale(0.5) translateY(100%);
            -o-transform: scale(0.5) translateY(100%);
            transform: scale(0.5) translateY(100%);
        }

        .sb-image-hover-5-5.sb-bottom-to-top .sb-image-img {
            -webkit-transform: scale(1) translateY(0);
            -moz-transform: scale(1) translateY(0);
            -ms-transform: scale(1) translateY(0);
            -o-transform: scale(1) translateY(0);
            transform: scale(1) translateY(0);
        }
        .sb-image-hover-5-5.sb-bottom-to-top:hover .sb-image-img,
        .sb-image-hover-5-5.sb-bottom-to-top.sb-touch-hover .sb-image-img{
            -webkit-transform: scale(0.5) translateY(-100%);
            -moz-transform: scale(0.5) translateY(-100%);
            -ms-transform: scale(0.5) translateY(-100%);
            -o-transform: scale(0.5) translateY(-100%);
            transform: scale(0.5) translateY(-100%);
        }

    </style>

    </div></div> </div>    <style>
        .sb-image-hover-5, 
        .sb-image-hover-5 .sb-image-img, .sb-image-hover-5 a .sb-image-img,
        .sb-image-hover-5 .sb-image-img:before, .sb-image-hover-5 a .sb-image-img:before,
        .sb-image-hover-5 .sb-image-img img, .sb-image-hover-5 a .sb-image-img img,
        .sb-image-hover-5 .sb-image-info, .sb-image-hover-5 a .sb-image-info{
            border-radius: 50%;
            -moz-border-radius:  50%;
            -webkit-border-radius:  50%;
        }
        .sb-image-padding-5{
            padding: 20px;
        }
        .sb-image-map-5 {
            max-width: 200px;
            width: 100%;
            margin: 0 auto;
            position: relative;
        }
        .sb-image-map-5:after {
            padding-bottom: 100%;
            content: "";
            display: block;
        }
        .sb-image-animation-5 {
            animation-duration: 2s;
        }
        .sb-image-hover-5 .sb-image-info .sb-image-data{
            padding: 20px; 
        }
        .sb-image-hover-5 .sb-image-img,
        .sb-image-hover-5 .sb-image-info{
            box-shadow: 0 0 0px  0 rgba(0, 148, 126, 0.36);
        }
        .sb-image-hover-5 .sb-image-img:before {
            position: absolute;
            display: block;
            content: '';
            width: 100%;
            height: 100%;
            box-shadow: inset 0 0 0 0px rgba(49, 66, 222, 0.2);
        }
        .sb-image-hover-5 .sb-image-info .sb-image-title {
            font-size: 20px;
            font-weight: 600;
            padding-bottom: 5px;
            margin-bottom: 10px;
            margin-top: 0;
            line-height: 120%;
            font-family: "Open Sans";
            display: inline-block;
            font-style: normal;
                    }
        .sb-image-hover-5 .sb-image-info .sb-image-desc {
            font-size: 16px;
            font-weight: 300;
            margin-bottom: 20px;
            margin-top: 0;
            line-height: 120%;
            width: 100%;
            float: left;
            font-family: "Open Sans";
            font-style: normal;
        }
        
        .sb-image-hover-5 a.sb-image-button{
            padding: 10px 10px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            font-weight: 300;
            font-size: 14px;
            font-family: "Open Sans";
            font-style: normal;
            text-decoration: none;
            display:inline-block;
        }
            </style>
    
<div class="mt-separator double" style="margin-top: 0px; margin-bottom: 1px;border-color: #ddd"></div>
</div></div></section>

	<div id="mt-popup-modal" class="modaloverlay">
		<div class="mt-modal">
			<a href="#close" class="mt-close">&times;</a>

			<h1>Make an appointment and we’ll contact you.</h1>
			<div id="appointment-form">
            <?php 
 echo date('d-m-y');?>
            <form action="dataappointment.php" method="post" enctype="multipart/form-data">
DEPARTMENT NAME: <input type="text" name="dname" required="" placeholder="Enter Department Name"><br><br>
NAME: <input type="text" name="name" required="" placeholder="Enter Patient Name"><br><br>
FATHERS NAME: <input type="text" name="fname" placeholder="Enter Fathers Name"><br><br>
AGE: <input type="text" name="age" placeholder="Enter Your Age"><br><br>
ADDRESS: <input type="text" name="address" placeholder="Enter Patients Address"><br><br>
GENDER: <input type="radio" name="gender" value="male" checked="">MALE
<input type="radio" name="gender" value="female">FEMALE
<input type="radio" name="gender" value="other">OTHER<br><br>
EMAIL ID:<input type="email" name="email" required="" placeholder="Enter Your Email Id"><br><br>
MOBILE NUMBER: <input type="text" name="mob" required="" placeholder="Enter Your Mobile/Phone Number"><br><br>
DATE OF ISSUE: <input type="date" name="date"><br><br>
ISSUE TIME: <input type="text" name="time"><br><br>
<input type="submit" name="submit">
</form>
							</div>

			<div class="succes" style="display:none"><h1>Message Sent</h1></div>

		</div>
	</div>






<div id="mt-popup-modal222" class="modaloverlay">
		<div class="mt-modal">
			<a href="#close" class="mt-close">&times;</a>

			
			<h4>Register For Polio Here</h4>
			<div id="polio-form">
            <?php 
 echo date('d-m-y');?>

            
<form action="datapolio.php" method="post" enctype="multipart/form-data">
 NAME: <input type="text" name="name" required="" placeholder="Enter Childs Name"><br><br>
 FATHERS NAME: <input type="text" name="fname" required="" placeholder="Enter Fathers Name"><br><br>
 MOTHERS NAME: <input type="text" name="mname" required="" placeholder="Enter Mothers Name"><br><br>
 DATE OF BIRTH: <input type="date" name="dob"><br><br>
 GENDER: <input type="radio" name="gender" value="male">MALE
 <input type="radio" name="gender" value="female">FEMALE
 <input type="radio" name="gender" value="other">OTHER<br><br>
 ADDRESS: <input type="text" name="address" required="" placeholder="Enter Your Address"><br><br>
 CITY: <input type="text" name="city" required="" placeholder="Enter Your City">
 STATE: <input type="text" name="state" required="" placeholder="Enter Your State">
 PIN: <input type="text" name="pin" required="" placeholder="Enter your Pin Code"><br><br>
 EMAILID: <input type="email" name="email" placeholder="Enter Your Email Id"><br><br>
 MOBILE NUMBER: <input type="text" name="mobile" required="" placeholder="Enter Your Mobile/Phone Number"><br><br>
<input type="submit" name="submit">
</form>
							</div>

			<div class="succes" style="display:none"><h1>Message Sent</h1></div>

		</div>
	</div>



















    <br>
    <div class="mt-separator double" style="margin-top: 0px; margin-bottom: 1px;border-color: #ddd"></div>
</div></div></section>

	<div id="mt-popup-modal1" class="modaloverlay">
		<div class="mt-modal">
			<a href="#close" class="mt-close">&times;</a>

			<h1>Make ticket for ward</h1>
			<div id="ward-form">
            <?php 
 echo date('d-m-y');?>
            <form action="dataward.php" method="post" enctype="multipart/form-data">
WARD NAME: <input type="text" name="dname" required="" placeholder="Enter Department Name"><br><br>
PATIENT NAME: <input type="text" name="pname" required="" placeholder="Enter Patient Name"><br><br>
AGE: <input type="text" name="age" placeholder="Enter Your Age"><br><br>
ADDRESS: <input type="text" name="address" placeholder="Enter Patients Address"><br><br>
CITY: <input type="text" name="city" required="" placeholder="ENTER YOUR CITY NAME"><br><br>
STATE: <input type="text" name="state" required="" placeholder="ENTER YOUR STATE NAME"><br><br>
PIN CODE: <input type="text" name="pin" required="" placeholder="ENTER YOUR PIN CODE"><br><br>
GENDER: <input type="radio" name="gender" value="male" checked="">MALE
<input type="radio" name="gender" value="female">FEMALE
<input type="radio" name="gender" value="other">OTHER<br><br>
MOBILE NUMBER: <input type="text" name="mob" required="" placeholder="Enter Your Mobile/Phone Number"><br><br>
DATE OF ISSUE: <input type="date" name="doi"><br><br>

<input type="submit" name="submit">
</form>
							</div>

			<div class="succes" style="display:none"><h1>Message Sent</h1></div>

		</div>
	</div>

    <br>

    <div class="mt-separator double" style="margin-top: 0px; margin-bottom: 1px;border-color: #ddd"></div>
</div></div></section>


	<div id="mt-popup-modal3" class="modaloverlay">
    <div class="container">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
		<div class="mt-modal" style="height:440px;  ">
        
			<a href="#close" class="mt-close">&times;</a>
            
			<h4>Search For The Blood Group You Want</h4>
			<div id="blood-form">
            <?php 
 echo date('d-m-y');?>

            <form action="datablood.php" method="post" enctype="multipart/form-data">
NAME: <input type="text" name="name" required="" placeholder="Enter Your Name"><br><br>
BLOOD TYPE: <select name="bloodtype">
<option value="">select blood group</option>
<option value="a+">A+</option>
<option value="a-">A-</option>
<option value="b+">B+</option>
<option value="b-">B-</option>
<option value="o+">O+</option>
<option value="o-">O-</option>
<option value="ab+">AB+</option>
<option value="ab-">AB-</option>
</select><br><br>
GENDER: <input type="radio" name="gender" value="male">MALE
<input type="radio" name="gender" value="female">FEMALE
<input type="radio" name="gender" value="other">OTHER<br><br>
MOBILE NUMBER: <input type="text" name="mob" required="" placeholder="Enter Your Mobile/Phone Number"><br><br>
EMAIL: <input type="email" name="email" required="" placeholder="Enter Your Email Id"><br><br>

<input type="submit" name="submit">
</form>
							</div>
</div>
</div>

			<div class="succes" style="display:none"><h1>Message Sent</h1></div>

		</div>
	</div>

    <br>

    
    <br>

    <div class="mt-separator double" style="margin-top: 0px; margin-bottom: 1px;border-color: #ddd"></div>
</div></div></section>

	<div id="mt-popup-modal4" class="modaloverlay">
		<div class="mt-modal">
			<a href="#close" class="mt-close">&times;</a>

			<h1>REGISTER HERE!!</h1>
			<div id="register-form">
            <?php 
 echo date('d-m-y');?>
 <p id="time"></p>
<script>

setInterval(function() {
    var currentTime = new Date ( );    
    var currentHours = currentTime.getHours ( );   
    var currentMinutes = currentTime.getMinutes ( );   
    var currentSeconds = currentTime.getSeconds ( );
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
    var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
    currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
    currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
    document.getElementById("time").innerHTML = currentTimeString;
     document.getElementById("date").innerHTML = new Date();
}, 1000);
</script>
<button><a href="medicalcare.php">LOGOUT</a></button>
<center>

<?php
//include('config.php');

$connect=mysqli_connect('localhost','root','','medical');

  if ($connect==true) {
    if(isset($_POST['submit'])){

$name = trim($_POST['name']);
$mob= trim($_POST['mob']);
$moblength=strlen($mob);
$email= trim($_POST['email']);
$pwd = trim($_POST['password']);
$cpwd= trim($_POST['cpassword']);
$ok=strlen($password);
$padd=trim($_POST['praddr']);
$paddr=trim($_POST['peaddr']);
$city=trim($_POSt['city']);
$state=trim($_POST['state']);
$pin=trim($_POST['pin']);
$dob= $_POST['dob'];
$gender = $_POST['gender'];
$bloodg=$_POST['bloodgroup'];
$iproof=$_POST['identity'];
$number=trim($_POST['text']);

$otp=rand();

$query = mysqli_query($connect,"INSERT INTO project(name,mob,email,password,praddr,peaddr,city,state,pin,dob,gender,bloodgroup,identity,number)
VALUES('$name','$mob','$email','$pwd','$padd','$paddr','$city','$state','$pin','$dob','$gender','$bloodg','$iproof','$number')");
$row=mysqlI_fetch_assoc($query);

if (!empty($name)) {
    if (preg_match("/^[a-zA-Z ]+$/", $name)) {
      if (!empty($mob)) {
        if ($moblength==10){
         if (preg_match("/^[0-9]+$/", $mob)){
          if($ok>4){
           if(preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z!@#$%]{8,12}+$/', $pwd)){
            if ($pwd===$cpwd) {
             if ($email!==$row['email']) {
              //include('table.php');
              //include('action.php');
            }
            else{ $erroremail="email already exits";   }
          }
          else{ $errorcpwd="password mismatched";   }
        }else {$errorpwd="password wrongformat";}
      }
      else{ $errorpwd="please enter password more than 4 ";   }
    }
    else{$errormob="please enter mobile num only digit"; }
  }
  else { $errormob="please enter mobile num only 10 digit";}
}
else
  { $errormob="please enter mobile num";}
}
else
{ $errorname="wrong format";}
}
else { $errorname="please enter name";}
}
}
?>


<h3><b>WELCOME TO REGISTRATION PAGE</b></h3>
<form action="dataregister.php" method="post" enctype="multipart/form-data">

NAME: <input type="text" name="name" required="" placeholder="ENTER YOUR NAME"><br><br>
MOBILE NUMBER: <input type="text" name="mob" required="" placeholder="ENTER YOUR MOBILE NUMBER"><br><br>
EMAIL: <input type="email" name="email" required="" placeholder="ENTER YOUR EMAIL"><br><br>
<div class="form-group">
    <label for="Password">PASSWORD</label>
<input type="password" class="form-control" name="password" required="" placeholder="ENTER YOUR PASSWORD">
</div>
<div class="form-group">
    <label for="CPassword">CONFIRM PASSWORD</label>
<input type="password" class="form-control" name="cpassword" required="" placeholder="CONFIRM YOUR PASSWORD">
</div>
PRESENT ADDRESS: <input type="text" name="praddr" required="" placeholder="ENTER YOUR PRESENT ADDRESS"><br><br>
PERMANENT ADDRESS: <input type="text" name="peaddr" required="" placeholder="ENTER YOUR PERMANENT ADDRESS"><br><br>
CITY: <input type="text" name="city" required="" placeholder="ENTER YOUR CITY NAME">
STATE: <input type="text" name="state" required="" placeholder="ENTER YOUR STATE NAME">
PIN CODE: <input type="text" name="pin" required="" placeholder="ENTER YOUR PIN CODE"><br><br>
DATE OF BIRTH: <input type="date" name="dob" required=""><br><br>
GENDER: <input type="radio" name="gender" value="male">MALE
<input type="radio" name="gender" value="female">FEMALE
<input type="radio" name="gender" value="other">OTHER<br><br>
BLOOD GROUP: <select name="bloodgroup">
<option value="">enter blood group</option>
<option value="a+">A+</option>
<option value="a-">A-</option>
<option value="b+">B+</option>
<option value="b-">B-</option>
<option value="o+">O+</option>
<option value="o-">O-</option>
<option value="ab+">AB+</option>
<option value="ab-">AB-</option>
</select><br><br>
IDENTITY PROOF: <select name="identity">
<option value="">please select</option>
<option value="aadharcard">AADHARCARD</option>
<option value="pancard">PANCARD</option>
</select>
<input type="text" name="text" placeholder="ENTER YOUR CARD NUMBER"><br><br>

<input type="submit" name="submit">


</form>
							</div>

			<div class="succes" style="display:none"><h1>Message Sent</h1></div>

		</div>
	</div>

	<footer id="footer">
		<div class="container">
			<div class="row">
				
    
    
    <div class="col-sm-4"><div id="macho_widget_contact-3" class="widget block macho_widget_contact"><div class="fixed">
    <p>&nbsp;&nbsp; <a href="tel:7504133754">
    <span class="glyphicon glyphicon-earphone"></span> Contact Us- 7504133754</a></p></div>
    
    <div class="container">
			<div class="row">
    <div class="col-sm-4">
    <p>&nbsp;&nbsp;<a href="#">
    <span class="glyphicon glyphicon-hand-right"></span> - www.silicon.ac.in</a></p>
    
<span  class="glyphicon glyphicon-map-marker" style="float:left;"></span><p style="float:left; margin:-7px 0 0 10px;">
Silicon Institute Of Technology,<br>
Chandka Hills,<br>
Patia,Bhubaneswar<br></p>
<div class="clear"></div></div>

<div class="container">
			<div class="row">
<div class="col-sm-4">
<button><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook-official" style="font-size:48px;color:blue;"></i></a></button>
<button><a href="http://www.instagram.com" target="_blank"><i class="fa fa-instagram" style="font-size:48px;color:red"></i></a></button>  
<button><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter-square" style="font-size:48px;color:royalblue;"></i></a></button> 
<button><a href="http:www.linkedin.com" target="_blank"><i class="fa fa-linkedin-square" style="font-size:48px;color:skyblue;"></i></a></button>
<button><a href="http:www.gmail.com" target="_blank"><i class="fa fa-google-plus-official" style="font-size:48px;color:orangered;"></i></a></button>
</div>
                    </div><!--.row-->
        </div><!--.container-->
        </div><!--.row-->
        </div><!--.container-->
        </div><!--.row-->
		</div><!--.container-->
	</footer><!--#footer-->


<footer id="sub-footer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
	<ul id="footer-menu" class="link-list hidden-xs"><li id="menu-item-470" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-470"><a href="http://www.vasana.lk/no-access/">No Access</a></li>
</ul>			
</div>
		</div><!--.row-->
	</div><!--.container-->
</footer><!--#sub-footer-->

<link rel='stylesheet' id='sb-image-style-css'  href='http://www.vasana.lk/wp-content/plugins/sb-image-hover-effects/public/style.css?ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='iheu-google-font-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%7COpen+Sans%7COpen+Sans&#038;ver=4.8.8' type='text/css' media='all' />
<link rel='stylesheet' id='wpgmp-frontend-css'  href='http://www.vasana.lk/wp-content/plugins/wp-google-map-plugin/assets/css/frontend.css?ver=4.8.8' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/www.vasana.lk\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.9'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/livemesh-siteorigin-widgets/assets/js/modernizr-custom.min.js?ver=1.6.1'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/livemesh-siteorigin-widgets/assets/js/jquery.waypoints.min.js?ver=1.6.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var lsow_settings = {"mobile_width":"780","custom_css":""};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/livemesh-siteorigin-widgets/assets/js/lsow-frontend.min.js?ver=1.6.1'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/macho-shortcode-manager/js/front/lazyLoad.js?ver=1.0.0'></script>
<script type='text/javascript' src='//maps.google.com/maps/api/js?sensor=false&#038;key&#038;ver=1.0.0'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/macho-shortcode-manager/js/front/easypiechart.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/macho-shortcode-manager/js/front/scripts.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/themes/regina-pro/js/plugins/bxslider/bxslider.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/themes/regina-pro/js/plugins/gmap/gmaps.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/themes/regina-pro/js/plugins/lazyload/lazyload.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/themes/regina-pro/js/plugins/waypoints/waypoints.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/themes/regina-pro/js/pace/pace.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/themes/regina-pro/js/preloader.js?ver=1.0.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var regina = {"ajax_url":"http:\/\/www.vasana.lk\/wp-admin\/admin-ajax.php","autoplay":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/themes/regina-pro/js/custom.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?key=AIzaSyDBLr_jAPqc0CB6l-c7ebtgvPo0sCnyWQU&#038;libraries=geometry%2Cplaces%2Cweather%2Cpanoramio%2Cdrawing&#038;language=en&#038;ver=4.8.8'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpgmp_local = {"all_location":"All","show_locations":"Show Locations","sort_by":"Sort by","wpgmp_not_working":"not working...","place_icon_url":"http:\/\/www.vasana.lk\/wp-content\/plugins\/wp-google-map-plugin\/assets\/images\/icons\/"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/wp-google-map-plugin/assets/js/maps.js?ver=2.3.4'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-includes/js/wp-embed.min.js?ver=4.8.8'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/sb-image-hover-effects/public/viewportchecker.js?ver=4.8.8'></script>
<script type='text/javascript' src='http://www.vasana.lk/wp-content/plugins/wp-google-map-plugin/assets/js/frontend.js?ver=4.8.8'></script>
</body>
</html>