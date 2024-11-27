<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
    <style>
        .container{
            max-width: 80%;
            background-color: red;
            margin: auto;
        }
    </style>
</head>
<body>
    <h1>Lets learn about PHP</h1>
    <div class="container">
        This is container
        <?php
    $age = 6;
    if($age>18) {
        echo("You can go to party");
    }
    else if($age == 7){
        echo "You are 7 years old";
    }
    else if($age == 6) {
        echo("you are 6 years old");
    }
    else {
        echo("You won't");
    }
        ?>

        <?php
        $language = array("python","c++","php","node.js","react.js","c");
        echo $language[4];
        ?>
    <?php
        echo "\n\n\n\n\n\n\n\n";
        echo "Loops \n\n";
        $a = 0;

        while ($a <= 10) {
            # code...
            echo "The value of a is: ";
            echo $a;
            $a++;
            echo "\n\n";
        };

        echo "iterating arrays in PHP using while loop";
        $language = array("python","c++","php","node.js","react.js","c");
        $a = 0;

        echo "\n";
        while ($a <= count($language)){
            echo "<br> The value of language is: ";
            echo $language[$a];
            $a++;
        };

        echo "\n\n\n\n";
        $a = 0;
        do {
            echo "\n The value of language is: ";
            echo $language[$a];
            $a++;
        } while ($a < 10);

        for($a = 0;$a<=count($language);$a++) {
            echo "<br> The value of a is: ";
            echo $language[$a];
        };
echo "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAa";
        foreach ($language as $value) {
            echo "\n The value from foreach is ";
            echo $value;
        };
    ?>
    <?php 

        function print_number(number) {
            echo "\n Your number is ";
            echo $number;
        };
        print_number(40);
        print_number(89);
    ?>

    </div>
</body>
</html>
