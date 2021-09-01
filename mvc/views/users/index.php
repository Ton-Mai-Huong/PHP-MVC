<!DOCTYPE html>
<html lang="en">
<head>
  <title>Danh sách người dùng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Danh sách người dùng</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ( $data as $item): ?>
      <tr>
        <td><?php echo $item['id'] ?></td>
        <td><?php echo $item['name'] ?></td>
        <td><?php echo $item['email'] ?></td>
        <td>
            <a href="?action=edit&id=<?php echo $item['id'] ?>" class="btn btn-primary">Sửa</a>
            <a href="?action=delete&id=<?php echo $item['id'] ?>" class="btn btn-danger">Xóa</a>
        </td>
      </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>
