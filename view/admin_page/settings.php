<?php
require_once '../../src/php/db.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Pengaturan</title>
    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">

        <!-- Home Meu -->
        <h1 class="mt-5" id="homemenu">Home Menu</h1>
        <form action="../../src/php/update.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama Toko</label>
                <input type="text" class="form-control" id="nama" name="nama_toko" placeholder="nama toko" value="<?php echo getValue('nama_toko') ?>">
            </div>
            <div class="form-group">
                <label for="text">Tagline Toko</label>
                <input type="text" class="form-control" id="tagline" name="tagline_toko" value="<?php echo getValue('tagline_toko') ?>">
            </div>
            <div class="mb-3">
                <label for="formfile" class="form-label">Jumbotron</label>
                <input class="form-control" type="file" id="formfile" name="jumbotron_toko" value="<?php echo getValue('jumbotron_toko') ?>"accept=".jpg,.jpeg,.png">
            </div>

            <!-- Tentang Kami -->
            <h1 class="mt-5" id="tentangkami">Tentang Kami</h1>
            <div class="form-group">
                <label for="telepon">Deskripsi Toko</label>
                <textarea type="tel" class="form-control" id="lokasi" name="tentang_kami"
                    placeholder="bisa di isi dengan histtory atau profile toko" value="<?php echo getValue('tentang_kami')?>"></textarea>
            </div>
            <ul class="list-group">
                <label for="telepon">Link Sosial Media</label>
                <li class="list-group-item mb-2">
                    <div class="form-group">
                        <input type="tel" class="form-control" id="sosialmedia" name="link_instagram"
                            placeholder="Instagram" value="<?php echo getValue('link_instagram') ?>">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="sosialmedia" name="link_facebook"
                            placeholder="Facebook" value="<?php echo getValue('link_facebook') ?>">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="sosialmedia" name="link_twitter"
                            placeholder="Twitter" value="<?php echo getValue('link_twitter') ?>">
                    </div>
                </li>
            </ul>
            <ul class="list-group">
                <label for="telepon">Toko Online</label>
                <li class="list-group-item mb-2">
                    <div class="form-group">
                        <input type="tel" class="form-control" id="sosialmedia" name="link_shopee"
                            placeholder="Instagram" value="<?php echo getValue('link_shopee') ?>">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="sosialmedia" name="link_lazada"
                            placeholder="Facebook" value="<?php echo getValue('link_lazada') ?>">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="sosialmedia" name="link_tokopedia"
                            placeholder="Twitter" value="<?php echo getValue('link_tokopedia') ?>">
                    </div>
                </li>
            </ul>
            <div class="mb-3">
                <label for="formfile" class="form-label">Logo Toko</label>
                <input class="form-control" type="file" id="formfile" name="logo_toko" 
                value="<?php echo getValue('logo_toko') ?>" accept=".jpg,.jpeg,.png">
            </div>

            <h2 class="mt-4" id="produkpadaslide">Mengatur Produk pada Slide</h2>
            <ul class="list-group">
                <li class="list-group-item mb-2">
                    <label for="email">Kategori Satu</label>
                    <input type="email" class="form-control" id="tagline" name="kategori_satu" value="<?php echo getValue('kategori_satu') ?>">
                    <label for="formfile" class="form-label"></label>
                    <input class="form-control" type="file" id="formfile" name="file_kategori_satu"  value="<?php echo getValue('file_kategori_satu') ?>">
                </li>
                <li class="list-group-item mb-2">
                    <label for="email">Kategori Dua</label>
                    <input type="email" class="form-control" id="tagline" name="kategori_dua"  value="<?php echo getValue('kategori_dua') ?>">
                    <label for="formfile" class="form-label"></label>
                    <input class="form-control" type="file" id="formfile" name="file_kategori_dua"  value="<?php echo getValue('file_kategori_dua') ?>">
                </li>
                <li class="list-group-item mb-2">
                    <label for="email">Kategori Tiga</label>
                    <input type="email" class="form-control" id="tagline" name="kategori_tiga"  value="<?php echo getValue('kategori_tiga') ?>">
                    <label for="formfile" class="form-label"></label>
                    <input class="form-control" type="file" id="formfile" name="file_kategori_tiga" value="<?php echo getValue('file_kategori_tiga') ?>">
                </li>
                <li class="list-group-item mb-2">
                    <label for="email">Kategori Empat</label>
                    <input type="email" class="form-control" id="tagline" name="kategori_empat"  value="<?php echo getValue('kategori_empat') ?>">
                    <label for="formfile" class="form-label"></label>
                    <input class="form-control" type="file" id="formfile" name="file_kategori_empat"  value="<?php echo getValue('file_kategori_empat') ?>">
                </li>
                <li class="list-group-item mb-2">
                    <label for="email">Kategori Lima</label>
                    <input type="email" class="form-control" id="tagline" name="kategori_lima"  value="<?php echo getValue('kategori_lima') ?>">
                    <label for="formfile" class="form-label"></label>
                    <input class="form-control" type="file" id="formfile" name="file_kategori_lima"  value="<?php echo getValue('file_kategori_lima') ?>">
                </li>
            </ul>
            <h2 class="mt-4" id="menambahkanartikel">Menambahkan Artikel</h2>
            <ul class="list-group">
                <li class="list-group-item mb-2">
                    <label for="email">Per-Produk Satu</label>
                    <input type="email" class="form-control" id="tagline" name="produk_satu" value="<?php echo getValue('produk_satu') ?>">
                    <label for="formfile" class="form-label"></label>
                    <input class="form-control" type="file" id="formfile" name="file_produk_satu" value="<?php echo getValue('file_produk_satu') ?>">
                    <div class="action-list d-flex justify-content-between">
                        <a href="">Hapus</a>
                        <a href="">+Tambah</a>
                    </div>
                </li>
                <li class="list-group-item mb-2">
                    <label for="email">Per-Produk Dua</label>
                    <input type="email" class="form-control" id="tagline" name="produk_dua" value="<?php echo getValue('produk_dua') ?>">
                    <label for="formfile" class="form-label"></label>
                    <input class="form-control" type="file" id="formfile" name="file_produk_dua" value="<?php echo getValue('file_produk_dua') ?>">
                    <div class="action-list d-flex justify-content-between">
                        <a href="">Hapus</a>
                        <a href="">+Tambah</a>
                    </div>
                </li>
                <li class="list-group-item mb-2">
                    <label for="email">Per-Produk Tiga</label>
                    <input type="email" class="form-control" id="tagline" name="produk_tiga" value="<?php echo getValue('produk_tiga') ?>">
                    <label for="formfile" class="form-label"></label>
                    <input class="form-control" type="file" id="formfile" name="file_produk_tiga" value="<?php echo getValue('file_produk_tiga') ?>">
                    <div class="action-list d-flex justify-content-between">
                        <a href="">Hapus</a>
                        <a href="">+Tambah</a>
                    </div>
                </li>
                <li class="list-group-item mb-2">
                    <label for="email">Per-Produk Empat</label>
                    <input type="email" class="form-control" id="tagline" name="produk_empat" value="<?php echo getValue('produk_empat') ?>">
                    <label for="formfile" class="form-label"></label>
                    <input class="form-control" type="file" id="formfile" name="file_produk_empat" value="<?php echo getValue('file_produk_empat') ?>">
                    <div class="action-list d-flex justify-content-between">
                        <a href="">Hapus</a>
                        <a href="">+Tambah</a>
                    </div>
                </li>
                <li class="list-group-item mb-2">
                    <label for="email">Per-Produk Lima</label>
                    <input type="email" class="form-control" id="tagline" name="produk_lima" value="<?php echo getValue('produk_lima') ?>">
                    <label for="formfile" class="form-label"></label>
                    <input class="form-control" type="file" id="formfile" name="file_produk_lima" value="<?php echo getValue('file_produk_lima') ?>">
                    <div class="action-list d-flex justify-content-between">
                        <a href="">Hapus</a>
                        <a href="">+Tambah</a>
                    </div>
                </li>
            </ul>
            <h2 class="mt-5">Pengaturan Umum</h2>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="notifikasi" name="notifikasi">
                    <label class="form-check-label" for="notifikasi">Notifikasi</label>
                </div>
            </div>
            <div class="form-group">
                <label for="bahasa">Bahasa:</label>
                <select class="form-control" id="bahasa" name="bahasa">
                    <option value="id">Indonesia</option>
                    <option value="en">Inggris</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <!-- Load Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>