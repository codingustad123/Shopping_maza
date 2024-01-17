 
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

            <h2 style="font-size: 30px; color:hsl(19.83, 95.28%, 49.8%);" class=title>Checkout</h2>

            <div class="product-grid">
            <div class="container">
    
    <table  style="align-items: center; justify-content: center; text-align: center; width: 700px;" class="table table-searchable table-striped table-bordered table-hover table-responsive">
        <thead style="font-size: medium;">
          <tr >
              <th style="width: 15%; ">#</th>
              <th style="width: 20%; ">Product Image</th>
              <th style="width: 15%; " >Product Name</th>
              <th style="width: 15%; ">Brand</th>
              <th style="width: 15%; ">Price</th>
              <th style="width: 15%; ">Qty</th>
              <th style="width: 15%; ">Total</th>
          
             
          </tr>
        </thead>
        <tbody  style="font-size: medium;">
          <?php
          $query="SELECT * FROM cart INNER JOIN add_product ON cart.product_id = add_product.id";
          $run=mysqli_query($conn,$query);
          $i = 1; 
          $s_cost = 200;
          $t_p = 0;
          while($row=mysqli_fetch_array($run)){
          
          ?>
          <tr>
              <td style=" border-bottom: 4px solid hsl(19.83, 95.28%, 49.8%);"><?php echo $i ;?></td>
              <td style=" border-bottom: 4px solid hsl(19.83, 95.28%, 49.8%);"><img style="height: 80px; width: 100px;" src="../admin/system_files/product_img/<?php echo $row[12] ?>"></td>
              <td style=" border-bottom: 4px solid hsl(19.83, 95.28%, 49.8%);"><?php echo $row[5] ;?></td>
              <td style=" border-bottom: 4px solid hsl(19.83, 95.28%, 49.8%);"><?php echo $row[8] ;?></td>
              <td style=" border-bottom: 4px solid hsl(19.83, 95.28%, 49.8%);"><?php echo $row[9] ;?></td>
              <td style=" border-bottom: 4px solid hsl(19.83, 95.28%, 49.8%);" ><?php echo $row[2] ;?></td>
              <?php $total =  $row[9] * $row[2] ?>
              <td style=" border-bottom: 4px solid hsl(19.83, 95.28%, 49.8%);" ><?php echo $total ;?></td>
              
              
            </tr>
            <?php
          $i++;
          $t_p = $t_p + $total;
          
        }

        ?>
         <tr >
              <th colspan="5" ></th>
              <th >Shipping Cost</th>
              <th><?php echo $s_cost ;?></th>
          </tr>  
         <tr >
              <th  colspan="6"style=" font-size:20px;  background-color: black; color: white; " >Total </th>
              
              
              <th style="background-color: black; color: white;  font-size:20px;"><?php $s_t_p = $t_p + $s_cost; echo $s_t_p ;?></th>
          </tr>  


        </tbody>
      </table>

  </div>

 <form action="" method="post">
               

            </div>
            <div class="form-group">
                        <label>Shipping Method</label>
                        <select name="sho" class="form-control"required>
                        <option>COD</option>
                        <option>Pickup</option>
                    
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label>Name</label>
                      
                    <input name="name" class="form-control" type="text"required>
                        
                      </div>


                      <div class="form-group">
                        <label>Phone no</label>
                      
                    <input name="phone" class="form-control" type="number"required>
                        
                      </div>


                      <div class="form-group">
                        <label>Email</label>
                      
                    <input name="email" class="form-control" type="email"required>
                        
                      </div>


                      <div class="form-group">
                        <label>Address</label>
                      
                        <input height="200px" name="address" class="form-control" type="te"required>
                        
                        
                      </div>


                      <div class="form-group">
                        <label>Extra information</label>
                      
                    <textarea name="extra_information" class="form-control" name="" id="" cols="10" rows="3"required>

                    </textarea>
                        
                      </div>
                      
                      <br><br>
      <a href=""> <button name="order"  class="btn btn-primary">Place order</button></a>  
      
      


          </div>
          </form>
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






<?php
if (isset($_POST['order'])) {
    // Check if the Place order button is clicked

    // Retrieve user and order information from the form
    $shippingMethod = $_POST['sho'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $extraInformation = $_POST['extra_information'];

    // Insert order details into the orders table
    $insertQuery = "INSERT INTO orders (shipping_method, name, phone, email, address, extra_information)
                    VALUES ('$shippingMethod', '$name', '$phone', '$email', '$address', '$extraInformation')";
    
    $insertResult = mysqli_query($conn, $insertQuery);

    if (!$insertResult) {
        die("Insert query failed: " . mysqli_error($conn));
    }

    // Assuming you have an order_id field in your orders table
    $order_id = mysqli_insert_id($conn);

    // Insert order items into another table (order_items)
    $selectQuery = "SELECT * FROM cart INNER JOIN add_product ON cart.product_id = add_product.id";
    $selectResult = mysqli_query($conn, $selectQuery);

    while ($row = mysqli_fetch_array($selectResult)) {
        $product_id = $row['product_id'];
        $quantity = $row['quantity'];
        $total_price = $row['price'] * $quantity;

        // Insert order item details into order_items table
        $insertItemQuery = "INSERT INTO order_items (order_id, product_id, quantity, total_price)
                            VALUES ('$order_id', '$product_id', '$quantity', '$total_price')";

        $insertItemResult = mysqli_query($conn, $insertItemQuery);

        if (!$insertItemResult) {
            die("Insert item query failed: " . mysqli_error($conn));
        }
    }

    // Clear the cart (assuming you have a cart table)
    $clearCartQuery = "DELETE FROM cart";
    $clearCartResult = mysqli_query($conn, $clearCartQuery);
if($clearCartResult){
  
}
    if (!$clearCartResult) {
        die("Clear cart query failed: " . mysqli_error($conn));
    }

    // Display a success message or redirect to a confirmation page
 echo'<script>alert("Order placed successfully");</script>';
    echo '<script>window.location.href="cart.php"</script>;'; 


    // You can also redirect the user to a confirmation page after a successful order
    // header("Location: confirmation.php");
}
// Close the database connection
mysqli_close($conn);
?>