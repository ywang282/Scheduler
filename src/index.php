<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <title>University Library, University of Illinois</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="icon" href="./assets/images/favicon.png" type="image/png" />
    <script src="//cdn.jsdelivr.net/g/jquery@2.1"></script>
    <script>window.jQuery || document.write('<script src="./assets/js/jquery-1.10.2.min.js"><\/script>')</script>
    <!--[if lt IE 9]>
    <script src="./assets/js/respond.min.js"></script>
    <script src="./assets/js/html5shiv.js"></script>
    <script src="./assets/js/css_browser_selector.js"></script>
    <![endif]-->
    <!--[if gte IE 8]>
    <link href="./assets/css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->
</head>
<body>
  <!--[if lte IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]--> 
  <div id="outer-wrap">
    <div id="inner-wrap">
      <div class="mobile-overlay" role="button" aria-label="hide mobile navigation"></div>
      <div class="container">
        /* @include ../shared_content/php/shared-global-nav.php */
        <header id="gateway-header" class="" role="banner" aria-label="University of Illinois Library Banner">
          /* @include shared_header.php */
        </header>
        <!-- begin gateway alert  -->
        <!-- 
        To enable a manual alert, copy the commented out HTML and paste it and the bottom of this page, below id=alert-div element
        and update ITEM TITLE GOES HERE and ITEM CONTENT GOES HERE with the relevant information.  ITEM CONTENT is optional, and if not needed.
        You can toggle between class alert-danger for the red warning text and alert-info for the less in-your-face notification light blue
        but also update the toggle <span class="sr-only">Warning:</span> to <span class="sr-only">Information:</span>
        <span class="alert-item-desc">ITEM CONTENT GOES HERE</span> can be removed entirely.
        
        <div id="alert-div-extra">
          <div class="alert alert-danger" role="alert">
            <span class="alert-item-line show">
            <span class="fa fa-exclamation-circle" aria-hidden="true"> </span>
            <span class="sr-only">Warning:</span>
            <span class="alert-item-title">
            <strong>ITEM TITLE GOES HERE: </strong>
            </span>
            <span class="alert-item-desc">ITEM CONTENT GOES HERE</span>
            </span>
          </div>
        </div>
         -->
        <div id="alert-div">
        </div>
        <!-- end gateway alert  -->        
        <!-- begin info section -->
        <!-- contains (manually edited) optional "info" box, less glaring than alerts but still noticeable -->
        <!-- <div class="alert alert-info" role="alert" style="margin-left:1em;margin-right:1em;">
          <span class="alert-item-title">
          <strong>Bronze Tablet Viewing This Weekend</strong>
          </span>
          <span class="alert-item-desc">The Main Library first floor corridor is open on Commencement Weekend, May 16 and May 17, from 1pm - 4pm so students and parents can view the <a href="http://imagesearchnew.library.illinois.edu/cdm/landingpage/collection/bronze" class="alert-link">Bronze Tablets</a>.</span>
        </div> -->
        <!-- end info section -->

        <!-- begin main content box with search/chat -->
        <!--container and row that are closed at end of dynamic.php to allow for proper aria landmark role=main application-->
        <div role="main" aria-label="main of the site including libray catalogs, ask a librarian, library hours and location, room servervation, news and event">
          <div class="row">
            <div class="col-md-9 mobile-col-negative-padding">
              <div id="easysearch-wrapper">
                <h2 class="sr-only">Easy Search(library catalog searh)</h2>
                <!-- Nav tabs -->
                <div class="hidden-xs" id="search-for-text">Search for</div>
                <ul class="nav nav-tabs " role="tablist" id="easysearch-tab-list" aria-label="easy search">
                  <li class="active"><a class="easysearch_tab_font" href="#everythingTab" role="tab" data-toggle="tab" aria-label="everything">Everything</a></li>
                  <li><a class="easysearch_tab_font" href="#booksTab" role="tab" data-toggle="tab" aria-label="books">Books</a></li>
                  <li><a class="easysearch_tab_font" href="#articlesTab" role="tab" data-toggle="tab" aria-label="articles">Articles</a></li>
                  <li><a class="easysearch_tab_font" href="#journalsTab" role="tab" data-toggle="tab" aria-label="journals">Journals</a></li>
                  <li><a class="easysearch_tab_font" href="#mediaTab" role="tab" data-toggle="tab" aria-label="media">Media</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane active" id="everythingTab">
                    <!-- begin easy search content-->
                      <div class="panel-body" id="search-panel-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <h3><span class="fa fa-search"></span> Easy Search</h3>
                          </div>
                          <div class="col-sm-6">  
                            <a class="pull-right hidden-xs" href="http://search.grainger.illinois.edu/searchaid2/searchassist.asp">Advanced Search</a>
                          </div>
                        </div>
                        <div class="row">
                          <form class="form-inline" role="form" method="get"
                              action="http://search.grainger.uiuc.edu/discovery/splitsearch.asp"
                              id="search_everything">
                              <label for="keyword" class="sr-only">Enter search terms</label>
                              <input type="text" class="form-control easy-search-text-input" id="keyword" 
                                  name="searcharg" maxlength="255" placeholder="Enter search terms" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter search terms'"  aria-required="true"/>
                              <label for="dropdown" class="sr-only">Subject Selection</label>
                              <select id="dropdown" class="form-control easy-search-select" name="selection" aria-required="true" >
                                <option value="gen">Multi-Subject Resources</option>
                                <option value="news">Current News Sources</option>
                                <option value="ArHu">Arts &amp; Humanities</option>
                                <option value="Bus">Business</option>
                                <option value="Educ">Education</option>
                                <option value="EngRes">Engineering</option>
                                <option value="health">Health Sciences</option>
                                <option value="images">Images</option>
                                <option value="ias">International &amp; Area Studies</option>
                                <option value="LIS">Library &amp; Information Science</option>
                                <option value="lifesci">Life Sciences</option>
                                <option value="music">Music &amp; Performing Arts</option>
                                <option value="Physsci">Physical Sciences/Math</option>
                                <option value="Socsci">Social Sciences</option>  
                                <option value="theses">Dissertations and Theses</option> 
                                <option value="datasets">Datasets</option> 
                                <option value="ref">Dictionaries, Encyclopedias, etc.</option>                             
                              </select>
                              <input type="hidden" alt="submit" value="keyword" name="typeofsearch" class="es-bento">
                              <input type="hidden" alt="submit" value="direct" name="s2" >
                              <input type="hidden" alt="submit" value="gateway" name="project" >
                              <input type="hidden" alt="submit" value="opac" name="selection" class="es-classic" disabled>
                              <input type="hidden" alt="submit" value="web" name="selection" class="es-classic" disabled>
                              <label class="sr-only" for="easy-search-all-full">Search</label>
                              <input class="btn btn-primary" type="submit" alt="submit" value="Search" name="searchbutton">

                          </form>
                        </div>
                        <div class="row hidden-xs">
                          <div class="col-sm-6">
                            <p>Search by title, author, or keyword in a broad selection of sources. 
                              <a href="http://search.grainger.illinois.edu/searchaid2/what_searching.htm"> What am I searching?</a></p>
                          </div>
                        </div>
                      </div>
                    <!-- end easy search content-->
                  </div>
                  <div class="tab-pane" id="booksTab">
                    <!--begin books panel-->
                    <div class="panel-body" id="search-panel-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <h3><span class="fa fa-search"></span> Easy Search</h3>
                          </div>
                          <div class="col-sm-6">  
                            <a class="pull-right hidden-xs" href="http://search.grainger.illinois.edu/searchaid2/searchassist.asp">Advanced Search</a>
                          </div>
                        </div>
                      <div class="row">
                        <form class="form-inline" id="search_books" action="http://search.grainger.illinois.edu/discovery/splitsearch.asp" method="get">
                          <label class="sr-only" for="Search_Argument">Enter Search Terms</label>
                          <input id="Search_Argument" class="form-control easy-search-text-input" type="text" placeholder="Enter search terms" maxlength="255" size="25" name="searcharg" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter search terms'">
                          <input type="hidden" alt="submit" value="books" name="selection">
                          <label class="sr-only" for="booksSearch_Code">Book Search</label>
                          <select id="booksSearch_Code" class="form-control" name="typeofsearch" aria-required="true">
                            <option value="keyword">Keyword</option>
                            <option value="tiwords">Title words</option>
                            <option value="author">Author</option>
                          </select>
                          <input type="submit" class="btn btn-primary" alt="submit" value="Search" name="searchbutton">
                        </form>
                      </div>
                      <div class="row hidden-xs">
                        <div class="col-sm-6">
                          <p>Find books by keyword, title, or author. <a class="display-block" href="http://search.grainger.illinois.edu/searchaid2/what_searching.htm">What am I searching?</a></p>
                        </div>
                      </div>
                    </div>
                   <!--end books panel-->
                  </div>
                  <div class="tab-pane" id="articlesTab">
                    <!--begin articles panel-->
                     <div class="panel-body" id="search-panel-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <h3><span class="fa fa-search"></span> Easy Search</h3>
                          </div>
                          <div class="col-sm-6">  
                            <a class="pull-right hidden-xs" href="http://search.grainger.illinois.edu/searchaid2/searchassist.asp">Advanced Search</a>
                          </div>
                        </div>
                      <div class="row">   
                        <form id="search_articles" class="form-inline" action="http://search.grainger.illinois.edu/discovery/splitsearch.asp" method="get">
                          <label for="artclSubject" class="sr-only">article</label>
                          <input id="artclSubject" class="form-control easy-search-text-input"  type="text" placeholder="Enter article subject"  maxlength="255" size="25" name="searcharg" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter article subject'">
                          <input class="es-articles-bento" type="hidden" alt="submit" value="keyword" name="typeofsearch">
                          <input class="es-articles-classic" type="hidden" alt="submit" value="direct" name="s2" disabled>
                          <input class="es-articles-classic" type="hidden" alt="submit" value="gatewayjnlarticle" name="project" disabled>
                            <label for="selection2" class="sr-only">choose the subject</label>
                            <select id="selection2" class="form-control"  name="selection" aria-required="true">
                              <option value="articles">Multi-Subject Resources</option>
                              <option value="news">Current News Sources</option>
                              <option value="ArHu">Arts &amp; Humanities</option>
                              <option value="Bus">Business</option>
                              <option value="Educ">Education</option>
                              <option value="EngRes">Engineering</option>
                              <option value="health">Health Sciences</option>
                              <option value="ias">International &amp; Area Studies</option>
                              <option value="LIS">Library &amp; Information Science</option>
                              <option value="lifesci">Life Sciences</option>
                              <option value="music">Music &amp; Performing Arts</option>
                              <option value="Physsci">Physical Sciences/Math</option>
                              <option value="Socsci">Social Sciences</option>
                            </select>
                            <input type="submit" class="btn btn-primary" alt="submit" value="Search" name="searchbutton">
                        </form>
                      </div>
                      <div class="row hidden-xs">
                        <div class="col-sm-6">
                          <p>Search for articles on a specific topic in magazines and journals. <a href="http://search.grainger.illinois.edu/searchaid2/what_searching.htm">What am I searching?</a></p>
                        </div>
                      </div>
                    </div>
                    <!--begin articles panel-->
                  </div>
                  <!--begin journals panel-->
                    <div class="tab-pane" id="journalsTab">
                     <div class="panel-body" id="search-panel-body">
                        <div class="row">
                          <div class="col-sm-6">
                            <h3><span class="fa fa-search"></span> Easy Search</h3>
                          </div>
                          <div class="col-sm-6">  
                            <a class="pull-right hidden-xs" href="http://search.grainger.illinois.edu/linker/">Advanced Search</a>
                          </div>
                        </div>
                      <div class="row">   
                        <form class="form-inline"  id="search_journals" action="http://search.grainger.illinois.edu/linker/resolve88.asp" method="get">
                          <label for="jnltitle" class="sr-only">Journal Title</label>
                          <input id="jnltitle" class="form-control easy-search-text-input es-text-no-select"  type="text" placeholder="Enter journal title" maxlength="255" size="25" name="jnltitle" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter journal title'" aria-required="true">
                          <input type="hidden" alt="submit" value="gatewayjnltitle" name="project">
                          <input type="submit" class="btn btn-primary" alt="submit" value="Search" name="searchbutton">
                        </form>
                      </div>
                      <div class="row hidden-xs">
                        <div class="col-sm-6">
                         <p>Search for specific journal titles both in print and electronic format. <a href="http://search.grainger.illinois.edu/searchaid2/what_searching.htm">What am I searching?</a></p>
                        </div>
                      </div>
                     </div>
                    </div>
                  <!--end journals panel-->
                  <!--begin media panel content-->
                  <div class="tab-pane" id="mediaTab">
                    <div class="panel-body" id="search-panel-body">
                        <div class="row">
                          <div class="col-sm-12">
                            <h3><span class="fa fa-search"></span> Easy Search</h3>
                          </div>
                        </div>
                      <div class="row">
                        <form id="search_media" class="form-inline" action="http://vufind.carli.illinois.edu/vf-uiu/Search/Home?" method="get">
                          <label class="sr-only" for="vumedia">Media Search</label>
                          <input id="vuMedia" class="form-control easy-search-text-input es-text-no-select"  type="text" placeholder="Enter media title" maxlength="255" size="15" name="lookfor[]" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter media title'" aria-required="true">
                          <input type="hidden" name="type[]" value="all">
                          <input type="hidden" name="bool[]" value="AND">
                          <input type="hidden" name="specDate"value="YYYY">
                          <input type="hidden" name="version"value="any">
                          <input type="hidden" name="format[]"value="Music Recording">
                          <input type="hidden" name="format[]"value="Spoken Word Recording">
                          <input type="hidden" name="format[]"value="Audio CD">
                          <input type="hidden" name="format[]"value="Audiocassette">
                          <input type="hidden" name="format[]"value="Vinyl LP">
                          <input type="hidden" name="format[]"value="Movie">
                          <input type="hidden" name="format[]"value="Blu-ray">
                          <input type="hidden" name="format[]"value="DVD">
                          <input type="hidden" name="format[]"value="VHS">
                          <input type="hidden" name="format[]"value="Film">
                          <input type="hidden" name="format[]"value="Software / Computer File">
                          <input type="hidden" name="gPub"value="">
                          <input type="hidden" name="start_over"value="1">
                          <input type="hidden" name="submit"value="Find">
                          <input type="submit" class="btn btn-primary" alt="submit" value="Search" name="searchbutton">
                        </form>
                      </div>
                      <div class="row hidden-xs">
                        <div class="col-sm-6">
                          <p>Find CDs, DVDs, videocassettes, and games for computers and game consoles.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--end media panel content-->              
                </div>
              </div> 
              <div id="resource-dropdowns" class="navbar-options" role="navigation" aria-label="links to the library catalog, course reserve, journal database, reference collection">
                <div class="container-fluid">
                  <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="resource-dd-line">Catalogs<b class="caret"></b></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="http://vufind.carli.illinois.edu/vf-uiu/">U of I Catalog</a></li>
                        <li><a href="https://vufind.carli.illinois.edu/all/vf/">I-Share Catalog</a></li>
                        <li><a href="http://sfx.carli.illinois.edu/sfxuiu?rft.object_id=63750000000000325">WorldCat</a></li>
                        <li><a href="http://www.library.illinois.edu/catalog/">All Catalogs</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="resource-dd-line">Course Reserves<b class="caret"></b></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="https://i-share.carli.illinois.edu/uiu/cgi-bin/Pwebrecon.cgi?DB=local&PAGE=rbSearch">All Reserves (Print, Media, Electronic)</a></li>
                        <li><a href="https://reserves.library.illinois.edu/ares/ares.dll">Electronic Reserves Only</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation" class="dropdown-header">Reserves Help</li>
                        <li><a href="http://www.library.illinois.edu/ugl/howdoi/reserves.html">Searching Reserves</a></li>
                        <li><a href="http://guides.library.illinois.edu/reserves">Guide to Electronic Reserves</a></li>
                        <li><a href="http://www.library.illinois.edu/cmservices/reserve.html">Placing Physical Materials on Reserve</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Databases <span class="resource-dd-wrap">and Journals<b class="caret"></b></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="http://search.grainger.uiuc.edu/linker/">Journal and Article Locator</a></li>
                        <li><a href="http://openurl.library.uiuc.edu/sfxlcl3/az">Online Journals &amp; Databases</a></li>
                        <li><a href="http://guides.library.illinois.edu/az.php">Databases by Subject</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reference <span class="resource-dd-wrap">Resources<b class="caret"></b></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="http://www.library.illinois.edu/eref/">Online Reference Collection</a></li>
                        <li role="presentation" class="divider"></li>
                        <li><a href="http://www.library.illinois.edu/eref/formats/biography.html">Biography</a></li>
                        <li><a href="http://www.library.illinois.edu/eref/formats/bookreviews.html">Book Reviews</a></li>
                        <li><a href="http://www.library.illinois.edu/eref/formats/dictionaries.html">Dictionaries</a></li>
                        <li><a href="http://www.library.illinois.edu/eref/formats/encyclopedias.html ">Encyclopedias</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Specialized <span class="resource-dd-wrap">Resources<b class="caret"></b></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="https://ideals.illinois.edu/">IDEALS</a></li>
                        <li><a href="http://www.library.illinois.edu/eref/formats/dissertations.html">Dissertations</a></li>
                        <li><a href="http://www.library.illinois.edu/doc/">Government Documents</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>         
            </div>
            <div class="col-md-3 light-area hidden-xs" id="ask-lib-col">
              <div id="ask-lib-collapse">
                <div class="ask-lib-box">
                <div id="chatbox" class="span6">
                  <iframe title="Ask A Librarian" id="iwonder_client" height="440px" width="100%" frameborder="0" src=""></iframe>
                  <script type="text/javascript">var iwonder_css="https://www-s2.library.illinois.edu/css/iwonder/homepage.css"</script>
                  <script src="http://chat.library.illinois.edu/widget/scripts/iwonder_client.js" type="text/javascript"></script>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end main content box with search/chat -->
          <!-- begin dynamic content tabs -->
            <div class="row">
              <div class="col-md-12 light-area mobile-col-negative-padding">
                <div id="dynamictabs">
                  <ul class="accordion-tabs-minimal dynamictabs" role="tablist">
                    <li class="tab-header-and-content" role="presentation">
                      <a id="hoursloc" href="#" class="tab-link dynamictabs dynamic-tab-text arrow-access"><span class="fa fa-clock-o fa-3x"></span> <span class="dynamic-tab-label"><span class="text-block">Libraries </span>& Hours</span></a>
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
                                          <input style="width:100%;" type="text" class="form-control" id="search-field" placeholder="Filter libraries by name" aria-required="false"/>
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
                      <a id="helpli" href="#" class="tab-link dynamictabs dynamic-tab-text arrow-access"><span class="fa fa-question fa-3x"></span><span class="dynamic-tab-label"><span class="text-block">Library </span>Guides</span></a>
                      <div class="tab-content-bourbon">
                        <div class=" dynamic-tab-pane" id="help">    <!-- TAB: HELP -->
                          <div class="dynamic-panel-body">
                            <div class="container-fluid">
                              <div class="row"><!-- TAB TITLE -->
                                <div class="col-sm-12">
                                  <h3 class="dynamictabs" aria-labelledby="resource guides">Library Guides</h3>
                                  <hr class="hr-orange" role="presentation"/>
                                </div>
                              </div><!-- TAB TITLE -->
                              <div class="row-fluid"><!--begin Resource Guides column -->              
                                <div class="col-sm-6">
                                  <h4>Library Guides:</h4>
                                  <ul id="libguidelist" class="nav nav-tabs libguides" role="tablist">

                                    <li class="active">
                                      <a href="#subject" role="tab" data-toggle="tab">By Subject</a>
                                    </li>
                                    <li>
                                      <a href="#libguide-type" role="tab" data-toggle="tab">By Type</a>
                                    </li>
                                    <li>
                                      <a href="#librarian" role="tab" data-toggle="tab">By Librarian or Library</a>
                                    </li>
                                  </ul>               
                                  <div class="tab-content libguides"><!-- Resource Guides Tab panes -->
                                    <div class="tab-pane active padding-all" id="subject">
                                      <script>
                                      springshare_widget_config_1439931085461 = { path: 'subjects' };
                                      </script>
                                      <div id="s-lg-widget-1439931085461"></div>
                                      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://lgapi.libapps.com/widgets.php?site_id=31&widget_type=4&load_type=2&widget_embed_type=1&output_format=1&list_format=1&drop_text=Select+a+Subject...&sort_type=0&widget_title=Subject+List&widget_height=250&widget_width=100%25&widget_link_color=2954d1&guide_published=2&show_guides=3&window_target=1&config_id=1439931085461";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","s-lg-widget-script-1439931085461");</script>
                                    </div>

                                    <div class="tab-pane padding-all" id="libguide-type">
                                      <ul>
                                        <li><a href="http://illinois.libguides.com/guides/course">Course Guides</a>
                                          <p>Guides specifically designed for your class.</p>
                                        </li>
                                        <li><a href="http://illinois.libguides.com/guides/subject-topic">Subject/Topic Guides</a>
                                          <p>Guides that help you get started on a particular research subject or topic. </p>
                                        </li>
                                        <li><a href="http://illinois.libguides.com/guides/howto">How To Guides</a>
                                          <p>Guides on how to use library tools and find specific kinds of materials.</p>
                                        </li>
                                      </ul>
                                    </div>                          

                                    <div class="tab-pane padding-all" id="librarian">
                                      <script>
                                      springshare_widget_config_1439934280789 = { path: 'accounts' };
                                      </script>
                                      <div id="s-lg-widget-1439934280789"></div>
                                      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://lgapi.libapps.com/widgets.php?site_id=31&widget_type=5&load_type=2&widget_embed_type=1&output_format=1&list_format=1&drop_text=Select+a+User...&sort_type=0&widget_title=User+List&widget_height=250&widget_width=100%25&widget_link_color=2954d1&guide_published=2&window_target=1&config_id=1439934280789";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","s-lg-widget-script-1439934280789");</script>
                                    </div>
                                  </div>
                                </div><!-- end Resource Guides column -->
                                <div class="col-sm-6"><!--begin Search Resource Guides column -->
                                  <h4>Search Library Guides:</h4>
                                  <div class="panel panel-default libguides">
                                    <div class="panel-heading" role="search"  aria-label="Search resource guides">
                                      <form class="form-inline" id="libSearchForm">
                                        <div class="form-group">
                                          <div class="input-group">
                                            <label for="resource-guide-search-button" class="sr-only">Search Resource Guides</label>
                                            <input id="resource-guide-search-button" type="text" class="form-control input-sm" name="search_terms" maxlength="250" placeholder="Search Guides" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Guides'" />
                                            <input name="config_id" value="1440017390788" type="hidden"  />
                                            <input name="drop_text" value="Select++Guide..." type="hidden"  />
                                            <input name="enable_description" value="0" type="hidden"  />
                                            <input name="enable_group_search_limit" value="0" type="hidden"  />
                                            <input name="enable_more_results" value="1" type="hidden"  />
                                            <input name="enable_subject_search_limit" value="0" type="hidden"  />
                                            <input name="list_format" value="1" type="hidden"  />
                                            <input name="load_type" value="2" type="hidden"  />
                                            <input name="num_results" value="10" type="hidden"  />
                                            <input name="output_format" value="1" type="hidden"  />
                                            <input name="search_match" value="2" type="hidden"  />
                                            <input name="site_id" value="31" type="hidden"  />
                                            <input name="sort_by" value="relevance" type="hidden"  />
                                            <input name="widget_embed_type" value="2" type="hidden"  />
                                            <input name="widget_type" value="1" type="hidden"  />
                                            <input name="window_target" value="2" type="hidden"  />
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
                      <a id="techli" href="#" class="tab-link dynamictabs dynamic-tab-text arrow-access"><span class="fa fa-laptop fa-3x"></span><span class="dynamic-tab-label"><span class="text-block">Library </span>Technology</span></a>
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
                                  <a href="http://www.library.illinois.edu/ugl/mc/services.html">
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
                                  <li class="active"><a href="#uglTech" role="tab" data-toggle="tab">Undergraduate Library</a></li>
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
                              </div><!-- end Loanable Technology column -->                 
                            </div><!-- end fluid row -->
                          </div><!-- should be end container-fluid -->
                        </div>
                        </div><!-- should be end tab pane --> <!-- END TAB: TECH -->
                      </div>
                    </li>

                    <!-- TAB: STUDY ROOMS -->
                      <li class="tab-header-and-content" role="presentation">
                          <a id="roomresli" href="#" class="tab-link dynamictabs dynamic-tab-text arrow-access"><span class="fa fa-pencil-square-o fa-3x"></span><span class="dynamic-tab-label"><span class="text-block">Study </span>Rooms</span></a>
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

                                          <div class="row">

                          <div class="col-md-12">
                            <div id="buildc"><h4>Study Room Location</h4></div>


                          </div>
                          <div class="col-md-4 col-xs-12" style="display: none;">
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
                        </div>
                        <!--closing for row-->






                      </a><!-- should end container -->
                    </div><!-- should end roomres tab -->
                    <!-- END TAB: STUDY ROOMS -->

                </div>
                    </li>
                    <li class="tab-header-and-content" role="presentation">
                      <a id="newsli" href="#" class="tab-link dynamictabs dynamic-tab-text arrow-access"><span class="fa fa-calendar fa-3x"></span><span class="dynamic-tab-label"><span class="text-block">News &</span>Events</span></a>
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
          <!-- end dynamic content tabs -->
          <!-- begin footer and external JS resources -->
          <footer role="contentinfo"> 
            /* @include shared_footer.php */
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
  <script type="text/javascript" src="./assets/js/script.js"></script>
  <script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-55158287-1', 'auto');
    ga('send', 'pageview');
  </script>

  <!--  Begin Campus Emergency Alert Script - DO NOT REMOVE -->
  <script type="text/javascript" src="https://emergency.webservices.illinois.edu/illinois.js"></script>
  <!--  End Campus Emergency Alert Script -->

  <script src="./assets/js/ga/gaelt.js" type="text/javascript"></script>
  <script type="text/javascript">
    add_GA_Events(window.location.host);
  </script>
          <!-- end footer and external JS resources -->
</html>