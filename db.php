<?php
// Report all mysql error as exception
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// $HOST = "localhost";
// $USER = "root";
// $PASS = "";
// $DB = "mca2";
// $PORT = 3306;

// $conn = new mysqli($HOST, $USER, $PASS, $DB);

// if($conn -> connect_error){
//     // echo $conn->connect_error;
//     // die($conn->connect_error);
// } else {
//     echo "Connected";
// }

// try {
//     $conn = new mysqli($HOST, $USER, $PASS, $DB);
//     echo "Connected";
// } catch (mysqli_sql_exception  $se){
//     echo "Connection Error: ".$se->getMessage(). " @Line: ".$se->getLine();
// }

function get_connection(){
    $HOST = "localhost";
    $USER = "root";
    $PASS = "";
    $DB = "mca26";
    $PORT = 3306; // Optional

    $conn = null;

    try {
        $conn = new mysqli($HOST, $USER, $PASS, $DB, $PORT);
        // echo "Connected";
    } catch (mysqli_sql_exception  $se){
        echo "Connection Error: ".$se->getMessage(). " @Line: ".$se->getLine();
    }

    return $conn;
}

get_connection();
?>