<html>
<body background="http://www.sunwarrior.com/news/wp-content/uploads/2012/10/First-aid-kit-Ics9-sxc.jpg">
<font color=" #B22222"> 
<center>
<form action="lighton.php" method="post">
<h1> EMERGENCY CONTROL  <h1>
</font>
</center>
<font color=" #B22222">
<font size="4">
<div style="position: absolute; left: 500; top:150 ;">
<p> SHUTDOWN FACTORY  </p>
</div>
<div style="position: absolute; left: 500; top:200 ;">
<button onclick="lighton.php">EMERGENCY STOP</button>
</div> 
</form>
<form action="lightoff.php" method="post">
<div style="position: absolute; left: 500; top:250 ;">
<button onclick="lightoff.php">EMERGENCY  ALARM</button>
</div>
</form>
<div style="position: absolute; left: 500; top:300 ;">
<p>EMERGENCY MESSAGE</p>
</div>
<div style="position: absolute; left: 500; top:350 ;">
<form action="message.php" method="get">
MESSAGE: <input type="text" name="age">
<input type="submit">
</form> 
</div>
</form>
<div style="position: absolute; left: 1000; top:250 ;">
<p>POWER CONSUMPTION METER</p>
</div>
<div style="position: absolute; left: 1000; top:300 ;">
<meter value="6" min="0" max="10">2 out of 10</meter>
</div>
</html>
