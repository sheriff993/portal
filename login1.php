<?php
include 'cn.php';
$studentid = (htmlspecialchars(strip_tags(strtolower($_POST['studentid']))));
$studentid=strtoupper($studentid);
$password = (htmlspecialchars(strip_tags(strtolower($_POST['pass']))));
$password=strtoupper($password);
		 $sql= $conn->query("SELECT * FROM students WHERE student_id='$studentid' and pass='$password';");
    if ($sql->num_rows > 0){
        while($row = $sql->fetch_assoc()) {
            $stid=$row['student_id'];
            $pass=$row['pass'];
            $dbfullname=$row['snam']." ". $row['fnam']." ". $row['onam'];
            $photo=$row['photo'];
            $dept=$row['dept'];
            $statee=$row['statee'];
            $lga=$row['lga'];
            $pno=$row['pno'];
            session_start();
            $_SESSION['dbfullname'] = $dbfullname;
            $_SESSION['studentid'] = $studentid;
            $_SESSION['photo'] = $photo;
            $_SESSION['dept'] = $dept;
            $_SESSION['statee'] = $statee;
            $_SESSION['lga'] = $lga;
            $_SESSION['pno'] = $pno;

            if ($stid == $studentid && $pass == $password){
                header("Location: dashboard/");
            }
        }
    }

?>