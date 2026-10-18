<?php 

if(isset($_POST["submit"])){
    $marks_1 = $_POST["marks1"];
    $marks_2 = $_POST["marks2"];
    $marks_3 = $_POST["marks3"];

    $total_marks = $marks_1 + $marks_2 + $marks_3 ;
    $AVG_marks = $total_marks / 3 ;

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Examination System</title>
</head>
<body>
    <h1>Student Examination System</h1>
    <form method="POST">
        <label>Subject 1 Marks :</label>
        <input type="number" name="marks1"><br><br>

        <label>Subject 2 Marks :</label>
        <input type="number" name="marks2"><br><br>

        <label>Subject 3 Marks :</label>
        <input type="number" name="marks3"><br><br>

        <input type="submit" name="submit" value="submit">
    </form>

    <?php 
    echo "Examination Grade :" ;
    if(isset($_POST["submit"])){
        if ($AVG_marks >= 75){
            echo "Grade A";
        }
        elseif($AVG_marks >= 50){
            echo "Grade B";
        }
        else{
            echo "Fail";
        }
    }

    
    ?>
</body>
</html>