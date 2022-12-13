<?php
include 'connect.php';

if(isset($_GET['deleteId'])){
    $nip = $_GET['deleteId'];

    $sqlDel = "DELETE FROM pegawai WHERE nip =$nip ";
    $result = mysqli_query($koneksi, $sqlDel);
    if($result){
        // echo "Data Telah Terhapus";     
        echo "<script>alert('Data Berhasil Dihapus!')</script>";
        echo "<script>window.location='pegawai.php'</script>";
        
    } else{
        echo "Data Tidak Dapat Terhapus";
    }
}
?>