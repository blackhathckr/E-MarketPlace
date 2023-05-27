<?php
session_start();
if(!isset($_SESSION['log']))
{
    header("Location:guest.php");
}
?>

<!doctype html>
<html lang="en-US" >
<head>
<link rel="icon" href="assets/fav_icon/favicon.ico">
	<meta charset="UTF-8" />
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

	<!-- This site is optimized with the Yoast SEO plugin v18.9 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Search Services | Group Buying service| Echobuyer</title>
	<meta name="description" content="Looking to save money on your next purchase? Check out echobuyer.com! This site lets you buy items together with other people in your area, making it a great way to get deals on stuff you wouldn&#039;t be able to find alone. Just enter the product you want to buy and how many people you want to buy it with, and echobuyer will take care of the rest." />
	<link rel="canonical" href="https://echobuyer.com/search-services/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Search Services | Group Buying service| Echobuyer" />
	<meta property="og:description" content="Looking to save money on your next purchase? Check out echobuyer.com! This site lets you buy items together with other people in your area, making it a great way to get deals on stuff you wouldn&#039;t be able to find alone. Just enter the product you want to buy and how many people you want to buy it with, and echobuyer will take care of the rest." />
	<meta property="og:url" content="https://echobuyer.com/search-services/" />
	<meta property="og:site_name" content="Echo Buyer" />
	<meta property="article:modified_time" content="2022-05-09T15:39:57+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://echobuyer.com/#website","url":"https://echobuyer.com/","name":"Echo Buyer","description":"","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://echobuyer.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"WebPage","@id":"https://echobuyer.com/search-services/#webpage","url":"https://echobuyer.com/search-services/","name":"Search Services | Group Buying service| Echobuyer","isPartOf":{"@id":"https://echobuyer.com/#website"},"datePublished":"2021-02-23T20:11:31+00:00","dateModified":"2022-05-09T15:39:57+00:00","description":"Looking to save money on your next purchase? Check out echobuyer.com! This site lets you buy items together with other people in your area, making it a great way to get deals on stuff you wouldn't be able to find alone. Just enter the product you want to buy and how many people you want to buy it with, and echobuyer will take care of the rest.","breadcrumb":{"@id":"https://echobuyer.com/search-services/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://echobuyer.com/search-services/"]}]},{"@type":"BreadcrumbList","@id":"https://echobuyer.com/search-services/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://echobuyer.com/"},{"@type":"ListItem","position":2,"name":"Search services"}]}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Echo Buyer &raquo; Feed" href="https://echobuyer.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Echo Buyer &raquo; Comments Feed" href="https://echobuyer.com/comments/feed/" />
<style id='global-styles-inline-css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #FFFFFF;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--dark-gray: #28303D;--wp--preset--color--gray: #39414D;--wp--preset--color--green: #D1E4DD;--wp--preset--color--blue: #D1DFE4;--wp--preset--color--purple: #D1D1E4;--wp--preset--color--red: #E4D1D1;--wp--preset--color--orange: #E4DAD1;--wp--preset--color--yellow: #EEEADD;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--gradient--purple-to-yellow: linear-gradient(160deg, #D1D1E4 0%, #EEEADD 100%);--wp--preset--gradient--yellow-to-purple: linear-gradient(160deg, #EEEADD 0%, #D1D1E4 100%);--wp--preset--gradient--green-to-yellow: linear-gradient(160deg, #D1E4DD 0%, #EEEADD 100%);--wp--preset--gradient--yellow-to-green: linear-gradient(160deg, #EEEADD 0%, #D1E4DD 100%);--wp--preset--gradient--red-to-yellow: linear-gradient(160deg, #E4D1D1 0%, #EEEADD 100%);--wp--preset--gradient--yellow-to-red: linear-gradient(160deg, #EEEADD 0%, #E4D1D1 100%);--wp--preset--gradient--purple-to-red: linear-gradient(160deg, #D1D1E4 0%, #E4D1D1 100%);--wp--preset--gradient--red-to-purple: linear-gradient(160deg, #E4D1D1 0%, #D1D1E4 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 18px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 24px;--wp--preset--font-size--x-large: 42px;--wp--preset--font-size--extra-small: 16px;--wp--preset--font-size--normal: 20px;--wp--preset--font-size--extra-large: 40px;--wp--preset--font-size--huge: 96px;--wp--preset--font-size--gigantic: 144px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="main.css">



	<link href="/favicon.ico" rel="icon">
	
	<link rel="stylesheet" href="assets/images/sidebar.css">
    
    <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
    }
    </script>

	
	


</head>
<body class="page-template page-template-templates page-template-template-search-services page-template-templatestemplate-search-services-php page page-id-25 wp-embed-responsive is-light-theme no-js singular elementor-default elementor-kit-205">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
	
	<!-- header -->
	<header class="section sticky-top">
  <style>
    li.mm-listitem{
       width:100%;
       border-bottom: 1px solid #37517e;
    }
    ul.menu-area-main.mm-listview{
        text-align:left;
    }
    .mm-navbar{--mm-color-background:rgba(55,81,126,1);--mm-color-text-dimmed:#fff;--mm-color-button:#fff}
    .mm-panel{--mm-color-background:rgba(55,81,126,.9);
    --mm-color-text:#fff;
    --mm-color-button:#fff}
    .mm-navbar span{font-size:24px!important;}
    .mm-listview li a:active,.mm-listview a:hover{color:#d5d5d5;}
    .mm-listview li a{padding:15px 18px!important;}
@media only screen and (max-width: 767px){
    .menu-area-main.mm-listview {
        height: auto;
        overflow-y: auto;
    }
    .loginuser{
        top: 0px!important;
        left: auto!important;
        font-size: 12px!important;
    }
    .mmenu-hide{
        display:none;
    }
    .header_main{
        padding-bottom:20px;
    }
    .yu.topstocksdiv.my-requests { border-radius: 0px!important;}
}
.loginuser{
   position: absolute; top: 40px; left: 0; right: 0;color: #fff; font-size: 11px;white-space: nowrap; 
}
 .bg-light.yu{
	box-shadow: 0 0 24px 0 rgb(0 0 0 / 12%);
	 background-color: #fff !important;
    /* border:1px solid #999;
     border:2px solid #47b2e4;*/
 }
 .yu-border-top-blue{
     border-top:3px solid #47b2e4;
 }
.yu-border-bottom-blue{
     border-bottom:3px solid #47b2e4;
 }
 .mm-menu_position-bottom.mm-menu_opened, .mm-menu_position-front.mm-menu_opened, .mm-menu_position-top.mm-menu_opened {
    z-index: 5555!important;
}
  </style>
        <a href="#menu" type="button" class="d-md-none navbar-toggle navbar-dark position-absolute" style="top: 12px;right: 20px;font-size: 28px;z-index: 1;">
       <span class="navbar-toggler-icon" onclick="openNav()"></span></a>
                                        
	 	<!-- header inner -->
	 		 		<div class="header_main">
	 	
	    	<div class="container">
		       	<div class="row">
		          	<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
		             	<div class="full">
		                	<div class="center-desk">
		                   		<div class="logo float-left"> <a>EchoBuyer</a> </div>
		                	</div>
		             	</div>
		          	</div>
		          	<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
		             	<div class="menu-area">
			                <div class="limit-box" >
			                   	<nav class="main-menu mmenu-hide" id="menu">
			                   	    
			                      	<ul class="menu-area-main">
			                        	<li> <a href="user.php">Home</a> </li>
			                         	<li> <a href="post.php">Post</a> </li>
                                         <li><a href="mypost.php">My Posts</a></li>
			                         	<li> <a href="./chat/login.php">Messages</a> </li>
                                         <li> <a href="logout.php">Signout</a> </li>
			                         				                         
			                         						 						<!--<li><a href="../login">Login</a></li>
					 						<li><a href="../register">Register</a></li> -->
					 										 					<li> <a href="help.php">Help</a> </li>
			                         	<li class="last"><a href="logindex.php"><img src="search_icon.png" alt="icon" style="max-width:20px;max-height:20px;"/></a></li>
			                      	</ul>
			                   	</nav>
			                   	
			                </div>
		            	</div>
		        	</div>
		    	</div>
			</div>
		</div>
		<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul>
        <li> <a href="user.php">Home</a> </li>
			                         	<li> <a href="post.php">Post</a> </li>
                                         <li><a href="mypost.php">My Posts</a></li>
			                         	<li> <a href="./chat/login.php">Messages</a> </li>
                                         <li> <a href="logout.php">Signout</a> </li>
			                         				                         
			                         						 						<!--<li><a href="../login">Login</a></li>
					 						<li><a href="../register">Register</a></li> -->
					 										 					<li> <a href="help.php">Help</a> </li>
			                         	<li class="last"><a href="logindex.php"><img src="search_icon.png" alt="icon" style="max-width:20px;max-height:20px;"/></a></li>
                              
                                              </ul>
  </div>
		<!-- end header inner -->
	</header>
	<!-- end header -->
	<main id="main">
		<section id="page" class="page imap userprofile">
      		<div class="container px-0 px-lg-3" data-aos="fade-up">
      			<div class="section-title">
                    <h2 class="text-center">If you find the product or service you are looking for, join it</h2>
                    <br />
                    <h4 class="text-center">If not, post a listing on the <a href="post.php" class="text-primary">Post page</a> so nearby consumers will join you.</h4>
  				</div>
                <!-- <a class="post-request btn " style="top: 20px;right: 15px;border: 1px solid white;padding: 5px 15px;color: #eee;" href="https://echobuyer.com/post-a-request" ><i class="bx bx-plus"></i> New Post</a> -->
                        
                <div class="form_section searchForm">
                    <form method="post" action="logsearch.php" enctype="multipart/form-data"> 
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>Keyword</label>
                                <input type="text" class="form-control" autocomplete="on" id="keyword"  name="searchkeyword" value="">
                            </div>
                            <div class="form-group col-md-3">
                                <label style="width: 100%; display: inline-block;">Services</label>
                                <select name="findservice"  class="nice-select" style="display:1none;height:52px;color: #666666;">
                                  <option value="">Select a product/service</option>        
                                                                        <option  value="Car">Car</option>
                                                                          <option  value="Coach">Coach</option>
                                                                          <option  value="Education">Education</option>
                                                                          <option  value="Electronics">Electronics</option>
                                                                          <option  value="Events">Events</option>
                                                                          <option  value="Insurance">Insurance</option>
                                                                          <option  value="Others">Others</option>
                                                                          <option  value="RealEstate">RealEstate</option>
                                       
                                </select>
                            </div>
                            <!-- <div class="form-group col-md-1">
                                <label style="width: 100%; display: inline-block;">Range</label>
                                <select name="range"  class="nice-select" style="display:1none;color:#666666;" >
                                    <option  value="5">5 mi</option>
                                    <option  value="10">10 mi</option>
                                    <option selected value="25">25 mi</option>
                                    <option  value="50">50 mi</option>
                                    <option  value="100">100+ mi</option>
                                </select>
                            </div> -->
                            <div class="form-group col-md-2">
                                <label>Area</label>
                                <input type="text" class="form-control" autocomplete="off" id="area" name="searcharea" value="">
                            </div>
                            <div class="form-group col-md-3">
                                <label>City</label>
                                <input type="text" class="form-control" autocomplete="off" id="city" required="" name="searchcity" value="">
                            </div>
                            
                            <div class="form-group col-md-2">
                                <label>&nbsp; </label>
                                <input type="submit" class="form-control" name="submit" value="Filter"> 
                            </div>
                        </div> 
                    </form>
                </div>
                <div class="row mx-0 topStocks search-services">
                    <!--div class="col-lg-6 mx-0 pink my-requests my-search-map" style="background: #cecece; height: 400px; padding:0px;">
                        <div id="map" style="height: 400px; width:100%;"></div>
                    </div-->
    				<div class="col-lg-12  my-2 mt-lg-0 px-0 pink my-requests my-search-result">
    				    <ul>
                            <li class="yu-only-desktop row">
                                <!-- <div class="lookingfor"><label>Post Number</label></div> 
                                <div class="lookingfor post_number col-md-2">
                                    <a href="https://echobuyer.com/search-services/?sort=-id" class="sort-down font-weight-bold">Post</a>
                                    
                                </div>
                                <div class="col-md-10">
                                    <div class="lookingfor title">
                                        <a href="https://echobuyer.com/search-services/?sort=-title" class="sort-by font-weight-bold">Title</a>
                                    </div>
                                    <div class="lookingfor discount">
                                        <a href="https://echobuyer.com/search-services/?sort=-discount" class="sort-by font-weight-bold">User</a>
                                    </div>
                                    <div class="lookingfor">
                                        <a href="https://echobuyer.com/search-services/?sort=-user" class="sort-by font-weight-bold">Area/City</a>
                                    </div>
                                    <div class="lookingfor">
                                        <a href="https://echobuyer.com/search-services/?sort=-city" class="sort-by font-weight-bold">Price</a>
                                    </div>
                                    <div class="lookingfor action">
                                        <label class="mb-0">Like / Message</label>
                                    </div>
                                </div>-->
                                <hr />
                                <hr />
                             
                                    
                          
                            </li>  
                           <style>
                               .yu-search-list{
                                   border-radius:50%;height:42px;width:42px;background-size:cover;padding: 10.5px 21px;margin-bottom: 5px;display: block;
                               }
                               .yu-only-mobile{
                                   display:none!important;
                               }
                               @media (max-width: 767px){
                                   .yu-search-list{
                                       border-radius: 3px;
                                       height: auto;
                                       width: 100%;
                                       background-position: center;
                                       padding: 30% 21px;
                                   }
                                   .yu-list-li{
                                       padding:0!important;
                                   }
                                   .yu-lookingfor-title, .yu-lookingfor-discount{
                                       width:100%!important;
                                    }
                                    .yu-lookingfor, .yu-lookingfor-address {
                                        width: auto!important;
                                        white-space: nowrap;
                                    }
                                    .yu-lookingfor-action{
                                       position: absolute;
                                       right: 0;
                                       top: 15px;
                                    }
                                   .yu-only-mobile, .yu-lookingfor-address p{
                                       display:inline-block!important;
                                   }
                                   .yu-only-desktop{
                                       display:none!important;
                                   }
                               }
                           </style>
                           
                           
                                                            <li><strong>Try posting/searching your requirement.</strong></li>
                                                    </ul>
    				</div>
                    
			    </div> 
			</div>
		</section>
        <!-- Modal -->
        <div class="modal fade interestedmodal" id="show_interest_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Showing interest for: <span id="service_id"></span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p style="margin:0px;">Please confirm your interest for this post. You can start messaging post owner if he replies back to you.</p>
                        <form method="post" action="" >
                            <div class="form-group">
                                <input type="hidden" id="post_id" name="post_id" value="" />
                                <input type="hidden" name="action" value="save_interest" />
                            </div>
                            <button type="button" class="btn btn-primary btn-close" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary confirm_interest" value="Confirm Interest" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
	</main>
    <!-- <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJDjCKuE0cpTwA6XHhzNuX2r5WqJXtMr8" type="text/javascript"></script> -->
        <script async type="text/javascript">
        var real_time_latitude = '';
        var real_time_longitude = '';
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                real_time_position = "Geolocation is not supported by this browser.";
            }
        }
        function showPosition(position) {
            real_time_latitude = position.coords.latitude;
            real_time_longitude = position.coords.longitude;
            //console.log(real_time_latitude, real_time_longitude);
            localStorage.setItem('real_time_latitude', real_time_latitude);
            localStorage.setItem('real_time_longitude', real_time_longitude);
        }
        jQuery(document).ready( function(){
            getLocation();
        });
        var phplocations = '[]';
        
        phplocations = JSON.parse(phplocations);
        var locations = [];
        jQuery.each( phplocations, function(key, val) {
            tmp_locations = [];
            tmp_locations.push(val.lookingfor);
            tmp_locations.push(val.latitude);
            tmp_locations.push(val.longitude);
            if( val.latitude && val.longitude ){
                locations.push( tmp_locations );
            }    
        });
       // console.log(locations);
        setTimeout( function(){ 
            var latitude = '';
            var longitude = '';
            var city = jQuery('#city').val();
            latitude = real_time_latitude;
            longitude = real_time_longitude;
            if( city != '' || city != undefined ){
                latitude = locations[0][1];
                longitude = locations[0][2];
            }
            //console.log('here: ','lat: '+latitude, 'long:'+longitude, 'rl:'+real_time_latitude, real_time_longitude);
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: new google.maps.LatLng(latitude, longitude),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
            });
            var infowindow = new google.maps.InfoWindow();
            var marker, i;
            
            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map
                });
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }, 900);
    </script>
				
		
		<!-- footer start-->
      	<div id="plant" class="footer layout_padding">
        	<div class="container">
          <p>© 2023 All Rights Reserved
					<br /> Designed & Developed by<a> Neeraj </a>
				</p>
         	</div>
      	</div>

   


</script>
<!-- /RAJ --->
	    
      <script async type="text/javascript">
        jQuery(document).ready(function(){
        	jQuery(".zoom").hover(function(){
              jQuery(this).addClass('transition');
         	    }, function(){
         
              jQuery(this).removeClass('transition');
         	});
        });
        
		    jQuery(".menu-area-main li.pager a").click(function(event) {
          event.preventDefault();
			
          if (jQuery(jQuery(this).attr('href')).length > 0) {
        	   jQuery('html, body').animate({ scrollTop: jQuery(jQuery(this).attr('href')).offset().top}, 2000);
          }else{
        	   window.location.href = 'https://echobuyer.com'+jQuery(this).attr('href');
          }
		    });
      </script> 

              <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJDjCKuE0cpTwA6XHhzNuX2r5WqJXtMr8&libraries=places" type="text/javascript"></script>
        <!--script defer async src="https://echobuyer.com/wp-content/themes/echobuyers/assets/js/google-maps-places.js"></script-->
        <script>
        
        //Extract the address information and pupulate the form
        function fillInAddress(autocomplete, street, suburb, city, country, postcode) {
          // Get the place details from the autocomplete object.
          var place = autocomplete.getPlace();

          var street_number = '';//street number
          var route = '';//street name
          var sublocality = '';//suberb
          var locality = '';//city
          var countryname = '';//country
          var postal_code = '';//post code
          // console.log(place.address_components);

          for (var i = 0; i < place.address_components.length; i++) {
            if (place.address_components[i].types[0] === "street_number") {
              street_number = place.address_components[i].long_name;
            }
            if (street_number == '' || street_number == undefined ) {
              if (place.address_components[i].types[0] === "premise") {
                street_number = place.address_components[i].long_name;
              }
            }
            if (place.address_components[i].types[0] === "route") {
              route = place.address_components[i].long_name;
            }
            if (place.address_components[i].types[0] === "sublocality_level_1") {
              sublocality = place.address_components[i].long_name;
            }
            if (place.address_components[i].types[0] === "locality") {
              locality = place.address_components[i].long_name;
            }
            if (place.address_components[i].types[0] === "country") {
              countryname = place.address_components[i].long_name;
            }
            if (place.address_components[i].types[0] === "postal_code") {
              postal_code = place.address_components[i].long_name;
            }
          }

          if( street != '' && street != undefined ){
            if (street_number.indexOf("-") === -1 && street_number.indexOf("/") === -1) {
              var typed_address = jQuery("#"+street).val();
              //console.log(typed_address);
              if( typed_address != '' && typed_address != undefined ){
                if (typed_address.indexOf("-") > -1) {
                  street_number = typed_address.split("-")[0].trim() + "-" + street_number;
                } else if (typed_address.indexOf("/") > -1) {
                  street_number = typed_address.split("/")[0].trim() + "/" + street_number;
                }
              }
            }
          }

          //console.log( street_number+' '+route, sublocality, locality, postal_code );
          //console.log(locality);
          if( street != '' && street != undefined ){
            jQuery("#"+street).val(street_number+' '+route);
          }

          if( suburb != '' && suburb != undefined ){
            jQuery("#"+suburb).val(sublocality);
          }

          // console.log(suburb, street_number+' '+route+', '+sublocality);
          if( suburb == 'street_suburb_both' ) {
            if(street_number != '') {
              jQuery("#street").val(street_number+', '+sublocality);
            } else {
              jQuery("#street").val(sublocality);
            }
          }
          
          //console.log(city, locality);
          if( city != '' && city != undefined ) {
            jQuery("#"+city).val(locality+', '+countryname);
          }
          if( locality != '' && locality != undefined ){
            jQuery('.search-services .citydropdown').html(locality);
            jQuery('.search-hp .search-with-google').slideToggle();
          }
          if( country != '' && country != undefined ){
            jQuery("#"+country).val(countryname);
          }
          if( postcode != '' && postcode != undefined ){
            jQuery("#"+postcode).val(postal_code);
          }
        }
        /* End of Address Autocomplete */
          </script>
                <script async type="text/javascript">
            //Google maps - address autocomplete - initialize
            // Create the autocomplete object, restricting the search
            // to geographical location types.
            setTimeout( function(){
              autocomplete1 = new google.maps.places.Autocomplete(
                (document.getElementById("city")),
                { types: ['geocode'] });
              
             //autocomplete1 = new google.maps.places.Autocomplete(
             //   (document.getElementById("search_your_city")),
             //   { types: ['geocode'] });
              
              // When the user selects an address from the dropdown,
              // populate the address fields in the form.
              google.maps.event.addListener(autocomplete1, 'place_changed', function() {
                fillInAddress(autocomplete1, "", "", "city", "", "");
              });
            }, 700);
          </script>
      
</div><!-- #page -->



</body>
</html>

<!-- Cached by WP-Optimize - https://getwpo.com - Last modified: Fri, 02 Sep 2022 20:56:37 GMT -->