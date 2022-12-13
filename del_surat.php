<?php
include 'connect.php';

if(isset($_GET['deleteId'])){
    $kodeSurat = $_GET['deleteId'];

    $sqlDel = "DELETE FROM surat WHERE kodeSurat ='$kodeSurat' ";
    $result = mysqli_query($koneksi, $sqlDel);
    if($result){
        // echo "Data Telah Terhapus";     
        echo "<script>alert('Data Berhasil Dihapus!')</script>";
        echo "<script>window.location='surat.php'</script>";
        
    } else{
        echo "Data Tidak Dapat Terhapus";
    }
}
?>