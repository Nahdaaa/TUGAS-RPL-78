<?php
if($_POST){
    $JUDUL_BUKU=$_POST['JUDUL_BUKU'];
    $PENULIS=$_POST['PENULIS'];
    $PENERBIT=$_POST['PENERBIT'];
    if(empty($JUDUL_BUKU)){
        echo "<script>alert('judul buku belum diisi');location.href='tambahbuku.php';</script>";

    } elseif(empty($PENULIS)){
        echo "<script>alert('penulis belum diisi');location.href='tambahbuku.php';</script>";
    } elseif(empty($PENERBIT)){
        echo "<script>alert('penerbit belum diisi');location.href='tambahbuku.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into buku (JUDUL_BUKU, PENULIS, PENERBIT) value ('".$JUDUL_BUKU."','".$PENULIS."','".$PENERBIT."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan buku');location.href='tambahbuku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan buku');location.href='tambahbuku.php';</script>";
        }
    }
} 
?>
