<?php
include 'cn.php';
$student_id = strval(rand(000000,111111));

$student_id1 = "2018/PT/" . $student_id;

$snam = (htmlspecialchars(strip_tags(strtolower($_POST['snam']))));
$snam=strtoupper($snam);

$fnam = (htmlspecialchars(strip_tags(strtolower($_POST['fnam']))));
$fnam=strtoupper($fnam);

$onam = (htmlspecialchars(strip_tags(strtolower($_POST['onam']))));
$onam=strtoupper($onam);

$dob = (htmlspecialchars(strip_tags(strtolower($_POST['dob']))));


$phone = (htmlspecialchars(strip_tags(strtolower($_POST['phone']))));


$statee = (htmlspecialchars(strip_tags(strtolower($_POST['statee']))));
$statee=strtoupper($statee);

$lga = (htmlspecialchars(strip_tags(strtolower($_POST['lga']))));
$lga=strtoupper($lga);

$dept = (htmlspecialchars(strip_tags(strtolower($_POST['dept']))));
$dept=strtoupper($dept);

$email = (htmlspecialchars(strip_tags(strtolower($_POST['email']))));
$email=strtoupper($email);

move_uploaded_file($_FILES["images"]["tmp_name"],"dashboard/images/usr/".$student_id.".jpg");
$location ="dashboard/images/usr/".$student_id.".jpg";

		$sql="INSERT INTO students (snam, lnam, onam, student_id, session, photo, pno, statee, lga, dept, email, pass) VALUES ('$snam','$fnam','$onam','$student_id1','2020/2021','$location','$phone','$statee','$lga','$dept','$email', 'ADMIN');";
		 $do =mysqli_query($conn, $sql);
		 if ($do){  

 			$to = $email;
                             
            $message = "<b>Dear ".$fnam. $snam .","."</b> <br>" ;
            $message .= "<p> Welcome to My Portal<br/>
            Your Details are:<br/><strong>Date of Birth: </strong>". $dob . "<br/> Student ID: ". $student_id1. "<br/> Password: ADMIN <br/>" ;
 



                             
            
                    
                         //$e = "username=ultimate&password=friday&sender=FEDPOFFA&recipient=".$te. "&message=".$a ;              
               $subject = "Sheriffmayowa0293@gmail.com";
                                         $header = "From:Sheriffmayowa0293@gmail.com\r\n";
                                         //$header .= "Cc:teamvschool2017@gmail.com\r\n";
                                         $header .= "MIME-Version: 1.0\r\n";
                                         $header .= "Content-type: text/html\r\n";
                                         
                                   //     mail($to,$subject,$message,$header);
            		    // mail send begin
            		
            		  
                    		
                    		
                    		//mail send end

		 		echo "<script> alert ('Success: Your Login ID is: $student_id1 Check Your Email For Login Details' ); window.location='index.php'; </script>";  
}
	

?>