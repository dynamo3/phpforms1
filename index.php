<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');
	//header("Location: success.html");
	//exit;
?>
<?php
	$error_array = array();
	$error_string = "";
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if($_POST['first_name'] == '') {
			array_push($error_array, 'Please enter a first name');
		}

		if($_POST['last_name'] == '') {
			array_push($error_array, 'Please enter a last name');
		}

		$error = "";
		if(count($error_array) > 0) {
			foreach($error_array as $e) {
				$error_string = $error_string . $e . "<br>"; 
			}
		}
	}


?>



<html lang="en">
<head>
	<title>Hello PHP Forms</title>
</head>
<body>
	<div class="error"><?php print_r($error_string); ?></div>
	<form action="" method="POST">
		FName: <input type="text" name="first_name" value=""><br>
		LName: <input type="text" name="last_name" value=""><br>
		Email: <input type="email" name="email"><br>
		<button type="submit">Let's Go!</button>
	</form>
</body>
</html>