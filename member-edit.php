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
<form method="POST" action="update-member.php" enctype="multipart/form-data">
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
							<br>
							<input type="file" name="frm_images">
						</figure>
					</div>
				</div>	
			</p>

			<a href="#" class="blogpost-w3ls"><h3><?php //echo $dataMember['siswa_name']; ?></h3></a>
			<div>

		 	<!-- 	<button type="submit" class="btn btn-primary aos-init" data-aos="flip-up">Edit Profil</button> -->
	
			</div>

		</div>
<div class="col-lg-9">
			<div style="text-align: right;"><a href="logout.html">Logout</a></div>

			<table border="0">
				<tr>
				<td>No. Induk</td><td>:</td><td><input name="frm_no_induk" type="text" value="<?php echo $dataMember['siswa_code']; ?>" class="form-control" disabled></td>
				</tr><tr><td>&nbsp</td></tr>
				<tr>
				<td>Nama </td><td>:</td><td><input  type="text" name="frm_name" value="<?php echo $dataMember['siswa_name'];?>" class="form-control"></td>
				</tr><tr><td>&nbsp</td></tr>
				<tr>
				<td>Email </td><td>:</td><td><input name="frm_email" type="text" value="<?php echo $dataMember['member_email']; ?>" class="form-control"></td>
				</tr><tr><td>&nbsp</td></tr>
				<tr>
				<td>Username </td><td>:</td><td><input name="frm_username" type="text" value="<?php echo $dataMember['member_username']; ?>" class="form-control"></td>
				</tr><tr><td>&nbsp</td></tr>
				<tr>
				<td>Password </td><td>:</td><td>*******************</td>
				</tr><tr><td>&nbsp</td></tr>
				<tr>
				<td>Kota</td><td>:</td><td><input name="frm_city" type="text" value="<?php echo $dataMember['siswa_city']; ?>" class="form-control"></td>
				</tr><tr><td>&nbsp</td></tr>
				<tr>
				<td>lamat Lengkap</td><td>:</td><td>
					<textarea class="form-control"><?php echo $dataMember['siswa_address']; ?></textarea>
					<!-- <input type="text" value="<?php// echo $dataMember['siswa_address']; ?>" class="form-control"> -->
				</td>
				</tr>
			</table>
			<br>


			<input type="submit" value="Update" name="" class="btn btn-primary aos-init">
			<!-- <button type="submit" class="btn btn-primary aos-init">Update</button> -->

			<br><br>
			<div class="hline"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>

</form>
