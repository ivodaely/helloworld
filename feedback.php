<?php
	include "connect.php";
?>
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
                
                <div class="d-flex align-items-center ms-3">
                    
                    <a href="https://simpel.biz" class="btn btn-secondary py-2 px-4 rounded-pill">
                        SIMPEL.BIZ
                    </a>
                </div>
            </div>
        </nav>
    <!-- Navbar End -->


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


<?php
    $id = $_GET ['tiket'];
    
    $q = "select nama_pelapor, airline from tr_complaint where compid = '".$id."'";
    $r = $con->query($q);
    $w = $r->fetch_array();
    
    $name = $w ['nama_pelapor'];
    $air = $w ['airline'];
    
    $q2 = "select *from tr_feedback2 where compid='".$id."'";
    $r2 = $con->query($q2);
    $w2 = $r2->num_rows;
    if ($w2>0)
    {
        $show = "hidden";
    }else
    {
        $show="";
    }
    
?>
    <!-- Pricing Plan Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" <?=$show?>>
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Kuisioner Kepuasan Pelanggan</h5>
        </div>
        <div class="row g-0">
            <div class="col-lg-1 wow slideInUp" data-wow-delay="0.3s">
               &nbsp;
            </div>
            <div class="col-lg-10 wow slideInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                    <div class="border-bottom py-4 px-5 mb-4">
                        <h4 class="text-primary mb-1">Pelanggan dan Stakeholders Yang Terhormat,</h4>
						<h4>Dear Our Valued Customer & Stakeholders,</h4>
                        <small class="text-uppercase">Suara Anda adalah motivasi kami. Kami ingin mengetahui persepsi Anda tentang DPPU -PERTAMINA Aviation yang akan kami gunakan untuk menjaga, memperbaiki, dan meningkatkan kinerja kami melayani Anda dan industri aviasi. Oleh sebab itu, kesediaan Anda mengisi kuesioner ini sangat kami hargai. <br>
						<em>Your voice is our motivator. We want to know your perception on Airfield Depot - PERTAMINA Aviation that will be used to maintain and/or improve our performance in serving you and the aviation industry. Your participation in fulfilling this questionnaire would be highly appreciated.</em>
</small>
                    </div>
                    <div class="p-5 pt-0 text-center">
                        <form action="feedback_in2.php?id=<?=$id?>" method="POST">
                            <div class="mb-6">
							<p class="text-left">1.	Dalam skala 1 sampai 10, berapa Anda menilai kinerja kami melayani Anda dalam aspek-aspek berikut ini?</p><br> <em>(In the scale of 1-10, how do you weigh our performance in serving you and the aviation industry?)</em>
							<table class="tablex">
								<thead>
									<tr>
									    <th rowspan="2">No</th>
										<th rowspan="2" style="width:50%;">Kriteria (Criteria)</th>
										<th colspan="9">Kinerja (Performance)</th>
									</tr>
									<tr>
									   
										<th style="width:5%;">1</th>
										<th style="width:5%;">2</th>
										<th style="width:5%;">3</th>
										<th style="width:5%;">4</th>
										<th style="width:5%;">5</th>
										<th style="width:5%;">6</th>
										<th style="width:5%;">7</th>
										<th style="width:5%;">8</th>
										<th style="width:5%;">9</th>
										<th style="width:5%;">10</th>
									</tr>
								<thead>
								<tbody>
								    <?php
								        $no=1;
								        $rb=1;
								        $q = "select *from db_feedback where type='scale'";
								        $r = $con->query($q);
								        while ($w=$r->fetch_array()){
								            $qu = $w['question'];
								            $ti = $w['tipe'];
								            $qid = $w['id'];
								    ?>
<tr>
<td><?=$no?></td>
<td style="width:5%;"><?=$qu?>
<input type="text" name="qu[<?=$qid?>]" value="<?=$qu?>" hidden >
</td>
<td style="width:5%;"><input type="radio" id="satisfied-1" name="val[<?=$qid?>]" value="1"></td>
<td style="width:5%;"><input type="radio" id="satisfied-1" name="val[<?=$qid?>]" value="2"></td>
<td style="width:5%;"><input type="radio" id="satisfied-1" name="val[<?=$qid?>]" value="3"></td>
<td style="width:5%;"><input type="radio" id="satisfied-1" name="val[<?=$qid?>]" value="4"></td>
<td style="width:5%;"><input type="radio" id="satisfied-1" name="val[<?=$qid?>]" value="5"></td>
<td style="width:5%;"><input type="radio" id="satisfied-1" name="val[<?=$qid?>]" value="6"></td>
<td style="width:5%;"><input type="radio" id="satisfied-1" name="val[<?=$qid?>]" value="7"></td>
<td style="width:5%;"><input type="radio" id="satisfied-1" name="val[<?=$qid?>]" value="8"></td>
<td style="width:5%;"><input type="radio" id="satisfied-1" name="val[<?=$qid?>]" value="9"></td>
<td style="width:5%;"><input type="radio" id="satisfied-1" name="val[<?=$qid?>]" value="10"></td>
</tr>
									<?php
									    $rb++;
									    $no++;
								        }
									?>
									
									<tr>
									    <td>&nbsp;</td>
									    <td>&nbsp;</td>
									    </tr>
				    <?php
				        $no=1;
				         $qa = "select *from db_feedback where type='essay'";
								        $ra = $con->query($qa);
								        while ($wa=$ra->fetch_array()){
								            $qus = $wa['question'];
								            $tip = $wa['tipe'];
								            $idx = $wa['id'];    
				    ?>
									<tr>
									    <td><?=$no?></td>
									    <td><?=$qus?></td>
                                        <td colspan="10">
                                         <textarea class="form-control bg-light border-0" rows="3" id="ket" name="suggest"></textarea>  
                                          </td>
                                    </tr>    
                                    <?php
                                        $no++;
								        }
                                    ?>
								</tbody>
							</table>
                                
                            </div>
								<br>
								<input name="but_add" class="btn btn-dark" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 wow slideInUp" data-wow-delay="0.9s">
             &nbsp;  
            </div>
        </div>
    </div>
</div>


<!-- Pricing Plan End -->



   
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>