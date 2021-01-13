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
      
      <div id="user_success_main">
        
        <!-- Div container for the content of User Registration form -->
        <div id="user_success_container">
          <?php require __DIR__ . '/includes/flash.inc.php'; ?>
          <h2>Your Details:</h2>
          <table style="width: 80%;">
            <?php foreach($user as $key => $value) :?>
              <?php if($key !=='User Password' && $key !== 'id' && $key !== 'user_type') : ?> 
                <tr>
                    <th style="font-size: 1.2rem; text-align: right;">
                        <b><?=e($key)?></b>
                    </th>
                    <td style="font-size: 1.2rem; ">                     
                      <?=e(strip_tags($value));?>                                              
                    </td>
                </tr>
              <?php endif;?>
            <?php endforeach; ?>
          </table>
        </div>    <!-- div container for form content ends here -->  
      </div>
    </section>   
  </div> <!-- A Div to containing all elements ends here -->
  <?php require __DIR__ . '/includes/footer.inc.php';?>
</body>
</html>