<?php 

    // $nama = array('Tejo','Budi','Siti',100);

    // var_dump($nama);
    // echo '<br>';

    // foreach ($nama as $key) {
    //     echo $key.'<br>';
    // }


    
    $nama = array(
        "Tejo" => "Surabaya",
        "Budi" => "Malang",
        "Siti" => "Sidoarjo"
    );

    var_dump($nama);
    echo '<br>';

    foreach ($nama as $r => $m) {
        echo $r.'-'.$m;

        echo '<br>';
    }




?>