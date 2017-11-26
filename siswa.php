<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center">Data Siswa Alumni VMR</h3>
        <!-- Page Heading/Breadcrumbs -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Schedule</li>
                </ol>
            </div>
        </div> -->
        <!-- /.row -->
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
						<th><h4>Foto</h4></th>
						<th><h4>Nama</h4></th>
						<th><h4>Kota</h4></th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sqlSiswa =  mysql_query("SELECT * FROM siswa ORDER BY siswa_id DESC");
					while($dataSiswa=mysql_fetch_array($sqlSiswa)){ ?>
					<tr>
						<td><img src="images/siswa/<?php echo $dataSiswa['siswa_images']; ?>" alt="australia" class="img-responsive" style="width: 130px;"></td>
						<td><?php echo $dataSiswa['siswa_name']; ?></td>
						<td><a data-toggle="modal" href="#map1" class="map-link" title="Click"><i class="fa fa-map-marker"></i> <?php echo $dataSiswa['siswa_city'] ?></a></td>
					</tr>   
					<?php } ?>  
				</tbody>
			</table>
		</div>	
	</div>	
<!-- 	<div class="modal fade" id="map1" tabindex="-1" role="dialog" aria-labelledby="map1" aria-hidden="true">
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



