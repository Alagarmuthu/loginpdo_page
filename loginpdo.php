<html>
<head>
	<title>login pdo</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
	<h2>LOGIN PDO</h2>
	<form method="post" action="savepdo.php">
		<label class="form label">sname</label>
		<input type="text" class="form control" name="sname" required value=""><br>
		<label class="form label">password</label>
		<input type="text" class="form control" name="pwd" required value=""><br>

		<input type="submit" class="btn-btn-success" name="submit" value="submit">
		<input type="reset" class="btn-btn-dager" name="reset" value="reset">
		
	</form>
</body>
</html>