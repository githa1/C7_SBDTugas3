<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $kodeS = $_POST['kodeSurat'];
    $kodeL = $_POST['kodeLab'];
    $tgl = $_POST['tanggalPinjam'];
    $jamMulai = $_POST['jam_mulai'];
    $jamSelesai = $_POST['jam_selesai'];
    $status = $_POST['status'];


    $sql = "INSERT INTO waktu_peminjaman values('$kodeS', '$kodeL','$tgl', '$jamMulai', '$jamSelesai', '$status')";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        // echo "Data berhasil ditambahkan";
        header('location: waktu_peminjaman.php');
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
            <a href="waktu_peminjaman.php" class="text-light">
                <button type="button" class="btn btn-secondary ml-5 ">
                    Kembali </a>
            </button>
            <h3 class="font-weight-semibold text-center mb-5">
                Tambah Jadwal Pinjam Ruang Lab
            </h3>
            
            <!-- form-->
            <div class="container">
                <form method="POST">
                    <!-- <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <select name="Category">
                            <option value="">- Tidak Ada Dosen -</option>
                                   
                                ?>
                            </select>
                        </div> -->
                    <div class="form-group row justify-content-center">
                        <label class="col-1 col-form-label justify-content-center">Kode Surat</label>
                        <div class="col-sm-8">
                            <select name="kodeSurat" class="col-12 col-form-label">
                                <option values="">Silahkan Pilih</option>
                                <?php
                                $sql1 = "select * from surat";
                                $q1 = mysqli_query($koneksi, $sql1);
                                while ($pilih = mysqli_fetch_array($q1)){
                                    ?>
                                    <option value="<?php echo $pilih["kodeSurat"]; ?>">
                                    <?php echo $pilih["kodeSurat"];?>
                                    </option>
                                    <?php
                                }  
                                    ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="col-sm-1 col-form-label justify-content-center">Kode Lab</label>
                        <div class="col-sm-8">
                            <select name="kodeLab" class="col-12 col-form-label">
                                <option values="">Silahkan Pilih</option>
                                <?php
                                $sql1 = "select * from lab";
                                $q1 = mysqli_query($koneksi, $sql1);
                                while ($pilih = mysqli_fetch_array($q1)){
                                    ?>
                                    <option value="<?php echo $pilih["kodeLab"]; ?>">
                                    <?php echo $pilih["kodeLab"];?>
                                    </option>
                                    <?php
                                }  
                                    ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="col-sm-1 col-form-label justify-content-center">Tanggal Pinjam</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control col-12 col-form-label" name="tanggalPinjam" id="tanggalPinjam"> 
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="col-sm-1 col-form-label justify-content-center">Jam Mulai</label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control col-12 col-form-label" name="jam_mulai" id="jam_mulai">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="col-sm-1 col-form-label justify-content-center">Jam Selesai</label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control col-12 col-form-label" name="jam_selesai" id="jam_selesai">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <label class="col-1 col-form-label justify-content-center">Status</label>
                        <div class="col-sm-8">
                            <select name="status" class="col-12 col-form-label" type="enum">
                                <option values="">Silahkan Pilih</option>
                                <option values="Terjadwal">Terjadwal</option>                                                                                                      
                            </select>
                        </div>
                    </div>

                   
                    <a href="waktu_peminjaman.php">
                        <button type="submit" class="col-12 btn btn-success" name="submit" id="submit">Tambah</button>
                </form>

            </div>
        </div>
</body>

</html>