
<!-- header section -->
<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center">Login Member</h3>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
	</div>
</section>
<section class="contact-w3ls">	
    <!-- Contact Form -->
	<div class="container">	

         <div class="col-md-4">
           
        </div>
        
        
        <div class="col-md-4">
            <form action="login-check.html" method="post" name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">      
                        <?php
                        error_reporting(0);
                         if($_GET['action']=='gagal'){ ?>
                        <p class="help-block">Login Gagal.....!!!!!!!!!</p>
                      <!--   <label>Username:</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p> -->
                        <?php } ?>
                    </div>
                    <div class="controls">
                        <label>Username:</label>
                        <input type="text" name="frm_username" class="form-control" id="name" required data-validation-required-message="Please enter your name.">

                        <p class="help-block"></p>
                    </div>
                     <div class="controls">
                        <label>Password:</label>
                        <input type="password" name="frm_password" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                    <div id="success"></div>
                 <button type="submit" class="btn btn-primary">LOGIN</button>
                 <button type="submit" class="btn btn-primary" style="border: 2px solid #2845ff; color: #2845ff; background-color: #f5f5f5;">With Facebook</button>
            </form>
        </div>
        
        
	</div>
</section>	