<!-- http://localhost/php-exercises/day2/exercise/exercise.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/exercise.css">
    <title>exercise</title>
</head>

<body>
    <!-- exercise 1 -->
    <!-- Create a PHP script which will accept two parameters from the form (name and surname). 
    The user must insert name and surname into the form to get the output:
    "Welcome Name Surname!" otherwise you will output the message: please insert your name, or please insert your surname. -->
    <p>exercise 1</p>
    <form method="POST">
        name: <input type="text" name="name" />
        surname: <input type="text" name="surname" />
        <input type="submit" name="submitExerciseOne" />
    </form>

    <?php
    if (isset($_POST["submitExerciseOne"])) {
        if ($_POST["name"] && $_POST["surname"]) {
            echo "Welcome " . $_POST['name'] . " " . $_POST['surname'] . "!";
        } else {
            echo "please insert your name, or please insert your surname.";
        }
    }
    ?>

    <!-- exercise 2 -->
    <!-- Create a function which takes two integer parameters - divide them and output the result on the screen. -->
    <p>exercise 2</p>
    <?php
    function divide_numbers($numOne, $numTwo)
    {
        return $numOne / $numTwo;
    }

    $result = divide_numbers(20, 10);
    echo $result;
    ?>

    <!-- Exercise 3 -->
    <!-- Make a function that will accept 3 parameters, which are the grades from Math, Physics and English. 
    then make the calculation and print them on the screen. Make sure that the variables are numbers.
    E.g. If you put the following grades 3, 4, 5 the result should be:Sum:12 Average: 4 -->
    <p>exercise 3</p>
    <?php
    function calculate_grades($math, $physiscs, $english)
    {
        return ($math + $physiscs + $english) / 3;
    }

    $grade_result = calculate_grades(3, 4, 5);
    echo $grade_result;
    ?>

    <!-- Exercise 4 -->
    <!-- Create a function that calculates the area and volume of a box.
    Formulas:
    area = width x height
    volume = width x height x depth
    Pass three different numbers as arguments and get calculated results using the return statement.
    You should get the following results:
    The area of the box is: 14
    The volume of the box is: 70 -->
    <p>exercise 4</p>
    <?php
    function calculate_box($box_width, $box_height, $box_depth)
    {
        echo "The area of the box is: " . $box_width * $box_height;
        echo "<br>";
        echo "The volume of the box is: " . $box_width * $box_height * $box_depth;
    }

    calculate_box(2, 7, 5);
    ?>

    <!-- Exercise 5 -->
    <!-- Create a function that will return the number of minutes, in hours and minutes. The function should accept only one argument.
    E.g. If we call the function and pass the number of minutes 200 we should get the message "200 minutes = 3 hour(s) and 20 minute(s)." -->
    <p>exercise 5</p>
    <?php
    function get_number_of_minute($time)
    {
        // getting "hour(s)" and "minute(s)"
        $hour = floor($time / 60);
        $mimute = $time % 60;

        // make a part of the sentence i want to print
        if ($hour > 1) {
            $hour_result = "$hour hours";
        } else {
            $hour_result = "$hour hour";
        }

        if ($mimute > 1) {
            $minute_result = "$mimute mimutes";
        } else {
            $minute_result = "$mimute mimute";
        }

        // echo result
        echo "$time minutes = $hour_result and $minute_result";
    }

    get_number_of_minute(200);
    ?>

    <!-- Exercise 6 -->
    <!-- Create a form with input fields for your firstname, lastname and age. 
    Extract the values from each input field and display them all in a separate div. Use the POST method.
    If the length of your name is larger than 5 characters, change the text colour to green. 
    Otherwise, change the text-colour to red.
    Now extend with adding a new input field "hobbies". 
    Use the GET method to extract and display the hobbies -->
    <p>exercise 6</p>
    <form method="POST">
        first name: <input type="text" name="firstname" />
        las name: <input type="text" name="lastname" />
        age: <input type="text" name="age" />
        <input type="submit" name="submitExerciseSixPartOne" />
    </form>

    <?php
    if (isset($_POST["submitExerciseSixPartOne"])) {

        // "strlen()" returs byte count, not the lenfht of characters.
        // mb_strlen()" returs the length of characters. it's okay to insert full-width characters like Japanese.
        $name_length = mb_strlen($_POST["firstname"]) + mb_strlen($_POST["lastname"]);
        if ($name_length > 5) {
            echo "<div class='text-success'>" . $_POST['firstname'] . "</div>";
            echo "<div class='text-success'>" . $_POST['lastname'] . "</div>";
        } else {
            echo "<div class='text-danger'>" . $_POST['firstname'] . "</div>";
            echo "<div class='text-danger'>" . $_POST['lastname'] . "</div>";
        }
        echo "<div>" . $_POST['age'] . "</div>";
    }
    ?>

    <br>

    <form method="GET">
        hobbies: <input type="text" name="hobbies" />
        <input type="submit" name="submitExerciseSixPartTwo" />
    </form>

    <?php
    if (isset($_GET["submitExerciseSixPartTwo"])) {
        echo "<div>" . $_GET['hobbies'] . "</div>";
    }
    ?>
    <a href="exercise.php">reset</a>

</body>

</html>