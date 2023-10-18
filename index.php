<?php
	include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Simpel - Pertamina Complaint Media</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
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
    max-width: 90%;
    max-height: 500px;
    overflow-y: auto;
    align-items: center;
    position:relative;
   margin-left:auto;
   margin-right:auto;
    
    z-index: 999; /* Set a higher z-index to ensure it's above other content */
}



.image-handling img {
    max-width: 100%; /* Ensure images don't exceed the container width */
    height: auto; /* Maintain aspect ratio */
}

.iconx{
	max-width:200px;
	height:5%;
	margin-bottom:0;
}

.fixed-navbar {
    background-color: #ffffff; /* Set your desired background color here */
    z-index:1000;
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
      <nav class="navbar navbar-expand-lg navbar-white px-5 py-3 py-lg-0 fixed-navbar">
            <a href="index.php" class="navbar-brand p-0">
                <img class="iconx" src="img/header/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="https://simpel.biz" class="nav-item nav-link active">Beranda</a>
                    <a href="#komplainform" class="nav-item nav-link">Pengaduan Pelanggan</a>
                    <a href="#kontak" class="nav-item nav-link">Hubungi Kami</a>
                </div>
                <div class="d-flex align-items-center ms-3">
                    <a href="EN/index.php" class="btn btn-primary py-2 px-4 me-2">ENG</a>
                    <a href="../index.php" class="btn btn-primary py-2 px-4 me-2">ID</a>
                    <a href="login.php" class="btn btn-secondary py-2 px-4 rounded-pill">
                        <i class="fa fa-user me-2"></i>Masuk Pertamina Only
                    </a>
                </div>
            </div>
        </nav>

		
		
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Selamat datang di SIMPEL</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">SISTEM PELAYANAN KELUHAN PELANGGAN</h1>
						</div>
				<form method="get" action="tracking.php">		
    <div class="row py-1 it" style="min-width: 30%;">
        <div class="col-8">
            <input class="form-control bg-light border-0" type="text" name="tiket" placeholder="Tuliskan Nomor Tiket Pengaduan..." style="width: 100%;" />
        </div>
        <div class="col-4">
            <button class="btn btn-primary" type="submit" style="min-width: 120px;">
                <i class="fas fa-search"></i> Cek Tiket
            </button>
        </div>
    </div>
</form>
				</div>


                </div>
			</div>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    


 <!-- Blog Start -->
   <div class="container-fluid position-relative py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">PROSES PENANGANAN</h5>
            <h1 class="mb-0">PROSES PENANGANAN PENGADUAN PELANGGAN PERTAMINA </h1>
        </div>
				<div class="image-handling">
				<img src="img/handling/Penanganan_Pengaduan_page-0001.jpg" alt="Image 1">
				<img src="img/handling/Penanganan_Pengaduan_page-0002.jpg" alt="Image 2">
				<img src="img/handling/Penanganan_Pengaduan_page-0003.jpg" alt="Image 3">
				<img src="img/handling/Penanganan_Pengaduan_page-0004.jpg" alt="Image 4">
				</div>
	
		
	</div>
</div>


    <!-- Blog Start -->


  
<!-- Quote Start -->
    <div id="komplainform" class="container-fluid " data-wow-delay="0.1s" >
        <div class="container">
            <div class="row g-5">
			 <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Pengaduan Pelanggan</h5>
                        <h1 class="mb-0">Media Penyampaian Pengaduan Pelanggan Pertamina </h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Respon dalam 72 Jam</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-envelope text-primary me-3"></i>Konfirmasi lewat Email</h5>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form method="post" action="complaint_in.php" enctype="multipart/form-data">
                            <div class="row g-3">
							 <div class="col-xl-12">
								
                                    
									  <input list="maskapai2" class="form-select bg-light border-0" style="height: 55px;" id="airline" name="airline" placeholder="Pilih Nama Pelanggan">
										<datalist id="maskapai2" selected>Pilih Nama Pelanggan
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
									</datalist>
                                </div>
                                
                                <div class="col-12">
                                    <input type="text" id="nama" name="nama" class="form-control bg-light border-0" placeholder="Nama" style="height: 55px;" required>
                                </div>
								<div class="col-12">
                                    <input type="Number" id="wa" name="wa" class="form-control bg-light border-0" placeholder="No. WhatsApp" style="height: 55px;" required>
                                </div>
								<div class="col-12">
                                    <input type="email" id="email" name="email" class="form-control bg-light border-0" placeholder="Alamat Email" style="height: 55px;" required>
                                </div>
								<div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;" id="bandara" name="bandara">
										<option selected>Pilih Lokasi Kerja:</option>
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
                                    <input class="form-control bg-light border-0" type="text" id="tanggal" name="tanggal" placeholder="Pilih Tanggal Kejadian">
                                </div>
								<div class="col-12">
                                    <input  class="form-control bg-light border-0" type="text" id="waktux" name="waktu" placeholder="Waktu"  maxlength="5">
								</div>
								<div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;" id="kategori" name="kategori" onchange="showTextBox()">
                                        <option selected>Kategori Pengaduan</option>
                                        <?php
											$qkat = "select dly,kategori from db_komplain_kategori";
											$rkat = $con->query($qkat);
											while($wkat=$rkat->fetch_array())
											{
												$kat = $wkat['kategori'];
												$dly = $wkat ['dly']
										?>
										<option value="<?=$dly?>"><?=$kat?></option>
										<?php
											}
										?>
										</select>
                                    </select>
                                </div>
                            <div id="delayAdd" style="display: none;">
								<div class="col-12 mb-2">
                                    <input class="form-control bg-light border-0" type="text" id="flightno" id="flight" name="flight" placeholder="Nomor Penerbangan">
								</div>
								<div class="col-12 mb-2">
                                    <input class="form-control bg-light border-0" type="text" id="ac" name="ac" placeholder="Registrasi Pesawat">
								</div>
								<div class="col-12 mb-2">
                                    <input class="form-control bg-light border-0" type="text" id="parking" name="parking" placeholder="Parking Stand">
								</div>
								<div class="col-12 mb-2">
                                    <input  class="form-control bg-light border-0" type="text" id="stdx" name="stdx" placeholder="STD" maxlength="5">
								</div>
								<div class="col-12 mb-2">
                                    <input  class="form-control bg-light border-0" type="text" id="atdy" name="atdy" placeholder="ATD" maxlength="5" onkeyup="calculate2">
								</div>
								<div class="col-12 mb-2">
                                    <input class="form-control bg-light border-0" type="text" id="delay" name="delay" placeholder="Delay" readonly>
								</div>
								</div>
								
								<div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" id="ket" name="ket" placeholder="Keterangan"></textarea>
                                </div>
								<div class="col">
									<span id="file-upload-text" style="color:white;">Upload Foto</span>
								</div>
								<div id="fileUploadInputs" class="col">
								   	<input class="btn" type="file" name="image[]" accept="image/*" placeholder="Upload Foto" multiple>
								</div>
								<div class="col">
									<button class="btn btn-primary" id="addFileButton" type="button" value="+" onclick="addFileInput()">+</button>
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
                                <p class="mb-0">simpel.biz</p>
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
	
	 <!-- Language Selection Popup -->
    <div id="language-popup" class="popup">
        <div class="popup-content">
            <h2>Select Your Language</h2>
            <ul>
			    <li><a href="#" onclick="setLanguage('es')">Bahasa</a></li>
                <li><a href="EN/index.php" onclick="setLanguage('en')">English</a></li>
            </ul>
        </div>
    </div>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
     
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
	
	 <!-- JavaScript to handle the popup -->
    <script>
        // Get the language popup element
        const languagePopup = document.getElementById('language-popup');

        // Check if a language preference is stored in localStorage
        const selectedLanguage = localStorage.getItem('selectedLanguage');

        // If no language preference is found, display the language popup
        if (!selectedLanguage) {
            languagePopup.style.display = 'flex';
        }

        // Function to set the selected language and hide the popup
        function setLanguage(language) {
            localStorage.setItem('selectedLanguage', language);
            languagePopup.style.display = 'none';
        }
    </script>

</body>

<script>
  $(function() {
    $("#tanggal").datepicker();
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

<!--Waktu Formatting-->
<script>
        const inputField = document.getElementById('waktux');

        inputField.addEventListener('input', function () {
            const inputValue = inputField.value;

            // Remove any non-numeric characters
            const numericValue = inputValue.replace(/\D/g, '');

            // Format the input as xx:yy
            if (numericValue.length > 2) {
                const formattedValue = numericValue.slice(0, 2) + ':' + numericValue.slice(2, 4);
                inputField.value = formattedValue;
            } else {
                inputField.value = numericValue;
            }
        });
    </script>
	
<!--stdx Formatting-->
<script>
        const inputFieldsx = document.getElementById('stdx');

        inputFieldsx.addEventListener('input', function () {
            const inputValuesx = inputFieldsx.value;

            // Remove any non-numeric characters
            const numericValuesx = inputValuesx.replace(/\D/g, '');

            // Format the input as xx:yy
            if (numericValuesx.length > 2) {
                const formattedValuesx = numericValuesx.slice(0, 2) + ':' + numericValuesx.slice(2, 4);
                inputFieldsx.value = formattedValuesx;
            } else {
                inputFieldsx.value = numericValuesx;
            }
        });
    </script>	
	
	<!--Waktu Formatting-->
<script>
        const inputFieldsy = document.getElementById('atdy');

        inputFieldsy.addEventListener('input', function () {
            const inputValuesy = inputFieldsy.value;

            // Remove any non-numeric characters
            const numericValuesy = inputValuesy.replace(/\D/g, '');

            // Format the input as xx:yy
            if (numericValuesy.length > 2) {
                const formattedValuesy = numericValuesy.slice(0, 2) + ':' + numericValuesy.slice(2, 4);
                inputFieldsy.value = formattedValuesy;
            } else {
                inputFieldsy.value = numericValuesy;
            }
        });
    </script>
<!-- Calculate Delay -->
 <script>
        const time1Input = document.getElementById('stdx');
        const time2Input = document.getElementById('atdy');
        const timeDifferenceInput = document.getElementById('delay');

        // Function to calculate the time difference
        function calculateTimeDifference() {
            const time1 = time1Input.value;
            const time2 = time2Input.value;

            if (isValidTimeFormat(time1) && isValidTimeFormat(time2)) {
                const [hours1, minutes1] = time1.split(':').map(Number);
                const [hours2, minutes2] = time2.split(':').map(Number);

                const totalMinutes1 = hours1 * 60 + minutes1;
                const totalMinutes2 = hours2 * 60 + minutes2;

                const timeDifferenceMinutes = Math.abs(totalMinutes2 - totalMinutes1);

                const hoursDifference = Math.floor(timeDifferenceMinutes / 60);
                const minutesDifference = timeDifferenceMinutes % 60;

                timeDifferenceInput.value = `${hoursDifference.toString().padStart(2, '0')}:${minutesDifference.toString().padStart(2, '0')}`;
            } else {
                timeDifferenceInput.value = '';
            }
        }

        // Function to validate the time format
        function isValidTimeFormat(time) {
            const timePattern = /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/;
            return timePattern.test(time);
        }

        // Listen for input changes in both time fields
        time1Input.addEventListener('input', calculateTimeDifference);
        time2Input.addEventListener('input', calculateTimeDifference);
    </script>
    <script>

        function showTextBox() {
            var complaintTypeSelect = document.getElementById("kategori");
            var delayReasonDiv = document.getElementById("delayAdd");

            // Check if the selected value is 0 (Delay)
            if (complaintTypeSelect.value === "1") {
                delayReasonDiv.style.display = "block"; // Show the textbox
            } else {
                delayReasonDiv.style.display = "none"; // Hide the textbox
            }
        }


    </script>
    
    <script>
   document.addEventListener("DOMContentLoaded", function () {
    // Find the fileUploadInputs container
    const fileUploadInputs = document.getElementById("fileUploadInputs");
    
    // Initialize a counter to keep track of added file upload inputs
    let fileInputCount = 1;

    // Function to add a new file input with a unique name
    function addFileInput() { // Corrected function name
        const newFileInput = document.createElement("input");
        newFileInput.type = "file";
        newFileInput.name = "image[]"; // Use the same name for all file inputs
        fileUploadInputs.appendChild(newFileInput);
    }

    // Find the addFileButton and add an event listener
    const addFileButton = document.getElementById("addFileButton");
    addFileButton.addEventListener("click", addFileInput);
});

</script>

</html>