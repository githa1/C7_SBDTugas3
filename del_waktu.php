<?php
include 'connect.php';

if(isset($_GET['deleteId'])){
    $surat = $_GET['deleteId'];

    $sqlDel = "DELETE FROM waktu_peminjaman WHERE kodeLab='$surat'  ";
    $result = mysqli_query($koneksi, $sqlDel);
    if($result){
        // echo "Data Telah Terhapus";     
        echo "<script>alert('Data Berhasil Dihapus!')</script>";
        echo "<script>window.location='waktu_peminjaman.php'</script>";
        
    } else{
        echo "Data Tidak Dapat Terhapus";
    }
}
?>