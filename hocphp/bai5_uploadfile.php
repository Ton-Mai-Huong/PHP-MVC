<h1>Bài 5-Upload file</h1>
<?php
//kiểm tra tồn tại file upload??
if (isset($_FILES['file'])) {
    $filename = $_FILES['file']['name']; // Lấy ra tên gốc của file
    $tmp_upload = $_FILES['file']['tmp_name'];
    //upload file: hàm move_uploaded_file()
    move_uploaded_file($tmp_upload, './uploads/'.$filename);

}
?>
//enctype="multipart/form-data" bắt buộc có cái này thì dl mới đc đẩy lên
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
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="form-group">
            <label for="file">File:</label>
            <input type="file" class="form-control" id="file" placeholder="File" name="file">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>