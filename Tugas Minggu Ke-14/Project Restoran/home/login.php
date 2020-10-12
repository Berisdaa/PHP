 
        <div class="row">
            <div class="col-5 mt-3 mb-3">
                <div class="form-group">
                    <form action="" method="post" >
                    <div>
                    
                        <h3>LOGIN PELANGGAN</h3>
                    
                    </div>
                    <div class="form-group">
                        <label for="">EMAIL</label>
                        <input type="email" name="email" id="" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">PASSWORD</label>
                        <input type="password" name="password" id="" required class="form-control">
                    </div>

                    <div>
                        <input type="submit" name="login" value="LOGIN" class="btn btn-primary">
                    </div>
                    </form>
                </div> <!-- penutup form-group -->
            </div> <!-- penutup class untuk mengatur bootstrap -->
        </div> <!-- penutup row -->
            
            
        

    <?php 

        if (isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif";

            $count = $db->rowCOUNT($sql);

            if ($count == 0) {
                echo "<center><h3>Email Atau Password Yang Anda Masukkan Salah</h3></center>";
            }else {
                $sql = "SELECT * FROM tblpelanggan WHERE email='$email' AND password='$password' AND aktif";
                $row=$db->getITEM($sql);

                $_SESSION['pelanggan']=$row['email'];
                $_SESSION['idpelanggan']=$row['idpelanggan'];

                header("location:index.php");
            }
        
    }

    ?>
    