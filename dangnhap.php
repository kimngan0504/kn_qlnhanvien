
<?php

   if(!empty($_POST)){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $connect = new mysqli("localhost","root","","quanlytaikhoan");
    mysqli_set_charset($connect,"utf8");
    if($connect -> connect_error){
      var_dump($connect -> connect_error);
      die();
    }
    $query= "SELECT * FROM taikhoan WHERE USER_NAME ='$user' AND PASSWORD = '$pass'";
    $result = mysqli_query($connect,$query);
    if(mysqli_num_rows($result) >0){
        require_once("admin_member.php");
    }
    else{
        echo "<h3>Đăng nhập thất bại! Vui lòng nhập lại</h3>";
        require_once("login.html");
    }

    $connect -> close();
    // $data= array();
    // while($row = mysqli_fetch_array($result,1)){
    //   $data[]= $row;
    // }
    // var_dump($data);
    // $connect -> close();
    // if($data != null && count($data) >0){
    //   header("Location: admin_member.php");
    // }
  }

?>