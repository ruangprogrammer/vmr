<?php 
/*if (isset($_GET['hapus'])) {
    $cekGambar = mysql_query("SELECT * FROM siswa WHERE siswa_id='".$_GET['hapus']."'");
    $data = mysql_fetch_array($cekGambar);
    if(!empty($data['siswa_images'])){
        $file = "../images/siswa/".$data['siswa_images'];
        unlink($file);
    }
    $queryHapus = mysql_query("DELETE FROM siswa where siswa_id = '" . $_GET['hapus'] . "'");
    if ($queryHapus) {
        echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=master/siswa/list' </script>";
        exit;
    }
}*/
?>
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Data Alumni VMR
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group pull-right">
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <th width="30%">Images</th>
                                <th>Kode ID</th>
                                <th width="30%">Name</th>
                                <th>Address</th>
                                <th width="20%">City</th>
                                <th>Status</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 0;
                            $queryPortofolio = mysql_query("SELECT * FROM siswa WHERE siswa_status='lulus' ORDER BY siswa_id DESC");
                            while ($rowsiswa = mysql_fetch_array($queryPortofolio)) {
                                ?>
                                <tr class="">
                                    <td><img src="../images/siswa/<?php echo $rowsiswa['siswa_images']; ?>"
                                             width="100%"></td>
                                    <td><?php echo $rowsiswa['siswa_code']; ?></td>
                                    <td><?php echo $rowsiswa['siswa_name']; ?></td>
                                    <td><?php echo $rowsiswa['siswa_address']; ?></td>
                                    <td><?php echo $rowsiswa['siswa_city']; ?></td>
                                    <td> <?php 
                                        if($rowsiswa['siswa_status']=='belum_lulus'){ ?>
                                            <button class='btn btn-danger' type='submit' > BELUM LULUS
                                            </button>
                                       <?php  
                                        }else{ ?>
                                            <button class='btn btn-success' type='submit' > LULUS
                                            </button>
                                       
                                       <?php }
                                        ?></td>
                                    <td>
                                        <a href="?hal=master/alumni/detail&id=<?php echo $rowsiswa['siswa_id']; ?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-search-plus"></i>
                                                Detail
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>