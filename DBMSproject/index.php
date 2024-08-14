<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Hospital Management System</title>
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
		<div class="container">
			<h2>Patient Registration Form</h2>
			<form action="register.php" method="POST">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required />

				<label for="age">Age:</label>
				<input type="number" id="age" name="age" required />

				<label for="gender">Gender:</label>
				<select id="gender" name="gender" required>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
					<option value="Other">Other</option>
				</select>

				<label for="disease">Disease:</label>
				<input type="text" id="disease" name="disease" required />

				<input type="submit" value="Register" />
			</form>
		</div>
	</body>
</html>
