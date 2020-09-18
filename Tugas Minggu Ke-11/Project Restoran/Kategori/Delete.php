<?php 

    require_once "../function.php";

    

    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";

    $result = mysqli_query($koneksi, $sql);

    header("location:http://localhost/pemrograman-11/Project%20Restoran/Kategori/Select.php");



?>