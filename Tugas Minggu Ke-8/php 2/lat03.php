<?php 

    function belajar(){
        echo "Saya Belajar PHP";
    }
    belajar();
    echo "<br>";




    function luas_persegi($p = 5, $l = 3){
        $luas = $p * $l;

        echo $luas;
    }
    //hasil original
    luas_persegi();
    echo "<br>";
    //hasil setelah dirubah isinya
    luas_persegi(20,27);




    echo "<br>";
    //metode biasa
    function output(){
        echo "Belajar Function";
    }
    output();

    //metode dengan return
    function output2(){
        return "Ini Belajar Function 2";
    }
    echo '<h1>'.output2().'</h1>';
    


?>