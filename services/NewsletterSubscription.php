<?php

function AddSubscriber($email) {
    $myfile = fopen('newsletter.txt', "a") or die("Unable to open file!");
    $txt = $email;
    fwrite($myfile, $txt . "\n");
    fclose($myfile);
}
function IsDuplicates($email) {
    
    $handle = fopen('newsletter.txt', 'r');
    $valid = false; // init as false
    while (($buffer = fgets($handle)) !== false) {
        if (strpos($buffer, $email) !== false) {
            $valid = TRUE;
            break; // Once you find the string, you should break out the loop.
        }      
    }
    fclose($handle);
    
    return $valid;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
$data =  json_decode($HTTP_RAW_POST_DATA,true);
$email = $data["email"];

if (!IsDuplicates($email)) {
    AddSubscriber($email);
    echo 'false';
}
 else {
    echo 'true';
}
}
