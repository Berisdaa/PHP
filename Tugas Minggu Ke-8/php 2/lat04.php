<?php 

    //Operator Matematika 

    // Deklarasi
    $a = 5;
    $b = 2;

    $a2 = 2;
    $b2 = 5;

    $a3 = 7;
    $b3 = 5;

    $a4 = 7;
    $b4 = 7;

    echo "================ OPERATOR MATEMATIKA ================".'<br>';
    // OPERASI PENAMBAHAN
    $c = $a + $b;
    echo "Operasi Penambahan Hasilnya = ".$c.'<br>';

    // OPERASI PENGURANGAN
    $c = $a - $b;
    echo "Operasi Pengurangan Hasilnya = ".$c.'<br>';

    // OPERASI PERKALIAN
    $c = $a * $b;
    echo "Operasi Perkalian Hasilnya = ".$c.'<br>';

    // OPERASI PEMBAGIAN
    //hasil asli
    $c = $a / $b;
    echo "Operasi Pembagian Hasilnya = ".$c.'<br>';
    //hasil Pembagian setelah dibulatkan ke angka atas/besar
    $c = $a / $b;
    echo "Operasi Pembagian Setelah Hasilnya Dibulatkan Lebih Besar = ";
    echo round($c).'<br>';
    //hasil Pembagian saat dibulatkan ke angka bawah/kecil
    $c = $a / $b;
    echo "Operasi Pembagian Setelah Hasilnya Dibulatkan Lebih Kecil = ";
    echo floor($c).'<br>';

    // OPERASI MODULUS
    $c = $a % $b;
    echo "Operasi Modulus (Sisa Hasil Bagi) = ".$c.'<br>'.'<br>';


    echo "================== OPERATOR LOGIKA ==================".'<br>';
    /* OPERATOR LOGIKA
    Note : Jika Benar maka hasil yang keluar 1
           Jika Salah Maka tidak akan ada hasil yang tampil*/

    // OPERASI LEBIH KECIL
    $d = $a2 < $b2;
    echo $a2." Lebih Kecil Dari ".$b2." = ";
    echo $d.'<br>';

    // OPERASI LEBIH BESAR
    $d = $a3 > $b3;
    echo $a3." Lebih Besar Dari ".$b3." = ";
    echo $d.'<br>';

    // OPERASI SAMA DENGAN
    $d = $a4 == $b4;
    echo $a4." Sama Dengan ".$b4." = ";
    echo $d.'<br>';

    // OPERASI TIDAK SAMA DENGAN
    $d = $a3 != $b3;
    echo $a3." Tidak Sama Dengan ".$b3." = ";
    echo $d.'<br>'.'<br>';


    echo "================== INCREMENT  & DECREMENT ==================".'<br>';
    // INCREMENT 
    // NILAI MENGALAMI PENAMBAHAN/NAIK SEBANYAK 1
    $a2++;
    echo "Setelah Mengalami Increment Hasilnya ".$a2.'<br>';

    // DECREMENT
    // NILAI MENGALAMI PENGURANGAN/TURUN SEBANAYAK 1
    $a2--;
    echo "Setelah Mengalami Decrement Hasilnya ".$a2.'<br>'.'<br>';


    echo "================== OPERATOR STRING ==================".'<br>';
    // OPERATOR STRING

    $nama = 'Sura';
    $kota = 'baya';

    $hasil = $nama.$kota;

    $hasil .=' KOTA PAHLAWAN ';
    echo $hasil;

?>