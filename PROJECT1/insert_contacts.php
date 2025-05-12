<?php
$conn = mysqli_connect("127.0.0.1:3307","root","","contacts_db");
if(!$conn) {
   die("Σφαλμα συνδεσης:" .mysqli_connect_error());
   }
$fullname =$_POST['fullname'];
$phone= $_POST['phone'];

$sql = "INSERT INTO contacts(fullname,phone) VALUES('$fullname','$phone')";
mysqli_query($conn,$sql);

mysqli_close($conn);
header("location: form_contacts.html");
exit;
?>