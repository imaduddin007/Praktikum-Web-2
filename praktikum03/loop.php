<?php

// Mencetak angka 1 sampai 10 menggunakan for
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "<hr>";

echo "Output: <br> <br>LOOPING PERTAMA: <br>";
for ($x = 2; $x <= 20; $x += 2) {
    echo $x . " - I love php <br>";
}

echo "<hr>";

echo "<br>LOOPING KEDUA: <br>";
for ($i = 20; $i >= 2; $i -= 2) {
    echo $i . " - I love php <br>";
}

echo "<hr>";

$buah = ["Jambu", "Jeruk", "Mangga"];

foreach ($buah as $b) {
    echo $b . "<br>";
}

?>