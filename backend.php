<?php
$PersonsID=$_POST['PersonsID'];
$lastname=$_POST['lastname'];
$firstname=$_POST['firstname'];
$address=$_POST['address'];
$city=$_POST['city'];
$con=@mysqli_connect("localhost","root","123456")or die(mysqli_error($con));
echo "connected to database";
$db=@mysqli_select_db($con,"KRISH")or die(mysqli_error());
echo "Selected database";
$str="INSERT INTO Persons VALUES($PersonsID,'$lstname','$firstname','$address','$city')";
if ($con->multi_query($str) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $str . "<br>" . $con->error;
}
$res=@mysqli_query($str)or die(mysqli_error($con));
if($res>0)
{
	echo "Record created";
}

?>
