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
                                <img src="/template/assets/images/slider2.png" alt="" class="mt-10 mb-20">
                                <p>Fakultas Keguruan dan Ilmu Pendidikan Universitas Sebelas Maret Surakarta merupakan Lembaga Pendidikan Tenaga Kependidikan (LPTK) yang memiliki 24 program studi di 6 jurusan. Masing-masing program studi mempunyai ciri khas dalam menghasilkan tenaga kependidikan yang unggul, berkarakter kuat dan cerdas.</p>

                                <p>Program studi Pendidikan Teknologi Informatika dan Komputer (PTIK) direncanakan bernaung dalam pengelolaan jurusan Pendidikan Teknik dan Kejuruan (PTK). Penempatan ini merevisi pernyataan kami sebelumnya, dimana program studi PTIK bernanung di bawah jurusan P.MIPA. PTIK merupakan program studi yang akan menghasilkan lulusan yang diutamakan akan mengajar dalam program vokasi/kejuruan. Sehingga, akan lebih baik jika PTIK bernanung di bawah jurusan PTK yang membawahi program-program vokasi seperti Pendidikan Teknik Bangunan, dan Pendidikan Teknik Mesin. Untuk memenuhi kebutuhan dosen bidang teknologi informasi yang belum dapat dipenuhi oleh jurusan PTK, PTIK akan melakukan resource sharing dengan prodi matematika.</p>

                                <p> <iframe width="560" height="315" src="https://www.youtube.com/embed/ijdrsNmd1YE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </p>
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