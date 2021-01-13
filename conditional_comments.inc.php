<!-- Conditional Comments for version of Internet Explorer 8 and lower
         to understand that following HTML5 elements should be block. -->
<!--
[if LTE IE 9]>
<style type="text/css">
  #page_content{
    font-family: 'Times New Roman', serif;
    font-size: 16px;
    font-weight: 400;
    max-width: 960px;
    margin: 0 auto;
    position: relative;
    box-sizing: border-box;  -->
  <?php if($slug != 'home' || $slug != 'services') : ?> 
  <!-- 
    background: linear-gradient(#D1D06B, #eee, #C1C05A, #D1D06B); 
  -->
  <?php endif; ?>
  <!--
  }
  
  header{
    height: 140px;
    padding-top: 2px;        
  }
  
  header{
    background-color: #D1D06E; 
  }    
  
  header div{
    float: right;
    margin-top: 10px;
  }
     
  header a.social_mlinks{
    text-decoration: none;
  }

  header a.social_mlinks img{           
    padding-right: 5px;  
    border: 2px solid #D1D06E;
  }
      
  header a img#logo{
    float: left; 
    width: 130px;
    height: 130px;
    border: 2px solid #D1D06E;        
  }
  
  header div#head_msg{
    visibility: visible;    
    font-size: 0.9em;
    float: right;
    margin-right: 5px;
    margin-top: -15px;
  }
  
  h1{
    float: left;
    text-align: right;        
    font-size: 3em;    
    margin-bottom: 0;
    font-weight:500;
  }
       
  h1 a{
    text-decoration:none;
  }
        
  header, nav, section, footer{
    display:block;
    box-sizing: border-box;
  }
  
  nav{
    height: 37px;
    padding-top: 1px;
  }
  
  nav ul#main_navigation{
    float: left;
    margin-left: 200px;
  }
  
  nav ul#main_navigation li.main_nav a{
    text-decoration:none;
    padding: 0 10px 0 10px;        
  }
    
  nav, footer{
    background-color: #ddd;
  }
        
  nav#mobilenav{
    display: none;
  }
  
  nav#desktopnav ul#sub_list{
    display: none;
  }
  
  nav#desktopnav li{
    display: inline;
  -->
  <?php if($slug == 'home' || $slug == 'services') : ?>
  <!-- 
    z-index: 99999; 
  -->
  <?php endif; ?>
  <!--
  } 
  
  section{
    background-color: #eec;
    min-height: 650px;
    padding-top: 1px;   -->
  <?php if($slug != 'home') : ?> 
  <!-- 
    padding-bottom: 1px; 
  -->
  <?php endif; ?>
  <?php if($slug == 'home') : ?>
  <!--
    background-image: url(images/Home_PictureD.jpg);                
    background-repeat: no-repeat;
  -->            
  <?php endif; ?>
  <!--
  }
  
  a.breadcrumb{
    float: left;        
  }
  -->
  <?php if($slug != 'home') : ?> 
  <!--
  h2{
    text-align: center;
  } 
  -->
  <?php endif; ?>
  <?php if($slug == 'about') : ?>
  <!--
    section #aboutus{
    min-height: 450px;
    padding-top: 1px;    
    padding-left: 100px;
    padding-right: 90px;      
  }
  -->
  <?php endif; ?>
  <?php if($slug == 'contact') : ?>
  <!--
    section #contactus_container{
   -->
  <?php endif; ?>
  <?php if($slug == 'courses') : ?>
  <!--
    section #course_container{
  -->
  <?php endif; ?>
  <?php if($slug == 'seminars') : ?>
  <!--
    section #seminar_container{
  -->
  <?php endif; ?>
   <?php if($slug == 'servicesathome') : ?>
  <!--
    section #page_container{
  -->
  <?php endif; ?>
  <?php if($slug == 'products') : ?>
  <!--
    section #product_container{
  -->
  <?php endif; ?>
  <?php if($slug == 'home') : ?>
  <!--
    section #main_container{
  -->
  <?php endif; ?>
  <?php if($slug == 'services') : ?>
  <!--
    section #salon_services{
  -->
  <?php endif; ?>
  <?php if($slug == 'specials') : ?>
  <!--
    section #special_services{
  -->
  <?php endif; ?>
  <?php if($slug == 'contact'
  || $slug == 'courses'
  || $slug == 'seminars'
  || $slug == 'servicesathome'
  || $slug == 'home'): ?>
  <!-- 
    min-height: 650px;
  -->
  <?php elseif($slug == 'products'
  || $slug == 'services'
  || $slug == 'specials') : ?>
  <!--
    min-height: 450px;
  -->
  <?php endif; ?>
  <?php if($slug != 'home') : ?>
  <!--  
    padding-top: 1px;     
    text-align:center; 
  -->
    <?php if($slug == 'specials') : ?>
    <!--
      margin-left: 30px;
    -->
    <?php endif; ?>
  <!--    
  }
  -->       
  <?php elseif($slug == 'home') : ?>  
  <!-- 
  }
  -->
  <?php endif; ?>
  <?php if($slug == 'home') : ?>
  <!--                
    section #home_pic img{
    float:left;        
    margin-top: 170px;
    margin-left: 600px;
    padding-top: 1px;
  }
  
  section #fordesktop, section div#open_message{
    display:none;
  }
  -->
  <?php endif; ?>
 
  
  <?php if($slug == 'services') : ?>
  <!--
   
    section #salon_services div{
    border: 1px solid #000;    
    min-height: 100px;   
    opacity: 0.95;  
    box-sizing: border-box;        
    text-align: left;
    width: 240px;
    padding: 10px;
    float: left;
    margin-left:5px;
    margin-top:5px;        
  }
  
  section #salon_services div#facial{
    float:left;
    margin-left:55px;
    margin-top:5px;
  }
  
  section #salon_services div#threading{
    float:left;
    margin-left:55px;
    margin-top:5px;
  }
  -->
  <?php endif; ?>
  
  <?php if($slug == 'specials') : ?>
  <!--        
  
  #courses, #courses_image, 
  #seminars, #seminars_image, 
  #services_home, #services_home_image, 
  #products, #products_image{ 
    border: 2px solid #000; 
    opacity: 0.9;  
    float: left;
    font-weight: 500;  
    width: 24%;   
    box-sizing: border-box;
  }

  #courses, #seminars, #services_home, #products{
    height: 162px;
  }
  
  #courses_image, #seminars_image, #services_home_image,#products_image{
    padding-top: 2px;
    padding-bottom: 2px;        
  }
  -->
  <?php endif; ?>

  <!--  
    section #formobile{
    float: left;-->
  <?php if($slug != 'home') : ?>  
  <!--  
    margin-top: -55px;
    margin-left: 40px; -->
  <?php elseif($slug == 'home') : ?>  
  <!--   
    margin-top: 5px;
    margin-left: 640px; --> 
  <?php endif; ?>
  <!--    
    text-decoration: none;
  }
  
  footer{
  -->
  <?php if($slug == 'about' 
  || $slug == 'home' 
  || $slug == 'products' 
  || $slug == 'services'
  || $slug == 'servicesathome'
  || $slug == 'specials') : ?>
  <!--  
    min-height: 120px; 
  -->
  <?php else : ?>  
  <!--
    min-height: 160px; 
  -->
  <?php endif; ?>  
  <!--  
    padding-top: 1px;
  }
  
  footer ul{ 
    float: left;
  -->
  <?php if($slug == 'about' 
  || $slug == 'home' 
  || $slug == 'products' 
  || $slug == 'services'
  || $slug == 'servicesathome'
  || $slug == 'specials') : ?>
  <!--  
    margin-left: 100px; 
  -->
  <?php else : ?>  
  <!--
    margin-left: 70px; 
  -->
  <?php endif; ?>  
  <!--
    margin-top: 10px;        
  }
  
  footer ul li{
    display: inline-block;        
  }
  
  footer ul li a{
    text-decoration:none;
    color: #333;
    padding: 0 10px 0 10px;
  }
  
  footer div#site_details{
    display: inline-block;
    float: left;
    margin-top: 10px;
    margin-left: 300px;
    text-align: center;
  }   
</style>
<![endif]
-->