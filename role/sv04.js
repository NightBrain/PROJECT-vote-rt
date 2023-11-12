function loadXMLDoc4() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("link_wrapper04").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "server04.php", true);
    xhttp.send();
  }
  setInterval(function(){
    loadXMLDoc4();
    // 1sec
  },1000);

  window.onload = loadXMLDoc4;