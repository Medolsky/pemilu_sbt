 <title>Hasil Calon Pemilihan Ketua SBT 2017-2018</title>
 
 <?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'pemilu';

	$conn = mysqli_connect($host, $user, $pass, $db);

	// isikan dengan nama database yang akan di hubungkan
	$db = mysqli_select_db($conn, $db);
	
?>
  
 
 




              <!-- end of forever fp services -->
									
            <div id="tooplate_main">
				<script type="text/javascript" src="js/jquery1.min.js"></script>
		<script type="text/javascript">
		$(function () {

			$(document).ready(function () {

				// Build the chart
				$('#container').highcharts({
					chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					title: {
						text: 'Hasil Pemilihan Calon Ketua SBT 2017-2018'
					},
					tooltip: {
						pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					},
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: false
							},
							showInLegend: true
						}
					},
					series: [{
						type: 'pie',
						name: 'Data Check List',
						data: [
						['Nomor Urut 1',   <?php
										$result = mysqli_query($conn, "SELECT * FROM hasilpemilihan WHERE yangdipilih like '%nomor urut 1%' ");
										$num_rows = mysqli_num_rows($result);
										echo $num_rows; ?>.0],
						['Nomor Urut 2',   <?php
										$result = mysqli_query("SELECT * FROM hasilpemilihan WHERE yangdipilih like '%nomor urut 2%'");
										$num_rows = mysqli_num_rows($result);
										echo $num_rows; ?>.0],
						['Nomor Urut 3',   <?php
										$result = mysqli_query("SELECT * FROM hasilpemilihan WHERE yangdipilih like '%nomor urut 3%'");
										$num_rows = mysqli_num_rows($result);
										echo $num_rows; ?>.0],
						['Nomor Urut 4',   <?php
										$result = mysqli_query("SELECT * FROM hasilpemilihan WHERE yangdipilih like '%nomor urut 4%'");
										$num_rows = mysqli_num_rows($result);
										echo $num_rows; ?>.0],
						['Nomor Urut 5',   <?php
										$result = mysqli_query("SELECT * FROM hasilpemilihan WHERE yangdipilih like '%nomor urut 5%'");
										$num_rows = mysqli_num_rows($result);
										echo $num_rows; ?>.0],
						]
					}]
				});
			});

		});
				</script>
	</head>
	<body>
<script src="js/highcharts.js"></script>


<div id="container" style="min-width: 310px; height: 400px; max-width: 900px; margin: 0 auto"></div>

            <!-- end of main -->
      
        <div id="tooplate_footer">
        
            

