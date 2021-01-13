<!-- Semnatic Element Nav for navigation menu in desktop view -->
<nav id="desktopnav">      
  <ul id="main_navigation">      
      <li <?php if($slug == 'home') : ?>
          class="current_page main_nav"
          <?php else : ?>
          class="main_nav"
          <?php endif; ?>>
          <a title="Home Page" href="/">HOME</a>
      </li>
      <li <?php if($slug == 'services') : ?>
          class="current_page main_nav"
          <?php else : ?>
          class="main_nav"
          <?php endif; ?>>
          <a title="Angel Services" href="services">SERVICES</a>
      </li>
      <li <?php if($slug == 'specials') : ?>
          class="current_page sub_menu main_nav"
          <?php else : ?>
          class="sub_menu main_nav"
          <?php endif; ?>>
          <a title="Angel Specials" href="specials">SPECIALS</a>
        <ul id="sub_list">
          <li <?php if($slug == 'courses') : ?>
              class="current_page"                  
              <?php endif; ?>>
              <a title="Angel Courses" href="courses">COURSES</a>
          </li>
          <li <?php if($slug == 'seminars') : ?>
              class="current_page"                  
              <?php endif; ?>>
              <a title="Angel Seminars" href="seminars">SEMINARS</a>
          </li>
          <li <?php if($slug == 'servicesathome') : ?>
              class="current_page"                  
              <?php endif; ?>>
              <a title="Angel Services at Home" href="servicesathome">SERVICES @ HOME</a>
          </li>
          <li <?php if($slug == 'products') : ?>
              class="current_page"                  
              <?php endif; ?>>
              <a title="Angel Products" href="products">PRODUCTS</a>
          </li>
        </ul>
      </li>
      <li <?php if($slug == 'about') : ?>
          class="current_page main_nav"
          <?php else : ?>
          class="main_nav"
          <?php endif; ?>>
          <a title="About Us" href="about">ABOUT US</a>
      </li>
      <li <?php if($slug == 'contactus') : ?>
          class="current_page main_nav"
          <?php else : ?>
          class="main_nav"
          <?php endif; ?>>
          <a title="Contact Us" href="contactus">CONTACT</a>
      </li>               
  </ul>      
</nav>

<!-- Semnatic Element Nav for navigation menu in mobile view -->
<nav id="mobilenav">
  <a title="Click for Menu" href="#" id="mobile_menu">
      <span id="topbar"></span>
      <span id="middlebar"></span>
      <span id="bottombar"></span>
  </a>
  <ul id="mobile_navigation"> 
      <?php if(empty($_SESSION['userid'])) : ?>
      <li <?php if($slug == 'login') : ?>
          class="current_page"
          <?php endif; ?>>
          <a title="Login" href="login">LOGIN</a>
      </li>     
      <li <?php if($slug == 'user_registration') : ?>
          class="current_page"
          <?php endif; ?>>
          <a title="Sign Up" href="user_registration">SIGN UP</a>
      </li>
      <?php else : ?>
      <li <?php if($slug == 'user_success') : ?>
          class="current_page"
          <?php endif; ?>>
          <a title="Profile" href="user_success">PROFILE</a>
      </li>     
      <li <?php if($slug == 'logout') : ?>
          class="current_page"
          <?php endif; ?>>
          <a title="Sign Up" href="logout">LOGOUT</a>
      </li>
      <?php endif; ?>  
      <li <?php if($slug == 'home') : ?>
          class="current_page"
          <?php endif; ?>>
          <a title="Home Page" href="/">HOME</a>
      </li>
      <li <?php if($slug == 'services') : ?>
          class="current_page"
          <?php endif; ?>>
          <a title="Angel Services" href="services">SERVICES</a>
      </li>
      <li <?php if($slug == 'specials') : ?>
          class="current_page"
          <?php endif; ?>>
          <a title="Angel Specials" href="specials">SPECIALS</a>
        <ul id="mobilesub_list">
          <li <?php if($slug == 'courses') : ?>
              class="current_page"
              <?php endif; ?>>
              <a title="Angel Courses" href="courses">COURSES</a>
          </li>
          <li <?php if($slug == 'seminars') : ?>
              class="current_page"
              <?php endif; ?>>
              <a title="Angel Seminars" href="seminars">SEMINARS</a>
          </li>
          <li <?php if($slug == 'servicesathome') : ?>
              class="current_page"
              <?php endif; ?>>
              <a title="Angel Services at Home" href="servicesathome">SERVICES @ HOME</a>
          </li>
          <li <?php if($slug == 'products') : ?>
              class="current_page"
              <?php endif; ?>>
              <a title="Angel Products" href="products">PRODUCTS</a>
          </li>
        </ul>
      </li>
      <li <?php if($slug == 'about') : ?>
          class="current_page"
          <?php endif; ?>>
          <a title="About Us" href="about">ABOUT US</a>
      </li>
      <li <?php if($slug == 'contactus') : ?>
          class="current_page"
          <?php endif; ?>>
          <a title="Contact Us" href="contactus">CONTACT</a>
      </li>                         
  </ul>
</nav>