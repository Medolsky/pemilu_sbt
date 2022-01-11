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
	<title>Pemilihan Ketua SBT 2020 - 2021 | Selamat Datang</title>
	
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
						<a class="navbar-brand" href="#">SMK Nasional Depok</a>
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
						<a href="http://rtcsmknasional.mywebcommunity.org/pemilu" class="nino-btn">Keluar</a>
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
				Calon Ketua SBT 2020 - 2021
			</h2>
			<p class="nino-sectionDesc">Inilah para kandidat - kandidat calon ketua sbt tahun 2020 - 2021 beserta visi dan misi nya </p>
			<div class="sectionContent">
				<div class="row nino-hoverEffect">
                <div class="col-md-12"><br><br></div>
					<div class="col-md-6 col-sm-6">
						<div class="item">
							<a class="overlay" href="#">
								<span class="content">
									<i class="mdi mdi-account-multiple nino-icon"></i>
									<br>Nomor Urut 1<br>Muhammad Alif marifatullah dan Elisabeth Alestya Trisna Gati
								</span>
								<img src="images/story/paslon1.jpg" alt="">
							</a>
						</div>
					<br><br>
					
					<button data-toggle="modal" data-target="#visi1" class="btn btn-success"><span>Visi</span></button> <button data-toggle="modal" data-target="#misi1" class="btn btn-info"><span>Misi</span></button>
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
									<br>Nomor Urut 2<br>Muhammad Satrio Adhi Nugroho dan Satria Nur Fajriansyah
								</span>
								<img src="images/story/paslon2.jpg" alt="">
							</a>
						</div>

					<br><br>

					<button data-toggle="modal" data-target="#visi2" class="btn btn-success"><span>Visi</span></button> <button data-toggle="modal" data-target="#misi2" class="btn btn-info"><span>Misi</span></button>
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
									<br>Nomor Urut 3<br>Raffi Aryaputra P dan Farhan Musyafa
								</span>
								<img src="images/story/paslon3.jpg" alt="">
							</a>
						</div>

					<br><br>
					<button data-toggle="modal" data-target="#visi3" class="btn btn-success"><span>Visi</span></button> <button data-toggle="modal" data-target="#misi3" class="btn btn-info"><span>Misi</span></button>
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
									<br>Nomor Urut 4<br>Risya Tsaabitah Putri dan Muhammad Ilham Baehaqi
								</span>
								<img src="images/story/paslon4.jpg" alt="">
							</a>
						</div>
					<br><br>
					<button data-toggle="modal" data-target="#visi4" class="btn btn-success"><span>Visi</span></button> <button data-toggle="modal" data-target="#misi4" class="btn btn-info"><span>Misi</span></button>
					<br><br>
					<form method="post" action="cekpemilih.php">
					<input type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>" />
					<input type="hidden" name="yangdipilih" value="nomor urut 4" />
					<button class="btn btn-danger"><span>Pilih No Urut 4</span></button>
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
			Menjadikan SBT sebagai organisasi yang merangkul semua ekskul dengan meningkatkan kerjasama antar ekskul.
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
			Menjadikan organisasi Staf Batalyon Taruna sebagai organisasi yang mewadahi seluruh ekskul di SMK Nasional, menjadikan organisasi yang asik, inovatif serta memberikan kebebasan kepada seluruh taruna untuk menyalurkan bakat agar bisa membuahkan prestasi.</div>
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
			Menjadikan staff batalyon taruna menjadi satu organisasi yang bermutu dan berkualitas tinggi sekaligus dapat mengharumkan nama baik smk nasional didalam maupun diluar lingkungan sekolah
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
			Menjadi taruna yang peduli terhadap pengembangan kualitas sumber daya manusia di bidang kerohanian, pengabdian masyarakat, pelajaran, dan perkembangan teknologi terkini.
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
1. Membangun organisasi SBT kreatif inovatif dan berdaya saing. <br>
2. Merangkul seluruh ekskul demi lancarnya komunikasi anta ekskul disekolah. <br>
3. Mengadakan kegiatan yang bermanfaat terhadap sekolah maupun lingkungan seperti bakti sosial dan kegiatan positif lainya. <br>
4. Menjadikan SBT organisasi yg mampu dipercaya sekolah untuk setiap kegiatan yg akan diadakan.</div>
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
1. Membangun kerjasama yang baik antar seluruh eskul di SMK Nasional. <br>
2. Menjalin hubungan baik kepada seluruh taruna-taruni dan warga sekolah Smk Nasional. <br>
3. Selalu mendukung kegiatan taruna-taruni yang bersikap positif.</div>

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
1. Membentuk wadah belajar kelompok terpadu bagi taruna. <br>
2. Menyelenggarakan perlombaan yang mendidik. <br>
3. Menyelenggarakan kegiatan masa orientasi siswa yang jauh dari kesan pembodohan. <br>
4. Aktif belajar di media sosial. <br>
5. Ikut membantu penyelenggaran kegiatan hari besar keagamaan.</div>

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
1. Mengutamakan ketuhanan dalam segala aspek. <br>
2. Adanya sanksi apabila tidak menjalankan tugasnya dan tidak ada kabar yang jelas, agar dapat Mempertagung jawabkan tugasnya. <br>
3. Mengadakan rapat di jauh - jauh hari sebelum hari pelaksanaan acara, serta mengevaluasi kegiatan yang telah dilaksanakan. <br>
4. Mebiasakan seluruh anggota rapih dalam setiap kegiatan bukan hanya tampilan tetapi dalam hal kebersihan lingkungan tempat kegiatan. <br>
5. Mengadakan program kegiatan yang bersifat mengembangkan keterampilan taruna taruni, agar dapat disalurkan di lingkungan sekolah maupun di lingkungan masyarakat.</div>

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