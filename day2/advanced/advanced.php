<!-- http://localhost/php-exercises/day2/advanced/advanced.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/advanced.css">
    <title>exercise</title>
</head>

<body>
    <form method="GET">
        degree(°F): <input type="text" name="degree" />
        <input type="submit" name="submit" />
        <a href="advanced.php">reset</a>
    </form>

    <?php
    // Functions:
    // 1- Create a function that can convert °F in °C and show the result on the screen.
    // how to caluculate °C from °F↓
    // C＝T/1.8－32/1.8
    function convert_degree($f)
    {
        $C = (ceil(($f / 1.8 - 32 / 1.8) * 10) / 10);
        return $C;
    }

    global $degree_result;

    global $img;
    global $message;
    global $background_color;
    if (isset($_GET["submit"])) {
        if ($_GET["degree"]) {

            $degree_result = convert_degree($_GET['degree']);
            // 2- You can play with the results creating conditionals and showing on the screen a different img and message depending on the temp:
            // From 0°C to 5°C: Very cold
            // From 6°C to 10°C: Cold
            // From 11°C to 15°C: Pleasant
            // From 16°C to 20°C: Warm
            // Above 21°C: Hot
            // Use Bootstrap to show yours results on the screen.
            if ($degree_result >= 0 && $degree_result < 6) {
                $img = "very_cold.jpg";
                $message = "It is very cold today. <br>Wear as many cloths as you can, and keep warm.";
                $background_color = "bg-info";
            } else if ($degree_result >= 6 && $degree_result < 11) {
                $img = "cold.jpg";
                $message = "It is cold today. ";
                $background_color = "bg-primary";
            } else if ($degree_result >= 11 && $degree_result < 16) {
                $img = "pleasant.jpg";
                $message = "It is pleasant day. <br>You should enjoy sports under the sun.";
                $background_color = "bg-warning";
            } else if ($degree_result >= 16 && $degree_result < 21) {
                $img = "warm.jpg";
                $message = "It warm today. <br>Maybe it's time to turn air conditioner on.";
                $background_color = "bg-success";
            } else if ($degree_result >= 21) {
                $img = "hot.jpg";
                $message = "It too hot today. <br>Nice weather to eat ice cream.";
                $background_color = "bg-danger";
            } else {
                $img = "error.png";
                $message = "You need to put bigger number. <br>It is extremely cold.";
                $background_color = "bg-secondary";
            }

            echo "<div class='resultBlock d-flex align-items-center justify-content-around $background_color'>
                 <div class='imgBlock d-flex'><img src='$img' alt='$img'></div>
                <div class='h2'>
                    <div>$degree_result °C</div>
                    <p></p>
                    <div>$message</div>
                </div>
            </div>";
        }
    }


    ?>

</body>

</html>