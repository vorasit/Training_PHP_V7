<?php
//Example (MySQLi Object-Oriented)
/*
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    //insert 
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";

    if($conn->query($sql)==TRUE){
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" .$conn->error;
    }
    $conn->close();
*/
?>

<?php
    //Example (MySQLi Procedural)
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "myDB";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    echo "Connected successfully";
    //insert
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";

    if(mysqli_query($conn,$sql)){
        echo "New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
?>