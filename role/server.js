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
// ----------------------------------------------------------------------------------
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
// ----------------------------------------------------------------------------------
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
// ----------------------------------------------------------------------------------
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
// ----------------------------------------------------------------------------------
function loadXMLDoc5() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "noti.php", true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc5();
  // 1sec
},1000);

window.onload = loadXMLDoc5;
  // ----------------------------------------------------------------------------------
function loadXMLDoc6() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper05").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "serversum.php", true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc6();
  // 1sec
},1000);

window.onload = loadXMLDoc6;
  // ----------------------------------------------------------------------------------
function loadXMLDoc7() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper_11").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "../server01.php", true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc7();
  // 1sec
},1000);

window.onload = loadXMLDoc7;
  // ----------------------------------------------------------------------------------
function loadXMLDoc8() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper_22").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "../server02.php", true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc8();
  // 1sec
},1000);

window.onload = loadXMLDoc8;
  // ----------------------------------------------------------------------------------
function loadXMLDoc9() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper_33").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "../server03.php", true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc9();
  // 1sec
},1000);

window.onload = loadXMLDoc9;
  // ----------------------------------------------------------------------------------
function loadXMLDoc10() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper_44").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "../server04.php", true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc10();
  // 1sec
},1000);

window.onload = loadXMLDoc10;
  // ----------------------------------------------------------------------------------
function loadXMLDoc11() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper_t1").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "../server01.php", true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc11();
  // 1sec
},1000);

window.onload = loadXMLDoc11;
  // ----------------------------------------------------------------------------------
function loadXMLDoc12() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper_t2").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "../server02.php", true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc12();
  // 1sec
},1000);

window.onload = loadXMLDoc12;
  // ----------------------------------------------------------------------------------
function loadXMLDoc13() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper_t3").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "../server03.php", true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc13();
  // 1sec
},1000);

window.onload = loadXMLDoc13;
  // ----------------------------------------------------------------------------------
function loadXMLDoc14() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("link_wrapper_t4").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "../server04.php", true);
  xhttp.send();
}
setInterval(function(){
  loadXMLDoc14();
  // 1sec
},1000);

window.onload = loadXMLDoc14;
  // ----------------------------------------------------------------------------------