<!doctype html>
<html>
<head>
<!--Header (note: page refreshes every 5 sec) -->
<meta charset="utf-8">
<meta http-equiv="refresh" content="5" />
<title>User Interface</title>
<link rel="stylesheet" href="Gueststyle.css">
</head>

<body style="background-color:navy;">

<!--************************ Column 1 ************************ -->


<div>
	<h1><center><u><font color="white">Surveillance Package Interface</font></u></center></h1>
</div>

<div class="content col-1-2">
<!-- /// Temp, Pres, and Alt reader block - start /// -->
<?php
	//Load DATA file
	$filename = "/home/timothy/Documents/testResource.txt";
	$fileContents = file_get_contents($filename);
	$data = explode("\n", $fileContents);
?>

<div>
  <ul><font color="white">
	<li>Temperature (&deg;C): <?php   echo $data[0]   ?> </li> <!-- temperature input from cpp code -->
  	<br>
	<li>Pressure (psi): <?php echo $data[1]	?></li> <!-- pressure input from cpp code -->
	<br>
	<li>Altitude (ft): <?php echo $data[2] ?></li> <!-- altitude input from cpp code -->
      </font>
  </ul>
</div>
<!--/// End /// -->


<!-- /// Ribbon buttons - start /// -->
<div>
    	<span id="button1">Release Red Ribbon<br>(FUNCTION LOCKED)</font></span>
        <span id="button2">Release Black Ribbon<br>(FUNCTION LOCKED)</font></span>
</div>
<!--/// End /// -->

<br>
<br>
<br>
<h1><center>
  <font color="white">==========================</font>
</center></h1>

<!-- /// Payload Button - start /// -->
<div>
	<span id="button3">Release Payload<br>(FUNCTION LOCKED)</span>
</div>
<!--/// End /// -->
</div>


<!--************************ Column 2 ************************ -->

<br>
<br>
<br>
<br>
<br>
<br>

<div>
<!-- /// Latitude and Longtitude block - start /// -->
<div class="wrapper" >
<font color="white">
	<div id="latitude">
		Latitude (&deg;N): <?php echo $data[3] ?> <!-- Latitude input from cpp code -->
	</div>
	<div id="longtitude">
		Longtitude (&deg;W): <?php echo $data[4] ?> <!-- Longtitude input from cpp code -->
	</div>
    </font>
</div>
<!--/// End /// -->

<br>
<br>
<br>

<!-- /// placeholder 1 - start /// -->
<div>
<img src="placeholder1.jpg">
</div>
<!--/// End /// -->


<!-- /// placeholder 2 - start /// -->
<div class="content">
<img src="placeholder2.jpg">
</div>
<!--/// End /// -->
</div>




</body>


</html>