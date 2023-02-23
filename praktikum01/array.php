<?php
//Array
$animals = ["Kucing", "Singa", "Beruk", "Penguin"];
echo $animals[0] . "<br>";
echo $animals[2] . "<br>";

foreach($animals as $animal){
    echo $animal . "<br>";
}

//Array Associative

$mahasiswa= ["nama"=>"Imad", "jurusan"=>"SI", "semester"=>2];
echo $mahasiswa["jurusan"] . "<br>";

foreach($mahasiswa as $key=>$value){
    echo "Key nya adalah " . $key . "Value :" . $value . "<br>";
}

//Array Multidimensi

$dosen = [
    ["Pak Rojul","Web"],
    ["Pak Nasrul","DDP"],
    ["Pak Lukman","Jarkom"]
];

echo $dosen[2][1];
?>