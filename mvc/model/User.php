<?php

include_once 'Connection.php';
class User extends Connection
{
    //Định nghĩa thuộc tính tương đương với đặc điểm mô tả chung của nhóm đối tượng
//    public $name='tmh';
//    public $tuoi=20;

    // Hàm khởi tạo là một hàm luôn được gọi đầu tiên khi lớp đươc khởi tạo
    public function __construct()
    {
//        echo 'Ham khoi tao lop User <br>';
        parent::__construct(); // gọi đến hàm khởi tạo của lớp cha
    }

    //Thêm dl vào csdl
    public function create($name, $email, $pwd){
//        echo 'ham them csdl';
//        print_r($name);
//        print_r($email);
//        print_r($pwd);
        $sql = "INSERT INTO  users (name, email, password) VALUES ('$name', '$email', '$pwd')";

        //run commanad sql
        $this->con->query($sql);
    }

    public function danhsach()
    {
        $sql = 'SELECT * FROM users';

        $result = $this->con->query($sql);

        $arrData = []; // Mảng lưu kết quả

        // Sử dụng vòng lặp while để duyệt qua từng kết quả trả về
        while ($row = $result->fetch_assoc()) {
            $arrData[] = $row;
        }

        return $arrData;
    }

    // Hàm hủy được sử dụng để giải phóng bộ nhớ
//    public function __destruct()
//    {
//        // TODO: Implement __destruct() method.
//        echo 'Ham huy';
//    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE  id = $id";
        $this->con->query($sql);
    }

    public function detail($id)
    {
        $sql = "SELECT * FROM users where id = $id";

        $result = $this->con->query($sql);

        $arrData = []; // Mảng lưu kết quả

        // Sử dụng vòng lặp while để duyệt qua từng kết quả trả về
        while ($row = $result->fetch_assoc()) {
            $arrData[] = $row;
        }

        return $arrData;
    }

    public function update($id, $name, $email){

        $sql = "UPDATE users 
                SET name = '$name', email = '$email'
                WHERE id = $id";

        //run commanad sql
        $this->con->query($sql);
    }
}
// Khởi tạo 1 đói tượng cụ thể của lớp class User
    $user1 = new User();
//$user1->name; // Gọi đến thuộc tính của lớp
//$user1->getName(); // GỌi đến phương thức của lớp

// Hàm tạo và hàm hủy chỉ đc gọi khi có đối tượng đc khởi tạo