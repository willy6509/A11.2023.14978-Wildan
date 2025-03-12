<?php
    include "mahasiswa.php";
    include "mahasiswaTransfer.php";

    $daftar_nilai = [
        "A22.123" => ['sks' => 2, 'nilai' => 'A'],
        "A22.456" => ['sks' => 3, 'nilai' => 'C'],
        "A22.789" => ['sks' => 2, 'nilai' => 'B']
    ];

    $mahasiswa_1 = new MahasiswaTransfer($daftar_nilai);

    $mahasiswa_1->setData("A11.2023.14978", "Wildanu Rafif Albaihaqi", "2005-01-17");

    echo "<pre>";
    print_r($mahasiswa_1->getData());
    echo "</pre>";
?>