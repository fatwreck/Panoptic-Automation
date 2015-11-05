$(document).ready(function() {  
  
    // EMAIL CLOAKING
    $(".emailCloak").each(function(){
      var ats, dots, address, i, foundDots;
      ats = [ ' at ', ' (at) ', ' [at] ' ];
      dots = [ ' dot ', ' (dot) ', ' [dot] ' ];
      address = $(this).html();
      for ( i = 0; i < ats.length; i++ ) {
          address = address.replace(ats[i], '@');
      }
      for ( i = 0; i < dots.length; i++ ) {
          foundDots = [];
          foundDots = address.split(dots[i]);
          for(var j=1; j<foundDots.length; j++) {
              address = address.replace(dots[i], '.');
          }
      }
      $(this).html('<a href="mailto:' + address + '">' + address + '</a>');
    });
    
    // GET URL
    var newURL = window.location.pathname;
    console.log (newURL);
    
    if (newURL === 'services.php') {
        document.getElementById('bgImg').className = 'navigation-section' + newURL;
    }
    
    // ACTIVE CLASS ON NAV
//    $(function() {
//         var pgurl = window.location.href.substr(window.location.href
//    .lastIndexOf("/")+1);
//         $("#nav ul li a").each(function(){
//              if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
//              $(this).addClass("active");
//         })
//    });
    $(function () {
        var url = window.location.pathname; //sets the variable "url" to the pathname of the current window
        var activePage = url.substring(url.lastIndexOf('/') + 1); //sets the variable "activePage" as the substring after the last "/" in the "url" variable
        $('.top-bar-section ul.main-nav li a').each(function () { //looks in each link item within the primary-nav list
            var linkPage = this.href.substring(this.href.lastIndexOf('/') + 1); //sets the variable "linkPage" as the substring of the url path in each &lt;a&gt;

            if (activePage == linkPage) { //compares the path of the current window to the path of the linked page in the nav item
                $(this).parent().addClass('active'); //if the above is true, add the "active" class to the parent of the &lt;a&gt; which is the &lt;li&gt; in the nav list
            }
        });
    })
});