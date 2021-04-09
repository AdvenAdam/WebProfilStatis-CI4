<?= $this->extend('template/v_main'); ?>
<?= $this->section('content'); ?>

<?= $this->include('Home/Slider'); ?>
<?= $this->include('Home/Fasilitas'); ?>
<?= $this->include('Home/Profil'); ?>
<?= $this->include('Home/Dosen'); ?>
<?= $this->include('Home/Kontak'); ?>
<?= $this->include('Home/Mitra'); ?>

<?= $this->endSection(); ?>