<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 3</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="checkout">
    <button id="button" type="button" value="Back" onclick="back()">Back</button>
    </body>
</html>
<script>
    function back()
    {
        window.location.assign("customerFrontend.html");
    }
</script>
<?php
     
     $username = $_POST['username'];
     $password = $_POST['password'];
     
     $item1 = $_POST['item-1'];
     $item2 = $_POST['item-2'];
     $item3 = $_POST['item-3'];

     $shipping = $_POST['shipping'];
    
    echo "<h3> Welcome " .$username. "</h3>";
    echo "<p> Password: " .$password. "</p>";

     echo "<div class=\"receipt\">";
     echo "<table border=\"1\">";
     echo "<tr>";
     echo "<td> </td>";
     echo "<td> <b>Quantity</b> </td>";    
     echo "<td> <b>Cost Per Item</b> </td>";
     echo "<td> <b>Subtotal</b> </td>";
     echo "</tr>";
     echo "<tr>";
     echo "<td> <b>Krabby Patty</b> </td>";
     echo "<td>" .$item1. "</td>";    
     echo "<td> $1.00 </td>";
     echo "<td> $" .($item1 * 1). "</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<td> <b>Kelp Ring</b> </td>";
     echo "<td>" .$item2. "</td>";    
     echo "<td> $2.00 </td>";
     echo "<td> $" .($item2 * 2). "</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<td> <b>Kelp Shake</b> </td>";
     echo "<td>" .$item3. "</td>";    
     echo "<td> $3.00 </td>";
     echo "<td> $" .($item3 * 3). "</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<td> <b>Shipping</b> </td>";
     if($shipping == 0)
     {
        echo "<td colspan=\"2\"> Free </td>";
        echo "<td> $0.00 </td>";
     }
     else if($shipping == 50 && ($item1*1.25) != 0 && ($item3*1.50) != 0 && ($item3*2.00) != 0)
     {
        echo "<td colspan=\"2\"> Over Night </td>";
        echo "<td> $50.00 </td>";
     }
     else if($shipping == 5 && ($item1*1.25) != 0 && ($item3*1.50) != 0 && ($item3*2.00) != 0)
     {
        echo "<td colspan=\"2\"> Three Day </td>";
        echo "<td> $5.00 </td>";
     }
     else
     {
        echo "<td colspan=\"2\"> Free </td>";
        echo "<td> $0.00 </td>";
     }
     echo "</tr>";
     echo "<tr>";
     echo "<td colspan=\"3\"> <b>Total Cost</b> </td>";
     echo "<td> $" .(($item1 * 1) + ($item2 * 2) + ($item3 * 3) + ($shipping)). "</td>";
     echo "</tr>";
     echo "</table>";
     echo "</div>";
?>