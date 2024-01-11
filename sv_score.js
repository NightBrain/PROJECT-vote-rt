function loadXMLDocn1() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("link_wrapper_1").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "server01.php", true);
    xhttp.send();
  }
  setInterval(function(){
    loadXMLDocn1();
    // 1sec
  },1000);

  window.onload = loadXMLDocn1;
// ---------------------------------------------------------------------------
function loadXMLDocn2() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById("link_wrapper_2").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "server02.php", true);
    xhttp.send();
  }
  setInterval(function(){
    loadXMLDocn2();
    // 1sec
  },1000);

  window.onload = loadXMLDocn2;
  // ---------------------------------------------------------------------------
  
  function loadXMLDocn3() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("link_wrapper_3").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "server03.php", true);
    xhttp.send();
  }
  setInterval(function(){
    loadXMLDocn3();
    // 1sec
  },1000);

  window.onload = loadXMLDocn3;
  // ---------------------------------------------------------------------------
  function loadXMLDocn4() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("link_wrapper_4").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "server04.php", true);
    xhttp.send();
  }
  setInterval(function(){
    loadXMLDocn4();
    // 1sec
  },1000);

  window.onload = loadXMLDocn4;
  // ---------------------------------------------------------------------------
  function loadXMLDocn5() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("link_wrapper_n").innerHTML =
        this.responseText;
      }
    };
    xhttp.open("GET", "servernone.php", true);
    xhttp.send();
  }
  setInterval(function(){
    loadXMLDocn5();
    // 1sec
  },1000);

  window.onload = loadXMLDocn5;
  // ---------------------------------------------------------------------------