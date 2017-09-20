<?php
function AddSubscriber($email) {
    
    $servername = "localhost";
    $username = "gf310572_user";
    $password = "K5C\^M*f*k'Rgs^}";
    $databasename = "gf310572_gfr";
    $query = "INSERT INTO Newsletters (Id, Email, CreatedOn) VALUES ('2', '".$email."', GETDATE())";
    
    $conn = mysqli_connect($servername, $username, $password, $databasename);
    mysqli_query($query) or die(mysqli_error($db));
    
    mysqli_close($conn);

    
    //$myfile = fopen('newsletter.txt', "a") or die("Unable to open file!");
    //$txt = $email;
    //fwrite($myfile, $txt . "\n");
    //fclose($myfile);
}
function IsDuplicates($email) {
    $valid = false;
    $servername = "localhost";
    $username = "gf310572_user";
    $password = "K5C\^M*f*k'Rgs^}";
    $databasename = "gf310572_gfr";
    $query = "SELECT Email FROM Newsletters WHERE Email = '".$email."'";
    
    $conn = mysqli_connect($servername, $username, $password, $databasename);
    $result = $conn->query($query);
    
    mysqli_close($conn);
    if ($result->num_rows > 0) { return true; }

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
