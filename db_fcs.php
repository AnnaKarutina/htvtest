<?php
function connect($host, $user, $pass, $db){
    $conn = new mysqli($host, $user, $pass, $db);
    // Check connection
    if ($conn->connect_error) {
        echo "Connection failed: ";
        exit;
    }
    //echo "Connected successfully";
    return $conn;
}

function query($conn, $sql){
    if ($conn->query($sql) === true) {
        //echo "Queryed successfully";
        $result = true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $result = false;
    }
    return $result;
}

function getData($conn, $sql){
    $data = [];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        echo "0 results";
    }
    return $data;
}


