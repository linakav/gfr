<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
$data =  json_decode($HTTP_RAW_POST_DATA,true);
$username = $data["username"];
$password = $data["password"];

if ($username == "gfrUser" && $password == "uWsUcWyh") {
    echo 'true';
    setcookie('authenticated', 'authenticated', 0, '/', FALSE, FALSE);
}
 else {
    echo 'false';
}
}