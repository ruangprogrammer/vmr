<!-- header section -->
<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center">Contact Info</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<!-- /header section -->
<section class="contact-w3layouts">
	<!-- Page Content -->
    <div class="container">
        <!-- Map Column -->
        <div class="col-md-8">
            <!-- Embedded Google Map -->
			<div class="map-w3ls">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.521562584325!2d110.40975822154061!3d-7.840351007230631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a56d979d0f0d1%3A0x905c504ef612a872!2sVMR+mekanik+Berdasi!5e0!3m2!1sen!2sid!4v1511096531484" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				<!-- <iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d380510.6741687111!2d-88.01234121699822!3d41.83390417061058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1455598377120" style="border:0" allowfullscreen> --></iframe>
			</div>
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-4">
            <h3>Contact Details</h3>
            <?php $dataAlamat = mysql_fetch_array(mysql_query("SELECT * FROM contact WHERE contact_id = '8' ")); ?>
            <?php $dataPhone = mysql_fetch_array(mysql_query("SELECT * FROM contact WHERE contact_id = '7' ")); ?>
            <?php $dataEmail = mysql_fetch_array(mysql_query("SELECT * FROM contact WHERE contact_id = '3' ")); ?>
            <p><i class="fa fa-map-marker"></i> <?php echo $dataAlamat['contact_desc'];?></p>
            <p><i class="fa fa-phone"></i> <?php echo $dataPhone['contact_desc']; ?></p>
            <p><i class="fa fa-envelope-o"></i> <a href="<?php echo $dataEmail['contact_desc']; ?>"><?php echo $dataEmail['contact_desc']; ?></a></p>
			
            <ul class="social-icons2">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
			</ul>
        </div>
    </div>
</section>


<section class="contact-w3ls">	
	<div class="container">	
		
	</div>
</section>	