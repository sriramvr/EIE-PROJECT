    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program. If not, see <http://www.gnu.org/licenses/>.
   
   
    Written by Sriram.vr <send2sriram@yahoo.in>
    Based on EIE-PROJECT Copyright (C) 2013 Sriram.vr
    Copyright (C) 2009-2013 Sriram.vr EIE SETHU INSTITUTE OF TECHNOLOGY , Inc.




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
