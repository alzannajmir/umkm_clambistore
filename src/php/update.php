<?php

require_once 'db.php';

// === Bagian Text
$nama_toko               = $_POST['nama_toko'];
$tagline_toko            = $_POST['tagline_toko'];
$about_umkm              = $_POST['about_toko'];
// === Produk pada Slide
$nama_kategori_1        = $_POST['nama_kategori_1'];
$nama_kategori_2        = $_POST['nama_kategori_2'];
$nama_kategori_3        = $_POST['nama_kategori_3'];
$nama_kategori_4        = $_POST['nama_kategori_4'];
$nama_kategori_5        = $_POST['nama_kategori_5'];
// === Toko Online
$shopee                = $_POST['shopee'];
$lazada                 = $_POST['lazada'];
$tokopedia                = $_POST['tokopedia'];
// === Alamat Toko
$kota1                    = $_POST['kota1'];
$no_telp1                 = $_POST['no_telp1'];
$alamat1                  = $_POST['alamat1'];
$kota2                    = $_POST['kota2'];
$no_telp2                 = $_POST['no_telp2'];
$alamat2                  = $_POST['alamat2'];
$kota3                    = $_POST['kota3'];
$no_telp3                 = $_POST['no_telp3'];
$alamat3                  = $_POST['alamat3'];

$result = mysqli_query($conn, "UPDATE `settings` SET 
                              `value` = CASE `name`
                                    WHEN 'nama_toko'                  THEN '$nama_toko'
                                    WHEN 'tagline_toko'               THEN '$tagline_toko'
                                    WHEN 'about_toko'                 THEN '$about_toko'
                                    WHEN 'nama_kategori_1'            THEN '$nama_kategori_1'    
                                    WHEN 'nama_kategori_2'            THEN '$nama_kategori_2'    
                                    WHEN 'nama_kategori_3'            THEN '$nama_kategori_3'    
                                    WHEN 'nama_kategori_4'            THEN '$nama_kategori_4'    
                                    WHEN 'nama_kategori_5'            THEN '$nama_kategori_5'
                                    WHEN 'shopee'                     THEN '$shopee'
                                    WHEN 'lazada'                     THEN '$lazada'
                                    WHEN 'tokopedia'                  THEN '$tokopedia'
                                    WHEN 'kota_1'                     THEN '$kota1'
                                    WHEN 'no_telp1'                   THEN '$no_telp1'
                                    WHEN 'alamat1'                    THEN '$alamat1'       
                                    WHEN 'kota_2'                     THEN '$kota2'
                                    WHEN 'no_telp2'                   THEN '$no_telp2'
                                    WHEN 'alamat2'                    THEN '$alamat2'
                                    WHEN 'kota_3'                     THEN '$kota3'
                                    WHEN 'no_telp3'                   THEN '$no_telp3'
                                    WHEN 'alamat3'                    THEN '$alamat3'                                   
                                    END
                              WHERE `name` IN ('nama_toko', 'tagline_toko', 'about_toko', 'nama_kategori_1', 'nama_kategori_2', 'nama_kategori_3', 'nama_kategori_4', 'nama_kategori_5', 'shopee', 'lazada', 'tokopedia', 
                              'kota1', 'no_telp1', 'alamat1', 'kota2', 'no_telp2', 'alamat2', 'kota3', 'no_telp3', 'alamat3')");


// =========== Jumbotron Image =============
// mengambil nama file gambar jumbotron yang lama
$result_jumbotron = mysqli_query($conn, "SELECT value FROM settings WHERE name='gambar_jumbotron'");
$row_jumbotron = mysqli_fetch_assoc($result_jumbotron);
$old_jumbotron_image = $row_jumbotron['value'];

// cek apakah ada file jumbotron yang diunggah sekarang
if ($_FILES['gambar_jumbotron']['size'] > 0) {
      // menghapus file gambar jumbotron yang lama
      $path_jumbotron = "../../assets/images/jumbotron/" . $old_jumbotron_image;
      if (file_exists($path_jumbotron)) {
            unlink($path_jumbotron);
      }
      // menyimpan gambar jumbotron yang baru
      $gambar_jumbotron = $_FILES['gambar_jumbotron']['name'];
      $tmp_jumbotron = $_FILES['gambar_jumbotron']['tmp_name'];
      $path_jumbotron = "../../assets/images/jumbotron/" . $gambar_jumbotron;
      move_uploaded_file($tmp_jumbotron, $path_jumbotron);

      // menyimpan nama file gambar menu rekomendasi yang baru ke dalam database
      mysqli_query($conn, "UPDATE settings SET value='$gambar_jumbotron' WHERE name='gambar_jumbotron'");
} else {
      // jika tidak ada file jumbotron yang diunggah, gunakan file jumbotron lama
      $gambar_jumbotron = $old_jumbotron_image;
}


// =========== Image Rekomendasi Menu =============
// Loop untuk menyimpan gambar menu rekomendasi
for ($i = 1; $i <= 6; $i++) {
      // Get the name of the current menu image file from the database
      $result_menu = mysqli_query($conn, "SELECT value FROM settings WHERE name='img_rekomendasi_$i'");
      $row_menu = mysqli_fetch_assoc($result_menu);
      $old_menu_image = $row_menu['value'];

      // Check if a new menu image file has been uploaded
      if ($_FILES["img_rekomendasi_$i"]['size'] > 0) {
            // Delete the old menu image file
            $path_menu = "../../assets/images/rekomendasi/" . $old_menu_image;
            if (file_exists($path_menu)) {
                  unlink($path_menu);
            }

            // Save the new menu image file
            $menu_image = $_FILES["img_rekomendasi_$i"]['name'];
            $tmp_menu = $_FILES["img_rekomendasi_$i"]['tmp_name'];
            $path_menu = "../../assets/images/rekomendasi/" . $menu_image;
            move_uploaded_file($tmp_menu, $path_menu);

            // Save the new menu image file name to the database
            mysqli_query($conn, "UPDATE settings SET value='$menu_image' WHERE name='img_rekomendasi_$i'");
      } else {
            // Use the current menu image file if no new file was uploaded
            $menu_image = $old_menu_image;
      }
}



header('Location: ../../index.php');
