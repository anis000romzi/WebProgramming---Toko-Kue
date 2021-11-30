<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Terima Kasih!!</title>
</head>
<body>	
	<?php
   	session_start();
	date_default_timezone_set('Asia/jakarta');
	$date = date('Y-m-d, H:i:s');
	?>

	<h1>TERIMA KASIH</h1><br><br>
	Terima kasih telah berbelanja di toko kue kami!<br>
	Kue pesanan anda akan dikirim segera.<br>
	<hr><br>
   	Pilihan kue : <?php echo $_SESSION['nama']; ?><br>
   	Jumlah : <?php echo $_SESSION['jumlah']; ?><br>
   	Ukuran : <?php echo $_SESSION['opsi']; ?><br>
   	Catatan tambahan : <?php echo $_SESSION['note']; ?><br>
   	Harga : <?php echo $_SESSION['total']; ?><br>
	Tanggal : <?php echo $date; ?><br><br>
	<a href ="../Home.html">HOME</a>
</body>
</html>