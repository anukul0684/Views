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
    <section class="toggle">
       
      <?php require __DIR__ . '/includes/mobile_view_booking_details.inc.php';?>

      <!-- Bread crumbs to reach back from where one has come -->
      <div id="webpage_path">
        <a title="Home Page" class="breadcrumb" style="margin-left: 10px; color: #AF473C;" href="/">Home</a> &gt;
        <?=e($title)?> 
      </div>
      <div id="user_registration_main">        

        <!-- Div container for the content of User Registration form -->
        <div id="user_registration_container">          
          
          <h2><?=e($title)?> Form:</h2>
          <?php require __DIR__ . '/includes/flash.inc.php'; ?>
          <form id="user_registration_form"
            method="post"
            action="user_add" 
            autocomplete="off" novalidate> 

            <div id="register_error">
              <?php if(isset($errors)) : ?>  
                <?php if(count($errors)>0) : ?>   
                  <div class = "errors">                  
                    <ul>
                      <?php if(!empty($errors['first_name'][0])) : ?>
                        <li>&nbsp; <?=e($errors['first_name'][0])?></li>   
                      <?php endif; ?>        
                      <?php if(!empty($errors['last_name'][0])) : ?>   
                        <li>&nbsp; <?=e($errors['last_name'][0] ?? '')?></li>  
                      <?php endif; ?>        
                      <?php if(!empty($errors['email'][0])) : ?>           
                        <li>&nbsp; <?=e($errors['email'][0] ?? '')?></li>  
                      <?php endif; ?>        
                      <?php if(!empty($errors['phone'][0])) : ?>
                        <li>&nbsp; <?=e($errors['phone'][0] ?? '')?></li> 
                      <?php endif; ?>        
                      <?php if(!empty($errors['street_details'][0])) : ?>           
                        <li>&nbsp; <?=e($errors['street_details'][0])?></li>  
                      <?php endif; ?>        
                      <?php if(!empty($errors['city_name'][0])) : ?>          
                        <li>&nbsp; <?=e($errors['city_name'][0] ?? '')?></li>
                      <?php endif; ?>        
                      <?php if(!empty($errors['province_name'][0])) : ?>           
                        <li>&nbsp; <?=e($errors['province_name'][0] ?? '')?></li>    
                      <?php endif; ?>        
                      <?php if(!empty($errors['country_name'][0])) : ?>        
                        <li>&nbsp; <?=e($errors['country_name'][0] ?? '')?></li>   
                      <?php endif; ?>        
                      <?php if(!empty($errors['postal_code'][0])) : ?>         
                        <li>&nbsp; <?=e($errors['postal_code'][0] ?? '')?></li> 
                      <?php endif; ?>        
                      <?php if(!empty($errors['user_password'][0])) : ?>           
                        <li>&nbsp; <?=e($errors['user_password'][0] ?? '')?></li>  
                      <?php endif; ?>        
                      <?php if(!empty($errors['confirm_user_password'][0])) : ?>          
                        <li>&nbsp; <?=e($errors['confirm_user_password'][0] ?? '')?></li>   
                      <?php endif; ?>                         
                    </ul>
                  </div>
                <!-- End of errors -->
                <?php endif; ?> 
                <?php endif;?>              
              </div>         
            <div id="register_field">
            <!-- user_registration details -->
            <fieldset id="personalinfo">
              <legend>User Details</legend>

              <!-- Person's First Name and Last Name for referring back -->              
                <label class="info1" for="first_name">First Name<sup>*</sup> &#58;</label>
                <input class="info3" type="text" name="first_name" id="first_name" placeholder="please enter your first name" value="<?=e($post['first_name'] ?? '')?>" />             
                
                <label class="info2" for="last_name">Last Name<sup>*</sup> &#58;</label>
                <input class="info4" type="text" name="last_name" id="last_name" placeholder="please enter your last name" value="<?=e($post['last_name'] ?? '')?>" /><br />

                <!-- Person's Street Address and City for referring back --> 
                <label class="info1" for="street_details">Address<sup>*</sup> &#58;</label> 
                <input class="info3" type="text" name="street_details" id="street_details" placeholder="please enter your address" value="<?=e($post['street_details'] ?? '')?>" maxlength="100"/>

                <!-- Person's Mobile Number and Email address for referring back -->
                <label class="info2" for="email">Email<sup>*</sup> &#58;</label>
                <input class="info4"  type="email" id="email" name="email" placeholder="please enter your email" value="<?=e($post['email'] ?? '')?>" />
                <a title="click for help" 
                    class="emailhelp" 
                    href="javascript:;" onclick="email_info(); return false;">
                    <img src="images/info.png" title="click for help" alt="click for help" /> 
                </a><br />   

                <label class="info1" for="city_name">City<sup>*</sup> &#58;</label>
                <input class="info3" type="text" name="city_name" id="city_name" placeholder="please enter your city" value="<?=e($post['city_name'] ?? '')?>" />

                <label class="info2" for="phone">Mobile<sup>*</sup> &#58;</label>
                <input class="info4" type="tel" id="phone" name="phone" placeholder="please enter your phone number" value="<?=e($post['phone'] ?? '')?>" maxlength="14" />
                <a title="click for help" 
                    class="phonehelp" 
                    href="javascript:;" onclick="phone_info(); return false;">
                    <img src="images/info.png" title="click for help" alt="click for help" /> 
                </a><br />               

                <!-- Person's Province and Country for referring back --> 
                <label class="info1" for="province_name">Province<sup>*</sup> &#58;</label>
                <input class="info3" type="text" name="province_name" id="province_name" placeholder="please enter your province" value="<?=e($post['province_name'] ?? '')?>" />

                <!-- Person's Postal Code for referring back --> 
                <label class="info2" for="postal_code">Postal Code<sup>*</sup> &#58;</label>
                <input class="info4" type="text" id="postal_code" name="postal_code" placeholder="please enter postal code" value="<?=e($post['postal_code'] ?? '')?>"/>
                <a title="click for help" 
                    class="postalhelp" 
                    href="javascript:;" onclick="postal_info(); return false;">
                    <img src="images/info.png" title="click for help" alt="click for help" /> 
                </a><br />

                <!-- Person's Country for referring back -->
                <label class="info1" for="country_name">Country<sup>*</sup> &#58;</label>
                <input class="info3" type="text" name="country_name" id="country_name" placeholder="please enter your country" value="<?=e($post['country_name'] ?? '')?>" /><br />

                <label class="info1" for="user_password">Password<sup>*</sup> &#58;</label> 
                <input class="info3" type="password" name="user_password" id="user_password" placeholder="please enter password"/>
                <a title="click for help" 
                    class="pwdhelp" 
                    href="javascript:;" onclick="pwd_info(); return false;">
                    <img src="images/info.png" title="click for help" alt="click for help" /> 
                </a>                        
                
                <label class="info2" for="confirm_user_password">Confirm Password<sup>*</sup> &#58;</label> 
                <input class="info4" type="password" name="confirm_user_password" id="confirm_user_password" placeholder="please re-enter password"/><br /> 
                <input type="hidden" name="token" value="<?php echo $token; ?>" />            
            </fieldset>
            </div>
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

  <script type="text/javascript">
    function email_info()
    {
      confirm(" local-part@domain \n example :  jsmith@example.com");
    }

    function phone_info()
    {
      confirm(" example : \n 604 555 5555 \n 604.555.5555 \n 604-555-5555");
    }

    function postal_info()
    {
      confirm(" example : \n A1A 1A1 \n A1A1A1");
    }

    function pwd_info()
    {
      confirm(" example : \n Emily@123");
    }
  </script>
</body>
</html>