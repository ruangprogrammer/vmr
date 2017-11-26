<?php 
error_reporting(0);
$id = $_GET['id'];
$queryRowInbox = mysql_query("SELECT * FROM inbox where inbox_id = '".$id."'");
$rowInbox = mysql_fetch_array($queryRowInbox);
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           ADD INBOX
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">
                                    
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Name</label>
                                        <div class="col-lg-5">
                                                <?php echo $rowInbox['inbox_name']; ?>
                                        </div>
                                    </div>

                                     <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2" style="text-align: left;">Email</label>
                                        <div class="col-lg-3">
                                                <?php echo $rowInbox['inbox_email']; ?>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-2" style="text-align: left;">Subject </label>
                                        <div class="col-lg-5">
                                        <?php echo $rowInbox['inbox_subject']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Message</label>
                                        <div class="col-lg-5">
                                        <?php echo $rowInbox['inbox_message']; ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <a href="?hal=master/inbox/list">
                                            <button class="btn btn-primary" type="button">Back</button>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--body wrapper end-->

