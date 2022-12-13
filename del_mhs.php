<?php
include 'connect.php';

if(isset($_GET['deleteId'])){
    $nim = $_GET['deleteId'];

    $sqlDel = "DELETE FROM mahasiswa WHERE nim ='$nim' ";
    $result = mysqli_query($koneksi, $sqlDel);
    if($result){
        // echo "Data Telah Terhapus";     
        echo "<script>alert('Data Berhasil Dihapus!')</script>";
        echo "<script>window.location='mahasiswa.php'</script>";
        
    } else{
        echo "Data Tidak Dapat Terhapus";
    }
}
?>