<?php

require "conn.php";
$data = $conn->query("SELECT * FROM tasks");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post" class="form-inline d-flex mb-3" action="insert.php">
                <input type="text" name="task" class="form-control mx-3" placeholder="Enter task">
                <button type="submit" name="submit" class="btn btn-sm btn-primary">Create</button>
        </form>
        
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>Task Name</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php while($rows = $data->fetch(PDO::FETCH_OBJ)): ?>
                    <tr>
                        <td><?php echo $rows->id; ?></td>
                        <td><?php echo $rows->task; ?></td>
                        <td>
                            <a href="delete.php?del_id=<?php echo $rows->id; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>