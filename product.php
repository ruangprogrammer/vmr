<!-- /navigation --> 
<!-- Page Content -->
<!-- header section -->
<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center" data-aos="zoom-in">Product</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb" data-aos="zoom-in">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">product</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>	
<!-- /header section -->

<section class="team-w3layouts">	
	<div class="container">
        <!-- Team Members -->
       <!--  <h3 class="text-center" data-aos="flip-up">Product</h3> -->
        

        <?php
        $i=0;
        $sqlProduct = mysql_query("SELECT * FROM product ORDER BY product_id");
        while($dataProduct = mysql_fetch_array($sqlProduct)){
        	$i++;
        // for($i=0;$i<10;$i++){ 
        	?>

        <div class="col-md-4 col-sm-6 col-xs-6 text-center team-wthree" data-aos="zoom-in">
            <div class="grid cs-style-4">
				<div>
					<figure>
						<div><img src="images/product/<?php echo $dataProduct['product_images'] ?>" alt="img05"></div>
						<figcaption>
							<h4><?php echo $dataProduct['product_name']; ?></h4>
							<p>VMR - Mekanik Berdasi</p>
							<a data-toggle="modal" href="#team<?php echo $i; ?>" class="team-link" title="Click">Detail</a>
						</figcaption>
					</figure>
				</div>
			</div>	
        </div>
        <?php  } ?>


    </div>


<?php  
$no=0;
$sqlProduct = mysql_query("SELECT * FROM product ORDER BY product_id");
        while($dataProduct = mysql_fetch_array($sqlProduct)){//for($i=0;$i<10;$i++){ 
$no++;
        	?>

	<div class="modal fade" id="team<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="team1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">VMR - Mekanik Berdasi</h4>
				</div>
				<div class="modal-body">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="hover01 column">
							<div>
								<figure><img class="img-responsive" src="images/product/<?php echo $dataProduct['product_images'] ?>" alt="w3layouts"></figure>
								<span><?php echo $dataProduct['product_name']; ?></span>
							</div>
						</div>	
<ul class="social-icons2">
	<a class="btn btn-primary" href="pesan-product-<?php echo $dataProduct['product_id']; ?>.html">Pesan Sekarang</a></ul>
						<!-- <ul class="social-icons2">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						</ul> -->
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec elementum diam. Etiam tempus sit amet mauris in molestie. Ut lorem nunc, ultricies eu diam et, egestas sagittis nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
						<p>Phasellus ac velit quis nunc tempus iaculis. Etiam ac lectus ullamcorper massa luctus gravida. </p>
					</div>
					<div class="clearfix"></div>					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<?php  } ?>



</section>	