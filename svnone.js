function loadXMLDoc5() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("link_wrappern").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "servernone.php", true);
    xhttp.send();
  }
  setInterval(function(){
    loadXMLDoc5();
    // 1sec
  },1000);

  window.onload = loadXMLDoc5;