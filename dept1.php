<?php
include 'cn.php';
$dept = (htmlspecialchars(strip_tags(strtolower($_POST['dept']))));
$dept=strtoupper($dept);
function checkdept($dept) {
	$deptstatus="NO";
	include 'cn.php';
	$sql1= $conn->query("SELECT * FROM dept WHERE dept = '$dept';");
	while($row1 = $sql1->fetch_assoc()) {
		$deptt=$row1['dept'];
		if ($dept == $deptt){
			$deptstatus ="YES";
	}
	}
	return $deptstatus;
}

$checkdept = checkdept($dept);
if ($checkdept == "YES") {
		echo "<script> alert ('Department already Exist'); window.location='index.php'; </script>";  
	}


if ($checkdept == "NO") {
		$sql="INSERT INTO dept (dept)
		VALUES('$dept');";
		 $do =mysqli_query($conn, $sql);
		 if ($do){  
		 		echo "<script> alert ('Success'); window.location='index.php'; </script>";  
}
	}

?>