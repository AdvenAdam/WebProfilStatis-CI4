<?php

namespace App\Controllers;



class Home extends BaseController
{

	public function dataSlider()
	{

		$slider = [
			[
				'gambar'	=> 'slider2.png',
				'prodi'		=> 'PTIK FKIP UNS',
				'judul'		=> 'Profil PTIK-UNS',
				'isi'		=> 'Fakultas Keguruan dan Ilmu Pendidikan Universitas Sebelas Maret Surakarta merupakan Lembaga Pendidikan Tenaga Kependidikan (LPTK) yang memiliki 24 program studi di 6 jurusan. Masing-masing program studi mempunyai ciri khas dalam menghasilkan tenaga kependidikan yang unggul, berkarakter kuat dan cerdas.'
			],
			[
				'gambar'	=> 'slider1.png',
				'prodi'		=> 'PTIK FKIP UNS',
				'judul'		=> 'Visi, Misi dan Tujuan',
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
			[
				'author'	=> 'adminPro',
				'tanggal'	=> '05 Aug 2019',
				'judul'		=> 'Mahasiswa PTIK Sabet Medali Perunggu di Jepang',
				'gambar'	=> 'berita1.jpg',
				'isi'		=> '<p>Mahasiswa Universitas Sebelas Maret (UNS) Surakarta berhasil meraih medali perunggu dalam ajang Advanced Innovation Jam (AI-JAM) Japan 2019 yang digelar di Accenture Innovation Hub Tokyo, Minggu (8/12/2019).</p>

				<p>Ajang ini merupakan salah satu ajang kompetisi sekaligus pameran inovasi teknologi internasional terbesar di Jepang yang diikuti oleh 159 peserta yang terbuka untuk seluruh negara, termasuk tim dari UNS ini yang beranggotakan Nur Hijrah As Salam Al Ihsan (Pendidikan Teknik Informatika dan Komputer FKIP), Intan Wahyu Ningsih dan Nada Hidayatus Sangadah (Fisika FMIPA), Serta Tema Rizan Mumtaza dan Muhammad Nibraasuddin Aley Zulkarnaen (Informatika FMIPA).</p>
				
				<p>Fokus AI-JAM ini seputar inovasi teknologi seperti Artificial Intelligence (AI), Robotik, Hardware, dan Data Mining. Sehingga dalam ajang tersebut, tim ini mengenalkan inovasi berupa aplikasi yang diberi nama ‘Tuker Sampah’. Latar belakang perancangan inovasi ini adalah maraknya gerakan penukaran sampah menjadi sesuatu yang bernilai. Namun sangat disayangkan gerakan-gerakan tersebut tidak termanajemen dengan baik sehingga tidak menjadi gerakan yang berkelanjutan justru seringkali hanya menjadi gerakan yang insidental.</p>
				
				
				<p>Hadirnya aplikasi Tuker Sampah diharapkan menjadi jembatan dari gerakan-gerakan tersebut. Terdapat tiga pihak dalam aplikasi ini, yaitu sebagai penghasil sampah, pengelola sampah, dan donatur/instansi/komunitas yang dapat memberikan sesuatu sebagai hasil penukaran poin</p>
				
				<p>Mekanisme dari aplikasi ini adalah ketika user menggunakan aplikasi, mereka akan mendatangi salah satu shelter terdekat untuk menukarkan sampah. Jenis dan banyaknya sampah menentukan poin yang akan mereka dapatkan. Poin-poin tersebut dapat ditukarkan dengan berbagai hal yang bernilai, seperti jasa layanan kesehatan, cash money, bibit pohon, peralatam pendakian, dll tergantung kebutuhan user.</p>
				
				<p>Mengenai jangka waktu terdekat, rencana pengembangan dari aplikasi Tuker Sampah ini akan diterapkan khusus di daerah pegunungan. Terkusus lagi Gunung Lawu karena gunung tersebut merupakan gunung dengan jarak terdekat dan strategis dari letak geografis UNS sehingga dapat lebih mudah dalam uji coba realisasi tahap awal. Mekanisme pengembangan aplikasi ini yaitu ketika user (pendaki) menemukan sampah, terdapat dua opsi (memfoto untuk dikirim dalam aplikasi atau membawanya). Jika user memilih untuk memfoto maka user dengan radius terdekat yang berkeinginan membawa sampah akan dengan menemukan letaknya. Jika user memilih untuk menngambil sampah maka ketika sampai pada basecamp terakhir akan dapat ditukar dengan barang-barang pendakian sesuai poin yang didapat.</p>
				
				<p>Tim tersebut secara bertahap melakukan pengembanagn aplikasi dan sistemnya. Sehingga mereka sangat terbuka dengan berbagai pihak yang ingin bekerja sama untuk merealisasikan ide yang dimiliki. Mereka pun mengharapkan dana dari investor dan juga pemerintah dalam proses pengembangan aplikasi ini.</p>'
			],
			[
				'author'	=> 'Mikroptik',
				'tanggal'	=> '28 Feb 2021',
				'judul'		=> 'Pengabdian Masyarakat ke Desa Kemuning Bersama Permikomnas',
				'gambar'	=> 'berita2.jpg',
				'isi'		=> '<p>Kegiatan pengabdian masyarakat ini diadakan oleh permikomnas (Perhimpunan Mahasiswa Informatika dan Komputer Nasional) dalam rangka pengabdian ke SVN (Smart Village National). Kegiatan ini diadakan pada tanggal 26 dan 27 Februari 2021 di desa Kemuning. Dalam kegiatan ini peran mahasiswa sangatlah penting terkhususnya di bidang IT. Kegiatan ini sendiri diikuti oleh beberapa pengurus dari permikomnas sendiri dan berbagai universitas lain dengan jurusan IT. Dari prodi Pendidikan Teknik Informatika dan Komputer sendiri terdapat beberapa mahasiswa yang ikut dalam acara pengabdian masyarakat ini dengan nama sebagai berikut Paulus Lestyo Adhiatma, Hera Fatmawati, Ahmad Mishbahuddin, Natanael Junior Setiawan, dan Adven Adam K.</p>

				<p>Dalam kegiatan kali ini dipandu oleh Bapak Bambang selaku relawan TIK. Pemberangkatan dilakukan pada pukul 07.00 WIB di Kampus V JPTK sebagai titik poin berkumpul dan berangkat menuju ke Desa Kemuning Kecamatan Ngargoyoso, Kabupaten Karanganyar, Jawa Tengah. Setibanya disana kegiatan dimulai dengan penjelasan mengenai smart village yang mana desa tersebut merupakan desa sebagai percontohan smart village nasional. Di desa tersebut juga berkembang banyak umkm dengan berjumlah total hingga saat ini ada sebanyak 48 umkm dari total target berjumlah 50 umkm. Berbagai produk dihasilkan oleh umkm yang ada di desa tersebut sebagai contoh produknya yaitu Kripik jamur, Kripik Pare, Frozen food, Jamu Bubuk instant, tanaman hias, aneka olahan ubi dan masih banyak lagi.</p>
				
				<p>Dengan begitu masyarakat sangatlah mengandalkan umkm – umkm yang mereka buat dan bergantung pada pendatang yang datang. Namun sayang dengan kondisi pandemik saat ini pendapatan umkm tersebut menjadi menurun. Tak kehabisan akal mereka mencoba menjual produk umkm mereka melalui media yang lain seperti online shop dan berharap dapat memanfaatkan teknologi saat ini agar dapat meningkatkan pendapatan mereka Kembali. Dan karena itulah kegiatan pengabdian masyarakat ini dilaksanakan sebagai bentuk dalam mengembangkan umkm di desa tersebut dengan melakukan lebih pengenalan produk umkm mereka melalui media yang ada.</p>
				
				<p>Berbagai upaya yang dilakukan dalam kegiatan pengabdian masyarakat ini, dimana mereka masih mengupayakannya dengan ide berupa meningkatkan online shop mereka di media sosial yang ada, merekap dan memberikan ruang akses di internet dengan menggunakan media web tentang umkm, dan bisa ditambah dengan membuat video profil desa tersebut sebagai media promosi. Semoga kegiatan pengabdian tersebut dapat berjalan dengan lancar dan memberikan hasil yang sesuai dengan apa yang diinginkan.</p>'
			],
			[
				'author'	=> 'Mikroptik',
				'tanggal'	=> '28 Feb 2021',
				'judul'		=> 'Video Profile PTIK 2021 Branding dengan semangat kompetisi',
				'gambar'	=> 'berita3.jpg',
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

	public function index()
	{

		$data = [
			'title'		=> 'PTIK V2.0',
			'slider'	=> $this->dataSlider(),
			'dosen'		=> $this->dataDosen(),
			'berita'	=> $this->dataBerita(),
			'mitra'	=> $this->dataMitra(),
		];
		return view('Home/Home', $data);
	}
}
