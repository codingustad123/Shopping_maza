 
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

            <h2 style="font-size: 30px;" class="title">Dressing</h2>

            <div class="product-grid">
            <?php

$query="SELECT * FROM `add_product` where `category`='Dressing' ";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res)){


?>
              <div class="showcase">

                <div class="showcase-banner">
  <a <?php echo "href=detail_page.php?p_id=$row[1]"?>> <img style="height: 200px; width: 100%;" src="../admin/system_files/product_img/<?php echo $row['9'] ?>" alt="Mens Winter Leathers Jackets" width="100%" height="170px" ></a>    

                  

                  <div class="showcase-actions">

         

                  </div>

                </div>

                <div class="showcase-content">

                  <a href="#" class="showcase-category"><?php echo $row[2] ?></a>

                 

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <p class="price">RS. <?php echo $row['6'] ?>.00</p>
              
                  </div>

                </div>

              </div>
              <?php } ?>
            
              
              
               

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