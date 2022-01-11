<?php
$con = mysqli_connect("localhost", "root", "", "db_cv");

if (isset($_POST['submit'])) {
    //insert data about

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $foto = $_POST['foto'];
    $tempatLahir = $_POST['tempat_lahir'];
    $tanggalLahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $noHp = $_POST['no_hp'];
    $jk = $_POST['jenis_kelamin'];
    $mh = $_POST['moto_hidup'];
    $ts = $_POST['tentang_saya'];
    $bg_foto = $_POST['bg_foto'];
    // insert image

    //var_dump($_FILES);

    $query_about = "INSERT INTO `tbl_identitas`(`nik`, `nama`, `foto`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `email`, `no_hp`, `jenis_kelamin`, `moto_hidup`, `tentang_saya`,`bg_foto`) VALUES ('$nik','$nama','$foto','$tempatLahir','$tanggalLahir','$alamat','$email','$noHp','$jk','$mh','$ts','$bg_foto')";
    $result_about =  mysqli_query($con, $query_about);

    // insert data education
    $id_pendidikan = $_POST['idPendidikan'];
    $tempat_education = $_POST['keterangan'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $jurusan = $_POST['jurusan'];
    $query_education = "INSERT INTO `tbl_detail_pendidikan` (`nik`, `idPendidikan`, `keterangan`, `tahun_masuk`, `tahun_lulus`, `jurusan`) VALUES
     ('$nik', '$id_pendidikan[0]', '$tempat_education[0]', '$tahun_masuk[0]', '$tahun_lulus[0]', '$jurusan[0]'),
     ('$nik', '$id_pendidikan[1]', '$tempat_education[1]', '$tahun_masuk[1]', '$tahun_lulus[1]', '$jurusan[1]'),
     ('$nik', '$id_pendidikan[2]', '$tempat_education[2]', '$tahun_masuk[2]', '$tahun_lulus[2]', '$jurusan[2]'),
     ('$nik', '$id_pendidikan[3]', '$tempat_education[3]', '$tahun_masuk[3]', '$tahun_lulus[3]', '$jurusan[3]')";
    $result_education = mysqli_query($con, $query_education);


    // insert data experience
    $perusahaan_experience = $_POST['perusahaan'];
    $jabatan_experience =  $_POST['jabatan'];
    $periode_experience = $_POST['periode'];
    $alamat_experience = $_POST['alamat_perusahaan'];
    $query_experience = "INSERT INTO `tbl_detail_pekerjaan`( `nik`, `perusahaan`, `jabatan`, `periode`, `alamat_perusahaan`) VALUES
    ('$nik','$perusahaan_experience[0]','$jabatan_experience[0]','$periode_experience[0]','$alamat_experience[0]'),
    ('$nik','$perusahaan_experience[1]','$jabatan_experience[1]','$periode_experience[1]','$alamat_experience[1]'),
    ('$nik','$perusahaan_experience[2]','$jabatan_experience[2]','$periode_experience[2]','$alamat_experience[2]'),
    ('$nik','$perusahaan_experience[3]','$jabatan_experience[3]','$periode_experience[3]','$alamat_experience[3]'),
    ('$nik','$perusahaan_experience[4]','$jabatan_experience[4]','$periode_experience[4]','$alamat_experience[4]')";
    $result_experience = mysqli_query($con, $query_experience);

    // insert data skills
    $skill = $_POST['keahlian'];
    $image_skill = $_POST['image_keahlian'];
    $query_skill = "INSERT INTO `tbl_detail_keahlian`( `nik`, `keahlian`, `image_keahlian`) VALUES 
    ('$nik','$skill[0]','$image_skill[0]'),
    ('$nik','$skill[1]','$image_skill[1]'),
    ('$nik','$skill[2]','$image_skill[2]'),
    ('$nik','$skill[3]','$image_skill[3]'),
    ('$nik','$skill[4]','$image_skill[4]')";
    $result_skills = mysqli_query($con, $query_skill);

    // insert data portfolio
    $img_portfolio = $_POST['image_portfolio'];
    $query_portfolio = "INSERT INTO `tbl_detail_galery`(`id`, `nik`, `image_portfolio`) VALUES 
    ('','$nik','$img_portfolio[0]'),
    ('','$nik','$img_portfolio[1]'),
    ('','$nik','$img_portfolio[2]'),
    ('','$nik','$img_portfolio[3]'),
    ('','$nik','$img_portfolio[4]')";
    $result_portfolio = mysqli_query($con, $query_portfolio);


    //cek data sudah tersimpan
    if ($result_about and $result_education and $result_experience && $result_skills && $result_portfolio) {
        echo "Berhasil";
        header("location:../index.php");
    } else {
        echo "Gagal";
        echo "<br>";
        echo mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>

<body>
    <h1>Input Data</h1>
    <form method="POST" enctype="multipart/form-data">
        <h3>Tentang Saya</h3>
        <!-- Form about us -->
        <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><input type="text" name="nik" required value="12345"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" required name="nama" value="Cristiano Ronaldo"></td>
            </tr>
            <tr>
                <td>Foto Profile</td>
                <td>:</td>
                <td><input type="text" name="foto" required value="ronaldo.jpeg""></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type=" text" name="tempat_lahir" required value="Portugal"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="text" name="tanggal_lahir" required value="07-07-1945"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" required value="jln. mana aja no 07"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" required value="ronaldo@gmail.com"></td>
            </tr>
            <tr>
                <td>No Hp.</td>
                <td>:</td>
                <td><input type="text" name="no_hp" required value="081234321"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="text" name="jenis_kelamin" required value="Laki-laki"></td>
            </tr>
            <tr>
                <td>Moto Hidup</td>
                <td>:</td>
                <td><textarea name="moto_hidup" required>Gass wae</textarea></td>
            </tr>
            <tr>
                <td>Tentang Saya</td>
                <td>:</td>
                <td><textarea name="tentang_saya" required>Saya adalah seorang yang bermimpi dan sekarang sudah sudah menjadi kenyataan dan mimpi saya adalah menjadi pemain terbaik di dunia</textarea></td>
            </tr>
            <tr>
                <td>Background Foto Home</td>
                <td>:</td>
                <td><input type="text" name="bg_foto" required value="bg-ronaldo.jpg"></td>
            </tr>
        </table>
        <h3>Riwayat Pendidikan</h3>
        <!-- Form Education -->

        <table>

            <tr>
                <td>SD <input type="hidden" name="idPendidikan[0]" value="1"></td>
                <td>:</td>
                <td><input type="text" name="keterangan[0]" value="sdn 07 portugal"></td>
                <td>Tahun Masuk</td>
                <td>:</td>
                <td><input type="text" name="tahun_masuk[0]" value="2000"></td>
                <td>Tahun Lulus</td>
                <td>:</td>
                <td><input type="text" name="tahun_lulus[0]" value="2006"></td>
                <td><input type="hidden" name="jurusan[0]"></td>

            </tr>

            <tr>
                <td>SMP <input type="hidden" name="idPendidikan[1]" value="2"></td>
                <td>:</td>
                <td><input type="text" name="keterangan[1]" value="smpn 1 portugal"></td>
                <td>Tahun Masuk</td>
                <td>:</td>
                <td><input type="text" name="tahun_masuk[1]" value="2006"></td>
                <td>Tahun Lulus</td>
                <td>:</td>
                <td><input type="text" name="tahun_lulus[1]" value="2009"></td>
                <td><input type="hidden" name="jurusan[1]"></td>

            </tr>
            <tr>
                <td>SMA/MA/ <input type="hidden" name="idPendidikan[2]" value="3"></td>
                <td>:</td>
                <td><input type="text" name="keterangan[2]" value="smkn 55 Portugal"></td>
                <td>Tahun Masuk</td>
                <td>:</td>
                <td><input type="text" name="tahun_masuk[2]" value="2009"></td>
                <td>Tahun Lulus</td>
                <td>:</td>
                <td><input type="text" name="tahun_lulus[2]" value="2012"></td>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan[2]" value="Otomotif"></td>
            </tr>
            <tr>
                <td>Sarjana <input type="hidden" name="idPendidikan[3]" value="4"></td>
                <td>:</td>
                <td><input type="text" name="keterangan[3]" value="Universitas Perjuangan"></td>
                <td>Tahun Masuk</td>
                <td>:</td>
                <td><input type="text" name="tahun_masuk[3]" value="2012"></td>
                <td>Tahun Lulus</td>
                <td>:</td>
                <td><input type="text" name="tahun_lulus[3]" value="sekarang"></td>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan[3]" value="Farmasi"></td>
            </tr>
        </table>
        <h3>Riwayat Pekerjaan</h3>
        <!-- Form Experience -->
        <table>
            <tr>
                <td>Perusahaan 1</td>
                <td>:</td>
                <td><input type="text" name="perusahaan[0]" value="PT. Kecap Bango"></td>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan[0]" value="SPG"></td>
                <td>Periode</td>
                <td>:</td>
                <td><input type="text" name="periode[0]" value="2011 - 2013"></td>
                <td>Alamat Perusahaan</td>
                <td>:</td>
                <td><input type="text" name="alamat_perusahaan[0]" value="Bekasi no 33"></td>
            </tr>
            <tr>
                <td>Perusahaan 2</td>
                <td>:</td>
                <td><input type="text" name="perusahaan[1]" value="PT. Acome"></td>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan[1]" value="Admin olsop"></td>
                <td>Periode</td>
                <td>:</td>
                <td><input type="text" name="periode[1]" value="2013 - 2015"></td>
                <td>Alamat Perusahaan</td>
                <td>:</td>
                <td><input type="text" name="alamat_perusahaan[1]" value="karawang no 233"></td>
            </tr>
            <tr>
                <td>Perusahaan 3</td>
                <td>:</td>
                <td><input type="text" name="perusahaan[2]" value="PT. Asus"></td>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan[2]" value="Desainer PC"></td>
                <td>Periode</td>
                <td>:</td>
                <td><input type="text" name="periode[2]" value="2015 - 2018"></td>
                <td>Alamat Perusahaan</td>
                <td>:</td>
                <td><input type="text" name="alamat_perusahaan[2]" value="Banjar no 53"></td>
            </tr>
            <tr>
                <td>Perusahaan 4</td>
                <td>:</td>
                <td><input type="text" name="perusahaan[3]" value="PT. JNT"></td>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan[3]" value="Courier"></td>
                <td>Periode</td>
                <td>:</td>
                <td><input type="text" name="periode[3]" value="2018 - 2019"></td>
                <td>Alamat Perusahaan</td>
                <td>:</td>
                <td><input type="text" name="alamat_perusahaan[3]" value="Tasik no 72"></td>
            </tr>
            <tr>
                <td>Perusahaan 5</td>
                <td>:</td>
                <td><input type="text" name="perusahaan[4]" value="PT. JNE"></td>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan[4]" value="Admin"></td>
                <td>Periode</td>
                <td>:</td>
                <td><input type="text" name="periode[4]" value="2019 - 2020"></td>
                <td>Alamat Perusahaan</td>
                <td>:</td>
                <td><input type="text" name="alamat_perusahaan[4]" value="Ciamis no 42"></td>
            </tr>



        </table>
        <h3>Keahlian Saya</h3>
        <!-- Form Skills -->
        <table>
            <tr>
                <td>Keahlian 1</td>
                <td>:</td>
                <td><input type="text" name="keahlian[0]" value="Mengetik"></td>
                <td>Gambar Keahlian</td>
                <td>:</td>
                <td><input type="text" name="image_keahlian[0]" value="mengetik.jpg"></td>
            </tr>
            <tr>
                <td>Keahlian 2</td>
                <td>:</td>
                <td><input type="text" name="keahlian[1]" value="Menggambar"></td>
                <td>Gambar Keahlian</td>
                <td>:</td>
                <td><input type="text" name="image_keahlian[1]" value="menggambar.jpg"></td>
            </tr>
            <tr>
                <td>Keahlian 3</td>
                <td>:</td>
                <td><input type="text" name="keahlian[2]" value="Menyanyi"></td>
                <td>Gambar Keahlian</td>
                <td>:</td>
                <td><input type="text" name="image_keahlian[2]" value="menyanyi.jpg"></td>
            </tr>
            <tr>
                <td>Keahlian 4</td>
                <td>:</td>
                <td><input type="text" name="keahlian[3]" value="Mencaci"></td>
                <td>Gambar Keahlian</td>
                <td>:</td>
                <td><input type="text" name="image_keahlian[3]" value="mencaci.jpg"></td>
            </tr>
            <tr>
                <td>Keahlian 5</td>
                <td>:</td>
                <td><input type="text" name="keahlian[4]" value="Memaki"></td>
                <td>Gambar Keahlian</td>
                <td>:</td>
                <td><input type="text" name="image_keahlian[4]" value="memaki.jpg"></td>
            </tr>

        </table>
        <h3>Portfolio Saya</h3>
        <!-- Form Portfolio -->
        <table>
            <tr>
                <td>Image 1</td>
                <td>:</td>
                <td><input type="text" name="image_portfolio[0]" value="portfolio-ronaldo1.jpg"></td>
            </tr>
            <tr>
                <td>Image 2</td>
                <td>:</td>
                <td><input type="text" name="image_portfolio[1]" value="portfolio-ronaldo2.jpg"></td>
            </tr>
            <tr>
                <td>Image 3</td>
                <td>:</td>
                <td><input type="text" name="image_portfolio[2]" value="portfolio-ronaldo3.jpg"></td>
            </tr>
            <tr>
                <td>Image 4</td>
                <td>:</td>
                <td><input type="text" name="image_portfolio[3]" value="portfolio-ronaldo4.jpg"></td>
            </tr>
            <tr>
                <td>Image 5</td>
                <td>:</td>
                <td><input type="text" name="image_portfolio[4]" value="portfolio-ronaldo5.jpg"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td align="right"><button type="submit" name="submit">Simpan Data</button></td>

                <td>
                    <h4><a href="../index.php">Kembali</a></h4>
                </td>
            </tr>
        </table>

    </form>
</body>

</html>