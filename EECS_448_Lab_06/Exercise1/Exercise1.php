<!DOCTYPE html>
<html>
    <head>
        <title>Exercise 1 </title>
        <style type=text/css>
		body   
		{  
			height: 125vh;  
			margin-top: 80px;  
			padding: 30px;  
			background-size: cover;  
			font-family: sans-serif;  
		}  
		header {  
			background-color: orange;  
			position: fixed;  
			left: 0;  
			right: 0;  
			top: 5px;  
			height: 30px;  
			display: flex;  
			align-items: center;  
			box-shadow: 0 0 25px 0 black;  
		}  
		header * {  
			display: inline;  
		}     
		header li {  
			margin: 20px;  
		}  
		header li a {  
			color: blue;  
			text-decoration: none;  
		}     

	</style>
    </head>
    <body>
    <header>
        <nav>
            <ul>
                <li><a href="../../index.html">Home</a></li>
				<li><a href="../Lab6.html">Lab 6 Home</a></li>
				<li><a href="">Exercise 1</a></li>
                <li><a href="../Exercise2/Quiz.html">Exercise 2</a></li>
                <li><a href="../Exercise3/customerFrontend.html">Exercise 3</a></li>
            </ul>
        </nav>
    </header>
        
    </body>
</html>


<?php
    echo "<table border=\"1\">";
    for ($i = 0; $i <= 100; $i++ )
    {
        echo "<tr>";
        if ($i == 0) {
            echo "<td></td>";
    }
        else {
            echo "<td>" .$i. "</td>";
        }

        for($j = 1; $j <= 100; $j++)
        {
            if($i == 0) {
            echo "<td>" .$j. "</td>";
            }
            else {
                echo "<td>" .$i*$j. "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>