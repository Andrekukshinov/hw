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
    <script src="../js/main.js"></script>
    <link rel="stylesheet" href="../../commonStyles.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">

    <button type="button" class="btn btn-primary"><a style="color: black" href="../part2/task1.html">Part 1</a>
    </button>

    <div style="width: 23%"></div>
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Part 2
        </button>
        <ul class="dropdown-menu letsCenter">
            <div class="activePage"><li class="dropdown-item activePage"><a href="#">Task 1</a></li></div>
            <li class="dropdown-item"><a href="task2.php">Task 2</a></li>
            <li class="dropdown-item"><a href="task3.php">Task 3</a></li>
            <li class="dropdown-item"><a href="task4.php">Task 4</a></li>
            <li class="dropdown-item"><a href="task5.php">Task 5</a></li>
            <li class="dropdown-item"><a href="task6.php">Task 6</a></li>
        </ul>
    </div>

    <div style="width: 53%"></div>
    <button type="button" class="btn btn-primary"><a style="color: black" href="../../index.php">Back to contents</a>
    </button>
</nav>
<?php
    $runTill = 9;
    $result = 0;
    for ($runner = 1; $runner <= $runTill; ++$runner) {
        $result+=$runner;
    }
    echo $result;
?>
</body>
</html>
