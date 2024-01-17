 
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
<center>
  <div class="banner">

    <div class="container">

      <div class="slider-container has-scrollbar">

        <div class="slider-item">

          <img src="./assets/images/slider1.jpg" alt="women's latest fashion sale" class="banner-img">

          <div class="banner-content">

            <p class="banner-subtitle">Trending item</p>

            <h2 style="color: ;" class="banner-title">50% OFF ON SMART PHONES</h2>

            <p class="banner-text">
              STARTING AT RS: <b>5000</b> ONLY
            </p>

            <a href="#" class="banner-btn">Shop now</a>

          </div>
        </div>
        <div class="slider-item">

          <img src="./assets/images/slider2.jpg" alt="modern sunglasses" class="banner-img">

          <div class="banner-content">

            <p class="banner-subtitle">Trending accessories</p>

            <h2  style="color: white;" class="banner-title">Modern sunglasses</h2>

            <p class="banner-text">
              STARTING AT RS: <b>150</b>.00
            </p>

            <a href="#" class="banner-btn">Shop now</a>

          </div>

        </div>
        <div class="slider-item">

          <img src="./assets/images/slider3.jpg" alt="new fashion summer sale" class="banner-img">

          <div class="banner-content">
            <p class="banner-subtitle">Sale Offer</p>

            <h2 class="banner-title">LAPTOPS</h2>

            <p style="color: white;" class="banner-text">
              STARTING AT RS: <b>10000</b>
            </p>

            <a href="#" class="banner-btn">Shop now</a>

          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </center>
    






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


        <div class="product-box">

        
        
          <!--
            - PRODUCT FEATURED
          -->
          <?php

$deal="SELECT * FROM `deal`";
$dealer=mysqli_query($conn,$deal);
$del_fetch=mysqli_fetch_array($dealer);

if($del_fetch == ""){

echo "";

}

else{?>
  
  <div class="product-featured">

            <h2 class="title">Deal of the day</h2>

            <div class="showcase-wrapper has-scrollbar">

              <div class="showcase-container">

                <div class="showcase">
                  
                  <div class="showcase-banner">
                     <img style="height: 200px; width: 100%;" src="../admin/system_files/product_img/<?php echo $del_fetch[6] ?>" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                  </div>

                  <div class="showcase-content">
                    
                    <div class="showcase-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                      <ion-icon name="star-outline"></ion-icon>
                    </div>

                    <a href="#">
                      <h3 class="showcase-title"><?php echo $del_fetch[2] ?></h3>
                    </a>

                    <p class="showcase-desc">
                    <?php echo $del_fetch[3] ?>
                    </p>

                    <div class="price-box">
                      <p class="price">RS: <?php echo $del_fetch[3] ?></p>

                     
                    </div>

                    <button class="add-cart-btn">add to cart</button>

                    <div class="showcase-status">
                      <div class="wrapper">
                      

                        <p>
                          Stock: <b><?php echo $del_fetch[4] ?></b>
                        </p>
                      </div>

                      <div class="showcase-status-bar"></div>
                    </div>

                    <div class="countdown-box">

                      <p class="countdown-desc">
                        Hurry Up! Offer ends in:
                      </p>

                      <div class="countdown">

                        <div class="countdown-content">

                          <p class="display-number">360</p>

                          <p class="display-text">Days</p>

                        </div>

                        <div class="countdown-content">
                          <p class="display-number">24</p>
                          <p class="display-text">Hours</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">59</p>
                          <p class="display-text">Min</p>
                        </div>

                        <div class="countdown-content">
                          <p class="display-number">00</p>
                          <p class="display-text">Sec</p>
                        </div>

                      </div>

                    </div>

                  </div>

                </div>

              </div>


            </div>

          </div>

<?php } ?>



        

          <!--
            - PRODUCT GRID
          -->

          <div class="product-main">

            <h2 class="title">Flash Sale</h2>

            <div class="product-grid">
            <?php

$query="SELECT * FROM `add_product` where `list_in`='Flash Sale' ";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($res)){


?>
              <div style="cursor: pointer;" class="showcase">

                <div class="showcase-banner">

              <a <?php echo "href=detail_page.php?p_id=$row[1]"?>> <img style="height: 200px; width: 100%;" src="../admin/system_files/product_img/<?php echo $row['9'] ?>" alt="Mens Winter Leathers Jackets"  ></a>    
               
           
                  <p class="showcase-badge">Sale</p>

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
      


<!-- -----------------------------------For you---------------------------------------------- -->
            
              
              
                </div>
                <br><br><br>
                <h2 class="title">For You</h2>

<div style="cursor: pointer;" class="product-grid">
<?php

$query="SELECT * FROM `add_product` where `list_in`='For You' ";
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
        <p class="price">$<?php echo $row['6'] ?>.00</p>
  
      </div>

    </div>

  </div>
  <?php } ?>
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>



    <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

    <div>

      <div class="container">

        <div class="testimonials-box">

          <!--
            - TESTIMONIALS
          -->

          <div class="testimonial">

            <h2 class="title">testimonial</h2>

            <div class="testimonial-card">

              <img src="assets/images/logo/logo.svg" alt="alan doe" class="testimonial-banner" width="120" height="120">

              <p class="testimonial-name">Our Mission</p>

         

              <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img" width="26">

              <p class="testimonial-desc">
            TO PROVIDE A WONDERFUL EXPERIENCE OF ONLINE SHOPPING AND GIVE A PLATFORM WHERE PEOPLE CAN INTERACT EACH OTHER
              </p>

            </div>

          </div>



          <!--
            - CTA
          -->

          <div class="cta-container">

            <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

            <a href="#" class="cta-content">

              <p class="discount">25% Discount</p>

              <h2 class="cta-title">Summer collection</h2>

              <p class="cta-text">Starting @ $10</p>

              <button class="cta-btn">Shop now</button>

            </a>

          </div>



          <!--
            - SERVICE
          -->

          <div class="service">

            <h2 class="title">Our Services</h2>

            <div class="service-container">

              <a href="#" class="service-item">

                <div class="service-icon">
                  <ion-icon name="boat-outline"></ion-icon>
                </div>

                <div class="service-content">

                  <h3 class="service-title">Worldwide Delivery</h3>
                  <p class="service-desc">For Order Over $100</p>

                </div>

              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Next Day delivery</h3>
                  <p class="service-desc">UK Orders Only</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="call-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Best Online Support</h3>
                  <p class="service-desc">Hours: 8AM - 11PM</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="arrow-undo-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">Return Policy</h3>
                  <p class="service-desc">Easy & Free Return</p>
              
                </div>
              
              </a>

              <a href="#" class="service-item">
              
                <div class="service-icon">
                  <ion-icon name="ticket-outline"></ion-icon>
                </div>
              
                <div class="service-content">
              
                  <h3 class="service-title">30% money back</h3>
                  <p class="service-desc">For Order Over $100</p>
              
                </div>
              
              </a>

            </div>

          </div>

        </div>

      </div>

    </div>





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