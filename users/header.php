
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Maza</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="assets/images/logo/favicon.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="assets/css/style-prefix.css">
  <link rel="stylesheet" href="assets/css/must.css">
  <link rel="stylesheet" href="assets/css/modal.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body>


  <div class="overlay" data-overlay></div>

  <!--
    - MODAL
  -->

  <div style="display: none;" class="modal" data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Subscribe Newsletter.</h3>

            <p class="newsletter-desc">
              Subscribe the <b>Shopping Maza</b> to get latest products and discount update.
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>

          <button type="submit" class="btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div>





  <!--
    - NOTIFICATION TOAST
  -->

  <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Someone in new just bought
      </p>

      <p class="toast-title">
        Rose Gold Earrings
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div>





  <!--
    - HEADER
  -->

  <header>

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p>
            <b>Free Shipping</b>
            This Week Order Over - $55
          </p>
        </div>

        <div class="header-top-actions">

          <select name="currency">

            <option value="usd">USD &dollar;</option>
            <option value="eur">EUR &euro;</option>

          </select>

          <select name="language">

            <option value="en-US">English</option>
            <option value="es-ES">Espa&ntilde;ol</option>
            <option value="fr">Fran&ccedil;ais</option>

          </select>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="#" class="header-logo">
          <img src="./assets/images/logo/logo.svg" alt="Anon's logo" width="150" height="100">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">


          <?php
          include 'conn.php';
          $query="SELECT COUNT(id) AS counts FROM cart;";
          $run=mysqli_query($conn,$query);
          $row=mysqli_fetch_array($run);

          ?>

         <a style="z-index: 2;" href="cart.php">
          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count"><?php echo $row[0]?></span>
          </button>
          </a>
        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

        <li class="menu-category">
          <a href="index.php" class="menu-title">Home</a>
        </li>
  
        <li class="menu-category">
          <a href="#" class="menu-title">Categories</a>
  
          <div class="dropdown-panel">
  
            <ul class="dropdown-panel-list">
  
              <li class="menu-title">
                <a href="#">Tech</a>
              </li>
  
              <li class="panel-list-item">
                <a href="mobiles.php">Phones</a>
              </li>
  
              <li class="panel-list-item">
                <a href="laptops.php">Laptop</a>
              </li>
  
           
            </ul>
  
            <ul class="dropdown-panel-list">
  
              <li class="menu-title">
                <a href="#">Men's</a>
              </li>
  
            
              <li class="panel-list-item">
                <a href="men_cloths.php">Cloths</a>
              </li>
  
              <li class="panel-list-item">
                <a href="Jewelry.php">Jewellery</a>
              </li>
  
            
            </ul>
  
            <ul class="dropdown-panel-list">
  
              <li class="menu-title">
                <a href="#">Women's</a>
              </li>
  
              <li class="panel-list-item">
                <a href="fashion&beauty.php">Fashion & Beauty</a>
              </li>
  
              <li class="panel-list-item">
                <a href="Dressing.php">Dressing</a>
              </li>
  
  
            </ul>
  
            <ul class="dropdown-panel-list">
  
              <li class="menu-title">
                <a href="#">Entertainment</a>
              </li>
  
              <li class="panel-list-item">
                <a href="Smartwatch.php">Smart Watch</a>
              </li>
  
              <li class="panel-list-item">
                <a href="tv.php">Smart TV</a>
              </li>
  
            </ul>
  
          </div>
        </li>
  
        <li class="menu-category">
          <a href="about_us.php" class="menu-title">About Us</a>
  
      
        </li>
  
        <li class="menu-category">
          <a href="contact_us.php" class="menu-title">Contact Us</a>
  
  
       
        </li>
  
        <li class="menu-category">
          <a href="faq.php" class="menu-title">Faq</a>
  
     
        </li>
        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>
      <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
      </button>
      <?php
          include 'conn.php';
          $query="SELECT COUNT(id) AS counts FROM cart;";
          $run=mysqli_query($conn,$query);
          $row=mysqli_fetch_array($run);

          ?>

         <a href="cart.php"> <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count"><?php echo $row[0]?></span>
          </button>
          </a>

   

 

    

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="index.php" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Tech</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="mobiles.php" class="submenu-title">Phones</a>
            </li>

            <li class="submenu-category">
              <a href="laptops.php" class="submenu-title">Laptops</a>
            </li>


          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Men's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="men_cloths.php" class="submenu-title">Cloths</a>
            </li>

            <li class="submenu-category">
              <a href="jewelry.php" class="submenu-title">Jewellery</a>
            </li>

         

          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Women's</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="fashion&beauty.php" class="submenu-title">Fashion & Beauty</a>
            </li>

            <li class="submenu-category">
              <a href="Dressing.php" class="submenu-title">Dressing</a>
            </li>

        

          </ul>

        </li>


        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <p class="menu-title">Entertainment</p>

            <div>
              <ion-icon name="add-outline" class="add-icon"></ion-icon>
              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
            </div>
          </button>

          <ul class="submenu-category-list" data-accordion>

            <li class="submenu-category">
              <a href="Smartwatch.php" class="submenu-title">Smart Watch</a>
            </li>

            <li class="submenu-category">
              <a href="tv.php" class="submenu-title">Smart TV</a>
            </li>

           

          </ul>

        </li>



   






        <li class="menu-category">
          <a href="about_us.php" class="menu-title">About Us</a>
        </li>
        <li class="menu-category">
          <a href="contact_us.php" class="menu-title">Contact Us</a>
        </li>

        <li class="menu-category">
          <a href="faq.php" class="menu-title">FAQ</a>
        </li>

      </ul>

      <div class="menu-bottom">

        <ul class="menu-category-list">

        

       
        </ul>

        <ul class="menu-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

      </div>
    </nav>

  </header>




</body>

