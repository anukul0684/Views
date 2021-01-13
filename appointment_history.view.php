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
      <a title="Home Page" class="breadcrumb" style="margin-left: 10px; color: #AF473C;" href="/">Home</a> &gt;
      <?=e($title)?> 

      <!-- div container for products images starts here -->  
      <div id="history_container">  
        <?php require __DIR__ . '/includes/flash.inc.php'; ?>   
        <table>
        <tr>
          <th>Appointment Date</th>
          <th>Appointment Time</th>
          <th>Appointment Cost</th>
          <th>GST(5&#37;)</th>
          <th>Total Cost</th>
          <th>Details</th>
        </tr>
        <?php for($i=0;$i<count($appointment_history);$i++) : ?>
          <tr>
            <td><?=e($appointment_history[$i]['appointment_date'])?></td>
            <td><?=e(substr($appointment_history[$i]['appointment_time'],0,2))?>              
              <?php if(e(substr($appointment_history[$i]['appointment_time'],0,2))==12) : ?>
                pm
              <?php else : ?>
                am
              <?php endif; ?>
            </td>
            <td>&#36;<?=e($appointment_history[$i]['total_appointment_cost'])?></td>
            <td>&#36;<?=e($appointment_history[$i]['gst_cost'])?></td>
            <td>&#36;<?=e($appointment_history[$i]['total_cost'])?></td>
            <td>
              <a title="details" class="details" 
                  href="service_history?appointmentId=<?=e($appointment_history[$i]['appointment_id'])?>" >
                <img src="images/detail.png" title="details" alt="details" /> 
              </a>
            </td>
          </tr>
        <?php endfor; ?>
        </table>   
      </div> <!-- div container for products images ends here -->     
    </section>   
  </div> <!-- A Div to containing all elements ends here -->
  <?php require __DIR__ . '/includes/footer.inc.php';?>
</body>
</html>