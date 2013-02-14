<?php
/* Simple serial script for automating an industry using raspberry pi 
and arduino
*/ 
     
    //Load the serial port class 
    require("php_serial.class.php"); 
     
    //Initialize the class 
    $serial = new phpSerial(); 

    //Specify the serial port to use... in this case COM1 
    $serial->deviceSet("COM11"); 
     
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
    $serial->deviceClose(); 
 echo "<font size= 10 face='Arial'  color= violet >"; 
     echo(date("D F d Y"));
     echo "<br />";
     echo "<br />";
      echo "<font size= 6 face='Arial'  color= indigo >"; 
     echo "  MACHINE1 TURNED ON \n " ;  
     echo "<br />";
     echo "<br />";
?> 
<html>
<body>
<div style="position: absolute; left: 800; top: 300;"> 
<a href="http://127.0.0.1/machine.php">back</a> 
</div>
</body>
</html>
