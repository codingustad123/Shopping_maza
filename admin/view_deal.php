
<?php
include 'system_files/conn.php' ;

?>








<?php
include 'system_files/header.php' ;

?>

<?php
include 'system_files/section.php'

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
      
<div class="container">
    <div class="card shadow my-5">
      <h4 class="card-header">View Deals</h4>
      <div class="card-body">
        <form class="mb-3">
          <label for="searchBox">Search</label>
          <input type="text" id="searchBox" name="searchBox" class="form-control">
          <small class="form-text feedback"></small>
        </form>
      <table style="align-items: center; justify-content: center; text-align: center;"  class="table table-searchable table-striped table-bordered table-hover table-responsive">
          <thead style="font-size: medium;">
            <tr >
          
            <th style="width: 15%; ">Product ID</th>
                <th style="width: 15%; ">Product Name</th>
                <th style="width: 15%; " >Price</th>
                <th style="width: 15%; ">Description</th>
                <th style="width: 15%; ">Stock</th>
                <th style="width: 20%; ">Product Image</th>
            
                <th>Actions</th>
            </tr>
          </thead>
          <tbody  style="font-size: medium;">
            <?php
            $query="SELECT * FROM `deal` ";
            $run=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($run)){
            
            ?>
            <tr>
             
                <td><?php echo $row[1] ;?></td>
                <td><?php echo $row[2] ;?></td>
                <td><?php echo $row[4] ;?></td>
                <td><?php echo $row[3] ;?></td>
                <td><?php echo $row[5] ;?></td>
                <td><img style="height: 80px; width: 100px;" src="system_files/product_img/<?php echo $row[6] ?>"></td>
               
              <td data-searchable="false">
                <div class="btn-group btn-group-sm" role="group">
             
                   
                    <a  href="#myModal"  data-toggle="modal"  > <button type="button" name="del_btn" class="btn btn-outline-dark"><i class="fas fa-trash"></i></button></a>
                    <div class="text-center">


</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
<div class="modal-dialog modal-confirm">
  <div class="modal-content">
    <div class="modal-header flex-column">
      <div class="icon-box">
        <i class="material-icons">&#xE5CD;</i>
      </div>						
      <h4 class="modal-title w-100">Are you sure?</h4>	
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
      <p>Are you sure want to delete this item? The Process never be undone </p>
    </div>
    <div class="modal-footer justify-content-center">
     <a href="view.php"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button></a>
      <a  <?php  echo"href=del_deal.php?p_id=$row[1] " ?> ><button type="button" class="btn btn-danger">Delete</button>
    </div>
  </div>
</div>
</div>     
                  </div>
              </td>
            </tr>
            <?php
        }
      ?>
          </tbody>
        </table><br><br><br><br><br><br><br>
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

