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
    <section class="home">  
      <!-- a div container for image for the home page -->  
      <div id="main_container">    
        
        <!-- div container for the image and booking appointment link -->    
        <div id="home_pic">
          
          <!-- the image for the slogan of the salon -->
          <img src="images/beautifulyou.png" alt="tag line"/>
          
          <!-- link to book an appointment -->
          <h2>            
              <a title="Book Appointment" id="fordesktop" href="#open_message">Book Services</a>            
          </h2>
          
          <!-- putting a div to open the modal box on click of above link of the page. -->
          <div class="bookappointment" id="open_message"> 
            
            <!-- closing of the div when one clicks outside the div of modal box --> 
            <a title="Closing Box"  href="#" class="close_appointment"></a>
            
            <!-- div container for modal box -->
            <div class="message">
              
              <!-- closing of the div when one clicks on the cross of the modal box-->
              <a title="Close Message"  href="#" class="close_message">X</a>
              
              <!-- content on modal box -->
              <p class="italicised">Please select 
                <a title="Services"  id="serviceslist" href="services" ><em>SERVICES</em></a> 
                for Booking.
              </p>      
              
            </div>  
          </div>            
            
          <?php require __DIR__ . '/includes/mobile_view_booking_details.inc.php';?>
          
        </div>                                           
      </div>             
    </section>     
  </div>  <!-- A Div to containing all elements ends here -->
  <?php require __DIR__ . '/includes/footer.inc.php';?>
</body>
</html>