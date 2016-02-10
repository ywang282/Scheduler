  <footer role="contentinfo"> 
    <?php require_once( 'shared_footer.php' ); ?>
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
          <img src="<%= picurl %>" width="90px" height="60px" class="hidden-xs" alt="<%= name %>"/>
        </div>
        <span class="selectbutton" id="badge-and-button">Rooms: <span class="badge-green badge"><%= numOfRooms %></span> <a aria-controls="build_<%= id %>" class="btn btn-primary btn-xs">Select</a> <a aria-label="map of <%= name %>" class="fancybox fancybox.iframe btn btn-primary btn-xs hidden-map" href="http://maps.google.com/maps?q=+(<%= name %>)&z=16&ll=<%= lat %>,<%= lon %>&output=embed&iwloc=near">Map</a></span>



        <div class="buildtext">
          <h4><%= name %></h4>
          <div id="building-desc-text"><p class="hidden-xs"><%= desc %></p></div>
          <a aria-label="map of <%= name %>" class="fancybox fancybox.iframe btn btn-primary btn-xs visible-map" href="http://maps.google.com/maps?q=+(<%= name %>)&z=16&ll=<%= lat %>,<%= lon %>&output=embed&iwloc=near">Map</a>
        </div>
      </div>

      <div id="structure_<%= id %>" class="structure">

        <div id="build_<%= id %>" class="roomc col-md-5 col-sm-12 col-lg-6">
          <h4 style="padding-bottom: 2px;">1. Select a Room</h4>
        </div>
        <div id="time-and-cal_<%= id %>" class="time-and-cal">
          <div id="calendar_<%= id %>" class="calendar col-md-6 col-sm-6 col-lg-6">
            <h4 style="padding-bottom: 1px;">2. Select a Date</h4>
            <div id="calhtml_<%= id %>"></div>
            <h5 style="font-weight: 500;">Room reservations are limited to a 2 week time period.</h5>
          </div>

          <div id="times_<%= id %>" class="times col-md-5 col-sm-6 col-xs-4">
            <h4 style="padding-bottom: 1px;">3. Select a Time</h4>
            <table class="daycal"></table><br>
            <a class="btn btn-primary btn-xs button" style="margin-bottom: 5%; float: right; margin-right: 21%;">Make Reservation</a>
          </div>
        </div>
      </div>
    </div>

  </script>
  <script type="text/html" id="roomtemplate">
    <div class="room" id="<%= roomID %>">


      <div class="roomtext">
        <h6 class="rname"><%= name %></h6></div>
      <div class="roomtext" id="inline<%= roomID %>" style="display:none"><h5><%= name %></h5><img class="roompic hidden-xs" src="<%= picurl %>"><p><%= desc %></p>
      </div>
      <div style="float: right; padding-right: 4%; margin-top: -5px;">
        <h6>
          <a class="btn btn-primary btn-xs fancybox" id="info<%= roomID %>" href="#inline<%= roomID %>">
            <i class="fa fa-info-circle" aria-labelledby="information"></i>
          </a>

          <a class="btn btn-primary btn-xs fancybox" id="picture<%= roomID %>" href="<%= picurl %>">
            <i class="fa fa-picture-o" aria-labelledby="room picture"></i>
          </a>
          <a class="btn btn-primary btn-xs fancybox" id="map<%= roomID %>" href="<%= mapurl %>">
            <i class="fa fa-map-marker" aria-labelledby="room layout" style="padding-left: 2px; padding-right: 2px; "></i>
          </a>
        </h6>
      </div>

      <img class="roompic hidden-xs hidden" src="<%= picurl %>" alt="<%= desc %>" width="60px" height="40px"><p class="hidden hidden-xs rdesc"><br></p>
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
      <center><a class="btn-primary btn-xs button">Make Reservation</a></center>
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