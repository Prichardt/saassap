<?php

//take the post variable from form
//personal details
$title = $_POST["title"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phone = $_POST["phone"];
$tel_phone = $_POST["tel_phone"];
$email = $_POST["email"];
$citizenship = $_POST["citizenship"];
$criminal_record = $_POST["criminal_record"];
$drug_test = $_POST["drug_test"];

//residential address
$res_address = $_POST["res-address"];
$street_res_address = $_POST["street-res-address"];
$city_res_address= $_POST["city-res-address"];
$surbub_res_address = $_POST["surbub-res-address"];
$province_res_address = $_POST["province-res-addres"];
$postal_code_res_address = $_POST["postal_code-res-address"];
$postal_address = $_POST["postal-address"];

//postal address
$street_postal_address = $_POST["street-postal-address"];
$city_postal_address= $_POST["city-postal-address"];
$surbub_postal_address = $_POST["surbub-postal-address"];
$province_postal_address = $_POST["province-postal-addres"];
$postal_code_postal_address = $_POST["postal_code-postal-address"];

//position specifications
$desired_position = $_POST["desired_position"];
$date_available = $_POST["date_available"];
$notice_period = $_POST["notice-period"];

//Educational Qualifications

$qualifications_institution1 = $_POST["qualifications[1][institution]"];
$qualifications_institution2 = $_POST["qualifications[2][institution]"];
$qualifications_institution3 = $_POST["qualifications[3][institution]"];
$qualifications_institution4 = $_POST["qualifications[4][institution]"];
$qualifications_institution5 = $_POST["qualifications[5][institution]"];

$institution_location1 = $_POST["qualifications[1][institution-location]"];
$institution_location2 = $_POST["qualifications[2][institution-location]"];
$institution_location3 = $_POST["qualifications[3][institution-location]"];
$institution_location4 = $_POST["qualifications[4][institution-location]"];
$institution_location5 = $_POST["qualifications[5][institution-location]"];

$qualification1 = $_POST["qualifications[1][qualification]"];
$qualification2 = $_POST["qualifications[2][qualification]"];
$qualification3 = $_POST["qualifications[3][qualification]"];
$qualification4 = $_POST["qualifications[4][qualification]"];
$qualification5 = $_POST["qualifications[5][qualification]"];

$qyear_completed1 = $_POST["qualifications[1][year-completed]"];
$qyear_completed2 = $_POST["qualifications[2][year-completed]"];
$qyear_completed3 = $_POST["qualifications[3][year-completed]"];
$qyear_completed4 = $_POST["qualifications[4][year-completed]"];
$qyear_completed5 = $_POST["qualifications[5][year-completed]"];

//Previous Experience

$p_employer1 = $_POST["experience[1][employer]"];
$p_employer2 = $_POST["experience[2][employer]"];
$p_employer3 = $_POST["experience[3][employer]"];
$p_employer4 = $_POST["experience[4][employer]"];


$p_position1 = $_POST["experience[1][p.position]"];
$p_position2 = $_POST["experience[2][p.position]"];
$p_position3 = $_POST["experience[3][p.position]"];
$p_position4 = $_POST["experience[4][p.position]"];

$appointment_date1 = $_POST["experience[1][appointment-date]"];
$appointment_date2 = $_POST["experience[2][appointment-date]"];
$appointment_date3 = $_POST["experience[3][appointment-date]"];
$appointment_date4 = $_POST["experience[4][appointment-date]"];

$termination_date1 = $_POST["experience[1][termination-date]"];
$termination_date2 = $_POST["experience[2][termination-date]"];
$termination_date3 = $_POST["experience[3][termination-date]"];
$termination_date4 = $_POST["experience[4][termination-date]"];

$duties1 = $_POST["experience[1][duties]"];
$duties2 = $_POST["experience[2][duties]"];
$duties3 = $_POST["experience[3][duties]"];
$duties4 = $_POST["experience[4][duties]"];

//Professional Organisation Affiliation

$organisation1 = $_POST["affiliation[1][orgarnisation]"];
$organisation2 = $_POST["affiliation[2][orgarnisation]"];
$organisation3 = $_POST["affiliation[3][orgarnisation]"];
$organisation4 = $_POST["affiliation[4][orgarnisation]"];

$affiliation_date1 = $_POST["affiliation[1][affiliation-date]"];
$affiliation_date2 = $_POST["affiliation[2][affiliation-date]"];
$affiliation_date3 = $_POST["affiliation[3][affiliation-date]"];
$affiliation_date4 = $_POST["affiliation[4][affiliation-date]"];

//references

$refname1 = $_POST["references[1][refname]"];
$refname2 = $_POST["references[2][refname]"];
$refname3 = $_POST["references[3][refname]"];

$refposition1 = $_POST["references[1][ref-position]"];
$refposition2 = $_POST["references[2][ref-position]"];
$refposition3 = $_POST["references[3][ref-position]"];

$reforg1 = $_POST["references[1][ref-organisation]"];
$reforg2 = $_POST["references[2][ref-organisation]"];
$reforg3 = $_POST["references[3][ref-organisation]"];

$refphone1 = $_POST["references[1][ref-phone]"];
$refphone2 = $_POST["references[2][ref-phone]"];
$refphone3 = $_POST["references[3][ref-phone]"];

$refemail1 = $_POST["references[1][ref-email]"];
$refemail2 = $_POST["references[2][ref-email]"];
$refemail3 = $_POST["references[3][ref-email]"];

//database insert SQL CODE

//Post personal details to database
$sql = "INSERT INTO `personal details` (
    `Title` ,
    `First Name` ,
    `Last Name` ,
    `Cellphone` ,
    `Telephone` ,
    `Email` ,
    `Criminal Record` ,
    `Citizenship` ,
    `Drug Test` ,
    `Residential Address - Number/Unit` ,
    `Residential Address - Street` ,
    `Residential Address - City` ,
    `Residential Address - Suburb` ,
    `Residential Address - Province` ,
    `Residential Address - Postal Code` ,
    `Postal Address - Number/Unitber/` ,
    `Postal Address - Street` ,
    `Postal Address - City` ,
    `Postal Address - Suburb` ,
    `Postal Address - Province` ,
    `Postal Address - Postal Code`
  ) 
VALUES (
  '$title' ,
  '$fname' ,
  '$lname' ,
  '$phone' ,
  '$tel_phone' ,
  '$email' ,
  '$citizenship' ,
  '$drug_test' ,
  '$res_address' ,
  '$street_res_address' ,
  '$city_res_address' ,
  '$surbub_res_address' ,
  '$province_res_address' ,
  '$postal_code_res_address' ,
  '$postal_address' ,
  '$street_postal_address' ,
  '$city_postal_address' ,
  '$surbub_postal_address' ,
  '$province_postal_address' ,
  '$postal_code_postal_address'

)";


// vacancy applications

$sql = " INSERT INTO `vacancy applications` (
  `Desired Position` ,
  `Title` ,
  `Name` ,
  `Surname` ,
  `Date Available To Commence` ,
  `Notice Period` 

) 
VALUES(
    '$desired_position' ,
    '$title'
    '$fname' ,
    '$lname' ,
    '$date_available' ,
    '$notice_period'

)";

//Educational Qualifications

$sql = " INSERT INTO `educational details`(
  `Title` ,
  `First Name` ,
  `Last Name` ,
  `1)Tertiary Institution / School` ,
  `1)Location` ,
  `1)Qualification` ,
  `1)Year Completed` ,
  `2)Tertiary Institution / School` ,
  `2)Location` ,
  `2)Qualification` ,
  `2)Year Completed` ,
  `3)Tertiary Institution / School` ,
  `3)Location` ,
  `3)Qualification` ,
  `3)Year Completed` ,
  `4)Tertiary Institution / School` ,
  `4)Location` ,
  `4)Qualification` ,
  `4)Year Completed` ,
  `5)Tertiary Institution / School` ,
  `5)Location` ,
  `5)Qualification` ,
  `5)Year Completed` 
  
  )
  VALUES(
    `$title` ,
    `$fname` ,
    `$lname` ,
    '$qualifications_institution1',
    '$institution_location1' ,
    '$qualification1' ,
    '$qyear_completed1' ,
    '$qualifications_institution2',
    '$institution_location2' ,
    '$qualification2' ,
    '$qyear_completed2' ,
    '$qualifications_institution3',
    '$institution_location3' ,
    '$qualification3' ,
    '$qyear_completed3' ,
    '$qualifications_institution4',
    '$institution_location4' ,
    '$qualification4' ,
    '$qyear_completed4' ,

)";

//EMPLOYMENT HISTORY

$sql = " INSERT INTO `employment history` (
    `Title` ,
    `First Name` ,
    `Last Name` ,
    `1)Position Held` ,
    `1)Appointment Date` ,
    `1)Termination Date` ,
    `1)Duties & Responsibilities` ,
    `2)Employer` ,
    `2)Position Held` ,
    `2)Appointment Date` ,
    `2)Termination Date` ,
    `2)Duties & Responsibilities` ,
    `3)Employer` ,
    `3)Position Held` ,
    `3)Appointment Date` ,
    `3)Termination Date` ,
    `3)Duties & Responsibilities` ,
    `4)Employer` ,
    `4)Position Held` ,
    `4)Appointment Date` ,
    `4)Termination Date` ,
    `4)Duties & Responsibilities` ,
    `5)Employer` ,
    `5)Position Held` ,
    `5)Appointment Date` ,
    `5)Termination Date` ,
    `5)Duties & Responsibilities` 
  ) 
  VALUES(

    `$title` ,
    `$fname` ,
    `$lname` ,
    `$p_employer1` ,
    `$p_position1` ,
    `$appointment_date1` ,
    `$termination_date1` ,
    `$duties1` 
    `$p_employer2` ,
    `$p_position2` ,
    `$appointment_date2` ,
    `$termination_date2` ,
    `$duties2`
    `$p_employer3` ,
    `$p_position3` ,
    `$appointment_date3` ,
    `$termination_date3` ,
    `$duties3`  
    `$p_employer4` ,
    `$p_position4` ,
    `$appointment_date4` ,
    `$termination_date4` ,
    `$duties4` 
)";

//Affiliation

$sql = " INSERT INTO `professional body affiliation/membership` (
    `Title` ,
    `First Name` ,
    `Last Name` ,
    `1)Organisation` ,
    `1)Affiliation Date` ,
    `2)Organisation` ,
    `2)Affiliation Date` ,
    `3)Organisation` ,
    `3)Affiliation Date` ,
    `4)Organisation` ,
    `4)Affiliation Date` 
)
VALUES(
    `$title` ,
    `$fname` ,
    `$lname` ,
    `$organisation1` ,
    `$affiliation_date1` ,
    `$organisation2` ,
    `$affiliation_date2`
    `$organisation3` ,
    `$affiliation_date3` ,
    `$organisation4` ,
    `$affiliation_date4`

)";

//references

$sql = " INSERT INTO  `applicant references` (
    `Title` ,
    `First Name`,
    `Last Name` ,
    `1)Reference Name & Surname` ,
    `1)Reference Position` ,
    `1)Reference Organisation` ,
    `1)Reference Phone` ,
    `1)Reference Email` ,
    `2)Reference Name & Surname` ,
    `2)Reference Position` ,
    `2)Reference Organisation` ,
    `2)Reference Phone` ,
    `2)Reference Email` ,
    `3)Reference Name & Surname` ,
    `3)Reference Position` ,
    `3)Reference Organisation` L,
    `3)Reference Phone` ,
    `3)Reference Email` 
  )
  VALUES(
    `$title` ,
    `$fname` ,
    `$lname` ,
    `$refname1` ,
    `$refposition1` ,
    `$reforg1` ,
    `$refphone1` ,
    `$refemail1` ,
    `$refname2` ,
    `$refposition2` ,
    `$reforg2` ,
    `$refphone2` ,
    `$refemail2` ,
    `$refname3` ,
    `$refposition3` ,
    `$reforg3` ,
    `$refphone3` ,
    `$refemail3` 

)";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Application Successfull";
}


