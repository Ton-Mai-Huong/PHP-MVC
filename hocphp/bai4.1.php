<h1>Hàm/ phương thức</h1>
<?php
//Tạo ra 1 hàm , chức năng- function ten_ham() {}
function show() {
    echo 'xinchao';
}
show();
echo '<br>';

function sum() {
    echo 3 +4;
}
sum();
// Hàm có tham số
echo '<br>';
function ham($a,$b,$c){
    echo $a+$b+$c;
}
ham(2,3,4);
echo '<br>';

function ham_tong($a, $b){
    return $a+ $b;
}
$c=ham_tong(3,4);
echo $c;

?>
