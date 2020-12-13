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
            <div class="activePage"><li class="dropdown-item activePage"><a href="#">Task 4</a></li></div>
            <li class="dropdown-item"><a href="task5.php">Task 5</a></li>
            <li class="dropdown-item"><a href="task6.php">Task 6</a></li>
            <li class="dropdown-item"><a href="task7.php">Task 7</a></li>
            <li class="dropdown-item"><a href="task8.php">Task 8</a></li>
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
<?php
if (!isset($_REQUEST["login"]) && !isset($_REQUEST["pass"])) {
    ?>
    <form action="" method="post">
        <label>set name
            <input value="login" name="login" type="text">
        </label>
        <label>set age
            <input placeholder="pass" name="pass" type="password">
        </label>
        <button type="submit"></button>
    </form>
    <?php
}
?>
<?php
/**
 * @param $handle
 * @param array $fileData
 * @return array
 */
function isRegistered($handle, array $fileData)
{
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $line = trim($line);
            array_push($fileData, $line);
        }

        fclose($handle);
    } else {
        // error opening the file.
    }
    return $fileData;
}

if (isset($_POST["pass"]) && isset($_POST["login"])) {
    $pass = strip_tags($_POST["pass"]);
    $login = strip_tags($_POST["login"]);
    //read file line by line
    $handle = fopen("data.txt", "r");
    $fileData = array();
    $fileData = isRegistered($handle, $fileData);

    if($fileData[0] == $login && $fileData[1] == $pass) {
        echo "congrats " .$login." success!";
    } else {
        echo "fail!";
    }
//checkbox
    //<form action="result.php" method="post">
//  Answer 1 <input type="radio" name="ans" value="ans1" /><br />
//  Answer 2 <input type="radio" name="ans" value="ans2"  /><br />
//  Answer 3 <input type="radio" name="ans" value="ans3"  /><br />
//  Answer 4 <input type="radio" name="ans" value="ans4"  /><br />
//  <input type="submit" value="submit" />
//</form>
//
//PHP code:
//
//<?php
//$answer = $_POST['ans'];
//if ($answer == "ans1") {
//    echo 'Correct';
//}
//else {
//    echo 'Incorrect';
//}
///**/>

}
?>
</body>
</html>
