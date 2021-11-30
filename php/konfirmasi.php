<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Konfirmasi</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
	   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	<body>
		<!--
		<div class="container-fluid p-4 bg-success text-white">
            <h2>Toko kue kreatif</h2>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
		-->
		<?php
		session_start();
		if(isset($_POST['postharga'])){
			$_SESSION['harga']=$_POST['postharga'];
		}
		if(isset($_POST['postnama'])){
			$_SESSION['nama']=$_POST['postnama'];
		}
		$_SESSION['jumlah']=(int)$_POST['jumlah'];
		$_SESSION['note']=$_POST['note'];
		$_SESSION['opsi']=$_POST['opsi'];

		if ($_SESSION['opsi'] == "Kecil"){
			$_SESSION['ukur']=-5000; 
		}else if ($_SESSION['opsi'] == "Sedang"){
			$_SESSION['ukur']=0; 
		}else if ($_SESSION['opsi'] == "Besar"){
			$_SESSION['ukur']=5000; 
		}

		$_SESSION['total']=($_SESSION['harga']+$_SESSION['ukur'])*$_SESSION['jumlah'];
		?>

		<h1>KONFIRMASI PEMBELIAN</h1><br><br>
		Apakah data pembelian sudah sesuai?<br>
		(tekan selesai jika yakin, tekan kembali jika tidak)<br>
		<hr><br>
		Pilihan kue : <?php echo $_SESSION['nama']; ?><br>
		Jumlah : <?php echo $_SESSION['jumlah']; ?><br>
		Ukuran : <?php echo $_SESSION['opsi']; ?><br>
		Catatan tambahan : <?php echo $_SESSION['note']; ?><br><br>
		Harga : <?php echo $_SESSION['total']; ?><br><br>
		<form action="tampilstruk.php" method="POST">
			<input type="submit" value="Selesai"> 
			<input type="button" onclick="history.back();" value="Kembali">
		</form>
	</body>
</html>