<!DOCTYPE html>
<html>
<head>
	<title>Contact US</title>
</head>
<link rel="stylesheet" type="text/css" href="feedback.css">
<body>
<form action="" method="" name="contact">
<div class ="feed" style="text-align: center;">
	<h1>Hello.. You  Made It So Far</h1><br><br>
	<h1>Do You Want To Contact US</h1><br><br>
	<h2><a id="blink" onclick="hidefun();" style="cursor: pointer;">&nbsp;&nbsp;Click Me&nbsp;&nbsp;</a></h2><br>
	<div id="hide" style="display:none;">
	<h2>Here Is The Mail Id For Contacting US</h2>
	<h1><a  id="blink1" style="cursor: pointer;" onclick="hidefun1();">Email:jmtechs@gmail.com</a></h1><br><br>
	<div id="hiding" style="display: none;" >
		<h2> Mail Us and You Will Get Response Within 48 Working hours..</h2>
		</div>
</div>
     <input class="back" type="submit" value="back" onclick="back();" />
</div>
</form>
</body>
</html>
<script>
function hidefun() {
  var hiding = document.getElementById("hide");
  if (hiding.style.display === "none") {
    hiding.style.display = "block";
  } else {
    hiding.style.display = "none";
  }
}
function back(){
	 document.forms['contact'].action='Home.html';
    document.forms['contact'].submit
}
function hidefun1() {
  var hideinhide = document.getElementById("hiding");
  if (hideinhide.style.display === "none") {
    hideinhide.style.display = "block";
  } else {
    hideinhide.style.display = "none";
  }
}
      var blink = document.getElementById('blink');
      setInterval(function() {
        blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
      }, 600);
  </script>