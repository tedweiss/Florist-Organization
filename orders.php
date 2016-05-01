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
$orderAmount = mysqli_real_escape_string($link, $_POST['orderAmount']);
$taxAmount = mysqli_real_escape_string($link, $_POST['taxAmount']);
$deliveryAmount = mysqli_real_escape_string($link, $_POST['deliveryAmount']);
$grandTotal = mysqli_real_escape_string($link, $_POST['grandTotal']);
$sentFlorist = mysqli_real_escape_string($link, $_POST['sentFlorist']);
$receiveFlorist = $sentFlorist * 0.7;
$telefloraAmount = $sentFlorist * 0.07;
$sendingFlorist = $sentFlorist* 0.23;
$floristName = mysqli_real_escape_string($link, $_POST['floristName']);
$promoCode = mysqli_real_escape_string($link, $_POST['promoCode']);
$confirmNum = mysqli_real_escape_string($link, $_POST['confirmNum']);
$refusal = mysqli_real_escape_string($link, $_POST['refusal']);
$notes = mysqli_real_escape_string($link, $_POST['notes']);
 
// attempt insert query execution
$sql = "INSERT INTO order (dateOrder, timeOrder, cityOrder, stateOrder, citySent, stateSent, dateDelivery, occasion, callerName, recipientName, firstChoice, orderAmount, taxAmount, deliveryAmount, grandTotal, sentFlorist, receiveFlorist, telefloraAmount, sendingFlorist, floristName, promoCode, confirmNum, refusal, notes) VALUES ('$dateOrder', '$timeOrder', '$cityOrder', '$stateOrder', '$citySent', '$stateSent', '$dateDelivery', '$occasion', '$callerName', '$recipientName', '$firstChoice', '$orderAmount', '$taxAmount', '$deliveryAmount', $grandTotal', '$sentFlorist', '$receiveFlorist', '$telefloraAmount', '$sendingFlorist', '$floristName', '$promoCode', '$confirmNum', '$refusal', '$notes')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
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
            echo "<div>";
                echo "<p>Order Amount</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['orderAmount'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Tax Amount</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['taxAmount'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Delivery Amount</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['deliveryAmount'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Grand Total</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['grandTotal'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Total Sent to Florist</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['sentFlorist'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Receiving Florist Amount</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['receiveFlorist'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Teleflora Amount</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['telefloraAmount'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Sending Florist Amount</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['sendingFlorist'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Florist</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['floristName'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Promo Code</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['promoCode'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Confirmation Number</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['confirmNum'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Refusal?</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['refusal'] . "</p>";
            }
            echo "</div>";
            echo "<div>";
                echo "<p>Notes</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['notes'] . "</p>";
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