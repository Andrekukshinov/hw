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
            <li class="dropdown-item"><a href="task1.php">Task 1</a></li>
            <li class="dropdown-item"><a href="task2.php">Task 2</a></li>
            <li class="dropdown-item"><a href="task3.php">Task 3</a></li>
            <div class="activePage"><li class="dropdown-item activePage"><a href="#">Task 4</a></li></div>
            <li class="dropdown-item"><a href="task5.php">Task 5</a></li>
            <li class="dropdown-item"><a href="task6.php">Task 6</a></li>
        </ul>
    </div>

    <div style="width: 53%"></div>
    <button type="button" class="btn btn-primary"><a style="color: black" href="../../index.php">Back to contents</a>
    </button>
</nav>
<?php
$fruits = array ();
$length = rand(10, 14);
echo $length;

for ($runner = 0; $runner < $length; ++$runner) {
    array_push($fruits, rand(-900, 500));
}
echo"\n";
print_r($fruits);
$max = -901;
$maxIndex = -1;
$min = 501;
$minIndex = -1;
for ($runner = 0; $runner < $length; ++$runner) {
    if($fruits[$runner] > $max) {
        $max = $fruits[$runner];
        $maxIndex = $runner;
    }
    if($fruits[$runner] < $min) {
        $min = $fruits[$runner];
        $minIndex = $runner;
    }
}
$tempMin = $fruits[$minIndex];
$fruits[$minIndex] = $max;
$fruits[$maxIndex] = $tempMin;

echo $max;
echo"\n";
echo $min;
echo"\n";
print_r($fruits);
?>
</body>
</html>
