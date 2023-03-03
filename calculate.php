<?php
	
	$maths = $_POST['s1'];
	$sd1 = $_POST["s2"];
	$prof = $_POST["s3"];
	$hci = $_POST["s4"];
	$db= $_POST["s5"];
	$sa = $_POST["s6"];
	$ai = $_POST["s7"];
	$ss = $_POST["s8"];
	$sd2 = $_POST["s9"];
	$sysdev = $_POST["s10"];
	$netwk = $_POST["s11"];
	$dwa = $_POST["s12"];
	$da = $_POST["s13"];
	$ppm = $_POST["s14"];
	$csp1 = $_POST["s15"];
	$csp2 = $_POST["s16"];
	$cloud = $_POST["s17"];
	$wad = $_POST["s18"];
	

	
	
	$year2avg = (($ai + $ss + $sd2 + $sysdev + $netwk + $dwa) /600) * 30;
	$year3avg = (($da + $ppm + $csp1 + $csp2 + $cloud + $wad)/600) *70;
	$totalavg = $year2avg + $year3avg;
	
	echo "Your overall average is ".$totalavg."<br>";
	
	if($totalavg >=70 && $totalavg <=100){
		echo "Congratualtions, you have a first class";
	}
	elseif($totalavg >=60 && $totalavg <=69){
		echo "Congratualtions, you have a 2:1";
	}
	elseif($totalavg >=50 && $totalavg <=59){
		echo "Congratualtions, you have a 2:2";
	}
	elseif($totalavg >=40 && $totalavg <=49){
		echo "Congratualtions, you have a Pass";
	}
	else{
		echo "Sorry, we regret to inform you that on this occasion you have not passed";
	}
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "calculator";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error){
		die($conn->connect_error);
	}
	
	$sql = "INSERT INTO Grade(ID,Average) VALUES(1,$totalavg)";
	
	if($conn->query($sql) === TRUE){
		
		echo "saved successfully";
		
	}
	else{
		echo $conn->error;
		
	}
	
    $conn->close();
	
	
	
	
	
	
	
?>