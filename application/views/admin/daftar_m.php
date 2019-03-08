<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

<body>
	<div class="container">
	<div class="row">
		<div class="row mt-3"></div>
		<div class="col-md-6">
<center>
	<h1>DAFTAR MASJID</h1>
	<form action="<?php  echo base_url()?>daftar_m/prosesinput" method="POST">
		<table>
			<tr>
				<td>Nama Masjid</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="nama_m"></td>
			</tr>
			<tr>
				<td>Alamat Masjid</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="a_masjid"></td>
			</tr>
			<tr>
				<td>Tahun Berdiri</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="t_berdiri"></td>
			</tr>
			<tr>
				<td>Jumlah Tampungan</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="j_tampungan"></td>
			</tr>
			<tr>
				<td>Status Tanah</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="s_tanah"></td>
			</tr>
			<tr>
				<td>Luas Tanah</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="l_tanah"></td>
			</tr>
			<tr>
				<td>Luas Bangunan</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="l_bangunan"></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" name="submit" value="submit"></td>
				<td></td>
			</tr>
		
		</table>
		
	</form>
</center>
</body>
</html>