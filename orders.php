<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$dateOrder = mysqli_real_escape_string($link, $_POST['dateOrder']);
$timeOrder = mysqli_real_escape_string($link, $_POST['timeOrder']);
$cityOrder = mysqli_real_escape_string($link, $_POST['cityOrder']);
$stateOrder = mysqli_real_escape_string($link, $_POST['stateOrder']);
$citySent = mysqli_real_escape_string($link, $_POST['citySent']);
$stateSent = mysqli_real_escape_string($link, $_POST['stateOrder']);
$dateDelivery = mysqli_real_escape_string($link, $_POST['dateDelivery']);
$occasion = mysqli_real_escape_string($link, $_POST['occasion']);
$callerName = mysqli_real_escape_string($link, $_POST['callerName']);
$recipientName = mysqli_real_escape_string($link, $_POST['recipientName']);
$firstChoice = mysqli_real_escape_string($link, $_POST['firstChoice']);
 
// attempt insert query execution
$sql = "INSERT INTO order (dateOrder, timeOrder, cityOrder, stateOrder, citySent, stateSent, dateDelivery, occasion, callerName, recipientName, firstChoice) VALUES ('$dateOrder', '$timeOrder', '$cityOrder', '$stateOrder', '$citySent', '$stateSent', '$dateDelivery', '$occasion', '$callerName', '$recipientName', '$firstChoice')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM order";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<div class='category'>";
            echo "<div>";
                echo "<p>Date Placed</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['dateOrder'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Time Placed</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['timeOrder'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>City Ordered From</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['cityOrder'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>State Ordered From</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['stateOrder'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>City Sent To</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['citySent'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>State Sent To</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['stateSent'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Delivery Date</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['dateDelivery'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Occasion</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['occasion'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Name of Caller</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['callerName'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Name of Recipient</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['recipientName'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>First Choice</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['firstChoice'] . "</p>";
            }
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