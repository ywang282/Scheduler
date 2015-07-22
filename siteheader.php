<body>
  <!--[if lte IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]--> 
  <div id="outer-wrap">
    <div id="inner-wrap">
      <div class="mobile-overlay" role="button" aria-label="hide mobile navigation"></div>
      <div class="container">
        <header class="row" role="banner" aria-label="University of Illinois Library Banner">
          <div class="col-sm-6 col-xs-10">
            <h1 class="sr-only">University Library, University of Illinois at Urbana-Champaign</h1>
            <a href="http://library.illinois.edu">
              <img alt="University of Illinois libary" class="img-responsive hidden-xs" src="./assets/university_libraries_wordmark_with_imark_reverse.png">
              <img alt="University of Illinois libary" id="mobile-header-img" class="img-responsive visible-xs" src="./assets/university_libraries_wordmark_with_imark_short.png">
            </a>  
          </div>
          <div class="col-xs-2 visible-xs">
            <a id="mobile-canvas-button" class="pull-right" href="javascript:void(0)">
              <i class="fa fa-bars"><span class="sr-only">Site Navigation Menu</span> </i>
            </a>
          </div>
          <div class="col-sm-6 col-xs-12 site-utilities">
            <form id="sitesearch" class="search form-inline pull-right hidden-xs" method="get" action="search.php" role="search" aria-label="Search Library Webpages">
              <div class="input-group">
                <input id="searchQuery" class="form-control input-sm" maxlength="1000" size="25" name="q" placeholder="Search Library Webpages" type="text" aria-required="true" aria-label="Enter key words to search library web pages.  Press enter to submit.">
                <label class="sr-only" for="searchQuery">Search Library Webpages</label>
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default btn-sm">
                    <span class="fa fa-search"></span>
                    <span class="sr-only">Search Library Webpages</span>
                  </button>
                </div>
              </div>
              <input name="hl" value="en" type="hidden" />
              <input name="safe" value="off" type="hidden" />
              <input name="filter" value="0" type="hidden" />
              <a id="myaccount" class="btn btn-default btn-sm dark-button" href="https://vufind.carli.illinois.edu/vf-uiu/MyResearch/Home"><span class="fa fa-user" aria-labelledby="my account"></span> My Account</a>
            </form>
        		<div id="site-header-controls-small" class="text-center hidden-md hidden-lg hidden-sm">
        			<div class="btn-group btn-group-xs">
        				<a type="button" class="btn btn-default site-header-control-group dark-button" href="https://vufind.carli.illinois.edu/vf-uiu/MyResearch/Home">My Account</a>
        				<a class="btn btn-default site-header-control-group dark-button" role="widget" onclick="open('http://www.library.illinois.edu/iwonder/index.php', 'chat', 'width=400,height=440,resizable=yes');return false;" href="http://www.library.illinois.edu/iwonder" target="_blank">Ask A Librarian</a>
        				<a class="btn btn-default site-header-control-group dark-button" data-toggle="collapse" data-parent="#site-header-controls-small" href="#site_search_collapse_mobile">Site Search</a>
        			</div>
        			<div id="site_search_collapse_mobile" class="collapse site-header-control-group">
          			<form id="sitesearch" class="search form-inline" method="get" action="search.php" role="search">
          				<div class="form-group">
          					<input name="hl" value="en" type="hidden" />
          					<input name="safe" value="off" type="hidden" />
          					<input name="filter" value="0" type="hidden" />
          					<input id="searchQuery_mobile" class="form-control input-sm" maxlength="1000" size="25" name="q" placeholder="Search Library Webpages" type="text"  aria-required="true" aria-label="Enter key words to search library web pages.  Press enter to submit."/>
          					<label class="sr-only" for="searchQuery_mobile">Site Search</label>
          				</div>
          			</form>
        			</div>
            </div>
          </div>
        </header>