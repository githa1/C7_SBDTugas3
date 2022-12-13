<?php
include 'connect.php';

if(isset($_GET['deleteId'])){
    $kode = $_GET['deleteId'];

    $sqlDel = "DELETE FROM lab WHERE kodeLab ='$kode' ";
    $result = mysqli_query($koneksi, $sqlDel);
    if($result){
        // echo "Data Telah Terhapus";     
        echo "<script>alert('Data Berhasil Dihapus!')</script>";
        echo "<script>window.location='lab.php'</script>";
        
    } else{
        echo "Data Tidak Dapat Terhapus";
    }
}
?>