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

    <link rel="stylesheet" href="assets/stylesheet/revisi.css">
    <title>Produk Kami</title>
    <!-- icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="../../src/stylesheet/produk.css">
    <link rel="shortcut icon" href="../../assets/images/logo.png" type="text/ico" />
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar sticky-top bg-body-tertiary navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="../../index.php"><span style="color: #BACDCB">@Klambi</span>Store.</a>
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
                            <li><a class="dropdown-item" href="#tentang-kami">History</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="product-list">
            <div class="menu">
                <ul>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <li><a href="baju.php" target="konten">Baju</a></li>
                    <li><a href="celana.php" target="konten">Celana</a></li>
                    <li><a href="jaket.php" target="konten">Jaket</a></li>
                    <li><a href="sepatu.php" target="konten">Sepatu</a></li>
                    <li><a href="semua.php" target="konten">Semua Produk</a></li>
                </ul>
            </div>

            <iframe class="konten" name="konten" src="baju.php"></iframe>

        </div>
    </div>

    <!-- <div class="container">
        <div class="product-list">
            <ul class="nav justify-content-center" style="list-style: none;">
                <form class="form-inline" style="display: block; margin-top: 10px;">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <li class="nav-item" style="display: block; margin-top: 10px;">
                    <a class="nav-link active" aria-current="page" href="produk/baju.html" target="konten">Baju</a>
                </li>
                <li class="nav-item" style="display: block; margin-top: 10px;">
                    <a class="nav-link active" aria-current="page" href="produk/celana.html" target="konten">Celana</a>
                </li>
                <li class="nav-item" style="display: block; margin-top: 10px;">
                    <a class="nav-link active" aria-current="page" href="produk/jaket.html" target="konten">Jaket</a>
                </li>
                <li class="nav-item" style="display: block; margin-top: 10px;">
                    <a class="nav-link active" aria-current="page" href="produk/sepatu.html" target="konten">Sepatu</a>
                </li>
                <li class="nav-item" style="display: block; margin-top: 10px;">
                    <a class="nav-link active" aria-current="page" href="produk/semua.html" target="konten">Semua</a>
                </li>
            </ul>
            <iframe class="konten" name="konten" src="produk/baju.html"></iframe>
        </div>
    </div> -->


    <footer>
        <div class="container">
            <p class="m-0 text-center text-black">Copyright &copy; Magang Nash 2023</p>
        </div>
    </footer>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="assets/javascript/script.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>