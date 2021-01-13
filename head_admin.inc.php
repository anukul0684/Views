<!-- title of page that will be shown in tab of the browser-->  
<title>
    <?php if($slug == 'dashboard') : ?>
    <?=e($title) .' | '. SITE_NAME;?>
    <?php elseif($slug == 'admin_users') : ?>
    <?=e($title) .' | '. SITE_NAME;?>
    <?php elseif($slug == 'admin_services') : ?>
    <?=e($title) .' | '. SITE_NAME;?>
    <?php elseif($slug == 'admin_serviceEdit') : ?>
    <?=e($title) .' | '. SITE_NAME;?>
    <?php elseif($slug == 'admin_serviceDelete') : ?>
    <?=e($title) .' | '. SITE_NAME;?>
    <?php elseif($slug == 'admin_serviceAdd') : ?>
    <?=e($title) .' | '. SITE_NAME;?>
    <?php elseif($slug == 'admin_courses') : ?>
    <?=e($title) .' | '. SITE_NAME;?>
    <?php elseif($slug == 'admin_seminars') : ?>
    <?=e($title) .' | '. SITE_NAME;?>
    <?php elseif($slug == 'admin_products') : ?>
    <?=e($title) .' | '. SITE_NAME;?>
    <?php endif;?>
</title>  
 
<meta name="viewport" content="width=device-width, initial-scale=1"  />

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


<link rel="stylesheet" type="text/css" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />