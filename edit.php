<?php
         $connection = mysqli_connect("localhost", "root", "");
         $db = mysqli_select_db($connection, "registeration form");
         $edit= $_GET['edit'];

         $sql = "select * from form1 where id='$edit'";
         $run = mysqli_query($connection,$sql);
       while($row=mysqli_fetch_array($run))
       {
        $SNo = $row['S.No'];
        $StudentName = $row['StudentName'];
        $Class = $row['Class'];
        $Section = $row['Section'];
        $Department = $row['Department'];
        $EmailID = $row['EmailID'];
        $College = $row['College'];
        $Address = $row['Address'];
        $MobileNumber = $row['MobileNumber'];
       }
?>

<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "registeration form");

if (isset($_POST["Submit"])) {
    $edit = $_GET['edit'];
    $S_No = $_POST["S_No"];
    $StudentName = $_POST["StudentName"];
    $Class = $_POST["Class"];
    $Section = $_POST["Section"];
    $Department = $_POST["Department"];
    $EmailID = $_POST["EmailID"];
    $College = $_POST["College"];
    $Address = $_POST["Address"];
    $MobileNumber = $_POST["MobileNumber"];

    $sql = "Update form1 set SN='$SN',StudentName='$StudentName',Class='$Class',Section='$Section',Department='$Department',EmailID='$EmailID',
                   College='$College',Address='$Address',MobileNumber='$MobileNumber'where id = '$edit'";
    if (mysqli_query($connection, $sql)) {
        echo '<script>location.replace("newform.php")</script>';
    } else {
        echo "Something went wrong: " . $connection->error;
    }
}
?>



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
                     
                    <form action="add.php" method="post">
                        <div class="form-group">
                            <label>S.N</label>
                            <input type="text" name="S.N" class="form-control" placeholder="Enter S.N" value="<?php echo $SN; ?>">
                            </div>
                            <div class="form-group">
                            <label>Student Name</label>
                            <input type="text" name="Student Name" class="form-control" placeholder="Enter StudentName" value="<?php echo $StudentName; ?>">
                            </div>
                            <div class="form-group">
                            <label>Class</label>
                            <input type="text" name="Class" class="form-control" placeholder="Enter Class" value="<?php echo $Class; ?>">
                            </div>
                            <div class="form-group">
                            <label>Section</label>
                            <input type="text" name="Section" class="form-control" placeholder="Enter Section" value="<?php echo $Section; ?>">
                            </div>
                            <div class="form-group">
                            <label>Department</label>
                            <input type="text" name="Department" class="form-control" placeholder="Enter Department" value="<?php echo $Department; ?>">
                            </div>
                            <div class="form-group">
                            <label>Email ID</label>
                            <input type="text" name="Email ID" class="form-control" placeholder="Enter Email ID" value="<?php echo $EmailID; ?>">
                            </div>
                            <div class="form-group">
                            <label>College</label>
                            <input type="text" name="College" class="form-control" placeholder="Enter College" value="<?php echo $College; ?>">
                            </div>
                            <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="Address" class="form-control" placeholder="Enter Address" value="<?php echo $Address; ?>">
                            </div>
                            <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" name="MobileNumber" class="form-control" placeholder="Enter MobileNumber" 
                                             svalue="<?php echo $MobileNumber; ?>">
                            </div>
                            <br/>
                        <input type="submit" class="btn btn-primary" name="submit value="Edit">
                        </form>
                    
                    </div>
                    </div>
                   </div>
</body>
</html>

                                    