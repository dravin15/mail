
<?php
if(isset($_POST['submit'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$city = $_POST['city'];

if($name=='' || $email=='' || $number=='' || $city==''){
	echo "</script>alert('All fields are required !')</script>";
} 
else {

$to         = "faimsubhani@gmail.com"; // where you want to get mail 
$subject    = " Contact Us From :";

$headers    = "From: $email";

//  Message body
// $txt = "Name : ". $_POST['name'] ;
// $txt = "Email : ". $_POST['email'] ;
// $txt = "Phone : ". $_POST['number'] ;
// $txt = "city : ". $_POST['city'] ;

//or
 $txt = " Name : ". $name . "\n Email : ". $email ."\n Number : ". $number . " \n city : ". $city;


$sendmail = mail($to, $subject, $txt, $headers);

echo "<script>alert('Thank you for contact us, our team will contact with you very soon')</script>";
echo "<script>window.location.href = 'thankyou.html';</script>";
}
}

?>
