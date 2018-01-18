<?php
 $Temp=$_POST{"temperature"};
 $Humidity=$_POST{humidity};
 $Write="<p>Temperature : " . $temp . "celcius</p>"."<p>Humidity : " . $humidity . " % </p>";
 file put_contents('sensor.html',$write);
 ?>