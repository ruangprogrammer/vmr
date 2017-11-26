<div class="demo-2">
	<div id="slider" class="sl-slider-wrapper">
		<div class="sl-slider">
			<?php 
			//include('admin/config.php');
			$no=0;
			$sqlSlide = mysql_query("SELECT * FROM slide ORDER BY slide_id DESC");
			while($dataSlide = mysql_fetch_array($sqlSlide)){
			$no++;
			?>
			<div class="sl-slide" data-orientation="<?php 

			echo $no % 2 == 0  ? 'vertical' : 'horizontal';?>" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
				<div class="sl-slide-inner">
					<div class="bg-img bg-img-1" style="background: url(images/slide/<?php echo $dataSlide['slide_images'] ?>) no-repeat;background-position:center;
						background-attachment:fixed;
						background-size:cover;
						-webkit-background-size:cover;
						-moz-background-size:cover;
						-o-background-size:cover;
						-ms-background-size:cover;"></div>
					<div class="container">
						<h3><?php echo $dataSlide['slide_name']; ?></h3>
						<p><?php echo $dataSlide['slide_desc']; ?></p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div><!-- /sl-slider -->
		<nav id="nav-dots" class="nav-dots">
			<span class="nav-dot-current"></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</nav>
	</div><!-- /slider-wrapper -->
</div>	


<!-- /banner section -->
<!-- info section -->
<section class="info-w3ls">
	<div class="container">
		

		<?php 
		$sqlService = mysql_query("SELECT * FROM service ORDER BY service_id DESC");
		while($dataService = mysql_fetch_array($sqlService)){ ?>
		<div class="col-lg-6 col-md-6 info-wthree">
			<div class="info-agile1">
				<div class="col-xs-5 info-w3layouts1" data-aos="flip-left">
					<div class="ch-grid">
						<div>
							<div class="ch-item">				
								<div class="ch-info" style="background-image: url(images/service/<?php echo $dataService['service_images']; ?>);	    /*display: block;*/
    /*position: absolute;*/
/*    width: 100%;
    height: 100%;*/
								    border-radius: 50%;">
																	<div class="ch-info-front ch-img-1" style="-webkit-transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
									-moz-transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
									-o-transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
									-ms-transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
									transform: translate3d(0,0,-220px) rotate3d(1,0,0,90deg);
									background:url(images/service/<?php echo $dataService['service_images']; ?>);
									opacity: 0;"></div>
																	<div class="ch-info-back1">
										<!-- <h3>Bike Race</h3>
										<p>Feel The Speed</p> -->
									</div>	
								</div>
							</div>
						</div>	
					</div>	
				</div>

				<div class="col-xs-7 info-w3layouts2" data-aos="flip-right">
					<div class="info-agileits">
						<h4><?php echo $dataService['service_name']; ?></h4>
						<p><?php echo $dataService['service_desc']; ?></p>
						<a href="service-detail-2<?php ?>.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Read More</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<?php } ?>

		<div class="clearfix"></div>
	</div>
</section>
<!-- /info section -->
<!-- testimonial section -->
<section class="testimonial-w3ls jarallax">
	<div class="container">
		<h3 class="text-center">Our Testimonials</h3>
		<!-- Slideshow 1 -->
		<ul class="rslides" id="slider1">
			<li>
				<?php //for($i=0;$i<10;$i++){
				$sqlTestimoni = mysql_query("SELECT * FROM testimoni WHERE testimoni_id='5'");
				$dataTestimoni = mysql_fetch_array($sqlTestimoni);
				?>
				<div class="col-lg-6 col-md-6 w3-agileits1" data-aos="flip-left">
					<div class="test-agile">
						<p class="test-p1"><?php echo $dataTestimoni['testimoni_desc']; ?></p>
						<div class="test-agileits">
							<div class="test-wthree1">
								<h4><?php echo $dataTestimoni['testimoni_name'] ?></h4>
								<p class="test-p2"><?php echo $dataTestimoni['testimoni_city']; ?></p>	
							</div>
							<div class="test-wthree2">
								<img src="images/testimoni/<?php echo $dataTestimoni['testimoni_images']; ?>" alt="" class="img-circle img-responsive">
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<?php // } 
				$sqlTestimoni1 = mysql_query("SELECT * FROM testimoni WHERE testimoni_id='6'");
				$dataTestimoni1 = mysql_fetch_array($sqlTestimoni1);
				?>
				<div class="col-lg-6 col-md-6 w3-agileits2" data-aos="flip-right">
					<div class="test-agile">
						<p class="test-p1"><?php echo $dataTestimoni1['testimoni_desc']; ?></p>
						<div class="test-agileits">
							<div class="test-wthree1">
								<h4><?php echo $dataTestimoni1['testimoni_name'] ?></h4>
								<p class="test-p2"><?php echo $dataTestimoni1['testimoni_city']; ?></p>	
							</div>
							<div class="test-wthree2">
								<img src="images/testimoni/<?php echo $dataTestimoni1['testimoni_images']; ?>" alt="" class="img-circle img-responsive">
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</li>
			<?php
			$sqlTestimoni2 = mysql_query("SELECT * FROM testimoni WHERE testimoni_id='7'");
			$dataTestimoni2 = mysql_fetch_array($sqlTestimoni2);
			?>
			<li>
				<div class="col-lg-6 col-md-6 w3-agileits1" data-aos="flip-left">
					<div class="test-agile">
						<p class="test-p1"><?php echo $dataTestimoni2['testimoni_desc']; ?></p>
						<div class="test-agileits">
							<div class="test-wthree1">
								<h4><?php echo $dataTestimoni2['testimoni_name'] ?></h4>
								<p class="test-p2"><?php echo $dataTestimoni2['testimoni_city']; ?></p>	
							</div>
							<div class="test-wthree2">
								<img src="images/testimoni/<?php echo $dataTestimoni2['testimoni_images']; ?>" alt="" class="img-circle img-responsive">
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<?php
				$sqlTestimoni3 = mysql_query("SELECT * FROM testimoni WHERE testimoni_id='8'");
				$dataTestimoni3 = mysql_fetch_array($sqlTestimoni3);
				?>
				<div class="col-lg-6 col-md-6 w3-agileits2" data-aos="flip-right">
					<div class="test-agile">
						<p class="test-p1"><?php echo $dataTestimoni3['testimoni_desc']; ?></p>
						<div class="test-agileits">
							<div class="test-wthree1">
								<h4><?php echo $dataTestimoni3['testimoni_name'] ?></h4>
								<p class="test-p2"><?php echo $dataTestimoni3['testimoni_city']; ?></p>	
							</div>
							<div class="test-wthree2">
								<img src="images/testimoni/<?php echo $dataTestimoni['testimoni_images']; ?>" alt="" class="img-circle img-responsive">
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</li>

		</ul>
	</div>
</section>
<!-- testimonial section -->
<!-- special section -->
<section class="special-agileinfo">
	<div class="container-fluid">
		<?php $dataAbout = mysql_fetch_array(mysql_query("SELECT * FROM about WHERE about_id='4'")); ?>
		<div class="col-lg-6 col-md-6 col-sm-6 special-w3l1" data-aos="flip-left">
			<div class="hover01 column">
				<div>
					<figure><img src="images/about/<?php echo $dataAbout['about_images']; ?>" alt="" class="img-responsive"/></figure>
				</div>
			</div>
		</div>	
		<div class="col-lg-6 col-md-6 col-sm-6 special-w3l2" data-aos="flip-right">
			<div class="special-w3-agile">
				<h3><?php echo $dataAbout['about_name']; ?></h3>
				<p><?php echo $dataAbout['about_desc']; ?></p>
				<a href="blogpost.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Read More</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /special section -->
<!-- recent pics section -->
<section class="recent-agileinfo jarallax">
	<div class="container">
		<h3 class="text-center" data-aos="zoom-in">Support Team</h3>
		<section class="content" data-aos="zoom-in">
			<div id="thumbGrid" class="thumbGrid"
				data-thumbgrid="true"
				data-nav_effect="slideInverse"
				data-nav_delay="60"
				data-nav_timing="300"
				data-nav_pagination="3"
				data-gallery_effectnext="fadeIn"
				data-gallery_effectprev="fadeOut"
				data-gallery_fullscreenw="90%"
				data-gallery_fullscreenh="90%"
				data-gallery_cover="false">
				<?php 
				$sqlSupport = mysql_query("SELECT * FROM support ORDER BY support_id DESC");
				while($dataSupport = mysql_fetch_array($sqlSupport)){ ?>
				<img src="images/support/<?php echo $dataSupport['support_images'] ?>" data-highres="images/support/<?php echo $dataSupport['support_images'] ?>" data-caption="Parturient Bibendum Malesuada Etiam"/>
				<?php } ?>
			</div>
		</section>
	</div>
</section>