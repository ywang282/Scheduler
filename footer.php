  <footer role="contentinfo"> 
    <div class="row footer-info">
      <h2 class="sr-only">library Website footer information</h2>
      <div class="col-md-3 col-sm-3 col-xs-12" role="region" aria-label="contact us">
        <div class="dropdown" aria-labelledby="address">
          <a href="#" class="dropdown-toggle footer-link" data-toggle="dropdown" aria-label="contact us"><h3 class="footerheading">Contact Us:<b class="caret"></b></h3></a>
          <ul class="dropdown-menu">
            <li><a href="http://www.library.illinois.edu/people/phone.php" aria-labelledby="Employee Directory">Employee Directory</a></li>
            <li><a href="http://www.library.illinois.edu/secondary/contactUs.html" aria-labelledby="General contact information">General contact information</a></li>
            <li><a aria-label="Submit your feedback and suggestions" href="https://illinois.edu/fb/sec/1454867" aria-labelledby="Feedback and suggestions">Feedback and suggestions</a></li>
          </ul>
        </div>
        <span class="text-block">University Library</span>
        <span class="text-block">University of Illinois at Urbana-Champaign</span>
        <span class="text-block">1408 W. Gregory Dr. | Urbana, IL 61801</span>
        <span class="text-block">217.333.2290</span>
        <div class="footer-block-top-space">
          <span class="text-block"><a class="footer-link" href="https://www.facebook.com/universitylibrary">
          <span class="fa fa-facebook fa-lg footer-icon-social" aria-label="facebook"></span><small> Find us on Facebook</small></a></span>
          <span class="text-block"><a class="footer-link" href="http://www.library.illinois.edu/friends/gift.html">
          <span class="fa fa-gift fa-lg footer-icon-social" aria-label="make a gift"></span><small> Make a Gift</small></a></span>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12" role="region" aria-label="information for">  
        <h3 class="footerheading">Information for:</h3>
        <div class="row">
          <div class="col-md-6"> 
            <span class="text-block"><a class="footer-link" href="http://www.library.illinois.edu/ugl/">Undergraduates</a></span>
            <span class="text-block"><a class="footer-link" href="http://www.library.illinois.edu/learn/users/gradstudents.html">Graduate Students</a></span>
            <span class="text-block"><a class="footer-link" href="http://www.library.illinois.edu/learn/users/faculty.html">Faculty</a></span>
            <span class="text-block"><a class="footer-link" href="http://www.library.illinois.edu/learn/users/alumni.html">Alumni</a></span>
            <span class="text-block"><a class="footer-link" href="http://www.library.illinois.edu/learn/users/visitors.html">Visitors</a></span>
          </div>
          <div class="col-md-6">
            <span class="text-block"><a class="footer-link" href="http://www.library.illinois.edu/learn/users/affiliates.html">Affiliated Organizations</a></span>
            <span class="text-block"><a class="footer-link" href="http://www.library.illinois.edu/learn/users/usersdisabilities.html">Users with Disabilities</a></span>
            <span class="text-block"><a class="footer-link" href="http://www.library.illinois.edu/distance/">Distance Learners</a></span>
            <span class="text-block"><a class="footer-link" href="http://www.library.illinois.edu/staff/">Library Staff</a></span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12" role="region" aria-label="feedback">
        <h3 class="footerheading">Feedback</h3>
        <span class="text-block"><a class="footer-link" href="https://illinois.edu/fb/sec/887006">Suggest an item for purchase</a></span>
        <span class="text-block"><a aria-label="Submit your feedback and suggestions" class="footer-link" href="https://illinois.edu/fb/sec/1454867">Give us feedback/suggestions</a></span>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12" id="vertical" role="region" aria-label="about the site">
        <h3 class="footerheading">About this site</h3>
        <span class="text-block"><a class="footer-link" href="http://www.vpaa.uillinois.edu/policies/web_privacy.cfm">Privacy</a></span>
        <div class="footer-block-top-space">
          <a href="http://www.library.illinois.edu/doc/" aria-label="Federal Depository Library Program website link"><img src="./assets/fdlp_logo.png" alt="Federal Depository Library Program Logo">
        </div>
      </div> 
    </div>
      <div class="row">
        <div class="col-md-12 copyright-footer" aria-label="university library copyright info">
          <p><a href="http://illinois.edu" aria-label="University of Illinois website link"><img src="./assets/illinois_wordmark_footer.png" alt="University of Illinois Logo" /></a></p>
              <p>© 2014 University of Illinois Board of Trustees</p>
        </div>
      </div>
  </footer>
</div><!--closing for container-->
</div>
</div>
</body>
<script type="text/javascript" src="//cdn.jsdelivr.net/g/underscorejs@1.6,backbonejs@1.1,fancybox,xdate"></script>
    <!-- UNDERSCORE TEMPLATES -->
<script type="text/html" id="buildtemplate">

    <div class="build" id="<%= id %>">
      
      <div class="buildinfo">
        
                <div class="imagec">
          <img src="<%= picurl %>" width="90px" height="60px" class="hidden-xs" alt="<%= name %>"></img>
        </div>
                <span id="badge-and-button">Rooms: <span class="badge-green badge"><%= numOfRooms %></span> <a aria-controls="build_<%= id %>" class="btn btn-primary btn-xs">Select</a></span>

                
      
        <div class="buildtext">
          <h4><%= name %></h4>
          <div id="building-desc-text"><p class="hidden-xs"><%= desc %></p></div>
          <a aria-label="map of <%= name %>" class="fancybox fancybox.iframe btn btn-primary btn-xs" href="http://maps.google.com/maps?q=+(<%= name %>)&z=16&ll=<%= lat %>,<%= lon %>&output=embed&iwloc=near">Map</a>
        </div>
  
      </div>  
      
      <div id="build_<%= id %>" class="roomc">
        <hr />

      </div>
        
    </div>

</script>

<script type="text/html" id="roomtemplate">

  <div class="room" id="<%= roomID %>">
  
    
    <div class="roomtext">
	<a href="#calenc" class="cschedule btn btn-info visible-sm-block visible-xs-block">See the schedule</a>
      <h5 class="rname"><%= name %></h5>
      
              <img class="roompic hidden-xs" src="<%= picurl %>" alt="<%= desc %>" width="60px" height="40px"><p class="rdesc"><%= desc %><br><a class="fancybox fancybox.iframe btn btn-primary btn-xs hidden-xs" id="<%= roomID %>" href="<%= mapurl %>">Floor Plan</a></p>
      <p></p>       
    </div>
    
    
  <!--  <div class="greenbox">Reserve</div>-->
  </div>
        
</script>
  
<script type="text/html" id="caltemplate">

  <div class="calc">
  
    <h4 class="roomname"></h4>
    <hr class="divider">
  
    <p class="rhowto">Click to select a date (limited to a 2-week period):</p>

  
    <h6 class="headerdate"></h6>
    <ul class="boxes"></ul>
    
    <p class="rhowto">Drag downward to select a consecutive block of time (up to 2 hours):</p>
    
    <table class="daycal" rules="all">
    <tbody></tbody>
    </table>
    
    <br />
    <center><a class="btn btn-primary btn-xs button">Make Reservation  <i class="fa fa-external-link"></i></a></center>
  </div>
</script>
<script type="text/javascript" src="./assets/js/get_time.php"></script>
<script type="text/javascript" src="./assets/built/scripts.js"></script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
  ga('create', 'UA-55158287-1', 'auto');
  ga('send', 'pageview');
  </script>
<script src="./assets/js/ga/gaelt.js" type="text/javascript"></script>
  <script type="text/javascript">
  add_GA_Events(window.location.host);
</script>