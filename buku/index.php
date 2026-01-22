<?php

include __DIR__ . '/../koneksi.php';

    $sql = "SELECT * FROM buku";
    $books = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data buku</title>
</head>
<body>
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
                    <a href="edit.php?id=<?=$book['id'] ?>">edit</a>
                    <a href="hapus.php?id=<?=$book['id'] ?>">hapus</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>




