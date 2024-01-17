<?php
include 'system_files/conn.php' ;

$url_id=$_GET['p_id'];
if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $cat=$_POST['p_cat'];
    $brand=$_POST['brand'];
    $price=$_POST['price'];
    $stock=$_POST['stock'];
    $des=$_POST['p_des'];
    $rand=$_POST['rand'];
    $img_path=$_FILES['img_o']['name'];
    $qq="SELECT * FROM `add_product` WHERE `p_id`='$url_id'";
$ww=mysqli_query($conn,$qq);
      $tt=mysqli_fetch_array($ww);
  $gugu=$tt['img'];
    if($img_path=="")
{
$qq="UPDATE `add_product` SET`img`='$gugu' WHERE `p_id`='$url_id'";
$es=mysqli_query($conn,$qq);
}
else{
  $qqe="UPDATE `add_product` SET`img`='$img_path' WHERE `p_id`='$url_id'";
  $wes=mysqli_query($conn,$qqe);
}
    
    if(isset($_FILES['img_o'])){
    
      $imgname=$_FILES['img_o']['name'];
      $tmpname=$_FILES['img_o']['tmp_name'];
      move_uploaded_file($tmpname,"system_files/product_img/".$imgname);
    
    }
    $query="UPDATE `add_product` SET`p_name`='$name',`category`='$cat',`brand`='$brand',`price`='$price',`stock`='$stock',`des`='$des' WHERE `p_id`='$url_id'";
    
    $res=mysqli_query($conn,$query);
    echo '<script>alert("𝕐𝕠𝕦𝕣 ℙ𝕣𝕠𝕕𝕦𝕔𝕥 𝕌𝕡𝕕𝕒𝕥𝕖𝕕 𝕊𝕦𝕔𝕔𝕖𝕤𝕤𝕗𝕦𝕝𝕝𝕪")</script>'; 
   echo '<script> window.location.href="view_pro.php"</script>';

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
            <h1>Edit Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
<?php
$show="SELECT * FROM `add_product` WHERE `p_id`='$url_id'";
$showv=mysqli_query($conn,$show);
      $v_edit=mysqli_fetch_array($showv);
  
      
      ?>
              <form method="post" enctype="multipart/form-data"> 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input  type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $v_edit['2'];    ?>">
                  </div>

                  <div class="form-group">
                        <label>Category</label>
                        <select   name="p_cat" class="form-control">
                        <option><?php echo $v_edit['3'];    ?></option>
                          <option>Mobiles & Tablets</option>
                          <option>Fashion and beauty</option>
                          <option>Home Appliances</option>
                          <option>Media,Music & Books</option>
                          <option>Groceries</option>
                        </select>
                      </div>


                      <div class="form-group">
                    <label for="exampleInputEmail1">Brand</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="brand" value="<?php echo $v_edit['4'];    ?>">
                  </div>

            
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="price" value="<?php echo $v_edit['5'];    ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" name="stock" value="<?php echo $v_edit['6'];    ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea  name="p_des" class="form-control" style="height: 200px;"  ><?php echo $v_edit['7'];    ?>  </textarea>

                      <div >    
                        <br>
                        <div class="form-group">
             
                            <input class="musg" name="img_o" type="file" id="upload-button" multiple accept="image/*" />
                            <label id="lal" for="upload-button"
                              ><i class="fa-solid fa-upload"></i>&nbsp; Choose Or Drop Photos
                            </label>
                            <div id="error"></div>
                            <div id="image-display"><img  style="height: 30%; width: 30%;"  src="system_files/product_img/<?php echo $v_edit['8'];    ?>  "></div>
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
                 <a href="#"> <button type="submit" name="submit" class="btn btn-primary">Update</button></a>
                </div>
              </form>
            </div>


<?php
include 'system_files/footer.php';

?>
