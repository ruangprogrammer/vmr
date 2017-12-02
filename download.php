<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center">Download</h3>
        <!-- Page Heading/Breadcrumbs -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Schedule</li>
                </ol>
            </div>
      -->
	</div>
</section>
<!-- /header section -->
<section class="schedule-w3layouts">
	<div class="container">
		<!-- <h3 class="text-center" data-aos="zoom-in">World Superbike Championship Races</h3> -->
		<div class="table-responsive">   
			<table class="table">
				<thead>
					<tr>
						<th><h4>Judul</h4></th>
						<th><h4>File</h4></th>
						<!--<th><h4>Kota</h4></th>-->
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sqlSiswa =  mysql_query("SELECT * FROM siswa ORDER BY siswa_id DESC");
					while($dataSiswa=mysql_fetch_array($sqlSiswa)){ ?>
					<tr>
						<td>Rancing Books<?php //echo $dataSiswa['siswa_images']; ?></td>
						<td>file-test-rancing-file-test-rancingfile-test-rancing.pdf <?php //echo $dataSiswa['siswa_name']; ?></td>
						<!--<td><?php /*echo $dataSiswa['siswa_city'] */?></a></td>-->
						<td><a class="btn btn-primary" href="#" style="color:#fff;">download</a></td>
					</tr>   
					<?php } ?>  

				</tbody>
			</table>
		</div>	
	</div>
<!--
   <div class="modal fade" id="map1" tabindex="-1" role="dialog" aria-labelledby="map1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Pekan Baru</h4>
				</div>
				<div class="modal-body">
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12489.004048382385!2d145.2300863!3d-38.5049214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf0579a514431390!2sPhillip+Island+Grand+Prix+Circuit!5e0!3m2!1sen!2sin!4v1490703725291" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div> -->
</section>
<br><br><br><br><br><br><br><br><br>



