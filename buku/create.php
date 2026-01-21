<?php

include  __DIR__ . '/../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO buku (judul, pengarang, stok) VALUES (?, ?, ?)";
    $result = $koneksi->execute_query($sql, [$judul, $pengarang, $stok]);
    

    if ($result) {
    header("Location: index.php");
    }
}
?>



<h1>tambah data buku</h1>

    <form action="" method="post">
        <div class="form-item">
            <label for="judul">judul</label>
            <input type="text" name="judul" id="judul">
        </div>
        <div class="form-item">
            <label for="pengarang">pengarang</label>
            <input type="text" name="pengarang" id="pengarang">
        </div>
        <div class="form-item">
            <label for="stok">stok</label>
            <input type="number" name="stok" id="stok">
        </div>
        <button type="submit">simpan</button>
    </form>

