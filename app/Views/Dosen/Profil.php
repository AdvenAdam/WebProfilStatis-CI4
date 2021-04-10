<?= $this->extend('template/v_main'); ?>
<?= $this->Section('content'); ?>
<div class="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-item text-center">
                    <h2 class="title"><?= $title; ?></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home </a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                        </ol>
                    </nav>
                </div> <!-- page title -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>

<!--====== PAGE TITLE PART ENDS ======-->
<div class="blog-details-quote text-center mt-30 mb-100">
    <p><span>by</span> Imam Syafie</p>
    <h5>"Bila kamu tak tahan lelahnya belajar, maka kamu akan menanggung perihnya kebodohan" </h5>
    <i class="fas fa-quote-left"></i>
</div>
<!--====== Start cart-area section ======-->
<section class="cart-area pb-140">
    <div class="container">
        <div class="cart-table table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Name</th>
                        <th>NIP</th>
                        <th>Email</th>
                        <th>Interest</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dosen as $item) { ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td>
                                <img src="/template/assets/images/dosen/<?= $item['foto']; ?>" alt="" style="width: 150px; height: 130px; object-fit: cover; object-position: center;">
                            </td>
                            <td><?= $item['nama']; ?></a></td>
                            <td><?= $item['NIP']; ?></td>
                            <td><?= $item['email']; ?></td>
                            <td><?= $item['interest']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</section>
<!--====== End cart-area section ======-->
<?= $this->endSection(); ?>