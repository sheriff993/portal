<?php
include 'cn.php';
$cunit = (htmlspecialchars(strip_tags(strtolower($_POST['cunit']))));
$cunit=strtoupper($cunit);

$ctitle = (htmlspecialchars(strip_tags(strtolower($_POST['ctitle']))));
$ctitle=strtoupper($ctitle);

$ccode = (htmlspecialchars(strip_tags(strtolower($_POST['ccode']))));
$ccode=strtoupper($ccode);

$dept = (htmlspecialchars(strip_tags(strtolower($_POST['dept']))));
$dept=strtoupper($dept);

function checkdept($dept) {
	$deptstatus="NO";
	include 'cn.php';
	$sql1= $conn->query("SELECT * FROM courses WHERE dept = '$dept';");
	while($row1 = $sql1->fetch_assoc()) {
		$deptt=$row1['dept'];
		if ($dept == $deptt){
			$deptstatus ="YES";
	}
	}
	return $deptstatus;
}

function checkcunit($cunit) {
	$cunitstatus="NO";
	include 'cn.php';
	$sql1= $conn->query("SELECT * FROM courses WHERE cunit = '$cunit';");
	while($row1 = $sql1->fetch_assoc()) {
		$cunit1=$row1['cunit'];
		if ($cunit == $cunit1){
			$cunitstatus ="YES";
	}
	}
	return $cunitstatus;
}

function checkctitle($ctitle) {
	$ctitlestatus="NO";
	include 'cn.php';
	$sql1= $conn->query("SELECT * FROM courses WHERE ctitle = '$ctitle';");
	while($row1 = $sql1->fetch_assoc()) {
		$ctitle1=$row1['ctitle'];
		if ($ctitle == $ctitle1){
			$ctitlestatus ="YES";
	}
	}
	return $ctitlestatus;
}

function checkccode($ccode) {
	$ccodestatus="NO";
	include 'cn.php';
	$sql1= $conn->query("SELECT * FROM courses WHERE ccode = '$ccode';");
	while($row1 = $sql1->fetch_assoc()) {
		$ccode1=$row1['ccode'];
		if ($ccode == $ccode1){
			$ccodestatus ="YES";
	}
	}
	return $ccodestatus;
}

$checkdept = checkdept($dept);
$checkcunit=checkcunit($cunit);
$checkctitle=checkctitle($ctitle);
$checkccode=checkccode($ccode);
if ($checkdept == "YES" && $checkccode=="YES"  && $checkctitle=="YES") {

		echo "<script> alert ('Record Already Exist'); window.location='course.php'; </script>";  
		exit();
	}


if ($checkdept == "NO" || $checkccode=="NO"  || $checkctitle=="NO" || $checkcunit == "NO") {
		$sql="INSERT INTO courses(ccode, ctitle, cunit, dept) VALUES ('$ccode','$ctitle','$cunit','$dept');";
		 $do =mysqli_query($conn, $sql);
		 if ($do){  
		 		echo "<script> alert ('Success'); window.location='index.php'; </script>";  
}
	}

?>