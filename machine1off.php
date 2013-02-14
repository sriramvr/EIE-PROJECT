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
<body background="http://wallpaperscraft.com/image/circles_dark_background_line_shadow_37684_1920x1200.jpg">
<center>
<font color="violet"> 
<h1> FACTORY CONTROL  <h1>
</font>
</center>
<font color="violet">
<font size="6">
<div style="position: absolute; left: 500; top:150 ;">
<p>MACHINE  CONTROL</p>
</div>
<div style="position: absolute; left: 200; top:150 ;">
<p>LIGHT CONTROL</p>
</div>
<font size="5">
<form action="check1.php" method="post">
<div style="position: absolute; left: 500; top:250 ;">
<form action="check1.php" method="post">
      machine on 
    <input type="checkbox" name="machineon" value="Yes" />
   </div>
<div style="position: absolute; left: 500; top:300 ;">
    machine off 
    <input type="checkbox" name="machineoff" value="Yes" />
 </div>
<div style="position: absolute; left: 500; top:350 ;">
    machine1 on
    <input type="checkbox" name="machine1on" value="Yes" />
 </div>
<div style="position: absolute; left: 500; top:400 ;">
    machine1 off
    <input type="checkbox" name="machine1off" value="Yes" />
 </div>
<div style="position: absolute; left: 250; top:250 ;">
      light on 
    <input type="checkbox" name="lighton" value="Yes" />
   </div>
<div style="position: absolute; left: 250; top:300 ;">
    light off 
    <input type="checkbox" name="lightoff" value="Yes" />
 </div>
<div style="position: absolute; left: 200; top:350 ;">
    automatic mode
    <input type="checkbox" name="automode" value="Yes" />
 </div>
<div style="position: absolute; left: 200; top:400 ;">
    low power mode
    <input type="checkbox" name="lowpower" value="Yes" />
 </div>
<div style="position: absolute; left: 150; top:450 ;">
    automatic temp control
    <input type="checkbox" name="temp" value="Yes" />
 </div>
<div style="position: absolute; left: 450; top:500 ;">
    <input type="submit" name="formSubmit" value="Submit" />
</div>
</form>

<div style="position: absolute; left: 1000; top:150 ;">
<p>MACHINE TEMPRATURE METER</p>
</div>
<div style="position: absolute; left: 1000; top:200 ;">
<meter value="2" min="0" max="10">2 out of 10</meter>
</div>
<div style="position: absolute; left: 1000; top:250 ;">
<p>MACHINE SPEED METER</p>
</div>
<div style="position: absolute; left: 1000; top:300 ;">
<meter value="6" min="0" max="10">2 out of 10</meter>
</div>
<div style="position: absolute; left: 1000; top:350 ;">
<p>LUBRICANT LEVEL METER</p>
</div>
<div style="position: absolute; left: 1000; top:400 ;">
<meter value="8" min="0" max="10">2 out of 10</meter>
</div>
</form>
</html>
