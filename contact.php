
<?php
if(isset($_POST['submit'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$city = $_POST['city'];
	$message = $_POST['message'];

if($name=='' || $email=='' || $number=='' || $city=='' || $message==''){
	echo "</script>alert('All fields are required !')</script>";
} 
else {

$to         = "dravin15071995@gmail.com"; // where you want to get mail 
$subject    = " Contact Us From xxxxxxxxxxx :";

$headers    = "From: $email";

//  Message body
// $txt = "Name : ". $_POST['name'] ;
// $txt = "Email : ". $_POST['email'] ;
// $txt = "Phone : ". $_POST['number'] ;
// $txt = "city : ". $_POST['city'] ;
// $txt = "Message : ". $_POST['message'];

//or
 $txt = " Name : ". $name . "\n Email : ". $email ."\n Number : ". $number . " \n city : ". $city . "\n Message : ". $message;


$sendmail = mail($to, $subject, $txt, $headers);

echo "<script>alert('Thank you for contact us, our team will contact with you very soon')</script>";
echo "<script>window.location.href = 'thankyou.html';</script>";
}
}

?>
