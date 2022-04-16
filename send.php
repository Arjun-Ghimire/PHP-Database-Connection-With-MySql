<?php 

    // the default credentials are localhost for database server, root for username and blank for password
    $server = "localhost";
    $username = "root";
    $password = "";

    //establishing a database connection with the database
    $con = mysqli_connect($server,$username,$password);


    //checking if the connection is successful or not
    if(!$con){
        echo "connection failed <br>";
    }
    else{
        echo "connection success <br>";
    }


    // taking the data of the post request made by the another page
    $name=$_POST['name'];
    $age=$_POST['age'];


    // sql query to insert the data to the database
    $sql = "INSERT INTO test.user (name, age) VALUES ('$name', $age);";


    // holding the execustion data on result so we can use it for success for failed message 
    $result = $con->query($sql);


    // showing the result of the execution
    if(!$result){
        echo "Failed with error message = $con->error";
        
    }
    else{
        echo "Data transfer to database is successful";
    }

    ?>