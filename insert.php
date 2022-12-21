<!DOCTYPE html>
<html>

<head>

    <title>Offer Done</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => admin
        // password => test1234
        // database name => Dawarly
        $conn = mysqli_connect("localhost", "admin", "test1234", "Dawarly");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $FNAME = $_REQUEST['FNAME'];
        $LNAME = $_REQUEST['LNAME'];
        $EMAIL = $_REQUEST['EMAIL'];
        $MNUMBER = $_REQUEST['MNUMBER'];
        $PRICE = $_REQUEST['PRICE'];

        // Performing insert query execution
        // here our table name is information
        $sql = "INSERT INTO information VALUES ('$FNAME',
            '$LNAME','$EMAIL','$MNUMBER','$PRICE')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$FNAME\n $LNAME\n "
                . "$EMAIL\n $MNUMBER\n $PRICE");
        } else{
            echo "ERROR: Huh! What Happened? $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
