<!-- title of page that will be shown in tab of the browser-->  

<title>
<?php if($slug == 'about') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'contactus') : ?>
<?=e($title) .' | '. SITE_NAME; ?>
<?php elseif($slug == 'courses') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'home') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'products') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'seminars') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'services') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'service_details') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'appointment_cart') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'checkout_page') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'appointment_placed') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'appointment_history') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'service_history') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'servicesathome') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'specials') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'user_registration') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'user_add') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'user_success') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == 'login') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php elseif($slug == '404') : ?>
<?=e($title) .' | '. SITE_NAME;?>
<?php endif; ?></title>

<!-- code to make page responsive-->
<meta name="viewport" content="width=device-width, initial-scale=1"  />

<!-- link to javascript file for IE8 -->
<script src="JS_files/old_ie.js"></script>

<!-- fav icon -->

<link rel="icon" href="images/favicon.png" type="image/x-icon"/>
<!--    icons for touch devices apple, android etc.-->
<link rel="apple-touch-icon" sizes="128x128" href="images/favicon-128.png"/>
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon-152.png"/>
<link rel="apple-touch-icon" sizes="167x167" href="images/favicon-167.png"/>
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon-180.png"/>
<link rel="apple-touch-icon" sizes="196x196" href="images/favicon-196.png"/>
<link rel="shortcut icon" sizes="196x196" href="images/favicon-196.png" />
<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>

<!-- link to css files for desktop, mobile and print view -->
<link rel="stylesheet" type="text/css" 
      media="screen and (min-width:768px)" href="styles/as_desktop_styles.css"/>
<link rel="stylesheet" type="text/css" 
      media="screen and (max-width:767px)" href="styles/as_mobile_styles.css"/>
<link rel="stylesheet" type="text/css" media="print" href="styles/as_print_styles.css"/>


<link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@700&display=swap" 
      rel="stylesheet">  
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;500&display=swap" 
      rel="stylesheet"> 

<?php if($slug =='specials') :?>
<!-- embedded CSS for rubric requirement.-->
<style>
  .special_content{
    text-align: center;
  }
</style>
<?php endif; ?>

<?php if($slug == 'courses') : ?>
<!-- embedded CSS for rubric requirement.-->
<style>
  .courserow:hover{
    background-color: #f8f8f8;
    cursor: default;
  }
</style>
<?php endif; ?>