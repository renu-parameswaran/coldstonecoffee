<?php 
2	  if(isset($_POST['submit'])){ 
3	  if(isset($_GET['go'])){ 
4	  if(preg_match("/[A-Z  | a-z]+/", $_POST['name'])){ 
5	  $name=$_POST['name']; 
6	  //connect  to the database 
7	  $db=mysql_connect  ("servername", "username",  "password") or die ('I cannot connect to the database  because: ' . mysql_error()); 
8	  //-select  the database to use 
9	  $mydb=mysql_select_db("yourDatabase"); 
10	  //-query  the database table 
11	  $sql="SELECT ID, FirstName, LastName FROM Contacts WHERE  FirstName LIKE '%" . $name . "%' OR LastName LIKE '%" . $name  ."%'"; 
12	  } 
13	  else{ 
14	  echo  "<p>Please enter a search query</p>"; 
15	  } 
	  } 
	  } 
	?> 

<!DOCTYPE html>
<html>
<?php
$connect=mysqli_connect('localhost','root',"",'user');

$XX = "No Record Found";
$query = mysql_query("SELECT * FROM user WHERE $method LIKE '%$search%' LIMIT 0, 30 ");
while ($row = mysql_fetch_array($query))
{
$variable1=$row["row_name1"];
$variable2=$row["row_name2"];
$variable3=$row["row_name3"];
$variable4=$row["row_name4"];
print ("this is for $variable1, and this print the variable2 end so on...");
}

//below this is the function for no record!!
if (!$variable1)
{
print ("$XX");
}






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






if(isset($_GET['id'])){ 
$contactid=$_GET['id']; 
//connect  to the database 
	$db=mysql_connect  ("servername", "username",  "password") or die ('I cannot connect to the database  because: ' . mysql_error()); 
//-select  the database to use 
	$mydb=mysql_select_db("yourDatabase"); 
	//-query  the database table 
	$sql="SELECT  * FROM Contacts WHERE ID=" . $contactid; 
	//-run  the query against the mysql query function 
	$result=mysql_query($sql); 
	//-create  while loop and loop through result set 
	while($row=mysql_fetch_array($result)){ 
	  $FirstName =$row['FirstName']; 
	            $LastName=$row['LastName']; 
	            $PhoneNumber=$row['PhoneNumber']; 
	            $Email=$row['Email']; 
//-display  the result of the array 
	echo  "<ul>\n"; 
	echo  "<li>" . $FirstName . " " . $LastName .  "</li>\n"; 
echo  "<li>" . $PhoneNumber . "</li>\n"; 
	echo  "<li>" . "<a href=mailto:" . $Email .  ">" . $Email . "</a></li>\n"; 
	echo  "</ul>"; 
	} 
} 