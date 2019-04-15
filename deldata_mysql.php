<?php
//Example (MySQLi Object-Oriented)

    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "myDB";

// Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    if($conn->connect_error){
        die("Connection failed:". $conn->connect_error);
    }
    echo "Connected successfully";

    // sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=3";
    if($conn->query($sql)==TRUE){
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
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
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=3";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
*/
?>