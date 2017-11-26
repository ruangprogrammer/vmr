<div class="left-side sticky-left-side">
    <!--logo and iconic logo start-->
    <div class="logo">
        <a href="index.php"><img src="assets/images/logo.png" alt=""></a>
    </div>

    <div class="logo-icon text-center">
        <a href="index.php"><img src="assets/images/logo_icon.png" alt=""></a>
    </div>
    <!--logo and iconic logo end-->

    <div class="left-side-inner">
        <!-- visible to small devices only -->
        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <?php $data = url($_GET['hal']); ?>
            <li><a href="?hal=dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

           <!--  <li class="menu-list <?php echo ($data[1] == 'product' || $data[1] == 'category' || $data[1] == 'user') ? 'nav-active' : ''; ?>">
                <a href="#"><i class="fa fa-th-list"></i> <span>Master</span></a>
                <ul class="sub-menu-list">
                    <li <?php echo $data[1] == 'category' ? 'class=active' : ''; ?>><a href="?hal=master/category/list"><i
                                    class="fa fa-list"></i>Slide</a></li>
                    <li <?php echo $data[1] == 'product' ? 'class=active' : ''; ?>><a href="?hal=master/product/list"><i
                                    class="fa fa-briefcase"></i> About</a></li>
                </ul>
            </li> -->
            <li><a href="?hal=master/slide/list"><i class="fa fa-list-ul"></i> <span>Slide</span></a></li>
            <li><a href="?hal=master/service/list"><i class="fa fa-gear"></i> <span>Service</span></a></li>
            <li><a href="?hal=master/testimoni/list"><i class="fa fa-comments"></i> <span>Testimoni</span></a></li>
            <li><a href="?hal=master/about/list"><i class="fa fa-info-circle"></i> <span>About</span></a></li>
            <li><a href="?hal=master/support/list"><i class="fa fa-users"></i> <span>Support Team</span></a></li>
            <li><a href="?hal=master/special_tools/list"><i class="fa fa-cogs"></i> <span>Special Tools</span></a></li>
            <li><a href="?hal=master/product/list"><i class="fa fa-briefcase"></i> <span>Product</span></a></li>
            <li><a href="?hal=master/order/list"><i class="fa fa-shopping-cart"></i> <span>Order Pelanggan</span></a></li>

        <!--     <li class="menu-list <?php echo ($data[1] == 'product' || $data[1] == 'category' || $data[1] == 'user') ? 'nav-active' : ''; ?>">
                <a href="#"><i class="fa fa-th-list"></i> <span>Kursus Mekanik Racing</span></a>
                <ul class="sub-menu-list">
                    <li <?php echo $data[1] == 'paket_kursus' ? 'class=active' : ''; ?>><a href="?hal=master/paket_kursus/list"><i
                                    class="fa fa-list"></i>Biaya</a></li>
                    <li <?php echo $data[1] == 'siswa' ? 'class=active' : ''; ?>><a href="?hal=master/siswa/list"><i
                                    class="fa fa-briefcase"></i> Data Siswa</a></li>
                     <li <?php echo $data[1] == 'download' ? 'class=active' : ''; ?>><a href="?hal=master/download/list"><i
                                    class="fa fa-briefcase"></i> Download</a></li>
                </ul>
            </li> -->

            <li><a href="?hal=master/paket_kursus/list"><i class="fa fa-folder-open"></i> <span>Paket Kursus</span></a></li>
            <li><a href="?hal=master/siswa/list"><i class="fa fa-camera"></i> <span>Data Siswa</span></a></li>
            <li><a href="?hal=master/member/list"><i class="fa fa-users"></i> <span>Member</span></a></li>
            <li><a href="?hal=master/artikel/list"><i class="fa fa-list-ul"></i> <span>Artikel</span></a></li>
            <li><a href="?hal=master/contact/list"><i class="fa fa-envelope-o"></i> <span>Contact</span></a></li>
            <li><a href="?hal=master/download/list"><i class="fa fa-cloud-download"></i> <span>Download</span></a></li>
            <li><a href="?hal=master/alumni/list"><i class="fa fa-clipboard"></i> <span>Alumni VMR</span></a></li>
            <li><a href="?hal=master/user/list"><i class="fa fa-users"></i> <span>Administrator</span></a></li>
            <li><a href="logout.php"><i class="fa fa-sign-in"></i> <span>Logout</span></a></li>
           <!--  <li><a href="?hal=master/about/list"><i class="fa fa-group"></i> <span>Siswa</span></a></li>
            <li><a href="?hal=master/about/list"><i class="fa fa-info-circle"></i> <span>About</span></a></li>
            <li><a href="?hal=master/portfolio/list"><i class="fa fa-cogs"></i> <span>Portfolio</span></a></li>
            <li><a href="?hal=master/blog/list"><i class="fa fa-bar-chart-o"></i> <span>Blog</span></a></li>
            <li><a href="?hal=master/contact/list"><i class="fa fa-envelope-o"></i> <span>Contact</span></a></li>
            <li><a href="?hal=master/inbox/list"><i class="fa fa-envelope"></i> <span>Inbox</span></a></li>
            <li><a href="?hal=master/social_media/list"><i class="fa fa-hand-o-right"></i> <span>Social Media</span></a></li>
            <li><a href="?hal=master/user/list"><i class="fa fa-users"></i> <span>Administrator</span></a></li>
            <li><a href="logout.php"><i class="fa fa-sign-in"></i> <span>Logout</span></a></li> -->
        </ul>
        <!--sidebar nav end-->
    </div>
</div>
<!-- https://demo.dealpos.com/A/POS.aspx -->