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
$qualification2 = $_POST["qualifications[1][qualification]"];
$qualification3 = $_POST["qualifications[1][qualification]"];
$qualification4 = $_POST["qualifications[1][qualification]"];
$qualification5 = $_POST["qualifications[1][qualification]"];

$qyear_completed1 = $_POST["qualifications[1][year-completed]"];
$qyear_completed2 = $_POST["qualifications[2][year-completed]"];
$qyear_completed3 = $_POST["qualifications[3][year-completed]"];
$qyear_completed4 = $_POST["qualifications[4][year-completed]"];
$qyear_completed5 = $_POST["qualifications[5][year-completed]"];

//Previous Experience

$p_employer1 = $_POST["experience[1][employer]"];
$p_employer2 = $_POST["experience[1][employer]"];
$p_employer3 = $_POST["experience[1][employer]"];
$p_employer4 = $_POST["experience[1][employer]"];


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
$affiliation_date4 = $_POST["affiliation[4][affiliation-date]";

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


