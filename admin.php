<?php
$_SESSION['page'] = "index.php?admin";

if (!isset($_SESSION[$admin])) {
    header("location: index.php?login");
    exit();
}
?>

<div class="konten-container">
    <p>Main / Admin</p>
    <hr><br>

    <a href="index.php?admin-tambah" class="btn btn-tambah">Tambah</a>
    <br>
    <br>

    <table class="tabel" border="1">
        <thead>
            <tr>
                <th style="text-align: center">No</th>
                <th style="text-align: center">Nama</th>
                <th style="text-align: center">Username</th>
                <th style="text-align: center">Password</th>
                <th colspan="2" style="text-align: center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $query = $koneksi->query("SELECT * FROM admin");
            $i = 1; ?>
            <?php while ($data = $query->fetch_assoc()) { ?>
                <tr>
                    <td style="text-align: center"><?= $i++ ?></td>
                    <td style="text-align: left"><?= $data['nama'] ?></td>
                    <td style="text-align: left"><?= $data['username'] ?></td>
                    <td style="text-align: left"><?= $data['password'] ?></td>
                    <td style="text-align: center"><a href="index.php?admin-edit&id=<?= $data['id_admin'] ?>" class="btn btn-edit"><i class="fa fa-edit"></i> Edit</a></td>
                    <td style="text-align: center"><a onclick="return confirm('Apakah data ini akan dihapus?')" href="index.php?admin-hapus&id=<?= $data['id_admin'] ?>" class="btn btn-hapus"><i class="fa fa-times"></i> Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>
