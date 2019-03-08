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
<center>
	<h4>Telah di daftarkan, pemberitahuan selanjutnya akan kami informasikan melalui email</h4>
	<table class="table table-striped" border="2">
		<tr>
			<td>Nama Masjid</td>
			<td><?php echo $nama_m;?></td>
		</tr>
		<tr>
			<td>Alamat Masjid</td>
			<td><?php echo $a_masjid;?></td>
		</tr>
		<tr>
			<td>Tahun Berdiri</td>
			<td><?php echo $t_berdiri;?></td>
		</tr>
		<tr>
			<td>Jumlah Tampungan</td>
			<td><?php echo $j_tampungan?></td>
		</tr>
		<tr>
			<td>Status Tanah</td>
			<td><?php echo $s_tanah;?></td>
		</tr>
		<tr>
			<td>Luas Tanah</td>
			<td><?php echo $l_tanah;?></td>
		</tr>
		<tr>
			<td>Luas Bangunan</td>
			<td><?php echo $l_bangunan;?></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><?php echo $email?></td>
		</tr>
	</table>
</center>
</body>
</html>