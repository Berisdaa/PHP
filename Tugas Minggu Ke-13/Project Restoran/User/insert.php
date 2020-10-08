
<h3>Insert User</h3>

<div class="form-group">

    <form action="" method="post" >
    <div class="form-group w-50">
        <label for="">Nama User</label> <!-- Insert Nama User -->
        <input type="text" name="user" id="" required placeholder="Isi Nama User" class="form-control">
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

    <div class="form-group w-50">
        <label for="">Level</label> <br>
        <select name="level" id="">
        
            <option value="admin">Admin</option>
            <option value="chef">Chef</option>
            <option value="kasir">Kasir</option>

        </select>
    </div>

    <div>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
    </div>
    </form>

</div>

<?php 

    if (isset($_POST['simpan'])) {
        $user = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $level = $_POST['level'];

        if ($password === $konfirmasi) {
            $sql = "INSERT INTO tbluser VALUES ('','$user','$email','$password','$level',1)";
            //echo $sql;
            $db->runSQL($sql);
            header("location:?f=user&m=select");
        }else {
            echo "<h3> PASSWORD TIDAK COCOK DENGAN KONFIRMASI </h3>";
        }

    }

?>

