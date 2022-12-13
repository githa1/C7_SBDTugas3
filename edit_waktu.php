<?php
include 'connect.php';

$kodeUp = $_GET['updateId'];
$sql = "SELECT * FROM waktu_peminjaman WHERE kodeLab = '$kodeUp' ";

// preview isi tabel
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_array($result);
$kodeS = $row['kodeSurat'];
$kodeL = $row['kodeLab'];
$tgl = $row['tanggalPinjam'];
$jamMulai = $row['jam_mulai'];
$jamSelesai = $row['jam_selesai'];

if (isset($_POST['updateW'])) {
    $kodeS = $_POST['kodeSurat'];
    $kodeL = $_POST['kodeLab'];
    $tgl = $_POST['tanggalPinjam'];
    $jamMulai = $_POST['jam_mulai'];
    $jamSelesai = $_POST['jam_selesai'];
    $status=$_POST['status'];

    $sqlUp = "UPDATE waktu_peminjaman 
    SET  kodeSurat='$kodeS', kodeLab = '$kodeL', tanggalPinjam = '$tgl', jam_mulai='$jamMulai', jam_selesai='$jamSelesai', status='$status'
    WHERE kodeSurat='$kodeS' and kodeLab='$kodeL' ";
    $result = mysqli_query($koneksi, $sqlUp);
    if ($result) {
        echo "<script>alert('Data Berhasil Diubah!')</script>";
        echo "<script>window.location='mahasiswa.php'</script>";
        // echo "Data berhasil ditambahkan";
        // header('location: mahasiswa.php');
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
            <a href="waktu_peminjaman.php" class="text-light">
                <button type="button" class="btn btn-secondary ml-5 ">
                    Kembali </a>
            </button>
            <h3 class="font-weight-semibold text-center mb-5">
                Edit Jadwal Pinjam Ruangan
            </h3>

            <!-- form-->
            <div class="container">
                <form method="POST">
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">Kode Surat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kodeSurat" id="kodeSurat" value=<?php echo
                                $kodeS; ?>>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">Kode Lab</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kodeLab" id="kodeLab" value=<?php echo $kodeL;
                            ?>>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">Tanggal Pinjam</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="tanggalPinjam" id="tanggalPinjam" value=<?php
                                echo $tgl; ?>>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">Jam Mulai</label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control" name="jam_mulai" id="jam_mulai" value=<?php echo
                                $jamMulai; ?>>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">Jam Selesai</label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control" name="jam_selesai" id="jam_selesai" value=<?php echo
                                $jamSelesai; ?>>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label justify-content-center">Status</label>
                        <div class="col-sm-8">
                            <select name="status" class="col-12 col-form-label" type="text">
                                <option values="">Silahkan Pilih</option>
                                <option values="Terjadwal">Terjadwal</option>
                                <option values="Terjadwal">Selesai Dipinjam</option>  
                                <option values="Terjadwal">Batal</option>                                                                                                                                                                                                                                                                                             
                            </select>
                        </div>
                    </div>

                    <a href="waktu_peminjaman.php">
                        <button type="submit" class="col-12 btn btn-success" name="updateW">Update</button>

                </form>

            </div>
        </div>
</body>

</html>