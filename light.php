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
