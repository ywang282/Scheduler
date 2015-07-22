  <div class="row">
    <div class="col-md-12 light-area mobile-col-negative-padding">
      <div id="dynamictabs">
        <ul class="accordion-tabs-minimal dynamictabs" role="tablist">
          <li class="tab-header-and-content" role="presentation">
            <a id="hoursloc" href="#" class="tab-link dynamictabs dynamic-tab-text arrow-access"><span class="fa fa-clock-o fa-3x"></span> <span class="dynamic-tab-label"><span class="text-block-display">Libraries </span>and Hours</span></a>
            <div class="tab-content-bourbon">
              <div class="tab-pane active dynamic-tab-pane" id="hours" role="tabpanel" aria-label="LIBRARIES AND HOURS">
                <div class="dynamic-panel-body">
                  <div class="container-fluid">
                    <div class="row"><!-- TAB TITLE -->
                      <div class="col-sm-12 col-xs-12">
                        <h3 class="dynamictabs">Libraries and Hours</h3>
                        <hr class="hr-orange"/>
                      </div>
                    </div><!-- END TAB TITLE -->
                    <div class="row">
                      <div class="col-md-12" id="library-links-hours-loc-row">
                        <span class="pull-right">
                          <a style="padding-right:7px;" href="http://www.library.illinois.edu/services/find.php">Show All (Including virtual libraries)  |  </a>
                          <a href="http://www.library.illinois.edu/bycollege/">By Subject</a>         
                        </span>
                      </div>
                    </div>
                    <div class="row" id="library_search_row" role="search">
                      <div class="col-md-12">
                        <div id="library-hours-header">
                          <div class="row">
                            <form class="form-inline">
                              <div class="col-md-4">
                                <label for="search-field" class="sr-only">Filter libraries by name</label>
                                <input style="width:100%;" type="text" class="form-control" id="search-field" placeholder="Filter libraries by name" aria-required="false"></input>
                              </div>
                              <div class="col-md-2">
                                <label id="show-open-lib-label">
                                  <input id="open-filter-checkbox" type="checkbox" name="show-open-checkbox" value="open">Show only open libraries</input>
                                </label>
                              </div>
                            </form> 
                            <div class="col-md-6 vertical-center" id="library_search_additional_links_div"> 
                              <a href="./hours/">Weekly Hours View</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div id="library-location-panel">
                          <ul class="list-group" id="libs">
                          </ul>
                        </div>
                      </div>
                    </div><!-- end row -->
                  </div><!-- end container -->
                </div>
              </div>           
            </div>
          </li>
          <li class="tab-header-and-content" role="presentation">
            <a id="helpli" href="#" class="tab-link dynamictabs dynamic-tab-text arrow-access"><span class="fa fa-question fa-3x"></span><span class="dynamic-tab-label"><span class="text-block-display">Resource </span>Guides</span></a>
            <div class="tab-content-bourbon">
              <div class=" dynamic-tab-pane" id="help">    <!-- TAB: HELP -->
                <div class="dynamic-panel-body">
                  <div class="container-fluid">
                    <div class="row"><!-- TAB TITLE -->
                      <div class="col-sm-12">
                        <h3 class="dynamictabs" aria-labelledby="resource guides">Resource Guides</h3>
                        <hr class="hr-orange" role="presentation"/>
                      </div>
                    </div><!-- TAB TITLE -->
                    <div class="row-fluid"><!--begin Resource Guides column -->              
                      <div class="col-sm-6">
                        <h4>Resource Guides:</h4>
                        <ul id="libguidelist" class="nav nav-tabs libguides" role="tablist">
                          <li class="active">
                            <a href="#all" role="tab" data-toggle="tab">All</a>
                          </li>
                          <li>
                            <a href="#popular" role="tab" data-toggle="tab">Popular</a>
                          </li>
                          <li>
                            <a href="#subject" role="tab" data-toggle="tab">Subject</a>
                          </li>
                          <li>
                            <a href="#librarian" role="tab" data-toggle="tab">Librarians</a>
                          </li>
                        </ul>               
                        <div class="tab-content libguides"><!-- Resource Guides Tab panes -->
                          <div class="tab-pane" id="all">
                            <div id="api_box_iid28_bid18829943"></div>
                            <script defer type="text/javascript" src="http://api.libguides.com/api_box.php?iid=28&target=_self&bid=18829943&context=object&format=js&css=0"></script>
                          </div>
                          <div class="tab-pane" id="popular">
                            <div id="api_box_iid28_bid18828737"></div>
                            <script defer type="text/javascript" src="http://api.libguides.com/api_box.php?iid=28&target=_self&bid=18828737&context=object&format=js&css=0"></script>
                          </div>
                          <div class="tab-pane active" id="subject">
                            <ul>
                            <div id="api_subjects_iid28"></div>
                            <script defer type="text/javascript" src="http://api.libguides.com/api_subjects.php?iid=28&target=_self&break=li&incempty=false&context=object&format=js"> </script>
                            </ul>
                          </div>
                          <div class="tab-pane" id="librarian">
                            <ul>
                              <div id="api_users_iid28"></div>
                              <script defer type="text/javascript" src="http://api.libguides.com/api_users.php?iid=28&target=_self&break=li&incempty=false&context=object&format=js"> </script>
                            </ul>
                          </div>
                        </div>
                      </div><!-- end Resource Guides column -->
                      <div class="col-sm-6"><!--begin Search Resource Guides column -->
                        <h4>Search Resource Guides:</h4>
                        <div class="panel panel-default">
                          <div class="panel-heading" role="search"  aria-label="Search resource guides">
                            <form class="form-inline" id="libSearchForm">
                              <div class="form-group">
                                <div class="input-group">
                                  <label for="resource-guide-search-button" class="sr-only">Search Resource Guides</label>
                                  <input id="resource-guide-search-button" type="text" class="form-control input-sm" name="search" maxlength="250" placeholder="Search Guides" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Guides'" />
                                  <input name="type" value="guides" type="hidden" />
                                  <input name="iid" value="28" type="hidden" />
                                  <input name="sortby" value="relevance" type="hidden" />
                                  <input name="break" value="li" type="hidden" />
                                  <input name="target" value="_self" type="hidden" />
                                  <span class="input-group-btn">
                                   <button id="guidesearch" type="submit" class="btn btn-primary btn-sm">Search</button>
                                  </span> 
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="panel-body" id="libsearchpanel">
                            <div>
                              <div id="libGuideSearch">Search results...</div>
                            </div>
                          </div>
                        </div>
                      </div><!--end Search Resource Guides column -->
                    </div>
                  </div><!-- ends container --> 
                </div>   
              </div>
            </div>
          </li>

          <li class="tab-header-and-content" role="presentation">
            <a id="techli" href="#" class="tab-link dynamictabs dynamic-tab-text arrow-access"><span class="fa fa-laptop fa-3x"></span><span class="dynamic-tab-label"><span class="text-block-display">Library </span>Technology</span></a>
            <div class="tab-content-bourbon">
             <div class=" dynamic-tab-pane" id="tech"><!-- TAB: TECH -->
              <div class="dynamic-panel-body">
                <div class="container-fluid"><!-- TAB TITLE -->
                  <div class="row">
                    <div class="col-sm-12">
                      <h3 class="dynamictabs">Library Technology</h3>
                      <hr class="hr-orange"/>
                    </div>
                  </div><!-- END TAB TITLE -->
                  <div class="row-fluid"><!-- begin Computers and Equipment column -->
                    <div class="col-sm-6">
                      <h4>Computers and Equipment</h4>
                      <div class="col-sm-12">
                        <h5>Information about:</h5>
                        <a href="http://www.library.illinois.edu/services/librarycomputing.html">
                        <span style="padding-right: 10px; margin-left: 30px;" class="fa fa-desktop fa-2x fa-fw"></span>Computers</a>
                      </div>
                      <div class="col-sm-12">
                        <a href="http://www.library.illinois.edu/services/librarycomputing.html">
                        <span style="padding-right: 10px; padding-top: 7px; margin-left: 30px;" class="fa fa-print fa-2x fa-fw"></span>Printing</a>
                      </div>
                      <div class="col-sm-12">
                        <a href="http://www.library.illinois.edu/services/librarycomputing.html">
                        <span style="padding-right: 10px; padding-top: 7px; margin-left: 30px;" class="fa fa-files-o fa-2x fa-fw"></span>Scanning/Copying</a>
                        <hr />
                      </div>
                      <div class="col-sm-12">
                        <h5>Media Commons</h5>
                        <p>The <a href="http://www.library.illinois.edu/ugl/mc/">Media Commons</a> at the Undergrad Library includes equipment for: </p>
                      </div>
                      <div class="col-md-6">
                        <a href="http://www.library.illinois.edu/ugl/mc/zones/audioProduction.html">
                        <span style="padding-right: .4em;" class="fa fa-microphone fa-2x fa-fw"></span>Audio production</a>
                      </div>
                      <div class="col-md-6">
                        <a href="http://www.library.illinois.edu/export/ugl/mc/zones/mediaEditing.html">
                        <span style="padding-right: .4em;" class="fa fa-scissors fa-2x fa-fw"></span>Media editing</a>
                      </div>
                      <div class="col-md-6">
                        <a href="http://www.library.illinois.edu/export/ugl/mc/zones/production.html">
                        <span style="padding-right: .4em;" class="fa fa-video-camera fa-2x fa-fw"></span>Video production</a>
                      </div>
                      <div class="col-md-6">
                        <a href="http://www.library.illinois.edu/ugl/mc/zones/mobile.html">
                        <span style="padding-right: .4em;" class="fa fa-mobile fa-2x fa-fw"></span>Mobile prototyping</a>
                      </div>
                      <div class="col-md-6">
                        <a href="http://www.library.illinois.edu/export/ugl/mc/zones/gaming.html">
                        <span style="padding-right: .4em;" class="fa fa-gamepad fa-2x fa-fw"></span>Gaming<a/>
                      </div>
                      <div class="col-md-6">
                        <a href="http://www.library.illinois.edu/ugl/mc/loanable.html">
                        <span style="padding-right: .4em;" class="fa fa-laptop fa-2x fa-fw"></span>Loanable technology</a>
                      </div>                  
                      <div class="col-md-12">
                        <hr />
                        <h5>Scholarly Commons</h5>
                        <p>The <a href="http://www.library.illinois.edu/sc/">Scholarly Commons</a> offers resources, <a href="http://www.library.illinois.edu/it/helpdesk/groupspaces/main306sc.html">software</a>, and expert consultations for data analysis, digitization, copyright, usability, and scholarly communication. They also have <a href="http://www.library.illinois.edu/sc/resources/resources_hardware">hardware</a> available for use on site.</p>
                      </div>             
                    </div><!-- end Computers and Equipment column --><!-- begin Loanable Technology column -->
                    <div class="col-sm-6">
                      <h4>Loanable Technology</h4>
                      <p>Technology and equipment sorted by popularity and currrently available at the following libraries:</p>
                      <ul class="nav nav-tabs libguides" role="tablist">
                        <li class="active"><a href="#uglTech" role="tab" data-toggle="tab">UGL</a></li>
                        <li><a href="#mpalTech" role="tab" data-toggle="tab">MPAL</a></li>
                      </ul><!-- Loanable Technology Tab panes -->
                      <div class="tab-content libguides">
                        <div class="tab-pane active" id="uglTech" role="tabpanel">
                          <div>
                            <ul>
                              <div id="uglTechItem" > </div>
                            </ul>
                          </div>                                    
                        </div>
                        <div class="tab-pane" id="mpalTech" role="tabpanel">
                          <div>
                            <ul>
                              <div id="mpalTechItem">
                                <li>
                                <p>See <a href="http://www.library.illinois.edu/mux/">Music and Performing Arts Library site</a> for details on availability</p>  
                                </li>
                              </div>
                            </ul>
                          </div>
                        </div>
                      </div>
                      </br>
                      <p><a target="_blank" href="http://www.library.illinois.edu/ugl/about/LoanableTechnology/campusequipment.html">Other campus units with loanable technology</a></p>
                    </div><!-- end Loanable Technology column -->                 
                  </div><!-- end fluid row -->
                </div><!-- should be end container-fluid -->
              </div>
              </div><!-- should be end tab pane --> <!-- END TAB: TECH -->
            </div>
          </li>

          <li class="tab-header-and-content" role="presentation">
            <a id="roomresli" href="#" class="tab-link dynamictabs dynamic-tab-text arrow-access"><span class="fa fa-pencil-square-o fa-3x"></span><span class="dynamic-tab-label"><span class="text-block-display">Study </span>Rooms</span></a>
            <div class="tab-content-bourbon">
              <div class="dynamic-tab-pane" id="roomres"><!-- TAB: STUDY ROOMS --> 
                <div class="dynamic-panel-body">
                  <div class="container-fluid"><!-- TAB TITLE -->
                    <div class="row">
                      <div class="col-sm-12">
                        <h3 class="dynamictabs">Study Room Reservation</h3>
                        <hr class="hr-orange"/>
                      </div>
                    </div><!-- END TAB TITLE -->
                    <div class="row-fluid">
                        <!-- begin Loanable Technology column -->
                        <!-- placeholder for any instruction or description content -->
                    </div>    
                    <div class="row"><!--  mobile phone view-->
                      <div class="mobilephonehide">
                        <div class="panel panel-default mobile" >
                          <div class="panel-heading">Reserve the Study Room</div>
                          <div class="panel-body">
                            <p class="">University net ID login is required for the reservation.</p>
                              <p>
                                  <a type="button" class="btn btn-primary btn-lg btn-block" href=" http://uiuc.evanced.info/Dibs" >Make a Reservation</a>
                          </div>
                        </div>
                        <div class="panel panel-default mobile">
                          <div class="panel-heading">Reservation Process</div>
                          <div class="panel-body">
                            <ol class="list-group">
                              <li class="list-group-item">How many people? How long? What date?(2 active reservations, 2 reservations per day)</li>
                              <li class="list-group-item">Pick library location to reserve a room.</li>
                              <li class="list-group-item">Pick the available time slots.(Each slot has 30 min and you can pick 4 maximum, 2 hours)</li>
                              <li class="list-group-item">Pick the room. (It will show room features and the picture)</li>
                              <li class="list-group-item">Confirm the registration. (You will get email confirmation for the registration. Text confirmation is optional)</li>
                            </ol>
                          </div>
                        </div>
                      </div><!-- CLOSING mobile phone view-->
                      <div class="col-md-8">
                        <div id="buildc"><h4>Study Room Location</h4></div>
                      </div>
                      <div class="col-md-4 col-xs-12">
                        <h4>Schedule the room</h4>
                        <div id="calenc"></div>
                        <div class="calc">
                          <div class="calcinitial">Please choose a building location to the left to start the reservation process.</div>
                        </div>
                        <div id="additional-room-reserve-info">
                          <p>
                          <ul>
                              <li>Other places to study on campus: <a href="https://illinispaces.illinois.edu/">IlliniSpaces.</a></li>
                              <li><a href="http://uiuc.libguides.com/roomreserve"> Library Room Reservation Policy and Guidelines</a></li>
                          </ul>
                          </p>
                        </div>
                      </div>   
                    </div><!--closing for row-->
                  </div><!-- should end container -->
                </div>
              </div><!-- should end roomres tab --><!-- END TAB: STUDY ROOMS -->     
            </div>
          </li>
          <li class="tab-header-and-content" role="presentation">
            <a id="newsli" href="#" class="tab-link dynamictabs dynamic-tab-text arrow-access"><span class="fa fa-calendar fa-3x"></span><span class="dynamic-tab-label"><span class="text-block-display">News and</span>Events</span></a>
            <div class="tab-content-bourbon">
              <div class="dynamic-tab-pane" id="news"><!-- TAB: NEWS and EVENTS -->
                <div class="dynamic-panel-body">
                  <div class="container-fluid"><!-- TAB TITLE -->
                    <div class="row">
                      <div class="col-sm-12">
                        <h3 class="dynamictabs">News and Events</h3>
                        <hr class="hr-orange"/>
                      </div>
                    </div><!-- TAB TITLE -->
                    <div class="row-fluid"><!-- begin news column -->
                      <div class="col-sm-6">
                        <h4 class="news">News</h4>
                        <div class="viewall"><a href='http://www.library.illinois.edu/news/' class="btn btn-primary btn-xs">View All News</a></div> 
                        <div class="panel panel-default">
                          <div class="panel-body" id="libnewsli">
                            <ul>
                              <li>
                                <div class="row">
                                  <div id="news_feat_img" class="col-md-6"></div>
                                  <div id="news_feat_cont" class="col-md-6"></div>
                                </div>
                              </li>
                              <li role='presentation' class='divider'></li>
                                <div  id="libnews"></div>
                              <li><a href='http://www.library.illinois.edu/news/'>More Library News...</a></li>
                              </br>
                            </ul>
                          </div>
                        </div>                        
                      </div><!-- end news column --><!-- begin events column -->
                      <div class="col-sm-6">
                        <h4 class="news">Upcoming Events</h4>
                        <div class="viewall"><a href='http://illinois.edu/calendar/list/4092?cal=20141104&skinId=1977' class="btn btn-primary btn-xs">View All Events</a></div>
                        <div class="panel panel-default">
                          <div id="libevents" class="panel-body">
                            <script type='text/javascript' src='http://illinois.edu/calendar/pc/4092/1.js'></script>
                          </div>
                        </div>
                      </div><!-- end events column -->
                    </div>
                  </div>
                </div><!-- END TAB: NEWS and EVENTS --> 
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div><!--closing div from beginning of content include, role="main" -->
