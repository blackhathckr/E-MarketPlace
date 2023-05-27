<?php
session_start();
if(!isset($_SESSION['log']))
{
    header("Location:./index.html");
}
$user =$_SESSION['log'];
include_once 'conn.php';
$sql1 = "SELECT * FROM users where username='$user'";
$query1=mysqli_query($conn,$sql1);
$result1 = mysqli_fetch_array($query1);
$uid = $result1['user_id'];
$sql2= "SELECT * FROM posts WHERE user_id='$uid' AND approve_id=1";
$query2=mysqli_query($conn,$sql2);
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

    
    <title>My page - Echo Buyer</title>
    <!-- Admin only notice: this page does not show a meta description because it does not have one, either write it for this page specifically or go into the [SEO - Search Appearance] menu and set up a template. -->
    <link rel="canonical" href="https://echobuyer.com/my-page/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="My page - Echo Buyer" />
    <meta property="og:url" content="https://echobuyer.com/my-page/" />
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
                "@id": "https://echobuyer.com/my-page/#webpage",
                "url": "https://echobuyer.com/my-page/",
                "name": "My page - Echo Buyer",
                "isPartOf": {
                    "@id": "https://echobuyer.com/#website"
                },
                "datePublished": "2021-04-02T15:21:29+00:00",
                "dateModified": "2021-04-02T15:21:29+00:00",
                "breadcrumb": {
                    "@id": "https://echobuyer.com/my-page/#breadcrumb"
                },
                "inLanguage": "en-US",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["https://echobuyer.com/my-page/"]
                }]
            }, {
                "@type": "BreadcrumbList",
                "@id": "https://echobuyer.com/my-page/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://echobuyer.com/"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "My page"
                }]
            }]
        }
    </script>
    <!-- / Yoast SEO plugin. -->

    <script src="https://unpkg.com/@googlemaps/js-api-loader@1.0.0/dist/index.min.js"></script>
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

  
    <style>
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <meta name="ahrefs-site-verification" content="a40a5ba07f3554aff6f3ce03a2bb25b5d800e9bebc77a0d5589fdd21396c055b">
    <!-- Favicons -->
    <!--link href="https://echobuyer.com/wp-content/themes/echobuyers/assets/images/favicon.png" rel="icon"-->
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

<body class="page-template page-template-templates page-template-template-my-profile page-template-templatestemplate-my-profile-php page page-id-41 logged-in wp-embed-responsive is-light-theme no-js singular elementor-default elementor-kit-205">
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
                                                            
                                                            <li><a href="./chat/login.php">Messages</a></li>

                                                            <li style="position: relative;">
                                                                <a href="logout.php">Sign Out</a>
                                                               
                                                            </li>
                                                            <li> <a href="help.php">Help</a> </li>
                                                            <li class="last"><a href="logindex.php"></a></li>
                     
                           </ul>
                           </div>
                            <!-- end header inner -->
                        </header>
                        <!-- end header -->



                       <!-- <main id="main">

                            <section id="page" class="page imap userprofile">

                                <div class="container" data-aos="fade-up">

                                    <div class="section-title">


                                        <h2 style="color: #f54172;">Admin Control</h2>


                                    </div>












                                    <div class="row">

                                        <div class="col-md-2 col-5 text-center userImage">

                                            <div class="user_image">

                                                <img src="/wp-content/uploads/2021/08/3_coach1.jpg" style="width:90px;height:90px;" class="rounded-circle" />

                                            </div>

                                            <a href="https://echobuyer.com/edit-my-profile">Edit</a>

                                        </div>

                                        <div class="col-6 mx-0 px-0 align-middle" style="margin: auto;">

                                            <div class="col-md-12 px-0 username">chandan garg</div>

                                            <div class="col-md-12 px-0 useremail">cgarg3@gmail.com</div>

                                            <div class="col-md-12 px-0 userbio">This is my bio, updated</div>

                                        </div>

                                    </div>

                                    <hr/>


                                    <div class="row topStocks">

                                        <div class="col-md-4 my-2">

                                            <div class="col-12 topstocksdiv pink bg-light yu yu-border-top-blue yu-border-bottom-blue ">

                                                <p>Admin Updates</p>

                                                <hr class="my-0 py-0" />

                                                <ul>

                                                    <li><i class="bx bx-chevron-right"></i><a href="https://echobuyer.com/">Link 1</a></li>

                                                    <li><i class="bx bx-chevron-right"></i><a href="https://echobuyer.com/">Link 2</a></li>

                                                    <li><i class="bx bx-chevron-right"></i><a href="https://echobuyer.com/">Link 3</a></li>

                                                </ul>

                                            </div>

                                        </div>



                                        <div class="col-md-4 my-2">

                                            <div class="col-12 topstocksdiv pink bg-light yu yu-border-top-blue yu-border-bottom-blue ">

                                                <p>Admin Navigate</p>

                                                <hr class="my-0 py-0" />

                                                <ul>

                                                    <li><i class="bx bx-chevron-right"></i><a href="https://echobuyer.com/wp-admin/users.php">User Management</a></li>

                                                    <!--li><i class="bx bx-chevron-right"></i><a href="https://echobuyer.com/wp-admin/edit.php?post_type=ufaq">FAQ's</a></li

                                                    <li><i class="bx bx-chevron-right"></i><a href="https://echobuyer.com/wp-admin/admin.php?page=cfdb7-list.php&fid=11">Contact Us Submission Data</a></li>

                                                    <li><i class="bx bx-chevron-right"></i><a href="https://echobuyer.com/wp-admin/admin.php?page=es_subscribers">Newsletter Subscribers</a></li>

                                                    <li><i class="bx bx-chevron-right"></i><a data-toggle="modal" data-target="#ban_ip_modal">Ban a IP</a></li>

                                                </ul>

                                            </div>

                                        </div>

                                        <div class="col-md-4 my-2">

                                            <div class="col-12 topstocksdiv pink bg-light yu yu-border-top-blue yu-border-bottom-blue ">

                                                <p>Admin Analysis</p>

                                                <hr class="my-0 py-0" />

                                                <ul>

                                                    <li><i class="bx bx-chevron-right"></i><a href="https://echobuyer.com/">Link 1</a></li>

                                                    <li><i class="bx bx-chevron-right"></i><a href="https://echobuyer.com/">Link 2</a></li>

                                                    <li><i class="bx bx-chevron-right"></i><a href="https://echobuyer.com/">Link 3</a></li>

                                                </ul>

                                            </div>

                                        </div>

                                    </div> -->





                                    <div class="row mt-0 topStocks">

                                        <div class="col-md-8 px-0 px-sm-3 my-2">

                                            <div class="col-12 h-100 yu yu-border-top-blue yu-border-bottom-blue bg-light topstocksdiv pink my-requests">

                                                <h3 class="text-dark" style="margin-left:5px;">My Posts</h3>

                                                <ul>

                                                    <li class="yu-only-desktop row">

                                                        <div class="lookingfor col-md-2"><label>Post ID</label></div>
                                                        <div class="col-md-10">
                                                            <div class="lookingfor"><label>Title</label></div>

                                                            <div class="lookingfor"><label>Latest By</label></div>


                                                            <div class="lookingfor"><label>City</label></div>

                                                            <div class="lookingfor"><label>Price</label></div>

                                                             <div class="lookingfor"><label>Discount</label></div> 

                                                           <!-- <div class="lookingfor action"><label>Action</label></div> -->

                                                        </div>

                                                    </li>
                                                    <style>
                                                        .yu-search-list {
                                                            border-radius: 50%;
                                                            height: 42px;
                                                            width: 42px;
                                                            background-size: cover;
                                                            padding: 10.5px 21px;
                                                            margin-bottom: 5px;
                                                            display: block;
                                                        }

                                                        .yu-only-mobile {
                                                            display: none !important;
                                                        }

                                                        @media (max-width: 767px) {
                                                            .yu-search-list {
                                                                border-radius: 3px;
                                                                height: auto;
                                                                width: 100%;
                                                                background-position: center;
                                                                padding: 30% 21px;
                                                            }
                                                            .yu-list-li {
                                                                padding: 0 !important;
                                                            }
                                                            .yu-lookingfor-title,
                                                            .yu-lookingfor-discount,
                                                            .yu-lookingfor-latestby {
                                                                width: 100% !important;
                                                            }
                                                            .yu-lookingfor,
                                                            .yu-lookingfor-address,
                                                            .yu-lookingfor-dealcount {
                                                                width: auto !important;
                                                                white-space: nowrap;
                                                            }
                                                            .yu-lookingfor-action {
                                                                position: absolute;
                                                                right: 0;
                                                                top: 15px;
                                                            }
                                                            .yu-only-mobile,
                                                            .yu-lookingfor-address p {
                                                                display: inline-block !important;
                                                            }
                                                            .yu-only-desktop {
                                                                display: none !important;
                                                            }
                                                            .my-requests .lookingfor p {
                                                                width: auto !important;
                                                            }
                                                        }
                                                    </style>

<?php
                                                    if($query2=mysqli_query($conn,$sql2))
                                                    {
                                                     while($result2=mysqli_fetch_array($query2)) 
                                                    {
                                                        ?>
                                                    <li class="row p-0 yu-list-li" style="box-shadow: 0 0px 1px #47b2e4 inset, 0 0 1px #47b2e4;">

                                                        <div class="col-md-2 px-0 pt-md-2 pl-md-3">

                                                            <!--div class="lookingfor"><p><span style="border-radius:50%;height:42px;width:42px; background-image:url(/wp-content/uploads/2021/12/coach-1.jpg);background-size:cover;padding: 10.5px 21px;margin-bottom: 5px;display: block;"></span><a href="https://echobuyer.com/post-detail/?post_id=5127">Coach</a></p></div-->

                                                            <a >
                                                                <div class="yu-search-list" ><span></span><span style="font-weight:bold;"><?php echo $result2['post_id']; $pid=$result2['post_id']; ?></span></div>
                                                            </a>

                                                        </div>

                                                        <div class="col-md-10 py-3">
                                                            <div class="lookingfor yu-lookingfor-title">
                                                                <p><span class="yu-only-mobile">Title: </span> <a href="post_details.php?postid=<?php echo $pid; ?>"><span style="font-weight:bold;"><?php echo $result2['title']; ?></a></span></p>
                                                            </div>


                                                            <div class="lookingfor yu-lookingfor-latestby">
                                                                <p><span class="yu-only-mobile">Latest by: </span><span style="font-weight:bold;"><?php echo $result2['post_date']; ?></span></p>
                                                            </div>

                                                            <div class="lookingfor yu-lookingfor-discount">
                                                                <p><span class="yu-only-mobile">City </span><span style="font-weight:bold;"><?php echo $result2['city']; ?></span></p>
                                                            </div>

                                                            <div class="lookingfor yu-lookingfor-address">
                                                                
                                                                <p><span class="yu-only-mobile">Price</span><span style="font-weight:bold;"><?php echo $result2['price']; ?> </span> </p>
                                                            </div>

                                                            <div class="lookingfor yu-lookingfor-dealcount">
                                                                <p><span class="yu-only-mobile">Discount</span><span style="font-weight:bold;"><?php echo $result2['discount']; ?> </span>
                                                                </p>
                                                            </div>
                                                            <a href="delete_post.php?postid=<?php echo $pid; ?>"><span style="font-weight:bold;color:black"><?php echo "Delete" ?> </span></a>
                                                            

                                                            
                                                       
                                                            

                                                          <!--  <div class="lookingfor action yu-lookingfor-action">

                                                                <a href="https://echobuyer.com/edit-post-request/?post_id=5127"><i class="bx bx-edit"></i></a>

                                                                <a href="javascript:void(0);" data-id="5127" class="delete_post"><i class="bx bx-trash-alt"></i></a>

                                                            </div> -->



                                                        </div>

                                                    </li>
                                                    <?php 
                                                    }
                                                    }
                                                    ?>

                                                   <!--  <li class="row p-0 yu-list-li" style="box-shadow: 0 0px 1px #47b2e4 inset, 0 0 1px #47b2e4;">

                                                        <div class="col-md-2 px-0 pt-md-2 pl-md-3">

                                                            div class="lookingfor"><p><span style="border-radius:50%;height:42px;width:42px; background-image:url(/wp-content/uploads/2021/12/house.jpg);background-size:cover;padding: 10.5px 21px;margin-bottom: 5px;display: block;"></span><a href="https://echobuyer.com/post-detail/?post_id=5094">RealEstate</a></p></div>

                                                            <a href="https://echobuyer.com/post-detail/?post_id=5094">
                                                                <div class="yu-search-list" style="background-image:url(/wp-content/uploads/2021/12/house.jpg);"></div>
                                                            </a>

                                                        </div>

                                                        <div class="col-md-10 py-3">
                                                            <div class="lookingfor yu-lookingfor-title">
                                                                <p><span class="yu-only-mobile">Title: </span> <a href="https://echobuyer.com/post-detail/?post_id=5094">Looking for a residential plot.</a></p>
                                                            </div>


                                                            <div class="lookingfor yu-lookingfor-latestby">
                                                                <p><span class="yu-only-mobile">Latest by: </span> <a href="https://echobuyer.com/post-detail/?post_id=5094">2022-07-10</a></p>
                                                            </div>

                                                            <div class="lookingfor yu-lookingfor-discount">
                                                                <p><span class="yu-only-mobile">Discount: </span> 20</p>
                                                            </div>

                                                            <div class="lookingfor yu-lookingfor-address">
                                                                <p>Hisar</p>
                                                                <p><span class="yu-only-mobile">, </span> <small>sec-14</small></p>
                                                            </div>

                                                            <div class="lookingfor yu-lookingfor-dealcount">
                                                                <p><span class="yu-only-mobile">| Deal count: </span> 1</p>
                                                            </div>

                                                            <div class="lookingfor action yu-lookingfor-action">

                                                                <a href="https://echobuyer.com/edit-post-request/?post_id=5094"><i class="bx bx-edit"></i></a>

                                                                <a href="javascript:void(0);" data-id="5094" class="delete_post"><i class="bx bx-trash-alt"></i></a>

                                                            </div>



                                                        </div>

                                                    </li>


                                                    <li class="row p-0 yu-list-li" style="box-shadow: 0 0px 1px #47b2e4 inset, 0 0 1px #47b2e4;">

                                                        <div class="col-md-2 px-0 pt-md-2 pl-md-3">

                                                            div class="lookingfor"><p><span style="border-radius:50%;height:42px;width:42px; background-image:url(/wp-content/uploads/2021/12/house.jpg);background-size:cover;padding: 10.5px 21px;margin-bottom: 5px;display: block;"></span><a href="https://echobuyer.com/post-detail/?post_id=5093">RealEstate</a></p></div>

                                                            <a href="https://echobuyer.com/post-detail/?post_id=5093">
                                                                <div class="yu-search-list" style="background-image:url(/wp-content/uploads/2021/12/house.jpg);"></div>
                                                            </a>

                                                        </div>

                                                        <div class="col-md-10 py-3">
                                                            <div class="lookingfor yu-lookingfor-title">
                                                                <p><span class="yu-only-mobile">Title: </span> <a href="https://echobuyer.com/post-detail/?post_id=5093">Looking for a flat in rohini</a></p>
                                                            </div>


                                                            <div class="lookingfor yu-lookingfor-latestby">
                                                                <p><span class="yu-only-mobile">Latest by: </span> <a href="https://echobuyer.com/post-detail/?post_id=5093">2022-06-26</a></p>
                                                            </div>

                                                            <div class="lookingfor yu-lookingfor-discount">
                                                                <p><span class="yu-only-mobile">Discount: </span> 20</p>
                                                            </div>

                                                            <div class="lookingfor yu-lookingfor-address">
                                                                <p>Delhi</p>
                                                                <p><span class="yu-only-mobile">, </span> <small>rohini</small></p>
                                                            </div>

                                                            <div class="lookingfor yu-lookingfor-dealcount">
                                                                <p><span class="yu-only-mobile">| Deal count: </span> 3</p>
                                                            </div>

                                                            <div class="lookingfor action yu-lookingfor-action">

                                                                <a href="https://echobuyer.com/edit-post-request/?post_id=5093"><i class="bx bx-edit"></i></a>

                                                                <a href="javascript:void(0);" data-id="5093" class="delete_post"><i class="bx bx-trash-alt"></i></a>

                                                            </div>



                                                        </div>

                                                    </li>


                                                    <li class="row p-0 yu-list-li" style="box-shadow: 0 0px 1px #47b2e4 inset, 0 0 1px #47b2e4;">

                                                        <div class="col-md-2 px-0 pt-md-2 pl-md-3">

                                                            <div class="lookingfor"><p><span style="border-radius:50%;height:42px;width:42px; background-image:url(/wp-content/uploads/2021/12/2_education1.jpeg);background-size:cover;padding: 10.5px 21px;margin-bottom: 5px;display: block;"></span><a href="https://echobuyer.com/post-detail/?post_id=45">Education</a></p></div>

                                                            <a href="https://echobuyer.com/post-detail/?post_id=45">
                                                                <div class="yu-search-list" style="background-image:url(/wp-content/uploads/2021/12/2_education1.jpeg);"></div>
                                                            </a>

                                                        </div>

                                                        <div class="col-md-10 py-3">
                                                            <div class="lookingfor yu-lookingfor-title">
                                                                <p><span class="yu-only-mobile">Title: </span> <a href="https://echobuyer.com/post-detail/?post_id=45">IAS Coaching in Delhi</a></p>
                                                            </div>


                                                            <div class="lookingfor yu-lookingfor-latestby">
                                                                <p><span class="yu-only-mobile">Latest by: </span> <a href="https://echobuyer.com/post-detail/?post_id=45">2022-07-06</a></p>
                                                            </div>

                                                            <div class="lookingfor yu-lookingfor-discount">
                                                                <p><span class="yu-only-mobile">Discount: </span> 20</p>
                                                            </div>

                                                            <div class="lookingfor yu-lookingfor-address">
                                                                <p>Delhi</p>
                                                                <p><span class="yu-only-mobile">, </span> <small></small></p>
                                                            </div>

                                                            <div class="lookingfor yu-lookingfor-dealcount">
                                                                <p><span class="yu-only-mobile">| Deal count: </span> 2</p>
                                                            </div>

                                                            <div class="lookingfor action yu-lookingfor-action">

                                                                <a href="https://echobuyer.com/edit-post-request/?post_id=45"><i class="bx bx-edit"></i></a>

                                                                <a href="javascript:void(0);" data-id="45" class="delete_post"><i class="bx bx-trash-alt"></i></a>

                                                            </div>



                                                        </div>

                                                    </li> -->


                                                </ul>

                                                <a class="post-request btn position-absolute" style="top: 20px;right: 15px;border: 1px solid #000;padding: 5px 15px;color: #000;" href="post.php"><i class="bx bx-plus"></i> New Post</a>

                                            </div>

                                        </div>

                                        <div class="col-md-4  my-2 nobg">

                                            <div class="col-12">

                                                <div class="col-md-12 tophirediv skyblue bg-light yu yu-border-top-blue yu-border-bottom-blue ">

                                                    <p style="margin: 0 10px;">About</p>

                                                    <hr class="mt-2 mb-2" />

                                                    <ul>

                                                        <li><i class="bx bx-chevron-right"></i><a href="about_us.php">About-us</a> <span style="position: absolute;right: 20px;"></span></li>
                                                        <!-- link to page -- Select title,P.name from post_message PM,post P where PM.userid = $userid and PM.post_id =P.id and PM.interest =1-->

                                                        <li><i class="bx bx-chevron-right"></i><a href="help.php">Help</a> <span style="position: absolute;right: 20px;"></span></li>
                                                        <!-- link to page -- Select title,P.name from post_join PJ ,post P where PJ.userid = $userid and PJ.post_id =P.id -->

                                                        <li><i class="bx bx-chevron-right"></i><a href="post.php">Create a post</a></li>
                                                        <!-- link to post -->



                                                    </ul>

                                                    <i class="bx bx-pulse position-absolute" style="top: 10px; font-size: 45px; right: 20px; color: #222;"></i>

                                                </div>

                                                <div class="col-md-12 tophirediv2 green bg-light yu yu-border-top-blue yu-border-bottom-blue ">

                                                    <p style="margin: 0 10px;">Suggestions</p>

                                                    <hr class="mt-2 mb-2" />

                                                    <ul>

                                                        <li><i class="bx bx-chevron-right"></i><a href="#">Suggest New Product</a></li>
                                                        <!-- link to contact on  help with 'New product suggestion' as message start  -->

                                                        <li><i class="bx bx-chevron-right"></i><a href="#">Suggest a service</a></li>
                                                        <!-- link to contact on  help -->

                                                    </ul>

                                                    <i class="bx bx-stats position-absolute" style="top: 10px; font-size: 45px; right: 20px; color: #222;"></i>

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

                                                <input type="submit" class="btn btn-primary btn-delete" value="Delete" />

                                            </form>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <!--- Yu Ban IP Modal -->



                            <!-- Button trigger modal -->

                            <!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ban_ip_modal">

  Launch demo modal

</button-->



                            <!-- Modal -->

                            <div class="modal fade" id="ban_ip_modal" tabindex="-1" role="dialog" aria-labelledby="ban_ip_modal_label" aria-hidden="true">

                                <div class="modal-dialog" role="document">

                                    <div class="modal-content">

                                        <div class="modal-header">

                                            <h5 class="modal-title" id="ban_ip_modal_label">RESTRICT / BAN IP's</h5>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

                                        </div>

                                        <div class="modal-body">

                                            <span id="success_msg"></span>

                                            <form method="post" id="ban_ip_form">

                                                <div class="form-group">

                                                    <input type="text" class="form-control" name="ban_ip" id="ban_ip" placeholder="Enter IP" required/>

                                                    <input type="hidden" name="action" value="ban_ip" />

                                                </div>

                                                <input type="submit" class="btn btn-primary float-right btn-delete" value="Submit" id="ban_ip_form_submit" />

                                            </form>

                                        </div>

                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                            <button type="button" class="btn btn-primary">Save changes</button>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <script>
                                jQuery('#ban_ip_form_submit').on('click', function(e) {

                                    e.preventDefault();



                                    jQuery("#success_msg").html('');



                                    var form = jQuery("#ban_ip_form").serialize();

                                    jQuery('.loader').show();



                                    jQuery.ajax({

                                        type: "post",

                                        dataType: "json",

                                        url: ajax_object.ajax_url,

                                        data: form,

                                        success: function(msg) {

                                            if (jQuery.trim(msg) == 'true') {

                                                jQuery("#success_msg").html('<p class="text-success m-0 text-uppercase font-weight-bold">IP restricted successfully</p>');

                                                jQuery('.loader').hide();

                                            }

                                        },

                                        error: function(msg) {

                                            jQuery("#success_msg").html('<p class="text-danger m-0 text-uppercase font-weight-bold">IP restriction failed</p>');

                                            jQuery('.loader').hide();



                                        }

                                    });

                                });
                            </script>

                            <!-- /Yu Ban IP Modal -->





                        </main>



                        <script type="text/javascript">
                            jQuery('.delete_post').on('click', function() {

                                jQuery('#delete_post_modal').modal('show');

                                var dataid = jQuery(this).attr('data-id');

                                if (dataid) {

                                    jQuery('.deletemodal #delete-data-id').val(dataid);

                                }

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