<?php
include 'connect.php';

$kode = $_GET['updateId'];
$sql = "SELECT * FROM lab WHERE kodeLab = '$kode' ";

// preview isi tabel
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_array($result);
$kode = $row['kodeLab'];
$nama = $row['namaLab'];
$kapas = $row['kapasitasLab'];

if (isset($_POST['update'])) {
    $kode = $_POST['kodeLab'];
    $nama = $_POST['namaLab'];
    $kapas = $_POST['kapasitasLab'];

    $sqlUp = "UPDATE lab 
    SET kodeLab = '$kode', namaLab ='$nama', kapasitasLab = $kapas
    WHERE kodeLab='$kode' ";
    $result = mysqli_query($koneksi, $sqlUp);
    if ($result) {
        echo "<script>alert('Data Berhasil Diubah!')</script>";
        echo "<script>window.location='lab.php'</script>";
        // echo "Data berhasil ditambahkan";
    } else {
        $eror = "Data Gagal Diubah";
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
            <a href="lab.php" class="text-light">
                <button type="button" class="btn btn-secondary ml-5 ">
                    Kembali </a>
            </button>
            <h3 class="font-weight-semibold text-center mb-5">
                Edit Data Ruang Lab 
            </h3>

            <!-- form-->
            <div class="container">
                <form method="POST">
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">Kode Lab</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kodeLab" id="kodeLab" value=<?php echo $kode; ?>>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">Nama Lab</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="namaLab" id="namaLab" value=<?php echo $nama; ?>>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">Kapasitas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kapasitasLab" id="kapasitasLab" value=<?php echo $kapas; ?>> 
                        </div>
                    </div>
                   
                    <a href="lab.php">
                        <button type="submit" class="col-12 btn btn-success" name="update" id="update">Update</button>
                </form>

            </div>
        </div>
</body>

</html>