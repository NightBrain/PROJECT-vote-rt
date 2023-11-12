function loadXMLDoc1() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("link_wrapper01").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "server01.php", true);
    xhttp.send();
  }
  setInterval(function(){
    loadXMLDoc1();
    // 1sec
  },1000);

  window.onload = loadXMLDoc1;