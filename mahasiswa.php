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
                Data Mahasiswa
            </h3>
            <!--nambah data tbl mahasiswa-->
            <a href="tambahMhs.php" class="text-light">
                <button type="button" class="btn btn-success ml-5 mb-3 ">
                    + Tambah Mahasiswa</a>
            </button>
            <div class="table-responsive ">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col ">NIM</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Pilihan</th>
                        </tr>
                    </thead>
                    <tbody> <!--munculin data mhs-->
                        <?php
                        $sql1 = "select * from mahasiswa order by nim asc";
                        $q1 = mysqli_query($koneksi, $sql1);
                        while ($data = mysqli_fetch_array($q1)) {
                            $nim = $data['nim'];
                            $nama = $data['namaMhs'];
                            $kontak = $data['kontakMhs'];
                            $prodi = $data['prodi'];
                        ?>

                        <tr>
                            <th scope="row">
                                <?php echo $nim ?>
                            </th>
                            <td scope="row">
                                <?php echo $nama ?>
                            </td>
                            <td scope="row">
                                <?php echo $kontak ?>
                            </td>
                            <td scope="row">
                                <?php echo $prodi ?>
                            </td>
                            <td scope="row"> <!--button-->
                                <a href="edit_mhs.php?updateId=<?php echo $nim ?>"><button type="button"
                                        class="btn btn-warning">Edit</button></a>
                                <a href="del_mhs.php?deleteId=<?php echo $nim ?>"><button type="button"
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