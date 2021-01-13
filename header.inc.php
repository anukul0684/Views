<!-- Semnatic Element Header for logo, social links and company name -->
<header>    
  <div id="logo_company_data">  
    <a title="logo image" href="/">     
      <picture>        
        <source media="(max-width:767px)" 
                title="mobile logo" srcset="images/whiteflower_fs.png" />
        <source media="(min-width:768px)" 
                title="desktop logo" srcset="images/whiteflower_f1.png" />
        <img id="logo" src="images/whiteflower_f1.png" 
            title="logo image" alt="fall_back" />
      </picture>
    </a>
    <h1><a title="Company Name" href="/">Angel Salon </a></h1>
  </div>
  <div id="slink_image">               
    <a title="fb" class="social_mlinks" href="#" >
      <img src="images/fb.png" title="fb page" alt="facebook" /> 
    </a>
    <a title="twitter" class="social_mlinks" href="#" >
      <img src="images/twitter.png" title="twitter feeds" alt="twitter feeds" /> 
    </a>
    <a title="Instagram" class="social_mlinks" href="#" >
      <img src="images/insta.png" title="insta posts" alt="instagram" /> 
    </a>
  </div>      
  <div id="login_div">
    <?php if(empty($_SESSION['userid'])) : ?>      
      <h3><a class = "login" href="login">Login</a> | 
          <a class = "signup" href="user_registration">Sign Up</a>
      </h3>                  
    <?php else : ?> 
      <?php 
        $userid = $_SESSION['userid'];                   
      ?>               
      <h3>Welcome <?=e($_SESSION['user_name'])?>&#33;&nbsp;  
        <a class = "login" href="user_success">Profile</a> | <a class = "signup" href="logout">Logout</a>
      </h3>      
    <?php endif; ?>
    <div id="search_cart">
      <p id="search_tag">
        <input type="text" name="search" id="search" placeholder="search" 
              onkeydown = "if (event.keyCode === 13)
                          window.location = 'services?search=' + document.getElementById('search').value"/>
      </p>
      <p id="search_img">
        <a title="search here" class="search" 
            href="javascript:;" 
            onclick="this.href='services?search=' + document.getElementById('search').value">
          <img src="images/search.png" title="search" alt="search" /> 
        </a>
        <a title="cart" class="cart" href="appointment_cart" >
          <img src="images/appointment_cart.png" title="cart" alt="cart" /> 
        </a>
        <a title="bookings" class="bookings" href="appointment_history" >
          <img src="images/bookings.png" title="bookings" alt="bookings" /> 
        </a>
      </p>
    </div>
  </div>   
  
  <div id="header_nav">
    <div id="nav_data">
      <?php require __DIR__ . '/navigation.inc.php';?>
    </div>   
    <div id="head_msg">
      <div id="displaymsg1">
          <?php if($slug == 'home') : ?>&nbsp;<?php endif; ?>Call (204)-599-8236 for booking an appointment.
      </div>
      <div id="displaymsg2">
          Salon Timings: 10 a.m. till 5 p.m. Mondays closed.
      </div> 
    </div>
  </div>
  <div id="search_cart_mobile">
    <p id="search_tag_mobile">
      <?php if(empty($_SESSION['userid'])) : ?>Welcome &#33;&nbsp;
      <?php else: ?>
        Welcome <?=e($_SESSION['user_name'])?>&#33;&nbsp;
      <?php endif ?>
      <input type="text" name="search" id="search" placeholder="search" 
            onkeydown = "if (event.keyCode === 13)
                        window.location = 'services?search=' + document.getElementById('search').value"/>
    </p>
    <p id="search_img_mobile">
      <a title="search here" class="search" 
          href="javascript:;" 
          onclick="this.href='services?search=' + document.getElementById('search').value">
        <img src="images/search.png" title="search" alt="search" /> 
      </a>
      <a title="cart" class="cart" href="appointment_cart" >
        <img src="images/appointment_cart.png" title="cart" alt="cart" /> 
      </a>
      <a title="bookings" class="bookings" href="appointment_history" >
        <img src="images/bookings.png" title="bookings" alt="bookings" /> 
      </a>
    </p>
  </div>
</header>