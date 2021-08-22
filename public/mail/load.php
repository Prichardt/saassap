<?php
error_reporting(0);
include '../../library/Mover.php';

$mover = new Mover();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address_1 = $_POST['address_1'];
$address_2 = $_POST['address_2'];
$nameCollection = $_POST['nameCollection'];
$nameCollection2 = $_POST['nameCollection2'];
$address_d1 = $_POST['address_d1'];
$address_d2 = $_POST['address_d2'];
$nameDelivery = $_POST['named'];
$nameDelivery2 = $_POST['named2'];
$nameLoad = $_POST['nameLoad'];
$wrapping = $_POST['wrapping'];
$storage = $_POST['storage'];
$dateColletion= $_POST['date'];


$content = "First Name: " . $fname . "<br/>";
$content .= "Last Name: " . $lname . "<br/>";
$content .= "Email Address: " . $email . "<br/>";
$content .= "Date Of Collection ".$dateColletion."<br/>";
$content .= "<br/><br/>COLLECTION ADDRESS <br/>";
$content .= "Collection Address 1: " . $address_1 . "<br/>";
// $content .= "Collection Address 2: " . $address_2 . "<br/>";
if($address_2 != ""){
    $content .= "Collection Address 2: " .$address_2."<br/>";
}
$content .= "Contact details at Collection Address 1: " .$nameCollection. "<br/>";
if($nameCollection2 != ""){
    $content .= "Contact details at Collection Address 2: " .$nameCollection2."<br/>";
}

$content .= "<br/><br/> DELIVERY ADDRESS <br/>";
$content .= "Delivery Address 1: " . $address_d1 . "<br/>";
// $content .= "Delivery Adddress 2: " . $address_d2 . "<br/>";
if($address_d2 != ""){
    $content .= "Delivery Address 2: " .$address_d2."<br/>";
}
$content .= "Contact at Delivery Address 1: " .$nameDelivery. "<br/>";
if($nameDelivery2 != ""){
    $content .= "Contact details at Delivery Address 2: " .$nameDelivery2."<br/>";
}
$content .= "<br/><br/>Wrapping & packing of boxes:<br/> ".$wrapping;
$content .= "<br/><br/>Storage needed - please specify period:<br/> ".$storage;
$content .= "<br/><br/>Please write your name below if you agree to the following. -Please let us know beforehand if there is any carry distance longer than 30m or flats above ground floor as that might have an extra charge -We use various size vehicles depending on the size of the job, if you are unsure of a truck restriction please speak to your body corporate or security at the main gate -Even though we take all precautions in protecting your furniture, accidents can happen and no claim can be made against Leopard Movers (Pty) Ltd if the goods are not insured. -Times for arrival of the truck given as an estimate only, we will do our best to keep to the schedule given but please note that we are driving trucks and there are many variables that may influence our arrival times for example accidents on the roads which may influence the traffic, Stop & Go, truck restrictions not accounted for, clients having more items on the inventory list than indicated, weighbridges, bad weather etc. Thank you for taking the above into consideration when booking with Leopard Movers (Pty) Ltd
: <br>" .$nameLoad;

//echo $content;

$to = "info@leopardmovers.co.za";
$subject = "Load Confirmation From Website";
$header = "From:".$email."\r\n";
$header .= "Cc:".$email."\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$send_email = mail($to, $subject, $content, $header);

if($send_email){
    echo "success";
}
