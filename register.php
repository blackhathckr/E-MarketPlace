<?php
ob_start();
if(isset($_POST['reg']))
{ 
include_once "conn.php";
$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$username = $_POST["user_login"];
$email = $_POST["user_email"];
$password = $_POST["user_pass1"];
$pwd = $_POST["user_pass2"];
$phone = $_POST["user_phone"];
$street = $_POST["street"];
$area = $_POST["area"];
$city = $_POST["city"];
$country = $_POST["country"];
$zipcode = $_POST["zipcode"];
$user_pass1 = md5($password);
$user_pass = md5($pwd);
$ran_id = rand(time(), 100000000);
$status = "Active now";
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "SELECT * FROM users WHERE username='$username'";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) != 0) {
?>
<script>
alert("Username already exists . Please try another username");
window.location.href = "register.php";
</script>
<?php
}
else
{
?>
<script>
navigator.geolocation.getCurrentPosition(getLatLon);
function getLatLon(position) {
var latitude = position.coords.latitude;
var longitude = position.coords.longitude;
document.cookie = ` latitude = ${longitude}' `;
document.cookie = `longitude = ${longitude}' `;
<?php
$latitude = $_COOKIE['latitude'];
$longitude = $_COOKIE['longitude'];
$sql2 = "INSERT INTO users(unique_id,fname,lname,username,email,pass1,password,status,phone,street,area,city,country,zipcode,ip,latitude,longitude) Values ('$ran_id','$fname','$lname','$username','$email','$user_pass1','$user_pass','$status','$phone','$street','$area','$city','$country','$zipcode','$ip','$latitude','$longitude')";
$query2 = mysqli_query($conn, $sql2);
?>
}
</script>
<?php
}
if ($query2 == true) {
?>
<script>
alert("Registered Successfully");
window.location.href = "login.php";
</script>
<?php
}
}
ob_flush();
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

 
  <title>Register for Group buying on Echo Buyer</title>
  <meta name="description"
    content="Registering for group buying offers discounts and the convenience of joining a group of like-minded consumers. By registering, you can create a list of items you are interested in purchasing and receive updates about group buys as they occur." />
  <link rel="canonical" href="https://echobuyer.com/register/" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Register for Group buying on Echo Buyer" />
  <meta property="og:description"
    content="Registering for group buying offers discounts and the convenience of joining a group of like-minded consumers. By registering, you can create a list of items you are interested in purchasing and receive updates about group buys as they occur." />
  <meta property="og:url" content="https://echobuyer.com/register/" />
  <meta property="og:site_name" content="Echo Buyer" />
  <meta property="article:modified_time" content="2022-05-09T15:45:29+00:00" />
  <meta name="twitter:card" content="summary_large_image" />
  <script type="application/ld+json"
    class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebSite","@id":"https://echobuyer.com/#website","url":"https://echobuyer.com/","name":"Echo Buyer","description":"","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://echobuyer.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"WebPage","@id":"https://echobuyer.com/register/#webpage","url":"https://echobuyer.com/register/","name":"Register for Group buying on Echo Buyer","isPartOf":{"@id":"https://echobuyer.com/#website"},"datePublished":"2021-04-06T08:10:04+00:00","dateModified":"2022-05-09T15:45:29+00:00","description":"Registering for group buying offers discounts and the convenience of joining a group of like-minded consumers. By registering, you can create a list of items you are interested in purchasing and receive updates about group buys as they occur.","breadcrumb":{"@id":"https://echobuyer.com/register/#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://echobuyer.com/register/"]}]},{"@type":"BreadcrumbList","@id":"https://echobuyer.com/register/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://echobuyer.com/"},{"@type":"ListItem","position":2,"name":"Register"}]}]}</script>
  <!-- / Yoast SEO plugin. -->


  <link rel='dns-prefetch' href='//s.w.org' />
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

<body
  class="page-template page-template-templates page-template-template-register page-template-templatestemplate-register-php page page-id-48 wp-embed-responsive tml-action tml-action-register is-light-theme no-js singular elementor-default elementor-kit-205">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-dark-grayscale">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 0.49803921568627" />
          <feFuncG type="table" tableValues="0 0.49803921568627" />
          <feFuncB type="table" tableValues="0 0.49803921568627" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-grayscale">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 1" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0 1" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-purple-yellow">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-blue-red">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 1" />
          <feFuncG type="table" tableValues="0 0.27843137254902" />
          <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-midnight">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 0" />
          <feFuncG type="table" tableValues="0 0.64705882352941" />
          <feFuncB type="table" tableValues="0 1" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-magenta-yellow">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.78039215686275 1" />
          <feFuncG type="table" tableValues="0 0.94901960784314" />
          <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-purple-green">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0.44705882352941 0.4" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-blue-orange">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
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
      <a href="#menu" type="button" class="d-md-none navbar-toggle navbar-dark position-absolute"
        style="top: 12px;right: 20px;font-size: 28px;z-index: 1;">
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
                       
                                                      
                                              <li><a href="login.php">Login</a></li>
             
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
                                             
                                          <!--	<script>document.getElementById("post").onclick=function()
                                              {
                                                  alert("You need to Login before you can POST!");
                                              }
                                              </script> -->
  
                                              <li><a href="login.php">Login</a></li>
                                            
                                              <li> <a href="help.php">Help</a> </li>
                                              </ul>
  </div>
      <!-- end header inner -->
    </header>
    <!-- end header -->
    <main id="main">
      <section id="page" class="page">
        <div class="container">
          <article id="post-48" class="post-48 page type-page status-publish hentry entry">
            <header class="entry-header alignwide">
              <h1 class="entry-title">Register</h1>
            </header>
            <div class="entry-content">
              <div class="tml tml-register">
                <div class="tml-alerts"></div>
                <form name="register" action="" method="post" novalidate="novalidate">
                  <div class="tml-field-wrap tml-first_name-wrap">
                    <label class="tml-label" for="first_name">First Name *</label>
                    <input name="first_name" type="text" value="" id="first_name" class="tml-field" required>
                  </div>

                  <div class="tml-field-wrap tml-last_name-wrap">
                    <label class="tml-label" for="last_name">Last Name</label>
                    <input name="last_name" type="text" value="" id="last_name" class="tml-field" required>
                  </div>

                  <div class="tml-field-wrap tml-user_login-wrap">
                    <label class="tml-label" for="user_login">Username</label>
                    <input name="user_login" type="text" value="" id="user_login" autocapitalize="off"
                      class="tml-field" required>
                  </div>

                  <div class="tml-field-wrap tml-user_email-wrap">
                    <label class="tml-label" for="user_email">Email</label>
                    <input name="user_email" type="email" value="" id="user_email" class="tml-field" required >
                  </div>

                  <div class="tml-field-wrap tml-user_pass1-wrap">
                    <label class="tml-label" for="pass1">Password</label>
                    <input name="user_pass1" type="password" value="" id="pass1" autocomplete="off" class="tml-field" required>
                  </div>

                  <div class="tml-field-wrap tml-user_pass2-wrap">
                    <label class="tml-label" for="pass2">Confirm Password</label>
                    <input name="user_pass2" type="password" value="" id="pass2" autocomplete="off" class="tml-field" required>
                  </div>

                  <div class="tml-field-wrap tml-indicator-wrap">
                    <div id="pass-strength-result" class="hide-if-no-js" aria-live="polite">Strength indicator</div>
                  </div>

                  <div class="tml-field-wrap tml-indicator_hint-wrap">
                    <p class="description indicator-hint">Hint: The password should be at least twelve characters long.
                      To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ &amp;
                      ).</p>
                  </div>


                  <div class="tml-field-wrap tml-user_phone-wrap">
                    <label class="tml-label" for="user_phone">Phone Number</label>
                    <input name="user_phone" type="text" value="" id="user_phone" class="tml-field" required>
                  </div>

                  <div class="tml-field-wrap tml-street-wrap">
                    <label class="tml-label" for="street">Street</label>
                    <input name="street" type="text" value="" id="street" class="tml-field" required>
                  </div>

                  <div class="tml-field-wrap tml-area-wrap">
                    <label class="tml-label" for="area">Area</label>
                    <input name="area" type="text" value="" id="area" class="tml-field" required>
                  </div>

                  <div class="tml-field-wrap tml-city-wrap">
                    <label class="tml-label" for="city">City *</label>
                    <input name="city" type="text" value="" id="city" class="tml-field" required>
                  </div>

                  <div class="tml-field-wrap tml-country-wrap">
                    <label class="tml-label" for="country">Country *</label>
                    <input name="country" type="text" value="" id="country" class="tml-field" required>
                  </div>

                  <div class="tml-field-wrap tml-zipcode-wrap">
                    <label class="tml-label" for="zipcode" >Zip Code *</label>
                    <input name="zipcode" type="text" value="" id="zipcode" class="tml-field" required>
                  </div>

                  <div class="tml-field-wrap tml-submit-wrap">
                    <button name="reg" type="submit" class="tml-button">Register</button>
                  </div>

                  <input name="redirect_to" type="hidden" value="">

                </form>
                <ul class="tml-links">
                  <li class="tml-login-link"><a href="https://echobuyer.com/login/" style="visibility:hidden;">Log in</a></li>
                  <li class="tml-lostpassword-link" style="visibility:hidden;"><a href="https://echobuyer.com/lostpassword/">Lost your
                      password?</a></li>
                </ul>
              </div>
            </div><!-- .entry-content -->
          </article><!-- #post-48 -->
        </div>
      </section>
    </main>
    <style>
      @media (max-width: 467px) {
        .page.tml-action .entry-content {
          width: 90%;
        }
      }

      @media (max-width: 767px) {
        .tml.tml-register .tml-field-wrap {
          width: 100%;
          float: left;
          margin-right: 0px;
        }

        .tml.tml-register ul.tml-links {
          top: 15px !important;
          width: 100%;
          text-align: right;
        }
      }
    </style>
    <div class="container">
      <div class="row">
        <div class="col-md-12 ">
          <div class="entry-content">
            <p class="carousel-sporrt_text "> <span> <b> This site is absolutely free. If you don't get a confirmation
                  email check your spam folder</b> Disclaimer: Kindly verify your other echo user before meeting them.
                Meet at a public place.
                Please be careful contacting for first time .
                We only use your phone number and email for verification.
                We will not share your phone and email number publicly.Any contact will be by your permission only.
                Although we take your privacy and security issue with utmost care, Echobuyer does not take responsibity
                for actual or perceived loss due to a product , service provider or user.
              </span> </p>
          </div>
        </div>
      </div>
    </div>



    <!-- footer start-->
    <div id="plant" class="footer layout_padding">
      <div class="container">
      <p>© 2023 All Rights Reserved
					<br /> Designed & Developed by<a> Neeraj </a>
				</p>
      </div>
    </div>

    <div class="loader customLoader" style="display:none;">
      <img src="https://echobuyer.com/wp-content/themes/echobuyers/assets/images/loader.svg">
    </div>

 

</body>

</html>

<script async type="text/javascript">
  jQuery(document).ready(function () {
    let city = '';
    let country = 'United States';
    let zipcode = '';

    jQuery("#city").val(city);
    jQuery("#country").val(country);
    jQuery("#zipcode").val(zipcode);
  });
</script>
<!-- Cached by WP-Optimize - https://getwpo.com - Last modified: Fri, 02 Sep 2022 15:21:33 GMT -->