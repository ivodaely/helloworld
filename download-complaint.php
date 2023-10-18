<?php
	include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>A4 Page Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
   body, html {
  margin: 0;
  padding: 0;
  background-color: white;
}

.a4-page {
  width: 210mm; /* A4 width */
  height: 297mm; /* A4 height */
  margin: 0 auto;
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.kopsurat-container {
  text-align: center;
  margin: 0 auto;
}

.kopsurat-container img {
  max-width: 100%;
  max-height: 100%;
  height: auto;
  width: auto;
}

  
  </style>
</head>

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
			
			$q = "select nama from db_pekerja where nomor = '".$pic."'";
			$r = $con->query($q);
			$w = $r->fetch_array();
			
			$nky = $w ['nama'];
			
			$q2 = "select nama from db_pekerja where nomor = '".$veri."'";
			$r2 = $con->query($q2);
			$w2 = $r2->fetch_array();
			
			$nky2 = $w2 ['nama'];
		
		
	?>
<body>
  <div class="a4-page">
    <div class="kopsurat-container">
      <img src="img/header/kopsurat.png" alt="Logo" class="logo" />
    </div>
    <div>
    <h5>Sumber Ketidaksesuaian:</h5>
    <label for="complaint">
      <input type="checkbox" id="complaint" name="source" value="complaint" checked> Keluhan Pelanggan
    </label>
    <label for="auditEksternal">
      <input type="checkbox" id="auditEksternal" name="source" value="auditEksternal"> Audit Eksternal
    </label>
    <label for="surveyKepuasan">
      <input type="checkbox" id="surveyKepuasan" name="source" value="surveyKepuasan"> Survey Kepuasan Pelanggan
    </label>
    <label for="auditInternal">
      <input type="checkbox" id="auditInternal" name="source" value="auditInternal"> Audit Internal
    </label>
    <label for="lainLain">
      <input type="checkbox" id="lainLain" name="source" value="lainLain"> Lain – Lain
    </label>
  </div>
  <br>
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
					<td style="width:33%;border:1px solid black;">Nama : <?=$nky?></td>
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
					<td style="width:33%;border:1px solid black;"><?=$nky?></td>
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
					<td style="width:33%;border:1px solid black;">Nama : <?=$nky?></td>
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
					<td style="width:33%;border:1px solid black;">Nama : <?=$nky2?></td>
					<td style="width:33%;border:1px solid black;">Tanda Tangan</td>
				</tr>
				<tr>
				    <td>Foto :</td>
				    <td colspan="2">
				        	 <?php
                            // Fetch the image data from the 'image' table
                            $sql = "SELECT foto FROM tr_process where compid = '".$tid."'"; // Retrieve the latest uploaded image
                            $result = $con->query($sql);
                            
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $imageData = $row['foto'];
                            
                                // Display the image
                                echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="Uploaded Image">';
                            } else {
                                echo "No image found in the database.";
                            }
                            
                            
                            ?>
				        
				    </td>
				</tr>    
				<tr>
				    <td colspan="3"><em>SF-311/2012 – AVS Rev.0</em></td>
				<tr>    
			</table>

  </div>
  
  <!-- Include the html2pdf library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <script>
    // Trigger PDF generation when the page loads
    window.onload = () => {
      const element = document.querySelector(".a4-page");
      const options = {
        filename: "Complaint-Download.pdf",
        html2canvas: { scale: 1 },
        jsPDF: {
          format: "a3",
          orientation: "portrait",
        },
      };

      html2pdf().set(options).from(element).save();
    };
  </script>
</body>
</html>
