<?php
//Buat variabel

$nama = "Imaduddin Abdur Rahman";
$jurusan = "Sistem Informasi";
$semester = 2;
echo $nama . "<br>";
echo "Jurusan saya adalah " . $jurusan . "<br>";
echo "Semester saat ini :" . $semester;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2><?php echo $nama ?></h2>
	<p>
		Hai nama saya <?php echo $nama ?>
	</p>
	<p>
		Saya kuliah di jurusan <?php echo $jurusan ?>
	</p>
	<p>
		Saat ini saya berada di semester <?php echo $semester ?>
	</p>
</body>
</html>