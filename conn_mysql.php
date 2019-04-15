
<?php
/*
    //Example (MySQLi Object-Oriented)
    $servername = "localhost";
    $username = "username";
    $password = "password";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";
    $conn->close();
*/
?>

<?php
    //Example (MySQLi Procedural)
   
    $servername = "localhost";
    $username = "root";
    $password = "12345678";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    echo "Connected successfully";
    mysqli_close($conn);
?>

