<?php 
$permen = ["vageeegeeee", "054544", "perkumpulan Genjot Madoka", "Email"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Daftar Mahasiswa</title>
</head>
<body>

<ul>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<li><?= $mhs; ?></li>
	<?php endforeach; ?>
</ul>

<ul>
	<li><?= $permen [0]; ?></li>
	<li><?= $permen[1]; ?></li>
	<li><?= $permen[2]; ?></li>
	<li><?= $permen[3]; ?></li>
</ul>
	
</body>
</html>

//hacktoberfest 2021
