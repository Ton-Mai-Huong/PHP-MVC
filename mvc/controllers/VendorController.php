<?php

include_once '../model/Vendors.php';


class VendorController
{
    public function create()
    {
        if (isset($_POST['btnCreate'])) {
            $name= $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];

            $vendor_m = new Vendors();
            $vendor_m->create($name, $email, $phone, $address);
        }
        include_once '../views/vendors/create.php';

    }

    public function index()
    {
        // gọi model lấy dl
        $vendor_m = new Vendors();
        $data=$vendor_m->danhsach();

        include_once '../views/vendors/index.php';
    }


    public function delete()
    {
        if (isset($_GET['id'])){
            $id = $_GET['id'];

            $vendor_m = new Vendors();
            $vendor_m->delete($id);

            header('Location: http://tmh.com/controllers/VendorController.php');
            exit;
        }
    }

    public function edit()
    {
        if (isset($_GET['id'])){
            $id = $_GET['id'];

            $vendor_m = new Vendors();

            $data = $vendor_m->detail($id);
            $data = $data[0];

            if (isset($_POST['btnUpdate'])) {
                $name= $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];

                //Lưu vào database
                $vendor_m = new Vendors();

                $vendor_m->update($id, $name, $email, $phone, $address);

                header('Location: http://tmh.com/controllers/VendorController.php');
                exit;
            }

            include_once '../views/vendors/edit.php';
        }



    }



}

$vendor_c = new VendorController();


if (isset($_GET['action'])){
    $method = $_GET['action'];
    $vendor_c->$method();
} else{
    $vendor_c->index();
}

