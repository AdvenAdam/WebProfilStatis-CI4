<!--====== BRAND 2 PART START ======-->

<div class="brand-2-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-active">
                    <?php foreach ($mitra as $item) { ?>
                        <div class="brand-item">
                            <a href="<?= $item['link']; ?>" target="_blank"><img src="template/assets/images/mitra/<?= $item['gambar']; ?>" alt="<?= $item['nama']; ?>" style="width: 150px; height: 150px; object-fit: cover; object-position: center;"></a>
                        </div>
                    <?php } ?>
                </div> <!-- brand item -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div>
<!--====== BRAND 2 PART ENDS ======-->