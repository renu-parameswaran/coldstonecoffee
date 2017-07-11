<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registered Users</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel= "stylesheet" type ="text/css" href = "css/style_form.css">
    <link rel= "stylesheet" type ="text/css" href = "css/dropdown.css">

  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>



<div class="table">
<table width="600" border="1">

<?php

include "connection.php";


$sql = "SELECT * FROM users"; 

$query = mysql_query($sql) or die(mysql_error());




print("<table width ='600' cellpadding='5' cellspace ='5'>
<tr>
   <td> <strong> First Name  </strong></td>
   <td> <strong> Last Name </strong></td>
   <td> <strong> Email </strong></td>
   <td> <strong> Home Address </strong></td>
   <td> <strong> Home Phone </strong></td>
   <td> <strong> Cell Phone </strong></td>
</tr>");

while ($row = mysql_fetch_array($query)){
echo"
<tr>
	<td> ". $row['Firstname']."</td>
	<td> ". $row['Lastname']." </td>
	<td>".  $row['Email']."</td>
	<td>".  $row['Homeaddress']."</td>
	<td>". $row['Homephone']."</td>
	<td>". $row['Cellphone']." </td>
</tr>";
	
}
echo "</table>";

 ?>





</table>
</body>
</html>