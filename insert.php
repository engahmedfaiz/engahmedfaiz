 <?php

include "main.html";
$con = mysqli_connect("localhost","root","" ,"m3");
if(isset($_POST['upload'])){

$NAME=$_POST['name'];
$PRICE=$_POST['price'];
$IMAGE=$_FILES['imge'];
$image_location = $_FILES['imge']['tmp_name'];
$image_name =$_FILES['imge']['name'];
$image_up ="images/".$image_name;
$insert="INSERT INTO  prod(name, price	,image	)
VALUES('$NAME','$PRICE','$image_up')";

   mysqli_query( $con , $insert);
if(move_uploaded_file($image_location,'images/'.$image_name)){

echo "<script>alert(' لم يتم الرفع ') </script>";

}else{  echo "<script>alert('تم  رفع بنجاح') </script>  ";
}

mysqli_close($con);


}


 ?>
             <?php

include "main.html";
$con = mysqli_connect("localhost","root","" ,"m3");
if(isset($_POST['ml'])){

$NAME=$_POST['name'];
$PRICE=$_POST['price'];
$IMAGE=$_FILES['imge'];
$image_location = $_FILES['imge']['tmp_name'];
$image_name =$_FILES['imge']['name'];
$image_up ="images/".$image_name;
$insert="INSERT INTO  ml(name, price	,image	)
VALUES('$NAME','$PRICE','$image_up')";

   mysqli_query( $con , $insert);
if(move_uploaded_file($image_location,'images/'.$image_name)){

echo "<script>alert(' لم يتم الرفع ') </script>";

}else{  echo "<script>alert('تم  رفع بنجاح') </script>  ";
}

mysqli_close($con);


}


            ?>
        




      
         <?php

include "main.html";
$con = mysqli_connect("localhost","root","" ,"m3");
if(isset($_POST['phon'])){

$NAME=$_POST['name'];
$PRICE=$_POST['price'];
$IMAGE=$_FILES['imge'];
$image_location = $_FILES['imge']['tmp_name'];
$image_name =$_FILES['imge']['name'];
$image_up ="images/".$image_name;
$insert="INSERT INTO iphon(name, price	,image)
VALUES('$NAME','$PRICE','$image_up')";

   mysqli_query( $con , $insert);
if(move_uploaded_file($image_location,'images/'.$image_name)){

echo "<script>alert(' لم يتم الرفع ') </script>";

}else{  echo "<script>alert('تم  رفع بنجاح') </script>  ";
}

mysqli_close($con);


}


            ?>


         <?php

include "main.html";
$con = mysqli_connect("localhost","root","" ,"m3");
if(isset($_POST['comm'])){

$NAME=$_POST['name'];
$PRICE=$_POST['price'];
$IMAGE=$_FILES['imge'];
$image_location = $_FILES['imge']['tmp_name'];
$image_name =$_FILES['imge']['name'];
$image_up ="images/".$image_name;
$insert="INSERT INTO  com(name, price	,image	)
VALUES('$NAME','$PRICE','$image_up')";

   mysqli_query( $con , $insert);
if(move_uploaded_file($image_location,'images/'.$image_name)){

echo "<script>alert(' لم يتم الرفع ') </script>";

}else{  echo "<script>alert('تم  رفع بنجاح') </script>  ";
}

mysqli_close($con);


}


            ?>
         <?php

include "main.html";
$con = mysqli_connect("localhost","root","" ,"m3");
if(isset($_POST['goold'])){

$NAME=$_POST['name'];
$PRICE=$_POST['price'];
$IMAGE=$_FILES['imge'];
$image_location = $_FILES['imge']['tmp_name'];
$image_name =$_FILES['imge']['name'];
$image_up ="images/".$image_name;
$insert="INSERT INTO  goold(name, price	,image	)
VALUES('$NAME','$PRICE','$image_up')";

   mysqli_query( $con , $insert);
if(move_uploaded_file($image_location,'images/'.$image_name)){

echo "<script>alert(' لم يتم الرفع ') </script>";

}else{  echo "<script>alert('تم  رفع بنجاح') </script>  ";
}

mysqli_close($con);


}


            ?>

<?php

include "main.html";
$con = mysqli_connect("localhost","root","" ,"m3");
if(isset($_POST['fth'])){

$NAME=$_POST['name'];
$PRICE=$_POST['price'];
$IMAGE=$_FILES['imge'];
$image_location = $_FILES['imge']['tmp_name'];
$image_name =$_FILES['imge']['name'];
$image_up ="images/".$image_name;
$insert="INSERT INTO  fth(name, price	,image	)
VALUES('$NAME','$PRICE','$image_up')";

   mysqli_query( $con , $insert);
if(move_uploaded_file($image_location,'images/'.$image_name)){

echo "<script>alert(' لم يتم الرفع ') </script>";

}else{  echo "<script>alert('تم  رفع بنجاح') </script>  ";
}

mysqli_close($con);


}


 ?>
        <?php

include "main.html";
$con = mysqli_connect("localhost","root","" ,"m3");
if(isset($_POST['coloc'])){

$NAME=$_POST['name'];
$PRICE=$_POST['price'];
$IMAGE=$_FILES['imge'];
$image_location = $_FILES['imge']['tmp_name'];
$image_name =$_FILES['imge']['name'];
$image_up ="images/".$image_name;
$insert="INSERT INTO  coloc(name, price	,image	)
VALUES('$NAME','$PRICE','$image_up')";

   mysqli_query( $con , $insert);
if(move_uploaded_file($image_location,'images/'.$image_name)){

echo "<script>alert(' لم يتم الرفع ') </script>";

}else{  echo "<script>alert('تم  رفع بنجاح') </script>  ";
}

mysqli_close($con);


}

  ?>