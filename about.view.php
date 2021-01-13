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
      <a title="Home Page" class="breadcrumb" 
        style="margin-left: 10px; color: #AF473C;" href="/">Home</a> &gt; <?=e($title)?>

      <h2> <?=e($title)?> </h2>
      <!-- div container for About Us Content starts here -->
      <div id="aboutus">        
        <p>
          Angel Salon was established in May 1994 in Winnipeg, Manitoba. 
          Angel is a very well known place in Winnipeg for salon services. 
          The owner of this salon, Ms. Preeti Singh, originally belongs to India. 
          Ms. Singh moved to Winnipeg soon after her marriage in the early 90s. 
          Ms. Singh started this salon with a very keen interest in the field 
          of beauty services. Since then this salon has served several of its 
          customers and has maintained the quality of the services with continued 
          efforts. This website is a source of contact for customers to reach the 
          salon and make the bookings. This will be an online booking application 
          for customers to book for their services in a convenient time. 
        </p> 
      </div>      
    </section>    
  </div> <!-- A Div to containing all elements ends here -->
  <?php require __DIR__ . '/includes/footer.inc.php';?>
</body>
</html>