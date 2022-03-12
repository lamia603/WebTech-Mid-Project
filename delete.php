<?php 
	include('header.php');

	$id = $_GET['id'];

	$file = fopen('../models/reg.txt', 'r');

	while (!feof($file)) {
		$user = fgets($file);
		$userArray = explode('|', $user);
		if($userArray[0] == $id){
			break;
		}
	}
?>

<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<a href="userlist.php"> Back </a> |
	<a href="../controllers/logout.php"> logout </a>
	<br><br>

	<form method="POST" action="../controllers/deletecheck.php">
		<input type="hidden" name="id" value="<?=$id?>"/>
		
		<fieldset>
			<legend>Delete User</legend>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?=$userArray[1]?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?=$userArray[2]?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?=$userArray[3]?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="delete" value="Delete"></td>
				<td><input type="submit" name="back" value="Back"></td>
			
			</tr>


		</table>
		</fieldset>
	</form>
</body>
</html>