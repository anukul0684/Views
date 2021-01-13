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

      <!-- div container for products images starts here --> 
       
      <div id="placed_container">
        <?php require __DIR__ . '/includes/flash.inc.php'; ?>
        <p>Name&#58; <?=e($placed[0]['first_name'])?></p>
        <p>Booking Date&#58; <?=e($placed[0]['appointment_date'])?></p>
        <p>Booking Time&#58; <?=e(substr($placed[0]['appointment_time'],0,2))?>
          <?php if(e(substr($placed[0]['appointment_time'],0,2))==12) : ?>
            pm
          <?php else : ?>
            am
          <?php endif; ?>
        </p>
        <p>Card&#58; &#120;&#120;&#120;&#120; &#120;&#120;&#120;&#120; &#120;&#120;&#120;&#120; <?=e($placed[0]['service_card'])?></p>
        <table>
        <tr>
          <th>Service Name</th>
          <th>Category</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total Price</th>
        </tr>
        <?php for($i=0;$i<count($placed);$i++) : ?>
          <tr>
            <td><?=e($placed[$i]['service_name'])?></td>
            <td><?=e($placed[$i]['service_category'])?></td>
            <td>&#36;<?=e($placed[$i]['service_price'])?></td>
            <td><?=e($placed[$i]['service_quantity'])?></td>
            <td>&#36;<?=e($placed[$i]['service_totalcost'])?></td>
          </tr>
        <?php endfor; ?>
        </table>  
        <table id="booked_cost">
          <tr>
            <th>Total Service Cost</th>
            <td>&#36;<?=e($placed[0]['total_appointment_cost'])?></td>
          </tr>
          <tr>
            <th>GST Applied (5&#37;)</th>
            <td>&#36;<?=e($placed[0]['gst_cost'])?></td>
          </tr>
          <tr>
            <th>Total Cost</th>
            <td>&#36;<?=e($placed[0]['total_cost'])?></td>
          </tr>
        </table>            
      </div> <!-- div container for products images ends here -->     
    </section>   
  </div> <!-- A Div to containing all elements ends here -->
  <?php require __DIR__ . '/includes/footer.inc.php';?>
</body>
</html>