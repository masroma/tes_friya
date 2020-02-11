<?php 

// soal menentukan tanggal
    $tanggal = "2020-11-23";

    $tanggalbaru = date("m-y-d", strtotime($tanggal));


    echo "<b>soal : menentukan format tanggal </b> <br/>";
    echo "<h4> Jawaban : " .$tanggalbaru. "</h4>";
    echo "===============================================";
    echo "<br/><br/><br/>";


// soal menentukan tanggal 6 bulan ke depan

    $hari = 180;

    $tanggal6bulan = date('Y-m-d', strtotime('+' .$hari. 'days', strtotime($tanggal)));

    echo "<b>soal : tanggal 6 bulan ke depan</b>";
    echo "<h4>Jawaban : " .$tanggal6bulan. "</h4>";
    echo "===============================================";
    echo "<br/><br/><br/>";

// soal menentukan umur
    
   
    $tanggallahir= new DateTime("1993-03-13");
    $tanggalrequest= new DateTime('2020-11-23');

    $diff = $tanggalrequest->diff($tanggallahir);

    echo "<b>soal : Umur berdasarkan tanggal</b>";
    echo "<h4>Jawaban : Umur " .$diff->y. " Tahun</h4>";
    echo "===============================================";
    echo "<br/><br/><br/>";
   
   


?>