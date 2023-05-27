<?php
session_start();
if (isset($_POST['subnews'])) {

	$email = $_POST['email'];
	include_once "conn.php";
	
	$sql = "INSERT INTO newsletter(email) VALUES(?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$con->close();
?>
	<script>
		alert(" Thank You ");
		window.location.href = "user.php";
	</script>

<?php
}
?>
<!doctype html>
<html lang="en-US">

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
	<title>Help | Echobuyer</title>
	<meta name="description" content="Echobuyer allow groups of people to buy large quantities of items at once and receive discounts on the total purchase." />
	<link rel="canonical" href="https://echobuyer.com/help/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Help | Echobuyer" />
	<meta property="og:description" content="Echobuyer allow groups of people to buy large quantities of items at once and receive discounts on the total purchase." />
	<meta property="og:url" content="https://echobuyer.com/help/" />
	<meta property="og:site_name" content="Echo Buyer" />
	<meta property="article:modified_time" content="2022-05-09T15:55:10+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">
		{
			"@context": "https://schema.org",
			"@graph": [{
				"@type": "WebSite",
				"@id": "https://echobuyer.com/#website",
				"url": "https://echobuyer.com/",
				"name": "Echo Buyer",
				"description": "",
				"potentialAction": [{
					"@type": "SearchAction",
					"target": {
						"@type": "EntryPoint",
						"urlTemplate": "https://echobuyer.com/?s={search_term_string}"
					},
					"query-input": "required name=search_term_string"
				}],
				"inLanguage": "en-US"
			}, {
				"@type": "WebPage",
				"@id": "https://echobuyer.com/help/#webpage",
				"url": "https://echobuyer.com/help/",
				"name": "Help | Echobuyer",
				"isPartOf": {
					"@id": "https://echobuyer.com/#website"
				},
				"datePublished": "2021-02-16T19:38:30+00:00",
				"dateModified": "2022-05-09T15:55:10+00:00",
				"description": "Echobuyer allow groups of people to buy large quantities of items at once and receive discounts on the total purchase.",
				"breadcrumb": {
					"@id": "https://echobuyer.com/help/#breadcrumb"
				},
				"inLanguage": "en-US",
				"potentialAction": [{
					"@type": "ReadAction",
					"target": ["https://echobuyer.com/help/"]
				}]
			}, {
				"@type": "BreadcrumbList",
				"@id": "https://echobuyer.com/help/#breadcrumb",
				"itemListElement": [{
					"@type": "ListItem",
					"position": 1,
					"name": "Home",
					"item": "https://echobuyer.com/"
				}, {
					"@type": "ListItem",
					"position": 2,
					"name": "Help"
				}]
			}]
		}
	</script>
	<!-- / Yoast SEO plugin. -->

	<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="main.css">
	<link rel='dns-prefetch' href='//www.google.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="Echo Buyer &raquo; Feed" href="https://echobuyer.com/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Echo Buyer &raquo; Comments Feed" href="https://echobuyer.com/comments/feed/" />
	<style id='global-styles-inline-css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #FFFFFF;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--color--dark-gray: #28303D;
			--wp--preset--color--gray: #39414D;
			--wp--preset--color--green: #D1E4DD;
			--wp--preset--color--blue: #D1DFE4;
			--wp--preset--color--purple: #D1D1E4;
			--wp--preset--color--red: #E4D1D1;
			--wp--preset--color--orange: #E4DAD1;
			--wp--preset--color--yellow: #EEEADD;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--gradient--purple-to-yellow: linear-gradient(160deg, #D1D1E4 0%, #EEEADD 100%);
			--wp--preset--gradient--yellow-to-purple: linear-gradient(160deg, #EEEADD 0%, #D1D1E4 100%);
			--wp--preset--gradient--green-to-yellow: linear-gradient(160deg, #D1E4DD 0%, #EEEADD 100%);
			--wp--preset--gradient--yellow-to-green: linear-gradient(160deg, #EEEADD 0%, #D1E4DD 100%);
			--wp--preset--gradient--red-to-yellow: linear-gradient(160deg, #E4D1D1 0%, #EEEADD 100%);
			--wp--preset--gradient--yellow-to-red: linear-gradient(160deg, #EEEADD 0%, #E4D1D1 100%);
			--wp--preset--gradient--purple-to-red: linear-gradient(160deg, #D1D1E4 0%, #E4D1D1 100%);
			--wp--preset--gradient--red-to-purple: linear-gradient(160deg, #E4D1D1 0%, #D1D1E4 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 18px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 24px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--font-size--extra-small: 16px;
			--wp--preset--font-size--normal: 20px;
			--wp--preset--font-size--extra-large: 40px;
			--wp--preset--font-size--huge: 96px;
			--wp--preset--font-size--gigantic: 144px;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}
	</style>

	<style>
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
	
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

<body class="page-template page-template-templates page-template-template-help page-template-templatestemplate-help-php page page-id-8 wp-embed-responsive is-light-theme no-js singular elementor-default elementor-kit-205">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-dark-grayscale">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 0.49803921568627" />
					<feFuncG type="table" tableValues="0 0.49803921568627" />
					<feFuncB type="table" tableValues="0 0.49803921568627" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-grayscale">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 1" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0 1" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-yellow">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-red">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 1" />
					<feFuncG type="table" tableValues="0 0.27843137254902" />
					<feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-midnight">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 0" />
					<feFuncG type="table" tableValues="0 0.64705882352941" />
					<feFuncB type="table" tableValues="0 1" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-magenta-yellow">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.78039215686275 1" />
					<feFuncG type="table" tableValues="0 0.94901960784314" />
					<feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-green">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0.44705882352941 0.4" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-orange">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.098039215686275 1" />
					<feFuncG type="table" tableValues="0 0.66274509803922" />
					<feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

		<!-- header -->
		<header class="section sticky-top">
			<style>
				li.mm-listitem {
					width: 100%;
					border-bottom: 1px solid #37517e;
				}

				ul.menu-area-main.mm-listview {
					text-align: left;
				}

				.mm-navbar {
					--mm-color-background: rgba(55, 81, 126, 1);
					--mm-color-text-dimmed: #fff;
					--mm-color-button: #fff
				}

				.mm-panel {
					--mm-color-background: rgba(55, 81, 126, .9);
					--mm-color-text: #fff;
					--mm-color-button: #fff
				}

				.mm-navbar span {
					font-size: 24px !important;
				}

				.mm-listview li a:active,
				.mm-listview a:hover {
					color: #d5d5d5;
				}

				.mm-listview li a {
					padding: 15px 18px !important;
				}

				@media only screen and (max-width: 767px) {
					.menu-area-main.mm-listview {
						height: auto;
						overflow-y: auto;
					}

					.loginuser {
						top: 0px !important;
						left: auto !important;
						font-size: 12px !important;
					}

					.mmenu-hide {
						display: none;
					}

					.header_main {
						padding-bottom: 20px;
					}

					.yu.topstocksdiv.my-requests {
						border-radius: 0px !important;
					}
				}

				.loginuser {
					position: absolute;
					top: 40px;
					left: 0;
					right: 0;
					color: #fff;
					font-size: 11px;
					white-space: nowrap;
				}

				.bg-light.yu {
					box-shadow: 0 0 24px 0 rgb(0 0 0 / 12%);
					background-color: #fff !important;
					/* border:1px solid #999;
     border:2px solid #47b2e4;*/
				}

				.yu-border-top-blue {
					border-top: 3px solid #47b2e4;
				}

				.yu-border-bottom-blue {
					border-bottom: 3px solid #47b2e4;
				}

				.mm-menu_position-bottom.mm-menu_opened,
				.mm-menu_position-front.mm-menu_opened,
				.mm-menu_position-top.mm-menu_opened {
					z-index: 5555 !important;
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
									<div class="logo float-left"> <a href="user.php">EchoBuyer</a> </div>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
							<div class="menu-area">
								<div class="limit-box">
									<nav class="main-menu mmenu-hide" id="menu">

										<ul class="menu-area-main">
											<li> <a href="user.php">Home</a> </li>
											<li> <a href="logindex.php">Search</a> </li>
											

											<li><a href="post.php">Post</a></li>
											<li><a href="mypost.php">MyPosts</a></li>
											
											<li class="last"><a href="logindex.php"><img src="search_icon.png" alt="icon" style="max-width:20px;max-height:20px;" /></a></li>
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
											<li> <a href="logindex.php">Search</a> </li>
											

											<li><a href="post.php">Post</a></li>
											<li><a href="mypost.php">MyPosts</a></li>
											<li class="last"><a href="logindex.php"><img src="search_icon.png" alt="icon" style="max-width:20px;max-height:20px;" /></a></li>
                                              </ul>
  </div>
			<!-- end header inner -->
		</header>
		<!-- end header -->
		<style>
			.email_text .input-group .emaillist input[type="submit"] {
				padding: 10px !important;
				width: 25%;
			}
		</style>
		<main id="main">
			<section id="page" class="page">
				<div class="container">
					<article id="post-8" class="post-8 page type-page status-publish hentry entry">
						<!-- <header class="entry-header alignwide">
					<h1 class="entry-title">Help</h1>									</header> -->
						<div class="section-title">
							<h2>Help</h2>
						</div>
						<div class="entry-content">
							<div class="col-lg-12 col-md-12 px-0">
								<div class="panel-group mt-3" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default rounded">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="position-relative panel-title mb-0">
												<a role="button" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne" class=""> Any questions?
													<!-- <svg style="left: 15px;top: 40%;"
														class="position-absolute short-full float-right yu-plus"
														width="24px" height="24px" viewBox="0 0 24 24"
														xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink"> -->
													<g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
														<g transform="translate(1.000000, 1.000000)" stroke="#222222">
															<path d="M0,11 L22,11"></path>
															<path d="M11,0 L11,22"></path>
														</g>
													</g>
													</svg>
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body p-1">
												<p>You can contact us directly at contact@echobuyer.com</p>
											</div>
										</div>
									</div>

									<div class="panel panel-default rounded">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="position-relative panel-title mb-0">
												<a role="button" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne" class=""> How much does
													Echobuyer cost?
													<!-- <svg style="left: 15px;top: 40%;"
														class="position-absolute short-full float-right yu-plus"
														width="24px" height="24px" viewBox="0 0 24 24"
														xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink"> -->
													<g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
														<g transform="translate(1.000000, 1.000000)" stroke="#222222">
															<path d="M0,11 L22,11"></path>
															<path d="M11,0 L11,22"></path>
														</g>
													</g>
													</svg>
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body p-1">
												<p>Echobuyer is free to post, search and join for all of our users!</p>
											</div>
										</div>
									</div>

									<div class="panel panel-default rounded">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="position-relative panel-title mb-0">
												<a role="button" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne" class=""> Who can use Echobuyer?
													<!-- <svg style="left: 15px;top: 40%;"
														class="position-absolute short-full float-right yu-plus"
														width="24px" height="24px" viewBox="0 0 24 24"
														xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink"> -->
													<g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
														<g transform="translate(1.000000, 1.000000)" stroke="#222222">
															<path d="M0,11 L22,11"></path>
															<path d="M11,0 L11,22"></path>
														</g>
													</g>
													</svg>
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body p-1">
												<p>Anyone can register and post listings. However, this is primarily a
													consumer-based platform. We will remove/ban anyone or any post that
													is spam, illegal, or violates our Terms of Service.</p>
											</div>
										</div>
									</div>

									<div class="panel panel-default rounded">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="position-relative panel-title mb-0">
												<a role="button" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne" class=""> What are the steps?
													<!-- <svg style="left: 15px;top: 40%;"
														class="position-absolute short-full float-right yu-plus"
														width="24px" height="24px" viewBox="0 0 24 24"
														xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink"> -->
													<g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
														<g transform="translate(1.000000, 1.000000)" stroke="#222222">
															<path d="M0,11 L22,11"></path>
															<path d="M11,0 L11,22"></path>
														</g>
													</g>
													</svg>
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body p-1">
												<p>Steps: 1. Register,confirm via email and login.
													2. Search and Join a similar buyer or post yourself.
													3. You wait for the group to be formed. You can also connect to
													buyers who joined you via chat and decide which dealer you can go
													to.
													4. Finally you go to a dealer on agreed date.
													5. Negotiate.
													6. Buy in bulk.</p>
											</div>
										</div>
									</div>

									<div class="panel panel-default rounded">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="position-relative panel-title mb-0">
												<a role="button" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne" class=""> How can I protect my privacy while using
													Echobuyer?
													<!-- <svg style="left: 15px;top: 40%;"
														class="position-absolute short-full float-right yu-plus"
														width="24px" height="24px" viewBox="0 0 24 24"
														xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink"> -->
													<g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
														<g transform="translate(1.000000, 1.000000)" stroke="#222222">
															<path d="M0,11 L22,11"></path>
															<path d="M11,0 L11,22"></path>
														</g>
													</g>
													</svg>
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body p-1">
												<p>Our users' privacy is extremely important to us. Give out your
													contact information with caution and only to those who you deem are
													seriously interested in sharing a product. Meet in public for your
													discount. Never disclose your credit card or login information. </p>
											</div>
										</div>
									</div>

									<!--<div class="panel panel-default rounded mt-2">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="position-relative panel-title mb-0">
												<a role="button"  data-parent="#accordion"
													 aria-expanded="true"
													aria-controls="collapseTwo" class=""> How much does
													Echobuyer cost? <!--<svg style="left: 15px;top: 40%;"
														class="position-absolute short-full float-right yu-plus"
														width="24px" height="24px" viewBox="0 0 24 24"
														xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink"> 
														<g stroke="none" stroke-width="1px" fill="none"
															fill-rule="evenodd" stroke-linecap="square">
															<g transform="translate(1.000000, 1.000000)"
																stroke="#222222">
																<path d="M0,11 L22,11"></path>
																<path d="M11,0 L11,22"></path>
															</g>
														</g>
													</svg>
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
											aria-labelledby="headingTwo">
											<div class="panel-body p-1">
												<p>Echobuyer is free to post, search and join for all of our users!
												<p>
											</div>
										</div>
									</div>
									<div class="panel panel-default rounded mt-2">
										<div class="panel-heading" role="tab" id="heading3">
											<h4 class="position-relative panel-title mb-0">
												<a role="button" data-toggle="collapse" data-parent="#accordion"
													href="#collapse3" aria-expanded="false" aria-controls="collapse3"
													class="collapsed"> Who can use Echobuyer? <svg
														style="left: 15px;top: 40%;"
														class="position-absolute short-full float-right yu-plus"
														width="24px" height="24px" viewBox="0 0 24 24"
														xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink">
														<g stroke="none" stroke-width="1px" fill="none"
															fill-rule="evenodd" stroke-linecap="square">
															<g transform="translate(1.000000, 1.000000)"
																stroke="#222222">
																<path d="M0,11 L22,11"></path>
																<path d="M11,0 L11,22"></path>
															</g>
														</g>
													</svg>
												</a>
											</h4>
										</div>
										<div id="collapse3" role="tabpanel"
											aria-labelledby="heading3">
											<div class="panel-body p-1">
												<p>Anyone can register and post listings. However, this is primarily a
													consumer-based platform. We will remove/ban anyone or any post that
													is spam, illegal, or violates our Terms of Service. </p>
											</div>
										</div>
									</div>
									<div class="panel panel-default rounded mt-2">
										<div class="panel-heading" role="tab" id="heading3">
											<h4 class="position-relative panel-title mb-0">
												<a role="button"  data-parent="#accordion"
												 aria-expanded="false" aria-controls="collapse3"
													class="collapsed"> What are the steps? <!--<svg
														style="left: 15px;top: 40%;"
														class="position-absolute short-full float-right yu-plus"
														width="24px" height="24px" viewBox="0 0 24 24"
														xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink"> 
														<g stroke="none" stroke-width="1px" fill="none"
															fill-rule="evenodd" stroke-linecap="square">
															<g transform="translate(1.000000, 1.000000)"
																stroke="#222222">
																<path d="M0,11 L22,11"></path>
																<path d="M11,0 L11,22"></path>
															</g>
														</g>
													</svg>
												</a>
											</h4>
										</div>
										<div id="collapse4" class="panel-collapse collapse" role="tabpanel"
											aria-labelledby="heading3">
											<div class="panel-body p-1">
												<p>Steps: 1. Register,confirm via email and login.
													2. Search and Join a similar buyer or post yourself.
													3. You wait for the group to be formed. You can also connect to
													buyers who joined you via chat and decide which dealer you can go
													to.
													4. Finally you go to a dealer on agreed date.
													5. Negotiate.
													6. Buy in bulk.</p>
											</div>
										</div>
									</div>
									<div class="panel panel-default rounded mt-2">
										<div class="panel-heading" role="tab" id="heading4">
											<h4 class="position-relative panel-title mb-0">
												<a role="button"  data-parent="#accordion"
													 aria-expanded="false" aria-controls="collapse4"
													class="collapsed"> How can I protect my privacy while using
													Echobuyer? <!--<svg style="left: 15px;top: 40%;"
														class="position-absolute short-full float-right yu-plus"
														width="24px" height="24px" viewBox="0 0 24 24"
														xmlns="http://www.w3.org/2000/svg"
														xmlns:xlink="http://www.w3.org/1999/xlink">
														<g stroke="none" stroke-width="1px" fill="none"
															fill-rule="evenodd" stroke-linecap="square">
															<g transform="translate(1.000000, 1.000000)"
																stroke="#222222">
																<path d="M0,11 L22,11"></path>
																<path d="M11,0 L11,22"></path>
															</g>
														</g>
													</svg>
												</a>
											</h4>
										</div>
										<div id="collapse5" class="panel-collapse collapse" role="tabpanel"
											aria-labelledby="heading4">
											<div class="panel-body p-1">
												<p>Our users' privacy is extremely important to us. Give out your
													contact information with caution and only to those who you deem are
													seriously interested in sharing a product. Meet in public for your
													discount. Never disclose your credit card or login information. </p>
											</div>
										</div>
									</div>
								</div><!-- Panel-group -->
								</div>
							</div><!-- .entry-content -->
					</article><!-- #post-8 -->
				</div>
			</section>
		</main>


		<style>
			.panel-group .panel {
				border-radius: 5px;
				border-color: #EEEEEE;
				padding: 0;
			}

			.panel-default>.panel-heading {
				color: #fff;
				background-color: #f8f9fa;
				border-color: #EEEEEE;
			}

			.panel-title {
				font-size: 24px;
			}

			.panel-title>a {
				display: block;
				padding: 20px 20px 20px 55px;
				text-decoration: none;
				color: #000;
			}

			.short-full {
				float: right;
				color: #fff;
			}

			.panel-default>.panel-heading+.panel-collapse>.panel-body {
				border: solid 1px #EEEEEE;
				padding: 10px;
			}

			h4 a[aria-expanded*="true"]>.yu-plus {
				transform: rotate(135deg);
			}

			h4 a[aria-expanded*="false"]>.yu-plus {
				transform: rotate(0deg);
			}

			.panel-body p {
				font-size: 20px;
				line-height: 32px;
			}
		</style>
		<!-- start Contact Us-->
		<!--	<section id="contact-us" style="background: #f5f5f5;">
			<div id="plant" class="contact_us layout_padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12 ">
							<div class="titlepage">
								<h2><strong class="black"> Contact</strong> Us</h2>
								<span style="text-align: center;"> </span>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="contact_us_2 layout_padding paddind_bottom_0">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="soc_text">
								<p class="carousel-sporrt_text "> <span> Disclaimer: Kindly verify your other Echobuyer
										users before meeting them. Meet at a public place.
										Please be careful contacting for the first time.
										We use your phone number and email for verification.
										We will not share your phone and email number publicly. Any contact sharing will
										be by your permisson only.
										Athough we take your privacy and security with utmost care, Echobuyer does not
										take resposibity for actual or perceived loss due to a product, service provider
										or user.
									</span> </p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="email_btn">

								<div role="form" class="wpcf7" id="wpcf7-f11-o1" lang="en-US" dir="ltr">
									<div class="screen-reader-response">
										<p role="status" aria-live="polite" aria-atomic="true"></p>
										<ul></ul>
									</div>
									<form action="aboutus.php" method="post" class="wpcf7-form init">
										
										<div class="form-group"><span class="wpcf7-form-control-wrap yourname"><input
													type="text" name="name" value="" 
													class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
													 placeholder="Name"></span>
										</div>
										<div class="form-group"><span class="wpcf7-form-control-wrap email"><input
													type="text" name="email" value="" size="40"
													class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
													aria-required="true" aria-invalid="false"
													placeholder="Email"></span></div>
										<div class="form-group"><span class="wpcf7-form-control-wrap phone"><input
													type="text" name="phone" value="" size="40"
													class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
													aria-required="true" aria-invalid="false"
													placeholder="Phone"></span></div>
										<div class="form-group"><span class="wpcf7-form-control-wrap message"><textarea
													name="message" cols="40" rows="10"
													class="wpcf7-form-control wpcf7-textarea form-control"
													aria-invalid="false" placeholder="Message"></textarea></span></div>
										<div class="submit_btn"><input type="button" value="Send"
												class="wpcf7-form-control wpcf7-submit btn btn-primary"
												aria-invalid="false"><span class="ajax-loader"></span></div>
										<style>
											.ajax-loader {
												position: absolute !important;
												float: right;
											}
										</style>
										<div class="wpcf7-response-output" aria-hidden="true"></div>
									</form> 
								</div>
							
							</div>
						</div>
					</div> -->
		<div class="row">
			<div class="contact_us_3 layout_padding">
				<div class="row">
					<div class="col-md-4">
						<h1 style="color: #ffffff; ">Newsletter</h1>
						<p class="long_text">Subscribe for local updates.</p>
					</div>
					<div class="col-md-8">
						<div class="email_text">
							<div class="input-group mb-3">
								<div class="emaillist">
									<form action="" method="post" class="es_shortcode_form" id="es_subscription_form_604caae896a8f" data-source="ig-es">
										<div class="es_caption">Form to capture email of visitors</div>
										<div class="es-field-wrap">
											<label><input class="es_required_field es_txt_email ig_es_form_field_email" type="email" name="email" value="" placeholder="Enter your email" required="required"></label>
										</div>


										<input type="submit" name="subnews" value="Subscribe">

									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</section>

	<script async type="text/javascript">
		jQuery('.emaillist .es_shortcode_form .es_subscription_form_submit').on('click', function(e) {
			e.preventDefault();
			var emailval = jQuery('.emaillist .ig_es_form_field_email').val();
			if (emailval != '') {
				var formData = jQuery('.emaillist #es_subscription_form_604caae896a8f').serialize();
				jQuery.ajax({
					type: "post",
					dataType: "json",
					url: ajax_object.ajax_url,
					data: formData + '&es=subscribe&action=es_add_subscriber_custom',
					success: function(msg) {
						//console.log( msg );
						if (msg.status == 'SUCCESS') {
							jQuery('.es_shortcode_form').hide();
							jQuery('.es_subscription_message').addClass('success');
							jQuery('.es_subscription_message').html(msg.message_text);
						} else {
							jQuery('.es_subscription_message').addClass('error');
							jQuery('.es_subscription_message').html(msg.message_text);
						}
					}
				});
			}
			return false;
		});

		jQuery('.search-hp .citydropdown').on('click', function() {
			jQuery('.search-hp .search-with-google').slideToggle();
		});
	</script>




	<!-- footer start-->
	<div id="plant" class="footer layout_padding">
		<div class="container">
		<p>© 2023 All Rights Reserved
					<br /> Designed & Developed by<a> Neeraj </a>
				</p>
		</div>
	</div>

	
	<script>
		//var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

		const mq = window.matchMedia("(max-width: 767px)");

		if (mq.matches) {
			document.addEventListener("DOMContentLoaded", () => {
				new Mmenu("#menu", {
					"extensions": ["position-front"],
					navbars: {
						content: ["prev", "Menu", "close"]
					},
				}, {});
				var e = document.getElementById("menu");
				e.classList.remove("mmenu-hide");
			});
		} else {
			// window width is less than 500px
		}
	</script>
	<!-- /RAJ --->

	<script async type="text/javascript">
		jQuery(document).ready(function() {
			jQuery(".zoom").hover(function() {
				jQuery(this).addClass('transition');
			}, function() {

				jQuery(this).removeClass('transition');
			});
		});

		jQuery(".menu-area-main li.pager a").click(function(event) {
			event.preventDefault();

			if (jQuery(jQuery(this).attr('href')).length > 0) {
				jQuery('html, body').animate({
					scrollTop: jQuery(jQuery(this).attr('href')).offset().top
				}, 2000);
			} else {
				window.location.href = 'https://echobuyer.com' + jQuery(this).attr('href');
			}
		});
	</script>


	</div><!-- #page -->

	<script>
		document.body.classList.remove("no-js");
	</script>
	<script>
		if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {

			document.body.classList.add('is-IE');

		}
	</script>

	

</body>

</html>

<!-- Cached by WP-Optimize - https://getwpo.com - Last modified: Fri, 02 Sep 2022 11:07:22 GMT -->