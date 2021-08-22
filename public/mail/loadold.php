<?php
error_reporting(0);
include '../../library/Mover.php';

$mover = new Mover();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$tel_phone = $_POST['tel_phone'];
$email = $_POST['email'];
$address_1 = $_POST['address_1'];
$address_2 = $_POST['address_2'];
$city = $_POST['city'];
$province = $_POST['province'];
$zip = $_POST['zip'];
$floor = $_POST['floor'];
$elevator = $_POST['elevator'];
$nameCollection = $_POST['nameCollection'];
$nameCollection2 = $_POST['nameCollection2'];
$numberCollection = $_POST['numberCollection'];
$numberCollection2 = $_POST['numberCollection2'];

$address_d1 = $_POST['address_d1'];
$address_d2 = $_POST['address_d2'];
$city_d = $_POST['city_d'];
$province_d = $_POST['province_d'];
$zip_d = $_POST['zip_d'];
$floor_d = $_POST['floor_d'];
$elevator_d = $_POST['elevator_d'];
$nameDelivery = $_POST['named'];
$nameDelivery2 = $_POST['named2'];
$numberDelivery = $_POST['numberd'];
$numberDelivery2 = $_POST['numberd2'];

$nameLoad = $_POST['nameLoad'];
$wrapping = $_POST['wrapping'];
$storage = $_POST['storage'];

$dateColletion= $_POST['date'];


$content = "First Name: " . $fname . "<br/>";
$content .= "Last Name: " . $lname . "<br/>";
$content .= "Phone Number: " . $phone . "<br/>";
$content .= "Tel Phone Number: " . $tel_phone . "<br/>";
$content .= "Email Address: " . $email . "<br/>";
$content .= "Date Of Collection ".$dateColletion."<br/>";

$content .= "<br/><br/>COLLECTION ADDRESS <br/>";
$content .= "Number, Unit and/or Floor, Apartment: " . $address_1 . "<br/>";
$content .= "Street Name: " . $address_2 . "<br/>";
$content .= "City: " . $city . "<br/>";
$content .= "Province: " . $province . "<br/>";
$content .= "Zip: " . $zip . "<br/>";
$content .= "Floor: " . $floor . "<br/>";
$content .= "Elevator: " . $elevator . "<br/>";
$content .= "Contact details at collection address 1<br/>";
$content .= "Name: " .$nameCollection. "<br/>Phone Number: " .$numberCollection."<br/>";
if($nameCollection2 != " "){
    $content .= "Contact details at collection address 2<br/>";
    $content .= "Name: " .$nameCollection2. "<br/> Phone Number: " .$numberCollection2."<br/>";
}

$content .= "<br/><br/> DELIVERY ADDRESS <br/>";
$content .= "Number, Unit and/or Floor, Apartment: " . $address_d1 . "<br/>";
$content .= "Street Name: " . $address_d2 . "<br/>";
$content .= "City: " . $city_d . "<br/>";
$content .= "Province: " . $province_d . "<br/>";
$content .= "Zip: " . $zip_d . "<br/>";
$content .= "Floor: " . $floor_d . "<br/>";
$content .= "Elevator: " . $elevator_d . "<br/>";
$content .= "Contact details at delivery address 1<br/>";
$content .= "Name: " .$nameDelivery. "<br/> Phone Number: " .$numberDelivery."<br/>";
if($nameCollection2 != " "){
    $content .= "Contact details at delivery address 2<br/>";
    $content .= "Name: " .$nameDelivery2. "<br/> Phone Number: " .$numberDelivery2."<br/>";
}

$content .= "<br/><br/>Wrapping & packing of boxes:<br/> ".$wrapping;
$content .= "<br/><br/>Storage needed - please specify period:<br/> ".$storage;







echo $content;

$to = "info@leopardmovers.co.za";
$subject = "Load Confirmation From Website";


$header = "From:noreply@leopardmovers.co.za \r\n";
$header .= "Cc: ".$email."\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$send_email = mail($to, $subject, $content, $header);

if($send_email){
    echo "success";
}
