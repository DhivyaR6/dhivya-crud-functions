<?php
       
       $connection = mysqli_connect("localhost", "root", "");
        
       $db = mysqli_select_db($connection, "registeration form");
       $delete= $_GET['del'];

   
       $sql = "delete from form1 where id = '$delete'";


       if (mysqli_query($connection, $sql))
        {
        
            echo '<script>location.replace("newform.php")</script>';
    } 
    else 
    {
        echo "Something went wrong: " . $connection->error;

    }

?>