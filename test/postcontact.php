<?php
include 'conn.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];
$sql="insert into info(name,email,phone,msg) value('$name','$email','$phone','$msg');";
if(mysqli_query($conn,$sql))
{
	echo "<script>
alert('success');
window.location.href='contact.html';
</script>";
}
else
{
	echo "<script>
alert('Invalid');
window.location.href='contact.html';
</script>";
}
?>