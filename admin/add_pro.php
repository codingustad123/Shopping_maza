<?php
include 'system_files/conn.php' ;

?>
<?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$cat=$_POST['p_cat'];
$brand=$_POST['brand'];
$price=$_POST['price'];
$list=$_POST['list_in'];
$stock=$_POST['stock'];
$des=$_POST['p_des'];
$rand=$_POST['rand'];

$img_path=$_FILES['img_o']['name'];


if(isset($_FILES['img_o'])){
  $dimension = 300;   
  $imgname=$_FILES['img_o']['name'];
  $tmpname=$_FILES['img_o']['tmp_name'];
  



        
  
                           
 
   

               

  move_uploaded_file($tmpname,"system_files/product_img/".$imgname);




}
$query="INSERT INTO `add_product`(`p_id`,`p_name`, `category`,`list_in`, `brand`, `price`, `stock`, `des`, `img`) VALUES ('$rand','$name','$cat','$list','$brand','$price','$stock','$des','$img_path')";
$res=mysqli_query($conn,$query);
echo '<script>alert("Product Upload Successfully")</script>';
header('location:view_pro.php');
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
            <h1>Add Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
                        <label>Category</label>
                        <select name="p_cat" class="form-control">
                        <option>Select Category</option>
                        <option>Mobiles & Tablets</option>
                          <option>Laptops</option>
                          <option>Cloths</option>
                          <option>Jewellery</option>
                       
                          <option>Fashion & Beauty</option>
                          <option>Dressing</option>
                          <option>Smart Watch</option>
                          <option>Smart TV</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Where you list your product?</label>
                        <select name="list_in" class="form-control">
                        <option>None</option>
                          <option>Flash Sale</option>
                          <option>For You </option>
                         
                        </select>
                      </div>


                      <div class="form-group">
                    <label for="exampleInputEmail1">Brand</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="brand" placeholder="Brand">
                  </div>

            
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="price" placeholder="Price $$">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="stock" placeholder="0">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="p_des" class="form-control" style="height: 200px;"  >  </textarea>

                      <div >    
                        <br>
                        <div class="form-group">
             
                            <input class="musg" name="img_o" type="file" id="upload-button" multiple accept="image/*" />
                            <label id="lal" for="upload-button"
                              ><i class="fa-solid fa-upload"></i>&nbsp; Choose Or Drop Photos
                            </label>
                            <div id="error"></div>
                            <div id="image-display"></div>
                          </div>
                        </div>

                      
                 
                    <input style="display: none;" type="text" class="form-control" id="exampleInputEmail1" name="rand" value="<?php echo 'p_id'.uniqid() .time() ?>">
            


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
