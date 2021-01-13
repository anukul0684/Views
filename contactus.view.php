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
      <div id="webpage_path">
        <a title="Home Page" class="breadcrumb" 
        style="margin-left: 10px; color: #AF473C;" href="/">Home</a> &gt; <?=e($title)?> 
      </div>
      <div id="contact_main">
        <div id="salonaddress">           
          <address>
            Our Address&#58;
            1234&#44; Sing Along Avenue&#44;
            Winnipeg&#44;
            R9C 8Z1
          </address>
        </div>
        <!-- Div container for the content of Contact form -->
        <div id="contactus_container">
          <h2><?=e($title)?> with below details:</h2>
          <form id="contact_form"
            method="post"
            action="http://www.scott-media.com/test/form_display.php" 
            autocomplete="on">          

            <!-- contact details -->
            <fieldset id="personalinfo">
              <legend>Contact Details</legend>

              <!-- Person's Name. for referring back -->
              <p>
                <label class="info" for="Name">Name &#58;</label> 
                <input type="text" 
                       name="Name"
                       id="Name" 
                       required="required"
                       maxlength="40" 
                       size="20" 
                       placeholder="please enter your name"/> 
              </p>                

              <!-- Person's Mobile number for calling for appointment-->
              <p>
                <label class="info" for="mob_number">Contact Number (M) &#58;</label>
                <input type="tel"
                       name="mob_number"
                       id="mob_number" 
                       required="required"
                       placeholder="please enter your mobile no." 
                       autocomplete="off"/>
              </p>           

              <!-- Person's email id. for sending info -->
              <p>
                <label class="info" for="email_address">Registered Email Id &#58;</label>
                <input type="email" 
                       name="email_address"
                       id="email_address"
                       required="required"
                       placeholder="please enter your email-id"/> 
              </p>

              <!-- date preferred for booking -->
              <p>
                <label class="info" for="booking_date">Booking Date You Prefer &#58;</label>
                <input type="date"
                       name="booking_date"
                       id="booking_date" /> 
              </p> 

              <!-- time preferred for contacting back -->
              <p> 
                <label class="info" for="contact_time">Preferred Time for Contact &#58;</label>
                <select id="contact_time" name="contact_time">
                  <option value="no preference">Any time</option>            
                  <option value="morning">Before 10 a.m.</option>
                  <option value="daytime">Between 10 a.m. and 5 p.m.</option>
                  <option value="evening">after 5 p.m.</option>
                  <option value="weekend">on weekend</option>                        
                </select>
              </p>   

              <!-- Queries for Salon -->
              <p> 
                <label class="info" for="query">Queries &#58;</label> 
                <textarea name="query" 
                          id="query" 
                          cols="34"
                          rows="3" 
                          placeholder="please enter your queries here."></textarea>          
              </p>   
            </fieldset>
            <!-- Action buttons -->
            <p id="sent">
              <input type="submit" 
                     id="subreg" 
                     value="Register"/> &nbsp; <!-- Click to submit for registration -->
              <input type="reset"
                      value="Clear Form"/> <!-- Click to clear the form -->       
            </p>             
          </form> 
        </div>    <!-- div container for form content ends here -->  
      </div>
    </section>   
  </div> <!-- A Div to containing all elements ends here -->
  <?php require __DIR__ . '/includes/footer.inc.php';?>
</body>
</html>