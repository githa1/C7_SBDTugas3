<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SBD C7</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
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
            <a href="index.php" class="text-light">
                <button type="button" class="btn btn-secondary ml-5 ">
                    Kembali </a>
            </button>

            <h3 class="font-weight-semibold text-center mb-3">
                Jadwal Peminjaman Ruang Lab
            </h3>
            <!--button tambah data tbl PEGAWAI-->
            <a href="tambahWaktu.php" class="text-light">
                <button type="button" class="btn btn-success ml-5 mb-3 ">
                    + Tambah Jadwal Pinjam</a>
            </button>
            <div class="table-responsive ">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col ">Kode Surat</th>
                            <th scope="col">Kode Lab</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Jam Mulai</th>
                            <th scope="col">Jam Selesai</th>
                            <th scope="col">Status</th>
                            <th scope="col">Pilihan</th>
                        </tr>
                    </thead>
                        <!--munculin data-->
                        <?php
                        $sql1 = "SELECT * from waktu_peminjaman";
                        $q1 = mysqli_query($koneksi, $sql1);
                        while ($data = mysqli_fetch_array($q1)) {
                        ?>
                        <tr>
                            <th scope="row"><?php echo $data['kodeSurat'] ?></th>
                            <th scope="row"><?php echo $data['kodeLab'] ?></th>
                            <td scope="row"><?php echo $data['tanggalPinjam'] ?></td>
                            <td scope="row"><?php echo $data['jam_mulai'] ?></td>
                            <td scope="row"><?php echo $data['jam_selesai'] ?></td>
                            <td scope="row"><?php echo $data['status'] ?></td>
                            <td scope="row"> 
                                <a href="edit_waktu.php?updateId=<?php echo $data['kodeLab'] ?>"><button type="button"
                                        class="btn btn-warning">Edit</button></a>
                                <a href="del_waktu.php?deleteId=<?php echo $data['kodeLab'] ?>"><button type="button"
                                        class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        <?php
                        }
                            ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>