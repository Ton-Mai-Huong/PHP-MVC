<h1>Bài 1</h1>
<?php
//Biến
$a=3; //number - integer
$b='ba'; //string(chuỗi)
$ho_ten='Ton Huong'; //nên dùng
$hoTen='TMH';//nên dùng
echo $a;
echo'<br>';
echo $b;
echo'<br>';
//Lấy kiểu dữ liệu của biến
echo gettype($a);
echo'<br>';
echo gettype($b);

//Ép kiểu dữ liệu
$c=2.54;
echo'<br>';
echo gettype($c);
echo'<br>';
$c=(int)$c; // (int) chuyển sang kiểu số nguyên
echo $c;
echo'<br>';
echo gettype($c);

//settype- hàm chuyển đổi kiểu dữ liệu
$d=6.5;
settype($d,'integer');
echo'<br>';
echo $d;
echo'<br>';
echo gettype($d);
echo '<br>';
echo $d.' kieu du lieu '.gettype($d);// nối chuỗi bằng dấu .
//unset-hủy bỏ 1 biến
unset($d);// giải phóng bô nhớ bị chiếm bởi biến d
echo $d;
echo $d;
//isset - kiểm tra 1 biến đã được khai báo hay chưa
if (isset($d)) {
    echo'ton tai';
}else{
    echo'<br> khong ton tai';
}
if (isset($c)) {
    echo'<br> ton tai';
}else{
    echo'<br> khong ton tai';
}
//Biểu thức điều kiện: nếu ... thì ...

//empty- hàm kiểm tra xem biến có bằng 1 trong các giá trị sau:
//0.0;"0";"";NULL; FALSE;array()
//Nếu mà bằng 1 trong các giá trị trên thì sẽ trả về TRUE, ngược lại trả về FALSE
$e="";
if (empty($e)) {
    echo'<br> chuoi rong';
}else{
    echo $e;
}
//is_string- kiểm tra xem 1 biến có phải là chuỗi hãy ko
$f='dev';
if (is_string($f)) {
    echo'<br>kieu chuoi';
}
$g=true; // kiểu dl là boolean
// dấu ! làm phủ định giá trị của biểu thức hiện tại

//NOte: !empty(bieu_thuc)-kiem tra 1 bien co ton tai va khac rong hay ko
$h='';
if (!empty($h)) {
    echo '<br> h- biến tồn tại khác rỗng ';
}

if (!empty($abc)) {
    echo $abc;
}
?>