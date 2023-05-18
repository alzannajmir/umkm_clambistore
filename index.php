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
                Pada bulan Maret 2023, ide Clambi.Co Brand lahir dari kegelisahan dua pemuda. Merka sadar bahwa
                    produk lokal
                    harus berkembang. Namun
                    mereka tidak pernah dapat menemukan apa yang mereka cari. Kebutuhan akan tempat untuk
                    mengekspresikan dan menyuarakan
                    ide-ide juga merupakan faktor mendasar yang mengarah pada penciptaan Clambi.Co.

                    Lahirlah sebuah Website ini, tumbuh dan berakar pada keresahan, membuat Clambi.Co terikat dan
                    melekat
                    secara pribadi pada
                    bidang UMKM. Ini adalah faktor penting dalam pengembangan Clambi.Co gaya dan sikap
                    kritis, terkadang
                    menyenangkan, tetapi selalu pintar. Itu juga membuat Clambi.Co Dulu selalu melihat sesuatu dari
                    sudut
                    pandang subjektif
                    dan personal, sehingga semua pemikiran dan ide yang diberikan selalu terlihat berbeda.
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
                <h3 style="color: #C7CFB7;">Top Collection"<?php echo getValue('nama_kategori_1') ?>
                    <a href="view/product/produk.php">Beli Sekerang</a>
                </h3>
            </div>
            <div class="panel" style="background-image: url('./assets/images/slider/slide2.jpg');">
                <h3 style="color: #C7CFB7;">Kumpulan Baju Ekslusif"<?php echo getValue('nama_kategori_2') ?>
                    <a href="view/product/produk.php">Beli Sekerang</a>
                </h3>
            </div>
            <div class="panel" style="background-image: url('./assets/images/slider/slide3.jpg');">
                <h3 style="color: #C7CFB7;">Hari Raya 1st Drops Collection"<?php echo getValue('nama_kategori_3') ?>
                    <a href="view/product/produk.php">Beli Sekerang</a>
                </h3>
            </div>
            <div class="panel" style="background-image: url('./assets/images/slider/slide4.jpg');">
                <h3 style="color: #C7CFB7;">April 2nd Drops Collection"<?php echo getValue('nama_kategori_4') ?>
                    <a href="view/product/produk.php">Beli Sekerang</a>
                </h3>
            </div>
            <div class="panel" style="background-image: url('./assets/images/slider/slide5.jpg');">
                <h3 style="color: #C7CFB7;">Kumpulan Jaket Ekslusif"<?php echo getValue('nama_kategori_5') ?>
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
                        <h3 class="h4 mb-2">Bandung</h3>
                        <p class="text-muted mb-0">No.Telp (022)845356</p>
                        <p class="text-muted mb-0">Jl. Trunojoyo, Citarum, Bandung Wetan</p>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <h3 class="h4 mb-2">Jakarta</h3>
                        <p class="text-muted mb-0">No.Telp (022)843813</p>
                        <p class="text-muted mb-0">Jl. Jendral Sudirman, Tanah Abang, Jakarta Pusat</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <h3 class="h4 mb-2">Semarang</h3>
                        <p class="text-muted mb-0">No.Telp (022)8432586</p>
                        <p class="text-muted mb-0">Jl. RA Kartini, Rejosari, Semarang Timur</p>
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
                <i data-feather="shopping-cart"></i>
                <div class="p-3">Shopee</div>
            </div>
            <div class="col">
                <i data-feather="box"></i>
                <div class="p-3">Lazada</div>
            </div>
            <div class="col">
                <i data-feather="shopping-bag"></i>
                <div class="p-3">Tokopedia</div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div id="kontak">
        <div class="container contact mt-5">
            <h2 class="text-center">Contact</h2>
            <form class="row g-3 mt-2">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label"></label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <div class="container">
            <p style="font-size: larger;">Social Media</p>
            <p><i data-feather="instagram"></i>
                <i data-feather="facebook"></i>
                <i data-feather="twitter"></i>
                <i data-feather="mail"></i>
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