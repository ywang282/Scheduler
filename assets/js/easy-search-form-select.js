//script targeting everything easy search tab on gateway
//when any option in dropdown other than multi-subject is 
//chosen then classic ES form action and required inputs
//are used, otherwise 
//changing form action url on changes to select
$( '#dropdown' ).change(function(){
  if ( $( '#dropdown' ).val() == "gen" ) {
    $( '#search_everything' ).attr( 'action', 'http://search.grainger.uiuc.edu/discovery/splitsearch.asp');
    $( '#keyword' ).attr( 'name', 'searcharg' );
    $( '#search_everything .es-classic' ).prop( 'disabled', true);
    $( '#search_everything .es-bento' ).prop( 'disabled', false);
  } else if ( $( '#dropdown' ).val() == "images" || $( '#dropdown' ).val() == "datasets" || $( '#dropdown' ).val() == "theses" || $( '#dropdown' ).val() == "news" ) {
    $( '#search_everything' ).attr( 'action', 'http://search.grainger.illinois.edu/searchaid2/saresultsug.asp');
    $( '#search_everything .es-classic' ).prop( 'disabled', true);
    $( '#search_everything .es-bento' ).prop( 'disabled', true);
    $( '#keyword' ).attr( 'name', 'keyword' );
  } else {
    $( '#search_everything' ).attr( 'action', 'http://search.grainger.illinois.edu/searchaid2/saresultsug.asp');
    $( '#keyword' ).attr( 'name', 'keyword' );
    $( '#search_everything .es-bento' ).prop( 'disabled', true);
    $( '#search_everything .es-classic' ).prop( 'disabled', false);
  }
});

// similar to script above but for articles tab changing the form action
// to bento or classic versions of easy search depending on option selected
$( '#selection2' ).change(function(){
  if ( $( '#selection2' ).val() == "articles" ) {
    $( '#search_articles' ).attr( 'action', 'http://search.grainger.illinois.edu/discovery/splitsearch.asp');
    $( '#artclSubject' ).attr( 'name', 'searcharg' );
    $( '#search_articles .es-articles-classic' ).prop( 'disabled', true);
    $( '#search_articles .es-articles-bento' ).prop( 'disabled', false);
  } else {
    $( '#search_articles' ).attr( 'action', 'http://search.grainger.illinois.edu/searchaid2/saresultsug.asp');
    $( '#artclSubject' ).attr( 'name', 'keyword' );
    $( '#search_articles .es-articles-bento' ).prop( 'disabled', true);
    $( '#search_articles .es-articles-classic' ).prop( 'disabled', false);
  }
});