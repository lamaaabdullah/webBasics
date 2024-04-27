<?php
if(array_key_exists('name',$_POST))
{$localhost="localhost";
$db_user="root";
$db_password="";
$db_name="project";
$connect = mysqli_connect($localhost,$db_user,$db_password,$db_name);
$email=$_POST['email'];
$name=$_POST['name'];
// التحقق إذا كان الإسم موجود في قاعدة البيانات
$sql="SELECT * FROM main WHERE name='$name' ";
	$query=mysqli_query($connect,$sql);
    $num=mysqli_num_rows($query);
    if($num>0)
    {echo ' <script >
    
    alert("الإسم الذي أدخلتة موجود الرجاء أدخال اسم أخر");
    </script>';}
    else {
        // الإضافة إلى قاعدة البيانات
        $sql="INSERT INTO main( name , email) VALUES ('$name','$email')";
        $query=mysqli_query($connect,$sql);
        header("Location: register.html");
    }
    }
   

?>