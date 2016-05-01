<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$marketingDate = mysqli_real_escape_string($link, $_POST['marketingDate']);
$marketingCost = mysqli_real_escape_string($link, $_POST['marketingCost']);
$operationalCost = mysqli_real_escape_string($link, $_POST['operationalCost']);
 
// attempt insert query execution
$sql = "INSERT INTO marketing (marketingDate, marketingCost, operationalCost) VALUES ('$marketingDate', '$marketingCost', '$operationalCost')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

 
// Attempt select query execution
$sql = "SELECT * FROM marketing WHERE marketingDate = $marketingDate";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<div class='category'>";
            echo "<div>";
                echo "<p>Date</p>";
                echo "<p>" . $marketingDate . "</p>";
            echo "</div>";
            echo "<div>";
                echo "<p>Marketing Cost</p>";
                echo "<p>" . $marketingCost . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Operational Cost</p>";
                echo "<p>" . $operationalCost . "</p>";
            echo "</div>";
        echo "</div>";


        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>