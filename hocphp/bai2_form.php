<h1>Bài 2- Form</h1>
<?php
//    if (isset($_GET['email'])){
//        $email=$_GET['email'];
//        print_r($email);
//    }
//    if (isset($_GET['pwd'])){
//        $pwd=$_GET['pwd'];
//        print_r($pwd);
//    }
    if (isset($_POST['email'])){
        $email=$_POST['email'];
//        print_r($email);
    }
    if (isset($_POST['pwd'])){
        $pwd=$_POST['pwd'];
//        print_r($pwd);
    }

//    echo'<pre>';
//    print_r($_REQUEST);

    //$_REQUEST - chứa toan bộ thông tin dữ liệu được gửi đi từ Client bao gồm dữ liêu được gửi từ method- get, post, cookie


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Form đăng nhập</h2>
    <form action="" method="get">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>



