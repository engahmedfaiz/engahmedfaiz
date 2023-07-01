<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | تعديل منتج</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
  $con = mysqli_connect("localhost","root","" ,"m3");
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * from com where id =$ID");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>تعديل الكمبيوترات</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
                <br>
                <input type="text" name='name' value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name='price' value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> تحديث صورة المنتج</label>
                <button name='update' type='submit'>تعديل المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer by ahmed faiz</p>
    </center>
    <?php
  $con = mysqli_connect("localhost","root","" ,"m3");
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * from iphon where id =$ID");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>تعديل التلفونات</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
                <br>
                <input type="text" name='name' value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name='price' value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> تحديث صورة المنتج</label>
                <button name='update1' type='submit'>تعديل المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer by ahmed faiz</p>
    </center>
 
    <?php
  $con = mysqli_connect("localhost","root","" ,"m3");
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * from prod where id =$ID");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>تعديل السيارات</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
                <br>
                <input type="text" name='name' value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name='price' value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> تحديث صورة المنتج</label>
                <button name='update2' type='submit'>تعديل المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer by ahmed faiz</p>
    </center>
    </center>
    <?php
  $con = mysqli_connect("localhost","root","" ,"m3");
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * from ml where id =$ID");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>تعديل الملابس</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
                <br>
                <input type="text" name='name' value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name='price' value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> تحديث صورة المنتج</label>
                <button name='update3' type='submit'>تعديل المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer by ahmed faiz</p>
    </center>
    </center>
    <?php
  $con = mysqli_connect("localhost","root","" ,"m3");
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * from coloc where id =$ID");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>تعديل الساعات</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
                <br>
                <input type="text" name='name' value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name='price' value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> تحديث صورة المنتج</label>
                <button name='update4' type='submit'>تعديل المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer by ahmed faiz</p>
    </center>
    </center>
    <?php
  $con = mysqli_connect("localhost","root","" ,"m3");
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * from fth where id =$ID");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>تعديل الفضه</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
                <br>
                <input type="text" name='name' value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name='price' value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> تحديث صورة المنتج</label>
                <button name='update5' type='submit'>تعديل المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer by ahmed faiz</p>
    </center>
    </center>
    <?php
  $con = mysqli_connect("localhost","root","" ,"m3");
    $ID=$_GET['id'];
    $up = mysqli_query($con, "select * from goold where id =$ID");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>تعديل  الذهب</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
                <br>
                <input type="text" name='name' value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name='price' value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> تحديث صورة المنتج</label>
                <button name='update6' type='submit'>تعديل المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer by ahmed faiz</p>
    </center>
</body>
</html>