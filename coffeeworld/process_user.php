<!DOCTYPE html>
<html>
<?php
$connect=mysqli_connect('iamvivek.ipagemysql.com','renu',"Renu@1234",'users');


 
// create a variable
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$Email=$_POST['Email'];
$Homeaddress=$_POST['Homeaddress'];
$Homephone=$_POST['Homephone'];
$Cellphone=$_POST['Cellphone'];
 
//Execute the query
 
mysqli_query($connect,"INSERT INTO users(Firstname,Lastname,Email,Homeaddress,Homephone,Cellphone) VALUES('$Firstname','$Lastname','$Email','$Homeaddress','$Homephone','$Cellphone')");

if(mysqli_affected_rows($connect) > 0){
	echo "<script type=\"text/javascript\">".
        "alert('success');".
        "</script>";
	echo "<script type='text/javascript'> document.location = 'success.html'; </script>";
	
} 
else {
	echo "User NOT Added<br />";
	 echo "mysqli_error ($connect)";
}

?>

</html>