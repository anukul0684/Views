<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8" />      
    <?php require __DIR__ . '/includes/head_admin.inc.php';?>
     
    <style>
        
        .navbar{
            width:100%;
        }

        h2{
            text-align: center;
        }
    </style>
    <script></script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="dashboard" class="navbar-brand">Angel</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="dashboard" class="nav-item nav-link">Dashboard</a>
            <a href="admin_users" class="nav-item nav-link">Users</a>
            <a href="admin_services" class="nav-item nav-link active">Services</a>
            <a href="admin_courses" class="nav-item nav-link">Courses</a>
            <a href="admin_seminars" class="nav-item nav-link">Seminars</a>
            <a href="admin_products" class="nav-item nav-link">Products</a>            
        </div>
        <form class="form-inline ml-auto">
            <input type="text" class="form-control mr-sm-2" 
                    placeholder="Search" 
                    name="search" id="search"
                onkeydown = "if (event.keyCode === 13)
                      window.location = 'admin_services?search=' + document.getElementById('search').value">
            <a href="javascript:;" class="btn btn-outline-light"
                role="button"            
                onclick="this.href ='admin_services?search=' + document.getElementById('search').value">Search</a>
        </form>
        <a href="logout" class = "nav-item nav-link">Logout</a>
    </div>
    </nav>

    <h1></h1>
    <div id="page_content">
        <h2>Service Details to Delete</h2>
        <div class = "container">               
        <div>            
          <img src="images/<?=e(strstr($service_details['service_image'], '.', 'jpg') . 'B.jpg')?>" 
               alt="Service Image" style="float:left; margin-right:2%;"/>                    
          <p>                
            <strong><?=e($service_details['service_name'])?></strong> <br />  
            &#126;<em><?=e($service_details['service_category'])?></em>&#126; <br />
            Available at&#58; <?=e($service_details['service_type'])?> <br />
            Price&#58; &#36;<?=e($service_details['service_price'])?> plus 5&#37; GST <br />
            Average Rating&#58; <?=e($service_details['service_avg_rating'])?> <br />
            Description&#58; 
            <em>
              <?=e($service_details['service_description'])?></em> <br />                
          </p>   
          <form id="add_cart"
            method="post"
            action="admin_serviceDelete" 
            autocomplete="off" novalidate>                
            <input type="hidden" name="service_id" value="<?=e($service_details['service_id'])?>" />
            <input type="hidden" name="service_name" value="<?=e($service_details['service_name'])?>" />
            <button class="btn btn-danger">Delete Service</button>
            <a href="admin_services" class="btn btn-primary" role="button">Cancel</a> 
          </form>                 
        </div>                      
  </div>
</div>


    <noscript>
      This page requires JavaScript. Please enable it in your browser. 
    </noscript>
</body>
</html>