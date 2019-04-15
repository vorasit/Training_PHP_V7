<?php
//Example (MySQLi Object-Oriented)

    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "myDB";

// Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

// sql to create table
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";
    if($conn->query($sql)==TRUE){
        echo "successfully create table";
    }
    else{
        echo "Error creating table: " .$conn->error;
    }
    $conn->close();

?>

<?php
/*
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

// sql to create table
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";
    if(mysqli_query($conn,$sql)){
        echo "Table MyGuests created successfully";
    }
    else{
        echo "Error creating table: ". mysqli_error($conn);
    }
    mysqli_close($conn);
*/
?>
