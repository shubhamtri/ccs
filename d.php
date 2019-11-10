<?php 
include("a.php");
error_reporting(0);
if($_POST['submit'])
{
	if($name!="" && $age!="" && $date!="" && $gender!="" && $Medical!="" && $Medical1!=""){

	}
	else{
		echo "All Fields Are Required";
	}
}

$name=$_POST['name'];
$age=$_POST['Age'];
$date=$_POST['Date'];
$gender=$_POST['Gender'];
$Medical=$_POST['Medical'];
$Medical1=$_POST['Medication'];
$query= "INSERT INTO ABHI VALUES ('$name','$age','$date','$gender','$Medical','$Medical1')";
$data=mysqli_query($conn,$query);

if($data)
{
	echo "your data has been submitted succesfully";

}
  ?>