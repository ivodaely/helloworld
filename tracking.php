<?php
	include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Simpel - Pertamina Patra</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-lKnuIHC6zpmP7fzjMzECr/9C6UEzIZi+WfE19/3zW1eD8G6LWSAz1h5IdTlmDXiCk5E8iitFucBz1jqf5Dk+Vg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	 <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	
	
	 <style>
        /* Styles for the popup container */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 999;
            justify-content: center;
            align-items: center;
        }

        /* Styles for the popup content */
        .popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        /* Styles for the language list */
        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin: 10px 0;
        }

        /* Styles for the links */
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
		
		.customx {
  border: 1px solid #ccc;
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
  background-color: #f2f2f2;
  color: #333;
  border-radius: 4px;
  transition: background-color 0.3s;
}

.customx:hover {
  background-color: #e0e0e0;
}

/* Hide the actual file input */
#fileInput {
  display: none;
}

.image-handling {
    max-width: 50%;
    max-height: 400px;
    overflow-y: auto;
    
   
    align-items: center;
    gap: 10px;
  
   position:relative;
    left: 25%;
    
    z-index: 999; /* Set a higher z-index to ensure it's above other content */
}



.image-handling img {
    max-width: 100%; /* Ensure images don't exceed the container width */
    height: auto; /* Maintain aspect ratio */
}

    </style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
   
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
				<a href="index.php" class="navbar-brand p-0">
					<h1 class="m-0"><i class="fa fa-plane me-2"></i>SIMPEL</h1>
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
					<span class="fa fa-bars"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav ms-auto py-0">
						<a href="index.php" class="nav-item nav-link active">Beranda</a>
						<a href="index.php/#komplainform" class="nav-item nav-link">Pengaduan Pelanggan</a>
						<a href="#kontak" class="nav-item nav-link">Hubungi Kami</a>
					</div>
					<div class="d-flex align-items-center ms-3"">
					<a href="EN/index.php" class="btn btn-primary py-2 px-4 me-2">ENG<a href="../index.php" class="btn btn-primary py-2 px-4 me-2">ID</a>
							<a href="login.php" class="btn btn-secondary py-2 px-20 rounded-pill">
							<i class="fa fa-user me-2"></i>Masuk Pertamina Only
						</a>
					</div>
					
				</div>
			</nav>

        <div class="container-fluid bg-primary py-0 bg-header" style="margin-bottom: 20px; height: 70%;">
    <div class="row py-5 justify-content-center align-items-center">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">CEK PROGRESS PENGADUAN</h1>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-lg-6 offset-lg-3"> <!-- Center the content within this column -->
		<form method="get" action="tracking.php">
            <div class="row gx-2">
                <div class="col-8">
                    <input class="form-control bg-light border-0" type="text" name="tiket" placeholder="Tuliskan Nomor Tiket Pengaduan..." style="width: 100%;" />
                </div>
                <div class="col-4">
                    <button class="btn btn-primary" type="submit" style="min-width: 120px;">
                        <i class="fas fa-search"></i> Cek Tiket
                    </button>
                </div>
			</form>	
            </div>
        </div>
    </div>
</div>

    </div>
    <!-- Navbar End -->
	<?php
	    error_reporting(0);
		$tid = $_GET ['tiket'];
		
		
			$qtrack = "SELECT a.compid,a.nama_pelapor, a.airline, a.keterangan,a.keterangan,a.tempat_kejadian, date(a.tanggal_kejadian) as tglkej,  b.penyebab, date(b.tglpenyebab) as tglpb, b.perbaikan,date(b.tglperbaikan) as tglpr, b.pencegahan,date(b.tglpencegahan) as tglpc, a.status,b.verificator, b.uraian FROM `tr_complaint` a LEFT join tr_process b on a.compid = b.compid WHERE a.compid='".$tid."';";
		
			$rTrack = $con->query($qtrack);
			while ($wTrack=$rTrack->fetch_array())
			{
				$nama = $wTrack ['nama_pelapor'];
				$airline = $wTrack ['airline'];
				$tiket = $wTrack ['compid'];
				$ket = $wTrack ['keterangan'];
				$tglkej = $wTrack ['tglkej'];
				$lok = $wTrack ['tempat_kejadian'];
				$pb = $wTrack ['penyebab'];
				$tglpb = $wTrack ['tglpb'];
				$pr = $wTrack ['perbaikan'];
				$tglpr = $wTrack ['tglpr'];
				$pc = $wTrack ['pencegahan'];
				$tglpc = $wTrack ['tglpc'];
				$pic = $wTrack ['pic'];
				$status = $wTrack ['status'];
				$urai = $wTrack ['uraian'];
				$veri = $wTrack ['verificator'];
			}
		
		
	?>
 <!-- Tracking Start -->
   
    <div class="container-fluid py-1 wow" data-wow-delay="0.1s">
        <div class="container py-1">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                
                
            </div>
            <div class="row g-0">
                <div class="col-lg wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
					<div class="container" style="width: 98%; height: 95%; position: relative;">
					<div class="row" style="background: red;">
						<div class="col-md-6">
							<p class="text-primary" style="font-weight: bold; color: white !important;">Status: <span
									class="text-transform: capitalize !important;"><?= $status ?></span></p>
						</div>
						<div class="col-md d-flex justify-content-end align-items-center">
							<a href="download-complaint.php?tiket=<?=$tid?>" class="btn btn-print" target="_blank">
								   <i class="fas fa-print" style="color: white;"></i><span style="color:white"> Print</span>
							</a>
						</div>
					</div>
				</div>

                        <div class="border-bottom py-3 px-5 mb-4">
						 <div class="row g-1">
							<div class="col-sm-2">
								<div class="d-flex align-items-center" style="font-weight:bold">
									 <p class="text-primary mb-1">NAMA</p> 
								</div>
							</div>
							<div class="col-md">
								<p class="text-primary mb-1"><?=$nama?></p> 
							</div>
						</div>
						<div class="row g-1">
							<div class="col-sm-2">
								<div class="d-flex align-items-center" style="font-weight:bold">
									<p class="text-primary mb-1">MASKAPAI	 </p>
								</div>
							</div>
							<div class="col-md">
								<p class="text-primary mb-1"><?=$airline?></p> 
							</div>
						</div>
						<div class="row g-1">
							<div class="col-sm-2">
								<div class="d-flex align-items-center" style="font-weight:bold">
									 <p class="text-uppercase">No. Tiket </p>
								</div>
							</div>
							<div class="col-md">
								 <p class="text-uppercase"><?=$tiket?></p>
							</div>
						</div>
                        </div>
                       <div class="p-5 pt-0 border-bottom">
					  <div class="row g-1">
							<div class="col-md-3">
								<div class="d-flex align-items-center" style="font-weight:bold">
									Uraian Ketidaksesuaian
								</div>
							</div>
							<div class="col-md">
								<textarea class="form-control border-0" rows="3" id="uraian" name="uraian" readonly><?=$ket?></textarea>
							</div>
						</div>
						<div class="row g-1">
							<div class="col-md-3" style="font-weight:bold">Tanggal</div>
							<div class="col-md"><?=$tglkej?></div>
						</div>
						<div class="row g-1">
							<div class="col-md-3" style="font-weight:bold">Lokasi</div>
							<div class="col-md"><?=$lok?></div>
						</div>
					</div>

						<div class="p-5 pt-5 border-bottom">
                             <div class="row g-1">
								<div class="col-md-3" style="font-weight:bold">Analisa Penyebab</div>
								<div class="col-md"><textarea class="form-control border-0" rows="3" id="uraian" name="uraian" readonly><?=$pb?></textarea></div>
						   </div>
						    <div class="row g-1">
								<div class="col-md-3" style="font-weight:bold">Tanggal </div>
								<div class="col-md"><?=$tglpb?></div>
						   </div>
						    <div class="row g-1">
								<div class="col-md-3" style="font-weight:bold">Nama</div>
								<div class="col-md"><?=$pic?> </div>
						   </div>
                        </div>
						<div class="p-5 pt-5 border-bottom">
                             <div class="row g-1">
								<div class="col-md-3" style="font-weight:bold">Tindakan Perbaikan</div>
								<div class="col-md"><textarea class="form-control border-0" rows="3" id="uraian" name="uraian" readonly><?=$pr?></textarea></div>
						   </div>
						    <div class="row g-1">
								<div class="col-md-3" style="font-weight:bold">Tanggal </div>
								<div class="col-md"><?=$tglpr?> </div>
						   </div>
						    <div class="row g-1">
								<div class="col-md-3" style="font-weight:bold">Nama</div>
								<div class="col-md"><?=$pic?> </div>
						   </div>
                        </div>
						<div class="p-5 pt-5 border-bottom">
                             <div class="row g-1">
								<div class="col-md-3" style="font-weight:bold">Tindakan Pencegahan</div>
								<div class="col-md"><textarea class="form-control border-0" rows="3" id="uraian" name="uraian" readonly><?=$pc?></textarea></div>
						   </div>
						    <div class="row g-1">
								<div class="col-md-3" style="font-weight:bold">Tanggal </div>
								<div class="col-md"><?=$tglpc?> </div>
						   </div>
						    <div class="row g-1">
								<div class="col-md-3" style="font-weight:bold">Nama</div>
								<div class="col-md"><?=$pic?> </div>
						   </div>
                        </div>
						<div class="p-5 pt-5 border-bottom">
                             <div class="row g-1">
								<div class="col-md-3" style="font-weight:bold">Verifikasi/Komentar MR / OH DPPU / Auditor </div>
								<div class="col-md"><textarea class="form-control border-0" rows="3" id="uraian" name="uraian" readonly><?=$urai?></textarea></div>
						   </div>
						    <div class="row g-1">
								<div class="col-md-3" style="font-weight:bold">Tanggal </div>
								<div class="col-md"><?=$tglpb?> </div>
						   </div>
						    <div class="row g-1">
								<div class="col-md-3" style="font-weight:bold">Nama</div>
								<div class="col-md"><?=$veri?> </div>
						   </div>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tracking End -->
  
    <!-- Footer Start -->
    <div id="kontak" class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-plane me-2"></i>SIMPEL</h1>
                        </a>
                        <p class="mt-3 mb-4">Media Penyampaian Pengaduan Pelanggan Pertamina.</p>
                        <form action="" hidden>
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Kontak Kami</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">aviation.ships@pertamina.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">Terminal 1 : 021-5506495</p>
                            </div>
							<div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">Terminal 2 :  021-31992586</p>
                            </div>
							<div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">Terminal 3 :  081917027746</p>
                            </div>
							<div class="d-flex mb-2">
                                &copy;
                                <p class="mb-0">simpel.xyz</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
	
	<script>
    // JavaScript to start the carousel
    $(document).ready(function () {
        $('#header-carousel').carousel('cycle');
    });
</script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
<script>
          $(document).ready(function() {
            $("#datepicker").datepicker();
        });
    </script>
</html>