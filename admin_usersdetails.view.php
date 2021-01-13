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
        <div id = "user_details">
            <h2><?=e($user['First Name'] . ' ' . $user['Last Name'])?> Details</h2>
            <table style="width: 80%; margin-left: 10%;" class="table table-bordered">
                <?php foreach($user as $key => $value) :?>
                  <?php if($key !== 'User Password' && $key !== 'id' && $key !== 'user_type') : ?> 
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
                <tr>
                    <th></th>
                    <td>
                        <a href="admin_users" 
                            class="btn btn-dark" role="button">Back
                        </a>  .
                    </td>
                </tr> 
            </table>            
        </div>
    <noscript>
      This page requires JavaScript. Please enable it in your browser. 
    </noscript>
</body>
</html>