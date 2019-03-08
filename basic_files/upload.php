<?php 
echo "<pre>";

print_r($_FILES['file_upload']);

echo "</pre>";

 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>
 	</title>
 </head>
 <body>
 

<form action="upload.php" enctype ="multipart/form-data" method="post">
	
<input type="file" name="file_upload"><br>

<input type="submit" name="submit">





</form>



 </body>
 </html>