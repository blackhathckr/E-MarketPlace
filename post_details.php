<?php
session_start();
include_once 'conn.php';
$pid = $_GET['postid'];
$username = $_SESSION['log'];
$sql = "SELECT * FROM posts WHERE post_id='$pid' and approve_id=1";
$query = mysqli_query($conn, $sql);
$res = mysqli_fetch_array($query);
$sql2  = "SELECT * FROM post_comment WHERE post_id='$pid' order by id ASC";
$query2 = mysqli_query($conn, $sql2);
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
    <title>Post Detail - Echo Buyer</title>
    <!-- Admin only notice: this page does not show a meta description because it does not have one, either write it for this page specifically or go into the [SEO - Search Appearance] menu and set up a template. -->
    <link rel="canonical" href="https://echobuyer.com/post-detail/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Post Detail - Echo Buyer" />
    <meta property="og:url" content="https://echobuyer.com/post-detail/" />
    <meta property="og:site_name" content="Echo Buyer" />
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
                "@id": "https://echobuyer.com/post-detail/#webpage",
                "url": "https://echobuyer.com/post-detail/",
                "name": "Post Detail - Echo Buyer",
                "isPartOf": {
                    "@id": "https://echobuyer.com/#website"
                },
                "datePublished": "2021-03-06T16:24:36+00:00",
                "dateModified": "2021-03-06T16:24:36+00:00",
                "breadcrumb": {
                    "@id": "https://echobuyer.com/post-detail/#breadcrumb"
                },
                "inLanguage": "en-US",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["https://echobuyer.com/post-detail/"]
                }]
            }, {
                "@type": "BreadcrumbList",
                "@id": "https://echobuyer.com/post-detail/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://echobuyer.com/"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Post Detail"
                }]
            }]
        }
    </script>
    <!-- / Yoast SEO plugin. -->


    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Echo Buyer &raquo; Feed" href="https://echobuyer.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Echo Buyer &raquo; Comments Feed" href="https://echobuyer.com/comments/feed/" />
    <link rel='stylesheet' id='elementor-icons-css' href='https://echobuyer.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css' media='all' />
    <link rel='stylesheet' id='elementor-common-css' href='https://echobuyer.com/wp-content/plugins/elementor/assets/css/common.min.css' media='all' />
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
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="main.css">
<script src="assets/images/map.js"></script>


    <script src='assets/images/googlemap.js' id='jquery-core-js'></script> 
  

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

<body class="page-template page-template-templates page-template-template-post-detail page-template-templatestemplate-post-detail-php page page-id-29 logged-in wp-embed-responsive is-light-theme no-js singular elementor-default elementor-kit-205">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
    <svg
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
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
        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
        <svg
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
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
            </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
            <svg
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
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
                </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;"><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg>
                <svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
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
                                    font-size: 24px importamt;
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
                                                    <div class="logo float-left"> <a>EchoBuyer</a> </div>
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
                                                            <li> <a href="post.php">Post</a> </li>
                                                            <!--li><a href="https://echobuyer.com/account">MyPost</a></li-->
                                                            <li><a href="mypost.php">MyPost</a></li>
                                                            <li><a href="./chat/login.php">Messages</a></li>

                                                            <li style="position: relative;">
                                                                <a href="logout.php">Sign Out</a>
                                                                
                                                            </li>
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
                                                            <li> <a href="logindex.php">Search</a> </li>
                                                            <li> <a href="post.php">Post</a> </li>
                                                            <!--li><a href="https://echobuyer.com/account">MyPost</a></li-->
                                                            <li><a href="mypost.php">MyPost</a></li>
                                                            <li><a href="./chat/login.php">Messages</a></li>

                                                            <li style="position: relative;">
                                                                <a href="logout.php">Sign Out</a>
                                                                
                                                            </li>
                                                            <li> <a href="help.php">Help</a> </li>
                                                            <li class="last"><a href="logindex.php"><img src="search_icon.png" alt="icon" style="max-width:20px;max-height:20px;"/></a></li>
                                              
                                              </ul>
  </div>
                                                           
                            <!-- end header inner -->
                        </header>
                        <!-- end header -->

                        <main id="main" >

                            <section id="page" class="page imap">

                                <div class="container" data-aos="fade-up">

                                    <div class="section-title">


                                        <h2>Post Details</h2>


                                    </div>

                                    <div class="form_section" >

                                        <div class="form-row">

                                            <!--div class=" col-md-5">

                <div id="map" style="height: 350px; width:100%;"></div>

              </div-->

                                            <div class="col-md-7" style="margin-left:20px;">


                                               <!--  <div class="post-detail-buttons">

                                                    <div class="lookingfor action">

                                                        <a href="https://echobuyer.com/edit-post-request/?post_id=5127" title="Edit"><i class="bx bx-edit"></i></a>

                                                        <a href="javascript:void(0);" data-id="5127" class="delete_post" title="Delete"><i class="bx bx-trash-alt"></i></a>

                                                    </div>

                                                </div> -->


                                                <div class="form-row">

                                                    <div class="col-md-12">

                                                        <h2 style="font-weight:bold;color:#000000;">Title: <?php echo $res['title']; ?></h2>

                                                    </div>



                                                    <!-- <div class="col-md-6">

                    <label>Confirm By: 06/28/2022</label>

                  </div> -->
                                                    <div class="col-md-6">

                                                        <label style="font-weight:bold;color:#000000;">Date : <?php echo $res['post_date']; ?></label>

                                                    </div>

                                                   <!-- <div class="col-md-6">


                                                        <label>Days Left: <span class="label label-danger">0 day</span></label>

                                                    </div> -->



                                                    <!-- <div class="col-md-6">

                    <label>At: Hisar sec-14</label>

                  </div> -->

                                                    <div class="col-md-6">

                                                        <label style="font-weight:bold;color:#000000;">City : <?php echo $res['city']; ?></label>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <label style="font-weight:bold;color:#000000;">Pincode : <?php echo $res['zipcode']; ?></label>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <label style="font-weight:bold;color:#000000;">Discount : <?php echo $res['discount']; ?></label>

                                                    </div>

                                                    <!--  <div class="col-md-6">

                    <label>Interested #: 1</label>

                  </div> -->

                                                   <!-- <div class="col-md-6">

                                                        <label val="3" id="joined_count">Joined #: 3</label>

                                                    </div> -->

                                                    <div class="col-md-6">

                                                        <label val="0" id="needed_count" style="font-weight:bold;color:#000000;">Needed # : <?php echo $res['client_count']; ?></label>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <label style="font-weight:bold;color:#000000;">Post Number : <?php echo $res['post_id']; ?></label>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <label style="font-weight:bold;color:#000000;">Owner : <?php echo $res['username']; ?></label>

                                                    </div>

                                                    <div class="col-md-6">

                                                        <label style="font-weight:bold;color:#000000;">Product : <?php echo $res['lookingfor']; ?></label>

                                                    </div>

                                                    <!-- <div class="col-md-6">

                    <label>Sub Category: Basketball</label>

                  </div> -->

                                                   <!-- <div class="col-md-6">


                                                        <label>Status: <span class="label label-danger">Expired</span></label>

                                                    </div> -->

                                                    <div class="col-md-12" style="min-height:80px;">

                                                        <label style="font-weight:bold;color:#000000;">Description : <?php echo $res['description']; ?></label>

                                                    </div>

                                             

                                                </div>

                                            </div>

                                          <!--  <div class="col-md-5">

                                                <div class="py-3" style="height:100%;">


                                                    <a href="https://echobuyer.com/post-detail/?post_id=5127">

                        <img style="border-radius:10%;height:100%;max-width:100%;" class="shadow" src="/wp-content/uploads/2021/12/coach-1.jpg;"/>

                      </a>


                                                </div>

                                            </div> -->

                                            <div class="col-md-12 pb-4">

                                                <div class="col text-center">


                                                    <div class="col-md-12 post-detail-buttons">

                                                        <div class="lookingfor action">

                                                            <!-- <a href="https://echobuyer.com/login?redirect_to=https://echobuyer.com/post-detail/?post_id=5127" title="Like" class="btn btn-primary inline-block btn-like">Like <i class="bx bx-like" style="font-size: 18px; color: #fff;line-height:18px;"></i></a>

                          <a href="https://echobuyer.com/login?redirect_to=https://echobuyer.com/message" title="Message" class="btn btn-primary inline-block btn-msg">Message <i class="bx bx-message-rounded" style="font-size: 18px; color: #fff;line-height:18px;"></i></a> -->
                                                             
                                                             
                                                            <a href="./grpchat/index.php?postid=<?php echo $pid; ?>" title="Message" class="btn btn-primary inline-block btn-msg">Message<i class="bx bx-message-rounded" style="font-size: 18px; color: #fff;line-height:18px;"></i></a>
                                                            <br /> <br /> <div>
                                                            <!--<input type="checkbox"  onclick="themeToggle()" id="theme-switcher" style="height:20px ;width:20px;" > -->
                                                            <a href="joined.php?postid=<?php echo $pid; ?>&postname=<?php echo $res['lookingfor']; ?>"><label style="font-weight:bold;font-size:25px;width:250px;" class="btn btn-primary inline-block btn-msg">Join</label></a>
                                                            <a href="unjoined.php?postid=<?php echo $pid; ?>&postname=<?php echo $res['lookingfor']; ?>"><label style="font-weight:bold;font-size:25px;width:250px;" class="btn btn-primary inline-block btn-msg">Unjoin</label></a>
                                                            <a href="like.php?postid=<?php echo $pid; ?>"><label style="font-weight:bold;font-size:25px;width:250px;" class="btn btn-primary inline-block btn-msg">Like</label></a>
                                                            <a href="unlike.php?postid=<?php echo $pid; ?>"><label style="font-weight:bold;font-size:25px;width:250px;" class="btn btn-primary inline-block btn-msg">Unlike</label></a>
                          
                                                            </div>
                                                            <hr />
                                                            <div>
                                                                <div align="center">
                                                                    <h2>Comments</h2>
                                                                    <h3 align="left">
                                                                    <?php 
                                                                
                                                                    while($res2=mysqli_fetch_array($query2))
                                                                    {
                                                                        echo $res2['username'] . ' : ' .  $res2['comment'];
                                                                        echo "<br />";
                                                                        echo $res2['date_created'];
                                                                        ?>
                                                                        <hr />
                                                                        <br />
                                                                        <?php 
                                                                    }
                                                                    ?>
                                                                    </h3>
                                                                    <br />
                                                                </div>
                                                            </div>
                                                            <form action="comment.php?username=<?php echo $username ?>&postid=<?php echo $pid ?>" method="POST">
                                                            <textarea rows=3 cols=10 name="cmt" required></textarea>
                                                            <input type="submit" value="comment">
                                                            </form>
                                                            
                                                          <!--   <span title="Join" id="join_post" class=" py-1 join_post btn btn-primary inline-block" style="display:none;">Join</span>

                                                            <span title="Unjoin" id="unjoin_post" class=" py-1 unjoin_post btn btn-primary inline-block">Unjoin</span> -->



                                                            <div class="yualert row" style="display:none;">

                                                                <div class="col-11">You have joined this post successfully. The post owner will be notified.</div>

                                                                <button class="btn px-0 col-1 text-white bg-primary py-2 yu-close">Ok</button>

                                                            </div>

                                                            <div class="yulikealert row" style="display:none;">

                                                                <div class="col-11">You have liked this post successfully. The post owner will be notified.</div>

                                                                <button class="btn px-0 col-1 text-white bg-primary py-2 yu-close">Ok</button>

                                                            </div>

                                                            <div class="yuunlikealert row" style="display:none;">

                                                                <div class="col-11">You have unliked this post successfully. The post owner will be notified.</div>

                                                                <button class="btn px-0 col-1 text-white bg-primary py-2 yu-close">Ok</button>

                                                            </div>

                                                            <div class="yuunjoinalert row" style="display:none;">

                                                                <div class="col-11">You have unjoined this post successfully. The post owner will be notified.</div>

                                                                <button class="btn px-0 col-1 text-white bg-primary py-2 yu-close">Ok</button>

                                                            </div>

                                                            <div class="yualertlike row" style="display:none;">

                                                                <div class="col-10">Thank you for your feedback</div>

                                                                <div class="col-1 px-0 "><button class="btn text-white bg-primary py-2 yu-close">Ok</button></div>

                                                            </div>

                                                        </div>

                                                    </div>


                                                </div>

                                            </div>

                                            <div class=" col-md-12">

                                                <div id="map" class="shadow" style="height: 350px; width:100%;"></div>

                                            </div>

                                        </div>

                                    </div>


                                    <br><br>

                                   <!-- <div class="section-title post_interests">

                                        <h2>List of users interested in this post</h2>

                                    </div>

                                    <div class="form_section user_interest_section col-md-6" style="border-radius: 10px;">

                                        <div class="form-row">

                                            <div class="form-group col-md-12">

                                                <table>

                                                    <tr>

                                                        <th>User</th>

                                                        <th>Action</th>

                                                    </tr>


                                                </table>

                                            </div>

                                        </div>

                                    </div>


                                    <div class="section-comments">


                                        <div class="comment-form">

                                            <div class="row">

                                                <div class="post-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col">
                                                    <h2>Leave Comments</h2>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                                                    <form action="" name="usercommments" id="usercomments">

                                                        <div class="form-group">

                                                            <input type="hidden" name="commentpostid" id="commentpostid" value="5127" />

                                                            <input type="hidden" name="commentuserid" id="commentuserid" value="1" />

                                                            <textarea class="form-control" name="commentbox" id="commentbox" placeholder="Leave comments..." onKeyDown="textCounter(this,'q17length',500);" onKeyUp="textCounter(this,'q17length',500)" required></textarea>

                                                            <span class="error">Please enter your comments.</span>

                                                            <div class="button-box">

                                                                <input class="counter" readonly="readonly" type="text" id='q17length' name="q17length" size="3" maxlength="3" value="500" />/ 500 characters left

                                                                <button name="addcomments" id="addcomments" type="button" class="addcomments">Post Comments</button>

                                                            </div>

                                                        </div>

                                                    </form>

                                                </div>

                                            </div>

                                        </div>


                                        <link async type="text/css" rel="stylesheet" href="https://echobuyer.com/wp-content/themes/echobuyers/assets/css/post-comments.css" />


                                        <div class="modal fade deletemodal" id="delete_comments_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">

                                            <div class="modal-dialog" role="document">

                                                <div class="modal-content">

                                                    <div class="modal-header">

                                                        <h5 class="modal-title" id="exampleModalLabel1">Delete Confirmation</h5>

                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

  					  <span aria-hidden="true">&times;</span>

  					</button>

                                                    </div>

                                                    <div class="modal-body">

                                                        <p>Are you sure you want to delete this comment?</p>

                                                        <form method="post" name="deletecomment" id="deletecomment" action="">

                                                            <div class="form-group">

                                                                <input type="hidden" class="form-control" name="post_id" id="delete-data-id" value="0" />

                                                                <input type="hidden" class="form-control" name="action" value="deletecomment" />

                                                                <input type="hidden" name="commentuserid" id="commentuserid" value="" />

                                                            </div>

                                                            <button type="button" class="btn btn-primary btn-close" data-dismiss="modal">Close</button>

                                                            <input type="button" class="btn btn-primary btn-delete" value="Delete" />

                                                        </form>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                    </div>

                    </section>



                    <!-- Modal -->

                    <div class="modal fade deletemodal" id="delete_post_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog" role="document">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                </button>

                                </div>

                                <div class="modal-body">

                                    <p>Are you sure you want to delete this post?</p>

                                    <form method="post" action="">

                                        <div class="form-group">

                                            <input type="hidden" class="form-control" name="post_id" id="delete-data-id" value="0" />

                                            <input type="hidden" class="form-control" name="action" value="delete" />

                                        </div>

                                        <button type="button" class="btn btn-primary btn-close" data-dismiss="modal">Close</button>

                                        <input type="button" class="btn btn-primary btn-delete" value="Delete" />

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Modal -->

                    <div class="modal fade reply_to_interest_modal" id="reply_interest_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog" role="document">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLabel">Reply to user interest <span id="service_id"></span></h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                        </button>

                                </div>

                                <div class="modal-body">

                                    <p style="margin:0px;">Are you sure you want to reply?</p>

                                    <form method="post" action="">

                                        <div class="form-group">

                                            <input type="hidden" id="deal_id" name="deal_id" value="" />

                                            <input type="hidden" id="post_id" name="post_id" value="" />

                                            <input type="hidden" name="action" value="save_reply" />

                                        </div>

                                        <button type="button" class="btn btn-primary btn-close" data-dismiss="modal">Close</button>

                                        <input type="submit" class="btn btn-primary confirm_reply" value="Confirm Reply" />

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>

                    <script type="text/javascript">
                        jQuery('.delete_post').on('click', function() {

                            jQuery('#delete_post_modal').modal('show');

                            var dataid = jQuery(this).attr('data-id');

                            if (dataid) {

                                jQuery('.deletemodal #delete-data-id').val(dataid);

                            }

                        });

                        jQuery('.reply_to_interest').on('click', function(e) {

                            //jQuery('#reply_interest_modal').modal('show');

                            jQuery('.loader').show();

                            var dataid = jQuery(this).attr('data-dealid');

                            var postid = jQuery(this).attr('data-postid');

                            if (dataid) {

                                jQuery('.reply_to_interest_modal #deal_id').val(dataid);

                                jQuery('.reply_to_interest_modal #post_id').val(postid);

                            }

                            jQuery(this).addClass('active');

                            jQuery.ajax({

                                type: "post",

                                dataType: "json",

                                url: ajax_object.ajax_url,

                                data: 'post_id=' + postid + '&deal_id=' + dataid + '&action=save_reply',

                                success: function(msg) {

                                    if (jQuery.trim(msg) == "true") {

                                        location.reload();

                                        jQuery('#reply_interest_modal').modal('hide');

                                    }

                                }

                            });

                        });
                        var tSwitcher = document.getElementById('theme-switcher');
let element = document.body;

let onpageLoad = localStorage.getItem("theme") || "";
if(onpageLoad != null && onpageLoad  == 'dark-mode'){
  tSwitcher.checked = true;
} 
element.classList.add(onpageLoad);


function themeToggle(){
  if(tSwitcher.checked){
      localStorage.setItem('theme', 'dark-mode');
        element.classList.add('dark-mode');
    } else {
      localStorage.setItem('theme', '');
        element.classList.remove('dark-mode');
    }
}
                        /*jQuery('.reply_to_interest_modal .confirm_reply').on('click', function(){

                            var dataid = jQuery('.reply_to_interest_modal #deal_id').val();

                            var postid = jQuery('.reply_to_interest_modal #post_id').val();

                            jQuery.ajax({

                                type: "post",

                                dataType: "json",

                                url: ajax_object.ajax_url,

                                data: 'post_id='+postid+'&deal_id='+dataid+'&action=save_reply',

                                success: function(msg){

                                    if( jQuery.trim(msg) == "true" ){

                                        location.reload();

                                        jQuery('#reply_interest_modal').modal('hide');

                                    }

                                }

                            });

                            return false;

                        });*/
                    </script>


                    </main>

                    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJDjCKuE0cpTwA6XHhzNuX2r5WqJXtMr8" type="text/javascript"></script>

                    <script async type="text/javascript">
                        function textCounter(field, cnt, maxlimit) {

                            var cntfield = document.getElementById(cnt)

                            if (field.value.length > maxlimit) // if too long...trim it!

                                field.value = field.value.substring(0, maxlimit);

                            // otherwise, update 'characters left' counter

                            else {

                                jQuery("#commentbox + span").hide();

                                cntfield.value = maxlimit - field.value.length;

                            }

                        }

                        jQuery('.addcomments').on('click', function(e) {

                            var commentText = jQuery("#commentbox").val().trim();

                            if (commentText.length > 1) {

                                jQuery("#commentbox + span").hide();

                                jQuery('.loader').show();

                                var form = jQuery("#usercomments").serialize();

                                jQuery.ajax({

                                    type: "post",

                                    dataType: "json",

                                    url: ajax_object.ajax_url,

                                    data: form + '&action=saveComments',

                                    success: function(msg) {

                                        if (jQuery.trim(msg) == "true") {

                                            location.reload();

                                        }

                                    }

                                });

                            } else {

                                jQuery("#commentbox").addClass('error');

                                jQuery("#commentbox + span").show();

                            }

                        });

                        jQuery('.delete_comments').on('click', function() {

                            jQuery('#delete_comments_modal').modal('show');

                            var dataid = jQuery(this).attr('data-id');

                            var datauserid = jQuery(this).attr('data-user_id');

                            if (dataid) {

                                jQuery('.deletemodal #delete-data-id').val(dataid);

                                jQuery('.deletemodal #commentuserid').val(datauserid);

                            } else {

                                jQuery('.loader').hide();

                            }

                        });

                        jQuery("#delete_comments_modal").on("click", '.btn-delete', function() {

                            jQuery('.loader').show();

                            jQuery('#delete_comments_modal').modal('hide');

                            var form = jQuery("#deletecomment").serialize();

                            jQuery.ajax({

                                type: "post",

                                dataType: "json",

                                url: ajax_object.ajax_url,

                                data: form + '&action=deleteComment',

                                success: function(msg) {

                                    if (jQuery.trim(msg) == "true") {

                                        location.reload();

                                    }

                                }

                            });

                        });

                        setTimeout(function() {

                            var latitude = '';

                            var longitude = '';

                            latitude = '29.1491875';

                            longitude = '75.7216527';

                            var map = new google.maps.Map(document.getElementById('map'), {

                                zoom: 14,

                                center: new google.maps.LatLng(latitude, longitude),

                                mapTypeId: google.maps.MapTypeId.ROADMAP

                            });

                            var marker;

                            marker = new google.maps.Marker({

                                position: new google.maps.LatLng(latitude, longitude),

                                map: map

                            });

                        }, 700);
                    </script>

                    <!----- Raj ----->

                    <script>
                        jQuery('#join_post').on('click', function() {

                            var user_id = "1";

                            var post_id = "5127";

                            var post_owner = "1";

                            jQuery('.yualert').hide();

                            jQuery('.yualertlike').hide();

                            jQuery('.yuunjoinalert').hide();

                            jQuery('.loader').show();

                            jQuery.ajax({

                                type: "post",

                                url: ajax_object.ajax_url,

                                dataType: "json",

                                data: {

                                    user_id: user_id,

                                    post_id: post_id,

                                    post_owner: post_owner,

                                    action: 'save_post_join',

                                },

                                success: function(response) {

                                    if (jQuery.trim(response) == "true") {

                                        //alert('You have joined this post successfully. The post owner will be notified.');

                                        jQuery('.yualert').show();

                                        jQuery('.join_post').hide();

                                        jQuery('.unjoin_post').show();



                                        //joined count

                                        var joined = jQuery('#joined_count').attr('val');

                                        joined = parseInt(joined) + 1;

                                        jQuery('#joined_count').attr('val', joined);

                                        jQuery('#joined_count').text('Joined #: ' + joined);



                                        //needed count

                                        var needed = jQuery('#needed_count').attr('val');

                                        needed = parseInt(needed) - 1;

                                        jQuery('#needed_count').attr('val', needed);

                                        jQuery('#needed_count').text('Needed #: ' + ((needed > 0) ? needed : '0'));

                                    }

                                    jQuery('.loader').hide();

                                },

                                error: function(response) {

                                    //console.log(response);

                                    jQuery('.yualert').show();

                                    jQuery('.loader').hide();

                                }

                            });

                        });

                        jQuery('#unjoin_post').on('click', function() {

                            var user_id = "1";

                            var post_id = "5127";

                            jQuery('.yualert').hide();

                            jQuery('.yualertlike').hide();

                            jQuery('.yuunjoinalert').hide();

                            if (confirm('You are going to unjoin from this post?')) {

                                jQuery('.loader').show();

                                jQuery.ajax({

                                    type: "post",

                                    url: ajax_object.ajax_url,

                                    dataType: "json",

                                    data: {

                                        user_id: user_id,

                                        post_id: post_id,

                                        action: 'remove_post_join',

                                    },

                                    success: function(response) {

                                        if (jQuery.trim(response) == "true") {

                                            jQuery('.yuunjoinalert').show();

                                            jQuery('.unjoin_post').hide();

                                            jQuery('.join_post').show();



                                            //joined count

                                            var joined = jQuery('#joined_count').attr('val');

                                            joined = parseInt(joined) - 1;

                                            jQuery('#joined_count').attr('val', joined);

                                            jQuery('#joined_count').text('Joined #: ' + joined);



                                            //needed count

                                            var needed = jQuery('#needed_count').attr('val');

                                            needed = parseInt(needed) + 1;

                                            jQuery('#needed_count').attr('val', needed);

                                            jQuery('#needed_count').text('Needed #: ' + ((needed > 0) ? needed : '0'));

                                        }

                                        jQuery('.loader').hide();

                                    },

                                    error: function(response) {

                                        //console.log(response);

                                        jQuery('.yualert').show();

                                        jQuery('.loader').hide();

                                    }

                                });

                            }

                        });

                        jQuery('.yu-close').on('click', function() {

                            jQuery('.yualert').hide();

                            jQuery('.yualertlike').hide();

                            jQuery('.yuunjoinalert').hide();

                            jQuery('.yulikealert').hide();

                            jQuery('.yuunlikealert').hide();

                        });

                        jQuery('span#btn-like').on('click', function() {

                            var post_id = "5127";

                            var user_id = "1";

                            var post_owner = "1";

                            jQuery('.yualert').hide();

                            jQuery('.yualertlike').hide();

                            jQuery('.yuunjoinalert').hide();

                            jQuery('.loader').show();

                            jQuery.ajax({

                                type: "post",

                                url: ajax_object.ajax_url,

                                dataType: "json",

                                data: {

                                    user_id: user_id,

                                    post_id: post_id,

                                    post_owner: post_owner,

                                    action: 'save_post_like',

                                },

                                success: function(response) {

                                    if (jQuery.trim(response) == "true") {

                                        jQuery('.yulikealert').show();

                                        jQuery('.unlike-btn').show();

                                        jQuery('.btn-like').hide();

                                    }

                                    jQuery('.loader').hide();

                                },

                                error: function(response) {

                                    console.log(response);

                                    jQuery('div.yualertlike').show();

                                    jQuery('.loader').hide();

                                }

                            });

                        });

                        jQuery('#unlike-btn').on('click', function() {

                            var user_id = "1";

                            var post_id = "5127";

                            jQuery('.yualert').hide();

                            jQuery('.yualertlike').hide();

                            jQuery('.yuunjoinalert').hide();

                            if (confirm('You are going to unlike from this post?')) {

                                jQuery('.loader').show();

                                jQuery.ajax({

                                    type: "post",

                                    url: ajax_object.ajax_url,

                                    dataType: "json",

                                    data: {

                                        user_id: user_id,

                                        post_id: post_id,

                                        action: 'remove_post_like',

                                    },

                                    success: function(response) {

                                        if (jQuery.trim(response) == "true") {

                                            jQuery('.yuunlikealert').show();

                                            jQuery('.unlike-btn').hide();

                                            jQuery('.btn-like').show();

                                        }

                                        jQuery('.loader').hide();

                                    },

                                    error: function(response) {

                                        //console.log(response);

                                        jQuery('.yualert').show();

                                        jQuery('.loader').hide();

                                    }

                                });

                            }

                        });
                    </script>

                    <style>
                        .join_post,
                        .unjoin_post,
                        .btn-like,
                        .unlike-btn,
                        .btn-msg {
                            max-width: 120px !important;
                            background-color: #37517e !important;
                            font-size: 14px !important;
                        }

                        .yualert,
                        .yuunjoinalert,
                        .yulikealert,
                        .yuunlikealert {
                            text-align: center;
                            background-color: #eee;
                            padding: 5px;
                            margin: 5px;
                            margin-top: 15px;
                            position: absolute;
                        }
                    </style>

                   



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


                    </div>
                    <!-- #page -->

                    <script>
                        document.body.classList.remove("no-js");
                    </script>
                    <script>
                        if (-1 !== navigator.userAgent.indexOf('MSIE') || -1 !== navigator.appVersion.indexOf('Trident/')) {

                            document.body.classList.add('is-IE');

                        }
                    </script>

                    <script type="text/template" id="tmpl-elementor-templates-modal__header">
                        <div class="elementor-templates-modal__header__logo-area"></div>
                        <div class="elementor-templates-modal__header__menu-area"></div>
                        <div class="elementor-templates-modal__header__items-area">
                            <# if ( closeType ) { #>
                                <div class="elementor-templates-modal__header__close elementor-templates-modal__header__close--{{{ closeType }}} elementor-templates-modal__header__item">
                                    <# if ( 'skip'===c loseType ) { #>
                                        <span>Skip</span>
                                        <# } #>
                                            <i class="eicon-close" aria-hidden="true" title="Close"></i>
                                            <span class="elementor-screen-only">Close</span>
                                </div>
                                <# } #>
                                    <div id="elementor-template-library-header-tools"></div>
                        </div>
                    </script>

                    <script type="text/template" id="tmpl-elementor-templates-modal__header__logo">
                        <span class="elementor-templates-modal__header__logo__icon-wrapper e-logo-wrapper">
		<i class="eicon-elementor"></i>
	</span>
                        <span class="elementor-templates-modal__header__logo__title">{{{ title }}}</span>
                    </script>
                    <script type="text/template" id="tmpl-elementor-finder">
                        <div id="elementor-finder__search">
                            <i class="eicon-search"></i>
                            <input id="elementor-finder__search__input" placeholder="Type to find anything in Elementor" autocomplete="off">
                        </div>
                        <div id="elementor-finder__content"></div>
                    </script>

                    <script type="text/template" id="tmpl-elementor-finder-results-container">
                        <div id="elementor-finder__no-results">No Results Found</div>
                        <div id="elementor-finder__results"></div>
                    </script>

                    <script type="text/template" id="tmpl-elementor-finder__results__category">
                        <div class="elementor-finder__results__category__title">{{{ title }}}</div>
                        <div class="elementor-finder__results__category__items"></div>
                    </script>

                    <script type="text/template" id="tmpl-elementor-finder__results__item">
                        <a href="{{ url }}" class="elementor-finder__results__item__link">
                            <div class="elementor-finder__results__item__icon">
                                <i class="eicon-{{{ icon }}}"></i>
                            </div>
                            <div class="elementor-finder__results__item__title">{{{ title }}}</div>
                            <# if ( description ) { #>
                                <div class="elementor-finder__results__item__description">- {{{ description }}}</div>
                                <# } #>
                        </a>
                        <# if ( actions.length ) { #>
                            <div class="elementor-finder__results__item__actions">
                                <# jQuery.each( actions, function() { #>
                                    <a class="elementor-finder__results__item__action elementor-finder__results__item__action--{{ this.name }}" href="{{ this.url }}" target="_blank">
				<i class="eicon-{{{ this.icon }}}"></i>
			</a>
                                    <# } ); #>
                            </div>
                            <# } #>
                    </script>
                   
                   

                    <script>
                        /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", (function() {
                            var t, e = location.hash.substring(1);
                            /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
                        }), !1);
                    </script>


                    <!-- RAJ -->
                    <script>
                        jQuery(function() {
                            jQuery(window).on("scroll", function() {
                                jQuery('img').each(function() {
                                    var url = jQuery(this).attr('data-src');
                                    jQuery(this).attr('src', url);
                                });
                                jQuery(window).off('scroll');
                            });
                        });
                    </script>
                    

</body>

</html>