<h1>BÀI 3</h1>

<?php include 'bai3.1.php';?>
<?php include_once 'bai3.1.php';?>
<?php require 'bai3.2.php';?>
<?php require_once 'bai3.2.php';?>

<!--
+include_once và require_once: sẽ k triệu gọi file đã được require hoặc include
+Nếu sử dụng include(), khi gặp lỗi thì chương trình sẽ hiển thị một warning
và tiếp tục chạy code bên dưới
+Khi sử dụng require, khi gặp lỗi, chương trình sẽ trả về 1 cái warning, đồng
thời tạm dừng chương trình tại vị trí đó
-->

<!--Cookie-->
<?php
//set múi giờ cho ứng dụng
date_default_timezone_set('Asia/Ho_Chi_Minh');

echo time() ;
echo '<br>';
echo date('d/m/Y H:i:s',time());

setcookie('username','tmh',time() +15);
setcookie('password','123456',time() +30);
//=>KL cookie sẽ bị tự động xóa khi hết hạn expired, thời gian sống của cookie thì phụ thuộc vào cấu hình người dùng/ ứng dụng set up

// Hàm lấy giá trị cookie: $_COOKIE['ten_bien']
if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
    $ten= $_COOKIE['username'];
    $mk= $_COOKIE['password'];

    echo'<br>';
    echo $ten.' '.$mk;
}

// Xóa cookie thì chỉ cần set thời gian sống nhỏ hơn hiện tại

//SESSION - phiên làm việc

// Khởi động session
session_start();

//Khai báo sử dụng $_SESSION['ten_bien']
$_SESSION['user']='DEV';
$a=$_SESSION['user'];
echo'<br>';
echo $a;

//Hủy SESSION: dùng unset() hoặc session_destroy()
unset($_SESSION['user']); //xóa chỉ định 1 biến session
session_destroy();//hủy toàn bộ session của trang

//create function with an exception
function checkNum($number) {
    if($number>1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

//trigger exception in a "try" block
try {
    checkNum(2);
    //If the exception is thrown, this text will not be shown
    echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}
?>