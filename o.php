<?php
        //PI Version
	$comPort = "/dev/ttyACM0"; /*change to correct com port */
  	$fp =fopen($comPort, "w");
  	fwrite($fp, "O"); /* this is the number that it will write */
  	fclose($fp);
  	echo("opening or closing");

?>
