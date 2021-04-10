<?= $this->extend('template/v_page'); ?>
<?= $this->section('blog'); ?>
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


<div class="blog-standard-area pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-standard">
                    <div class="single-blog-standard  mt-30">
                        <div class="blog-dteails-content blog-border">
                            <div class="blog-details-top">
                                <span>Profil</span>
                                <h2 class="title"><?= $title; ?></h2>
                            </div>
                            <div class="blog-details-bath">
                                <h4 class="title">Visi</h4>
                                <p><?= $visi; ?></p>
                                <h4 class="title">Misi</h4>
                                <p><?= $misi; ?></p>
                                <h4 class="title">Tujuan</h4>
                                <p><?= $tujuan; ?></p>
                            </div>
                            <div class="blog-details-quote text-center mt-30 mb-30">
                                <p><span>by</span> Ki Hajar Dewantara</p>
                                <h3 class="title">Ing Ngarsa Sung Tuladha, Ing Madya Mangun Karsa, Tut uri Handayani</h3>
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="blog-details-bar d-flex justify-content-between mt-40 mb-50">
                                <div class="blog-social">
                                    <h4 class="title">Social Share</h4>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-typo3"></i></a></li>
                                        <li><a href="#"><i class="fab fa-staylinked"></i></a></li>
                                        <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?= $this->endSection(); ?>