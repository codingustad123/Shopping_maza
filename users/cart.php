 
 <?php
 include 'conn.php';
 include 'header.php';
 
 ?>
 
 
 
 
 








  <!--
    - MAIN
  -->

  <main>

    <!--
      - BANNER
    -->


    <!--
      - CATEGORY
    -->

    <div class="category">

      

    </div>





    <!--
      - PRODUCT
    -->

    <div class="product-container">

      <div class="container">


        <!--
          - SIDEBAR
        -->

        <?php
        include 'sidebar.php';
    
    ?>


     
          <!--
            - PRODUCT GRID
          -->

        
          <div class="product-main">

            <h2 style="font-size: 30px; color: hsl(19.83, 95.28%, 49.8%);" class="title">Cart Items</h2>

            <div class="product-grid">
            <div class="container">

            <?php
             include 'conn.php';
             $Q="SELECT COUNT(id) AS counts FROM cart;";
             $e=mysqli_query($conn,$Q);
             $tt=mysqli_fetch_array($e);
            if($tt[0] > 0){

              ?>
  <table style="align-items: center; justify-content: center; text-align: center; width: 50%;"  class="table table-searchable table-striped table-bordered table-hover table-responsive">
        <thead style="font-size: medium;">
          <tr >
              <th  >#</th>
              <th  >Product Image</th>
              <th   >Product Name</th>
              <th  >Brand</th>
              <th  >Price</th>
              <th  >Qty</th>
              <th style=" border-right: 2px solid black;" >Total</th>
             
          
              <th>Delete</th>
              <th style="width: 15%; ">Checkout</th>
          </tr>
        </thead>
        <tbody  style="font-size: medium;">
          <?php
          $query="SELECT * FROM cart INNER JOIN add_product ON cart.product_id = add_product.id";
          $run=mysqli_query($conn,$query);
          $i = 1; 
          while($row=mysqli_fetch_array($run)){
          
          ?>
          <tr>
              <td><?php echo $i ;?></td>
              <td><img style="height: 80px; width: 100px;" src="../admin/system_files/product_img/<?php echo $row[12] ?>"></td>
              <td><?php echo $row[5] ;?></td>
              <td><?php echo $row[8] ;?></td>
              <td><?php echo $row[9] ;?></td>
              <td><?php echo $row[2] ;?></td>
              <?php $total =  $row[9] * $row[2] ?>
              <td style="border-right: 2px solid black;"><?php echo $total ;?></td>
            
             
            <td   data-searchable="false">
              <div class="btn-group btn-group-sm" role="group">
                <?php 
                
//                 if(isset($_POST['delete'])){

// $del_q="DELETE * FROM cart INNER JOIN add_product ON cart.product_id = add_product.id";
// $dr=mysqli_query($conn,$del_q);
// echo "<script>
// location.reload();
// </script>";
//                 }
                
                ?>
      
                
                 
                  
                  <a <?php echo " href= 'del_cart.php?id=$row[3] '   "?> > <button type="button" name="del_btn" >
     <img src="assets/images/icons/icons8-delete-200.png" style="width: 50px; height: 50px;">
        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
    </svg>
</button></a>
</div>




                </div>
            </td>
            <td> <a href="checkout.php"><button ><img style="height: 50px; width: 50px;" src="assets/images/icons/icons8-cart-100-removebg-preview.png" alt=""></button></a></td>
          </tr>
          <?php
          $i++;
      }
    ?>
        </tbody>
      </table>
      
    
  </div>
              <?php
            }
            elseif($tt[0] == 0){
              echo"<h1>Cart is Empty!</h1>";
            }
            ?>
    
  
</div>
          </div>

        </div>

      </div>

    </div>
 

    
      


<br><br><br><br><br>


    <!--
      - BLOG
    -->

    <div class="blog">

      <div class="container">

        <div class="blog-container has-scrollbar">

          <div class="blog-card">

            <a href="#">
              <img src="./assets/images/products/us1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
            </a>

            <div class="blog-content">

              <a href="#" class="blog-category">Mobiles</a>

              <a href="#">
                <h3 class="blog-title">Mobiles in Lowest Price 50% OFF</h3>
              </a>

              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2024-01-01">Jan 01, 2024</time>
              </p>

            </div>

          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/products/us2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Laptops</a>
          
              <h3>
                <a href="#" class="blog-title">Laptops Lenovo T410</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Robin</cite> / <time datetime="2024-01-01">Jan 01, 2024</time>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/products/us3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Smart Watch</a>
          
              <h3>
                <a href="#" class="blog-title">Digital Smart Watches (Black) in Smart Watch category</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2024-01-01">Jan 01, 2024</time>
              </p>
          
            </div>
          
          </div>

          <div class="blog-card">
          
            <a href="#">
              <img src="./assets/images/products/us4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle."
                class="blog-banner" width="300">
            </a>
          
            <div class="blog-content">
          
              <a href="#" class="blog-category">Jewellery</a>
          
              <h3>
                <a href="#" class="blog-title">New Designs Jewellery Unisex</a>
              </h3>
          
              <p class="blog-meta">
                By <cite>Mr Admin</cite> / <time datetime="2024-01-01">Jan 01, 2024</time>
              </p>
          
            </div>
          
          </div>

        </div>

      </div>

    </div>

  </main>





  <!--
    - FOOTER
  -->

   
 <?php
 
 include 'footer.php';
 
 ?>
 






  <!--
    - custom js link
  -->
  <script src="assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>