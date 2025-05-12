<?php
$conn =mysqli_connect("127.0.0.1:3307","root","","contacts_db");

$result=mysqli_query($conn, "SELECT * FROM contacts ORDER BY id DESC");

echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
echo "<li>{$row['fullname']} - {$row['PHONE']}</li>";}
echo "</ul>";
mysqli_close($conn);

?>
