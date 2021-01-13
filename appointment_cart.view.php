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
      <?=e($title)?> 
      <?php require __DIR__ . '/includes/flash.inc.php'; ?> 
      <!-- div container for products images starts here -->  
      <h2>Pre-Order Booking Services Details</h2>
      <div id="cart_container">    
        <?php if(!empty($_SESSION['cart'])): ?> 
          <div id="cart_details"> 
            <form method="post" action="services" id="filled_cart">
              <button class="cart_btn" name="clear">Clear Cart</button>
              <table>
                <tr>
                  <th> &#35; </th>                
                  <th> Service Name </th>
                  <th> Service Category </th>
                  <th> Service Cost </th>
                  <th> Quantity </th>
                  <th> Total Cost </th>
                  <th></th>
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
                      <td>
                        <a title="delete service" 
                            class="search" 
                            href="appointment_cart?cart_service=<?=e($cart[$i][$i]['service_id'])?>">
                          <img src="images/delete_service.png" title="delete service" alt="delete" /> 
                        </a>
                      </td>
                    </tr>   
                  <?php endforeach; ?>               
                <?php endfor;?>                              
              </table>
              <table id="cost">
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
            </form>
            <a class="continue_link" href="services" name="continue_shopping">Add More Services</a>
          </div>
          <div id="card_details">
            <a href="checkout_page" alt="checkout" class="continue_link">Proceed to Buy</a>
            <!-- <form method="post" action="checkout_page" id="checkout_form">
              <button class="cart_btn" name="checkout_cart">Proceed to Buy</button>
            </form>  -->             
          </div>
        <?php else: ?>
          <h2>Your cart is empty</h2>
        <?php endif; ?>
      </div> <!-- div container for cart ends here -->           
    </section>   
  </div> <!-- A Div to containing all elements ends here -->
  <?php require __DIR__ . '/includes/footer.inc.php';?>
</body>
</html>