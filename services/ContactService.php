<?php

function AddContact($fname,$lname,$email,$phone,$message) {
    $myfile = fopen("./contact.txt", "a") or die("Unable to open file!");
    $txt = $fname . '|' . $lname . '|' . $email . '|' . $phone . '|' . $message;
    fwrite($myfile, $txt . "\n\nend\n\n");
    fclose($myfile);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
$data =  json_decode($HTTP_RAW_POST_DATA,true);

$fname = $data["firstName"];
$lname = $data["lastName"];
$email = $data["email"];
$phone = $data["phone"];
$message = $data["message"];

AddContact($fname,$lname,$email,$phone,$message);
echo 'true';
}
