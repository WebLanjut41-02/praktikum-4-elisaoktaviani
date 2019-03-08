<!DOCTYPE html>
<html>
<head>
 <meta>
 <title></title>
</head>
<body>
<?php 
echo form_open('login/cek');
?>
<center>
	<h1>LOGIN</h1>
	<form action= "<?php  echo base_url()?>/login/cek" method= "POST">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><?php echo form_input('username');?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><?php echo form_password('password'); ?></td>
			</tr>
		</table>
		<?php  echo form_submit('submit','Log In');
 echo form_close();?>
	</form>
</center>
</body>
</html>