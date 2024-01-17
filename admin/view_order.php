
<?php
include 'system_files/conn.php' ;

?>








<?php
include 'system_files/header.php' ;

?>

<?php
include 'system_files/section.php'

?>

<?php

if(isset($_POST['ship_btn'])){

  $shipo="SELECT * FROM orders";
          $race=mysqli_query($conn,$shipo);
     
          $ro=mysqli_fetch_array($race);
          $p_name=$ro[1];
          $qty=$ro[2];
          $total=$ro[3];
          $p_m=$ro[4];
          $image=$ro[5];

          $gaga="INSERT INTO `ship_orders`(`p_name`, `p_qty`, `total`, `payment_method`, `p_image`) VALUES (' $p_name','$qty',' $total','$p_m',' $image')";
          $aha=mysqli_query($conn,$gaga);

}

?>

<script>
      function getFileName()
    {
        var x = document.getElementById('entry_value')
        document.getElementById('fileName').innerHTML = x.value.split('\\').pop()
    }
</script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
         
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->


<style>

@import 'https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/yeti/bootstrap.min.css';
@import 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css';

form label {
  cursor: pointer;
}

.table-searchable .is-hidden {
  display: none;
}

.table-searchable .is-match {
  background-color: lawngreen;
  transition: background-color .5s ease-in;
}

.table-searchable td[data-searchable="false"] {
  background-color: lightcoral;
}
    
</style>

</head>




 
<body>          
<!-- ---------------------------------form php code----------------------------------- -->
<?php




?>
        

<div class="page-wrapper">
            <div class="content container-fluid">


           
      <br>
      
      <?php

// Handle marking items as shipped
if (isset($_POST['mark_shipped'])) {
  $item_id = $_POST['mark_shipped'];

    $updateQuery = "UPDATE order_items SET is_shipped = 1 WHERE item_id = $item_id";
    $updateResult = mysqli_query($conn, $updateQuery);

    if (!$updateResult) {
        die("Update query failed: " . mysqli_error($conn));
    }
}

// Fetch orders with items
$query = "SELECT orders.*, order_items.*, add_product.p_name
          FROM orders
          JOIN order_items ON orders.order_id = order_items.order_id
          JOIN add_product ON order_items.product_id = add_product.id
          ORDER BY orders.order_id ASC";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!-- HTML Table to Display Orders and Items -->
<form method="post">
    <table border="1"class="table table-hover">
        <thead>
            <tr style="background-color: hsl(19.83, 95.28%, 49.8%);">
            <th>Order ID</th>
            <th>Shipping Method</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Extra Information</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Order Date</th>
            <th>Is Shipped</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
            echo "<td>{$row['order_id']}</td>";
            echo "<td>{$row['shipping_method']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['phone']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['address']}</td>";
            echo "<td>{$row['extra_information']}</td>";
            echo "<td>{$row['p_name']}</td>";
            echo "<td>{$row['quantity']}</td>";
            echo "<td>{$row['total_price']}</td>";
            echo "<td>{$row['order_date']}</td>";
            echo "<td>{$row['is_shipped']}</td>";
            echo "<td>";
                // Display a button to mark item as shipped
                if (!$row['is_shipped']) {
                    echo "<button type='submit' name='mark_shipped' value='{$row['item_id']}'>Mark Shipped</button>
                    ";
                } else {
                    echo "Shipped";
                }
                echo "</td>";
                echo "</tr>";
            }
            ?>
  </tbody>
</table>
</form>

<?php
// Close the database connection
mysqli_close($conn);
?>

  </div><br><br><br><br><br><br><br>
<?php
include 'system_files/footer.php'
?>
 
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tableData tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div></div>

<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>
<script>
    const [form] = document.forms;
const feedback = document.querySelector('.feedback');
const table = document.querySelector('table');
const tbodyRows = [...table.tBodies[0].rows];

const getCellValue = cell => {
  return cell.innerText || cell.textContent;
}

form.searchBox.addEventListener('input', e => {
  const term = e.target.value.toLowerCase();
  const hasValue = !!e.target.value.length;
  let resultCount = 0;
  
  tbodyRows.forEach(row => {
    const cells = row.querySelectorAll('td:not([data-searchable="false"])');
    let isFound = false;
    
    cells.forEach(cell => {
      const value = getCellValue(cell).toLowerCase();
      const isMatch = value.includes(term);
      
      if (isMatch) {
        isFound = true;
      }
      
      cell.classList.toggle('is-match', hasValue && isMatch);
    });
    
    row.classList.toggle('is-hidden', !isFound);
    resultCount += isFound ? 1 : 0;
  });
  
  feedback.textContent = hasValue
    ? resultCount === 1
      ? 'Showing 1 result'
      : `Showing ${resultCount} results`
    : null;
});
  </script>

