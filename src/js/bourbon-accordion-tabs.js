$(document).ready(function () {
//scroll to orange bar if not showing 25% of panel
  function tabScroll(x) {
    var fracs = $(x).next().fracs();
    var vhref = "#" + $(x).attr("id");
    var vHeight = $(vhref + "+div>div").height();
    var vVis = fracs.visible * vHeight;
    if (vVis <= 200) {
      $('html, body').animate({
        scrollTop: $(vhref).offset().top
      }, 1000);
    }   
  }

  if (window.innerWidth > 767) {
    $('.accordion-tabs-minimal').each(function(index) {
      $(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
    });
  }


  $('.accordion-tabs-minimal').on('click', 'li > a.tab-link', function(event) {
    if (!$(this).hasClass('is-active')) {
      event.preventDefault();
      var accordionTabs = $(this).closest('.accordion-tabs-minimal');
      accordionTabs.find('.is-open').removeClass('is-open').hide();

      $(this).next().toggleClass('is-open').toggle();
      accordionTabs.find('.is-active').removeClass('is-active');
      $(this).addClass('is-active');
      tabScroll(this);

      } else {
      event.preventDefault();

      tabScroll(this);

      if (window.innerWidth < 768) {
        var accordionTabs = $(this).closest('.accordion-tabs-minimal');
        accordionTabs.find('.is-open').removeClass('is-open').hide();
        $(this).removeClass('is-active');
      }
    }
  });

  (function () {
    //console.log("hey there");
    var hashVal = location.hash;
    //console.log('before if hashVal = ,',hashVal);
    //console.log('hashVal = ',hashVal);
    //verify there is a hashvalue in URL
    if ( hashVal ) {
      //console.log('there is a hashVal');
      //console.log($( hashVal + '.tab-link' ));
      //verify the hash value exists in .tab-link class
      if ( $( hashVal + '.tab-link' ).length ){
        // console.log($( hashVal + '.tab-link' ));
         //console.log('THIS hashval exists');
        if (!$(hashVal).hasClass('is-active')) {
         // event.preventDefault();
          var accordionTabs = $(hashVal).closest('.accordion-tabs-minimal');
          accordionTabs.find('.is-open').removeClass('is-open').hide();

          $(hashVal).next().toggleClass('is-open').toggle();
          accordionTabs.find('.is-active').removeClass('is-active');
          $(hashVal).addClass('is-active');
          tabScroll(hashVal);

          } else {
          //event.preventDefault();

          tabScroll(hashVal);

          if (window.innerWidth < 768) {
            var accordionTabs = $(hashVal).closest('.accordion-tabs-minimal');
            accordionTabs.find('.is-open').removeClass('is-open').hide();
            $(hashVal).removeClass('is-active');
          }
        }
      }
    }
  })();

});