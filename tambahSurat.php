<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $kodeS = $_POST['kodeSurat'];
    $tgl = $_POST['tanggalSurat'];
    $nim = $_POST['nim'];
    $nip = $_POST['nip'];

    $sql = "INSERT INTO surat values('$kodeS', '$tgl', '$nim', $nip )";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        // echo "Data berhasil ditambahkan";
        header('location: waktu_peminjaman.php');
    } else {
        echo "<script>alert('Data Belum Lengkap!')</script>";
        // echo '$eror';
        // $eror= "Data Gagal Ditambahkan";
    }
}else{
    // echo "Isi data terlebih dahulu";
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
                Tambah Surat Pinjam Ruang Lab
            </h3>
            
            <!-- form-->
            <div class="container">
                <form method="POST">

                    <div class="form-group row justify-content-center">
                        <label class="col-sm-1 col-form-label justify-content-center">Kode Surat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control col-12 col-form-label" name="kodeSurat" id="kodeSurat"> 
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="col-sm-1 col-form-label justify-content-center">Tanggal Surat</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control col-12 col-form-label" name="tanggalSurat" id="tanggalSurat"> 
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="col-1 col-form-label justify-content-center">NIM</label>
                        <div class="col-sm-8">
                            <select name="nim" class="col-12 col-form-label">
                                <option values="">Silahkan Pilih</option>
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
                        <label class="col-1 col-form-label justify-content-center">NIP</label>
                        <div class="col-sm-8">
                            <select name="nip" class="col-12 col-form-label">
                                <option values="">Silahkan Pilih</option>
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
                        <button type="submit" class="col-12 btn btn-success" name="submit" id="submit">Tambah</button></a>
                </form>

            </div>
        </div>
</body>

</html>