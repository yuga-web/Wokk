<!DOCTYPE html>
<html>
<head>
	<title>myform</title>
</head>
	<body>
			<form action="connect.php" method="POST">
				<table >
					<tbody>
						<tr>
							<th>First Name</th>
							<td><input type="txt" placeholder="name" name="name"></td>
						</tr>					
						<tr>
							<th>Last Name</th>
							<td><input type="txt" placeholder="username" name="username"></td>
						</tr>
						<tr>
							<th>Gender</th>
							<td>
								<input type="radio" name="Gender" value="Male">Male
								<input type="radio" name="Gender" value="Female">Female
								<input type="radio" name="Gender" value="Other">Other
							</td>
						</tr>
						<tr>
							<th>Email</th>
							<td><input type="EmailAddress" placeholder="  @gmail.com" name="email"><td>
						</tr>
						<tr>
							<th>Password</th>
							<td><input type="password" placeholder="**********" name="pass"></td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="submit" value="submit">
							</td>
						</tr>
					</tbody>
				</table>
			</form>
	</body>
</html>