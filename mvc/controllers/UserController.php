<?php

include_once '../model/User.php';


class UserController
{
     public function create()
     {
         //echo 'tao';
         if (isset($_POST['btnCreate'])) {
             $name= $_POST['name'];
             $email = $_POST['email'];
             $pwd = $_POST['pwd'];
            // tạo đối tượng cụ thể của lớp
             $user_m = new User();

             $user_m->create($name, $email, $pwd);

             //Lưu vào database
         }
        include_once '../views/users/create.php';

     }

     public function index()
     {
         // gọi model lấy dl
         $user_m = new User();
         $data=$user_m->danhsach();

         include_once '../views/users/index.php';
     }

     // Hàm xóa dl trong danh sách
    public function delete()
    {
        if (isset($_GET['id'])){
            $id = $_GET['id'];

            $user_m = new User();
            $user_m->delete($id);

            header('Location: http://tmh.com/controllers/UserController.php');
            exit;
        }
    }

    public function edit()
    {
        if (isset($_GET['id'])){
            $id = $_GET['id'];

            $user_m = new User();

            $data = $user_m->detail($id);
            $data = $data[0];

            if (isset($_POST['btnUpdate'])) {
                $name= $_POST['name'];
                $email = $_POST['email'];

                //Lưu vào database
                $user_m = new User();

                $user_m->update($id,$name, $email);

                header('Location: http://tmh.com/controllers/UserController.php');
                exit;
            }

            include_once '../views/users/edit.php';
        }



    }



}

$user_c = new UserController();

// Bắt tham số điều hướng trên url
if (isset($_GET['action'])){
    $method = $_GET['action'];
    $user_c->$method();
} else{
    $user_c->index();
}

//$user_c->create();

//$user_c->index();
//$user_c->ncc()