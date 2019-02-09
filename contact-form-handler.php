<?php 
if(isset($_POST['submit'])){
    $to = "maduranga95@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $last_name = $_POST['surname'];
	$phone_no = $_POST['phone'];
    $subject = "Form submission from your portfolio";
    
    $message = $first_name . " " . $last_name . $phone_no . " wrote the following:" . "\n\n" . $_POST['message'];
    

    $headers = "From:" . $from;
    //$headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }else{
		
	}
?>