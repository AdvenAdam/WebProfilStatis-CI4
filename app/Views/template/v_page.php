<?= $this->extend('template/v_main'); ?>
<?= $this->Section('content'); ?>
<?= $this->renderSection('blog'); ?>



<!-- SideBar -->
<div class="col-lg-4 col-md-6 col-sm-8">
    <div class="blog-sidebar-area ml-20">
        <div class="blog-sidebar-item mt-30">
            <div class="sidebar-title">
                <h4 class="title">Akreditasi BAN-PT</h4>
            </div>
            <div class="sidebar-about-contnent text-center mt-35">
                <img src="/template/assets/images/akreditasi.jpg" alt="">
            </div>
        </div>
        <div class="blog-sidebar-item mt-30">
            <div class="sidebar-title">
                <h4 class="title">Visi</h4>
            </div>
            <div class="sidebar-about-contnent text-center mt-35">
                <p>Menjadi pusat pendidikan, penelitian dan pelatihan yang unggul dan inovatif di tingkat internasional bidang pendidikan kejuruan teknik informatika dan komputer yang berlandaskan nilai-nilai luhur budaya nasional</p>
            </div>
        </div>
        <div class="blog-sidebar-item mt-30">
            <div class="sidebar-title">
                <h4 class="title">Misi</h4>
            </div>
            <div class="sidebar-about-contnent text-center mt-35">
                <p>Menyelenggarakan pendidikan, pelatihan dan bimbingan secara efektif untuk menghasilkan tenaga pendidik yang unggul dan inovatif, berdaya saing tinggi, mandiri dan berkepribadian dalam bidang teknik informatika dan computer berdasarkan perkembangan terakhir ilmu pengetahuan dan teknologi.</p>
                <p>Menyelenggarakan kegiatan penelitian dan pengembangan sebagai upaya meningkatkan kemajuan ilmu pengetahuan dan teknologi khususnya bidang teknik informatika dan komputer.</p>
                <p>Menyelenggarakan kegiatan pengabdian kepada masyarakat sebagai wujud kepekaan dan kepedulian dalam kehidupan bermasyarakat.</p>
                <p>Mengembangkan kerjasama dengan institusi di dalam dan luar negeri dalam bidang vokasi.</p>
            </div>
        </div>

        <div class="blog-sidebar-item mt-30">
            <div class="sidebar-title">
                <h4 class="title">LEAFLET</h4>
            </div>
            <div class="sidebar-social text-center mt-35">
                <div class="add-content">
                    <a class="main-btn" href="">Lihat lebih lengkap <i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

<!--====== BLOG STANDARD PART ENDS ======-->
<?= $this->endSection(); ?>