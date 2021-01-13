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
            padding:10px;
            text-align: center;
            font-weight: bold;
        }

        /* class for flash message when it is a success*/
        .flash.success {
            border:1px solid #1b770d;
            color: #1b770d;
            background-color: #f8f8f8;
        }

        /* class for flash message when it is an error*/
        .flash.error {
            border:1px solid #900;
            color:#900;
            background-color: #9cc;
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
        
        <div id = "service_list">
        <h2>Services &#64; Angel Salon
            <?php if($search_content=='Yes') : ?> &#58; Search Result for &#34;<?=e($searched)?>&#34;
            <?php endif;?>
        </h2>
        <div style="text-align: right; width: 91.5%"> 
            <a href="admin_serviceAdd" class="btn btn-success " role="button">Add New Service</a>  
        </div>         
        <?php require __DIR__ . '/includes/flash.inc.php'; ?>    
        <table class="table table-striped table-dark">
            <thead>
            <tr>                
                <th>Service Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Available At</th>
                <th>Last Update</th>
                <th>Active&#47;Inactive</th>
                <th>Add&#47;Edit</th>                
            </tr>                 
            </thead>    
            <?php foreach($services as $row) :?>
                <tbody>
                <tr>                    
                    <td><?=e($row['service_name'])?></td>
                    <td><?=e($row['service_category'])?></td>
                    <td>&#36;<?=e($row['service_price'])?></td>
                    <td><?=e($row['service_type'])?></td>
                    <td><?php if(e($row['updated_at'] == '')) : ?>
                            Not Updated Yet
                        <?php else: ?>
                            <?=e($row['updated_at'])?>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if(e($row['service_active']==='Yes')) : ?>Active
                        <?php elseif(e($row['service_active']==='No')) : ?>Inactive
                        <?php else :?> Unknown<?php endif; ?>
                    </td>
                    <td>                        
                        <a href="admin_serviceEdit?service_id=<?=e($row['service_id'])?>" class="btn btn-primary" role="button">Edit</a>  
                        <a href="admin_serviceDelete?serviceid=<?=e($row['service_id'])?>" class="btn btn-danger" role="button">Delete</a>                      
                    </td>                    
                </tr>
                </tbody>
            <?php endforeach; ?>                    
        </table>
        </div>


    <noscript>
      This page requires JavaScript. Please enable it in your browser. 
    </noscript>
</body>
</html>