<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8" />    
    <?php require __DIR__ . '/includes/head_admin.inc.php';?>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet"> 
    <style>
        
        .navbar{
            width:100%;
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
            <a href="dashboard" class="nav-item nav-link active">Dashboard</a>
            <a href="admin_users" class="nav-item nav-link">Users</a>
            <a href="admin_services" class="nav-item nav-link">Services</a>
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
    
    <div class="card-deck">
        <div class="card">            
            <div class="card-body">
                <h5 class="card-title">Highest Charged Services</h5>
                <table class="table table-striped table-bordered card-text">
                    <thead>
                    <tr>                
                        <th>Service Category</th>
                        <th>Avg. Service Price</th>                   
                    </tr>                
                    </thead>   
                    <tbody>  
                    <?php foreach($avgCost as $row) :?>                       
                    <tr>                    
                        <td><?=e($row['service_category'])?></td>
                        <td><?=e(floatval($row['avg(service_price)']))?></td>                        
                    </tr>                                       
                    <?php endforeach; ?>         
                    </tbody>           
                </table>                
            </div>            
        </div>
        <div class="card">            
            <div class="card-body">
                <h5 class="card-title">Maximum Rated Services</h5>
                <table class="table table-striped table-bordered card-text">
                    <thead>
                    <tr>                
                        <th>Service Category</th>
                        <th>Avg. Service Rating</th>                   
                    </tr>                
                    </thead>   
                    <tbody>  
                    <?php foreach($avgRating as $row) :?>                       
                    <tr>                    
                        <td><?=e($row['service_category'])?></td>
                        <td><?=e(floatval($row['avg(service_avg_rating)']))?></td>                        
                    </tr>                                        
                    <?php endforeach; ?>       
                    </tbody>             
                </table>                   
            </div>            
        </div>
        <div class="card">            
            <div class="card-body">
                <h5 class="card-title">Top Users</h5>
                <table class="table table-striped table-bordered card-text">
                    <thead>
                    <tr>                
                        <th>User Name</th>
                        <th>Appointments Booked</th>                   
                    </tr>                
                    </thead>   
                    <tbody>  
                    <?php foreach($orderByUsers as $row) :?>                       
                    <tr>                    
                        <td><?=e($row['first_name'] . ' ' . $row['last_name'] )?></td>
                        <td><?=e(floatval($row['count(a.appointment_id)']))?></td>                        
                    </tr>                                        
                    <?php endforeach; ?>       
                    </tbody>             
                </table>                  
            </div>            
        </div>
        <div class="card">            
            <div class="card-body">
                <h5 class="card-title">Top Services</h5>
                <table class="table table-striped table-bordered card-text">
                    <thead>
                    <tr>                
                        <th>Service Name</th>
                        <th>Booked in Numbers</th>                   
                    </tr>                
                    </thead>   
                    <tbody>  
                    <?php foreach($serviceOrders as $row) :?>                       
                    <tr>                    
                        <td><?=e($row['service_name'])?></td>
                        <td><?=e(floatval($row['count(bas.service_id)']))?></td>                        
                    </tr>                                        
                    <?php endforeach; ?>       
                    </tbody>             
                </table>                  
            </div>            
        </div>
    </div> 
    <div class="container-fluid" style="border: solid 1px black; border-radius: 10px; width: 98%; margin-top: 2%;">
        <div class="row" style="background-color: #f0f0f0; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <div class="col-md-10">Event</div>
            <div class="col-md-2">Logged On</div>
        </div>
        <?php foreach($logDetails as $row) : ?>
        <div class="row">
            <div class="col-md-10"><?=e($row['event'])?></div>
            <div class="col-md-2"><?=e($row['created_at'])?></div>
        </div>
        <?php endforeach; ?>    
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <noscript>
        This page requires JavaScript. Please enable it in your browser. 
    </noscript>
</body>
</html>