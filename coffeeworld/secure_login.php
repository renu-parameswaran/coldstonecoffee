

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
                        <a href="Menu.html">Menu</a>
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
                        <a href="index1.html">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 </nav>
    
<?php
  extract($_POST);
  if( !$USERNAME || !$PASSWORD)
  {
	  fieldsBlank();
	  die();
  }
  if(isset($NewUser))
  {
	  if(!($file= fopen("password.txt","a"))){
		  print("<title>Error</title></head><body> Could not open password file</body>");
		  die();
	  }fputs($file,"$USENAME,$PASSWORD\n");
	  userAdded($USERNAME);
  }
  else
  {
	  if(!($file = fopen("password.txt","r"))){
		  print("<title>Error</title></head><body> Could not open password file </body>");
		  die();
	  }
  }
  
  $userVerified = 0;
  while( !feof($file)&&!$userVerified){
	  $line = fgets($file,255);
	  $line =chop($line);
	  $field=split(",",$line,2);
	  if($USERNAME= $field[0]){
		  $userVerified=1;
		  if(checkPassword($PASSWORD,$field)==true)
			  echo "<script type='text/javascript'> document.location = 'table.php'; </script>";
		  else
			  wrongPassword();
	  }
  }
  fclose($file);
  if(!$userVerified)
	  accessDenied();
  
  
  function checkPassword($userpassword,$filedata)
  {
	  if($userpassword==$filedata[1])
		  return true;
	  else
		  return false;
  }
  function userAdded($name)
  {
	  print("<title>Thank You</title></head><body style=\"font-family:arial;font-size:1px color:blue\">
	  <strong> You have been added to the user list,$name<br/>Enjoy the Site</strong>");
	  
  }
  
  
  
  function wrongPassword()
  {
	  print("<title>Thank You</title></head><body style=\"font-family:arial;font-size:1px color:red\">
	  <strong> You entered an invalid password<br/>access denied</strong>");
	  
  }
  function accessdenied()
  {
	  print("<title>Access Denied</title></head><body style=\"font-family:arial;font-size:1px color:red\">
	  <strong> You were denied access to this server<br/></strong>");
	  

  }
  function fieldsBlank()
  {
	  print("<title>Access Denied</title></head><body style=\"font-family:arial;font-size:1px color:red\">
	  <strong> Please fill in all form fields<br/></strong>");
	  
  }
  
  ?>
  <footer>
        <div class="container">
            <div class="row">
                 <div class="col-lg-12 text-center">
                    <p>Copyright © www.renup.org 2017</p>
                    <p>Website developed by- Renu Parameswaran</p>
                    <a href="https://www.facebook.com" target="_blank">
                    <i class="fa fa-facebook-square" style="font-size:36px;color:#3b5998">
                    </i>
                    </a>
                    <a href="https://www.linkedin.com" target="_blank">
                    <i class="fa fa-linkedin-square" style="font-size:36px;color:#0077B5">
                    </i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



  </body>
  </html>
  
  
  
  
  