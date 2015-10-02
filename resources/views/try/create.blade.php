
	<html>
	<head>
		<title>A Simple Form</title>
	</head>
	<body>
		<center>
			<h3>PLEASE KINDLY FILL IN THE FORM BELOW CORRECTLY</h3>
		<form action="./connect.php" method="POST" align>
		FIRST NAME <input name="Fname" type="text"/><br><br>
		LAST NAME <input name="Lname" type="text"/><br><br>
		ADDRESS: <textarea name="Addd" rows="4" cols="25"></textarea><br><br>
		AGE: <input name="Age" type="number"/><br><br>
		GENDER: <input type="radio" name="sex" value="Male"> Male
			<input type="radio" name="sex" value="Female"> Female<br><br>
		<input type="submit" value="SUBMIT" name="sub"/>
		<input type="reset" value="Start Over">
	</form></center>



	</body>
	</html>
