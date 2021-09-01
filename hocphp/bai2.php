<h1>Bài 2</h1>

<?php
    $tenBien='dev';
    echo $tenBien;
    // Biểu thức điều kiện
    //if(biểu thức) .... else
    if ($tenBien=='dev') {
        echo '<br> Đúng';
    }else{
        echo '<br> Sai';
    }

    $a=10;
    if ($a=='10') echo '<br> số 10';
    if ($a==='10') echo '<br> số 10 a';

    // KL: khi sử dụng điều kiện so sánh === thì nó sẽ so sánh đến cả kiểu dữ liệu

    //Toán tử tăng
    $b=5;
    $b++;
    echo '<br>';
    echo '<br> Toán tử tăng++='.$b;

    // Toán tử giảm --
    $b--;
    echo '<br>';
    echo '<br> Toán tử giảm --='.$b;

    //Toán tử điều kiện: (Biểu thức điều kiện)?<Xử lí nếu đúng>:<Xử lí nếu sai>
    // Ví dụ 1:
    if (3>2) {
        echo '<br> 3 lon hon 2';
    } else {
        echo '<br> 3 nho hon 2';
    }

    echo (3>2)?'<br> Lon hon':'Nho hon';

    //Toán tử gán
    if (3>2&&4>3) echo'<br> Đúng';

    if(3>2||4>5) echo '<br>Đúng';
    echo '<br>';
    //Mảng
    $mang=array(); //Khai báo mảng rỗng
    $mang2=[];//cách 2 khai báo mảng
    $mang3=array('Ton','Mai','Huong');
    $mang4=[1,2,3];
    echo'<pre>';
    print_r($mang3);
    print_r($mang4);
    // get giới hạn số kí tự gửi đi :2048
    echo '<br>';
    echo date('d-m-Y');
    echo '<br>';
    echo date('Y-m-d');
    echo '<br>';
    echo date('y-M-D');

    //trim()- cắt khoảng trắng 2 đầu
    echo '<br>';
    $c='      dev    ';
    echo trim($c);

    //explode()- chuyển một chuỗi thành mảng
    $d='dev code';
    $arr = explode(' ',$d);
    print_r($arr);

    $d2='dev,code2';
    $arr2 = explode(',',$d2);
    print_r($arr2);
    echo '<br>';
    //strpos()- hà tìm kiếm 1 chuỗi bất kì, trong chuỗi ban đầu
    // kq của hàm là vị trí tìm thấy
    // nếu k tìm thấy trả về false
    echo 'Vị trí thứ:'.strpos('Ton Mai Huong!','Mai');
    var_dump( strpos('Ton Mai Huong!','xx'));
    // var_dump giống với echo và print_r đều hiển thị giá trị nào đó lên màn hình
    // nhưng var_dump thì sẽ hiển thị cả kiểu  dl của giá trị cần hiển thị
?>
