


<? php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "a";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
echo "Connected successfully";

	$name 			=	$_POST['name'];
	$roll 			=	$_POST['roll'];
	$address		=	$_POST['address'];
	$mother_name 	=	$_POST['mother_name'];
	$father_name 	=	$_POST['father_name'];	
	$phone			=	$_POST['phone'];
	$email			=	$_POST['email'];
	$session		=	$_POST['session'];

$sql = "INSERT INTO suma(name,roll,address,mother_name,father_name,phone,email,session)
VALUES (		'$name ', 
				'$roll', 
				'$address', 	
				'$mother_name',
				'$father_name',
				'$phone',
				'$email	',
				'$session'
				
				)";
}

?>



	