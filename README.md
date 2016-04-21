# Library Gateway

##Project Set-Up
*assuming git and node.js are installed on your machine and proper Stash permissions*
1. Clone from Stash with recursive flag from command line with < __your-netid__ >: 
```
git clone --recursive https://<your-netid>@code.library.illinois.edu/scm/gat/gateway-2.0.git
```
2. Then: `cd gateway-2.0` and `npm install` .  This will download the necessary npm modules listed in package.json
3. Make sure gulp is installed globally: `npm install -g gulp`
4. Edit necessary files in either /src or /shared_content
 
##Gulp Workflow Overview
In general only two tasks will need to be run for development.  The default gulp task, or "gulp" in the command line.  This will be used in development and produces unminified and unversioned css and js files and starts watches on files and reload content when necessary.  Reloading content requires the Chrome Browser extension, livereload.  The other task is 'build:prod' which will produce a /dist build that is ready for deployment with versioned and minified css and js files.  

If individual CSS or javascript files need to be added to this project the gulpfile.js is where they need to be referenced in order for them to be bundled into the /dist build.  Specifically the css_array or the script_array.

See gulpfile.js in the root of this project for details on individual tasks.  

## Dependencies(in progress)

* jQuery 2.1
* jQueryUI 1.11.2 
* Bootstrap-sass
* Underscore 1.6
* Backbone 1.1
* fancybox 2.1
* xdate 0.8
* Respond.js v1.4.2
* bootstrap-accessibility.js 


##Repo Content-Overview

###bower_components
Contains front-end dependencies.  
  1. bourbon. Used in orange tabs in bottom of page.
  2. jquery. 
  3. neat. Used in orange tabs in bottom of page.

###dist
Production code to be copied to server.
  * ####assets
    * #####css
      * ######images
      Contains jquery ui images for datepicker. 
      style.css
* #####fonts
Font-Awesome font files
* #####images
Various images. 
  * ######buildings
  * ######parking

* #####js
get_time.php, script.js
  * ######ga
    Google Analytics

* ####proxies
PHP proxies to skirt AJAX browser same origin policy.

###node_modules
Will not be present in git.  Must run `npm install` from root directory to install.  Contents used for development.

###shared_content
Git Submodule.  Contents are shared with LibGuides and WordPress instances. Tracked in a separate repo in Stash. When updating and committing files in this directory you must make separate commits and remember to update the other repos, LibGuides and Wordpress, so they are pointing to the most recent commit of this repo.  

###src
  * ####css
  css files to be bundled with sass into dist/assets/css/style.css.
  * ####js
  js files to be bundled into dist/assets/js/script.js.
  * ####php
  Content sections of hours, index, and search php files. 
  * ####preprocess
  Header and footer php files marked up with gulp-preprocess directives that include shared_footer.php and shared_header.php files from shared_content submodule during build processes. 
  * ####sass
    * style.scss
    * _bootstrap-custome.scss filters only bootstrap sass components needed for project. 
  * ####static
  contains files and directories that can be copied directly to /dist with no additional processing
    * assets
    * proxies
    * robots.txt

###unmin
  Staging area for build process and area for unminified and ungulfifed css and js files to be stored.  rev-manifest.json is also stored here temporarily for build:prod process.  This file is used in the versioning process of style.css and script.js.  
###bower.json
Manifest for bower dependencies. 
###gulpfile.js
File contains tasks for development process. 
###package.json
Manifest for npm modules required by gulpfile.js
###README.md
This file.