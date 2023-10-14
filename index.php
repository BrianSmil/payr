<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll System</title>
    <link rel="stylesheet" href="CSS/main.css">
</head>

<body>
    <div class="container">
        <h3>Payroll Programe in JavaScript</h3><br>
        <label for="employees_name">Employee's Name</label>
        <input type="text" name="emp_name" id="emp_name"><br>
        <label for="daily_rate">Daily Rate</label>
        <input type="text" name="daily_rate" id="daily_rate"><br>
        <label for="days work">Number of Days Work</label>
        <input type="text" name="" id="no_days_work"><br>
        <button onclick="solve_salary()">Solve salary</button><br>
        <p id="demo"></p>
        <p id="demo2"></p>
    </div>

</body>

</html>