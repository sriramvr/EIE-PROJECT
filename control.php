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
     echo "device set";
    //Set the serial port parameters. The documentation says 9600 8-N-1, so 
    $serial->confBaudRate(9600); //Baud rate: 9600
   // $serial->confParity("none");  //Parity (this is the "N" in "8-N-1") 
  // $serial->confCharacterLength(8); //Character length (this is the "8" in "8-N-1") 
   // $serial->confStopBits(1);  //Stop bits (this is the "1" in "8-N-1") 
    //$serial->confFlowControl("none");
//Device does not support flow control of any kind, 
//so set it to none. 
 echo "port ready";
    //Now we "open" the serial port so we can write to it 
    $serial->deviceOpen();
   echo "port open"; 
    $serial->sendMessage("A"); 
 echo "data sent";
    //We're done, so close the serial port again 
    $serial->deviceClose(); 
?>  
