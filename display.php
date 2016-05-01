<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


// Escape user inputs for security
$fromDate = mysqli_real_escape_string($link, $_POST['fromDate']);
$toDate = mysqli_real_escape_string($link, $_POST['toDate']);



// Attempt select query execution
$sql = "SELECT * FROM order WHERE date BETWEEN '" . $fromDate . "' AND  '" . $toDate"'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<div class='category'>";

        if(isset($_POST['dateOrder'])){
            echo "<div>";
                echo "<p>Date Placed</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['dateOrder'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['timeOrder'])){
            echo "<div>";
                echo "<p>Time Placed</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['timeOrder'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['cityOrder'])){
            echo "<div>";
                echo "<p>City Ordered From</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['cityOrder'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['stateOrder'])){
            echo "<div>";
                echo "<p>State Ordered From</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['stateOrder'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['citySent'])){
            echo "<div>";
                echo "<p>City Sent To</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['citySent'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['stateSent'])){
            echo "<div>";
                echo "<p>State Sent To</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['stateSent'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['dateDelivery'])){
            echo "<div>";
                echo "<p>Delivery Date</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['dateDelivery'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['occasion'])){
            echo "<div>";
                echo "<p>Occasion</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['occasion'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['callerName'])){
            echo "<div>";
                echo "<p>Name of Caller</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['callerName'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['recipientName'])){
            echo "<div>";
                echo "<p>Name of Recipient</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['recipientName'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['firstChoice'])){
            echo "<div>";
                echo "<p>First Choice</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['firstChoice'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['orderAmount'])){
            echo "<div>";
                echo "<p>Order Amount</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['orderAmount'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['taxAmount'])){
            echo "<div>";
                echo "<p>Tax Amount</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['taxAmount'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['deliveryAmount'])){
            echo "<div>";
                echo "<p>Delivery Amount</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['deliveryAmount'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['grandTotal'])){
            echo "<div>";
                echo "<p>Grand Total</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['grandTotal'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['sentFlorist'])){
            echo "<div>";
                echo "<p>Total Sent to Florist</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['sentFlorist'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['receiveFlorist'])){
            echo "<div>";
                echo "<p>Receiving Florist Amount</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['receiveFlorist'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['telefloraAmount'])){
            echo "<div>";
                echo "<p>Teleflora Amount</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['telefloraAmount'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['sendingFlorist'])){
            echo "<div>";
                echo "<p>Sending Florist Amount</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['sendingFlorist'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['floristName'])){
            echo "<div>";
                echo "<p>Florist</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['floristName'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['promoCode'])){
            echo "<div>";
                echo "<p>Promo Code</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['promoCode'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['confirmNum'])){
            echo "<div>";
                echo "<p>Confirmation Number</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['confirmNum'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['refusal'])){
            echo "<div>";
                echo "<p>Refusal?</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['refusal'] . "</p>";
            }
            echo "</div>";
        }
        if(isset($_POST['notes'])){
            echo "<div>";
                echo "<p>Notes</p>";
            while($row = mysqli_fetch_array($result)){
                echo "<p>" . $row['notes'] . "</p>";
            }
            echo "</div>";
        }
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