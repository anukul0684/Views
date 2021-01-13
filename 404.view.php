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
    <section  class="toggle home">    
        
      <?php require __DIR__ . '/includes/mobile_view_booking_details.inc.php';?>

      <!-- Bread crumbs to reach back from where one has come -->
      <a title="Home Page" class="breadcrumb" 
          style="margin-left: 10px; color: #660505;" href="/">Home</a> > <?=e($title)?>
      <?php require __DIR__ . '/includes/flash.inc.php'; ?> 
      <h2> <?=e($title)?> - Page Not Found </h2>
            
      <h2>Oops! We could not find what you are looking for</h2>
      <h2>Please browse our site to find what you are looking for.</h2>            
    </section>   
    <?php require __DIR__ . '/includes/footer.inc.php';?>    
  </div> <!-- A Div to containing all elements ends here -->  
</body>
</html>