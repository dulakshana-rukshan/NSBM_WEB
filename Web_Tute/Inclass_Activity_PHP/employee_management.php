<?php 

if(isset($_POST["submit"])){
    $employee_name = $_POST["ename"];
    $employee_salary = $_POST["salary"];

    if($employee_salary >= 100000){
        $bonus = $employee_salary * 0.15;
    }
    else{
        $bonus = $employee_salary * 0.05;
    }

    $total_salary = $employee_salary + $bonus;

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
</head>
<body>
    <h1>Employee Management System</h1>

    <form method="POST">
        <label>Employee Name :</label>
        <input type="text" name="ename"><br><br>

        <label>Employee Salary :</label>
        <input type="number" name="salary"><br><br>

        <input type="submit" name="submit" value="Calculate Bonus">

    </form>

    <?php 
    if(isset($_POST["submit"])){
        echo "<h1>Employee Salary Management System</h1>";

        echo "Employee Name :".htmlspecialchars($employee_name)."<br>";
        echo "Employee bonus :".number_format($bonus,2)."<br>" ;
        echo "Total Salary : ".number_format($total_salary,2)."<br>" ;
    }
    
    
    ?>

</body>
</html>