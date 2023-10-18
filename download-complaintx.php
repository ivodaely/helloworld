<?php
	include "connect.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Simpel - Web Aplication</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<script
      src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
      integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- html2pdf CDN link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <style>
    .kopsurat {
      position: relative;
      top: 50px;
      width: 600px;
      height: 2000px;
	
	 align-items: center; 
	 justify-content: 
	 center; 
	 height: 100vh;
      border: 1px solid #000; /* Thin black border */
      margin: 0 auto; /* Center the div horizontally */
	 }
    
	
	</style>
  <body>
  <?php
	    error_reporting(0);
		$tid = $_GET ['tiket'];
		
		
			$qtrack = "SELECT a.compid,a.nama_pelapor, a.airline, a.keterangan,a.keterangan,a.tempat_kejadian, date(a.tanggal_kejadian) as tglkej,  b.penyebab, date(b.tglpenyebab) as tglpb, b.perbaikan,date(b.tglperbaikan) as tglpr, b.pencegahan,date(b.tglpencegahan) as tglpc, a.status,b.verificator, b.uraian,b.pic FROM `tr_complaint` a LEFT join tr_process b on a.compid = b.compid WHERE a.compid='".$tid."';";
		
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
    <div id="content">
      <div class="kopsurat">
        <div class="row">
			<img src="img/header/kopsurat.png" alt="Logo" class="logo" />
		</div>
		<div class="row">
			<h5 style="font-size:16px;">No : <?=$tid?></h5>
		</div>
		<div class="row">
			<h5 style="font-size:16px;">Sumber Ketidaksesuaian :</h5>
		</div>
		<div class="row" style="font-size:16px;">
			<div class="col">
				 <div class="form-check">
					<input type="radio" class="form-check-input" id="complaint" name="source" value="complaint">
					<label class="form-check-label" for="complaint">Keluhan Pelanggan</label>
					</div>
		  </div>
		  <div class="col" >
				 <div class="form-check" >
					<input type="radio" class="form-check-input" id="complaint" name="source" value="complaint">
					<label class="form-check-label" for="complaint" style="font-size:16px;">Audit Eksternal</label>
					</div>
		  </div>
		  <div class="col">
				 <div class="form-check">
					<input type="radio" class="form-check-input" id="complaint" name="source" value="complaint">
					<label class="form-check-label" for="complaint">Survey Kepuasan</label>
					</div>
		  </div>
		 </div> 
		 <div class="row" >
			<div class="col">
				 <div class="form-check">
					<input type="radio" class="form-check-input" id="complaint" name="source" value="complaint">
					<label class="form-check-label" for="complaint">Audit Internal
					</div>
		  </div>
		  <div class="col">
				 <div class="form-check">
					<input type="radio" class="form-check-input" id="complaint" name="source" value="complaint" checked>
					<label class="form-check-label" for="complaint">Lain - lain</label>
					</div>
		  </div>
		  <div class="col">
				 <div class="form-check">
					
					<label class="form-check-label" for="complaint">&nbsp;</label>
					</div>
		  </div>
		 </div> 
		
		
			<table style="border:3px solid black; width:100%;">
				<tr rowspan="2" style="border:1px solid black;">
					<td colspan="3" ="2">
						¤	Uraian Ketidaksesuaian  : ( diisi oleh auditor untuk audit internal )
					</td>
				</tr>
				<tr style="border:1px solid black; height:60px">
					<td colspan="3" ><?=$ket?>
					</td>
				</tr>
				<tr style="border:1px solid black;">
					<td style="width:33%;border:1px solid black;">Tanggal : <?=$tglkej?></td>
					<td style="width:33%;border:1px solid black;">Nama : <?=$nama?></td>
					<td style="width:33%;border:1px solid black;">Tanda Tangan:  </td>
				</tr>
				<tr rowspan="2" style="border:1px solid black;">
					<td colspan="3" ="2">
						¤	Analisa Penyebab : ( diisi oleh auditee untuk audit internal )
					</td>
				</tr>
				<tr style="border:1px solid black; height:60px">
					<td colspan="3" ><?=$pb?>
					</td>
				</tr>
				<tr style="border:1px solid black;">
					<td style="width:33%;border:1px solid black;">Tanggal : <?=$tglpb?></td>
					<td style="width:33%;border:1px solid black;">Nama : <?=$pic?></td>
					<td style="width:33%;border:1px solid black;">Tanda Tangan</td>
				</tr>
				<tr rowspan="2" style="border:1px solid black;">
					<td colspan="3" ="2">
						¤	Tindakan Perbaikan : ( diisi oleh auditee untuk audit internal )
					</td>
				</tr>
				<tr style="border:1px solid black; height:60px">
					<td colspan="3" ><?=$pr?>
					</td>
				</tr>
				<tr style="border:1px solid black;">
					<td style="width:33%;border:1px solid black;">Tanggal : <?=$tglpr?></td>
					<td style="width:33%;border:1px solid black;"><?=$pic?></td>
					<td style="width:33%;border:1px solid black;">Tanda Tangan</td>
				</tr>
				<tr rowspan="2" style="border:1px solid black;">
					<td colspan="3" ="2">
						¤	Tindakan Pencegahan : ( diisi oleh auditee untuk audit internal )
					</td>
				</tr>
				<tr style="border:1px solid black; height:60px">
					<td colspan="3" ><?=$pc?>
					</td>
				</tr>
				<tr style="border:1px solid black;">
					<td style="width:33%;border:1px solid black;">Tanggal : <?=$tglpc?></td>
					<td style="width:33%;border:1px solid black;">Nama : <?=$pic?></td>
					<td style="width:33%;border:1px solid black;">Tanda Tangan</td>
				</tr>
				<tr rowspan="2" style="border:1px solid black;">
					<td colspan="3" ="2">
						¤	Verifikasi/Komentar MR / OH DPPU / Auditor : ( diisi oleh auditor untuk audit internal)
					</td>
				</tr>
				<tr style="border:1px solid black; height:60px">
					<td colspan="3" ><?=$urai?>
					</td>
				</tr>
				<tr style="border:1px solid black;">
					<td style="width:33%;border:1px solid black;">Tanggal : <?=$tglpc?></td>
					<td style="width:33%;border:1px solid black;">Nama : <?=$veri?></td>
					<td style="width:33%;border:1px solid black;">Tanda Tangan</td>
				</tr>
				
			
			</table>



		

      </div>
</div>
      <!-- JavaScript to trigger PDF generation when the page loads -->
    <script>
      const element = document.getElementById("content");

      // Configure the options for html2pdf
      const options = {
        filename: "Complaint-download.pdf",
        margin: [0, 10, 10, 10], // Adjust margins (top, right, bottom, left)
        pagebreak: { mode: "avoid-all" },
        html2canvas: { scale: 1 }, // Adjust the scale as needed
        jsPDF: {
          format: "a4", // Use A4 size paper
          orientation: "portrait",
        },
      };

      // Trigger PDF generation when the page loads
      window.onload = () => {
        // Create an instance of html2pdf, set the options, and save the PDF
        html2pdf().set(options).from(element).save();
      };
    </script>
   
  </body>
</html>
