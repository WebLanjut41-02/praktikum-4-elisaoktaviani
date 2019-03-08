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
  <form method="POST" action="<?php echo base_url()?>donasi_c/inputan">
    <table>
      <h2>Selamat Datang, Silahkan masukkan donasi yang ingin disumbangkan</h2>
      <tr>
        <td>Id donasi</td>
        <td>:</td>
        <td><input class="form-control" type="text" name="id_donasi"></td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><input class="form-control" type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td><input class="form-control" type="text" name="email"></td>
      </tr>
      <tr>
        <td>No Hp</td>
        <td>:</td>
        <td><input class="form-control" type="number" name="nohp"></td>
      </tr>

      <tr>
        <td>Zakat</td>
        <td>:</td>
        <td><input class="form-control" type="text" name="zakat"></td>
      </tr>

      <tr>
        <td>Infaq</td>
        <td>:</td>
        <td><input class="form-control" type="text" name="infaq"></td>
      </tr>

      <tr>
        <td>Shadaqah</td>
        <td>:</td>
        <td><input class="form-control" type="text" name="shadaqah"></td>
      </tr>

      <tr>
        <td>Jumlah Donasi</td>
        <td>:</td>
        <td><input class="form-control" type="number" name="donasi"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" class="btn btn-primary" name="submit" value="ajukan donasi"></td>
        <td></td>
      </tr>
    </table>
</form>
</body>
</html>