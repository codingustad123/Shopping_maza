<?php
include 'system_files/conn.php' ;

?>
<?php
include 'system_files/header.php' ;

?>

<?php
include 'system_files/section.php' ;

?>
<?php

$query="SELECT COUNT(order_id) AS row_count FROM order_items WHERE is_shipped=0";

$result=mysqli_query($conn,$query);

?>
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php 
                
                if ($result) {
                    // Fetch the result as an associative array
                    $row = $result->fetch_assoc();
                
                    // Output the count using echo
                    echo $row['row_count'];
                } 
                else {
                    // Output an error message if the query fails
                    echo " 0 " . $conn->error;
                }
                
                
                ?></h3>
                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="view_order.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        
          <?php
          
          $t_s="SELECT SUM(total_price) AS row_sum FROM order_items WHERE is_shipped=1";
          
          $res=mysqli_query($conn,$t_s);
          
          
          ?>
          <div class="col-lg-5 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                
                <h3>
                    <?php
                    
                    
                    if ($result) {
                        // Fetch the result as an associative array
                        $row1 = $res->fetch_assoc();
                    
                        // Output the count using echo
                        echo $row1['row_sum'];
                    } 
                    else {
                        // Output an error message if the query fails
                        echo " 0 " . $conn->error;
                    }
                    
                    ?>
                </h3>

                <p>Total Sales</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="view_order.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->













  
         


<?php
include 'system_files/footer.php' ;

?>


