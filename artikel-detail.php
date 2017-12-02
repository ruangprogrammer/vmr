<?php 
$id = $_GET['id'];
$sqlArtikel = mysql_query("SELECT * FROM artikel WHERE artikel_id='$id'");
$dataArtikel = mysql_fetch_array($sqlArtikel);
?>
<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center" data-aos="zoom-in">Artikel</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Detail Artikel</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>	
<!-- /header section -->
<section class="blogpost-w3layouts">
	<div class="container">

		<div class="col-lg-8" data-aos="flip-left">

			<p class="blogpost-p1">
				<div class="hover01 column">
					<div>
						<figure><img class="img-responsive" src="images/artikel/<?php echo $dataArtikel['artikel_images']; ?>" data-aos="zoom-in"></figure>
					</div>
				</div>	
			</p>
			<a href="blogpost.html" class="blogpost-w3ls" data-aos="flip-up"><h3><?php echo $dataArtikel['artikel_name']; ?></h3></a>
			<p class="blogpost-p2" data-aos="flip-up">Posted: June 25, 2017.</p>
			<p class="blogpost-p3" data-aos="flip-up"><?php echo $dataArtikel['artikel_desc']; ?></p>
			<div class="hline"></div>
		 	<h3 class="blogpost-agileits" data-aos="flip-up">Share It on social media:</h3>
			<ul class="social-icons1" data-aos="flip-up">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
			</ul>
			<!-- Blog Comments -->
			<div class="hline"></div>
			<!-- Comments Form -->
			
			<div class="hline"></div>
			<!-- Posted Comments -->
			
          
			<div class="hline"></div>
		</div>
		<div class="col-lg-4" data-aos="flip-right">
		 	<h4 class="post-w3ls">Recent Posts</h4>
		 	<div class="hline"></div>
			<ul class="popular-posts">

				<?php 
				$sqlArtikelr =  mysql_query("SELECT * FROM artikel ORDER BY artikel_id DESC");
				while($dataArtikelr = mysql_fetch_array($sqlArtikelr)){				 
				?>
		        <li data-aos="flip-up">
					<div class="postimg-agile">
						<a href="artikel-detail-<?php echo $dataArtikelr['artikel_id']; ?>.html">
							<div class="hover15 column">
								<div>
									<figure><img src="images/post1.jpg" alt="Popular Post"></figure>
								</div>
							</div>	
						</a>
					</div>
					<div class="postinfo-agile">	
						<p><a href="artikel-detail-<?php echo $dataArtikelr['artikel_id']; ?>.html"><?php echo $dataArtikelr['artikel_name']; ?></a></p>
						<em>Posted on 02/21/17</em>
					</div>
					<div class="clearfix"></div>	
		        </li>
		        <?php } ?>
		    </ul>   
			<div class="hline"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>