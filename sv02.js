function loadXMLDoc2() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("link_wrapper02").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "server02.php", true);
    xhttp.send();
  }
  setInterval(function(){
    loadXMLDoc2();
    // 1sec
  },1000);

  window.onload = loadXMLDoc2;