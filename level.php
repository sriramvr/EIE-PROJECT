<html>
<title> LEVEL CONTROL </title>
<body background="http://fc07.deviantart.net/fs26/f/2009/253/3/7/Red_Background__Black__White_by_XFecal_FaceX.jpg">
<center>
<form action="pumpon.php" method="post">
<font color="red"> 
<h1> LEVEL  CONTROL  <h1>
</font>
</center>
</font>
</center>
<font color="red">
<font size="4">
<div style="position: absolute; left: 500; top:150 ;">
<p>PUMP CONTROL</p>
</div>
<div style="position: absolute; left: 500; top:200 ;">
<button onclick="pumpon.php">PUMP ON</button>
</div> 
</form>
<form action="pumpoff.php" method="post">
<div style="position: absolute; left: 500; top:250 ;">
<button onclick="pumpoff.php">PUMP OFF</button>
</div>
</form>
<div style="position: absolute; left: 500; top:300 ;">
<p>CONTROL MODES </p>
</div>
<form action="autopid.php" method="post">
<div style="position: absolute; left: 500; top:350 ;">
<button onclick="autopid.php">AUTOMATIC PID CONTROL</button>
</div>
</form>
<form action="manualpump.php" method="post">
<div style="position: absolute; left: 500; top:400 ;">
<button onclick="manualpump.php">MANUAL MODE</button>
</div>  
</form>
<div style="position: absolute; left: 1000; top:150 ;">
<p>LIQUID LEVEL METER</p>
</div>
<div style="position: absolute; left: 1000; top:200 ;">
<meter value="2" min="0" max="10">2 out of 10</meter>
</div>
<div style="position: absolute; left: 1000; top:250 ;">
<p>TANK PRESSURE</p>
</div>
<div style="position: absolute; left: 1000; top:300 ;">
<meter value="6" min="0" max="10">2 out of 10</meter>
</div>
</html>
