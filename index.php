<?php
require_once 'src/php/db.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="src/stylesheet/index.css">
    <title>Clambi Store</title>
    <!-- icon -->
    <link rel="shortcut icon" href="assets/icons/logo.png" type="text/icon" />
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar sticky-top bg-body-tertiary navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><span style="color: #BACDCB"><?php echo getValue('nama_toko')?></span>Store.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto"> 
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#tentang-kami">Profile</a></li>
                            <li><a class="dropdown-item" href="#services">Lokasi Kami</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <section class="jumbotron shadow p-3 mb-5 bg-white rounded text-white container mt-5 mb-5">
        <h1 class="display-4"><span style="color: #BACDCB"><?php echo getValue('nama_toko')?></span>Store.</h1>
        <p class="lead" style="color: #BACDCB;"><?php echo getValue('tagline_toko')?></p>
        <!-- <hr class="my-4"> -->
    </section>

    <!-- Tentang Kami -->
    <section class="container" id="tentang-kami">
        <h2 class="text-center">Tentang Kami</h2>
        <div class="row mt-5 align-items-center text-center">
            <div class="col-sm-6">
                <img src="assets/images/clothing store.png" alt="" width="80%">
            </div>
            <div class="col-sm-6 pt-4 text-center">
                <p>
                    <?php echo getValue('about_toko')?>
                </p>
            </div>
        </div>
    </section>

    <!-- Produk Revisi -->
    <section id="produk">
        <h2 class="text-center p-5 mt-5">Produk Kami</h2>
        <div class="container produk" id="produk">
            <div class="panel active" style="background-image: url('./assets/images/slider/slide1.jpg');">
                <h3 style="color: #C7CFB7;"><?php echo getValue('nama_kategori_1') ?>
                    <a href="view/product/produk.php">Beli Sekerang</a>
                </h3>
            </div>
            <div class="panel" style="background-image: url('./assets/images/slider/slide2.jpg');">
                <h3 style="color: #C7CFB7;"><?php echo getValue('nama_kategori_2') ?>
                    <a href="view/product/produk.php">Beli Sekerang</a>
                </h3>
            </div>
            <div class="panel" style="background-image: url('./assets/images/slider/slide3.jpg');">
                <h3 style="color: #C7CFB7;"><?php echo getValue('nama_kategori_3') ?>
                    <a href="view/product/produk.php">Beli Sekerang</a>
                </h3>
            </div>
            <div class="panel" style="background-image: url('./assets/images/slider/slide4.jpg');">
                <h3 style="color: #C7CFB7;"><?php echo getValue('nama_kategori_4') ?>
                    <a href="view/product/produk.php">Beli Sekerang</a>
                </h3>
            </div>
            <div class="panel" style="background-image: url('./assets/images/slider/slide5.jpg');">
                <h3 style="color: #C7CFB7;">"<?php echo getValue('nama_kategori_5') ?>
                    <a href="view/product/produk.php">Beli Sekerang</a>
                </h3>
            </div>
        </div>
    </section>

    <!-- Lokasi Kami -->
    <section class="lokasi" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Daftar lokasi Toko <?php echo getValue('nama_toko')?></h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <h3 class="h4 mb-2"><?php echo getValue('kota1')?></h3>
                        <p class="text-muted mb-0"><?php echo getValue('no_telp1')?></p>
                        <p class="text-muted mb-0"><?php echo getValue('alamat1')?></p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <h3 class="h4 mb-2"><?php echo getValue('kota2')?></h3>
                        <p class="text-muted mb-0"><?php echo getValue('no_telp2')?></p>
                        <p class="text-muted mb-0"><?php echo getValue('alamat2')?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <h3 class="h4 mb-2"><?php echo getValue('kota3')?></h3>
                        <p class="text-muted mb-0"><?php echo getValue('no_telp3')?></p>
                        <p class="text-muted mb-0"><?php echo getValue('alamat3')?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media -->
    <div class="container px-4 text-center">
        <h2 class="text-center mt-0">Toko Online Kami</h2>
        <hr class="divider" />
        <div class="row gx-5">
            <div class="col">
                <a href="<?php echo getValue('shopee')?>">
                    <i data-feather="shopping-cart"></i>
                </a>
                <div class="p-3">Shopee</div>
            </div>
            <div class="col">
                <a href="<?php echo getValue('lazada')?>">
                    <i data-feather="box"></i>
                </a>
                <div class="p-3">Lazada</div>
            </div>
            <div class="col">
                <a href="<?php echo getValue('tokopedia')?>">
                    <i data-feather="shopping-bag"></i>
                </a>
                <div class="p-3">Tokopedia</div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div id="kontak">
        <div class="container contact mt-5">
            <h2 class="text-center">Contact</h2>
            <form class="row g-3 mt-2" method="post" action="src/php/send-email.php">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" name= "email" id="email">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" name="city" id="city">
                </div>
                <div class="col-md-5-mt-4">
                    <label for="subjek">Subject</label>
                    <select class="form-control" id="subjek" name="subjek" required>
                        <option value="">Chosee Subject</option>
                        <option value="pertanyaan">pertanyaan</option>
                        <option value="saran">Saran</option>
                        <option value="keluhan">Keluhan</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" name="pesan" id="pesan" rows="4"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" id="kirimButton">Send</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <div class="container">
            <p style="font-size: larger;">Social Media</p>
            <p>
                <a href="">
                    <i data-feather="instagram"></i>
                </a>
                <a href="">
                    <i data-feather="facebook"></i>
                </a>
                <a href="">
                    <i data-feather="twitter"></i>
                </a>    
            </p>
            <p style="font-size: x-small;">Copyright &copy; Magang Nash 2023</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        feather.replace()
    </script>
    <script src="./src/javascript/script.js"></script>
</body>

</html>