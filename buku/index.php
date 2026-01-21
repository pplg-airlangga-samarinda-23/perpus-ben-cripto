<?php

include __DIR__ . '/../koneksi.php';


$sql = "SELECT * FROM buku";
$books = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
?>





<h1>data buku</h1>
<a href="create.php">tambah</a>
<table>
    <thead>
            <th>no</th>
            <th>judul</th>
            <th>pengarang</th>
            <th>stok</th>
            <th>aksi</th>
    </thead>
    <tbody>
        <?php $no=0; foreach ($books as $book) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $book['judul']; ?></td>
            <td><?= $book['pengarang'] ?></td>
            <td><?= $book['stok']; ?></td>
            <td>
                <a href="edit.php">edit</a>
                <a href="hapus.php">hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>


