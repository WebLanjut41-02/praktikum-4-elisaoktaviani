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
	<form action="<?php echo base_url()?>donasi_c/data_donasi">
		<div class="container">
	<div class="row">
		<div class="row mt-3"></div>
		<div class="col-md-6">
			<ul class="list-group">
</ul>
		
	<h2>Selamat datang di menu donasi zakat, infaq dan shadaqah</h2>
	<h3>Amazing Zakat</h3>
	<p>Kewajiban membayar zakat fitrah telah diungkapkan kewajibannya menurut hadist dari Ibnu Umar radliyallah 'anhuma, ia berkata, Rasulullah shallallahu 'alaihi wasallam mewajibkan zakat fitrah sebesar satu sha' kurma atau satu sha' gandum atas orang merdeka dan budak, laki-laki dan perempuan, besar maupun kecil dari kaum muslimin. Dan beliau memerintahkan agar dikeluarkan sebelum orang-orang keluar menunaikan shalat ('Iedul Fitri)." (HR. Bukhari dan Muslim). Tadi adalah hadist kewajiban membayar zakat fitrah bagi kita umat Islam.</p>

	<p>
	Ramadhan tidak lama lagi akan berakhir dan kita masih dalam pertengahan Ramadhan ini dan semoga pula kita bisa memanfaatkan sepertiga akhir ramadhan ini dengan sebaik-baiknya dengan amalan-amalan ibadah baik itu wajib maupun yang sunnah. Dan akhir ramadhan ini kita umat Islam juga mempunyai kewajiban membayar zakat fitrah pada akhir Ramadhan dan sebelum menunaikan shalat Ied.
	Tentunya bila Allah Ta'ala memberikan syariat ada hikmah serta keutamaan dari syariat tersebut. Termasuk juga dalam hal zakat ini. Ada beberapa hikmah keutamaan zakat fitrah bagi kita yang menjalankannya. Salah satu hikmah zakat fitrah adalah bahwasannya zakat fitrah adalah untuk mensucikan diri. Allah Ta'ala berfirman :"“Sesungguhnya beruntunglah orang yang membersihkan diri." (QS. Al-A’la : 14) dan semoga dengan zakat fitrah yang kita tunaikan nanti dan sekarang akan benar-benar mensucikan kita. Allahuma amiin.</p>

	<p>
	Ada beberapa hal yang berkenaan dengan waktu membayar zakat fitrah. Waktu utama dalam melaksanakan serta membayar zakat fitrah ini yaitu pada saat mulai terbenamnya matahari pada saat malam Iedul Fitri sampai dengan sebelum ditunaikannya shalat Ied. Utamanya juga pada waktu antara shalat fajar pada hari Ied sampai sebelum shalat Ied. Dan bila kita akan membayar sebelum itu pun dalam artian beberapa hari sebelum hari raya juga diperbolehkan serta tidak dilarang.
	</p>
	<br>
	<button class="btn btn-primary">Ajukan Donasi</button></a>

	<?php
	$no = $this->uri->segment('3') + 1;
	foreach($id_donasi as $id_donasi){}
	?>
	
</form>

	<?php
	echo $this->pagination->create_links();
	?>

</body>
</html>