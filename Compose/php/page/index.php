<?php 

$conn = mysqli_connect('mysql_db', 'root','my_pass');
if (!$conn) {
   exit('Nie uzyskano polaczenia: '.mysqli_connect_error());
}
echo 'Great work, proxy works correctly!';
die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  Nie udalo sie!
</body>
</html>
