<?php
include 'system_files/conn.php' ;

?>
<?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$desc=$_POST['desc'];
$price=$_POST['price'];
$stock=$_POST['stock'];
$rand=$_POST['rand'];
$img_path=$_FILES['img_o']['name'];


if(isset($_FILES['img_o'])){

  $imgname=$_FILES['img_o']['name'];
  $tmpname=$_FILES['img_o']['tmp_name'];
  move_uploaded_file($tmpname,"system_files/product_img/".$imgname);

}
$query="INSERT INTO `deal`(`p_id`, `name`, `description`, `price`, `stock`, `img`) VALUES ('$rand','$name','$desc','$price','$stock','$img_path')";
$res=mysqli_query($conn,$query);
echo '<script>alert("Product Upload Successfully")</script>';
header('location:view_deal.php');
}



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
            <h1>Deal Of The Day</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Deal Of The Day</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->


              <form method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input  type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Product Name">
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input  type="text" class="form-control" id="exampleInputEmail1" name="desc" placeholder="Product Name">
                  </div>
               
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input  type="text" class="form-control" id="exampleInputEmail1" name="price" placeholder="Product Name">
                  </div>
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input  type="text" class="form-control" id="exampleInputEmail1" name="stock" placeholder="Product Name">
                  </div>

                  <div class="form-group">
             
             <input class="musg" name="img_o" type="file" id="upload-button" multiple accept="image/*" />
             <label id="lal" for="upload-button"
               ><i class="fa-solid fa-upload"></i>&nbsp; Choose Or Drop Photos
             </label>
             <div id="error"></div>
             <div id="image-display"></div>
           </div>
         </div>

       
  
     <input style="display: none;" type="text" class="form-control" id="exampleInputEmail1" name="rand" value="<?php echo 'p_id'.uniqid() ?>">



         <script >
           let uploadButton = document.getElementById("upload-button");
   let chosenImage = document.getElementById("chosen-image");
   let fileName = document.getElementById("file-name");
   let container = document.querySelector("conty");
   let error = document.getElementById("error");
   let imageDisplay = document.getElementById("image-display");
   
   const fileHandler = (file, name, type) => {
     if (type.split("/")[0] !== "image") {
       //File Type Error
       error.innerText = "Please upload an image file";
       return false;
     }
     error.innerText = "";
     let reader = new FileReader();
     reader.readAsDataURL(file);
     reader.onloadend = () => {
       //image and file name
       let imageContainer = document.createElement("figure");
       let img = document.createElement("img");
       img.src = reader.result;
       imageContainer.appendChild(img);
       imageContainer.innerHTML += `<h3 name="img_name1">${name}</h3>`;
       imageDisplay.appendChild(imageContainer);
     };
   };
   
   //Upload Button
   uploadButton.addEventListener("change", () => {
     imageDisplay.innerHTML = "";
     Array.from(uploadButton.files).forEach((file) => {
       fileHandler(file, file.name, file.type);
     });
   });
   
   container.addEventListener(
     "dragenter",
     (e) => {
       e.preventDefault();
       e.stopPropagation();
       container.classList.add("active");
     },
     false
   );
   
   container.addEventListener(
     "dragleave",
     (e) => {
       e.preventDefault();
       e.stopPropagation();
       container.classList.remove("active");
     },
     false
   );
   
   container.addEventListener(
     "dragover",
     (e) => {
       e.preventDefault();
       e.stopPropagation();
       container.classList.add("active");
     },
     false
   );
   
   container.addEventListener(
     "drop",
     (e) => {
       e.preventDefault();
       e.stopPropagation();
       container.classList.remove("active");
       let draggedData = e.dataTransfer;
       let files = draggedData.files;
       imageDisplay.innerHTML = "";
       Array.from(files).forEach((file) => {
         fileHandler(file, file.name, file.type);
       });
     },
     false
   );
   
   window.onload = () => {
     error.innerText = "";
   };
       </script>

   
  <br><br>
 <!-- /.card-body -->

 <div class="card-footer">
  <a href="#"> <button type="submit" name="submit" class="btn btn-primary">Submit</button></a>
 </div>
</form>
</div>


<?php
include 'system_files/footer.php';

?>

                 <br><br>
                <!-- /.card-body -->

                <div class="card-footer">
                 <a href="#"> <button type="submit" name="submit" class="btn btn-primary">Submit</button></a>
                </div>
              </form>
            </div>


<?php
include 'system_files/footer.php';

?>
