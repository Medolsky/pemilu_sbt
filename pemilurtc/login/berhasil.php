<?php
session_start();
if (empty($_SESSION['username'])) {
header("location:terciduk.php"); // jika belum login, maka dikembalikan ke file form_login.php
}
else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="ninodezign.com, ninodezign@gmail.com">
	<meta name="copyright" content="ninodezign.com"> 
	<title>Pemilihan Ketua RTC 2020 - 2021 | Selamat Datang</title>
	
	<!-- favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
	<link rel="stylesheet" type="text/css" href="css/unslider.css" />
	<link rel="stylesheet" type="text/css" href="css/template.css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>

<body data-target="#nino-navbar" data-spy="scroll">

	<!-- Header
    ================================================== -->
	<header id="nino-header">
		<div id="nino-headerInner">					
			<nav id="nino-navbar" class="navbar navbar-default" role="navigation">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="../">RTC</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="nino-menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Beranda</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</div><!-- /.container-fluid -->
			</nav>

			<section id="nino-slider" class="carousel slide container" data-ride="carousel">
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading">Selamat Datang</span>
							Pemilih
						</h2>
						<a href="../" class="nino-btn">Keluar</a>
					</div>
				</div>
			</section>
		</div>
	</header><!--/#header-->

	<!-- Story About Us
    ================================================== -->
	<section id="nino-story">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Daftar</span>
				Calon Ketua RTC 2020 - 2021
			</h2>
			<p class="nino-sectionDesc">Inilah para kandidat - kandidat calon ketua RTC tahun 2020 - 2021 beserta visi, misi, dan program kerja nya </p>
			<div class="sectionContent">
				<div class="row nino-hoverEffect">
                    <div class="col-md-6 col-sm-6">
						<div class="item">
							<a class="overlay" href="#">
								<span class="content">
									<i class="mdi mdi-account-multiple nino-icon"></i>
									<br>Nomor Urut 1<br>Muhammad Fajar Ali Rohman
								</span>
								<img src="images/story/fajar.jpg" alt="">
							</a>
						</div>
					<br><br>
					
					<button data-toggle="modal" data-target="#visi1" class="btn btn-success"><span>Visi</span></button> <button data-toggle="modal" data-target="#misi1" class="btn btn-info"><span>Misi & Proker</span></button>
					<br><br>
					<form method="post" action="cekpemilih.php">
					<input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>" />
					<input type="hidden" name="yangdipilih" value="nomor urut 1" />
					<button class="btn btn-danger"><span>Pilih No Urut 1</span></button>
					</form>
                    </div>
                    
                    <br><br>

					<div class="col-md-6 col-sm-6">
						<div class="item">
							<a class="overlay" href="#">
								<span class="content">
									<i class="mdi mdi-account-multiple nino-icon"></i>
									<br>Nomor Urut 2<br>Raffi Arya Putra Prabowo
								</span>
								<img src="images/story/raffi.jpg" alt="">
							</a>
						</div>
                    
					<br><br>

					<button data-toggle="modal" data-target="#visi2" class="btn btn-success"><span>Visi</span></button> <button data-toggle="modal" data-target="#misi2" class="btn btn-info"><span>Misi & Proker</span></button>
					<br><br>
					<form method="post" action="cekpemilih.php">
					<input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>" />
					<input type="hidden" name="yangdipilih" value="nomor urut 2" />
					<button class="btn btn-danger"><span>Pilih No Urut 2</span></button>
					</form>
					</div>

					<div class="col-md-12"><br><br></div>

					<div class="col-md-6 col-sm-6">
						<div class="item">
							<a class="overlay" href="#">
								<span class="content">
									<i class="mdi mdi-account-multiple nino-icon"></i>
									<br>Nomor Urut 3<br>Rifki Dwi Yahya
								</span>
								<img src="images/story/rifki.jpg" alt="">
							</a>
						</div>

					<br><br>
					<button data-toggle="modal" data-target="#visi3" class="btn btn-success"><span>Visi</span></button> <button data-toggle="modal" data-target="#misi3" class="btn btn-info"><span>Misi & Proker</span></button>
					<br><br>
					<form method="post" action="cekpemilih.php">
					<input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>" />
					<input type="hidden" name="yangdipilih" value="nomor urut 3" />
					<button class="btn btn-danger"><span>Pilih No Urut 3</span></button>
					</form>
                    </div>
                    
                    <br><br>

					<div class="col-md-6 col-sm-6">
						<div class="item">
							<a class="overlay" href="#">
								<span class="content">
									<i class="mdi mdi-account-multiple nino-icon"></i>
									<br>Nomor Urut 4<br>Khoirul Anwar
								</span>
								<img src="images/story/khoirul.jpg" alt="">
							</a>
						</div>
					<br><br>
					<button data-toggle="modal" data-target="#visi4" class="btn btn-success"><span>Visi</span></button> <button data-toggle="modal" data-target="#misi4" class="btn btn-info"><span>Misi & Proker</span></button>
					<br><br>
					<form method="post" action="cekpemilih.php">
					<input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>" />
					<input type="hidden" name="yangdipilih" value="nomor urut 4" />
					<button class="btn btn-danger"><span>Pilih No Urut 4</span></button>
					</form>
                    </div>
                    
                    <div class="col-md-12"><br><br></div>
                    
					<div class="col-md-6 col-sm-6">
						<div class="item">
							<a class="overlay" href="#">
								<span class="content">
									<i class="mdi mdi-account-multiple nino-icon"></i>
									<br>Nomor Urut 5<br>Nicolaus Indra Permana
								</span>
								<img src="images/story/nicolaus.jpg" alt="">
							</a>
						</div>
					<br><br>
					<button data-toggle="modal" data-target="#visi5" class="btn btn-success"><span>Visi</span></button> <button data-toggle="modal" data-target="#misi5" class="btn btn-info"><span>Misi & Proker</span></button>
					<br><br>	
					<form method="post" action="cekpemilih.php">
					<input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>" />
					<input type="hidden" name="yangdipilih" value="nomor urut 5" />
					<button class="btn btn-danger"><span>Pilih No Urut 5</span></button>
					</form>
                    </div>

                    <br><br>
                    
					<div class="col-md-6 col-sm-6">
						<div class="item">
							<a class="overlay" href="#">
								<span class="content">
									<i class="mdi mdi-account-multiple nino-icon"></i>
									<br>Nomor Urut 6<br>Muhammad Satrio Adi Nugroho
								</span>
								<img src="images/story/satrio.jpg" alt="">
							</a>
						</div>
					<br><br>
					<button data-toggle="modal" data-target="#visi6" class="btn btn-success"><span>Visi</span></button> <button data-toggle="modal" data-target="#misi6" class="btn btn-info"><span>Misi & Proker</span></button>
					<br><br>	
					<form method="post" action="cekpemilih.php">
					<input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>" />
					<input type="hidden" name="yangdipilih" value="nomor urut 6" />
					<button class="btn btn-danger"><span>Pilih No Urut 6</span></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</section>
	
	<div class="modal fade" id="visi1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Visi (Nomor Urut 1)</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                Menumbuh kembangkan keimanan dan ketaqwaan pada Tuhan YME melalui pembinaan rohani dan kegiatan keagamaan.
            <br><br>
			</div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="visi2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Visi (Nomor Urut 2)</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                Menjadi wadah bagi taruna untuk mengembangkan segala bakat  yang terpendam di bidang komputer dan jaringan sehingga terbentuk taruna yg unggul, kreatif, berprestasi, dan membawa nama sekolah ke tingkat nasional atau internasional melalui lomba-lomba di bidang komputer dan jaringan.</div>
			<br><br>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="visi3" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Visi (Nomor Urut 3)</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                Mewujudkan lulusan yang unggul, religius, dan memahami kearifan lokal.
			<br><br>
		   <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="visi4" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Visi (Nomor Urut 4)</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                Meningkatkan Insan kreatif, Komunikatif, dan Religius dalam dunia teknologi dan komunikasi.
            <br><br>
			<!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="visi5" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Visi (Nomor Urut 5)</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                Menjadikan ekskul RTC sebagai tempat untuk mengasah bakat dan tempat untuk memperdalam ilmu bidang komputer ( Pemograman, Jaringan, dan Multimedia ) para taruna SMK Nasional, Khususnya untuk jurusan Tehnik Komputer dan Jaringan.
		<br><br>
		 <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="visi6" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Visi (Nomor Urut 6)</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                Menjadikan eskul rtc sebagai eskul favorit, menjadikan eskul rtc sebagai wadah untuk mendalami keahlian di bidang Jaringan,pemrograman,Multimedia dan animasi dan untuk menyalurkan bakat dan minat para taruna smk nasional khususnya untuk kejuruan Tenik Komputer Jaringan.
            <br><br>
			<!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="misi1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Misi (Nomor Urut 1)</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
1.Mengembangkan sikap dan keterampilan peserta didik   dalam bidang keahlian Teknik Komputer Jaringan. <br>
2.Menguasai keterampilan dalam pengoperasian bidang Teknik Komputer Jaringan. <br>
3.Menguasai keterampilan dalam penggunaan perangkat lunak Teknik Komputer Jaringan. <br> <br>

Program Kerja <br>
- 1 bulan sekali beres lab/toolmen. <br>
- 3 bulan Kita ada pengecekan Komputer lab. <br>
- buang sampah jangan sembarangan.</div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="misi2" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Misi (Nomor Urut 2)</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
1. Melaksanakan kegiatan yang dapat meningkatkan hubungan positif antar guru dan taruna. <br>
2. Melakukan Kegiatan untuk mendalami ilmu TKJ minimal seminggu sekali. <br>
3. Merawat seluruh barang yang di butuhkan. <br>
4. Selalu bersungguh sungguh untuk mendalami materi yang mengenai Komputer dan jaringan. <br>
5. Mengoptimalkan keratifitas taruna menjadi lebih aktif,inofatif dan selalu bertanggung jawab. <br> <br> 

Program Kerja <br>
- membuat project minimal 1 dalam waktu paling lama setengah semester ( 3 bulan). <br>
- membuat divisi esport (mobile legend dan valorant). <br>
- menciptakan satu aplikasi/software dalam waktu 1 tahun jabatan (divisi program).</div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="misi3" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Misi (Nomor Urut 3)</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
1. Mengembangkan sikap dan keterampilan peserta didik   dalam bidang keahlian Teknik Komputer Jaringan dan bertaqwa kepada tuhan yang maha esa.<br>
2.  Menguasai keterampilan dalam pengoperasian bidang Teknik Komputer Jaringan. <br>
3.  Menguasai keterampilan dalam penggunaan perangkat lunak Teknik Komputer Jaringan. <br>
4. Menghasilkan tamatan yang memiliki kompetensi tinggi dan terampil dalam bidang komputer jaringan serta berwawasan global. <br>
5. Mampu mengembangkan bidang Teknik Komputer Jaringan yang relevan dengan tuntutan kebutuhan masyarakat. <br> <br>

Program kerja <br>
-setiap 1 bulan sekali kita membersihkan lab/toolmen <br>
-saat lab mau di gunakan untuk ulangan kita biasa nya mengecek terlebih dahulu monitor,pc apabila ada yg problem kita benerin terlebih dahulu biar pas saat ulangan berlangsung semua lancar <br>
-setiap 3 bulan sekali saat lab sudah jarang di gunakan biasa nya kita ada pengecekan</div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="misi4" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Misi (Nomor Urut 4)</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
1. Menaungi dan mewadahi kreatifitas taruna rtc  dalam bidang perkembangan komunikasi, termasuk di dalamnya teknologi komputer. <br>
2. Mengkoordinir kegiatan taruna rtc yang bergerak di bidang teknologi komputer. <br>
3. Mendorong anak anak rtc untuk mengembangkan teknologi di lingkungan sekolah pada khususnya dan masyarakat pada umumnya. <br> <br>

Program Kerja <br>
- membuat project jaringan 1 dalam waktu paling lama setengah semester ( 3 bulan) <br>
- membuat divisi esport (mobile legend , valorant, free  fire , dan pubg ) <br>
- menciptakan satu aplikasi jaringan/ merakit jaringan dalam waktu 1 tahun jabatan (divisi program)</div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="misi5" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Misi (Nomor Urut 5)</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
1. Menjunjung tinggi rasa Solidaritas dan Kebersamaan. <br>
2. Mendorong para anggota RTC untuk menyalurkan bakatnya. <br>
3. Meningkatkan Kreativitas anggota RTC. <br>
4. Mengadakan tempat dan waktu untuk Saling berbagi ilmu. <br> <br>

Program Kerja <br>
- Membuat jadwal pertemuan minimal 1 minggu <br>
- Mewujudkan bakat bakat  para anggota RTC <br>
- minimal wajib memiliki 1 projek dalam 4 bulan</div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="misi6" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Tutup</span>
                </button>
                <h4 class="modal-title" id="labelModalKu">Misi (Nomor Urut 6)</h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
1.mengutamakan kerjasama dan kebersamaan. <br>
2.menjalin hubungan baik antara ketua Divisi dan anggota RTC. <br>
3.mengadakan sharing-sharing tentang ilmu Yang bersangkutan dengan Jurusan TKJ. <br> <br>

Program Kerja <br>
- Mengadakan Pertemuan 2 minggu sekali Untuk membahas materi TKJ <br>
- Mengembangkan keterampilan dalam bidang Desain grafis,Jaringan,Program</div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
function kirimContactForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var nama = $('#masukkanNama').val();
    var email = $('#masukkanEmail').val();
    var pesan = $('#masukkanPesan').val();
    if(nama.trim() == '' ){
		alert('Masukkan nama Anda.');
        $('#masukkanNama').focus();
		return false;
	}else if(email.trim() == '' ){
		alert('Masukkan email Anda.');
        $('#masukkanEmail').focus();
		return false;
	}else if(email.trim() != '' && !reg.test(email)){
		alert('Masukkan email yang valid.');
        $('#masukkanEmail').focus();
		return false;
	}else if(pesan.trim() == '' ){
		alert('Masukkan pesan Anda.');
        $('#masukkanPesan').focus();
		return false;
	}else{
        $.ajax({
            type:'POST',
            url:'kirim_form.php',
            data:'contactFrmSubmit=1&nama='+nama+'&email='+email+'&pesan='+pesan,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                if(msg == 'ok'){
                    $('#masukkanNama').val('');
                    $('#masukkanEmail').val('');
                    $('#masukkanPesan').val('');
                    $('.statusMsg').html('<span style="color:green;">Terima kasih telah menghubungi kami.</p>');
                }else{
                    $('.statusMsg').html('<span style="color:red;">Ada sedikit masalah, silakan coba lagi.</span>');
                }
                $('.submitBtn').removeAttr("disabled");
                $('.modal-body').css('opacity', '');
            }
        });
    }
}
</script><!--/#nino-story-->

    <!-- Services
    ================================================== --><!--/#nino-services-->

    
    <!-- Footer
    ================================================== -->
    <footer id="footer">
        <div class="container">
			<div class="nino-copyright">Created by RTC<br>Copyright &copy; 2020 Pemilihan Ketua SBT</div>
        </div>
    </footer><!--/#footer-->

    <!-- Search Form - Display when click magnify icon in menu
    ================================================== -->
    <form action="" id="nino-searchForm">
    	<input type="text" placeholder="Search..." class="form-control nino-searchInput">
    	<i class="mdi mdi-close nino-close"></i>
    </form><!--/#nino-searchForm-->
	
    <!-- Scroll to top
    ================================================== -->
	<a href="#" id="nino-scrollToTop">Go to Top</a>
	
	<!-- javascript -->
	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="js/unslider-min.js"></script>
	<script type="text/javascript" src="js/template.js"></script>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- css3-mediaqueries.js for IE less than 9 -->
	<!--[if lt IE 9]>
	    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
		
</body>
</html>

<?php } ?>