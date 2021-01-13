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
      <a title="Home Page" class="breadcrumb" style="margin-left: 10px; color: #AF473C;" href="/">Home</a> &gt;
      <a title="Angel Specials" style="color: #AF473C;" href="appointment_cart">Appointment Cart</a> &gt; <?=e($title)?> 

      <div id="checkout_page">
        <?php require __DIR__ . '/includes/flash.inc.php'; ?>
        <?php if(!empty($_SESSION['cart'])): ?> 
          <div id="selected_cart_details">               
            <table>
              <tr>
                <th> &#35; </th>                
                <th> Service Name </th>
                <th> Service Category </th>
                <th> Service Cost </th>
                <th> Quantity </th>
                <th> Total Cost </th>                
              </tr>             
              <?php for($i=0;$i<count($cart);$i++) : ?>              
                <?php foreach($cart[$i] as $service_data) :?>                                     
                  <tr>                    
                    <td></td>                    
                    <td><?=e($cart[$i][$i]['service_name'])?></td>
                    <td><?=e($cart[$i][$i]['service_category'])?></td>
                    <td>&#36;<?=e($cart[$i][$i]['service_price'])?></td>
                    <td><?=e($cart[$i][$i]['service_quantity'])?></td>
                    <td>&#36;<?=e($cart[$i][$i]['service_totalcost'])?></td>                      
                  </tr>   
                <?php endforeach; ?>               
              <?php endfor;?>                              
            </table>           
            <table id="final_cost">
              <tr>
                <th>Total Service Cost</th>
                <td>&#36;<?=e($appointment_cost)?></td>
              </tr>
              <tr>
                <th>GST Applied (5&#37;)</th>
                <td>&#36;<?=e($gst_cost)?></td>
              </tr>
              <tr>
                <th>Total Cost</th>
                <td>&#36;<?=e($total_cost)?></td>
              </tr>
            </table>                        
          </div>                
        <?php endif; ?>        
        <form method="post" action="appointment_placed">   
          <div id="booking_details"> 
            <p class="pfield-wrapper required-field">
              <label for="booking_date">Booking Date</label>
              <input id="datepicker1" type="text" 
                    name="booking_date" required 
                    value="<?php echo date('Y-m-d'); ?>" 
                    autocomplete="off" />&nbsp;&nbsp;
              <label for="booking_time">Booking Time&#58;</label>             
              <select name="booking_time" id="booking_time">
                <option value="none">Select Time of Booking</option>
                <option value="10am">10 am</option>
                <option value="11am">11 am</option>
                <option value="12pm">12 pm</option>                
              </select><br />  
              <em style="font-size: 0.8em;">&#40;No bookings are accepted after 12 p.m.&#41;</em>
            </p>                
          </div>       
          <div id="card_errors">                 
            <?php if(isset($errors)>0) : ?>
              <?php if(count($errors)>0) : ?>   
                <div class = "errors">                  
                  <ul>
                    <?php if(!empty($errors['booking_time'][0])) : ?>
                      <li>&nbsp;&#42; <?=e($errors['booking_time'][0])?></li>   
                    <?php endif; ?>
                    <?php if(!empty($errors['card_type'][0])) : ?>
                      <li>&nbsp;&#42; <?=e($errors['card_type'][0])?></li>   
                    <?php endif; ?>
                    <?php if(!empty($errors['card_name'][0])) : ?>
                      <li>&nbsp;&#42; <?=e($errors['card_name'][0])?></li>   
                    <?php endif; ?>        
                    <?php if(!empty($errors['card_number'][0])) : ?>   
                      <li>&nbsp;&#42; <?=e($errors['card_number'][0] ?? '')?></li>  
                    <?php endif; ?>        
                    <?php if(!empty($errors['card_expiry'][0])) : ?>           
                      <li>&nbsp;&#42; <?=e($errors['card_expiry'][0] ?? '')?></li>  
                    <?php endif; ?>        
                    <?php if(!empty($errors['card_cvv'][0])) : ?>
                      <li>&nbsp;&#42; <?=e($errors['card_cvv'][0] ?? '')?></li> 
                    <?php endif; ?>                                            
                  </ul>
                </div>                 
              <?php endif; ?>               
            <?php endif;?>
          </div>          
          <div id="card_form">           
            <label for="card_type">Card Type&#58;</label>
            <select name="card_type" id="card_type">
              <option value="none">Select Card Type</option>
              <option value="American">American Express</option>
              <option value="Dinners">Diner's Club</option>
              <option value="Discover">Discover</option>
              <option value="Master">Master Card</option>
              <option value="Visa">Visa</option>
            </select><br />                
          
            <label for="card_name">Card Holder Name&#58;</label>
            <input type="text" name="card_name" id="card_name" 
                  placeholder="Enter Your Name"/><br />                
          
            <label for="card_number">Card Number&#58;</label>
            <input type="text" name="card_number" id="card_number" 
                    placeholder="Enter 16 digit Card Number"/><br />                
          
            <label for="card_expiry">Card Expiry &#40;MMYY&#41;&#58;</label>
            <input type="text" name="card_expiry" id="card_expiry" 
                    placeholder="MMYY"/><br />                
          
            <label for="card_cvv">CVV&#58;</label>
            <input type="text" name="card_cvv" id="card_cvv" 
                    placeholder="3 digit Code"/><br />                
          
            <button class="cart_btn" name="checkout_cart">Confirm Booking</button>
          </div>          
        </form>
      </div>     
    </section>   
  </div> <!-- A Div to containing all elements ends here -->
  <?php require __DIR__ . '/includes/footer.inc.php';?>

  <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.css" 
        rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

  <script type="text/javascript">
    /*http://jsfiddle.net/arunpjohny/zbabqyts/5/*/
    $(function () {
      var $dp1 = $("#datepicker1");
      $dp1.datepicker({
          changeYear: true,
          changeMonth: true,
          dateFormat: "yy-m-dd",
          yearRange: "-100:+20",
          minDate: '0'
      });    
    });
  </script>
</body>
</html>