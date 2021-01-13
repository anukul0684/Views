<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    
  <?php require __DIR__ . '/includes/head.inc.php';?>
    
  <?php require __DIR__ . '/includes/conditional_comments.inc.php';?> 
     
  <script>        
  </script>
</head>
<body>
  <?php require __DIR__ . '/includes/header.inc.php';?>
      
  <!-- A Div to contain all elements and position them in width of 960px with a middle view to viewport -->
  <div id="page_content">   
    
    <!-- Semnatic Element Section for main contents serving the purpose of the page -->
    <section class="toggle" <?php if($slug == 'services') : ?> <?php endif; ?>>  
     
      <?php require __DIR__ . '/includes/mobile_view_booking_details.inc.php';?>    
      
      <!-- Bread crumbs to reach back from where one has come --> 
      <a title="Home Page" class="breadcrumb" style="margin-left: 10px; color: #AF473C;" href="/">Home</a> &gt;
      <a title="Angel Servicess" style="color: #AF473C;" href="services">Services</a> &gt; <?=e($title)?>
      <h2> <?=e($service_details['service_name'])?> <?=e($title)?> </h2>
      <!-- div container for Salon Services Content starts here -->
      <div id="salon_services">         
        <div class = "service_detail">            
          <img src="images/<?=e(strstr($service_details['service_image'], '.', 'jpg') . 'B.jpg')?>" 
               alt="Service Image" />                    
          <p>                
            <strong><?=e($service_details['service_name'])?></strong> <br />  
            &#126;<em><?=e($service_details['service_category'])?></em>&#126; <br />
            Available at&#58; <?=e($service_details['service_type'])?> <br />
            Price&#58; &#36;<?=e($service_details['service_price'])?> plus 5&#37; GST <br />
            Average Rating&#58; <?=e($service_details['service_avg_rating'])?> <br />
            Description&#58; 
            <em>
              <?=e($service_details['service_description'])?></em> <br />                
          </p>   
          <form id="add_cart"
            method="post"
            action="appointment_cart" 
            autocomplete="off" novalidate>
            <select name="service_qty" id="service_qty">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
            </select>
            <input type="hidden" name="service_id" value="<?=e($service_details['service_id'])?>" />
            <button class="add_link">Add to Cart</button>&nbsp; &raquo; 
          </form>                 
        </div>                      
      </div>
      <h2 id="other"> Other Services in <?=e($service_details['service_category'])?></h2>
      <div id="other_services">
        <?php foreach($other_services as $row) : ?>
          <div class = "service_name">            
              <img src="images/<?=e($row['service_image'])?>" alt="<?=e($row['service_name'])?>" />                 
              <p>                
                <a class="more_link" 
                    href="service_details?service_id=<?=e($row['service_id'])?>">
                    <?=e($row['service_name'])?>
                </a> 
              </p>                     
          </div>
        <?php endforeach; ?>
      </div>
      <div class="detail_links">
        &laquo; &nbsp;<a class="back_link" href="services">Go Back</a>&nbsp;         
      </div>
    </section>  
    <?php require __DIR__ . '/includes/footer.inc.php';?> 
  </div> <!-- A Div to containing all elements ends here -->

</body>
</html>