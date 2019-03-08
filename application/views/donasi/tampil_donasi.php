<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
</head>
<body>
<center>
	<h4>Donasi yang telah diinputkan</h4>
	<table class="table table-striped" border="2">
		<tr>
			<td>Nama Lengkap</td>
			<td><?php echo $nama;?></td>
		</tr>
		<tr>
			<td>Alamat E-mail</td>
			<td><?php echo $email;?></td>
		</tr>
		<tr>
			<td>Nomor Telepon</td>
			<td><?php echo $nohp;?></td>
		</tr>
		<tr>
			<td>Donasi Yang disumbangkan</td>
			<td><?php echo $donasi?></td>
		</tr>
	</table>
</center>
</body>
</html>