<?php



$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$passwords = $_POST['passwords'];
$composting = filter_input(INPUT_POST, "composting", FILTER_VALIDATE_BOOLEAN);



$host ='localhost:3306';
$dbname = 'elacompost';
$username = 'gerardo';
$password = 'bigtab';


$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}


$sql = "INSERT INTO users (first_name, last_name, email, password, composting) VALUES (?, ?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) { 
    die(mysqli_error($conn));
}


mysqli_stmt_bind_param($stmt,"ssssi", $first_name, $last_name, $email, $passwords, $composting);


mysqli_stmt_execute($stmt);

echo "Record Saved"




?>






