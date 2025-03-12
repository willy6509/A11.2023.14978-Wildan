<?php 
    include "Mahasiswa.php"; 

    echo "Data Mahasiswa :<br>";

    //objek 1
    $mahasiswaTI = new Mahasiswa(); 
    $mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika'); 
    $mahasiswaTI->tampilkanData();

    //objek 2
    $mahasiswaTI = new Mahasiswa(); 
    $mahasiswaTI->setData('A11.2023.14978', 'Wildan', 'Teknik Informatika'); 
    $mahasiswaTI->tampilkanData();

    //objek 3
    $mahasiswaTI = new Mahasiswa(); 
    $mahasiswaTI->setData('A11.2023.14979', 'Yoga', 'Teknik Informatika'); 
    $mahasiswaTI->tampilkanData();
?>