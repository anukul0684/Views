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
            <a href="admin_users" class="nav-item nav-link active">Users</a>
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
    <div id="page_content">
        
        <div id = "user_list" style="width:70%; margin-left: 13%;">
        <h2>Users Registered &#64; Angel Salon</h2>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>                
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Details</th>
            </tr>                
            </thead>     
            <?php foreach($users as $row) :?>                
                <tbody>
                <tr>                    
                    <td><?=e($row['first_name'])?>&nbsp;<?=e($row['last_name'])?></td>
                    <td><?=e($row['email'])?></td>
                    <td><?=e($row['phone'])?></td>
                    <td>
                        <a href="admin_usersdetails?id=<?=e($row['id'])?>" 
                            class="btn btn-secondary btn-lg" role="button">Show
                        </a>                        
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