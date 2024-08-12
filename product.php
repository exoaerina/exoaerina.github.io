<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kami</title>
    <link rel="stylesheet" href="<?= base_url('asset/css/anm-product.css'); ?>">
    <!-- Include other stylesheets and scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container-fluid position-relative">
        <div style="margin-bottom: 100px;"></div>
        <h1 class="h2 text-gray-900 text-center" style="margin-bottom: 50px;">Produk Kami</h1>

        <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>

        <div class="row">
            <?php foreach ($products as $product) : ?>
                <?php
                $foto_produk = isset($product['gambar_produk']) && is_file(FCPATH . 'asset/img/produk/' . $product['gambar_produk']) ? htmlspecialchars($product['gambar_produk']) : 'default.jpg';
                $image_path = base_url('asset/img/produk/' . $foto_produk);
                ?>
                <div class="col-md-5 col-lg-3 mb-4 mt-4 fade-in position-relative">
                    <div class="card rounded shadow-sm border-0">
                        <!-- Tautan untuk membuka modal -->
                        <a href="#" data-toggle="modal" data-target="#detailProduk<?= $product['id']; ?>" class="card-link">
                            <div class="card-img-top">
                                <img src="<?= $image_path; ?>" class="img-fluid rounded-top" alt="<?= htmlspecialchars($product['nama']); ?>">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($product['nama']); ?></h5>
                                <p class="card-text"><?= ellipsize(htmlspecialchars($product['detail']), 30); ?></p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Modal untuk detail produk -->
                <div class="modal fade" id="detailProduk<?= $product['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="detailProdukLabel<?= $product['id']; ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-center w-100">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?= $image_path; ?>" class="img-fluid rounded" alt="<?= htmlspecialchars($product['nama']); ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <h5><?= htmlspecialchars($product['nama']); ?></h5>
                                        <p><?= htmlspecialchars($product['detail']); ?></p>
                                        <p><strong>Harga:</strong> <?= $product['harga'] ? 'Rp. ' . number_format($product['harga'], 0, ',', '.') : 'Tidak ada harga'; ?></p>
                                        <p><strong>Kategori:</strong> <?= htmlspecialchars($product['kategori_produk']); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="https://wa.me/6281249867396?text=Halo,%20saya%20tertarik%20untuk%20membeli%20produk%20<?= urlencode(htmlspecialchars($product['nama'])); ?>.%20Bisakah%20Anda%20memberi%20saya%20informasi%20lebih%20lanjut?" class="btn btn-primary" target="_blank">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Tombol Navigasi Halaman -->
        <?php if ($current_page > 0) : ?>
            <button class="nav-button left" onclick="window.location.href='<?= site_url('home/product/' . ($current_page - $per_page)); ?>'">
                <i class="fas fa-arrow-left"></i>
            </button>
        <?php endif; ?>

        <?php if ($current_page + $per_page < $total_rows) : ?>
            <button class="nav-button right" onclick="window.location.href='<?= site_url('home/product/' . ($current_page + $per_page)); ?>'">
                <i class="fas fa-arrow-right"></i>
            </button>
        <?php endif; ?>



</body>

</html>