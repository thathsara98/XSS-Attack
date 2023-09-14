<form action="" method="post">

    <input type="text" name="comment">
    <input type="submit" name="submit" value="Submit">
    
</form>
    
</body>
</html>


<?php

        $server="localhost";
        $db_username="root";
        $db_password="1234";
        $db_name="practice";

        $conn = new mysqli($server, $db_username, $db_password, $db_name) or die(mysqli_error($con));

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $data = $_POST['comment'];      

            $sql = "INSERT INTO post (comment) VALUES ('$data')";

            $results = $conn->query($sql); 

            if (mysqli_query($conn, $sql) == true) {
                echo "New record has been added successfully !";
            } else {
                echo "Error: ".mysqli_error($conn);
            }
       } 
      // mysql_close($conn);
?>


