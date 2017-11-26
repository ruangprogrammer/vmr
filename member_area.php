<?php 
$id = 2;//$_GET['id'];
$sqlArtikel = mysql_query("SELECT * FROM artikel WHERE artikel_id='$id'");
$dataArtikel = mysql_fetch_array($sqlArtikel);
?>
<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center" data-aos="zoom-in">detail member</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Detail Member</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>	
<!-- /header section -->
<section class="blogpost-w3layouts">
	<div class="container">


			<div class="col-lg-3" data-aos="flip-right">
			<p class="blogpost-p1">
				<div class="hover01 column">
					<!-- <h2>PROFIL</h2> -->
					<div>
						<figure>
							<img class="img-responsive" src="images/artikel/<?php echo $dataArtikel['artikel_images']; ?>" data-aos="zoom-in" style="width: 177px;height: 236px;">
						</figure>
					</div>
				</div>	
			</p>

			<a href="blogpost.html" class="blogpost-w3ls" data-aos="flip-up"><h3><?php echo $dataArtikel['artikel_name']; ?></h3></a>
			<p class="blogpost-p2" data-aos="flip-up">Posted: June 25, 2017.</p>
			<!-- <p class="blogpost-p3" data-aos="flip-up"><?php //echo $dataArtikel['artikel_desc']; ?></p> -->
			<div class="hline"></div>
		 <!-- 	<h3 class="blogpost-agileits" data-aos="flip-up">Share It on social media:</h3> -->
			
			<!-- Blog Comments -->
			<div class="hline"></div>
			<!-- Comments Form -->
			
			<div class="hline"></div>
			<!-- Posted Comments -->
			
          
			<div class="hline"></div>
		</div>

<div class="col-lg-9" data-aos="flip-left">
		
		 	<h4 class="post-w3ls">Profil Member</h4>
		 	<div class="hline"></div>
			<ul class="popular-posts">
				<?php 
				/*$sqlArtikelr =  mysql_query("SELECT * FROM artikel ORDER BY artikel_id DESC");
				while($dataArtikelr = mysql_fetch_array($sqlArtikelr)){				*/ 
				?>
		        <li data-aos="flip-up">
					<div class="postimg-agile">
					<!-- 	<a href="artikel-detail-<?php echo $dataArtikelr['artikel_id']; ?>.html"> -->
							<div class="hover15 column">
								<div>
									<p>
									No. ID : JONI</p>
									
								</div>
								<div>
									<p>
									Nama : JONI
								</p>
									
								</div>
								<div><p>
									Tempat, Tgl Lahir : JONI</p>
									
								</div>
								<div>
									<p>
									Jenis Kelamin : JONI</p>
									
								</div>
								<div>
									<p>
									Alamat : JONI
								</p>
									
								</div>
								<div><p>
									NAMA : JONI</p>
									
								</div>
								<div>
									<p>
									NAMA : JONI</p>
									
								</div>
								<div>
									<p>
									NAMA : JONI
								</p>
									
								</div>
								<div><p>
									NAMA : JONI</p>
									
								</div>
							</div>	
						<!-- </a> -->
					</div>

					
					<div class="clearfix"></div>	
		        </li>
		        <?php //} ?>
		    </ul>   
			<div class="hline"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>