<?php
if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $ps = $_POST['prodi'];
    $skills = $_POST['skill'];
    $tt = $_POST['domisili'];
    $email = $_POST['email'];

    function skor_skill($skills)
    {
        $skill_list = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 20,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50,
        ];

        $result = 0;
        foreach ($skills as $skill) {
            $result = $result + $skill_list[$skill];
        }

        return $result;
    }


    function kategori_skill($skor)
    {
        if($skor <= 0){
            $skor = 'Tidak Memadai';
        }
        elseif($skor > 0 && $skor <= 40){
            $skor = 'Kurang';
        }
        elseif($skor > 40 && $skor <= 60){
            $skor = 'Cukup';
        }
        elseif($skor > 60 && $skor <= 100){
            $skor = 'Baik';
        }
        else{
            $skor = 'Sangat Baik';  
        } 
        return $skor;
    }

    echo "NIM: $nim";
    echo "<br> Nama: $nama";
    echo "<br> Jenis Kelamin: $gender";
    echo "<br> Program Studi: $ps";
    echo "<br> Skill Programmer: ";
    foreach($skills as $skill){
        echo $skill . ", ";
    }
    echo "<br> Domisili: $tt";
    $skor = skor_skill($skills);
    echo "<br> Skor Skill: " . $skor;
    echo "<br> Kategori Skill: " . kategori_skill($skor);
    echo "<br> Email : $email";
}
?>