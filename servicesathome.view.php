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
      <a title="Angel Specials" style="color: #AF473C;" href="specials">Specials</a> &gt; <?=e($title)?> 
      
      <!-- div container for services at home starts here -->
      <div id="page_container" >
        <h2>Salon <?=e($title)?></h2>
        <div id="salon_services_home">
          <div id="facial">
            FACIALS - Fruit Facial, Herbal Facial, Oxy-Plus Facial                
          </div>
		      <div id="waxing">
            WAXING - Hand Waxing, Half or Full Leg Waxing, Underarms, Full Body Waxing
          </div>
		      <div id="hairstyling">
		        Threading - Eyebrows, Upper Lips, Forehead, Chin, Full Face Threading
          </div> 
          <div id="skincare">
            Hair and Skin Care - Pedicure, Manicure, Head Massage, Full Body Massage 
          </div>
        </div>        
          
      </div><!-- div container for services at home ends here -->
    </section>    
  </div> <!-- A Div to containing all elements ends here -->
  <?php require __DIR__ . '/includes/footer.inc.php';?>
</body>
</html>