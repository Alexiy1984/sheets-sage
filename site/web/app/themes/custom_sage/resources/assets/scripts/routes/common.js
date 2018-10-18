export default {
  init() {
   // JavaScript to be fired on all pages
    function listSearch() {
      var input, filter, ul, li, a, i;
      input = document.getElementById("ListInput");
      filter = input.value.toUpperCase();
      ul = document.getElementById("scrolled-list");
      li = ul.getElementsByTagName("li");
      for (i = 0; i < li.length; i++) {
          a = li[i].getElementsByTagName("a")[0];
          if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
          } else {
              li[i].style.display = "none";
          }
      }
    }
    $( '#ListInput' ).on( 'keyup', function() {
      listSearch();
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
