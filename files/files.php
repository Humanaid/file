<!DOCTYPE html>
<html>
<head>
	<title>Form with File Method</title>
</head>
<body>
	<form action="capturefile.php" method="Post" enctype="multipart/form-data">
		<p>Enter your Name : <input type="text" name="name"></p>
		<p>Enter your Email : <input type="email" name="email"> </p>
		<p>Upload your File : <input type="file" name="image"></p>
		<p>Enter your Password : <input type="password" name="password"></p>
		<p> <input type="submit" value="submit"></p>
	</form>


</body>
</html>