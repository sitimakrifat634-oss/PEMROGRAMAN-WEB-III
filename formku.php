<?php
//panggil koneksi
include "connectdb.php";
$id = $_GET['idtamu'];
$sql = mysqli_query($sambung, "SELECT * FROM tamu where idtamu = '$id'");
while($user_data = mysqli_fetch_array($sql))
{
	$namatamu = $user_data['namatamu'];
	$hptamu = $user_data['hptamu'];
	$emailtamu = $user_data['emailtamu'];
    $alamattamu = $user_data['alamattamu'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siti makrifat</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container py-5" id="harga">
        <h2 class="display-6 text-center">Edit Tamu</h2>
        <div class="row">
            <h3>From Edit Tamu</h3>
            <form action="simpantamu.php" method="post">
                <div class="form-group">
                    <label for="namatamu">Nama Tamu</label>
                    <input type="text" name="namatamu" value="<?php echo $namatamu ;?>"  id="namatamu" class="form-control" required>

                </div>
                <div class="form-group">
                    <label for="hptamu">HP Tamu</label>
                    <input type="text" name="hptamu" value="<?php echo $hptamu;?>" id="hptamu" class="form-control" required>

                </div>

                <div class="form-group">
                    <label for="emailtamu">Email Tamu</label>
                    <input type="email" name="emailtamu" value="<?php echo $emailtamu;?>" id="emailtamu" class="form-control" required>

                </div>

                <div class="form-group">
                    <label for="alamattamu">Alamat Tamu</label>
                    <textarea name="alamattamu" id="alamattamu" class="form-control" required>
                    <?php echo $emailtamu;?>
                    </textarea>
                </div>

                <div class="form-group py-5">
                    <button type="submit" name="simpantamu" id="simpantamu" class="btn btn-primary col-2"> Simpan Tamu</button>
                    <a href="tampiltamu.php" class="btn btn-outline-success btn-sm"></i>batal</a>
                </div>
            </form>
        </div>

    </div>
</body>

</html>