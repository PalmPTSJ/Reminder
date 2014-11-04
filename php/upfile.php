<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
// $target_file is the path to store file (ex. uploads/myFile.txt)
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
// move the tmp_name file (temporary file) to the path ($target_file)
?>