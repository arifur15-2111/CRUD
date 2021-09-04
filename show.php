<?php
    $id = $_GET['id'];
    $con = mysqli_connect('localhost', 'root', '', 'crud');
    $sql = "SELECT * FROM employee WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $employee = mysqli_fetch_assoc($result)
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
                <a href="index.php"><button class="btn btn-success">Back</button></a>
            </div>
            <div class="col-md-8">
                <h1>Employee Information</h1>
                <table class="table">
                    <tr>
                        <th>ID:</th>
                        <td><?php echo $employee['id']; ?></td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td><?php echo $employee['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?php echo $employee['email']; ?></td>
                    </tr>
                    <tr>
                        <th>Salary:</th>
                        <td><?php echo $employee['salary']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>