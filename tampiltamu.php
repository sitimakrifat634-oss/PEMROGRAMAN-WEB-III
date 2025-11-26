<?php
//panggil koneksi
include "connectdb.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Tamu</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Bagian Navigasi Awal -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DW Semarang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Bagian Navigasi Akhir -->

    <!-- Judul -->
    <div class="container">
        <h2 class="text-center display-6">DATA ku</h2>

        <p class="text-center lead">Data Tamu Dari Pengisian Buku Tamu</p>
        <br> <br>
        <div class="row">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">HPTamu</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tools</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 0;
                    // ambil data dari tabel tamu
                    $sql = mysqli_query($sambung, "SELECT * FROM tamu");
                    while ($data = mysqli_fetch_array($sql)) {
                        $a++;
                    ?>
                        <tr>
                            <th scope="row" class="text-center"><?php echo $a; ?></th>
                            <td><?php echo $data["namatamu"]; ?></td>
                            <td><?php echo $data["hptamu"]; ?></td>
                            <td><?php echo $data["emailtamu"]; ?></td>
                            <td><?php echo $data["alamattamu"]; ?></td>
                            <td class="text-center">
                                <a href="formku.php?idtamu=<?php echo $data["idtamu"]; ?>" class="btn btn-outline-success btn-sm"></i>Edit</a>
                                <a href="proseshapus.php?idtamu=<?php echo $data["idtamu"]; ?>" onclick="return confirm('Apakah Data Benan-benar Akan Dihapus?')" class="btn btn-outline-danger btn-sm"><i></i>hapus</a>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>

    <footer class=" container-fluid bg-dark text-white py-3 text-center" style="position: fixed;bottom:0;">
        <div class="row">
            <div class="col">
                Copyright@Siti
            </div>
        </div>
    </footer>
</body>

</html>