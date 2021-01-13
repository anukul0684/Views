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
        <a title="Home Page" class="breadcrumb" style="margin-left: 10px; color: #AF473C;" href="/">Home</a> &gt; 
        <?=e($title)?> 
      </div>
      <div id="login_main">
        
        <!-- Div container for the content of User Registration form -->
        <div id="login_container">
          <?php require __DIR__ . '/includes/flash.inc.php'; ?>
          <h2><?=e($title)?> Form:</h2>
          <form id="login_form"
            method="post"
            action="login" 
            autocomplete="off" novalidate>          

            <!-- user_registration details -->
            <fieldset id="personalinfo">
              <legend>Login Details</legend>             

              <!-- Person's Email address for login credential -->
              <label class="info" for="email">Email<sup>*</sup> &#58;</label>
              <input type="email" id="email" name="email" placeholder="please enter your email" value="<?=e($post['email'] ?? '')?>" />             
              
                         
              <!-- Person's password for login credential -->             
              <label class="info" for="user_password">Password<sup>*</sup> &#58;</label> 
              <input type="password" name="user_password" id="user_password" placeholder="please enter password"/><br />                  
              
            </fieldset>
            <!-- Action buttons -->
            <p id="sent">
              <input type="submit" 
                     id="subreg" 
                     value="Login"/> &nbsp; <!-- Click to submit for registration -->
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