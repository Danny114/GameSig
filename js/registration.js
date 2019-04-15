// Fixed subheader at top
window.onscroll = function() {myFunction(),scrollFunction()};
 var subheader = document.getElementById('subheader');
var sticky = subheader.offsetTop;
 function myFunction() {
  if (window.pageYOffset >= sticky) {
    subheader.classList.add("sticky");
  } else {
    subheader.classList.remove("sticky");
  }
}
 //Cache selectors
var lastId, topMenu = $("#inner_subheader"),
  topMenuHeight = topMenu.outerHeight()
  // All list items
  menuItems = topMenu.find("a"),
  // Anchors corresponding to menu items
  scrollItems = menuItems.map(function(){
    var item = $($(this).attr("href"));
    if (item.length) { return item; }
  });
 // Bind click handler to menu items and perform scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top;
  $('html, body').stop().animate(
    {scrollTop: offsetTop}, 300);
  e.preventDefault();
});
 //Bind to scroll
$(window).scroll(function() {
  //Get container
  var fromTop = $(this).scrollTop() + topMenuHeight;
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";

   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems.parent().removeClass("current").end().filter( '[href="#' + id + '"]' ).parent().addClass( "current" );
   }
});

function scrollFunction() {
   if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
       document.getElementById("myBtn").style.display = "block";
   } else {
       document.getElementById("myBtn").style.display = "none";
   }
}

function topFunction() {
   document.body.scrollTop = 0;
   document.documentElement.scrollTop = 0;
}
