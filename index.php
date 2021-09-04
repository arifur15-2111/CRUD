<?php
    $con = mysqli_connect('localhost', 'root', '', 'crud');
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-2">
                <a href="insert.php"><button class="btn btn-success">Add Employee</button></a>
            </div>
            <div class="col-md-8">
                <h1>Employee List</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Salary</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                        while ($raw = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $raw['id'];?></td>
                        <td><?php echo $raw['name'];?></td>
                        <td><?php echo $raw['email'];?></td>
                        <td>
                            <a href="show.php?id=<?php echo $raw['id'];?>" class="btn btn-info btn-sm">view</a>
                            <a href="edit.php?id=<?php echo $raw['id'];?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="delete.php?id=<?php echo $raw['id'];?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>