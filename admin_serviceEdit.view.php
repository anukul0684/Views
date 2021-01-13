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
    <h2><strong><?=e($service_details['service_name'])?></strong> Service Details</h2>
    <div id = "service_detail" style="width: 90%; margin-left: 5%;">
        <img src="images/<?=e($service_details['service_image'])?>" 
                alt="<?=e($service_details['service_name'])?>" />
        <div class="row">
            <div class="col-sm-4">
                <label for="serviceCategory" class="control-label"><strong>Service Category</strong></label>
                <input type="text" class="form-control" name="serviceCategory" id="serviceCategory" 
                value="<?=e($service_details['service_category'])?>" disabled>
            </div>
            <div class="col-sm-4">
                <label for="serviceType" class="control-label"><strong>Service Type</strong></label>
                <input type="text" class="form-control" name="serviceType" id="serviceType" 
                value="<?=e($service_details['service_type'])?>" disabled>
            </div>
            <div class="col-sm-4">
                <label for="serviceActive" class="control-label"><strong>Service Active</strong></label>
                <input type="text" class="form-control" name="serviceActive" id="serviceActive"
                value="<?=e($service_details['service_active'])?>" disabled>
            </div>
        </div>
        <form class="form-horizontal" role="form" style="margin-top: 3%;" 
                method="post" action="admin_serviceEdit">
          <div class="form-group">
            <label for="serviceName" class="col-sm-2 control-label"><strong>Service Name</strong></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" 
                        id="serviceName" name="serviceName" 
                        value="<?=e($service_details['service_name'])?>">
            </div>
          </div>
          <div class="form-group">
            <label for="servicePrice" class="col-sm-2 control-label"><strong>Service Price</strong> &#40;In CAD&#41;</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" 
                        id="servicePrice" name="servicePrice" 
                        value="<?=e($service_details['service_price'])?>">
            </div>
          </div>
          <div class="form-group">
            <label for="serviceDescription" class="col-sm-2 control-label">
                    <strong>Service Description</strong>
            </label>
            <div class="col-sm-10">
              <textarea class="form-control" name="serviceDescription" id="serviceDescription"                     
                        rows="3"><?=e($service_details['service_description'])?>
              </textarea>
            </div>
          </div> 
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <?php if(e($service_details['service_active'] == 'No')) : ?>
              <div class="checkbox">
                <label for="serviceActive">
                  <input type="checkbox" name="serviceActive" id="serviceActive"> Activate
                </label>
              </div>
              <?php else :?>
                <label for="serviceActive">
                  <input type="checkbox" name="serviceActive" id="serviceActive" checked> Keep Active
                </label>
              <?php endif; ?>              
            </div>
          </div>         
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="hidden" name="service_id" value="<?=e($service_details['service_id'])?>" />
              <button type="submit" class="btn btn-primary">Save</button>
              <a href="admin_services" class="btn btn-danger" role="button">Cancel</a>
            </div>
          </div>
        </form>
    </div>
    <noscript>
      This page requires JavaScript. Please enable it in your browser. 
    </noscript>
</body>
</html>