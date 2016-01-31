// ==== CORE ==== //

// A simple wrapper for all your custom jQuery; everything in this file will be run on every page
;(function($){
  $(function(){
    // Insert jQuery code here!
    /* [FIX MENU] */
    var wrap = $("#wrap-main");
    var header = $("header");
    $(window).on('scroll',function() {
      if ($(window).scrollTop() > 515) {

        wrap.addClass("fix-menu");
      } else {
        wrap.removeClass("fix-menu");
      }
      if ($(window).scrollTop() > 740) {

        header.addClass("fix-menu-bg");
      } else {
        header.removeClass("fix-menu-bg");
      }
    });
    /* [SCROLL2ID] */
    function scroll2id(id){
      $(id+" a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
        highlightSelector: id+" a",
        scrollSpeed:1000,
        offset:150,
        scrollEasing: "easeOutQuint",
        scrollingEasing: "easeOutQuint"
      });

      $("a[rel='next']").click(function(e){
      e.preventDefault();
      var to=$(this).parent().parent("section").next().attr("id");
      $.mPageScroll2id("scrollTo",to);
      });
    }
    scroll2id("#menu-header");
    /* [FASTCLICK] */
    FastClick.attach(document.body);
    /* ------ [ANIMATION] ------ */
    new WOW().init();
    /* ------ [MEDIA QUERY] ------ */
    $(document).ready(function(){
      window.addEventListener('resize', checkSize, false);
    });


    function checkSize(){
      if("matchMedia" in window) { // Détection
       if(window.matchMedia("(min-width:620px)").matches) {
         // Il y a de la place
       } else {
         // Il y en a moins...
         $(window).on('scroll',function() {

           if ($(window).scrollTop() > 600) {

             header.addClass("fix-menu-bg");
           } else {
             header.removeClass("fix-menu-bg");
           }
         });
         $("#site-navigation").mmenu({
             // options
             isMenu: true
          }, {
             // configuration
             clone: true,
             panelNodetype: "section",
          });
          var API = $("#site-navigation").data( "mmenu" );



            $("#mm-site-navigation").click(function() {
              setTimeout(function(){
                API.close();
              }, 800);
            });

          scroll2id("#mm-menu-header");

       }
     }
    }
    checkSize();
    /* [END] */
  });
}(jQuery));
