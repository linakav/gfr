<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
$data =  json_decode(file_get_contents('php://input'),true);
$username = $data["username"];
$password = $data["password"];

if ($username == "gfrUser" && $password == "uWsUcWyh") {
    setcookie('authenticated', 'authenticated', 0, '/', FALSE, FALSE);
    echo 'true';
}
 else {
    echo 'false';
}
}