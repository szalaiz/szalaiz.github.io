<HTML>  <! DECIDE by szala - 09-03-2017>

<HEAD>
  <STYLE>
    div {
      position:      fixed;
      top:           50%;
      left:          50%;
      transform:     translate(-50%, -50%);	
      font-family:   Arial, Helvetica, Sans-serif;
      font-size:     100px;
      font-weight:   bold;
    }

    div#box1 {color: #999999; font-size: 150px;}
    div#box2 {color: #33CC33;}
    div#box3 {color: #CC3333;}
  </STYLE>

  <SCRIPT>
    function fadeOut(el) {
      var elem = document.getElementById(el);
      elem.style.transition = "opacity 0.5s linear 0s";
      elem.style.opacity = 0;
    }

    function fadeIn(el) {
      var elem = document.getElementById(el);
      elem.style.transition = "opacity 0.5s linear 0s";
      elem.style.opacity = 1;
    }
  </SCRIPT>
</HEAD>

<BODY>
  <DIV id="box1"></DIV>
  <DIV id="box2"></DIV>
  <DIV id="box3"></DIV>

  <SCRIPT>
    fadeOut('box1');	
    setTimeout(function(){fadeIn('box1');document.getElementById("box1").innerHTML = "3";}, 0);
    setTimeout(function(){fadeOut('box1');}, 1000);
    setTimeout(function(){fadeIn('box1');document.getElementById("box1").innerHTML = "2";}, 2000);
    setTimeout(function(){fadeOut('box1');}, 3000);
    setTimeout(function(){fadeIn('box1');document.getElementById("box1").innerHTML = "1";}, 4000);
    setTimeout(function(){fadeOut('box1');}, 5000);

    setTimeout(function(){Math.random()>0.5 ? document.getElementById("box2").innerHTML = "Yes" : document.getElementById("box3").innerHTML = "No"}, 5500);
  </SCRIPT>
</BODY>

</HTML>
