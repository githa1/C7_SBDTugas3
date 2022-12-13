<?php
include 'connect.php';

$surat = $_GET['updateId'];
$sql = "SELECT * FROM surat WHERE kodeSurat= '$surat'";

// preview isi tabel
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_array($result);
$kodeSurat = $row['kodeSurat'];
$tgl = $row['tanggalSurat'];
$nim = $row['nim'];
$nip = $row['nip'];

if (isset($_POST['update'])) {
    $kodeSurat = $_POST['kodeSurat'];
    $tgl = $_POST['tanggalSurat'];
    $nim = $_POST['nim'];
    $nip = $_POST['nip'];

    $sqlUp = "UPDATE surat 
    SET  kodeSurat= '$kodeSurat', tanggalSurat ='$tgl', nim = '$nim'
    WHERE kodeSurat='$kodeSurat' ";
    $result = mysqli_query($koneksi, $sqlUp);
    if ($result) {
        echo "<script>alert('Data Berhasil Diubah!')</script>";
        echo "<script>window.location='surat.php'</script>";
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
            <a href="suratPinjam.php" class="text-light">
                <button type="button" class="btn btn-secondary ml-5 ">
                    Kembali </a>
            </button>
            <h3 class="font-weight-semibold text-center mb-5">
                Edit Surat Pinjam Ruang Lab
            </h3>

            <!-- form-->
            <div class="container">
                <form method="POST">
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">Kode Surat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="kodeSurat" id="kodeSurat" value=<?php echo $kodeSurat; ?>>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label">Tanggal Surat</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="tanggalSurat" id="tanggalSurat" value=<?php echo
                                $tgl; ?>>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label justify-content-center">NIM</label>
                        <div class="col-sm-8">
                            <select name="nim" class="col-12 col-form-label">
                                <option values=""><?php echo $nim?></option>
                                <?php
                                $sql1 = "select * from mahasiswa";
                                $q1 = mysqli_query($koneksi, $sql1);
                                while ($pilih = mysqli_fetch_array($q1)){
                                    ?>
                                    <option value="<?php echo $pilih["nim"]; ?>">
                                    <?php echo $pilih["nim"];?>
                                    </option>
                                    <?php
                                }  
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <label class="col-sm-3 col-form-label justify-content-center">NIP</label>
                        <div class="col-sm-8">
                            <select name="nip" class="col-12 col-form-label">
                                <option values=""><?php echo $nip?></option>
                                <?php
                                $sql1 = "select * from pegawai";
                                $q1 = mysqli_query($koneksi, $sql1);
                                while ($pilih = mysqli_fetch_array($q1)){
                                    ?>
                                    <option value="<?php echo $pilih["nip"]; ?>">
                                    <?php echo $pilih["nip"];?>
                                    </option>
                                    <?php
                                }  
                                    ?>
                            </select>
                        </div>
                    </div>

                    <a href="suratPinjam.php">
                        <button type="submit" class="col-12 btn btn-success" name="update">
                        Update 
                        </button>
                    </a>
                    
                </form>

            </div>
        </div>
</body>

</html>