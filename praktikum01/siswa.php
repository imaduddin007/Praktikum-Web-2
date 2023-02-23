<?php
$nilai1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78];
$nilai2 = ["id" => 2, "nim" => "01121", "uts" => 70, "uas" => 50, "tugas" => 68];
$nilai3 = ["id" => 3, "nim" => "01130", "uts" => 60, "uas" => 86, "tugas" => 70];
$nilai4 = ["id" => 4, "nim" => "01134", "uts" => 90, "uas" => 91, "tugas" => 82];

$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Kumpulan Nilai</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Daftar Nilai Mahasiswa</h1>
        <table class="table table-dark">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">UAS</th>
                    <th scope="col">UTS</th>
                    <th scope="col">Tugas</th>
                    <th scope="col">Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kumpulan_nilai as $nilai) : ?>
                    <tr>
                       <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3;?>
                       <td><?=$nilai["id"];?></td>
                       <td><?=$nilai["nim"];?></td>
                       <td><?=$nilai["uts"];?></td>
                       <td><?=$nilai["uas"];?></td>
                       <td><?=$nilai["tugas"];?></td>
                       <td><?=$nilai_akhir;?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>

</html>