<?php
$con = mysqli_connect("localhost", "root", "", "db_cv");
$identitas = mysqli_query($con, "SELECT * FROM tbl_identitas ");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-12">
                <h1>Data Curriculum Vitae</h1>
            </div>
        </div>

        <div class="col">
            <a href="basic/input.php">Tambah Data Baru</a>
            <table class="table table-striped" cellpadding="7" cellspacing="0">
                <tr bgcolor=#dcffd1>
                    <th> No </th>
                    <th> NIK</th>
                    <th> Nama </th>
                    <th> Foto</th>
                    <th> Tempat Lahir</th>
                    <th> Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th width=25>Alamat</th>
                    <th> Email</th>
                    <th> No HP</th>
                    <th width=40> Aksi</th>
                </tr>
                <?php $z = 1; ?>
                <?php foreach ($identitas as $i) : ?>
                    <tr>
                        <td> <?= $z++ ?></td>
                        <td><?= $i['nik'] ?></td>
                        <td><?= $i['nama'] ?></td>
                        <td><img src="image/<?= $i['foto'] ?>" alt="" style="width: 100px;"></td>
                        <td><?= $i['tempat_lahir'] ?></td>
                        <td><?= $i['tanggal_lahir'] ?></td>
                        <td><?= $i['jenis_kelamin'] ?></td>
                        <td><?= $i['alamat'] ?></td>
                        <td><?= $i['email'] ?></td>
                        <td><?= $i['no_hp'] ?></td>
                        <td>
                            <div class="d-grid gap-2 d-nd-block">
                                <a link href=""> Edit</a> | <a link href="basic/delete.php?NIK=<?= $i['nik']; ?>" onclick="return confirm ('Hapus Data?')"> Delete</a> | <a link href="basic/viewcv.php?NIK=<?= $i['nik']; ?>">View</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>

    </div>
    </div>


</body>

</html>