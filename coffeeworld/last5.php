<?php

function displayproducts()
{

include "connection.php";

if(isset($_COOKIE['firstprod']))
{
    
    //connect to table and get the products detaiks of firstProd
$sql = "SELECT * FROM products where ID = ".$_COOKIE['firstprod'];
$query = mysql_query($sql) or die(mysql_error());
while ($row = mysql_fetch_array($query)){

 echo '                   <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="productpage1.php?id='.$row["Id"].'"><img src="'.$row["Image"].'" alt="Image"></a>
                            <div class="caption">
                                <h4><a href="productpage1.php?id='.$row["Id"].'">'.$row["Title"].'</a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>';



}}

if(isset($_COOKIE['secondprod']))
{

    //connect to table and get the products detaiks of firstProd
$sql = "SELECT * FROM products where ID = ".$_COOKIE['secondprod'];
$query = mysql_query($sql) or die(mysql_error());
while ($row = mysql_fetch_array($query)){

 echo '                   <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="productpage1.php?id='.$row["Id"].'"><img src="'.$row["Image"].'" alt="Image"></a>
                            <div class="caption">
                                <h4><a href="productpage1.php?id='.$row["Id"].'">'.$row["Title"].'</a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>';



}}

if(isset($_COOKIE['thirdprod']))
{
    $sql = "SELECT * FROM products where ID = ".$_COOKIE['thirdprod'];
    
$query = mysql_query($sql) or die(mysql_error());
while ($row = mysql_fetch_array($query)){

 echo '                   <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="productpage1.php?id='.$row["Id"].'"><img src="'.$row["Image"].'" alt="Image"></a>
                            <div class="caption">
                                <h4><a href="productpage1.php?id='.$row["Id"].'">'.$row["Title"].'</a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>';



}}
if(isset($_COOKIE['fourthprod']))
{
     $sql = "SELECT * FROM products where ID = ".$_COOKIE['fourthprod'];
$query = mysql_query($sql) or die(mysql_error());
while ($row = mysql_fetch_array($query)){

 echo '                   <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="productpage1.php?id='.$row["Id"].'"><img src="'.$row["Image"].'" alt="Image"></a>
                            <div class="caption">
                                <h4><a href="productpage1.php?id='.$row["Id"].'">'.$row["Title"].'</a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>';



}}
if(isset($_COOKIE['fifthprod']))
{
     $sql = "SELECT * FROM products where ID = ".$_COOKIE['fifthprod'];
$query = mysql_query($sql) or die(mysql_error());
while ($row = mysql_fetch_array($query)){

 echo '                   <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <a href="productpage1.php?id='.$row["Id"].'"><img src="'.$row["Image"].'" alt="Image"></a>
                            <div class="caption">
                                <h4><a href="productpage1.php?id='.$row["Id"].'">'.$row["Title"].'</a>
                                </h4>
                                
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>';



}}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The one stop for coffee Lovers</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap1.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link rel= "stylesheet" type ="text/css" href = "css/dropdown.css">

    
    <!-- Fonts -->
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

    <div class="brand">Cold Stone Coffee</div>
    <div class="address-bar">485 Hilton Valley | Oakland, CA 95345 | 408.564.3664</div>
   

                        

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Cold Stone Coffee</a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="products_10.html">Products</a>
                    </li>
                    <li>
                        <a href="News.html">News</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="contact_details.php">Contact</a>
                    </li>
                     <li>
                        <a href="index1.html">Login</a>
                    </li>
                    <li>
                   <div class="dropdown">
<button onclick="myFunction()" class="dropbtn" class="collapse navbar-collapse">USERS</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="index_form.html">Create</a>
    <a href="search.html">Query</a>
    <a href="displayform.php">View Users</a>
  </div>
</div>
</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 </nav>

 <script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


</script>


    <div class="container">

          

        <div class="row">

            <div class="col-md-3">
                
                <div class="list-group">
                    <p class="list-group-item"><strong>Cookies</strong></p>
                    <a href="last5.php" class="list-group-item">Last visited items</a>
                    <a href="most5.php" class="list-group-item">Most visited items</a>
                </div>
            </div>
        </div>

		<div class="row">
			<?php displayproducts()?>
		</div>        



        </body>
        </html>





