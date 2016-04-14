//this code alters default beahvior of bootstrap accessibility plugin
//for mouse interactions.  on click of top level nav menu item
//focus is moved to first subitem.  default boostrap accessibility plugin
//behavior has this focus remain even when other items receive mouseOver
//which results in two items being highlighted which is an undesired
//visual effect. 

$( '#ui-lib-global-menu ul ul a' ).on( 'mouseover', function(e){
  $(this).focus();
});