(function() {
  window.onresize = displayWindowSize;
  window.onload = displayWindowSize;

  function displayWindowSize() {
    myWidth = window.innerWidth;
    // your size calculation code here
    if (myWidth < 1250) {
      document.getElementById("navigation").style.display = "block";
    }
    else {
      document.getElementById("navigation").style.display = "none";
    }
  };
})();