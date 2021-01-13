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
      
      <!-- div container for course list starts here -->
      <div id="course_container">
        
        <table> <!-- Table for course start here -->
      
          <caption><h2><?=e($title)?> at Angel</h2></caption> <!-- caption of table -->

          <tr> <!-- heading of the table -->
            <th colspan="4">Upcoming <?= $title ?> in May 2020</th>
          </tr>

          <tr> <!-- column header of the table starts here -->       
            <th>Sr. No.</th>
            <th>Course</th>            
            <th>Date:</th> 
            <th>Duration</th> 
                   
          </tr> <!-- column header of the table ends here -->

          <tr class="courserow">       
            <th>1</th>  <!-- This is the row header --> 
            <td class="courselist">Complete Beautician Course</td>
            <td>May 10, 2020</td>                          
            <td>6 Months</td>                          
          </tr> 

          <tr class="courserow"> 
            <th>2</th> 
            <td class="courselist">Hair Styling Course</td>
            <td>May 12, 2020</td>                              
            <td>2 Months</td>                              
          </tr> 

          <tr class="courserow"> 
            <th>3</th> 
            <td class="courselist">Threading Course</td>
            <td>May 14, 2020</td>                              
            <td>2 Months</td>                              
          </tr> 

          <tr class="courserow"> 
            <th>4</th> 
            <td class="courselist">Basic Course</td>
            <td>May 20, 2020</td>                              
            <td>3 Months</td>                              
          </tr>   

        </table> <!-- Table for course end here -->   
      </div>      
    </section>    
  </div> <!-- A Div to containing all elements ends here -->
  <?php require __DIR__ . '/includes/footer.inc.php';?>
</body>
</html>