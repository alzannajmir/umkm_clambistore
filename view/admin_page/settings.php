<?php
// pastikan sesi sudah dimulai
session_start();

// periksa apakah pengguna sudah login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  // pengguna belum login, arahkan ke halaman login
  header('Location: login.php');
  exit;
}

require_once '../../src/php/db.php';

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="assets/stylesheet/settings.css">

  <title>Seetings</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="index.php">Email</a>
          <a class="nav-item nav-link active" href="settings.php">Pengaturan</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container m-5 p-5 mx-auto rounded border" style="background-color: whitesmoke;">
    <h1 class="text-center">Pengaturan</h1>
    <form action="../../src/php/update.php" method="post" enctype="multipart/form-data">
      <div class="umkm-profile">
        <h4 class="mt-5">Ubah nama dan tagline</h4>
        <div class="row">
          <div class="form-group col">
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_toko" placeholder="Nama UMKM" value="<?php echo getValue('nama_toko') ?>">
          </div>
          <div class="form-group col">
            <input type="text" class="form-control" id="exampleFormControlInput1" name="tagline_toko" placeholder="Tagline UMKM" value="<?php echo getValue('tagline_toko') ?>">
          </div>
        </div>
      </div>
      <!--  -->
      <div class="images">
        <div class="fluid-images">
          <h4 class="mt-4">Mengubah gambar</h4>
          <div class="custom-file mt-1">
            <input type="file" class="custom-file-input" id="jumbotron_image" name="jumbotron_image" placeholder="gambar jumbotron" value="<?php echo getValue('gambar_jumbotron') ?>" accept=".jpg,.jpeg,.png">
            <label class="custom-file-label" for="jumbotron_image">Gambar Jumbotron</label>
          </div>
          <div class="custom-file mt-1">
            <input type="file" class="custom-file-input" id="jumbotron_image" name="jumbotron_image" placeholder="logo toko" value="<?php echo getValue('logo_toko') ?>" accept=".jpg,.jpeg,.png">
            <label class="custom-file-label" for="jumbotron_image">Logo Toko</label>
          </div>
          <!--  -->
          <h4 class="mt-4">Mengatur gambar Produk pada Slide</h4>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="custom-file">
                <input type="file" name="gambar_kategori_1" class="custom-file-input" id="img_rekomendasi_1" value="<?php echo getValue('gambar_kategori_1') ?>">
                <label class="custom-file-label" for="img_rekomendasi_1">Kategori 1</label>
                <input type="text" class="form-control" name="nama_kategori_1" placeholder="kategori 1" value="<?php echo getValue('nama_kategori_1') ?>">
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="custom-file">
                <input type="file" name="gambar_kategori_2" class="custom-file-input" id="img_rekomendasi_2" value="<?php echo getValue('gambar_kategori_2') ?>">
                <label class="custom-file-label" for="img_rekomendasi_2">Kategori 2</label>
                <input type="text" class="form-control" name="nama_kategori_2" placeholder="kategori 2" value="<?php echo getValue('nama_kategori_2') ?>">
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="custom-file">
                <input type="file" name="gambar_kategori_3" class="custom-file-input" id="img_rekomendasi_3" value="<?php echo getValue('gambar_kategori_3') ?>">
                <label class="custom-file-label" for="img_rekomendasi_3">Kategori 3</label>
                <input type="text" class="form-control" name="nama_kategori_3" placeholder="kategori 3" value="<?php echo getValue('nama_kategori_3') ?>">
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="custom-file">
                <input type="file" name="gambar_kategori_4" class="custom-file-input" id="img_rekomendasi_4" value="<?php echo getValue('gambar_kategori_4') ?>">
                <label class="custom-file-label" for="img_rekomendasi_4">Kategori 4</label>
                <input type="text" class="form-control" name="nama_kategori_4" placeholder="kategori 4" value="<?php echo getValue('nama_kategori_4') ?>">
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="custom-file">
                <input type="file" name="gambar_kategori_5" class="custom-file-input" id="img_rekomendasi_5" value="<?php echo getValue('gambar_kategori_5') ?>">
                <label class="custom-file-label" for="img_rekomendasi_5">Kategori 5</label>
                <input type="text" class="form-control" name="nama_kategori_5" placeholder="kategori 5" value="<?php echo getValue('nama_kategori_5') ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="about">
        <h4 class="mt-4">About Toko</h4>
        <div class="form-group">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="about_toko" placeholder="About"><?php echo getValue('about_toko') ?></textarea>
        </div>
      </div>
      <!--  -->
      <div class="panel">
        <h4 class="mt-2">Link Toko Online</h4>
        <div class="row panel mt-1">
          <div class="col-md-4">
            <label>Shopee</label>
            <input type="text" class="form-control" name="lokasi" placeholder="link ig" value="<?php echo getValue('shopee') ?>">
          </div>
          <div class="col-md-4">
            <label>Lazada</label>
            <input type="text" class="form-control" name="lokasi_link" placeholder="Link fb" value="<?php echo getValue('lazada') ?>">
          </div>
          <div class="col-md-4">
            <label>Tokopedia</label>
            <input type="text" class="form-control" name="jam_buka" placeholder="link twitter" value="<?php echo getValue('tokopedia') ?>">
          </div>
        </div>
      </div>
      <div class="social-media">
        <h4 class="mt-4">Alamat Toko</h4>
        <div class="row panel mt-2">
          <div class="col-md-4 p-2">
            <label>Cabang 1</label>
            <input type="text" class="form-control" name="kota" placeholder="kota" value="<?php echo getValue('kota1') ?>">
            <input type="text" class="form-control" name="no_telp" placeholder="no telp" value="<?php echo getValue('no_telp1') ?>">
            <input type="text" class="form-control" name="alamat" placeholder="alamat" value="<?php echo getValue('alamat1') ?>">
          </div>
          <div class="col-md-4 p-2">
            <label>Cabang 2</label>
            <input type="text" class="form-control" name="kota" placeholder="kota" value="<?php echo getValue('kota2') ?>">
            <input type="text" class="form-control" name="no_telp" placeholder="no telp" value="<?php echo getValue('no_telp2') ?>">
            <input type="text" class="form-control" name="alamat" placeholder="alamat" value="<?php echo getValue('alamat2') ?>">
          </div>
          <div class="col-md-4 p-2">
            <label>Cabang 3</label>
            <input type="text" class="form-control" name="kota" placeholder="kota" value="<?php echo getValue('kota3') ?>">
            <input type="text" class="form-control" name="no_telp" placeholder="no telp" value="<?php echo getValue('no_telp3') ?>">
            <input type="text" class="form-control" name="alamat" placeholder="alamat" value="<?php echo getValue('alamat3') ?>">
        </div>
      </div>
          <div class="form-btn mt-5 d-flex justify-content-between">
            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>



  <!-- Panel Kategori -->
  <div class="container bg-light px-5 py-5 mt-5 rounded border">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h1 class="mb-4 text-center"></h1>
        <form action="../../src/php/product_action.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="kategori" placeholder="Kategori baru" aria-label="Tambah Kategori" aria-describedby="button-add" autocomplete="off">
            <button class="btn btn-primary" name="add_kategori" type="submit" id="button-add">Add</button>
          </div>
        </form>
        <ul class="list-group ">
          <?php
          $query = "SELECT * FROM kategori_produk";
          $result = mysqli_query($conn, $query);
          ?>
          <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <li class="list-group-item d-flex justify-content-between rounded">
              <form action="../../src/php/product_action.php" method="post" class="d-flex w-100">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <input type="text" class="form-control me-2" name="kategori" value="<?= $row['kategori'] ?>">
                <button type="submit" name="edit_kategori" class="btn btn-warning me-2">Edit</button>
              </form>
              <form action="../../src/php/product_action.php" method="post">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <button type="submit" name="delete_kategori" class="btn btn-danger">Delete</button>
              </form>
            </li>
          <?php endwhile; ?>

        </ul>
      </div>
    </div>
  </div>

  <!-- Panel Produk -->
  <div class="container bg-light px-5 py-2 mt-3 mb-5 rounded border">
    <div class="container mt-5">
      <h1 class="mt-5">Produk</h1>
      <form action="../../src/php/product_action.php" method="post" enctype="multipart/form-data">
        <div class="row border p-4 justify-content-between">
          <div class="col">
            <div class="mb-3">
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Produk" name="nama_produk" autocomplete="off">
            </div>
          </div>
          <div class="col">
            <select class="form-select" aria-label="Default select example" name="kategori">
              <option selected disabled>Pilih Kategori</option>
              <?php
              $query = "SELECT * FROM kategori_produk";
              $result = mysqli_query($conn, $query);
              ?>
              <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row['kategori'] ?></option>
              <?php endwhile; ?>
            </select>
          </div>
          <div class="col">
            <div class="mb-3">
              <input class="form-control" type="file" id="formFile" name="gambar_produk" autocomplete="off">
            </div>
          </div>
          <button type="submit" name="add_produk" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>


    </form>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>