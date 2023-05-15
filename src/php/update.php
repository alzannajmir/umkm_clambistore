<?php

require_once 'db.php';

// === Home Menu ===
$nama_toko        = $_POST['nama_toko'];
$tagline_toko     = $_POST['tagline_toko'];

// === Tentang Kami ===
$panel_1          = $_POST['panel_1'];
$panel_2          = $_POST['panel_2'];
$panel_3          = $_POST['panel_3'];

$about_umkm       = $_POST['about_umkm'];

$link_instagram        = $_POST['link_instagram'];
$link_facebook         = $_POST['link_facebook'];
$link_twitter          = $_POST['link_twitter'];

$link_lazada           = $_POST['link_lazada'];
$link_shopee           = $_POST['link_shopee'];
$link_tokopedia        = $_POST['link_tokopedia'];

$kategori_satu        = $_POST['kategori_satu'];
$kategori_dua         = $_POST['kategori_dua'];
$kategori_tiga        = $_POST['kategori_tiga'];
$kategori_empat       = $_POST['kategori_empat'];
$kategori_lima        = $_POST['kategori_lima'];

$file_kategori_satu    = $_POST['file_kategori_satu'];
$file_kategori_dua     = $_POST['file_kategori_dua'];
$file_kategori_tiga    = $_POST['file_kategori_tiga'];
$file_kategori_empat   = $_POST['file_kategori_empat'];
$file_kategori_lima    = $_POST['file_kategori_lima'];



// === Bagian File Gambar ===
// mengambil nama file gambar jumbotron yang lama
$query = "SELECT value FROM settings WHERE name='jumbotron_toko'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$old_jumbotron_image = $row['value'];

// menghapus file gambar jumbotron yang lama
$path = "../../assets/images/jumbotron/" . $old_jumbotron_image;
if (file_exists($path)) {
      unlink($path);
}

// menyimpan gambar jumbotron yang baru
$jumbotron_toko = $_FILES['jumbotron_toko']['name'];
$tmp = $_FILES['jumbotron_toko']['tmp_name'];
$path = "../../assets/images/jumbotron/" . $jumbotron_toko;
move_uploaded_file($tmp, $path);

$result = mysqli_query($conn, "UPDATE `settings` SET 
                              `value` = CASE `name`
                                    WHEN 'nama_toko'              THEN '$nama_toko'
                                    WHEN 'tagline_toko'           THEN '$tagline_toko'
                                    WHEN 'jumbotron_toko'         THEN '$jumbotron_toko'
                                    WHEN 'about_umkm'             THEN '$about_umkm'
                                    WHEN 'link_instagram'         THEN '$link_instagram'
                                    WHEN 'link_facebook'          THEN '$link_facebook'
                                    WHEN 'link_twitter'           THEN '$link_twitter'                                   
                                    WHEN 'link_lazada'            THEN '$link_lazada'
                                    WHEN 'link_shopee'            THEN '$link_shopee'
                                    WHEN 'link_tokopedia'         THEN '$link_tokopedia'  
                                    END
                              WHERE `name` IN ('nama_umkm', 'tagline_umkm', 'panel_1', 'panel_2', 'panel_3', 'jumbotron_toko', 'about_umkm', 'instagram', 'whatsapp', 'envelope', 'facebook', 'linkedin', 'twitter')
                              ");

header('Location: ../../index.php');
