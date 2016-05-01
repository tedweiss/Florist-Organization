<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$displayDate = mysqli_real_escape_string($link, $_POST['displayDate']);


$sql="SELECT count(o.confirmNum) AS totalOrders, SUM(o.orderAmount) AS displayTotal, SUM(o.grandTotal) AS displayGrandTotal, SUM(o.sentFlorist) AS displaySentFlorist, count(o.promoCode) AS promoCode, m.marketingDate, SUM(m.marketingCost) AS marketingCost, SUM(m.operationalCost) AS operationalCost
    FROM `orders` AS o
    LEFT JOIN `marketing` AS m ON o.dateOrder = m.marketingDate
    WHERE  dateOrder = $displayDate AND marketingDate = $displayDate";


o.promoCode,
    (SELECT count(promoCode) FROM o WHERE promoCode = A) AS constantContact,
    (SELECT count(promoCode) FROM o WHERE promoCode = B) AS hyperMail,
    (SELECT count(promoCode) FROM o WHERE promoCode = C) AS sendGrid,
    (SELECT count(promoCode) FROM o WHERE promoCode = D) AS sendy,
    (SELECT count(promoCode) FROM o WHERE promoCode = E) AS iContact,
    (SELECT count(promoCode) FROM o WHERE promoCode = F) AS mailChimp,
    (SELECT count(promoCode) FROM o WHERE promoCode = G) AS google,

 
$results = mysqli_query($link, $sql);
while($row = mysqli_fetch_assoc($results)){
    $displayTotalAve = $row['displayTotal'] / $row['totalOrders'];
    $displayGrandTotalAve = $row['displayGrandTotal'] / $row['totalOrders'];
    $displaySentFloristAve = $row['displaySentFlorist'] / $row['totalOrders'];
    $revenueAfterFlorist = ($row['displayGrandTotal'] - $row['displaySentFlorist']) + (0.2 * $row['displaySentFlorist']);
    $profit = [($row['displayGrandTotal'] - $row['displaySentFlorist']) + (0.2 * $row['displaySentFlorist'])] - ($row['marketingCost'] + $row['operationalCost']);
    $profit = $revenueAfterFlorist - ($row['marketingCost'] + $row['operationalCost']);

        echo "<div class='display-category'>";
            echo "<div>";           
                echo "<p>Date</p>";
                echo "<p>" . $displayDate . "</p>";
            echo "</div>";

        echo "<div class='display-category'>";
            echo "<div>";           
                echo "<p>Number of Orders</p>";
                echo "<p>" . $row['totalOrders'] . "</p>";
            echo "</div>";
            echo "<div>";            
                echo "<p>Order Total</p>";
                echo "<p>Grand Total</p>";
                echo "<p>Sent to Florist</p>";
            echo "<div>";
            echo "<div>";            
                echo "<p>Sum</p>";
                echo "<p>" . $row['displayTotal'] . "</p>";
                echo "<p>" . $row['displayGrandTotal'] . "</p>";
                echo "<p>" . $row['displaySentFlorist'] . "</p>";
            echo "</div>";
            echo "<div>";            
                echo "<p>Average</p>";
                echo "<p>" . $displayTotalAve . "</p>";
                echo "<p>" . $displayGrandTotalAve . "</p>";
                echo "<p>" . $displaySentFloristAve . "</p>";
            echo "</div>";
        echo "</div>";

        echo "<div class='display-category'>";
            echo "<div>";            
                echo "<p>Marketing Cost</p>";
                echo "<p>Operational Cost</p>";
                echo "<p>Revenue After Florist</p>";
                echo "<p>PROFIT</p>";
            echo "<div>";
            echo "<div>";            
                echo "<p>" . $row['marketingCost'] . "</p>";
                echo "<p>" . $row['operationalCost'] . "</p>";
                echo "<p>" . $revenueAfterFlorist . "</p>";
                echo "<p>" . $profit . "</p>";
            echo "</div>";
        echo "</div>";

        echo "<div class='display-category'>";
            echo "<div>";
                echo "<p>Email Vendors</p>";
            echo "</div>";
            echo "<div>";            
                echo "<p>Constant Contact</p>";
                echo "<p>HyperMail</p>";
                echo "<p>SendGrid</p>";
                echo "<p>Sendy</p>";
                echo "<p>iContact</p>";
                echo "<p>MailChimp</p>";
            echo "<div>";
            echo "<div>";            
                echo "<p>A</p>";
                echo "<p>B</p>";
                echo "<p>C</p>";
                echo "<p>D</p>";
                echo "<p>E</p>";
                echo "<p>F</p>";
            echo "<div>";
            echo "<div>";            
                echo "<p>" . $constantContact . "</p>";
                echo "<p>" . $hyperMail . "</p>";
                echo "<p>" . $sendGrid . "</p>";
                echo "<p>" . $sendy . "</p>";
                echo "<p>" . $iContact . "</p>";
                echo "<p>" . $mailChimp . "</p>";
            echo "</div>";
        echo "</div>";

        echo "<div class='display-category'>";
            echo "<div>";
                echo "<p>Ads Vendors</p>";
            echo "</div>";
            echo "<div>";            
                echo "<p>Google</p>";
            echo "<div>";
            echo "<div>";            
                echo "<p>G</p>";
            echo "<div>";
            echo "<div>";            
                echo "<p>" . $google . "</p>";
            echo "</div>";
        echo "</div>";
    }
 


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