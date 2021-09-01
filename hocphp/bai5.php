<h1>Đọc, ghi file- Bài 5</h1>
<?php
//Thao tác với file trong Php

//VD1: ở đọc file
//Đường dẫn tới file
$filename='F:/test.txt';
//Bước 2: Mở hoặc tạo file fopen('duong_dan','che_do)';

$file= fopen($filename,'w') or exit('ko tim thay file');
//Bước 3: ghi nd vào file
fwrite($file, 'them moi 3');

//Bước 4: đóng file vừa mở
fclose($file)
?>
