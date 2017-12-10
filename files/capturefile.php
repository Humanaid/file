<?php

echo "Your Name : " .$_POST['name'];
echo "<br>";
echo "Your Email : " .$_POST['email'];
echo "<pre>";
echo "<br><br>";
echo time();
echo "<br><br>";
echo $_FILES['image']['name'];
echo "<br><br>";
var_dump($_FILES);
echo "<br><br>";
$filename = time().$_FILES['image']['name'];
$tmp_file = $_FILES['image']['tmp_name'];
$current_location = 'images/'.$filename; 
move_uploaded_file($tmp_file, $current_location);
echo "Your Password : " .$_POST['password'];
echo "<br>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
<img src="<?php echo $current_location ; ?>">
</body>
</html>