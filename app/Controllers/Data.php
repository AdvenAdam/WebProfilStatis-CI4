<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Data extends BaseController
{
	public function dataSlider()
	{

		$slider = [
			[
				'gambar'	=> 'slider2.png',
				'prodi'		=> 'PTIK FKIP UNS',
				'judul'		=> 'Profil PTIK-UNS',
				'link'		=> '/profil',
				'isi'		=> 'Fakultas Keguruan dan Ilmu Pendidikan Universitas Sebelas Maret Surakarta merupakan Lembaga Pendidikan Tenaga Kependidikan (LPTK) yang memiliki 24 program studi di 6 jurusan. Masing-masing program studi mempunyai ciri khas dalam menghasilkan tenaga kependidikan yang unggul, berkarakter kuat dan cerdas.'
			],
			[
				'gambar'	=> 'slider1.png',
				'prodi'		=> 'PTIK FKIP UNS',
				'judul'		=> 'Visi, Misi dan Tujuan',
				'link'		=> '/profil/visi-misi',
				'isi'		=> '-::| VISI |::- "Menjadi pusat pendidikan, penelitian dan pelatihan yang unggul dan inovatif di tingkat internasional bidang pendidikan kejuruan teknik informatika dan komputer yang berlandaskan nilai-nilai luhur budaya nasional" -::|…'
			],
		];
		return $slider;
	}
	public function dataDosen()
	{

		$dosen = [
			[
				'nama' 		=> 'Cucuk Wawan Budiyanto, S.T., Ph.D.',
				'NIP'  		=> '1978032520161001',
				'email' 	=> 'cbudiyanto@staff.uns.ac.id',
				'interest' 	=> 'Educational Robotics; Technology-use in Education; Digital Transformation',
				'foto' 		=> 'pak_cucuk.jpg'
			],
			[
				'nama' 		=> 'Puspanda Hatta, S.Kom., M.Eng.',
				'NIP'  		=> '198712312019031024',
				'email' 	=> 'hatta.puspanda@staff.uns.ac.id',
				'interest' 	=> 'Computer Network, Cybersecurity',
				'foto' 		=> 'pak_hatta.jpg'
			],
			[
				'nama' 		=> 'Nurcahya Pradana Taufik Prakisya, S.Kom., M.Cs.',
				'NIP'  		=> '199109242019031015',
				'email' 	=> 'nurcahya.ptp@staff.uns.ac.id',
				'interest' 	=> 'Computer Vision, Artificial Intelligence',
				'foto' 		=> 'pak_cahya.jpg'
			],
			[
				'nama' 		=> 'Febri Liantoni, S.ST., M.Kom',
				'NIP'  		=> '198802072019031009',
				'email' 	=> 'febri.liantoni@gmail.com',
				'interest' 	=> 'Data Mining, Kecerdasan Buatan',
				'foto' 		=> 'pak_febri.jpg'
			],
			[
				'nama' 		=> 'Aris Budianto, ST. M.Eng',
				'NIP'  		=> '198012172005011001',
				'email' 	=> 'arisbudianto@staff.uns.ac.id',
				'interest' 	=> 'Educational Technology',
				'foto' 		=> 'pak_aris.jpg'
			],
			[
				'nama' 		=> 'Basori, M.Pd',
				'NIP'  		=> '197904202005011002',
				'email' 	=> 'basori@staff.uns.ac.id',
				'interest' 	=> 'e-learning, online learning, Learning Media',
				'foto' 		=> 'pak_basori.jpg'
			],

		];
		return $dosen;
	}

	public function dataBerita()
	{
		$berita = [
			'1' => [
				'author'	=> 'adminPro',
				'tanggal'	=> '05 Aug 2019',
				'judul'		=> 'Mahasiswa PTIK Sabet Medali Perunggu di Jepang',
				'gambar'	=> 'berita1.jpg',
				'link'		=> '/berita/1',
				'isi'		=> '<p>Mahasiswa Universitas Sebelas Maret (UNS) Surakarta berhasil meraih medali perunggu dalam ajang Advanced Innovation Jam (AI-JAM) Japan 2019 yang digelar di Accenture Innovation Hub Tokyo, Minggu (8/12/2019).</p>

				<p>Ajang ini merupakan salah satu ajang kompetisi sekaligus pameran inovasi teknologi internasional terbesar di Jepang yang diikuti oleh 159 peserta yang terbuka untuk seluruh negara, termasuk tim dari UNS ini yang beranggotakan Nur Hijrah As Salam Al Ihsan (Pendidikan Teknik Informatika dan Komputer FKIP), Intan Wahyu Ningsih dan Nada Hidayatus Sangadah (Fisika FMIPA), Serta Tema Rizan Mumtaza dan Muhammad Nibraasuddin Aley Zulkarnaen (Informatika FMIPA).</p>
				
				<p>Fokus AI-JAM ini seputar inovasi teknologi seperti Artificial Intelligence (AI), Robotik, Hardware, dan Data Mining. Sehingga dalam ajang tersebut, tim ini mengenalkan inovasi berupa aplikasi yang diberi nama ‘Tuker Sampah’. Latar belakang perancangan inovasi ini adalah maraknya gerakan penukaran sampah menjadi sesuatu yang bernilai. Namun sangat disayangkan gerakan-gerakan tersebut tidak termanajemen dengan baik sehingga tidak menjadi gerakan yang berkelanjutan justru seringkali hanya menjadi gerakan yang insidental.</p>
				
				
				<p>Hadirnya aplikasi Tuker Sampah diharapkan menjadi jembatan dari gerakan-gerakan tersebut. Terdapat tiga pihak dalam aplikasi ini, yaitu sebagai penghasil sampah, pengelola sampah, dan donatur/instansi/komunitas yang dapat memberikan sesuatu sebagai hasil penukaran poin</p>
				
				<p>Mekanisme dari aplikasi ini adalah ketika user menggunakan aplikasi, mereka akan mendatangi salah satu shelter terdekat untuk menukarkan sampah. Jenis dan banyaknya sampah menentukan poin yang akan mereka dapatkan. Poin-poin tersebut dapat ditukarkan dengan berbagai hal yang bernilai, seperti jasa layanan kesehatan, cash money, bibit pohon, peralatam pendakian, dll tergantung kebutuhan user.</p>
				
				<p>Mengenai jangka waktu terdekat, rencana pengembangan dari aplikasi Tuker Sampah ini akan diterapkan khusus di daerah pegunungan. Terkusus lagi Gunung Lawu karena gunung tersebut merupakan gunung dengan jarak terdekat dan strategis dari letak geografis UNS sehingga dapat lebih mudah dalam uji coba realisasi tahap awal. Mekanisme pengembangan aplikasi ini yaitu ketika user (pendaki) menemukan sampah, terdapat dua opsi (memfoto untuk dikirim dalam aplikasi atau membawanya). Jika user memilih untuk memfoto maka user dengan radius terdekat yang berkeinginan membawa sampah akan dengan menemukan letaknya. Jika user memilih untuk menngambil sampah maka ketika sampai pada basecamp terakhir akan dapat ditukar dengan barang-barang pendakian sesuai poin yang didapat.</p>
				
				<p>Tim tersebut secara bertahap melakukan pengembanagn aplikasi dan sistemnya. Sehingga mereka sangat terbuka dengan berbagai pihak yang ingin bekerja sama untuk merealisasikan ide yang dimiliki. Mereka pun mengharapkan dana dari investor dan juga pemerintah dalam proses pengembangan aplikasi ini.</p>'
			],
			'2' => [
				'author'	=> 'Mikroptik',
				'tanggal'	=> '28 Feb 2021',
				'judul'		=> 'Pengabdian Masyarakat ke Desa Kemuning Bersama Permikomnas',
				'gambar'	=> 'berita2.jpg',
				'link'		=> '/berita/2',
				'isi'		=> '<p>Kegiatan pengabdian masyarakat ini diadakan oleh permikomnas (Perhimpunan Mahasiswa Informatika dan Komputer Nasional) dalam rangka pengabdian ke SVN (Smart Village National). Kegiatan ini diadakan pada tanggal 26 dan 27 Februari 2021 di desa Kemuning. Dalam kegiatan ini peran mahasiswa sangatlah penting terkhususnya di bidang IT. Kegiatan ini sendiri diikuti oleh beberapa pengurus dari permikomnas sendiri dan berbagai universitas lain dengan jurusan IT. Dari prodi Pendidikan Teknik Informatika dan Komputer sendiri terdapat beberapa mahasiswa yang ikut dalam acara pengabdian masyarakat ini dengan nama sebagai berikut Paulus Lestyo Adhiatma, Hera Fatmawati, Ahmad Mishbahuddin, Natanael Junior Setiawan, dan Adven Adam K.</p>

				<p>Dalam kegiatan kali ini dipandu oleh Bapak Bambang selaku relawan TIK. Pemberangkatan dilakukan pada pukul 07.00 WIB di Kampus V JPTK sebagai titik poin berkumpul dan berangkat menuju ke Desa Kemuning Kecamatan Ngargoyoso, Kabupaten Karanganyar, Jawa Tengah. Setibanya disana kegiatan dimulai dengan penjelasan mengenai smart village yang mana desa tersebut merupakan desa sebagai percontohan smart village nasional. Di desa tersebut juga berkembang banyak umkm dengan berjumlah total hingga saat ini ada sebanyak 48 umkm dari total target berjumlah 50 umkm. Berbagai produk dihasilkan oleh umkm yang ada di desa tersebut sebagai contoh produknya yaitu Kripik jamur, Kripik Pare, Frozen food, Jamu Bubuk instant, tanaman hias, aneka olahan ubi dan masih banyak lagi.</p>
				
				<p>Dengan begitu masyarakat sangatlah mengandalkan umkm – umkm yang mereka buat dan bergantung pada pendatang yang datang. Namun sayang dengan kondisi pandemik saat ini pendapatan umkm tersebut menjadi menurun. Tak kehabisan akal mereka mencoba menjual produk umkm mereka melalui media yang lain seperti online shop dan berharap dapat memanfaatkan teknologi saat ini agar dapat meningkatkan pendapatan mereka Kembali. Dan karena itulah kegiatan pengabdian masyarakat ini dilaksanakan sebagai bentuk dalam mengembangkan umkm di desa tersebut dengan melakukan lebih pengenalan produk umkm mereka melalui media yang ada.</p>
				
				<p>Berbagai upaya yang dilakukan dalam kegiatan pengabdian masyarakat ini, dimana mereka masih mengupayakannya dengan ide berupa meningkatkan online shop mereka di media sosial yang ada, merekap dan memberikan ruang akses di internet dengan menggunakan media web tentang umkm, dan bisa ditambah dengan membuat video profil desa tersebut sebagai media promosi. Semoga kegiatan pengabdian tersebut dapat berjalan dengan lancar dan memberikan hasil yang sesuai dengan apa yang diinginkan.</p>'
			],
			'3' => [
				'author'	=> 'Mikroptik',
				'tanggal'	=> '28 Feb 2021',
				'judul'		=> 'Video Profile PTIK 2021 Branding dengan semangat kompetisi',
				'gambar'	=> 'berita3.jpg',
				'link'		=> '/berita/3',
				'isi'		=> '<p>Dalam rangka ikut memeriahkan perlombaan dies natalis Universitas Sebelas Maret Fakultas Keguruan dan Ilmu Pendidikan, Pendidikan Teknik Informatika mengeluarkan Video Profile PTIK baru. Video profil kali ini dibuat oleh beberapa mahasiswa PTIK sendiri diantaranya adalah Firman Adiyuda sebagai  Penulis & Sutradara; Devin Michael Brahmasta sebagai Penata Kamera; Army sebagai Asisten Kameramen; Dito, Alta, Fikri sebagai Editor; Aini Erma sebagai Asisten Produksi, Radaza, Daniel Sebagai Pemeran.</p>

				<p>Pembuatan video ini dilaksanakan dalam kurun waktu 2 setengah hari di kampus 5 JPTK UNS. video yang dibuat dalam kurun waktu 2 setengah hari tersebut berdurasi 7 menit 7 detik. Adapun beberapa kendala juga dialami dalam proses pembuatan video profile PTIK. Kendala yang sering terjadi selama proses pembuatan yaitu take berulang ulang karena belum sempat gladi bersih jadi lebih lama dalam pembuatannya.</p>	'
			],
		];
		return $berita;
	}

	public function dataMitra()
	{
		$mitra = [

			[
				'nama' 		=> 'SMKN 1 SUKOHARJO',
				'gambar'	=> 'smk1skh.jpg',
				'link'		=> 'https://smkn1sukoharjo.sch.id/'
			],
			[
				'nama' 		=> 'SMKN 2 SURAKARTA',
				'gambar'	=> 'smk2ska.jpg',
				'link'		=> 'https://smkn2solo.sch.id/'
			],
			[
				'nama' 		=> 'SMKN 3 SUKOHARJO',
				'gambar'	=> 'smk3ska.jpg',
				'link'		=> 'http://smkn3ska.sch.id//'
			],
			[
				'nama' 		=> 'SMKN 5 SURAKARTA',
				'gambar'	=> 'smk5ska.jpg',
				'link'		=> 'http://www.smkn5solo.sch.id/'
			],
			[
				'nama' 		=> 'SMKN 6 SURAKARTA',
				'gambar'	=> 'smk6ska.jpg',
				'link'		=> 'https://smkn6solo.sch.id/'
			],
			[
				'nama' 		=> 'SMKN 2 KARANGANYAR',
				'gambar'	=> 'smk2kra.jpg',
				'link'		=> 'https://www.smkn2kra.sch.id/'
			],
			[
				'nama' 		=> 'SMKN 1 SAWIT BOYOLALI ',
				'gambar'	=> 'smk1swt.jpg',
				'link'		=> 'http://web.smkn1sawitboyolali.sch.id/'
			],
			[
				'nama' 		=> 'SMKN 1 BANYUDONO',
				'gambar'	=> 'smk1byd.jpg',
				'link'		=> 'http://www.smkn1banyudono.sch.id/'
			],

		];
		return $mitra;
	}

	public function dataVisiMisi()
	{
		$visimisi = [
			[
				'visi' 	=> '<p>Menjadi pusat pendidikan, penelitian dan pelatihan yang unggul dan inovatif di tingkat internasional bidang pendidikan kejuruan teknik informatika dan komputer yang berlandaskan nilai-nilai luhur budaya nasional</p>',
				'misi' 	=>	'<p>Menyelenggarakan pendidikan, pelatihan dan bimbingan secara efektif untuk menghasilkan tenaga pendidik yang unggul dan inovatif, berdaya saing tinggi, mandiri dan berkepribadian dalam bidang teknik informatika dan computer berdasarkan perkembangan terakhir ilmu pengetahuan dan teknologi.</p>

				<p>Menyelenggarakan kegiatan penelitian dan pengembangan sebagai upaya meningkatkan kemajuan ilmu pengetahuan dan teknologi khususnya bidang teknik informatika dan komputer.</p>
				<p>Menyelenggarakan kegiatan pengabdian kepada masyarakat sebagai wujud kepekaan dan kepedulian dalam kehidupan bermasyarakat.</p>
				<p>Mengembangkan kerjasama dengan institusi di dalam dan luar negeri dalam bidang vokasi.</p>',
				'tujuan' =>  '<p>Menghasilkan lulusan yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa berkepribadian luhur, cerdas dan terampil yang siap menjadi tenaga pendidik atau tenaga kependidikan professional dengan berwawasan global di bidang teknik informatika dan computer</p>
				<p>Menghasilkan produk inovasi baru dalam bidang teknik informatika dan komputer, serta menyebarkan ilmu pengetahuan dan teknologi melalui publikasi ilmiah</p>
				<p>Menghasilkan karya-karya pengabdian kepada masyarakat dalam bidang teknik informatika dan komputer yang mampu memecahkan permasalahan dalam kehidupan masyarakat</p>
				<p>Menjalin kerjasama dengan institusi di dalam maupun di luar negeri dalam bidang vokasi.</p>'
			]
		];
		return $visimisi;
	}

	public function dataFasilitas()
	{
		$fasiliitas = [
			'fasilitas' => [
				'gambar' => 'fasilitas.jpg',
				'isi' => '<p>Progam Studi S-1 Pendidikan Teknik Informatika dan Komputer FKIP UNS menempati gedung yang cukup luas, representative dan strategis di lingkungan FKI Universitas Sebelas Maret. Lokasi kampus berada di kampusKentingan Surakarta yang merupakan kampus pusat FKIP UNS. Fasilitas fisik tersebut akan dimanfaatkan secara optimal. Di lokasi tersebut juga telah tersedia laboratorium komputer yang cukup memadai dan representativeuntuk digunakan sebagai sarana pembelajaran pada Program Studi Pendidikan Teknik Informatika dan Komputer.</p>
				<p>
				1. Gedung kuliah<br>
				2. Laboratorium<br>
				3. Perpustakaan<br>
				4. Studio Multimedia
				</p>'
			],
			'gedung' => [
				'gambar' => 'gedung.jpg',
				'isi' => '<p>	Gedung Kuliah PTIK berada di Kampus V Jurusan Pendidikan Teknik Kejuruan Fakultas Keguruan dan Ilmu Pendidikan Universitas Sebelas Maret Surakarta yang beralamatkan di Jl. Jend. Ahmad Yani 200A Pabelan, Kartasura, Sukoharjo 57100. Terdapat tiga program studi yang berada di Kampus V JPTK FKIP UNS yakni Pendidikan Teknik Mesin (PTM), Pendidikan Teknik Bangunan (PTB) dan juga Pendidikan Teknik Informatika dan Komputer (PTIK).</p>

				</p>	Terdapat 2 Gedung utama di Kampus V JPTK FKIP UNS yang dapat digunakan untuk proses belajar mengajar. Selain ruang kuliah, PTIK juga memiliki beberapa ruang untuk proses perkuliahan seperti Laboratorium Komputer, Laboratorium Jaringan, Laboratorium Perakitan dan Maintenance, Studio Multimedia, serta Perpustakaan.</p>'
			],
			'laboratorium' => [
				'gambar' => 'laboratorium.jpg',
				'isi' => '<p>	Laboratorium memegang peranan yang sangat penting dalam proses pembelajaran pada program studi S1 Teknik Informatika. Laboratorium komputer yang berada di FKIP UNS selalu berkoordinasi dengan ICT Center FKIP UNS dan UPT Pusat Komputer (PUSKOM) UNS. Hal ini dilakukan agar terjadi sharing informasi dan teknologi serta membantu dalam pelaksanaan e-learning. Adapun rincian informasi mengenai sarana dan prasarana yang tersedia di Laboratorium Komputer dapat dilihat pada menu di bawah ini :</p>

					1. Laboratorium Komputer<br>
					<img src="/template/assets/images/fasilitas/lab-1.png" alt="">
					<img src="/template/assets/images/fasilitas/lab-2.png" alt="" class="mb-10">

					2. Laboratorium Microteaching<br><br>
					
					<p>		Untuk menghasilkan lulusan tenaga kependidikan (guru) yang berkualitas maka mahasiswa perlu dibekali dengan pengetahuan dan praktik menjadi guru yang berkompeten. Sebelum mahasiswa diterjunkan untuk Program pengalaman Lapangan (PPL) di sekolah mitra, maka perlu mendalami kegiatan pembelajaran secara micro. Di laboratorium microteaching ini, mahasiswa dapat mempraktikkan kegiatan sebagai guru. Untuk memenuhi kebutuhan akan laboratorium microteaching, pada tahun-tahun awal, program studi pendidikan teknologi informatika dan komputer dapat melakukan resource sharing dengan program studi lain di jurusan PTK. Sedangkan untuk tahun-tahun selanjutnya, akan diusahakan laboratorium microteaching yang memadai melalui hibah kompetitif A2, atau sumber dana lainnya.</p>'
			],
			'perpustakaan' => [
				'gambar' => 'perpus.jpg',
				'isi' => '<p>Perpustakaan merupakan fasilitas penunjang paling penting dalam proses belajar mengajar. Selain perpustakaan di tingkat fakultas, di setiap prodi atau BKK di lingkungan FKIP juga mempunyai perpustakaan sehingga mempermudah civitas akademika untuk memperoleh buku, jurnal atau karya ilmiah lainnya. Perpustakaan di tingkat fakultas dan perpustakaan (ruang baca) di setiap prodi atau BKK selalu bersinergi untuk memenuhi kebutuhan mahasiswa dalam hal penyediaan referensi. Sejak tahun 2008 pelayanan perpustakaan sudah menggunakan Sistem Digital Library yang memudahkan pengguna perpustakaan  dalam mengakses ilmu pengetahuan dan teknologi.
				</p>'
			],
			'studio' => [
				'gambar' => 'studio.jpg',
				'isi' => '<p>Studio Multimedia merupakan salah satu fasilitas yang cukup penting untuk menunjang serta meningkatkan kreativitas dari mahasiswa, tak terkecuali untuk mahasiswa Pendidikan Teknik Informatika dan Komputer. Sesuai visi dari prodi PTIK yakni sebagai “program studi penghasil dan pengembang tenaga pendidik di bidang teknologi informatika dan komputer yang unggul, berkarakter kuat dan cerdas serta berdaya saing tinggi,mandiri, dan berkepribadian”, maka multimedia pun menjadi salah satu materi penting yang perlu dikuasai oleh mahasiswa PTIK.</p

				<p>Studio Multimedia memiliki peralatan-peralatan multimedia yang cukup memadai seperti komputer dengan spesifikasi mumpuni, peralatan-peralatan fotografi serta peralatan-peralatan broadcasting. Berbagai aktivitas yang berhubungan dengan multimedia pun dapat dilakukan di studio multimedia ini seperti fotografi, membuat animasi, broadcasting, hingga membuat streaming video.
				</p>'
			],
			'spmb' => [
				'gambar' => 'spmb.jpg',
				'isi' => '<p>Berikut adalah alur peendaftaran Program Studi Pendidikan Teknik Informatika dan Komputer ( PTIK ) :
				</p>'
			],
			'akreditasi' => [
				'gambar' => 'akreditasi.jpg',
				'isi' => '<p>Berdasarkan SK BAN-PT NOMOR : 4485/SK/BAN-PT/Akred/S/XI/2019 , Program Studi Pendidikan Teknik Informatika dan Komputer UNS telah terakreditasi dengan peringkat A. Berikut ini adalah dokumen pendukung bukti akreditasi terhitung sejak tanggal 6 – November – 2019 sampai dengan 6 – November – 2024
				</p>'
			],
		];

		return $fasiliitas;
	}
}
