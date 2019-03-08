<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="">
 <title></title>
</head>
<body>
 <?php 
 echo form_open('login/cekdata');?>
 <center>
 	<form>
 		<table>
 			<h2>Selamat Datang di Halaman Log in</h2>
 			<tr>
 				<td>Username</td>
 				<td>:</td>
 				<td><?php echo form_input('username'); ?></td>
 			</tr>
 			<tr>
 				<td>Password</td>
 				<td>:</td>
 				<td><?php echo form_password('password'); ?></td>
 			</tr>
 		</table>

 <?php echo form_submit('submit','Log In');
 echo form_close();?>
</form>
</center>
 
</body>
</html>