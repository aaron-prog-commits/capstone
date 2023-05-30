<?php
// Database connection details
$servername = 'localhost';
$username = 'root';
$password = '';
$database_name = 'capstone';

// Create a connection to the database
$connection = mysqli_connect($servername, $username, $password, $database_name);

// Check the connection
if (mysqli_connect_errno()) {
  die("Connection Failed: " . mysqli_connect_error());
}

// Retrieve form data
if(isset($_POST['save']))
{
$LRN = $_POST['LRN'];
$date = $_POST['date'];
$name = $_POST['name'];
$section = $_POST['section'];
$late = $_POST['late'];
$offenseNumber = $_POST['offenseNumber'];
$absent = $_POST['absent'];
$dateAbsence = $_POST['dateAbsence'];
$reasonAbsence = $_POST['reasonAbsence'];


$sql_query = "INSERT INTO admissionslip (LRN, date, name, section, late, offenseNumber, absent, dateAbsence, reasonAbsence) VALUES ('$LRN', '$date','$name', '$section', '$late', '$offenseNumber', '$absent', '$dateAbsence', '$reasonAbsence')";

$rs = mysqli_query($connection, $sql_query);

}

// Check if the insertion was successful
if($rs)
{
	echo "Contact Records Inserted";

} 

else 
{
  echo "Error inserting data: " . "". mysqli_error($connection);
}


// Close the database connection
mysqli_close($connection);

// After the successful data insertion
header("Location: success.php");
exit; // Make sure to exit the script after the redirect

?>
