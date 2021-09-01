<h1>bài 4: My SQl- Cở sở dữ liệu</h1>
<?php
//1. Thông tin kết nối csdl
$host='localhost';//127.0.0.1
$name='root';
$password='';
$dbname='webshop';

//2.Khởi tạo đối tượng để kết nối đến csdl
//Kết nối đến csdl

$conn = mysqli_connect($host,$name,$password,$dbname);
//echo'<pre>';
//var_dump($conn);



//3.Kiểm tra kết nối thành công hay thất bại
//die: kết thúc chg trình tai vị trí đặt nó
if (!$conn) {
    die("Kết nối thất bại: ".mysqli_connect_error());
}
echo '<br>';
echo'Kết nối thành công';
//die;
echo 999;


?>
