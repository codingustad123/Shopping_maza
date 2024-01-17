
<?php

include 'header.php';
include 'conn.php';
$url_id=$_GET['p_id'];
?>

<!-- <?php

if(isset($_POST['submit'])){

$qty=$_POST['ee'];
echo $qty;

}

?> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product detail page</title>

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/must.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;500;700&display=swap" rel="stylesheet">

</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header">
    <div class="container">

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

   

      


      <div class="overlay" data-overlay data-nav-toggler></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #PRODUCT
      -->
      <?php
            $query="SELECT * FROM `add_product`WHERE p_id = '$url_id' ";
            $run=mysqli_query($conn,$query);
            $row=mysqli_fetch_array($run);
            
            ?>
      <section class="section product" aria-label="product">
        <div class="container">

          <div class="product-slides">

            <div class="slider-banner" data-slider>
              <figure class="product-banner">
                 <img style="height: 600px; width: 100%;" src="../admin/system_files/product_img/<?php echo $row['9']  ?>" width="600" height="600" loading="lazy" alt="Nike Sneaker"
                  class="img-cover">
              </figure>

            </div>

            <button style="display: none;" class="slide-btn prev" aria-label="Previous image" data-prev>
              <ion-icon name="chevron-back" aria-hidden="true"></ion-icon>
            </button>

            <button  style="display: none;"  class="slide-btn next" aria-label="Next image" data-next>
              <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
            </button>

          </div>

          <div class="product-content">

            <p class="product-subtitle">Shopping Maza</p>

            <h1 class="h1 product-title"><?php echo $row['2']  ?></h1>

            <p class="product-text">
            <?php echo $row['8']  ?>
            </p>

            <div class="wrapper">

              <span class="price" data-total-price>$<?php echo $row['6']  ?></span>


              <span class="badge">50%</span>

              <del class="del">$<?php echo $row['6']+300  ?></del>

            </div>

            <div class="btn-group">

              <div class="counter-wrapper">

                <button class="counter-btn" data-qty-minus>
                  <ion-icon name="remove-outline"></ion-icon>
                </button>
               
                <span class="span" data-qty>1</span>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        // Add an event listener to the "Add to Cart" button
        $(".cart-btn").click(function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Get the quantity value
            var qty = $(".span").text();

            // Make an AJAX request to send the quantity to the server
            $.ajax({
                type: "POST",
                url: "addtocart.php", // Change this to the actual PHP file that will process the data
                data: { qty: qty, p_id: "<?php echo $row[0]?>" },
                success: function(response) {
                    console.log(response); // Log the response from the server (if needed)
                    window.location.reload();
                },
                error: function(error) {
                    console.error(error); // Log any errors (if needed)
                }
            });

          });
    });
</script>


                <button class="counter-btn" data-qty-plus>
                  <ion-icon name="add-outline"></ion-icon>
                </button>

              </div>
              <form method="post">

              <button name="submit" class="cart-btn">
    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
    <span>Add to cart</span>
</button>
              </form>
           
            </div>

          </div>

        </div>
      </section>

    </article>
  </main>
 





  <!-- 
    - custom js link
  -->
 <script >
    'use strict';



/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelectorAll("[data-nav-toggler]");
const overlay = document.querySelector("[data-overlay]");

const toggleNav = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
}

addEventOnElem(navToggler, "click", toggleNav);



/**
 * slider funtionality
 */

const slider = document.querySelector("[data-slider]");
const nextBtn = document.querySelector("[data-next]");
const prevBtn = document.querySelector("[data-prev]");

// set the slider default position
let sliderPos = 0;

// set the number of total slider items
const totalSliderItems = 4;

// make next slide btn workable
const slideToNext = function () {

  sliderPos++;
  slider.style.transform = `translateX(-${sliderPos}00%)`;

  sliderEnd();

}

addEventOnElem(nextBtn, "click", slideToNext);

// make prev slide btn workable
const slideToPrev = function () {

  sliderPos--;
  slider.style.transform = `translateX(-${sliderPos}00%)`;

  sliderEnd();

}

addEventOnElem(prevBtn, "click", slideToPrev);



// check when slider is end then what should slider btn do
function sliderEnd() {
  if (sliderPos >= totalSliderItems - 1) {
    nextBtn.classList.add("disabled");
  } else {
    nextBtn.classList.remove("disabled");
  }

  if (sliderPos <= 0) {
    prevBtn.classList.add("disabled");
  } else {
    prevBtn.classList.remove("disabled");
  }
}

sliderEnd();



/**
 * product quantity functionality
 */

const totalPriceElem = document.querySelector("[data-total-price]");
const qtyElem = document.querySelector("[data-qty]");
const qtyMinusBtn = document.querySelector("[data-qty-minus]");
const qtyPlusBtn = document.querySelector("[data-qty-plus]");

// set the product default quantity
let qty = 1;

// set the product default price
let productPrice = <?php echo $row['6']  ?>;

// set the initial total price
let totalPrice = <?php echo $row['6']  ?>;

const increaseProductQty = function () {
  qty++;
  totalPrice = qty * productPrice;

  qtyElem.textContent = qty;
  totalPriceElem.textContent = `$${totalPrice}`;
}


addEventOnElem(qtyPlusBtn, "click", increaseProductQty);

const decreaseProductQty = function () {
  if (qty > 1) qty--;
  totalPrice = qty * productPrice;

  qtyElem.textContent = qty;
  totalPriceElem.textContent = `$${totalPrice}`;
}

addEventOnElem(qtyMinusBtn, "click", decreaseProductQty);
 </script>

  <!-- 
    - ionicon link
  -->
  <?php
  include 'footer.php';
?>
</body>

</html>