<?php

$con = mysqli_connect("localhost","root","" ,"m3");

if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $NAME  = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'.$image_name);
    $image_up = "images/".$image_name;
    $update = "UPDATE com SET name='$NAME' , price='$PRICE', image='$image_up' WHERE id=$ID";
    mysqli_query($con, $update);

    header('location: php.php');
}
?>
<?php

$con = mysqli_connect("localhost","root","" ,"m3");

if(isset($_POST['update1'])){
    $ID = $_POST['id'];
    $NAME  = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'.$image_name);
    $image_up = "images/".$image_name;
    $update = "UPDATE iphon SET name='$NAME' , price='$PRICE', image='$image_up' WHERE id=$ID";
    mysqli_query($con, $update);

    header('location: php.php');
}
?>
<?php

$con = mysqli_connect("localhost","root","" ,"m3");

if(isset($_POST['update2'])){
    $ID = $_POST['id'];
    $NAME  = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'.$image_name);
    $image_up = "images/".$image_name;
    $update = "UPDATE prod SET name='$NAME' , price='$PRICE', image='$image_up' WHERE id=$ID";
    mysqli_query($con, $update);

    header('location:php.php');
}
?>
<?php

$con = mysqli_connect("localhost","root","" ,"m3");

if(isset($_POST['update3'])){
    $ID = $_POST['id'];
    $NAME  = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'.$image_name);
    $image_up = "images/".$image_name;
    $update = "UPDATE ml SET name='$NAME' , price='$PRICE', image='$image_up' WHERE id=$ID";
    mysqli_query($con, $update);

    header('location: php.php');
}
?>
<?php

$con = mysqli_connect("localhost","root","" ,"m3");

if(isset($_POST['update4'])){
    $ID = $_POST['id'];
    $NAME  = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'.$image_name);
    $image_up = "images/".$image_name;
    $update = "UPDATE  coloc SET name='$NAME' , price='$PRICE', image='$image_up' WHERE id=$ID";
    mysqli_query($con, $update);

    header('location: php.php');

}
?>
<?php

$con = mysqli_connect("localhost","root","" ,"m3");

if(isset($_POST['update5'])){
    $ID = $_POST['id'];
    $NAME  = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'.$image_name);
    $image_up = "images/".$image_name;
    $update = "UPDATE    fth  SET name='$NAME' , price='$PRICE', image='$image_up' WHERE id=$ID";
    mysqli_query($con, $update);

    header('location: php.php');
}

?>
<?php

$con = mysqli_connect("localhost","root","" ,"m3");

if(isset($_POST['update6'])){
    $ID = $_POST['id'];
    $NAME  = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'.$image_name);
    $image_up = "images/".$image_name;
    $update = "UPDATE goold SET name='$NAME' , price='$PRICE', image='$image_up' WHERE id=$ID";
    mysqli_query($con, $update);

    header('location: php.php');
}
?>