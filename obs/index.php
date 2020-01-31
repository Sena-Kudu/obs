<?php
include 'db_baglan.php';

if(isset($_GET["ara"])){
	$arananad = $_GET["ara"];

	$sorgu = $DB->prepare("SELECT * FROM ogrenci 
		WHERE adisoyadi 
		LIKE '%$arananad%' ");
}
else{
	$sorgu = $DB->prepare("SELECT * FROM ogrenci");
}

//$sorgu = $DB->prepare("SELECT * FROM ogrenci");
$sorgu->execute();
$kayitlar = $sorgu->fetchAll();

?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>OBS ANKARA</title>
</head>
<body>

	<style>
		.button {
			background-color: #4CAF50; /* Green */
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 10px 10px;
			cursor: pointer;
		}
	</style>
	
	<nav class="navbar navbar-dark bg-dark">
		<a class="navbar-brand">ANKARA ÜNİVERSİTESİ</a>
		<form class="form-inline" method="GET" >
			<input class="form-control mr-sm-2" name="ara" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</nav>
	
	<div class="row">
		<div class="col-3">

			
		</div>
		<div class="col-6">

			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">adı soyadı</th>
						<th scope="col">numarası</th>
						<th scope="col">bölümü</th>
					</tr>
				</thead>
				<?php foreach ($kayitlar as $KAYIT): ?>
					<tbody>
						<tr>
							<td>
								<?php echo $KAYIT['id'] ?>
							</td>
							<td>
								<?php echo $KAYIT['adisoyadi'] ?>
							</td>
							<td>
								<?php echo $KAYIT['numara'] ?>
							</td>
							<td>
								<?php echo $KAYIT['bolum'] ?>
							</td>
							<td>
								<a href="edit.php?id=<?php echo $KAYIT['id']?>">Düzenle</a>
								<a href="delete.php?id=<?php echo $KAYIT['id']?>">Sil</a>
							</td>
						</tr>
					<?php endforeach; ?>	
				</tbody>

			</table>


		</div>
		<div class="col-3">
			<div class="container">
				<div class="row">
					<div class="col">
						
					</div>
					<div class="col">
						<p>
							<a href="create.php">
								<button class="button" type="submit"
								>Yeni Kişi Ekle</button>
							</a>
						</p>
					</div>
				</div>

			</div>

		</div>
	</div>

	

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
