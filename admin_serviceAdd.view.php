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

        /*class for flash message content*/
        .flash {
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        /* class for flash message when it is a success*/
        .flash.success {
            border: 1px solid #1b770d;
            color: #1b770d;
            background-color: #f8f8f8;
        }

        /* class for flash message when it is an error*/
        .flash.error {
            border:1px solid #900;
            color: #900;
            background-color: #9cc;
        }

        .errors{
            color: #900;
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
    <h2><strong>Add</strong> New Service</h2>
    <div id = "service_detail" style="width: 90%; margin-left: 5%;">   
        <?php require __DIR__ . '/includes/flash.inc.php'; ?>    
        <form class="form-horizontal" role="form" style="margin-top: 3%;" 
                method="post" action="admin_serviceAdd">
            <?php if(isset($errors)>0) : ?>
              <?php if(count($errors)>0) : ?>   
                <div class = "errors">                  
                  <ul>
                    <?php if(!empty($errors['serviceName'][0])) : ?>
                      <li>&nbsp;<?=e($errors['serviceName'][0])?></li>   
                    <?php endif; ?>
                    <?php if(!empty($errors['serviceDescription'][0])) : ?>
                      <li>&nbsp;<?=e($errors['serviceDescription'][0])?></li>   
                    <?php endif; ?>
                    <?php if(!empty($errors['serviceCategory'][0])) : ?>
                      <li>&nbsp;<?=e($errors['serviceCategory'][0])?></li>   
                    <?php endif; ?>        
                    <?php if(!empty($errors['serviceType'][0])) : ?>   
                      <li>&nbsp;<?=e($errors['serviceType'][0] ?? '')?></li>  
                    <?php endif; ?>        
                    <?php if(!empty($errors['servicePrice'][0])) : ?>           
                      <li>&nbsp;<?=e($errors['servicePrice'][0] ?? '')?></li>  
                    <?php endif; ?>                                                              
                  </ul>
                </div>                 
              <?php endif; ?>               
            <?php endif;?>
            <div class="row">
                <div class="col-sm-6">
                    <label for="serviceCategory" class="control-label"><strong>Select Category</strong></label>
                    <select class="browser-default custom-select" name="serviceCategory" id="serviceCategory">
                      <option selected value="none">SELECT SERVICE CATEGORY</option>
                      <option value="Facial">Facial</option>
                      <option value="Hair Cut">Hair Cut</option>
                      <option value="Hair Styling">Hair Styling</option>
                      <option value="Makeup">Makeup</option>
                      <option value="Skin Care">Skin Care</option>
                      <option value="Threading">Threading</option>
                      <option value="Waxing">Waxing</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label for="serviceType" class="control-label"><strong>Select Type</strong></label>
                    <select class="browser-default custom-select" name="serviceType" id="serviceType">
                      <option selected value="none">SELECT SERVICE TYPE</option>
                      <option value="Salon">Salon</option>
                      <option value="Home">Home</option>                      
                    </select>
                </div>                
            </div>
            <div class="form-group" style="margin-top: 2%;">
            <label for="serviceName" class="col-sm-2 control-label"><strong>Service Name</strong></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" 
                        id="serviceName" name="serviceName" 
                        placeholder="Enter Service Name" value="<?=e($post['serviceName'] ?? '')?>">
            </div>
            </div>
            <div class="form-group">
            <label for="servicePrice" class="col-sm-2 control-label">
                <strong>Service Price</strong> &#40;In CAD&#41;
            </label>
            <div class="col-sm-10">
              <input type="number" class="form-control" 
                        id="servicePrice" name="servicePrice" 
                        value="<?=e($post['servicePrice'] ?? 0)?>">
            </div>
            </div>
            <div class="form-group">
            <label for="serviceDescription" class="col-sm-2 control-label">
                    <strong>Service Description</strong>
            </label>
            <div class="col-sm-10">
              <textarea class="form-control" name="serviceDescription" id="serviceDescription"                     
                        rows="3" placeholder="Describe service here..."><?=e($post['serviceDescription'] ?? '')?>
              </textarea>
            </div>
            </div>                    
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">              
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