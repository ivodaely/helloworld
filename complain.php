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
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-plane me-2"></i>SIMPEL</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">Input</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="#" class="btn btn-primary py-2 px-4 ms-3">Switch to English</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-3 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Complaint</h1>
                    <a href="" class="h5 text-white">Kami segenap crew yang bertugas siap untuk menerima masukan untuk pelayanan yang lebih baik</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


<!-- Quote Start -->
    <div id="komplainform" class="container-fluid wow fadeInUp" data-wow-delay="0.1s" >
        <div class="container">
            <div class="row g-5">
			 <div class="col-lg-7">
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Respond within 72 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-envelope text-primary me-3"></i>Confirmation by email</h5>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form method="post" action="complaint_in.php">
                            <div class="row g-3">
                                <div class="col-xl-12">
								
                                    
									  <select class="form-select bg-light border-0" style="height: 55px;" id="airline" name="airline">
										<option selected>Pilih Nama Airline</option>
										<?php
											$qair = "select airline from db_airline";
											$rair = $con->query($qair);
											while($wair=$rair->fetch_array())
											{
												$airline = $wair['airline'];
										?>
										<option value="<?=$airline?>"><?=$airline?></option>
										<?php
											}
										?>
									</select>
                                </div>
                                <div class="col-12">
                                    <input type="text" id="nama" name="nama" class="form-control bg-light border-0" placeholder="Nama Pelapor" style="height: 55px;" required>
                                </div>
								<div class="col-12">
                                    <input type="Number" id="wa" name="wa" class="form-control bg-light border-0" placeholder="Nomor Whatsapp" style="height: 55px;" required>
                                </div>
								<div class="col-12">
                                    <input type="email" id="email" name="email" class="form-control bg-light border-0" placeholder="Email" style="height: 55px;" required>
                                </div>
								<div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;" id="bandara" name="bandara">
										<option selected>Pilih Tempat Kejadian :</option>
										<?php
											$qbandara = "select bandara from db_bandara";
											$rbandara = $con->query($qbandara);
											while($wbandara=$rbandara->fetch_array())
											{
												$bandaranm = $wbandara['bandara'];
										?>
										<option value="<?=$bandaranm?>"><?=$bandaranm?></option>
										<?php
											}
										?>
										</select>
									
                                </div>
								<div class="col-12">
                                    <input class="form-control bg-light border-0" type="date" id="tanggal" name="tanggal" placeholder="Select a date">
									 
                                </div>
								<div class="col-12">
                                    <input  class="form-control bg-light border-0" type="time" step="3600" id="waktu" name="waktu" placeholder="Waktu">
								</div>
								<div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;" id="kategori" name="kategori">
                                        <option selected>Jenis Komplain</option>
                                        <?php
											$qkat = "select kategori from db_komplain_kategori";
											$rkat = $con->query($qkat);
											while($wkat=$rkat->fetch_array())
											{
												$kat = $wkat['kategori'];
										?>
										<option value="<?=$kat?>"><?=$kat?></option>
										<?php
											}
										?>
										</select>
                                    </select>
                                </div>
								<div class="col-12">
                                    <input class="form-control bg-light border-0" type="text" id="flightno" id="flight" name="flight" placeholder="flight Number">
								</div>
								<div class="col-12">
                                    <input class="form-control bg-light border-0" type="text" id="ac" name="ac" placeholder="A/C Reg">
								</div>
								<div class="col-12">
                                    <input class="form-control bg-light border-0" type="text" id="parking" name="parking" placeholder="Parking Stand">
								</div>
								<div class="col-12">
                                    <input  class="form-control bg-light border-0" type="time" id="stdx" name="stdx" placeholder="STD (X)" oninput="calculate2()">
								</div>
								<div class="col-12">
                                    <input  class="form-control bg-light border-0" type="time" id="atdy" name="atdy" placeholder="ATD (Y)" oninput="calculate2()">
								</div>
								<div class="col-12">
                                    <input class="form-control bg-light border-0" type="text" id="delay" name="delay" placeholder="Delay" readonly>
								</div>
								
								<div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" id="ket" name="ket" placeholder="Keterangan"></textarea>
                                </div>
								<div class="col-12">
                                   <input class="form-control bg-light border-0" type="file" name="image" accept="image/*" placeholder="Upload Foto" required>
								</div>
                                
                                
                                <div class="col-12">
                                    <button name="but_add" class="btn btn-dark w-100 py-3" type="submit">Kirim Komplain</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
   

    <!-- Footer Start -->
    <div id="kontak" class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-plane me-2"></i>SIMPEL</h1>
                        </a>
                        <p class="mt-3 mb-4">Kami siap menerima keluhan anda untuk pelayanan yang lebih baik.</p>
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
                                <p class="mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p>
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
  // Initialize the time picker
  flatpickr("#stdx", {
    enableTime: true,
    noCalendar: true,
	time_24hr: true,
    dateFormat: "H:i",
  });
</script>

<script>
  // Initialize the time picker
  flatpickr("#atdy", {
    enableTime: true,
    noCalendar: true,
	time_24hr: true,
    dateFormat: "H:i",
  });
</script>

<script>
  // Initialize the time picker
  flatpickr("#waktu", {
    enableTime: true,
    noCalendar: true,
	time_24hr: true,
    dateFormat: "H:i",
  });
</script>


<script>
    
   function calculate() {
    // Get values from the first and second textboxes
    const value1 = parseFloat(document.getElementById("stdx").value) || 0;
    const value2 = parseFloat(document.getElementById("atdy").value) || 0;

    // Calculate the result
    const result = value1 - value2;

    // Display the result in the third textbox
    document.getElementById("delay").value = result;
}
</script>

<script>
function calculate2() {
    // Get values from the first and second textboxes
    const time1 = document.getElementById("stdx").value;
    const time2 = document.getElementById("atdy").value;

    // Check if both time inputs are in the correct format
    const timeFormatRegex = /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/;

    if (timeFormatRegex.test(time1) && timeFormatRegex.test(time2)) {
        // Split time strings and parse hours and minutes
        const time1Parts = time1.split(":");
        const time2Parts = time2.split(":");
        const hours1 = parseInt(time1Parts[0]);
        const minutes1 = parseInt(time1Parts[1]);
        const hours2 = parseInt(time2Parts[0]);
        const minutes2 = parseInt(time2Parts[1]);

        // Calculate the time difference
        const hoursDifference = hours2 - hours1;
        const minutesDifference = minutes2 - minutes1;

        // Handle negative time difference
        if (minutesDifference < 0) {
            hoursDifference--;
            minutesDifference += 60;
        }
		

	    const formattedHours = String(hoursDifference).padStart(2, '0');
		const formattedMinutes = String(minutesDifference).padStart(2, '0');
        // Display the result in the 'textbox3' textbox
        document.getElementById("delay").value = `${formattedHours}:${formattedMinutes}`;
    } else {
        // Display an error message or clear the 'textbox3' textbox if the input format is incorrect
        document.getElementById("delay").value = "Invalid time format";
    }
}

   
</script>
</html>