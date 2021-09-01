<?php

include_once 'Connection.php';
class Vendors extends Connection
{
    public function create($name, $email, $pwd){
        $sql = "INSERT INTO  vendors ( name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";

        $this->con->query($sql);
    }

    public function danhsach()
    {
        $sql = 'SELECT * FROM vendors';

        $result = $this->con->query($sql);

        $arrData = [];

        while ($row = $result->fetch_assoc()) {
            $arrData[] = $row;
        }

        return $arrData;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM vendors WHERE  id = $id";
        $this->con->query($sql);
    }

    public function detail($id)
    {
        $sql = "SELECT * FROM vendors where id = $id";

        $result = $this->con->query($sql);

        $arrData = []; // Mảng lưu kết quả

        // Sử dụng vòng lặp while để duyệt qua từng kết quả trả về
        while ($row = $result->fetch_assoc()) {
            $arrData[] = $row;
        }
        return $arrData;
    }

    public function update( $id, $name, $email, $phone, $address){

        $sql = "UPDATE vendors
                SET name = '$name', email = '$email', phone = '$phone', address = '$address' 
                WHERE id = $id";

        //run commanad sql
        $this->con->query($sql);
    }
}
$vendors1 = new Vendors();