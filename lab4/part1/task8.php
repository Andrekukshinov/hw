<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/styleForLab6.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Task 1</title>
    <script src="lab4/part1/jsb4/part1/js/main.js"></script>
    <link rel="stylesheet" href="../../commonStyles.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js">
    </script>

</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Part 1
        </button>
        <ul class="dropdown-menu letsCenter">

            <li class="dropdown-item"><a href="task1.php">Task 1</a></li>
            <li class="dropdown-item"><a href="task2.php">Task 2</a></li>
            <li class="dropdown-item"><a href="task3.php">Task 3</a></li>
            <li class="dropdown-item"><a href="task4.php">Task 4</a></li>
            <li class="dropdown-item"><a href="task5.php">Task 5</a></li>
            <li class="dropdown-item"><a href="task6.php">Task 6</a></li>
            <li class="dropdown-item"><a href="task7.php">Task 7</a></li>
            <div class="activePage">
                <li class="dropdown-item activePage"><a href="#">Task 8</a></li>
            </div>
            <li class="dropdown-item"><a href="task9.php">Task 9</a></li>
        </ul>
    </div>
   <div style="width: 23%"></div>
    <button disabled type="button" class="btn btn-primary"><a style="color: black" href="../part2/task1.php">Part 2</a>
    </button>

    <div style="width: 53%"></div>
    <button type="button" class="btn btn-primary"><a style="color: black" href="index.php">Back to contents</a>
    </button>
</nav>

    <form action="" method="post">
        How old are u?
        <br>
        <label>
            <input type="radio" name="age" value="<20"/>
        </label>less than 20<br/>
        <label>
            <input type="radio" name="age" checked value="20-25"/>
        </label>20-25<br/>
        <label>
            <input type="radio" name="age" checked value="26-30"/>
        </label>26-30<br/>
        <label>
            <input type="radio" name="age" checked value=">30"/>
        </label>more than 30<br/>
        <button name="submit" type="submit"></button>
    </form>
<?php
if (isset($_POST['submit'])) {
    $answer = $_POST['age'];
    if ($answer == "<20") {
        echo 'You are younger than 20';
    } else if ($answer == "20-25") {
        echo 'from 20 to 25';
    }  else if ($answer == "26-30") {
        echo 'from 26 to 30';
    } else if ($answer == ">30") {
        echo 'You are older than 30';
    }
}
?>
</body>
</html>
