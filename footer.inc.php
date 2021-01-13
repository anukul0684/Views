<!-- Semnatic Element Footer for footer menu for the website, 
    the copyright display, and last modified date and time -->
<footer <?php if($slug != 'services') : ?> class = "not_services"<?php endif;?>>
  <div id="displaymsg3">
        Salon Timings: 10 a.m. till 5 p.m. Mondays closed.
  </div>
  <div id="footer_menu">
    <ul id="footer_navigation">      
        <li><a title="Page Not Ready" href="#">CAREERS</a></li>
        <li><a title="Page Not Ready" href="#">GALLERY</a></li>
        <li><a title="Page Not Ready" href="#">PRIVACY POLICY</a></li>
        <li<?php if($slug =='contactus') : ?> class="current_page"<?php endif; ?>>
          <a title="Contact Us" href="contactus">CONTACT</a>
        </li>   
                                    
    </ul>
  </div>
  <div id="site_details">
    <div id="copy_right">
        &copy; 2020 AYN Technologies Ltd. All Rights Reserved. &nbsp;
    </div> 
    <div id="last_modified">
      <script>
        document.scripts[document.scripts.length-1].parentNode.innerHTML = "Last Modified: " + document.lastModified;
      </script>
    </div>
  </div> 
</footer>