<!DOCTYPE html>
<html> 
    <head> 
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
				<li><a href="../Exercise1/Exercise1.php">Exercise 1</a></li>
                <li><a href="">Exercise 2</a></li>
                <li><a href="../Exercise3/customerFrontend.html">Exercise 3</a></li>
            </ul>
        </nav>
    </header>
    <h1>Beyblade Quiz</h1>
    <form action="Quiz.php" method="post">
        <ol>
            <li>
                <h3> What is the name of this Blader? </h3>
                <div>
                    <img src="image1.jfif" style="width:400px;height:300px;">
                </div>
                
                <div>
                    <input type="radio" name="question-1" id="question-1-A" value="A" disabled/>
                    <label for="question-1-A">A) Benkei</label>
                </div>
                <div>
                    <input type="radio" name="question-1" id="question-1-B" value="B" disabled/>
                    <label for="question-1-B">B) Doji</label>
                </div>
                
                <div>
                    <input type="radio"  name="question-1" id="question-1-C" value="C" disabled/>
                    <label for="question-1-answers-C">C) Gingka Hagane</label>
                </div>
                
                <div>
                    <input type="radio"  name="question-1" id="question-1-D" value="D" disabled/>
                    <label for="question-1-answers-D">D) Ryuga</label>
                </div>
                <div>
                    <?php
                        $answer1 = $_POST['question-1'];
                        echo "You Answered: " .$answer1. "<br>";
                        $correctAnswer1 = "D";
                        echo "Correct Answer: " .$correctAnswer1. "<br>";
                    ?>
                </div>
            </li>
            <li>
                <h3> What is the name of this Blader? </h3>
                <div>
                    <img src="image2.jfif" style="width:400px;height:300px;">
                </div>
                
                <div>
                    <input type="radio" name="question-2" id="question-2-A" value="A" disabled/>
                    <label for="question-2-A">A) Gingka Hagane</label>
                </div>
                <div>
                    <input type="radio" name="question-2" id="question-2-B" value="B" disabled/>
                    <label for="question-2-B">B) Kyoya Tategami</label>
                </div>
                
                <div>
                    <input type="radio"  name="question-2" id="question-2-C" value="C" disabled/>
                    <label for="question-2-answers-C">C) Tsubasa</label>
                </div>
                
                <div>
                    <input type="radio"  name="question-2" id="question-2-D" value="D" disabled/>
                    <label for="question-2-answers-D">D) Kenta Yumiya</label>
                </div>
                <?php
                        $answer2 = $_POST['question-2'];
                        echo "You Answered: " .$answer2. "<br>";
                        $correctAnswer2 = "A";
                        echo "Correct Answer: " .$correctAnswer2. "<br>";
                ?>
            </li>
            <li>
                <h3> What is the name of this Blader? </h3>
                <div>
                    <img src="image3.png" style="width:400px;height:300px;">
                </div>
                
                <div>
                    <input type="radio" name="question-3" id="question-3-A" value="A" disabled/>
                    <label for="question-3-A">A) Kyoya Tategami</label>
                </div>
                <div>
                    <input type="radio" name="question-3" id="question-3-B" value="B" disabled/>
                    <label for="question-3-B">B) Gingka Hagane</label>
                </div>
                
                <div>
                    <input type="radio"  name="question-3" id="question-3-C" value="C" disabled/>
                    <label for="question-3-answers-C">C) Hikaru Hasama</label>
                </div>
                
                <div>
                    <input type="radio"  name="question-3" id="question-3-D" value="D" disabled/>
                    <label for="question-3-answers-D">D) Tetsuya Watarigani</label>
                </div>
                <?php
                        $answer3 = $_POST['question-3'];
                        echo "You Answered: " .$answer3. "<br>";
                        $correctAnswer3 = "A";
                        echo "Correct Answer: " .$correctAnswer3. "<br>";
                ?>
            </li>
            <li>
                <h3> What is the name of this Blader? </h3>
                <div>
                    <img src="image4.jfif" style="width:400px;height:300px;">
                </div>
                
                <div>
                    <input type="radio" name="question-4" id="question-4-A" value="A" disabled/>
                    <label for="question-4-A">A) Ryuga</label>
                </div>
                <div>
                    <input type="radio" name="question-4" id="question-4-B" value="B" disabled/>
                    <label for="question-4-B">B) Kenta Yumiya</label>
                </div>
                
                <div>
                    <input type="radio"  name="question-4" id="question-4-C" value="C" disabled/>
                    <label for="question-4-answers-C">C) Tsubasa</label>
                </div>
                
                <div>
                    <input type="radio"  name="question-4" id="question-4-D" value="D" disabled/>
                    <label for="question-4-answers-D">D) Yu Tendo</label>
                </div>
                <?php
                        $answer4 = $_POST['question-4'];
                        echo "You Answered: " .$answer4. "<br>";
                        $correctAnswer4 = "B";
                        echo "Correct Answer: " .$correctAnswer4. "<br>";
                ?>
            </li>
            <li>
                <h3> What is the name of this Blader? </h3>
                <div>
                    <img src="image5.jfif" style="width:400px;height:300px;">
                </div>
                
                <div>
                    <input type="radio" name="question-5" id="question-5-A" value="A" disabled/>
                    <label for="question-5-A">A) Benkei</label>
                </div>
                <div>
                    <input type="radio" name="question-5" id="question-5-B" value="B" disabled/>
                    <label for="question-5-B">B) Doji</label>
                </div>
                
                <div>
                    <input type="radio"  name="question-5" id="question-5-C" value="C" disabled/>
                    <label for="question-5-answers-C">C) Madoka</label>
                </div>
                
                <div>
                    <input type="radio"  name="question-5" id="question-5-D" value="D" disabled/>
                    <label for="question-5-answers-D">D) Hikaru Hasama</label>
                </div>
                <?php
                        $answer5 = $_POST['question-1'];
                        echo "You Answered: " .$answer5. "<br>";
                        $correctAnswer5 = "C";
                        echo "Correct Answer: " .$correctAnswer5. "<br>";
                ?>
            </li>
        </ol>
        <button id="button" type="button" value="Back" onclick="back()">Back</button>
    </form>
</body> 
</html> 
<script>
    function back()
    {
        window.location.assign("Quiz.html");
    }
</script>
<?php 
//access the global array called $_POST to get the values from the text fields 
 
    $answer1 = $_POST['question-1'];
    $answer2 = $_POST['question-2'];
    $answer3 = $_POST['question-3'];
    $answer4 = $_POST['question-4'];
    $answer5 = $_POST['question-5'];

    $score = 0;
    $total = 5;
    
    if($answer1 == "D")
    {
        ++$score;
    }
    if($answer2 == "A")
    {
        ++$score;
    }
    if($answer3 == "A")
    {
        ++$score;
    }
    if($answer4 == "B")
    {
        ++$score;
    }
    if($answer5 == "C")
    {
        ++$score;
    }

    $finalScore = ($score/$total) * 100;
    $finalScore = (string)$finalScore."%";
    echo "Total Score: " .$score. "<br>";
    echo "Percentage: " .$finalScore. "<br>";
?> 