<?php 
//session_start();
require_once('admin/config.php');
$id = $_SESSION['member_id'];    //echo $id; exit();
$sqlMember = mysql_query("SELECT *
							FROM
							   `member`
							    INNER JOIN `vmr`.`siswa` 
							        ON (`member`.`member_id` = `siswa`.`member_id`)
						  WHERE member.member_id='$id'"); 
	//echo $sql; exit();
$dataMember = mysql_fetch_array($sqlMember);

//echo "Hallo gaes :".$dataMember['siswa_name']; exit();
?>
<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center">Member Area</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
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

			<div class="col-lg-3">
			<p class="blogpost-p1">
				<div class="hover01 column">
					<!-- <h2>PROFIL</h2> -->
					<div>
						<figure>
							<img class="img-responsive" src="images/siswa/<?php echo $dataMember['siswa_images']; ?>" style="width: 177px;height: 236px;">
						</figure>
					</div>
				</div>	
			</p>

			<a href="#" class="blogpost-w3ls"><h3><?php echo $dataMember['siswa_name']; ?></h3></a>


		<!-- 	<p class="blogpost-p2">Posted: June 25, 2017.</p> -->
			<!-- <p class="blogpost-p3" data-aos="flip-up"><?php //echo $dataArtikel['artikel_desc']; ?></p> -->
			<!-- <div class="hline"></div> -->
			<div>
		 <!-- 	<h3 class="blogpost-agileits"> -->
		 		<a href="member-edit-<?php echo $dataMember['member_id']; ?>.html"><button type="submit" class="btn btn-primary aos-init">Edit Profil</button></a>
		<!--  	Share It on social media: -->
			</div>
		<!--  </h3> -->
			
			<!-- Blog Comments -->
		<!-- 	<div class="hline"></div>

			
			<div class="hline"></div> -->
	
			
          
			<!-- <div class="hline"></div> -->
		</div>
<div class="col-lg-9">
			<div style="text-align: right;"><a href="logout.html">Logout</a></div>
			<h4 class="post-w3ls">No. Induk : <?php echo $dataMember['siswa_code']; ?></h4>
			<h4 class="post-w3ls">Nama : <?php echo $dataMember['siswa_name'];?></h4>
			<h4 class="post-w3ls">Email : <?php echo $dataMember['member_email']; ?></h4>
			<h4 class="post-w3ls">Username : <?php echo $dataMember['member_username']; ?></h4>
			<h4 class="post-w3ls">Password : ***************</h4>
			<h4 class="post-w3ls">Kota : <?php echo $dataMember['siswa_city']; ?></h4>
			<h4 class="post-w3ls">Alamat Lengkap : <?php echo $dataMember['siswa_address']; ?></h4>
			<div class="hline"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>