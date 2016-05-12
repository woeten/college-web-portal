<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FEEDBACK</title>
</head>
<body>
	<form action="" method="POST">
		name<input type="text" name="name"><br><br>
		email id<input type="email" name="email"><br><br>
		msg<input type="textarea" name="msg"><br><br>
		<input type="submit" name="submit" value="send"><br>
	</form>
	<?php
		$name=($_POST['name']);
		$to='projusp@gmail.com';
		$email=($_POST['email']);
		$msg=($_POST['msg']);
		if(isset($_POST['submit']))
		{
			$ret=mail($to,$name,$msg,$email);
		}
		if ($ret==true) {
			echo "yo";
		}
			else{
				echo "haha";
			}	
	?>
</body>
</html>