<?php
if ($_POST) {
    $judul_buku = $_POST['judul_buku'];
    $deskripsi = $_POST['deskripsi'];
    if (empty($judul_buku)) {
        echo "<script>alert('Judul Buku tidak 
        boleh kosong');location.href='buku.php';</script>";
    } elseif (empty($deskripsi)) {
        echo "<script>alert('Deskripsi tidak boleh kosong');
        location.href='buku.php';</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "insert into buku (judul_buku, deskripsi) value ('" .
            $judul_buku . "','" . $deskripsi . "')");
        if ($insert) {
            echo "<script>alert('Sukses menambahakan data Buku');location.href='buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahakan data Buku');location.href='tambah_buku.php';</script>";
        }
    }
}
