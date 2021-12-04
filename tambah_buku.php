<?php
include "header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tambah Buku</title>
</head>

<body>
    <h3>Tambah Data Buku</h3>
    <form action="proses_tambah_buku.php" method="post">
        Judul Buku :
        <input type="text" name="judul_buku" value="" class="form-control">
        Deskripsi Buku :
        <input type="text" name="deskripsi" value="" class="form-control"><br>
        <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>