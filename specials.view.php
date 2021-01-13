<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    
  <?php require __DIR__ . '/includes/head.inc.php';?>
    
  <?php require __DIR__ . '/includes/conditional_comments.inc.php';?>    
  
</head>
<body>
  <?php require __DIR__ . '/includes/header.inc.php';?> 
      
  <!-- A Div to contain all elements and position them in width of 960px with a middle view to viewport -->
  <div id="page_content">    
    
    <!-- Semnatic Element Section for main contents serving the purpose of the page -->
    <section class="toggle home"> 
      
      <?php require __DIR__ . '/includes/mobile_view_booking_details.inc.php';?>   
      
      <!-- Bread crumbs to reach back from where one has come --> 
      <a title="Home Page" class="breadcrumb" style="margin-left: 10px; color: #AF473C;" href="/">Home</a> &gt;
      <?=e($title)?>
      <h2> Angel <?=e($title)?> Events </h2>
      <!-- div container for Special Services Content starts here -->
      <div id="special_services" class="special_content">
        <div id="courses">
          <hr style="width:30px; height: 3px; background-color: #000;"/><br/>Courses <br/> 
          <a title="Click for View" href="courses">Book Now ></a> 
        </div>
        <div id="courses_image">
          <a title="Click for View" href="courses">
            <img src="images/courses_f.jpg" alt="course image" class="responsive" />
          </a>
        </div>          
        <div id="seminars" class="special_content">
          <hr style="width:30px; height: 3px; background-color: #000;"/><br/>Seminars <br/> 
          <a title="Click for View" href="seminars">Book Now ></a>
        </div>
        <div id="seminars_image">
          <a title="Click for View" href="seminars">
            <img src="images/seminars_f.jpg" alt="seminar image" class="responsive"  />
          </a>
        </div>        
        <div id="services_home_image">
          <a title="Click for View" href="servicesathome">
            <img src="images/SalonAtHome_f.jpg" alt="Services at home image" class="responsive"  />
          </a>
        </div>
        <div id="services_home" class="special_content">
          <hr style="width:30px; height: 3px; background-color: #000;"/><br/>Services @ Home <br/> 
          <a title="Click for View" href="servicesathome" >Book Now ></a>
        </div>
        <div id="products_image">
          <a title="Click for View" href="products">
            <img src="images/product_f.jpg" alt="products image" class="responsive"  />
          </a>
        </div>
        <div id="products" class="special_content">
          <hr style="width:30px; height: 3px; background-color: #000;"/><br/>Products <br/> 
          <a title="Click for View" href="products">Book Now ></a>
        </div>        
      </div>        
    </section>    
  </div> <!-- A Div to containing all elements ends here -->
  <?php require __DIR__ . '/includes/footer.inc.php';?>
</body>
</html>
