<?php
if (isset($_GET['NIK'])) {
    $nik = $_GET['NIK'];
} else {
    die("Error. No Id Selected");
}
$con = mysqli_connect("localhost", "root", "", "db_cv");
$query = mysqli_query($con, "SELECT * FROM tbl_identitas WHERE nik='$nik'");
$result = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PORTFOLIO</title>
    <!-- bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.js">
    <!-- <link rel="stylesheet" href="../bootstrap/"> -->
    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <style>
        .slick-prev,
        .slick-next {
            width: 50px;
            height: 50px;
            z-index: 1;
        }

        .slick-prev {
            left: 10px;

        }

        .slick-next {
            right: 10px;
        }

        section {
            padding-top: 5rem;
        }
    </style>
</head>

<body id="home">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top ">
        <div class="container">
            <a class="navbar-brand" href="#"><?= $result['nama'] ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Education</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- image home -->
    <section id="card-image" style="padding-top: 3rem;">

        <div class="col-md-12">
            <div class="card bg-dark text-black text-center">
                <img src="../image/<?= $result['bg_foto'] ?>" class="card-img" alt="...">
                <div class="card-img-overlay position-absolute top-50 start-50 translate-middle">
                    <h4 class="card-text ">Hello I'm Programmer</h4>
                    <h1 class="card-title"><?= $result['nama'] ?></h1>
                </div>
            </div>

        </div>
    </section>
    <!-- akhir image -->

    <!-- about -->
    <section id="about">
        <div class="container" style="padding-bottom:10rem;">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-md-12">
                    <h1>About Us</h1>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 ">
                    <img src="../image/<?= $result['foto'] ?>" style="float:left;" width="520px" alt="">
                </div>
                <div class="col-md-6 ">
                    <div style="float:right; ">
                        <h2><?= $result['nama'] ?></h2>
                        <h4>Profil Data Diri</h4>
                        <p><?= $result['tentang_saya'] ?></p>
                        <table>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td><?= $result['jenis_kelamin'] ?></td>
                            </tr>
                            <tr>
                                <th>Tempat Tanggal Lahir</th>
                                <td>:</td>
                                <td><?= $result['tempat_lahir'] ?> , <?= $result['tanggal_lahir'] ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td><?= $result['alamat'] ?></td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>:</td>
                                <td><?= $result['email'] ?></td>
                            </tr>
                            <tr>
                                <th>No.Hp</th>
                                <td>:</td>
                                <td><?= $result['no_hp'] ?></td>
                            </tr>
                            <tr>
                                <th>Moto Hidup</th>
                                <td>:</td>
                                <td><?= $result['moto_hidup'] ?></td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- akhir about -->

    <!-- education -->
    <section id="education" class="bg-light">
        <div class="container" style="padding-bottom:10rem;">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-md-12">
                    <h1>Education</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <td></td>
                                <th scope="col-md-4">Tempat</th>
                                <th scope="col-md-4">Jurusan</th>
                                <th scope="col-md-4">Tahun Masuk</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $queryRP = mysqli_query($con, "SELECT * FROM tbl_riwayat_pendidikan");
                            $no = 1;
                            foreach ($queryRP as $q2) :
                                $queryDp = mysqli_query($con, "SELECT * FROM tbl_detail_pendidikan WHERE nik=$nik AND idPendidikan=$q2[idPendidikan]");
                                while ($row = $queryDp->fetch_array()) {
                            ?>

                                    <tr>
                                        <th><?= $no++ ?></th>
                                        <td><?= $q2['pendidikan'] ?></td>
                                        <td><?= $row['keterangan'] ?></td>
                                        <td><?= $row['jurusan'] ?></td>
                                        <td><?= $row['tahun_masuk'] ?> -
                                            <?= $row['tahun_lulus'] ?>
                                        </td>
                                    </tr>
                            <?php }
                            endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
    <!-- akhir education -->

    <!-- experience -->
    <section id="experience" style="padding-top:9rem">
        <div class="container" style="padding-bottom:10rem;">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-md-12">
                    <h1>Experience</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                $queryDp = mysqli_query($con, "SELECT * FROM tbl_detail_pekerjaan WHERE nik=$nik");
                foreach ($queryDp as $qdp) :
                ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= $qdp['perusahaan'] ?></h5>
                                <p class="card-text">Periode : <?= $qdp['periode'] ?></p>
                                <p class="card-text">Jabatan :<?= $qdp['jabatan'] ?></p>
                                <p class="card-text">Alamat : <?= $qdp['alamat_perusahaan'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </section>
    <!-- akhir education -->

    <!-- Skill -->
    <section id="skills" class="bg-light" style="padding-top: 10rem;">
        <div class="container" style="padding-bottom:10rem;">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-md-12 text-center">
                    <h1>Skills</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <ul class="slider">
                        <?php
                        $query = mysqli_query($con, "SELECT * FROM tbl_detail_keahlian WHERE nik='$nik'");
                        foreach ($query as $r) :
                        ?>

                            <li>
                                <div align="center">
                                    <img src="../image/<?= $r['image_keahlian'] ?>" width="200px" alt="">
                                    <h1><?= $r['keahlian'] ?></h1>
                                </div>
                            </li>

                        <?php endforeach ?>
                    </ul>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

                    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

                    <script type="text/javascript">
                        $('.slider').slick({
                            infinite: true,
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            autoplay: true,
                            autoplaySpeed: 2500,
                        });
                    </script>


                </div>
            </div>


    </section>
    <!-- akhir skill -->

    <!-- portfolio -->
    <section id="portfolio">
        <div class="container" style="padding-bottom:10rem;">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-md-12 text-center">
                    <h1>Portfolio</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <?php
                $queryDp = mysqli_query($con, "SELECT * FROM tbl_detail_galery WHERE nik=$nik");
                foreach ($queryDp as $qdp) :
                ?>
                    <div class="col-md-4 mb-3">
                        <img src="../image/<?= $qdp['image_portfolio'] ?>" class="img-thumbnail" alt="...">
                    </div>
                <?php endforeach ?>

            </div>
        </div>

    </section>
    <h4 align="right" style="margin-right: 70px;"><a href="../index.php">Kembali</a></h4>


    <footer class="text-center bg-light p-3">
        <p> &#169 <?= date('Y') ?> Copyright <?= $result['nama'] ?> - C</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>