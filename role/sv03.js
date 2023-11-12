function loadXMLDoc3() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("link_wrapper03").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "server03.php", true);
    xhttp.send();
  }
  setInterval(function(){
    loadXMLDoc3();
    // 1sec
  },1000);

  window.onload = loadXMLDoc3;