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
    <section class="toggle" <?php if($slug == 'services') : ?> <?php endif; ?>>  
     
      <?php require __DIR__ . '/includes/mobile_view_booking_details.inc.php';?>    
      
      <!-- Bread crumbs to reach back from where one has come --> 
      <a title="Home Page" class="breadcrumb" style="margin-left: 10px; color: #AF473C;" href="/">Home
      </a> &gt; 
      <?php if($sub_category=='Yes') :?>
        <a style="color: #AF473C;" href="services"><?=e($title)?>
        </a> &gt; <?=e($category_name)?>
      <?php else : ?>
        <?=e($title)?>
      <?php endif;?>

      <h2> Our <?=e($title)?> 
        <?php if($sub_category=='Yes') :?>&#58; <?=e($category_name)?>  
        <?php elseif($search_content=='Yes') : ?> &#58; Search Result for &#34;<?=e($searched)?>&#34;
        <?php endif;?>
      </h2>
      <!-- div container for Salon Services Content starts here -->
      <div id="salon_services">
        <!-- <div id="facial">
          <ul>
            <li>FACIALS</li>
            <li>Fruit Facial</li>
            <li>Herbal Facial</li>
            <li>Oxy-Plus Facial</li>              
          </ul>
        </div>
        <div id="waxing">
          <ul>
            <li>WAXING</li>
            <li>Hand Waxing</li>
            <li>Leg Waxing</li>
            <li>Full Body Waxing</li>              
          </ul>
        </div>
        <div id="hairstyling">
          <ul>
            <li>HAIR STYLING</li>
            <li>Blow Dry</li>
            <li>Hair Coloring</li>
            <li>Hair Cut</li>              
          </ul>
        </div> 
        <div id="threading">
          <ul>
            <li>Threading</li>
            <li>Full Face</li>
            <li>Eyebrows, Upperlips</li>
            <li>Forehead</li>           
          </ul>
        </div>
        <div id="makeup">
          <ul>
            <li>Makeup</li>
            <li>Eye Makeup</li>
            <li>Hair Styling</li>
            <li>Event wise Makeup</li>                                       
          </ul>
        </div>
        <div id="skincare">
          <ul>
            <li>Hair and Skin Care</li>
            <li>Pedicure, Manicure</li>            
            <li>Head Massage</li>              
            <li>Full Body Massage</li>                            
          </ul>
        </div> -->
        
        <div class = "service_category">
          <?php foreach($services_category as $row) : ?>
            <a class = "category" href = "services?category=<?=urlencode(e($row['service_category']))?>"><?=e($row['service_category'])?></a>
          <?php endforeach;?>
        </div>
        
        <?php foreach($services_by_page as $row) : ?>
          <div class = "service_name">            
              <img src="images/<?=e($row['service_image'])?>" alt="<?=e($row['service_name'])?>" />                 
              <p>                
                <strong><?=e($row['service_name'])?></strong> <br />  
                &#126;<em><?=e($row['service_category'])?></em>&#126; <br />
                Average Rating&#58; <?=e($row['service_avg_rating'])?> <br />
                Description&#58; 
                <em>
                  <?=e(substr($row['service_description'], 0, strpos($row['service_description'], ' ', 40)))?>&#46;&#46;&#46;</em> <br />                
              </p>                       
              <a class="more_link" href="service_details?service_id=<?=e($row['service_id'])?>">View Details</a>    
          </div>
        <?php endforeach; ?>

        <div class="service_pagination">
          <?php for($i=1;$i<=$number_of_pages; $i++) : ?>
            <?php if($sub_category=='No') : ?>
              <a class = "pagination" href="services?page=<?=e($i)?>"><?=e($i)?></a>&nbsp;
            <?php elseif($sub_category=='Yes') : ?>            
              <a class = "pagination" 
                href="services?page=<?=e($i)?>&category=<?=urlencode(e($category_name))?>"><?=e($i)?>
              </a>&nbsp;
            <?php endif; ?>
          <?php endfor; ?> 
        </div>  
      </div>
    </section>  
    <?php require __DIR__ . '/includes/footer.inc.php';?> 
  </div> <!-- A Div to containing all elements ends here -->
  
</body>
</html>