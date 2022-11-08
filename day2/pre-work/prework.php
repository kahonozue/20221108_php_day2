<!-- http://localhost/php-exercises/day2/pre-work/prework.php -->

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
   </head>
   <body>

        <p>POST METHOD</p>
       <form action="prework.php" method ="POST">
           Name: <input type="text"  name="name" />
           Age: <input type ="text" name="age" />
           <input  type="submit" name="submit"  />
       </form>
       <?php
       if( isset($_POST['submit']))
       {
           if( $_POST["name"] || $_POST["age"] )
           {
               echo "Welcome ". $_POST[ 'name']. "<br />";
               echo "You are " . $_POST['age']. " years old.";
           }
       }
       ?>

        <p>GET METHOD</p>
       <form action="prework.php" method= "GET">
           Name: <input type="text"  name="name" />
           Age: <input type= "text" name="age" />
           <input  type="submit" name="submit" />
       </form>
       <?php
       if(isset($_GET[ 'submit']))
       {
           if( $_GET["name"] || $_GET["age" ] )
           {
               echo "Welcome ". $_GET['name']. "<br />";
               echo "You are ". $_GET['age' ]. " years old.";
           }
       }
       ?>
       
       <br>

        <?php
       function capFirstString($str)
       {
           $cap = ucfirst($str);
           echo  $cap;
       }
       capFirstString("hello world");
       ?>

       <br>

        <?php
       function addFunction($num1, $num2)
       {
           $sum = $num1 + $num2;
           return  $sum;
       }
       $return_value = addFunction(10, 20);
       echo "Returned value from the function: $return_value";
       ?>

       <br>

       <?php
    function formatted_dump($content)
    {
      echo '<pre>';
     var_dump($content);
     echo '</pre>';
    }

    $name = 'John';
    function fullName(){
      $surname = 'Doe';
      $fullName = $GLOBALS['name'] . ' ' . $GLOBALS['surname'];
      return $fullName;
    }
    formatted_dump($GLOBALS);
    ?>

    <br>

    <?php
       $date = date("l");

        //"l" will return the full name of the day of the week
       if ($date == "Friday")
           echo "It's Friday, weekend is around the corner... :-)";
       else
           echo "Don't watch the clock; do what it does, keep on going!" ;
       ?>

       <br>

       <?php
       $today = date("N");

        //"N" returns day of the week as numbers mon=1, sun=7
       if ($today == 1)
           echo "It's Monday, let's get the week started.";
       elseif ($today == 2)
           echo "It's Tuesday, a perfect day to learn conditional statements";
       else
           echo "Don't watch the clock; do what it does, keep on going!";
       ?>

       <br>

       <?php
       $today = date("D");
       switch ($today) {
           case "Mon":
               echo "Today is Monday";
               break;
           case "Tue":
               echo "Today is Tuesday";
               break;
           case "Wed":
               echo "Today is Wednesday";
               break;
           case "Thu":
               echo "Today is Thursday";
               break;
           case "Fri":
               echo "Today is Friday";
               break;
           case "Sat":
               echo "Today is Saturday";
               break;
           case "Sun":
               echo "Today is Sunday";
               break;
           default:
               echo "If you seeing this message, something went wrong :)";
       }
       ?>

       <br>

       <?php
        $session = "John";
        $user = ($session == "John")? $session : "not logged in";
        echo $user.'<br>';

        function confirm(){
         echo "affirmative";
        }
        function deny(){
         echo "negative";
        }
        //is 10 bigger than 5?
        (10 > 5) ? confirm() : deny();
        ?>

        <br>

        <?php

$varOne = 4>3;

$varTwo = 4<3;

$varThree = null;


echo ($varOne ?: "The condition was false or null") ."<br>";

//returns 1 (true)


echo ($varTwo ?: "The condition was false or null") ."<br>";

// returns "The condition was false or null"


echo ($varThree ?: "The condition was false or null") ."<br>";

// returns "The condition was false or null"


// Throws an error because the condition doesn't exist and shows the second result. Uncomment to see:

//echo ($varFour ?: "The condition was false or null") ."<br>";


//To check if the condition exists use @ or isset().

echo (@$varFour ?: "The condition doesn't exist") ."<br>";

//same as:

//echo (isset($varFour) ?: "The condition doesn't exist");

?>

<br>

<?php
$var1 = 42;

$var2 = null;


echo ($var1 ?? "The condition doesn't exist or is null") ."<br>";

//returns 42 (value of $var1)


echo ($var2 ?? "The condition doesn't exist or is null") ."<br>";

// returns "The condition doesn't exist or is null"


echo ($var3 ?? "The condition doesn't exist or is null") ."<br>";

// returns "The condition doesn't exist or is null"
?>
   </body>
</html>