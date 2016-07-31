<?php

date_default_timezone_set('America/Los_Angeles');//set timezone

string $email_details[];

// clean html
if(isset($_POST)&&!empty($_POST)){

  $email_details['inputName'] = htmlspecialchars($_POST['inputName']);
  $email_details['inputEmail'] = htmlspecialchars($_POST['inputEmail']);
  $email_details['inputPhone'] = htmlspecialchars($_POST['inputPhone']);
  $email_details['inputName'] = htmlspecialchars($_POST['inputName']);
  $email_details['gd'] = htmlspecialchars($_POST['gd']);
  $email_details['ld'] = htmlspecialchars($_POST['ld']);
  $email_details['wdd'] = htmlspecialchars($_POST['wdd']);
  $email_details['vep'] = htmlspecialchars($_POST['vep']);
  $email_details['wc'] = htmlspecialchars($_POST['wc']);
  $email_details['inputPD'] = htmlspecialchars($_POST['inputPD']);
  //$email_details['inputRFP'] = htmlspecialchars($_POST['inputRFP']);
  $email_details['inputStart'] = htmlspecialchars($_POST['inputStart']);
  $email_details['inputCDate'] = htmlspecialchars($_POST['inputCDate']);
  $email_details['inputBudget'] = htmlspecialchars($_POST['inputBudget']);
  $email_details['pp'] = htmlspecialchars($_POST['pp']);
  $email_details['inputTimes'] = htmlspecialchars($_POST['inputTimes']);

  $to = "yak@deltacreativestudios.com";
  $from = $email_details['inputEmail'];
  $subject = "Proposal: " . $email_details['inputName'] . " - ";
  if($email_details['gd']=="Yes"){$subject.="Graphic Design"}
  if($email_details['ld']=="Yes"){$subject.="Logo Design"}
  if($email_details['wdd']=="Yes"){$subject.="Web Design/Development"}
  if($email_details['vep']=="Yes"){$subject.="Video Editing/Production"}
  if($email_details['wc']=="Yes"){$subject.="Web Consulting"}
  $message = implode(" | ",$email_details);
  $headers = "Reply-to: $email_details['inputEmail']";

  $mailResult = mail ( $to , $subject , $message , $headers );
}
?>
