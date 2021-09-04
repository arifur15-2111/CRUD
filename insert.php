<?php
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $salary = $_POST['salary'];

    $con = mysqli_connect('localhost', 'root', '', 'crud');
    $sql = "INSERT INTO employee VALUES(NULL, '$name', '$email', $salary)";
    $result = mysqli_query($con, $sql);
    header('Location: index.php');
    
    }
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
                    <form action="insert.php" method="POST">
                    <tr>
                        <th>Name:</th>
                        <td><input type="text" name="name" class="form-control"></td>
                    </tr>

                    <tr>
                        <th>Email:</th>
                        <td><input type="email" name="email" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Salary:</th>
                        <td><input type="text" name="salary" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><input class="btn btn-info" type="submit" value = "Submit"></td>
                    </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
</body>
</html>