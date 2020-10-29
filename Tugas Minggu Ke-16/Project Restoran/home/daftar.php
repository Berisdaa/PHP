
<h3>Registrasi Pelanggan</h3>

<div class="form-group">

    <form action="" method="post" >
    <div class="form-group w-50">
        <label for="">Pelanggan</label> <!-- Insert Nama User -->
        <input type="text" name="pelanggan" id="" required placeholder="Isi Pelanggan" class="form-control">
    </div>

    <div class="form-group w-50">
        <label for="">Alamat</label> <!-- Insert Nama User -->
        <input type="text" name="alamat" id="" required placeholder="Isi Alamat" class="form-control">
    </div>

    <div class="form-group w-50">
        <label for="">Telp</label> <!-- Insert Nama User -->
        <input type="text" name="telp" id="" required placeholder="Isi Telp" class="form-control">
    </div>

    <div class="form-group w-50">
        <label for="">Email</label> <!-- Insert Email -->
        <input type="email" name="email" id="" required placeholder="Isi Email" class="form-control">
    </div>

    <div class="form-group w-50">
        <label for="">Password</label> <!-- Insert Password -->
        <input type="password" name="password" id="" required placeholder="Isi Password" class="form-control">
    </div>

    <div class="form-group w-50">
        <label for="">Konfirmasi Password</label> <!-- Insert Ulang Password -->
        <input type="password" name="konfirmasi" id="" required placeholder="Isi Ulang Passowrd" class="form-control">
    </div>

    <div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
    </div>
    </form>

</div>

<?php 

    if (isset($_POST['simpan'])) {
        $pelanggan = $_POST['pelanggan'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];

        if ($password === $konfirmasi) {
            $sql = "INSERT INTO tblpelanggan VALUES ('','$pelanggan','$alamat','$telp','$email','$password',1)";
            //echo $sql;
            $db->runSQL($sql);
            header("location:?f=home&m=info");
        }else {
            echo "<h3> PASSWORD TIDAK COCOK DENGAN KONFIRMASI </h3>";
        }

    }

?>

