
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
	<form action="<?php echo base_url('komentar/input')?>" method="POST">
         <center>
            KOMENTAR:<br>
            <textarea name="komentar" rows="5" cols="100"></textarea><br>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
            <?php
            echo "<br>.<br>.<br>";
					if (isset($input))
						echo $input;
						echo"<br>";
						
					?>
</center>
</div>
	</div>
</div>
</body>
</html>

		