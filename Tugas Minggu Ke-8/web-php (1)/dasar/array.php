<?php


    $buah = ['mangga','jeruk',500,'apel',300,2.5];

    var_dump($buah);

    echo "<br>";
    echo $buah[4];

    echo "<br>";
    
    foreach ($buah as $key => $value) {
        echo $key . "=>" . $value;
        echo "<br>";
    }

    //array asosiatif
    $harga = ['Mangga'=>300, 'Apel'=>200, 'Jeruk'=>100];

    var_dump($harga);
    echo "<br>";

    foreach ($harga as $key => $value) {
        echo $key . " Harganya " . $value;
        echo $key;
        echo "<br>";
    }

    echo $harga['Mangga'];
    echo "<br>";

    $isi = array_keys($harga);
    var_dump($isi);
    echo "<br>";
    echo $isi[0];
?>

