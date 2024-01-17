
// ----------------------------------------------------------------------------------
function loadXMLDoc16() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "../noti.php", true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc16();
  // 1sec
},1000);

window.onload = loadXMLDoc16;
  // ----------------------------------------------------------------------------------
  function loadXMLDoc18() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("link_wrapper_text").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "../noti/text.php", true);
    xhttp.send();
  }
  setInterval(function(){
    loadXMLDoc18();
    // 1sec
  },1000);
  
  window.onload = loadXMLDoc18;
