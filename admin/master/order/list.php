<?php 
error_reporting(0);
      if (isset($_GET['hapus'])) {   
        $queryHapus = mysql_query("DELETE FROM product where product_id = '".$_GET['hapus']."'");
            
        if ($queryHapus) {
          echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=master/product/list' </script>";exit;
        }
      }
 ?>
  <div class="wrapper">
             <div class="row">
                <div class="col-sm-12">
                <section class="panel">
                <header class="panel-heading">
                    Data Order
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                <div class="adv-table editable-table ">
                <div class="clearfix">
                    <div class="btn-group">
                    </div>
                    <div class="btn-group pull-right">
                    </div>
                </div>
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                <thead>
                <tr>
                    <th>No</th>
                    <th>ID Order</th>
                    <th>Tanggal Order</th>
                    <th>Petugas</th>
                    <th>Jumlah Item</th>
                    <th style="text-align: right;">Total</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                      $no = 1;
                      $queryTransaksi = mysql_query("SELECT *
FROM
    `vmr`.`product`
    INNER JOIN `vmr`.`order_pelanggan` 
        ON (`product`.`product_id` = `order_pelanggan`.`product_id`)
                                                                                                           ORDER BY order_id  DESC");
   //                  $total=0;
                      while ($rowTransaksi  = mysql_fetch_array($queryTransaksi)) {
                        /*
                        $sub_total=+$rowTransaksi['product_price'] * $rowTransaksi['jumlah'];*/
                        //$total+=$sub_total;
                   ?>
                <tr class="">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $rowTransaksi['order_id']?></td>
                    <td><?php echo $rowTransaksi['order_date']?></td>
                    <td><?php echo $rowTransaksi['product_name']?></td>
                    <td>
                        <?php 
              /*              $queryQTY = mysql_query("SELECT SUM(orders_detail.jumlah) AS jumlahqty , product.product_id
                        FROM
                            `orders`
                            INNER JOIN `orders_detail` 
                                ON (`orders`.`id_orders` = `orders_detail`.`id_orders`)
                            INNER JOIN `product` 
                                ON (`product`.`product_id` = `orders_detail`.`product_id`) WHERE orders.id_orders='".$rowTransaksi['id_orders']."' ");
                            $QTY = mysql_fetch_array($queryQTY);

                            echo $QTY['jumlahqty'];*/
                         ?>
                    </td>
                    <td style="text-align: right;">
                        <?php
                       /* $queryTotal=mysql_query("SELECT *
                        FROM
                            `orders`
                            INNER JOIN `orders_detail` 
                                ON (`orders`.`id_orders` = `orders_detail`.`id_orders`)
                            INNER JOIN `product` 
                                ON (`product`.`product_id` = `orders_detail`.`product_id`) WHERE orders.id_orders='".$rowTransaksi['id_orders']."'");
                            $totalQuery=0;
                        while($rowQueryTotal=mysql_fetch_array($queryTotal)){

                            $subTotal =+$rowQueryTotal['jumlah'] * $rowQueryTotal['product_price'];
                            $totalQuery +=$subTotal; 
                        }
                        echo "Rp. ".number_format($totalQuery,0,',','.');
                        $total+=$totalQuery;*/
                        ?>
                    </td>
                    <td>
                        <a href="?hal=master/order/detail&id=<?php echo $rowTransaksi['order_id']; ?>">
                            <button class="btn btn-primary" type="submit"><i class="fa fa-eye"></i> Detail</button>
                        </a>
                
                    </td>
                </tr>
               <?php } ?>
<!--                 <tr>
                <td colspan="5">Total </td><td style="text-align: right;">Rp. <?php //echo number_format($total,0,',','.'); ?></td>
                </tr> -->   
                </tbody>
                </table>
                </div>
                </div>
                </section>
                </div>
                </div>
        </div>


