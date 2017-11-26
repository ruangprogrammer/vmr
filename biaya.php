<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center" data-aos="zoom-in">Racing mechanic Course</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Drivers</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<!-- /header section -->
<section class="drivers-w3ls">
	<div class="container">
		<div class="project-list">
			<?php 
			$i=0;
			$sqlBiaya = mysql_query("SELECT * FROM paket_kursus");
			while($dataBiaya = mysql_fetch_array($sqlBiaya)){ 
			$i++;?>
			<div class="project" data-aos="zoom-in">
				<div class="project__card">
					<a href="#image-1" class="project__image"><img src="images/paket_kursus/<?php echo $dataBiaya['paket_kursus_images']; ?>" alt=""></a>
					<div class="project__detail"> 
						<h4 class="project__title"><a href="#image-1"><?php echo $dataBiaya['paket_kursus_name'] ?></a></h4>
						<small class="project__category"><a href="#image-<?php echo $i; ?>">Rp. <?php echo number_format($dataBiaya['paket_kursus_price'], 0, ',', '.'); ?>,00</a></small>
						<a href="#image-<?php echo $i; ?>" class="opening">Detail</a>
					</div>
					<!-- tambahan -->

					<!-- -->
				</div>
			</div>	
			<?php } ?>		
		</div>		
	</div>
	<?php 
	$i=0;
	$sqlBiaya = mysql_query("SELECT * FROM paket_kursus");
	while($dataBiaya = mysql_fetch_array($sqlBiaya)){ 
	$i++;?>
	<div class="lb-overlay" id="image-<?php echo $i; ?>">
		<!-- <img src="images/paket_kursus/<?php echo $dataBiaya['paket_kursus_images']; ?>" alt="image01" class="img-responsive"/> -->
		<div>
			<h3><?php echo $dataBiaya['paket_kursus_name']; ?></h3>
			<p>
			<?php echo $dataBiaya['paket_kursus_desc']; ?>
			</p>
			<a href="#image-10" class="lb-prev">Prev</a>
			<a href="#image-2" class="lb-next">Next</a>
		</div>
		<a href="" class="lb-close">x</a>
	</div>
	<?php } ?>
</section>	