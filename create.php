<html>
<body center>
<?php
 if(isset($_POST['submit'])){
    $name=$_POST['n1'];
    $email=$_POST['e1'];
    $account_No=$_POST['b1'];
    $con = mysqli_connect("localhost","root","","bank") ;
    $sql="insert into users(name,email,account_No) values('{$name}','{$email}','{$account_No}')";
    $result=mysqli_query($con,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
}

?>
</body>
</html>