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






<?php
/* Simple serial script for automating an industry using raspberry pi 
and arduino
*/ 
     
    //Load the serial port class 
    require("php_serial.class.php"); 
     
    //Initialize the class 
    $serial = new phpSerial(); 

    //Specify the serial port to use... in this case COM1 
    $serial->deviceSet("COM3"); 
    //Set the serial port parameters. The documentation says 9600 8-N-1, so 
    $serial->confBaudRate(9600); //Baud rate: 9600
   // $serial->confParity("none");  //Parity (this is the "N" in "8-N-1") 
  // $serial->confCharacterLength(8); //Character length (this is the "8" in "8-N-1") 
   // $serial->confStopBits(1);  //Stop bits (this is the "1" in "8-N-1") 
    //$serial->confFlowControl("none");
//Device does not support flow control of any kind, 
//so set it to none.
    //Now we "open" the serial port so we can write to it 
    $serial->deviceOpen();
 
    $serial->sendMessage("A"); 

    //We're done, so close the serial port again 
  
 echo "<font size= 10 face='Arial'  color= violet >"; 
     echo(date("D F d Y"));
     echo "<br />";
     echo "<br />";
      echo "<font size= 6 face='Arial'  color= indigo >"; 
     echo "  PID CONTROL MODE \n " ;  
     echo "<br />";
     echo "<br />";
?> 
<html>
<body>
<div style="position: absolute; left: 800; top: 300;"> 
<a href="http://127.0.0.1/level.php">back</a> 
</div>
</body>
</html>
