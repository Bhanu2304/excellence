<?php  $db = mysqli_connect('localhost','root','','crud_application');

$id= $_POST['delete_id'];
$query= mysqli_query($db,"DELETE FROM user_info WHERE id='$id' ");
?>