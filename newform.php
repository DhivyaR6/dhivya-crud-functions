<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
                 integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Student Crud Application
                    </div>
                    <div class="card-body">
                        <button class="btn btn-success"> <a href="add.php" class="text-light">Add New</a></button>
                        <br/>
                        <br/>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">SNo</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Email ID</th>
                                    <th scope="col">College</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Mobile Number</th>
                                    <th scope="col">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $connection = mysqli_connect("localhost", "root", "");
                                if (!$connection) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }
                                $db = mysqli_select_db($connection, "registration_form");
                                if (!$db) {
                                    die("Database selection failed: " . mysqli_error($connection));
                                }
                                $sql = "SELECT * FROM form";
                                $run = mysqli_query($connection, $sql);
                                if (!$run) {
                                    die("Query failed: " . mysqli_error($connection));
                                }
                                $id = 1;
                                while ($row = mysqli_fetch_array($run)) {
                                    $SNo = $row['S.No'];
                                    $StudentName = $row['StudentName'];
                                    $Class = $row['Class'];
                                    $Section = $row['Section'];
                                    $Department = $row['Department'];
                                    $EmailID = $row['EmailID'];
                                    $College = $row['College'];
                                    $Address = $row['Address'];
                                    $MobileNumber = $row['MobileNumber'];
                                ?>
                                <tr>
                                    <td><?php echo $SNo ?></td>
                                    <td><?php echo $StudentName ?></td>
                                    <td><?php echo $Class ?></td>
                                    <td><?php echo $Section ?></td>
                                    <td><?php echo $Department ?></td>
                                    <td><?php echo $EmailID ?></td>
                                    <td><?php echo $College ?></td>
                                    <td><?php echo $Address ?></td>
                                    <td><?php echo $MobileNumber ?></td>
                                    <td>
                                        <button class="btn btn-success"> <a href="edit.php?edit=<?php echo $SNo ?>" class="text-light"> Edit</a></button>
                                        <button class="btn btn-danger"> <a href="delete.php?del=<?php echo $SNo ?>" class="text-light"> Delete</a></button>
                                    </td>
                                </tr>
                                <?php $id++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
