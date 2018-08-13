<!DOCTYPE html>
<html>
    <head>
        
        <meta charset ="utf-8">
        <title></title>
        
    </head>
    
    <body>
    
        
        <?php
        
////        you can write HTML inside of PHP
//        echo "<h1>Hello, this is PHP.</h1>";
//        echo "<br>";
//        
////        echo is basically "print"
////        To create a variable, you use $(variablename)
//        
//        $phrase = "Giraffe Academy";
//        echo "Giraffe Academy <br>";
//    
//        
////        or
//        
//        echo $phrase;
//        echo "<br>";
//        echo strtolower($phrase);
//        echo "<br>";
//        echo strtoupper($phrase);
//        echo "<br>";
//        echo strlen($phrase);
//        echo "<br>";
////        You can check the index of things too
//        echo $phrase[2];
//        echo "<br>";
////        you can also assign the index to be another thing
//        $phrase[0] = "B";
//        echo $phrase;
//        $phrase[0] = "G";
//        echo "<br>";
////        This will replace a string in a variable. Note that it doesn't permanently change the variable.
//        echo str_replace("Giraffe", "Griffin", $phrase);
//        echo "<br>";
//        echo $phrase;
//        echo "<br>";
////        This will allow us to grab just a section of the string
//        echo substr($phrase, 8);
//        echo "<br>";
////        the output is Academy because it grabbed everything after index 8
//        echo substr($phrase, 8, 3);
////            the output for this is aca because the second number is for length
        
        
        
        
        
        
        
        
////        WORKING WITH NUMBERS IN PHP.
//        
//        
//        echo 40;
//        echo "<br>";
//        echo -40.28;
//        echo "<br>";
////        the output will be the answer
//        echo 5 * 9;
//        echo "<br>";
////        PHP will follow order of operations
//        echo (4 + 5) * 10;
//        echo "<br>";
////        incriment by one with ++ or --
//        $num = 10;
//        $num ++;
//        echo $num;
//        echo "<br>";
//        $num += 25;
//        echo $num;
//        echo "<br>";
////        abs will give you the absolute value
//        echo abs(-20);
//        echo "<br>";
////        exponents
//        echo pow(2, 4);
//        echo "<br>";
//        echo sqrt(144);
//        echo "<br>";
//        echo round(3.6);
        
        ?>

        
        
        

<!--        Getting user input-->
        
        
        
        
        
<!--        Action denotes which PHP file is going to handle the form. Method is what this form is actually going to do.-->
        
        <form action ="site.php" method="get">
        Oi bruv: <input type="text" name="name">
            <br>
            age: <input type="number" name ="age">
            <br>
            <input type = "submit">
        </form>
        
<!--        $_GET will get information from the indicated input. Since we named that form up there "name", it gets it from name.-->
        
        your name is: <?php echo $_GET["name"] ?>
        <br>
        your age is: <?php echo $_GET["age"] ?>
        
        
        
    </body>
</html>