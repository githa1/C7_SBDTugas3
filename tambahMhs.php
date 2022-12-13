<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['namaMhs'];
    $kontak = $_POST['kontakMhs'];
    $prodi = $_POST['prodi'];

    $sql = "INSERT INTO mahasiswa values('$nim', '$nama','$kontak','$prodi')";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        // echo "Data berhasil ditambahkan";
        header('location: mahasiswa.php');
    } else {
        echo "<script>alert('Data Belum Lengkap!')</script>";
        // echo '$eror';
        // $eror= "Data Gagal Ditambahkan";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SBD C7</title>
</head>

<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                <h4>Peminjaman Ruang Lab</h4>

            </div>
        </div>

        <div class="header p-3 pb-md-4 mx-auto">
            <!--kembali-->
            <a href="mahasiswa.php" class="text-light">
                <button type="button" class="btn btn-secondary ml-5 ">
                    Kembali </a>
            </button>
            <h3 class="font-weight-semibold text-center mb-5">
                Tambah Data Mahasiswa
            </h3>
            
            <!-- from-->
            <div class="container">
                <form method="POST">
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">NIM</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nim" id="nim">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="namaMhs" id="namaMhs">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">No Telp</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kontakMhs" id="kontakMhs">
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">Prodi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="prodi" id="prodi">
                        </div>
                    </div>
                    <a href="mahasiswa.php">
                        <button type="submit" class="col-12 btn btn-success" name="submit" id="submit">Tambah</button>
                </form>

            </div>
        </div>
</body>

</html>