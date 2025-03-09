<!-- 24.Write a PHP script to upload the file to the server through HTML Page -->

<?php
$target_dir = "C:/Bitnami/wappstack-7.1.18-1/apache2/htdocs/Php/uploads/";
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
echo "File uploaded successfully!";
} else{
echo "Sorry, file not uploaded, please try again!";
}
?>