<?php

if (!empty($_POST['username'] && $_POST['email'] && $_POST['message'] )){


		$username = $_POST['username'];
		$email = $_POST['email'];
		$message= $_POST['message'];

	$domain = substr($email, strpos($email, '@') + 1);
     
    $headers = 'From:' .$email. "."; 
    // $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
	$to = 'elenipapapanou996@gmail.com';
	$message = 'The subject:' .$username. "";
	$message = '<html><body>';
    $message .= '<h3> FROM: ' .$message. '</h3>';
    $message .= '<p style="font-size:18px;">Email: ' .$email. '</p><br>';
    $message .= '<p style="font-size:18px;">Message: ' .$message. '</p>';
    $message .= '</body></html>';
	

if (checkdnsrr($domain) == FALSE) {
	echo "<p style='font-weight: bold; color: #cb2211'>Please enter a valid email!</p>
	";
}
else{ 

	echo "<p style='font-weight: bold; color: #cb2211;'>Your email was sent!</p>";
    mail($to, $message, $headers) or die("Error!"); 
	
}	
}

else{
	echo "<p style='font-weight: bold; color: #cb2211'>Please fill all fiels!</p>";
}

	
?>