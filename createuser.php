<!DOCTYPE html>
<?php
include 'config.php';
?>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="createuser.php" method="post">
        <h2>Create User</h2>
        <label>User Name  : </lable><input type  = text name = txtnewuser placeholder = "Enter User Name ..."><br>
        <label>PassWord   : </lable><input type  = password name = txtnewpassword placeholder = "Enter Password ..."><br>
        <label>Name   : </lable><input type  = text name = txtname placeholder = "Enter Name ..."><br>	

        <?php 
	$usrname = $_POST['txtnewuser'];
	$upassword = $_POST['txtnewpassword'];
	$uname = $_POST['txtname'];
	if(isset($_POST['btnregister']))
{
	$sql = "insert into users(username, password, name) values('$usrname', '$upassword','$uname')";	 
                if(mysqli_query($conn, $sql))
	   echo " User is Created!";
	else
	   echo "User is not Created!";
}
         ?>

	 <button  type=reset> Cancel</button>
       	 <button  type=submit name = btnregister>Register </button > 
       
     </form>
</body>
</html>