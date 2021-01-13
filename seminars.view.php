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
      <a title="Angel Specials" style="color: #AF473C;" href="specials">Specials</a> &gt; <?=e($title)?> 

      <!-- div container for seminar list starts here -->
      <div id="seminar_container">
        <table> <!-- Table for seminar start here -->

          <caption><h2><?=e($title)?> at Angel</h2></caption> <!-- caption of table -->

          <tr> <!-- heading of the table -->
            <th colspan="3">Upcoming <?= $title ?> in Year 2020</th>
          </tr>

          <tr> <!-- column header of the table starts here -->       
            <th>Sr. No.</th>
            <th>Seminar</th>            
            <th>Date:</th>        
          </tr> <!-- column header of the table ends here -->

          <tr class="seminar_row">       
            <th>1</th>  <!-- This is the row header --> 
            <td class="courselist">Brand A New Products Launch</td>
            <td>May 10, 2020</td>                          
          </tr> 

          <tr class="seminar_row"> 
            <th>2</th> 
            <td class="courselist">Event by a Hair Stylist</td>
            <td>
                Jul 12, 2020
            </td>                              
          </tr> 

          <tr class="seminar_row"> 
            <th>3</th> 
            <td class="courselist">Getting Ready for Traditional Events</td>
            <td>Sep 14, 2020</td>                              
          </tr> 

          <tr class="seminar_row"> 
            <th>4</th> 
            <td class="courselist">An Introduction to Eye-Makeup</td>
            <td>Oct 20, 2020</td>                              
          </tr>   

        </table> <!-- Table for seminar end here -->   
      </div> <!-- div container for seminar ends here -->      
    </section>   
  </div> <!-- A Div to containing all elements ends here -->
  <?php require __DIR__ . '/includes/footer.inc.php';?>
</body>
</html>